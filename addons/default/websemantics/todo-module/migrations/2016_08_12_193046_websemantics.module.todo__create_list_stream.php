<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleTodoCreateListStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'list'
        'title_column' => 'name',
        'locked' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
      'name' => [],
      'complete' => []      
    ];

}
