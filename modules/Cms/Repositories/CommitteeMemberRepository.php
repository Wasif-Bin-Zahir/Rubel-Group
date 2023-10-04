<?php

namespace Modules\Cms\Repositories;

use App\Repositories\BaseRepository;

class CommitteeMemberRepository extends BaseRepository
{
    /**
     * Set model
     *
     * @return string
     */
    public function model()
    {
        return 'Modules\\Cms\\Entities\\CommitteeMember';
    }
}
