<?php

namespace App\Repository;

use App\Test;

class TestRepo implements ITestRepo{

    public function getAllTest(){
        return Test::all();
    }

    public function createTest(array $data){
        Test::insert([
            'title'=>$data['title'],
            'price'=>$data['price'],
            'description'=>$data['description'],
        ]);

    }
}



?>