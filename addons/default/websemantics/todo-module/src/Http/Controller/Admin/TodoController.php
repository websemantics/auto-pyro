<?php namespace Websemantics\TodoModule\Http\Controller\Admin;

use Websemantics\TodoModule\Todo\Form\TodoFormBuilder;
use Websemantics\TodoModule\Todo\Table\TodoTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TodoController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TodoTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TodoTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TodoFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TodoFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TodoFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TodoFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
