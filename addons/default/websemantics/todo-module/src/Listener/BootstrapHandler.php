<?php namespace Websemantics\TodoModule\Listener;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Anomaly\Streams\Platform\Addon\Module\Event\ModuleWasInstalled;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class BootstrapHandler
 * 
 * Use this class to dispatch any job / command when this module has been installed.
 *
 *
 * @package   Websemantics\TodoModule\Listener
 */

class BootstrapHandler implements SelfHandling
{
    use DispatchesJobs;

    /* 
     * Addon / Module namespace
     *
     */
    protected $namespace = 'websemantics.module.todo';

    /* 
     * List of jobs to be dispatched
     *
     */
    protected $jobs = [];

     /**
     * Handle the e.
     *
     * @param  ModuleWasInstalled  $e
     * @return void
     */
    public function handle(ModuleWasInstalled $e)
    {
        $module = $e->getModule();

        /* Only bootstrap when a match */
        if($module->getId() === $this->namespace){
            
            /* Dispatch all avilable jobs */
            foreach ($this->jobs as $job) 
            {
                $this->dispatch(app($job)->setNamespace($this->namespace));
            }
        }
    }
}
