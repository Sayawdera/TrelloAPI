<?php

namespace Database\Seeders;

use App\Models\Desk;
use App\Models\DeskList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        try {
            Desk::factory()->count(50)->create();
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
