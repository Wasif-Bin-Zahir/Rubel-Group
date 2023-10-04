<?php

namespace Modules\Ums\Services\Profile;

use Modules\Ums\Repositories\Profile\ResidentialInfoRepository;

class ResidentialInfoService
{
    /**
     * @var $residentialInfoRepository
     */
    protected $residentialInfoRepository;

    /**
     * Constructor
     *
     * @param ResidentialInfoRepository $residentialInfoRepository
     */
    public function __construct(ResidentialInfoRepository $residentialInfoRepository)
    {
        $this->residentialInfoRepository = $residentialInfoRepository;
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->residentialInfoRepository->find($id);
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
        return $this->residentialInfoRepository->update($data, $id);
    }

    /**
     * First or create data
     *
     * @param $data
     * @return mixed
     */
    public function firstOrCreate($data)
    {
        return $this->residentialInfoRepository->model->firstOrCreate($data);
    }
}
