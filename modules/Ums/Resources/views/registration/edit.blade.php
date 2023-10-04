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
                            <h3 class="card-title mt-1">Update Registration</h3>
                            <a href="{{ route('backend.ums.registration.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">View Registration List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.registration.update', [$registration->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name" class="@error('first_name') text-danger @enderror">First Name <span class="text-danger">*</span></label>
                                        <input id="first_name" name="first_name" value="{{ old('first_name') ?? $registration->first_name }}"
                                               type="text"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               placeholder="Enter first name" autofocus>
                                        @error('first_name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="@error('email') text-danger @enderror">Email <span class="text-danger">*</span></label>
                                        <input id="email" name="email" value="{{ old('email') ?? $registration->email }}" type="text"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Enter email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="@error('phone') text-danger @enderror">Phone <span class="text-danger">*</span></label>
                                        <input id="phone" name="phone" value="{{ old('phone') ?? $registration->phone }}" type="text"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               placeholder="Enter phone" autofocus>
                                        @error('phone')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation" class="@error('designation') text-danger @enderror">Designation<span class="text-danger">*</span></label>
                                        <input id="designation" name="designation" value="{{ old('designation') ?? $registration->designation }}" type="text"
                                               class="form-control @error('designation') is-invalid @enderror"
                                               placeholder="Enter designation" autofocus>
                                        @error('designation')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company" class="@error('company') text-danger @enderror">Company<span class="text-danger">*</span></label>
                                        <input id="company" name="company" value="{{ old('company') ?? $registration->company }}" type="text"
                                               class="form-control @error('company') is-invalid @enderror"
                                               placeholder="Enter company" autofocus>
                                        @error('company')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.ums.user.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
