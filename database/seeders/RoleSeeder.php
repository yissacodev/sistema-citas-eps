<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);
        $role3 = Role::create(['name' => 'Medic']);

        

        Permission::create(['name' => 'admin.dashboard'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin'])->syncRoles([$role1]);
        Permission::create(['name' => 'user'])->syncRoles([$role2]);
        Permission::create(['name' => 'medic'])->syncRoles([$role3]);



    }
    // public function down(){
        //     Schema::dropIfExists('permissions');
        // }
}
