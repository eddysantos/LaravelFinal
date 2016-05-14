<?php

namespace App\Http\Controllers;
use App\Project;
use App\Task;

use Illuminate\Http\Request;

use App\Http\Requests;


class ProyectsController extends Controller
{
    public function index(){
      $proyects = Project::all();
      return view('proyects.allproyects',[
        'proyects'=>$proyects
      ]);
    }

    public function show($id){
      $proyects=Project::find($id);
      // $tasks=Task::where('project_id', $id)->get();
      return view('proyects.show',[
        'proyect'=>$proyects,
        'tasks'=>$proyects->tasks
      ]);
    }
}
