<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        /**
         * aqui cambias el menu
         * si no hay nombre de ruta le pondras null
         *  */

        return [
            //para menu simple
            'inicio' => [
                'icon' => 'home',
                'title' => 'Inicio',
                'route_name' => 'inicio',
                'params' => [
                    'layout' => 'side-menu'
                ],
            ],
            'devider',
            'usuarios' => [
                'icon' => 'users',
                'title' => 'Usuarios',
                'sub_menu' => [
                    'usuario.index' => [
                        'icon' => '',
                        'route_name' => 'usuario.index',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Lista'
                    ],
                    'usuario.create' => [
                        'icon' => '',
                        'route_name' => 'usuario.create',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Nuevo usuario'
                    ]
                ]
            ]
        ];
    }
}
