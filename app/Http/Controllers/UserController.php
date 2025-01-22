<?php

namespace App\Http\Controllers;

use App\Jobs\UserDataJob;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $starttime = microtime(true);

        $job = new  UserDataJob();
        dispatch($job);

        $endtime = microtime(true);
        $executionTime = $endtime - $starttime;
        return "Execution Time: $executionTime seconds";
    }
}
