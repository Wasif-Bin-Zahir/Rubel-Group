<?php

namespace Modules\Ums\Services;

use Modules\Ums\Repositories\BatchRepository;

class BatchService
{
    /**
     * @var $batchRepository
     */
    protected $batchRepository;

    /**
     * Constructor
     *
     * @param BatchRepository $batchRepository
     */
    public function __construct(BatchRepository $batchRepository)
    {
        $this->batchRepository = $batchRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->batchRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        // create roles
        return $this->batchRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->batchRepository->find($id);
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
        // update role
        return $this->batchRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->batchRepository->delete($id);
    }
}
