<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {

      $projects = Project::all();
      // $url = 'http://www.boredapi.com/api/activity/';
      // $contents = file_get_contents($url);
      //
      // if ($contents !== false) {
      //     $activity = var_dump(json_decode($contents)->activity);
      //     echo $activity;
      // }


      return view('projects.index', ['projects'=> $projects]);
    }
}
