<?php namespace Websemantics\TodoModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class TodoController
 *
 *
 * @package   Websemantics\TodoModule\Http\Controller\Admin
 */

class TodoController extends AdminController
{
 /**
   * Return master admin view.
   *
   * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
   */
  public function index()
  {
       return view('websemantics.module.todo::admin.master');
  }
}