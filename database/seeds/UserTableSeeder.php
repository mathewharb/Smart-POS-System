<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Admin',
          'email' => 'admin@admin.com',
          'password' => '$2y$10$tNuOyJ52dIOys4OINvZ1suzyJIRikkXr0oY10BfqX89xUBh.zk0T6',
          'role' => 'admin',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
    }
}
