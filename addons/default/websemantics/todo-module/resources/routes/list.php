<?php

return [
    'admin/todo/list' => 'Websemantics\TodoModule\Http\Controller\Admin\ListController@index',
    'admin/todo/list/create' => 'Websemantics\TodoModule\Http\Controller\Admin\ListController@create',
    'admin/todo/list/edit/{id}' => 'Websemantics\TodoModule\Http\Controller\Admin\ListController@edit'
];
