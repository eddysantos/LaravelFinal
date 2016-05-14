<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ProyectId = 'Test005';
        DB::Table('projects')->insert([
          'nombre'=> $ProyectId,
          'description'=>'Test project for Laravel',
          'Expected_Start_Date'=> '2016-05-14',
          'Expected_Completion'=> '2017-05-14',
        ]);

        for ($i=0; $i < 7; $i++) {
          DB::Table('tasks')->insert([
            'nombre'=>"Task $i",
            'description'=>'Description for task ' . $i,
            'fkIdProyect'=>$ProyectId,
          ]);
        }
    }
}
