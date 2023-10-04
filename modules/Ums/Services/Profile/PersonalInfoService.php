<?php

namespace Modules\Ums\Services\Profile;

use Modules\Ums\Repositories\Profile\PersonalInfoRepository;

class PersonalInfoService
{
    /**
     * @var $personalInfoRepository
     */
    protected $personalInfoRepository;

    /**
     * Constructor
     *
     * @param PersonalInfoRepository $personalInfoRepository
     */
    public function __construct(PersonalInfoRepository $personalInfoRepository)
    {
        $this->personalInfoRepository = $personalInfoRepository;
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->personalInfoRepository->find($id);
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
        return $this->personalInfoRepository->update($data, $id);
    }

    /**
     * Create data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->personalInfoRepository->model->create($data);
    }

    /**
     * First or create data
     *
     * @param $data
     * @return mixed
     */
    public function firstOrCreate($data)
    {
        return $this->personalInfoRepository->model->firstOrCreate($data);
    }
}
