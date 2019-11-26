<?php

use Illuminate\Database\Seeder;
use ChaskiGas\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name="superAdmin";
        $role->description="administrador de toda la pagina";
        $role->save();

        $role = new Role();
        $role->name="admin_grifo";
        $role->description="administrador de grifo";
        $role->save();

        $role = new Role();
        $role->name="admin_almacen";
        $role->description="administrador de almacen";
        $role->save();

        $role = new Role();
        $role->name="admin_planta";
        $role->description="administrador de planta";
        $role->save();

    }
}
