<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create_user']);
        Permission::create(['name' => 'edit_user']);
        Permission::create(['name' => 'show_user']);
        Permission::create(['name' => 'delete_user']);
        Permission::create(['name' => 'create_room']);
        Permission::create(['name' => 'edit_room']);
        Permission::create(['name' => 'show_room']);
        Permission::create(['name' => 'delete_room']);
        Permission::create(['name' => 'create_medicine']);
        Permission::create(['name' => 'edit_medicine']);
        Permission::create(['name' => 'show_medicine']);
        Permission::create(['name' => 'delete_medicine']);
        Permission::create(['name' => 'create_lab']);
        Permission::create(['name' => 'edit_lab']);
        Permission::create(['name' => 'show_lab']);
        Permission::create(['name' => 'delete_lab']);
        Permission::create(['name' => 'create_bill']);
        Permission::create(['name' => 'edit_bill']);
        Permission::create(['name' => 'show_bill']);
        Permission::create(['name' => 'delete_bill']);
        Permission::create(['name' => 'view_logs']);
        // Permission::create(['name' => 'edit_bill']);
        // Permission::create(['name' => 'show_bill']);
        // Permission::create(['name' => 'delete_bill']);


        Permission::create(['name' => 'create_patient']);
        Permission::create(['name' => 'update_patient']);
        Permission::create(['name' => 'show_patient']);


        // Permission::create(['name' => 'delete_patient']);
        // Permission::create(['name' => 'export_product']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(['create_user']);

        $role1 = Role::create(['name' => 'doctor']);

        $role2 = Role::create(['name' => 'nurse']);

        $role3 = Role::create(['name' => 'drugroom_staff']);

        $role4 = Role::create(['name' => 'medtech']);

        $role5 = Role::create(['name' => 'billing']);
        // $role->givePermissionTo(['create_product', 'update_product', 'delete_product', 'show_product', 'export_product']);

        // $role1 = Role::create(['name' => 'writer']);
        // $role1->givePermissionTo(['show_product', 'update_product', 'export_product']);

        // $role2 = Role::create(['name' => 'user']);
        // $role2->givePermissionTo('export_product');
    }
}
