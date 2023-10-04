@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.partials._profile_menu', ['active' => 6])
                </div>
                <div class="col-md-9">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Edit Interest</h3>
                            <a href="{{ route('backend.ums.profile-interest.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">Interest List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.profile-interest.update', [$interest->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="@error('name') text-danger @enderror">Name <span class="text-danger">*</span></label>
                                        <input id="name" name="name" value="{{ old('name') ?: $interest->name }}"
                                               type="text" class="form-control @error('name') is-invalid @enderror"
                                               placeholder="Enter name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.ums.profile-interest.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
