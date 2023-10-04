<?php

namespace Modules\Cms\Services;

use Modules\Cms\Repositories\CommitteeMemberRepository;

class CommitteeMemberService
{
    /**
     * @var $committeeMemberRepository
     */
    protected $committeeMemberRepository;

    /**
     * Constructor
     *
     * @param CommitteeMemberRepository $committeeMemberRepository
     */
    public function __construct(CommitteeMemberRepository $committeeMemberRepository)
    {
        $this->committeeMemberRepository = $committeeMemberRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->committeeMemberRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->committeeMemberRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->committeeMemberRepository->find($id);
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
        return $this->committeeMemberRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->committeeMemberRepository->delete($id);
    }

    /**
     * Find using category id
     *
     * @param $id
     * @return mixed
     */
    public function whereCategoryId($id)
    {
        return $this->committeeMemberRepository->model->where('committee_category_id', $id)->orderBy('sort_order','ASC')->get();
    }
}
