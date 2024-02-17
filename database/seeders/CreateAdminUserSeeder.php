<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserSeeder extends Seeder
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

        //For loop to store user details.
        $this->command->info("Creating Super Admin as administrator");

          $user = User::create([
              'name' => 'Super Admin',
              'email' => 'admin@gmail.com',
              'password' => Hash::make('admin'),
          ]);

        $this->assignRolePermission($user);
        $this->command->info("Default login password use: admin");
    }

    public function truncateUserTable()
    {
       \Schema::disableForeignKeyConstraints();
       User::truncate();
       \Schema::enableForeignKeyConstraints();
    }

    public function assignRolePermission($user) {
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }

}
