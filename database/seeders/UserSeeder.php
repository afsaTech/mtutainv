<?php

namespace Database\Seeders;

use Schema;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating users table and preparing for migration');
        $this->truncateUserTable();

        //users details
        $user_name = ['stan mtete','alphonce steven'];
        $user_email = ['stanmtete10@gmail.com','alphoncesteven@gmail.com'];
        $user_password = 'admin';

        //for loop to store user details.
        for ($i= 0; $i < 2; $i++) {
          $this->command->info("Creating ".$user_name[$i]." as administrator");
          $user = User::create([
             'name' => ucwords($user_name[$i]),
             'email' => $user_email[$i],
             'email_verified_at' => Null,
             'password' => Hash::make($user_password),
             'created_at' => now(),
             'updated_at' => now()
           ]);
        }
        $this->command->info("Default login password use: ".$user_password);
    }

    public function truncateUserTable()
    {
       Schema::disableForeignKeyConstraints();
       User::truncate();
       \Schema::enableForeignKeyConstraints();
    }
}
