<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker;

class TestsController extends Controller
{
    public function test(){
        $user_ids = ['1','2','3','4'];
        $faker = app(Faker\Generator::class);
        echo $faker->randomElement($user_ids);
    }
}
