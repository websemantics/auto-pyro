<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleTodoCreateTodoFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
      'name' => [
          'type' => 'anomaly.field_type.text',
          'config' => ['max_length' => 150]
      ],
      'complete' => [
          'type' => 'anomaly.field_type.boolean'
      ]      
    ];

}
