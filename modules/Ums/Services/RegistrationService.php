<?php

namespace Modules\Ums\Services;

use Modules\Ums\Repositories\RegistrationRepository;

class RegistrationService
{
    /**
     * @var $registrationRepository
     */
    protected $registrationRepository;

    /**
     * Constructor
     *
     * @param RegistrationRepository $registrationRepository
     */
    public function __construct(RegistrationRepository $registrationRepository)
    {
        $this->registrationRepository = $registrationRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->registrationRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->registrationRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->registrationRepository->find($id);
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
        return $this->registrationRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->registrationRepository->delete($id);
    }

    /**
     * First or create data
     *
     * @param $data
     * @return mixed
     */
    public function firstOrCreate($data)
    {
        return $this->registrationRepository->model->firstOrCreate($data);
    }
}
