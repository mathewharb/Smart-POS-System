<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('settings')->insert([
          'company_name' => 'HarbCreation',
          'phone_number' => '2207425159',
          'address' => "Kanifing-Gambia",
          'currency' => 'GMD',
          'default_vat' => 15,
          'logo' => 'defaultcompanylogo.png',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
          'time_zone' => 'Europe/Paris',
          'delivery_charge' => 60,
      ]);
    }
}
