<?php

namespace App\Http\Controllers;
use App\Project;
use App\Task;
use Auth;

use Illuminate\Http\Request;

use App\Http\Requests;


class ProyectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function me(){

      $user = Auth::user();

      return view('proyects.MyProjects')->with('projects', $user->projects);
    }
}
