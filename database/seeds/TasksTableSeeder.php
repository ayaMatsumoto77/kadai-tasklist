<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'content' => 'test content 1',
            'status' => 'test status 1'
        ]);
        DB::table('tasks')->insert([
            'content' => 'test content 1',
            'status' => 'test status 1'
        ]);
        DB::table('tasks')->insert([
            'content' => 'test content 1',
            'status' => 'test status 1'
        ]);
    }
}
