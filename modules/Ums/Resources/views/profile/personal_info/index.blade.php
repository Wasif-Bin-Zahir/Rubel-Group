@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.partials._profile_menu', ['active' => 0])
                </div>
                <div class="col-md-9">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Personal Info</h3>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.profile-personal-info.update', [$personalInfo->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name" class="@error('first_name') text-danger @enderror">First
                                            Name <span class="text-danger">*</span></label>
                                        <input id="first_name" name="first_name"
                                               value="{{ old('first_name') ?: $personalInfo->first_name }}"
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
                                        <label for="last_name" class="@error('last_name') text-danger @enderror">Last
                                            Name <span class="text-danger">*</span></label>
                                        <input id="last_name" name="last_name"
                                               value="{{ old('last_name') ?: $personalInfo->last_name }}"
                                               type="text" class="form-control @error('last_name') is-invalid @enderror"
                                               placeholder="Enter last name" autofocus>
                                        @error('last_name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name_bn" class="@error('first_name_bn') text-danger @enderror">First
                                            Name (Bengali)</label>
                                        <input id="first_name_bn" name="first_name_bn"
                                               value="{{ old('first_name_bn') ?: $personalInfo->first_name_bn }}"
                                               type="text"
                                               class="form-control @error('first_name_bn') is-invalid @enderror"
                                               placeholder="Enter first name (bengali)" autofocus>
                                        @error('first_name_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name_bn" class="@error('last_name_bn') text-danger @enderror">Last
                                            Name (Bengali)</label>
                                        <input id="last_name_bn" name="last_name_bn"
                                               value="{{ old('last_name_bn') ?: $personalInfo->last_name_bn }}"
                                               type="text" class="form-control @error('last_name_bn') is-invalid @enderror"
                                               placeholder="Enter last name (bengali)" autofocus>
                                        @error('last_name_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="designation" class="@error('designation') text-danger @enderror">Designation <span class="text-danger">*</span></label>
                                        <input id="designation" name="designation"
                                               value="{{ old('designation') ?: $personalInfo->designation }}"
                                               type="text" class="form-control @error('designation') is-invalid @enderror"
                                               placeholder="Enter designation" autofocus>
                                        @error('designation')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="about" class="@error('about') text-danger @enderror">About</label>
                                        <textarea id="about" name="about" rows="3"
                                                  class="form-control @error('about') is-invalid @enderror"
                                                  placeholder="Enter about yourself">{{ old('about') ?: $personalInfo->about }}</textarea>
                                        @error('about')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="personal_email"
                                               class="@error('personal_email') text-danger @enderror">Personal
                                            Email <span class="text-danger">*</span></label>
                                        <input id="personal_email" name="personal_email"
                                               value="{{ old('personal_email') ?: $personalInfo->personal_email }}"
                                               type="text"
                                               class="form-control @error('personal_email') is-invalid @enderror"
                                               placeholder="Enter personal email" autofocus>
                                        @error('personal_email')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="professional_email"
                                               class="@error('professional_email') text-danger @enderror">Professional
                                            Email</label>
                                        <input id="professional_email" name="professional_email"
                                               value="{{ old('professional_email') ?: $personalInfo->professional_email }}"
                                               type="text"
                                               class="form-control @error('professional_email') is-invalid @enderror"
                                               placeholder="Enter professional email" autofocus>
                                        @error('professional_email')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile_no" class="@error('mobile_no') text-danger @enderror">Mobile
                                            No <span class="text-danger">*</span></label>
                                        <input id="mobile_no" name="mobile_no"
                                               value="{{ old('mobile_no') ?: $personalInfo->mobile_no }}"
                                               type="text" class="form-control @error('mobile_no') is-invalid @enderror"
                                               placeholder="Enter mobile no" autofocus>
                                        @error('mobile_no')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_no" class="@error('phone_no') text-danger @enderror">Phone
                                            No</label>
                                        <input id="phone_no" name="phone_no"
                                               value="{{ old('phone_no') ?: $personalInfo->phone_no }}"
                                               type="text" class="form-control @error('phone_no') is-invalid @enderror"
                                               placeholder="Enter phone no" autofocus>
                                        @error('phone_no')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fax_no" class="@error('fax_no') text-danger @enderror">Fax
                                            No</label>
                                        <input id="fax_no" name="fax_no"
                                               value="{{ old('fax_no') ?: $personalInfo->fax_no }}" type="text"
                                               class="form-control @error('fax_no') is-invalid @enderror"
                                               placeholder="Enter fax no" autofocus>
                                        @error('fax_no')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob" class="@error('dob') text-danger @enderror">Date of
                                            Birth</label>
                                        <input id="dob" name="dob" value="{{ old('dob') ?: $personalInfo->dob }}"
                                               type="text" class="form-control datepicker @error('dob') is-invalid @enderror"
                                               placeholder="Enter dob" autofocus>
                                        @error('dob')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="blood_group" class="@error('blood_group') text-danger @enderror">Blood
                                            Group</label>
                                        <select id="blood_group" name="blood_group"
                                                class="form-control @error('blood_group') is-invalid @enderror">
                                            <option value="">Select Blood Group</option>
                                            @foreach(config('core.blood_groups') as $blood_group_key => $blood_group)
                                                <option
                                                    value="{{ $blood_group_key }}" {{ $blood_group_key == $personalInfo->blood_group ? 'selected' : '' }}>{{ $blood_group }}</option>
                                            @endforeach
                                        </select>
                                        @error('blood_group')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender"
                                               class="@error('gender') text-danger @enderror">Gender</label>
                                        <select id="gender" name="gender"
                                                class="form-control @error('gender') is-invalid @enderror">
                                            <option value="">Select Gender</option>
                                            @foreach(config('core.genders') as $gender_key => $gender)
                                                <option
                                                    value="{{ $gender_key }}" {{ $gender_key == $personalInfo->gender ? 'selected' : '' }}>{{ $gender }}</option>
                                            @endforeach
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                {{--
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="@error('image') text-danger @enderror">Image</label>
                                        <input id="image" name="image" value="{{ old('image') }}" type="file" class="form-control @error('image') is-invalid @enderror" placeholder="Select File" autofocus>
                                        @if(isset($personalInfo->image->file_name))
                                            <span class="invalid-feedback text-dark" role="alert"><strong>Image: {{ $personalInfo->image->file_name }}</strong></span>
                                        @endif
                                        @error('image')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                --}}
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
