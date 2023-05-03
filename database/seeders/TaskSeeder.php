<?php

namespace Database\Seeders;

use App\Models\DeskList;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        try {
            Task::factory()->count(50)->create();
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
