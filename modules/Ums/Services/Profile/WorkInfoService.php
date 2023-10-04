<?php

namespace Modules\Ums\Services\Profile;

use Modules\Ums\Repositories\Profile\WorkInfoRepository;

class WorkInfoService
{
    /**
     * @var $workInfoRepository
     */
    protected $workInfoRepository;

    /**
     * Constructor
     *
     * @param WorkInfoRepository $workInfoRepository
     */
    public function __construct(WorkInfoRepository $workInfoRepository)
    {
        $this->workInfoRepository = $workInfoRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->workInfoRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->workInfoRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->workInfoRepository->find($id);
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
        return $this->workInfoRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->workInfoRepository->delete($id);
    }
}
