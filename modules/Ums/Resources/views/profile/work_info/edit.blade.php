@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.partials._profile_menu', ['active' => 3])
                </div>
                <div class="col-md-9">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Edit Work Info</h3>
                            <a href="{{ route('backend.ums.profile-work-info.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">View Work Info List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.profile-work-info.update', [$workInfo->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="company_name" class="@error('company_name') text-danger @enderror">Company
                                            Name <span class="text-danger">*</span></label>
                                        <input id="company_name" name="company_name"
                                               value="{{ old('company_name') ?: $workInfo->company_name }}"
                                               type="text"
                                               class="form-control @error('company_name') is-invalid @enderror"
                                               placeholder="Enter company_name" autofocus>
                                        @error('company_name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation" class="@error('designation') text-danger @enderror">Designation <span class="text-danger">*</span></label>
                                        <input id="designation" name="designation"
                                               value="{{ old('designation') ?: $workInfo->designation }}"
                                               type="text"
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
                                        <label for="department" class="@error('department') text-danger @enderror">Department</label>
                                        <input id="department" name="department"
                                               value="{{ old('department') ?: $workInfo->department }}" type="text"
                                               class="form-control @error('department') is-invalid @enderror"
                                               placeholder="Enter department" autofocus>
                                        @error('department')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_date" class="@error('start_date') text-danger @enderror">Start
                                            Date <span class="text-danger">*</span></label>
                                        <input id="start_date" name="start_date"
                                               value="{{ old('start_date') ?: $workInfo->start_date }}" type="text"
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
                                            Date</label>
                                        <input id="end_date" name="end_date"
                                               value="{{ old('end_date') ?: $workInfo->end_date }}" type="text"
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
                                        <label for="description"
                                               class="@error('description') text-danger @enderror">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3"
                                                  placeholder="Enter description">{!! old('description') ?: $workInfo->description !!}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_address"
                                               class="@error('company_address') text-danger @enderror">Company
                                            Address</label>
                                        <input id="company_address" name="company_address"
                                               value="{{ old('company_address') ?: $workInfo->company_address }}"
                                               type="text"
                                               class="form-control @error('company_address') is-invalid @enderror"
                                               placeholder="Enter company address" autofocus>
                                        @error('company_address')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_website"
                                               class="@error('company_website') text-danger @enderror">Company
                                            Website</label>
                                        <input id="company_website" name="company_website"
                                               value="{{ old('company_website') ?: $workInfo->company_website }}"
                                               type="text"
                                               class="form-control @error('company_website') is-invalid @enderror"
                                               placeholder="Enter company website" autofocus>
                                        @error('company_website')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.ums.profile-work-info.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
