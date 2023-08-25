<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use \App\Models\User;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'user1', 'username' => 'user1', 'password' => 'user', 'email' => 'user1@user.com'],
            ['name' => 'user2', 'username' => 'user2', 'password' => 'user', 'email' => 'user2@user.com']
        ];

        foreach ($users as $user) {
            $newUser = User::create($user);
        }

        $writers = [
            ['name' => 'writer1', 'username' => 'writer1', 'password' => 'writer', 'email' => 'writer1@writer.com'],
            ['name' => 'writer2', 'username' => 'writer2', 'password' => 'writer', 'email' => 'writer2@writer.com'],
        ];

        foreach ($writers as $writer) {
            $newWriter = User::create($writer);
            Post::factory(5)->create([
                'user_id' => $newWriter->id
            ]);
        }

        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
