<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleTodoCreateTodoStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'todo'
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
