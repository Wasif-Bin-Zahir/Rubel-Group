@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.partials._profile_menu', ['active' => 4])
                </div>
                <div class="col-md-9">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Skill Details</h3>
                            <a href="{{ route('backend.ums.profile-skill.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">Skill List</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="@error('name') text-danger @enderror">Name</label>
                                        <input id="name" name="name" value="{{ $userSkill->name ?: 'N/A'}}" type="text"
                                               class="form-control-plaintext" readonly>
                                        @error('name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="proficiency" class="@error('proficiency') text-danger @enderror">Proficiency</label>
                                        <input id="proficiency" name="proficiency"
                                               value="{{ $userSkill->proficiency ?: 'N/A'}}" type="text"
                                               class="form-control-plaintext" readonly>
                                        @error('proficiency')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('backend.ums.profile-skill.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
