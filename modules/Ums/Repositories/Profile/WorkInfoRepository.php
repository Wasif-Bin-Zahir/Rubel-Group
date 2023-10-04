<?php

namespace Modules\Ums\Repositories\Profile;

use App\Repositories\BaseRepository;

class WorkInfoRepository extends BaseRepository
{
    /**
     * Set model
     *
     * @return string
     */
    public function model()
    {
        return 'Modules\\Ums\\Entities\\UserWorkInfo';
    }
}
