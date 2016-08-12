<?php namespace Websemantics\TodoModule\List;

use Websemantics\TodoModule\List\Contract\ListRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ListRepository extends EntryRepository implements ListRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ListModel
     */
    protected $model;

    /**
     * Create a new ListRepository instance.
     *
     * @param ListModel $model
     */
    public function __construct(ListModel $model)
    {
        $this->model = $model;
    }
}
