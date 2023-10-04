<?php

namespace Modules\Cms\Services;

use Modules\Cms\Repositories\CommitteeCategoryRepository;

class CommitteeCategoryService
{
    /**
     * @var $committeeCategoryRepository
     */
    protected $committeeCategoryRepository;

    /**
     * Constructor
     *
     * @param CommitteeCategoryRepository $committeeCategoryRepository
     */
    public function __construct(CommitteeCategoryRepository $committeeCategoryRepository)
    {
        $this->committeeCategoryRepository = $committeeCategoryRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->committeeCategoryRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->committeeCategoryRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->committeeCategoryRepository->find($id);
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
        return $this->committeeCategoryRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->committeeCategoryRepository->delete($id);
    }
}
