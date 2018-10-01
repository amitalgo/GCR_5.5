<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 29/03/2018
 * Time: 4:22 PM
 */

namespace App\Repositories;

use App\Entities\ScenarioDetail;
use App\Entities\TagCategory;
use LaravelDoctrine\ORM\Facades\Doctrine;
use Doctrine\ORM\EntityManagerInterface;
class SolutionRepo
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getAllActiveSolution()
    {
        // TODO: Implement getAllActiveSolution() method.
    }

    public function getAllSolution()
    {
        return $this->em->getRepository(ScenarioDetail::class)->findAll();
    }

    public function getSolutionById($id)
    {
        return $this->em->getRepository(ScenarioDetail::class)->find($id);
    }

    public function saveOrUpdate($data)
    {
        $this->em->persist($data);
        $this->em->flush();
        return true;
    }


    public function findSolutionInSolutionTag($id){
        return $this->em->getRepository(TagCategory::class)->findBy(['scenarioId'=>$id]);
    }
    public function solutionList()
    {
        // TODO: Implement solutionList() method.
    }

    public function removeSolutionTags($solutionTags){
        foreach ($solutionTags as $solutionTag){
            $this->em->remove($solutionTag);
        }
        $this->em->flush();
        return true;
    }

}