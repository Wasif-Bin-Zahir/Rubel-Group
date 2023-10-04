@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.partials._profile_menu', ['active' => 2])
                </div>
                <div class="col-md-9">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Add Educational Information</h3>
                            <a href="{{ route('backend.ums.profile-educational-info.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">Educational Info List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.profile-educational-info.store'), 'method' => 'user-educational-info', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="institute_name"
                                               class="@error('institute_name') text-danger @enderror">Institute
                                            Name <span class="text-danger">*</span></label>
                                        <input id="institute_name" name="institute_name"
                                               value="{{ old('institute_name') }}" type="text"
                                               class="form-control @error('institute_name') is-invalid @enderror"
                                               placeholder="Enter institute name" autofocus>
                                        @error('institute_name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course_name" class="@error('course_name') text-danger @enderror">Course
                                            Name <span class="text-danger">*</span></label>
                                        <input id="course_name" name="course_name"
                                               value="{{ old('course_name') }}" type="text"
                                               class="form-control @error('course_name') is-invalid @enderror"
                                               placeholder="Enter course name" autofocus>
                                        @error('course_name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="degree_name" class="@error('degree_name') text-danger @enderror">Degree
                                            Name <span class="text-danger">*</span></label>
                                        <input id="degree_name" name="degree_name"
                                               value="{{ old('degree_name') }}" type="text"
                                               class="form-control @error('degree_name') is-invalid @enderror"
                                               placeholder="Enter degree name" autofocus>
                                        @error('degree_name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_date" class="@error('start_date') text-danger @enderror">Start
                                            Date <span class="text-danger">*</span></label>
                                        <input id="start_date" name="start_date" value="{{ old('start_date') }}"
                                               type="text"
                                               class="form-control datepicker @error('start_date') is-invalid @enderror"
                                               placeholder="Enter start date" autofocus>
                                        @error('start_date')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end_date" class="@error('end_date') text-danger @enderror">End
                                            Date <span class="text-danger">*</span></label>
                                        <input id="end_date" name="end_date" value="{{ old('end_date') }}" type="text"
                                               class="form-control datepicker @error('end_date') is-invalid @enderror"
                                               placeholder="Enter end date" autofocus>
                                        @error('end_date')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description" class="@error('description') text-danger @enderror">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3"
                                                  placeholder="Enter description">{{ old('description') }}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="institute_website"
                                               class="@error('institute_website') text-danger @enderror">Institute
                                            Website</label>
                                        <input id="institute_website" name="institute_website"
                                               value="{{ old('institute_website') }}" type="text"
                                               class="form-control @error('institute_website') is-invalid @enderror"
                                               placeholder="Enter institute website" autofocus>
                                        @error('institute_website')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="institute_email"
                                               class="@error('institute_email') text-danger @enderror">Institute
                                            Email</label>
                                        <input id="institute_email" name="institute_email"
                                               value="{{ old('institute_email') }}" type="email"
                                               class="form-control @error('institute_email') is-invalid @enderror"
                                               placeholder="Enter institute email" autofocus>
                                        @error('institute_email')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="institute_phone"
                                               class="@error('institute_phone') text-danger @enderror">Institute
                                            Phone</label>
                                        <input id="institute_phone" name="institute_phone"
                                               value="{{ old('institute_phone') }}" type="text"
                                               class="form-control @error('institute_phone') is-invalid @enderror"
                                               placeholder="Enter institute phone" autofocus>
                                        @error('institute_phone')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.ums.profile-educational-info.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
