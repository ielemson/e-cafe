<?php

use Illuminate\Database\Seeder;
use App\Level;
class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $level = new Level();
    $level->name = "Admin";
    $level->save();
    
    $level = new Level();
    $level->name = "Moderator";
    $level->save(); 
    
    $level = new Level();
    $level->name = "User";
    $level->save();
    }
        
    }