<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
          'role-list', 'role-create', 'role-edit', 'role-delete',
          'user-list', 'user-create', 'user-edit', 'user-delete',
          'achievement-list', 'achievement-create', 'achievement-edit', 'achievement-delete',
          'category-list', 'category-create', 'category-edit', 'category-delete',
          'contact-list', 'contact-create', 'contact-edit', 'contact-delete',
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission, 'slug' => substr($permission,0,strpos($permission,'-'))]);
        }
    }
}
