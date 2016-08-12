<?php namespace Websemantics\TodoModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class TodoModuleSeeder
 *
 *
 * @package   Websemantics\TodoModule
 */

class TodoModuleSeeder extends Seeder
{
	protected $seeders = [];
    /**
     * Seed the localization module.
     */
    public function run()
    {   
    		foreach ($this->seeders as $seeder) {
        	    $this->call($seeder);
    		}             
    }
}