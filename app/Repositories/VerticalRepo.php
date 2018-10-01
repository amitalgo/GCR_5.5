<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 29/03/2018
 * Time: 3:43 PM
 */

namespace App\Repositories;

use App\Entities\ScenarioTitle;
use App\Entities\VerticalImages;
use App\Entities\TagCategory;
use LaravelDoctrine\ORM\Facades\Doctrine;
use Doctrine\ORM\EntityManagerInterface;
class VerticalRepo
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllActiveVerticals()
    {
        // TODO: Implement getAllActiveVerticals() method.
    }

    public function getAllVerticals()
    {
        return $this->em->getRepository(ScenarioTitle::class)->findAll();
    }

    public function getVertical($id)
    {
        return $this->em->getRepository(ScenarioTitle::class)->find($id);
    }

    public function getIsActive()
    {
        return $this->em->getRepository(ScenarioTitle::class)->findBy(['status' =>1]);
    }

    public function addVertical($data)
    {
        // TODO: Implement addVertical() method.
    }

    public function updateVertical($data, $id)
    {
        // TODO: Implement updateVertical() method.
    }

    public function getActiveVerticalById($id)
    {
        // TODO: Implement getActiveVerticalById() method.
    }

    public function verticalList()
    {
        // TODO: Implement verticalList() method.
    }

    public function getVerticalImageByVerticalId($id){
        return $this->em->getRepository(VerticalImages::class)->findBy(['verticalId'=>$id]);
    }
    public function addOrUpdateVerticalImage($data){
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }

    public function removeVerticalImage($verticalImage){
        $this->em->remove($verticalImage);
        $this->em->flush();
        return true;
    }

    public function getScenarioDetail($tagId){
        return $this->em->getRepository(TagCategory::class)->findBy(['tagId'=>$tagId]);
    }

    public function getScenarioDetailByTagIn($tagIdArr){
        return $this->em->getRepository(TagCategory::class)->createQueryBuilder('tagcategory')
            ->select('tagcategories')
            ->from('App\Entities\TagCategory', 'tagcategories')
            ->join('tagcategories.tagId','tag')
            ->where('tagcategories.tagId IN (:tagId)')
            ->setParameter('tagId', $tagIdArr)
            ->getQuery()
            ->getResult();   
    }

    public function saveOrUpdate($data){
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }


}