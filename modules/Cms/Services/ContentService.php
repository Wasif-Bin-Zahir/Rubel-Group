<?php

namespace Modules\Cms\Services;

use Modules\Cms\Repositories\ContentRepository;
use PhpParser\Node\Stmt\Return_;

class ContentService
{
    /**
     * @var $contentRepository
     */
    protected $contentRepository;

    /**
     * Constructor
     *
     * @param ContentRepository $contentRepository
     */
    public function __construct(ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }

    /**
     * Get all data
     *
     * @param int $limit
     * @return mixed
     */
    public function all($limit = 0)
    {
        return $this->contentRepository->paginate($limit);
    }

    /**
     * Get all data
     *
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->contentRepository->create($data);
    }

    /**
     * Find data
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->contentRepository->find($id);
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
        return $this->contentRepository->update($data, $id);
    }

    /**
     * Delete data
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->contentRepository->delete($id);
    }

    /**
     * Get all events
     *
     * @param int $limit
     * @return mixed
     */
    public function allEvents($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 1)->paginate($limit);
    }

    /**
     * Get all news
     *
     * @param int $limit
     * @return mixed
     */
    public function allNews($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 2)->paginate($limit);
    }

    /**
     * Get all notice
     *
     * @param int $limit
     * @return mixed
     */
    public function allNotice($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 3)->orderBy('sort_order','asc')->paginate($limit);
    }

    public function allSchedule($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 4)->orderBy('sort_order','asc')->paginate($limit);
    }

    public function allFloorplan($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 8)->orderBy('sort_order','asc')->paginate($limit);
    }
    public function allHotelinformation($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 11)->orderBy('sort_order','asc')->paginate($limit);
    }

    public function allBrochure($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 9)->orderBy('sort_order','asc')->paginate($limit);
    }

    public function allVenuemasterplan($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 10)->orderBy('sort_order','asc')->paginate($limit);
    }

    public function allSponsors($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 5)->orderBy('sort_order','asc')->paginate($limit);
    }

    public function allParticipants($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 6)->orderBy('sort_order','asc')->paginate($limit);
    }

    public function allParticipantCountries($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 7)->orderBy('title','asc')->paginate($limit);
    }

    /**
     * Get all service
     *
     * @param int $limit
     * @return mixed
     */
    public function allService($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 4)->paginate($limit);
    }

    /**
     * Get all gallery photos
     *
     * @param int $limit
     * @return mixed
     */
    public function allGalleryPhoto($limit = 0)
    {
        return $this->contentRepository->model->where('content_category_id', 5)->paginate($limit);
    }

    /**
     * Find data
     *
     * @param $attribute
     * @param $value
     * @return mixed
     */
    public function findBy($attribute, $value)
    {
        $content = $this->contentRepository->findBy($attribute, $value);
        if ($content) {
            $previous = $this->contentRepository->model
                ->where([
                    ['content_category_id', $content->content_category_id],
                    ['id', '<', $content->id]
                ])->orderBy('id', 'desc')->first();

            $next = $this->contentRepository->model
                ->where([
                    ['content_category_id', $content->content_category_id],
                    ['id', '>', $content->id]
                ])->orderBy('id', 'asc')->first();

            if ($previous) {
                $content['previous_slug'] = $previous->slug;
            }

            if ($next) {
                $content['next_slug'] = $next->slug;
            }
        }

        return $content;
    }
}
