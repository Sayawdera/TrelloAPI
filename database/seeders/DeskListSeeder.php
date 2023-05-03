<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\DeskList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        try {
            DeskList::factory()->count(50)->create();
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
