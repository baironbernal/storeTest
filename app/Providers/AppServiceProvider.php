<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuController;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            $event->menu->add('NAVEGACIÓN');

            $event->menu->add([
                'text' => 'Usuarios',
                'route' => 'admin.user.index',
                'icon' => 'user',
                'roles' => ['admin']
            ]);
            $event->menu->add([
                'text' => 'Sedes',
                'route' => 'admin.store.index',
                'icon' => 'user',
                'roles' => ['admin']
            ]);
            $event->menu->add([
                'text' => 'Categorias',
                'route' => 'admin.category.index',
                'icon' => 'client',
                'roles' => ['admin']
            ]);

            $event->menu->add([
                'text' => 'Productos',
                'route' => 'admin.product.index',
                'icon' => 'fa-hand-peace-o',
                'roles' => ['admin']
            ]);

            $event->menu->add('CONFIGURACIONES');

            $event->menu->add([
                'text' => 'Perfil',
                'url' => 'profile',
                'icon' => 'user',
                'roles' => ['admin']
            ]);
            
            $event->menu->add([
                'text' => 'Cambiar contraseña',
                'url'  => 'admin/settings',
                'icon' => 'lock',
                'roles' => ['admin']
            ]);

            
        });   
    }
}
