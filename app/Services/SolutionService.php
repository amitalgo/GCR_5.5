<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 29/03/2018
 * Time: 4:17 PM
 */

namespace App\Services;


interface SolutionService
{
    public function getAllActiveSolution();
    public function getAllSolution();
    public function getSolutionById($id);
    public function addUpdateSolutionTag($data,$id);
    public function findSolutionInSolutionTag($id);
    public function solutionList();
}