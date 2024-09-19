<?php

namespace Database\Seeders;

use App\Models\tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{

    public function run(): void
    {
        tasks::create([
            'task_name' => 'task 1',
            'description' => 'Description 1',
            'status' => 'finished',
            'project_name' => 'project_1',
            'user' => '0',
        ]);

        tasks::create([
            'task_name' => 'task1',
            'description' => 'big description',
            'status' => 'under_work',
            'project_name' => 'project_2',
            'user' => '1',
        ]);
    }
}
