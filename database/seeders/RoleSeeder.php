<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'Admin']);
        $role2=Role::create(['name'=>'Moderator']);
        $role3=Role::create(['name'=>'Guest']);

        Permission::create(['name'=>'read:dashboard'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'create:user'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'read:user'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'update:user'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'delete:user'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'create:role'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'read:role'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'update:role'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'delete:role'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'create:permission'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'read:permission'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'update:permission'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'delete:permission'])->syncRoles([$role1,$role2]);

    }
}
