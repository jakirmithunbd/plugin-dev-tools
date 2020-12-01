<?php 

namespace Jakir;

final class Init 
{

    function __contruct () 
    {}

    public static function get_services() 
    {

        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\Deactivate::class,
            Base\Activate::class,
            Base\SettingsLinks::class,
        ];
    }

    public static function register_services() 
    {
        foreach ( self::get_services() as $class) {
            $service = self::instantiate ($class);

            if ( method_exists( $service, 'register' )) {
                $service->register();
            }
        }
    }

    private static function instantiate( $class ) 
    {
        return new $class();
    }
}