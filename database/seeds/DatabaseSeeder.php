<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::create([
          'nombre'=>'Proyecto4',
          'description'=>'Descripción del proyecto 1',
          'Expected_Start_Date'=>'2016-05-14'
        ]);
        for ($i=1; $i <= 22; $i++) {
          $task = Task::create([
            'nombre'=> 'Tarea ' . $i,
            'description' => 'Descripción de tarea ' . $i,
            'done' => false,
            'project_id' => $project->id
          ]);
        }
    }
}
