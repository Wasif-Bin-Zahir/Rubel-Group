<?php

namespace Modules\Ums\Services\Profile;

use Modules\Ums\Repositories\Profile\InterestRepository;

class InterestService
{
    /**
     * @var $interestRepository
     */
    protected $interestRepository;

    /**
     * Constructor
     *
     * @param InterestRepository $interestRepository
     */
    public function __construct(InterestRepository $interestRepository)
    {
        $this->interestRepository = $interestRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->interestRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->interestRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->interestRepository->find($id);
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
        return $this->interestRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->interestRepository->delete($id);
    }
}
