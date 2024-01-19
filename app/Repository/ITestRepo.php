<?php

namespace App\Repository;

interface ITestRepo{

    public function getAllTest();

    public function createTest(array $data);
}



?>