<?php

namespace Modules\Ums\Services\Profile;

use Modules\Ums\Repositories\ContentRepository;

class ContentService
{
    /**
     * @var $userContentRepository
     */
    protected $userContentRepository;

    /**
     * Constructor
     *
     * @param ContentRepository $userContentRepository
     */
    public function __construct(ContentRepository $userContentRepository)
    {
        $this->userContentRepository = $userContentRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->userContentRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->userContentRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->userContentRepository->find($id);
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
        return $this->userContentRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->userContentRepository->delete($id);
    }
}
