<?php

namespace App\Http\Controllers;
use App\Repository\ITestRepo;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public $test;
    public function __construct(ITestRepo $test){

        $this->test=$test;
    }


    public function index(){
        $test=$this->test->getAllTest();

        return view('test.index')->with('tests',$test);

    }

    public function create(){
        return view('test.create');
    }
    public function store(Request $request){
        // dd($request);
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);
        $data=$request->all();
        $this->test->createTest($data);
        return redirect('/tests');
    }
}
