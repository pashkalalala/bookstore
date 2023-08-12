<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductSeeder::class);
        $this->call(StatusSeeder::class);

        \App\Models\Order::factory(20)->create();

        /** @var User $adminUser */
        $adminUser = User::factory()->create([
            'email' => 'pasha@gmail.com',
            'name' => 'Admin',
            'password' => bcrypt('1111'),
            'phone' => '+380634444555'
        ]);

        $adminRole = Role::create(['name' => 'admin']);
        $adminUser->assignRole($adminRole);
    }
}
