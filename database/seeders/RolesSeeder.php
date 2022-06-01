<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = \App\Models\Role::create([
            'name' =>'Admin',
            'alias' =>'admin',
            'permissions' => [
                'can-login' => true,
                'create-product' => true,
                'update-product' => true,
                'delete-product' => true,
                'list-products' => true,
                'view-product' => true,
                'create-category' => true,
                'update-category' => true,
                'delete-category' => true,
                'list-categories' => true,
                'view-category' => true,
                'create-order' => true,
                'update-order' => true,
                'delete-order' => true,
                'list-orders' => true,
                'view-order' => true
            ]
        ]);
        $editor = \App\Models\Role::create([
            'name' =>'Editor',
            'alias' =>'editor',
            'permissions' => [
                'can-login' => true,
                'create-product' => true,
                'update-product' => true,
                'delete-product' => true,
                'list-products' => true,
                'view-product' => true,
                'create-category' => true,
                'update-category' => true,
                'delete-category' => true,
                'list-categories' => true,
                'view-category' => true
            ]
        ]);
        $user = \App\Models\Role::create([
            'name' =>'User',
            'alias' =>'user',
            'permissions' => [
            ]
        ]);
    }
}
