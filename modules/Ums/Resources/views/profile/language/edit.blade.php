@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.partials._profile_menu', ['active' => 5])
                </div>
                <div class="col-md-9">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Edit Language Info</h3>
                            <a href="{{ route('backend.ums.profile-language.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">Language Info List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.profile-language.update', [$language->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="@error('name') text-danger @enderror">Name <span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" value="{{ old('name') ?? $language->name }}"
                                               class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="proficiency"
                                               class="d-block @error('proficiency') text-danger @enderror">Proficiency <span class="text-danger">*</span></label>
                                        <select id="proficiency" name="proficiency"
                                                class="form-control @error('proficiency') is-invalid @enderror">
                                            <option value="">Select Proficiency</option>
                                            @foreach(config('core.language_proficiency') as $language_proficiency_key => $language_proficiency)
                                                <option value="{{ $language_proficiency_key }}" {{ $language_proficiency_key == (old('proficiency') ?? $language->proficiency) ? 'selected' : '' }}>{{ $language_proficiency }}</option>
                                            @endforeach
                                        </select>
                                        @error('proficiency')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.ums.profile-language.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
