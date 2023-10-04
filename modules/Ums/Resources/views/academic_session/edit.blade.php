@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Edit Academic Session</h3>
                            <a href="{{ route('backend.ums.academic-session.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">View Academic Session List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.academic-session.update', [$academicSession->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="@error('name') text-danger @enderror">Name <span class="text-danger">*</span></label>
                                        <input id="name" name="name" value="{{ old('name') ?: $academicSession->name }}"
                                               type="text" class="form-control @error('name') is-invalid @enderror"
                                               placeholder="Enter name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="code" class="@error('code') text-danger @enderror">Code <span class="text-danger">*</span></label>
                                        <input id="code" name="code" value="{{ old('code') ?: $academicSession->code }}"
                                               type="text" class="form-control @error('code') is-invalid @enderror"
                                               placeholder="Enter code" autofocus>
                                        @error('code')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.ums.academic-session.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
