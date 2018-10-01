<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 29/03/2018
 * Time: 3:42 PM
 */

namespace App\Services\Impl;



use App\Entities\VerticalImages;
use App\Services\VerticalService;
use App\Services\FileSystemService;
use App\Repositories\VerticalRepo;
use App\Services\Impl\UploadService;
use Doctrine\Common\Collections\ArrayCollection;

class VerticalServiceImpl implements VerticalService
{

    private $uploadService,$fileSystemService;
    private static $verticalRepo;
    public function __construct(VerticalRepo $verticalRepo,UploadService $uploadService, FileSystemService $fileSystemService)
    {
        self::$verticalRepo = $verticalRepo;
        $this->uploadService = $uploadService;
        $this->fileSystemService = $fileSystemService;
    }

    public function getAllActiveVerticals()
    {
        // TODO: Implement getAllActiveVerticals() method.
    }

    public function getAllVerticals()
    {
        return self::$verticalRepo->getAllVerticals();
    }

    public function getVertical($id)
    {
        $vertical = self::$verticalRepo->getVertical($id);
        foreach ($vertical->getScenarioDetail() as $scenarioDetail) {
            $imageUrl = $this->fileSystemService->getImages('CloudScenarioDetail', $scenarioDetail->getId());
            $scenarioDetail->setImage($imageUrl);
        }
        return $vertical;
    }

    public function getVerticalBySolutionAndSolutionIn($id, $data){
        $vertical = self::$verticalRepo->getVertical($id);
        if(null!=$data['solution-tag']){
            foreach ($vertical->getScenarioDetail() as $scenarioDetail) {
                if($this->checkTag($scenarioDetail, $data['solution-tag'])){
                    $imageUrl = $this->fileSystemService->getImages('CloudScenarioDetail', $scenarioDetail->getId());
                    $scenarioDetail->setImage($imageUrl);
                }else{
                    $vertical->removeScenarioDetail($scenarioDetail);
                }
            }
        }
        return $vertical;   
    }

    public function getVerticalsBySolution($id){
        $tagCategories = self::$verticalRepo->getScenarioDetail($id);
        foreach ($tagCategories as $tagCategory) {
            $imageUrl = $this->fileSystemService->getImages('CloudScenarioDetail', $tagCategory->getScenarioId()->getId());
            $tagCategory->getScenarioId()->setImage($imageUrl);    
        }
        return $tagCategories;
    }

    private function checkTag($scenarioDetail, $tagArr){
        if(!$scenarioDetail->getScenarioTagId()->isEmpty()){
            foreach ($scenarioDetail->getScenarioTagId() as $scenarioTag) {
                if(in_array($scenarioTag->getTagId()->getId(), $tagArr)){
                    return true;
                }
            }
        }
        return false;
    }

    public function getIsActive()
    {
        return self::$verticalRepo->getIsActive();
    }

    public static function getActiveVerticals(){
        return self::$verticalRepo->getIsActive();
    }
    public function addVertical($data)
    {
        // TODO: Implement addVertical() method.
    }

    public function updateVertical($data, $id)
    {
        // $vertical = self::$verticalRepo->getVertical($id);
        // $verticalImage = $vertical->getVerticalImages();
        // if(null!=$verticalImage){
        //     self::$verticalRepo->removeVerticalImage($verticalImage);
        // }
        // $newVerticalImage = new VerticalImages();
        // $image_url = $this->uploadService->UploadFile($data,'image','Vertical/');

        // $image_url?$newVerticalImage->setImage($image_url):'';
        // $newVerticalImage->setVerticalId($vertical);
        // $vertical->setVerticalImages($newVerticalImage);
        // return self::$verticalRepo->saveOrUpdate($vertical);

        $vertical = self::$verticalRepo->getVertical($id);
        $verticalImage = $vertical->getVerticalImages();
        if(null!=$verticalImage){
            self::$verticalRepo->removeVerticalImage($verticalImage);
        }
        $newVerticalImage = new VerticalImages();
        $image_url = $this->uploadService->UploadFile($data,'image','Vertical/');
        $m_image_url = $this->uploadService->UploadFile($data,'m-image','Vertical/Banner/');

         $tiles_image = $image_url?$image_url:$data->get('image-txt');
         $banner_image = $m_image_url?$m_image_url:$data->get('m-image-txt');

        $img_arr = ['tiles'=>$tiles_image,'banner'=>$banner_image];
        $JSON_IMAGE_URL = json_encode($img_arr,JSON_UNESCAPED_SLASHES);

        //$image_url?$newVerticalImage->setImage($JSON_IMAGE_URL):'';
        $newVerticalImage->setImage($JSON_IMAGE_URL);
        $newVerticalImage->setVerticalId($vertical);
        $vertical->setVerticalImages($newVerticalImage);
        return self::$verticalRepo->saveOrUpdate($vertical);
    }

    public function getActiveVerticalById($id)
    {
        // TODO: Implement getActiveVerticalById() method.
    }

    public function verticalList()
    {
        // TODO: Implement verticalList() method.
    }

    public function getVerticalsBySolutionIn($id, $data){
        if(null!=$data['solution-tag']){
            $tagCategoriesColl = new ArrayCollection();
            $tagCategories = self::$verticalRepo->getScenarioDetailByTagIn($data['solution-tag']); 
            foreach ($tagCategories as $tagCategory) {
                if($this->checkDataInCollection($tagCategoriesColl, $tagCategory->getScenarioId())){
                    $imageUrl = $this->fileSystemService->getImages('CloudScenarioDetail', $tagCategory->getScenarioId()->getId());
                    $tagCategory->getScenarioId()->setImage($imageUrl);
                    $tagCategoriesColl->add($tagCategory);
                }
            }
            return $tagCategoriesColl;
        }else{
            $this->getVerticalsBySolution($id);
        }
    }

    private function checkDataInCollection($collectionArr, $data){
        foreach ($collectionArr as $collection) {
            if($collection->getScenarioId()==$data){
                return false;
            }
        }
        return true;
    }

}