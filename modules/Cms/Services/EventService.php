<?php

namespace Modules\Cms\Services;

use Modules\Cms\Repositories\EventRepository;

class EventService
{
    /**
     * @var $EventRepository
     */
    protected $EventRepository;

    /**
     * Constructor
     *
     * @param EventRepository $EventRepository
     */
    public function __construct(EventRepository $EventRepository)
    {
        $this->EventRepository = $EventRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->EventRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->EventRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->EventRepository->find($id);
    }

    /**
     * Update data
     *
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        return $this->EventRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->EventRepository->delete($id);
    }

    public function first()
    {
        return $this->EventRepository->model->first();
    }
}
