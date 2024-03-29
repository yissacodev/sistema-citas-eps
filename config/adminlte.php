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
    'title_prefix' => 'Sistema de citas |',
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

    'logo' => '<b>Citas Web </b>Comfamiliar',
    'logo_img' => 'vendor/adminlte/dist/img/confamiliar-logo.png',
    'logo_img_class' => 'brand-image elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Sistema web EPS Comfamiliar',

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
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

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
    'classes_brand' => 'bg-white',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-success sidebar-comfamiliar elevation-4',
    'classes_sidebar_nav' => '', /*Aqui otras clases para editar la sidebar*/
    'classes_topnav' => 'navbar-white navbar-light',
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
    'dashboard_url' => '',
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
        // Sidebar items:
        // [
        //     'type' => 'sidebar-menu-search',
        //     'text' => 'search',
        // ],
         // [
        //     'text'        => 'pages',
        //     'url'         => 'admin/pages',
        //     'icon'        => 'far fa-fw fa-file',
        //     'label'       => 4,
        //     'label_color' => 'success',
        // ],

        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        
        [
            'text' => 'Dashboard',
            'route' => 'dashboard',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
       
        ['header' => 'GESTIÓN DE CITAS'],
        [
            'text'    => 'Citas',
            'icon'    => 'fas fa-fw fa-calendar-day',
            'can'   => 'admin',
            'submenu' => [
                [
                    'text' => 'Nueva cita',
                    'icon'    => 'fas fa-fw fa-plus',
                    'url'  => 'admin/appointments',
                    'can'   => 'admin'
                ],
                [
                    'text' => 'Aplazar cita',
                    'icon'    => 'fas fa-fw fa-stopwatch-20',
                    'url'  => 'admin/appointments/postpone',
                    'can'   => 'admin'
                ],
                [
                    'text' => 'Cancelar cita',
                    'icon'    => 'fas fa-fw fa-times',
                    'url'  => 'admin/appointments/cancel',
                    'can'   => 'admin'
                ],
                [
                    'text' => 'Lista de citas por usuario',
                    'icon_color' => 'yellow',
                    'icon'    => 'fas fa-fw fa-clipboard-list',
                    'url'  => 'admin/appointments/userlist',
                    'can'   => 'admin'
                ],
                [
                    'text' => 'Lista de citas por médico',
                    'icon_color' => 'yellow',
                    'icon'    => 'fas fa-fw fa-clipboard-list',
                    'url'  => 'admin/appointments/mediclist',
                    'can'   => 'admin'
                ],
                
            ],
            
        ],
        [   
            'text'    => 'Historial',
            'icon'    => 'fas fa-fw fa-history',
            'url'  => 'admin/history',
            'can'   => 'admin'  
        ],       

        ['header' => 'AUTORIZACIONES',
        'can'   => 'admin'  ],
        [
            'text' => 'Verificar autorizaciones',
            'url'  => 'admin/authorizations',
            'icon' => 'fas fa-fw fa-user-check',
            'can'   => 'admin'
        ],
        
        /* Administadores*/
        ['header' => 'ADMINISTRACIÓN',
        'can'   => 'admin'],
        [   
            'text'    => 'Pacientes',
            'icon'    => 'fas fa-fw fa-user',
            'url'     => 'admin/patient',
            'can'   => 'admin'
        ],
        [   
            'text'    => 'Médicos',
            'icon'    => 'fas fa-fw fa-briefcase-medical',
            'url'     => 'admin/medic',
            'can'   => 'admin'
            
        ],
        [   
            'text'    => 'Especializaciones',
            'icon'    => 'fas fa-fw fa-certificate',
            'url'     => 'admin/specializations',
            'can'   => 'admin'     
        ],

        /*Usuarios */
        [
            'text'    => 'Citas',
            'icon'    => 'fas fa-fw fa-calendar-day',
            'can'   => 'admin.user',
            'submenu' => [
                [
                    'text' => 'Nueva cita',
                    'icon'    => 'fas fa-fw fa-plus',
                    'url'  => 'admin/user/appointments',
                    'can'   => 'admin.user'      
                ],
                [
                    'text' => 'Aplazar cita',
                    'icon'    => 'fas fa-fw fa-stopwatch-20',
                    'url'  => 'admin/user/appointments/postpone',
                    'can'   => 'admin.user'      
                ],
                [
                    'text' => 'Cancelar cita',
                    'icon'    => 'fas fa-fw fa-times',
                    'url'  => 'admin/user/appointments/cancel',
                    'can'   => 'admin.user'      
                ],
                [
                    'text' => 'Citas pendientes',
                    'icon_color' => 'yellow',
                    'icon'    => 'fas fa-fw fa-clipboard-list',
                    'url'  => 'admin/user/appointments/pending',
                    'can'   => 'admin.user'      
                ],
                [
                    'text' => 'Citas perdidas',
                    'icon_color' => 'red',
                    'icon'    => 'fas fa-fw fa-clipboard-list',
                    'url'  => 'admin/user/appointments/losed',
                    'can'   => 'admin.user'      
                ],
                
            ],
            
        ],
        [   
            'text'    => 'Historial',
            'icon'    => 'fas fa-fw fa-history',
            'url'  => 'admin/user/appointments/history',
            'can'   => 'admin.user'      
        ],       
    
        ['header' => 'AUTORIZACIONES',
        'can'   => 'admin.user' ],
        [
            'text' => 'Verificar autorizaciones',
            'url'  => 'admin/user/appointments/authorizations',
            'icon' => 'fas fa-fw fa-user-check',
            'can'   => 'admin.user' 
        ],

        /*Gestion de citas medico */
        [
            'text'    => 'Citas',
            'icon'    => 'fas fa-fw fa-calendar-day',
            'can'   => 'admin.doctor' ,
            'submenu' => [
                [
                    'text' => 'Nueva cita especialista',
                    'icon'    => 'fas fa-fw fa-plus',
                    'url'  => 'admin/doctor/appointments',
                    'can'   => 'admin.doctor'
                ],
                [
                    'text' => 'Aplazar cita',
                    'icon'    => 'fas fa-fw fa-stopwatch-20',
                    'url'  => 'admin/doctor/appointments/list',
                    'can'   => 'admin.doctor'
                ],
                [
                    'text' => 'Cancelar cita',
                    'icon'    => 'fas fa-fw fa-times',
                    'url'  => 'admin/doctor/appointments/postpone',
                    'can'   => 'admin.doctor'
                ],
                [
                    'text' => 'Citas pendientes',
                    'icon_color' => 'yellow',
                    'icon'    => 'fas fa-fw fa-clipboard-list',
                    'url'  => 'admin/user/appointments/pending',
                    'can'   => 'admin.doctor'
                ],
                [
                    'text' => 'Citas perdidas',
                    'icon_color' => 'red',
                    'icon'    => 'fas fa-fw fa-clipboard-list',
                    'url'  => 'admin/doctor/appointments/losed',
                    'can'   => 'admin.doctor'
                ],
                
            ],
            
        ],
        [   
            'text'    => 'Historial',
            'icon'    => 'fas fa-fw fa-history',
            'url'  => 'admin/doctor/appointments/history',
            'can'   => 'admin.doctor'      
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
            'active' => true,
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
        'Fullcalendar' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => 'https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales-all.js',
                ],
                
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.js',
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

    'livewire' => true,
];
