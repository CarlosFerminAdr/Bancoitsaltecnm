<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '',
    'title_prefix' => 'ITSAL | ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>TecNM</b>-ITSAL',
    'logo_img' => 'vendor/img/logoTecNM.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'ITSAL',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-blue', //encabezado navegador izq.
    'classes_brand_text' => 'text-white',
    'classes_content_wrapper' => 'bg-light', //fondo
    'classes_content_header' => 'bg-blue text-white text-center', //titulo centrado
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primary elevation-4', //navegador izq. y link posicionado
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-primary navbar-dark ', //navegador superior
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'Buscar',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Buscar',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog', //directiva para Roles y permisos
        ],
        [
            'text' => 'Panel de Control',
            'route'  => 'home',
            'icon' => 'fas fa-fw fa-shield-alt',
            'can'  => 'home'
        ],
        //******************************************************************************************************************ADMINISTRADOR */
        ['header' => 'MODULOS'],

        [
            'text'    => 'Usuarios',
            'icon'    => 'fas fa-fw fa-user-cog',
            'can'     => 'users.index',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'users',
                ],
            ],
        ],
        [
            'text'    => 'Estatus',
            'icon'    => 'fas fa-fw fa-bell',
            'can'     => 'estados.index',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'estados',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'estados/create',
                ],
            ],
        ],
        [
            'text'    => 'Periodos',
            'icon'    => 'fas fa-fw fa-calendar-alt',
            'can'     => 'periodos.index',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'periodos',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'periodos/create',
                ],
            ],
        ],
        [
            'text'    => 'Carreras',
            'icon'    => 'fas fa-fw fa-sitemap',
            'can'     => 'carreras.index',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'carreras',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'carreras/create',
                ],
            ],
        ],
        [
            'text'    => 'Tipos de programas',
            'icon'    => 'fas fa-fw fa-cubes',
            'can'     => 'tipos.index',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'tipos',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'tipos/create',
                ],
            ],
        ],
        [
            'text'    => 'Jefes de Departamento',
            'icon'    => 'fas fa-fw fa-users',
            'can'     => 'jdeptos.index',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'jdeptos',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'jdeptos/create',
                ],
            ],
        ],
        [
            'text'    => 'Alumnos',
            'icon'    => 'fas fa-fw fa-user-graduate',
            'can'     => 'alumnos.index',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'alumnos',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'alumnos/create',
                ],
            ],
        ],
        /*************************************************************************************************JEFES DE DEPARTAMENTO INGENIERIAS */
        [
            'text'    => 'Solicitud',
            'icon'    => 'fas fa-fw fa-file-alt',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can'     => 'registroAcuiculturaPro.index',
            'can'     => 'registroAcuiculturaAuto.index',
            'can'     => 'registroQuimicaPro.index',
            'can'     => 'registroQuimicaAuto.index',
            'submenu' => [
                [
                    'text' => 'ING. ACUICULTURA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'blue',
                    'can'     => 'registroAcuiculturaPro.index',
                    'can'     => 'registroAcuiculturaAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'registroAcuiculturaPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'registroAcuiculturaPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'registroAcuiculturaAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'registroAcuiculturaAuto.index'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. QUÍMICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'orange',
                    'can'     => 'registroQuimicaPro.index',
                    'can'     => 'registroQuimicaAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'registroQuimicaPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'registroQuimicaPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'registroQuimicaAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'registroQuimicaAuto.index'
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Proyectos',
            'icon'    => 'fas fa-fw fa-layer-group',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can' => 'acuicultura.index',
            'can' => 'quimica.index',
            'submenu' => [
                [
                    'text' => 'ING. ACUICULTURA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'blue',
                    'can' => 'acuicultura.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'acuicultura',
                            'label' => '+1',
                            'label_color' => 'warning'
                        ],
                        [
                            'text' => 'Disponibles',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'acuiculturaon',
                            'label' => '+1',
                            'label_color' => 'success'
                        ],
                        [
                            'text' => 'Asignados',
                            'icon'    => 'fas fa-fw fa-star',
                            'icon_color' => 'red',
                            'url'  => 'acuiculturaoff',
                            'label' => '+1',
                            'label_color' => 'danger'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. QUÍMICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'orange',
                    'can' => 'quimica.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'quimica',
                            'label' => '+1',
                            'label_color' => 'warning'
                        ],
                        [
                            'text' => 'Disponibles',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'quimicaon',
                            'label' => '+1',
                            'label_color' => 'success'
                        ],
                        [
                            'text' => 'Asignados',
                            'icon'    => 'fas fa-fw fa-star',
                            'icon_color' => 'red',
                            'url'  => 'quimicaoff',
                            'label' => '+1',
                            'label_color' => 'danger'
                        ],
                    ],
                ],
            ],
        ],
        /************************************************************************************************JEFE DE DEPARTAMENTO METAL-MECANICA*/
        [
            'text'    => 'Solicitud',
            'icon'    => 'fas fa-fw fa-file-alt',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can'     => 'registroMecanicaPro.index',
            'can'     => 'registroMecanicaAuto.index',
            'submenu' => [
                [
                    'text' => 'ING. MECÁNICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'gray',
                    'can'     => 'registroMecanicaPro.index',
                    'can'     => 'registroMecanicaAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'registroMecanicaPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'registroMecanicaPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'registroMecanicaAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'registroMecanicaAuto.index'
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Proyectos',
            'icon'    => 'fas fa-fw fa-layer-group',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can' => 'mecanica.index',
            'submenu' => [
                [
                    'text' => 'ING. MECÁNICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'gray',
                    'can' => 'mecanica.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'mecanica',
                            'label' => '+1',
                            'label_color' => 'warning'
                        ],
                        [
                            'text' => 'Disponibles',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'mecanicaon',
                            'label' => '+1',
                            'label_color' => 'success'
                        ],
                        [
                            'text' => 'Asignados',
                            'icon'    => 'fas fa-fw fa-star',
                            'icon_color' => 'red',
                            'url'  => 'mecanicaoff',
                            'label' => '+1',
                            'label_color' => 'danger'
                        ],
                    ],
                ],
            ],
        ],
        /*****************************************************************************************JEFE DE DEPARTAMENTO ELECTRICA-ELECTRONICA*/
        [
            'text'    => 'Solicitud',
            'icon'    => 'fas fa-fw fa-file-alt',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can'     => 'registroElectronicaPro.index',
            'can'     => 'registroElectronicaAuto.index',
            'can'     => 'registroTicsPro.index',
            'can'     => 'registroTicsAuto.index',
            'submenu' => [
                [
                    'text' => 'ING. ELÉCTRONICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'teal',
                    'can'     => 'registroElectronicaPro.index',
                    'can'     => 'registroElectronicaAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'registroElectronicaPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'registroElectronicaPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'registroElectronicaAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'registroElectronicaAuto.index'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. TICs',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'purple',
                    'can'     => 'registroTicsPro.index',
                    'can'     => 'registroTicsAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'registroTicsPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'registroTicsPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'registroTicsAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'registroTicsAuto.index'
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Proyectos',
            'icon'    => 'fas fa-fw fa-layer-group',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can' => 'electronica.index',
            'can' => 'tics.index',
            'submenu' => [
                [
                    'text' => 'ING. ELECTRÓNICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'teal',
                    'can' => 'electronica.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'electronica',
                            'label' => '+1',
                            'label_color' => 'warning'
                        ],
                        [
                            'text' => 'Disponibles',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'electronicaon',
                            'label' => '+1',
                            'label_color' => 'success'
                        ],
                        [
                            'text' => 'Asignados',
                            'icon'    => 'fas fa-fw fa-star',
                            'icon_color' => 'red',
                            'url'  => 'electronicaoff',
                            'label' => '+1',
                            'label_color' => 'danger'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. TICs',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'purple',
                    'can' => 'tics.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'tics',
                            'label' => '+1',
                            'label_color' => 'warning'
                        ],
                        [
                            'text' => 'Disponibles',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'ticson',
                            'label' => '+1',
                            'label_color' => 'success'
                        ],
                        [
                            'text' => 'Asignados',
                            'icon'    => 'fas fa-fw fa-star',
                            'icon_color' => 'red',
                            'url'  => 'ticsoff',
                            'label' => '+1',
                            'label_color' => 'danger'
                        ],
                    ],
                ],
            ],
        ],
        /************************************************************************************************JEFE DE DEPARTAMENTO ADMINISTRACION*/
        [
            'text'    => 'Solicitud',
            'icon'    => 'fas fa-fw fa-file-alt',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can'     => 'registroGestionPro.index',
            'can'     => 'registroGestionAuto.index',
            'submenu' => [
                [
                    'text' => 'ING. G. EMPRESARIAL',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'pink',
                    'can'     => 'registroGestionPro.index',
                    'can'     => 'registroGestionAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'registroGestionPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'registroGestionPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'registroGestionAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'registroGestionAuto.index'
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Proyectos',
            'icon'    => 'fas fa-fw fa-layer-group',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can' => 'gestion.index',
            'submenu' => [
                [
                    'text' => 'ING. G. EMPRESARIAL',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'pink',
                    'can' => 'gestion.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'gestion',
                            'label' => '+1',
                            'label_color' => 'warning'
                        ],
                        [
                            'text' => 'Disponibles',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'gestionon',
                            'label' => '+1',
                            'label_color' => 'success'
                        ],
                        [
                            'text' => 'Asignados',
                            'icon'    => 'fas fa-fw fa-star',
                            'icon_color' => 'red',
                            'url'  => 'gestionoff',
                            'label' => '+1',
                            'label_color' => 'danger'
                        ],
                    ],
                ],
            ],
        ],
        /**************************************************** */
        [
            'text'    => 'Empresa',
            'icon'    => 'fas fa-fw fa-city',
            'can'     => 'empresas.index',
            'submenu' => [
                [
                    'text' => 'Mis Datos',
                    'url'  => 'empresas',
                ],
                [
                    'text' => 'Registro',
                    'url'  => 'empresas/create',
                ],
            ],
        ],
        [
            'text'    => 'Domicilio',
            'icon'    => 'fas fa-fw fa-address-card',
            'can'     => 'domicilios.index',
            'submenu' => [
                [
                    'text' => 'Mis Datos',
                    'url'  => 'domicilios',
                ],
                [
                    'text' => 'Registro',
                    'url'  => 'domicilios/create',
                ],
            ],
        ],
        [
            'text'    => 'Mis Proyectos',
            'icon'    => 'fas fa-fw fa-archive',
            'can'     => 'proyectos.index',
            'submenu' => [
                [
                    'text' => 'Todos los Proyectos',
                    'url'  => 'proyectos',
                ],
                [
                    'text' => 'Crear Nuevo',
                    'url'  => 'proyectos/create',
                ],
            ],
        ],
        /**********************************************************************************************************************VINCULACIÍON */
        [
            'text'    => 'Solicitud',
            'icon'    => 'fas fa-fw fa-file-alt',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can'     => 'solicitudAcuiculturaPro.index',
            'can'     => 'solicitudAcuiculturaAuto.index',
            'can'     => 'solicitudQuimicaPro.index',
            'can'     => 'solicitudQuimicaAuto.index',
            'can'     => 'solicitudMecanicaPro.index',
            'can'     => 'solicitudMecanicaAuto.index',
            'can'     => 'solicitudElectronicaPro.index',
            'can'     => 'solicitudElectronicaAuto.index',
            'can'     => 'solicitudTicsPro.index',
            'can'     => 'solicitudTicsAuto.index',
            'can'     => 'solicitudGestionPro.index',
            'can'     => 'solicitudGestionAuto.index',
            'submenu' => [
                [
                    'text' => 'ING. ACUICULTURA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'blue',
                    'can'     => 'solicitudAcuiculturaPro.index',
                    'can'     => 'solicitudAcuiculturaAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'solicitudAcuiculturaPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'solicitudAcuiculturaPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'solicitudAcuiculturaAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'solicitudAcuiculturaAuto.index'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. QUÍMICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'orange',
                    'can'     => 'solicitudQuimicaPro.index',
                    'can'     => 'solicitudQuimicaAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'solicitudQuimicaPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'solicitudQuimicaPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'solicitudQuimicaAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'solicitudQuimicaAuto.index'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. MECÁNICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'gray',
                    'can'     => 'solicitudMecanicaPro.index',
                    'can'     => 'solicitudMecanicaAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'solicitudMecanicaPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'solicitudMecanicaPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'solicitudMecanicaAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'solicitudMecanicaAuto.index'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. ELÉCTRONICA',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'teal',
                    'can'     => 'solicitudElectronicaPro.index',
                    'can'     => 'solicitudElectronicaAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'solicitudElectronicaPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'solicitudElectronicaPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'solicitudElectronicaAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'solicitudElectronicaAuto.index'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. TICs',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'purple',
                    'can'     => 'solicitudTicsPro.index',
                    'can'     => 'solicitudTicsAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'solicitudTicsPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'solicitudTicsPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'solicitudTicsAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'solicitudTicsAuto.index'
                        ],
                    ],
                ],
                [
                    'text' => 'ING. G. EMPRESARIAL',
                    'icon'    => 'fas fa-fw fa-circle',
                    'icon_color' => 'pink',
                    'can'     => 'solicitudGestionPro.index',
                    'can'     => 'solicitudGestionAuto.index',
                    'submenu' => [
                        [
                            'text' => 'En Proceso',
                            'icon'    => 'fas fa-fw fa-download',
                            'icon_color' => 'yellow',
                            'url'  => 'solicitudGestionPro',
                            'label' => '+1',
                            'label_color' => 'warning',
                            'can' => 'solicitudGestionPro.index'
                        ],
                        [
                            'text' => 'Autorizado',
                            'icon'    => 'fas fa-fw fa-upload',
                            'icon_color' => 'green',
                            'url'  => 'solicitudGestionAuto',
                            'label' => '+1',
                            'label_color' => 'success',
                            'can' => 'solicitudGestionAuto.index'
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Programas',
            'icon'    => 'fas fa-fw fa-layer-group',
            'label' => 'Nuevos',
            'label_color' => 'primary',
            'can' => 'procesoPrograms.index',
            'can' => 'disponiblePrograms.index',
            'can' => 'asignadoPrograms.index',
            'submenu' => [
                [
                    'text' => 'En Proceso',
                    'icon'    => 'fas fa-fw fa-download',
                    'icon_color' => 'yellow',
                    'url'  => 'procesoPrograms',
                    'label' => '+1',
                    'label_color' => 'warning',
                    'can' => 'procesoPrograms.index'
                ],
                [
                    'text' => 'Disponibles',
                    'icon'    => 'fas fa-fw fa-upload',
                    'icon_color' => 'green',
                    'url'  => 'disponiblePrograms',
                    'label' => '+1',
                    'label_color' => 'success',
                    'can' => 'disponiblePrograms.index'
                ],
                [
                    'text' => 'Asignados',
                    'icon'    => 'fas fa-fw fa-star',
                    'icon_color' => 'red',
                    'url'  => 'asignadoPrograms',
                    'label' => '+1',
                    'label_color' => 'danger',
                    'can' => 'asignadoPrograms.index'
                ],
            ],
        ],
        [
            'text'    => 'Empresas',
            'icon'    => 'fas fa-fw fa-city',
            'can'     => 'allEmpresas.index',
            'submenu' => [
                [
                    'text' => 'Listado',
                    'url'  => 'allEmpresas',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'allEmpresas/create',
                ],
            ],
        ],
        [
            'text'    => 'Domicilios',
            'icon'    => 'fas fa-fw fa-address-card',
            'can'     => 'allDomicilios.index',
            'submenu' => [
                [
                    'text' => 'Listado',
                    'url'  => 'allDomicilios',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'allDomicilios/create',
                ],
            ],
        ],
        [
            'text'    => 'Mis Porgramas',
            'icon'    => 'fas fa-fw fa-archive',
            'can'     => 'programas.index',
            'submenu' => [
                [
                    'text' => 'Todos los Programas',
                    'url'  => 'programas',
                ],
                [
                    'text' => 'Crear Nuevo',
                    'url'  => 'programas/create',
                ],
            ],
        ],
        /*****************************************************************************************************************PERFIL DE ALUMNO */
        [
            'text'    => 'Perfil',
            'icon'    => 'fas fa-fw fa-id-card-alt',
            'can'     => 'perfil.index',
            'submenu' => [
                [
                    'text' => 'Mis Datos',
                    'url'  => 'perfil',
                ],
            ],
        ],
        /******************************************* */
        [
            'text'    => 'Jefes de Departamento',
            'icon'    => 'fas fa-fw fa-users',
            'can'     => 'admin.jdeptos',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'admin.jdeptos',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'jdeptos/create',
                ],
            ],
        ],
        [
            'text'    => 'Empresas',
            'icon'    => 'fas fa-fw fa-city',
            'can'     => 'admin.empresas',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'admin.empresas',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'empresas/create',
                ],
            ],
        ],

        [
            'text'    => 'Proyectos',
            'icon'    => 'fas fa-fw fa-archive',
            'can'     => 'admin.proyectos',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'admin.proyectos',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'proyectos/create',
                ],
            ],
        ],
        [
            'text'    => 'Porgramas',
            'icon'    => 'fas fa-fw fa-archive',
            'can'     => 'admin.programas',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'admin.programas',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'programas/create',
                ],
            ],
        ],
        [
            'text'    => 'Alumnos',
            'icon'    => 'fas fa-fw fa-user-graduate',
            'can'     => 'admin.alumnos',
            'submenu' => [
                [
                    'text' => 'Lista',
                    'url'  => 'admin.alumnos',
                ],
                [
                    'text' => 'Agregar',
                    'url'  => 'alumnos/create',
                ],
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
