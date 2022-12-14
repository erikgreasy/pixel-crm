<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory(10)
            ->has(Task::factory(5))
            ->create();
    }
}
