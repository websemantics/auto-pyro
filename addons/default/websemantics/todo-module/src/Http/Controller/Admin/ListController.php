<?php namespace Websemantics\TodoModule\Http\Controller\Admin;

use Websemantics\TodoModule\List\Form\ListFormBuilder;
use Websemantics\TodoModule\List\Table\ListTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ListController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ListTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ListTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ListFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ListFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ListFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ListFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
