<?php

namespace Modules\Ums\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

// requests...
use Modules\Ums\Http\Requests\Profile\SkillStoreRequest;
use Modules\Ums\Http\Requests\Profile\SkillUpdateRequest;

// datatable...
use Modules\Ums\DataTables\Profile\SkillDataTable;

// services...
use Modules\Ums\Services\UserService;
use Modules\Ums\Services\Profile\SkillService;

class SkillController extends Controller
{
    /**
     * @var $skillService
     */
    protected $skillService;

    /**
     * Constructor
     *
     * @param SkillService $skillService
     */
    public function __construct(SkillService $skillService)
    {
        $this->skillService = $skillService;
    }

    /**
     * Skill list
     *
     * @param SkillDatatable $datatable
     * @return \Illuminate\View\View
     */
    public function index(SkillDatatable $datatable)
    {
        return $datatable->render('ums::profile.skill.index');
    }

    /**
     * Create skill
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view
        return view('ums::profile.skill.create');
    }


    /**
     * Store skill
     *
     * @param SkillStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SkillStoreRequest $request)
    {
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // create skill
        $skill = $this->skillService->create($data);
        // check if skill created
        if ($skill) {
            // flash notification
            notifier()->success('Skill created successfully.');
        } else {
            // flash notification
            notifier()->error('Skill cannot be created successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Show skill.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // get skill
        $skill = $this->skillService->find($id);
        // check if skill doesn't exist
        if (empty($skill) && $skill->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Skill not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.skill.show', compact('skill'));
    }

    /**
     * Show skill.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // get skill
        $skill = $this->skillService->find($id);
        // check if skill doesn't exist
        if (empty($skill) && $skill->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Skill not found!');
            // redirect back
            return redirect()->back();
        }
        // return view
        return view('ums::profile.skill.edit', compact('skill'));
    }

    /**
     * Update skill
     *
     * @param SkillUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SkillUpdateRequest $request, $id)
    {
        // get skill
        $skill = $this->skillService->find($id);
        // check if skill doesn't exist
        if (empty($skill) && $skill->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Skill not found!');
            // redirect back
            return redirect()->back();
        }
        // data
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        // update skill
        $skill = $this->skillService->update($data, $id);
        // check if skill updated
        if ($skill) {
            // flash notification
            notifier()->success('Skill updated successfully.');
        } else {
            // flash notification
            notifier()->error('Skill cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }

    /**
     * Delete skill
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // get skill
        $skill = $this->skillService->find($id);
        // check if skill doesn't exist
        if (empty($skill) && $skill->user_id != auth()->user()->id) {
            // flash notification
            notifier()->error('Skill not found!');
            // redirect back
            return redirect()->back();
        }
        // delete skill
        if ($this->skillService->delete($id)) {
            // flash notification
            notifier()->success('Skill deleted successfully.');
        } else {
            // flash notification
            notifier()->success('Skill cannot be deleted.');
        }
        // redirect back
        return redirect()->back();
    }
}
