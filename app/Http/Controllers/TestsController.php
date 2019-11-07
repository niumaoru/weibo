<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function test(){
        //$this->cube();

        $arr1 = ['a', 'b'];
        $arr2 = array_map("strtoupper", $arr1);
        print_r($arr2);
    }

    function cube($n)
    {
        return($n * $n * $n);
    }

}
