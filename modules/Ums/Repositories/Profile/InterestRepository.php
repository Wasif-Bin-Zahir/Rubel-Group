<?php

namespace Modules\Ums\Repositories\Profile;

use App\Repositories\BaseRepository;

class InterestRepository extends BaseRepository
{
    /**
     * Set model
     *
     * @return string
     */
    public function model()
    {
        return 'Modules\\Ums\\Entities\\UserInterest';
    }
}
