<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function test(){
        $city  = "San Francisco";
        $state = "CA";
        $event = "SIGGRAPH";

        $location_vars = array("city", "state");

        print_r('<pre>');
        print_r($location_vars);
        $result = compact("event", "note", $location_vars);

        print_r($result);
    }
}
