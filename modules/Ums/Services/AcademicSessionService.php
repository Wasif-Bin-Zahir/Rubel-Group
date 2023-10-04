<?php

namespace Modules\Ums\Services;

use Modules\Ums\Repositories\AcademicSessionRepository;

class AcademicSessionService
{
    /**
     * @var $academicSessionRepository
     */
    protected $academicSessionRepository;

    /**
     * Constructor
     *
     * @param AcademicSessionRepository $academicSessionRepository
     */
    public function __construct(AcademicSessionRepository $academicSessionRepository)
    {
        $this->academicSessionRepository = $academicSessionRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->academicSessionRepository->paginate($limit);
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
        return $this->academicSessionRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->academicSessionRepository->find($id);
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
        return $this->academicSessionRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->academicSessionRepository->delete($id);
    }
}
