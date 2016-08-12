<?php

return [
    'admin/todo/todo' => 'Websemantics\TodoModule\Http\Controller\Admin\TodoController@index',
    'admin/todo/todo/create' => 'Websemantics\TodoModule\Http\Controller\Admin\TodoController@create',
    'admin/todo/todo/edit/{id}' => 'Websemantics\TodoModule\Http\Controller\Admin\TodoController@edit'
];
