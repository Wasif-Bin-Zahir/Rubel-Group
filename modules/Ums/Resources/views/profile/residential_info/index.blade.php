@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.partials._profile_menu', ['active' => 1])
                </div>
                <div class="col-md-9">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Residential Info</h3>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.profile-residential-info.update', [$residentialInfo->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12"><h4>Present Address</h4></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="present_country"
                                               class="@error('present_country') text-danger @enderror">Country <span class="text-danger">*</span></label>
                                        <input id="present_country" name="present_country"
                                               value="{{ old('present_country') ?: $residentialInfo->present_country }}"
                                               type="text"
                                               class="form-control @error('present_country') is-invalid @enderror"
                                               placeholder="Enter present country" autofocus>
                                        @error('present_country')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="present_city" class="@error('present_city') text-danger @enderror">Division/City <span class="text-danger">*</span></label>
                                        <input id="present_city" name="present_city"
                                               value="{{ old('present_city') ?: $residentialInfo->present_city }}"
                                               type="text"
                                               class="form-control @error('present_city') is-invalid @enderror"
                                               placeholder="Enter present division/city" autofocus>
                                        @error('present_city')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="present_state"
                                               class="@error('present_state') text-danger @enderror">District/State <span class="text-danger">*</span></label>
                                        <input id="present_state" name="present_state"
                                               value="{{ old('present_state') ?: $residentialInfo->present_state }}"
                                               type="text"
                                               class="form-control @error('present_state') is-invalid @enderror"
                                               placeholder="Enter present district/state" autofocus>
                                        @error('present_state')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="present_area"
                                               class="@error('present_area') text-danger @enderror">Upazila/Area</label>
                                        <input id="present_area" name="present_area"
                                               value="{{ old('present_area') ?: $residentialInfo->present_area }}"
                                               type="text"
                                               class="form-control @error('present_area') is-invalid @enderror"
                                               placeholder="Enter present upazila/area" autofocus>
                                        @error('present_area')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="present_road"
                                               class="@error('present_road') text-danger @enderror">Union/Road</label>
                                        <input id="present_road" name="present_road"
                                               value="{{ old('present_road') ?: $residentialInfo->present_road }}"
                                               type="text"
                                               class="form-control @error('present_road') is-invalid @enderror"
                                               placeholder="Enter present union/road" autofocus>
                                        @error('present_road')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="present_address"
                                               class="@error('present_address') text-danger @enderror">Address</label>
                                        <input id="present_address" name="present_address"
                                               value="{{ old('present_address') ?: $residentialInfo->present_address }}"
                                               type="text"
                                               class="form-control @error('present_address') is-invalid @enderror"
                                               placeholder="Enter present address" autofocus>
                                        @error('present_address')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><h4>Permanent Address</h4></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permanent_country"
                                               class="@error('permanent_country') text-danger @enderror">Country <span class="text-danger">*</span></label>
                                        <input id="permanent_country" name="permanent_country"
                                               value="{{ old('permanent_country') ?: $residentialInfo->permanent_country }}"
                                               type="text"
                                               class="form-control @error('permanent_country') is-invalid @enderror"
                                               placeholder="Enter permanent country" autofocus>
                                        @error('permanent_country')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permanent_city" class="@error('permanent_city') text-danger @enderror">Division/City <span class="text-danger">*</span></label>
                                        <input id="permanent_city" name="permanent_city"
                                               value="{{ old('permanent_city') ?: $residentialInfo->permanent_city }}"
                                               type="text"
                                               class="form-control @error('permanent_city') is-invalid @enderror"
                                               placeholder="Enter permanent division/city" autofocus>
                                        @error('permanent_city')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permanent_state"
                                               class="@error('permanent_state') text-danger @enderror">District/State <span class="text-danger">*</span></label>
                                        <input id="permanent_state" name="permanent_state"
                                               value="{{ old('permanent_state') ?: $residentialInfo->permanent_state }}"
                                               type="text"
                                               class="form-control @error('permanent_state') is-invalid @enderror"
                                               placeholder="Enter permanent district/state" autofocus>
                                        @error('permanent_state')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permanent_area"
                                               class="@error('permanent_area') text-danger @enderror">Upazila/Area</label>
                                        <input id="permanent_area" name="permanent_area"
                                               value="{{ old('permanent_area') ?: $residentialInfo->permanent_area }}"
                                               type="text"
                                               class="form-control @error('permanent_area') is-invalid @enderror"
                                               placeholder="Enter permanent upazila/area" autofocus>
                                        @error('permanent_area')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permanent_road"
                                               class="@error('permanent_road') text-danger @enderror">Union/Road</label>
                                        <input id="permanent_road" name="permanent_road"
                                               value="{{ old('permanent_road') ?: $residentialInfo->permanent_road }}"
                                               type="text"
                                               class="form-control @error('permanent_road') is-invalid @enderror"
                                               placeholder="Enter permanent union/road" autofocus>
                                        @error('permanent_road')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permanent_address"
                                               class="@error('permanent_address') text-danger @enderror">Address</label>
                                        <input id="permanent_address" name="permanent_address"
                                               value="{{ old('permanent_address') ?: $residentialInfo->permanent_address }}"
                                               type="text"
                                               class="form-control @error('permanent_address') is-invalid @enderror"
                                               placeholder="Enter permanent address" autofocus>
                                        @error('permanent_address')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
