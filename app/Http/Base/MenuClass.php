<?php

namespace App\Http\Base;

use App\Models\Modules\Users\DetalleUsuarioRol;
use DB;
use \Illuminate\Support\Facades\Auth;

class MenuClass {

    function __construct() {

        /* Se indentifica el id del usuario*/
        $idUser = Auth::user()->par_identificacion;

        /*Se indentifican los roles del usuario*/
        $objDetalleUsuarioRol = new DetalleUsuarioRol();
        $roles = $objDetalleUsuarioRol->select('id_rol')
                ->where('id_usuario', '=', $idUser)
                ->get();

        /* Se identifican los permisos del usuario*/
        $permisos = $this->getPermisos($roles);

        /* Se genera el menu */
        $this->menuFinal = $this->getMenu($permisos);
    }

    function getPermisos($roles) {
        $permisos = 0;
        if (count($roles) > 0) {
            $rolUsu = "";
            foreach ($roles as $val) {
                $rolUsu.=$val->id_rol.",";
            }
            $roles = substr($rolUsu,0,-1);
            $permisos = DB::select(
                "SELECT
                    modulo.id_modulo,
                    modulo.display_modulo,
                    control.id_controlador,
                    funcion.id_funcion,
                    control.display_controlador,
                    funcion.display_funcion,
                    funcion.nombre_funcion
                FROM
                    sep_permisos as permisos,
                    sep_funciones as funcion,
                    sep_controladores as control,
                    sep_modulos as modulo
                WHERE
                    (permisos.id_rol in ($roles))
                    and permisos.id_funcion = funcion.id_funcion
                    and funcion.id_controlador = control.id_controlador
                    and control.id_modulo = modulo.id_modulo"
            );
        }
        return $permisos;
    }

    function getMenu($permisos) {

        $funcionesMenu = array("edit",
            "deleted",
            "show",
            "aprobarqueja",
            "rechazarqueja",
            "planeacion",
            "permisos",
            "editprofile",
            "showprofile"
            );
        $menu = array();
        if ($permisos) {
            foreach ($permisos as $permiso) {
                if (!in_array($permiso->nombre_funcion, $funcionesMenu)) {
                    $menu[mb_strtolower($permiso->display_modulo)][mb_strtolower($permiso->display_controlador)][mb_strtolower($permiso->display_funcion)] = $permiso->nombre_funcion;
                }
            }
        }
        return $menu;
    }

}
