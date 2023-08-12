<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusData = [
            [
                'name' => 'new',
            ],
            [
                'name' => 'pending',
            ],
            [
                'name' => 'ready',
            ],
            [
                'name' => 'processing',
            ],
            [
                'name' => 'delivered',
            ],
            [
                'name' => 'completed',
            ],
            [
                'name' => 'canceled',
            ],
        ];

        foreach ($statusData as $data) {
            Status::create($data);
        }
    }
}
