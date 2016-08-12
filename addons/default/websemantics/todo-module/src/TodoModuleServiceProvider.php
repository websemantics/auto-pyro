<?php namespace Websemantics\TodoModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class TodoModuleServiceProvider
 *
 *
 * @package   Websemantics\TodoModule
 */

class TodoModuleServiceProvider extends AddonServiceProvider
{
    protected $plugins = [];

    protected $routes = [];

    protected $bindings = [];

    protected $middleware = [];

    protected $listeners = [
    'Anomaly\Streams\Platform\Addon\Module\Event\ModuleWasInstalled' => 
    ['Websemantics\TodoModule\Listener\BootstrapHandler']];

    protected $providers = [];

    protected $singletons = [];

    protected $overrides = [];

    protected $mobile = [];
    
    protected $commands = [];

    public function register()
    {
    }

    public function map()
    {
    }
}


