<?php

namespace Modules\Cms\Http\Controllers\Api;

use App\Http\Controllers\Controller;

// services...
use Modules\Cms\Services\CommitteeMemberService;

// requests...
use Modules\Cms\Http\Requests\CommitteeMemberStoreRequest;
use Modules\Cms\Http\Requests\CommitteeMemberUpdateRequest;

// resources...
use Modules\Cms\Transformers\CommitteeMemberResource;

class CommitteeMemberController extends Controller
{
    /**
     * @var $committeeMemberService
     */
    protected $committeeMemberService;

    /**
     * Constructor
     *
     * @param CommitteeMemberService $committeeMemberService
     */
    public function __construct(CommitteeMemberService $committeeMemberService)
    {
        $this->committeeMemberService = $committeeMemberService;
    }

    /**
     * CommitteeMember list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all committeeMembers
        $committeeMembers = $this->committeeMemberService->all(request()->get('limit') ?? 0);
        // if no committeeMember found
        if (!count($committeeMembers)) {
            // error response
            return responder()
                ->status('success')
                ->code(404)
                ->message('CommitteeMember not available.');
        }
        // transform committeeMembers
        $committeeMembers = CommitteeMemberResource::collection($committeeMembers);
        // success response
        return responder()
            ->status('success')
            ->code(200)
            ->message('Data available')
            ->data($committeeMembers);
    }

    /**
     * Store a committeeMember.
     *
     * @param CommitteeMemberStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommitteeMemberStoreRequest $request)
    {
        // create committeeMember
        $committeeMember = $this->committeeMemberService->create($request->all());
        // check if created
        if ($committeeMember) {
            // transform committeeMember
            $committeeMember = CommitteeMemberResource::make($committeeMember);
            // success response
            return responder()
                ->status('success')
                ->code(201)
                ->message('CommitteeMember created successfully.')
                ->data($committeeMember);
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('CommitteeMember cannot be created.');
        }
    }

    /**
     * Show committeeMember.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get committeeMember
        $committeeMember = $this->committeeMemberService->find($id);
        // if no committeeMember found
        if (empty($committeeMember)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('CommitteeMember not found.');
        }
        // transform committeeMember
        $committeeMember = CommitteeMemberResource::make($committeeMember);
        // success response
        return responder()
            ->status('success')
            ->code(200)
            ->message('CommitteeMember is available.')
            ->data($committeeMember);
    }

    /**
     * Update committeeMember.
     *
     * @param CommitteeMemberUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommitteeMemberUpdateRequest $request, $id)
    {
        // get committeeMember
        $committeeMember = $this->committeeMemberService->find($id);
        // if no committeeMember found
        if (empty($committeeMember)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('CommitteeMember not found.');
        }
        // update committeeMember
        $committeeMember = $this->committeeMemberService->update($request->all(), $id);
        // check if updated
        if ($committeeMember) {
            // get updated committeeMember
            $committeeMember = $this->committeeMemberService->find($id);
            // transform committeeMember
            $committeeMember = CommitteeMemberResource::make($committeeMember);
            // success response
            return responder()
                ->status('success')
                ->code(200)
                ->message('CommitteeMember updated successfully.')
                ->data($committeeMember);
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('CommitteeMember cannot be updated.');
        }
    }

    /**
     * Remove committeeMember.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // get committeeMember
        $committeeMember = $this->committeeMemberService->find($id);
        // if no committeeMember found
        if (empty($committeeMember)) {
            // error response
            return responder()
                ->status('error')
                ->code(404)
                ->message('CommitteeMember not found.');
        }
        // delete committeeMember
        if ($this->committeeMemberService->delete($id)) {
            // success response
            return responder()
                ->status('success')
                ->code(200)
                ->message('CommitteeMember deleted successfully.');
        } else {
            // error response
            return responder()
                ->status('error')
                ->code(400)
                ->message('CommitteeMember cannot be deleted.');
        }
    }
}
