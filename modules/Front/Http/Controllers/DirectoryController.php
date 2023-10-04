<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Ums\Entities\User;

class DirectoryController extends Controller
{
    public function index()
    {
        // get user
        $users = User::with(['personalInfo'])->where('is_alumni', 1)->paginate(50);

        return view('front::' . config('core.theme') . '.directory.index', compact('users'));
    }

    public function show($username)
    {
        // get user
        $data = User::with([
            'personalInfo',
            'residentialInfo',
            'workInfos',
            'skillInfos',
            'educationalInfos',
            'languages',
            'interests'
        ])->where('username', $username)->firstOrFail();

        return view('front::' . config('core.theme') . '.directory.profile', compact('data'));
    }
}
