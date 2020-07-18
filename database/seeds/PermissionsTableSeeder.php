<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     

        //alumnos
        Permission::create([
            'name'        => 'Navegar alumnos',
            'slug'        => 'alumnos.index',
            'description' => 'Navegacion de alumnos',
        ]);
        Permission::create([
            'name'        => 'Ver alumnos',
            'slug'        => 'alumnos.edit',
            'description' => 'Ver en detalle de alumnos',
        ]);
        Permission::create([
            'name'        => 'Ver alumnos',
            'slug'        => 'alumnos.create',
            'description' => 'Ver en detalle de alumnos',
        ]);



       
    }
}
