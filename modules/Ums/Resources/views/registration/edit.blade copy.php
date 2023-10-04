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
                                        <label for="last_name" class="@error('last_name') text-danger @enderror">Last Name <span class="text-danger">*</span></label>
                                        <input id="last_name" name="last_name" value="{{ old('last_name') ?? $registration->last_name }}"
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
                                <div class="col-md-12">
                                    <h5 class="text-danger">***Need to fill-up (at least one) B.Sc./M.Sc. Information***</h5>
                                </div>
                                <div class="col-md-12">
                                    <h3>B.Sc Information</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bsc_session_id" class="@error('bsc_session_id') text-danger @enderror">Session <span class="text-danger">*</span></label>
                                        <select id="bsc_session_id" name="bsc_session_id"
                                                class="form-control select2 @error('bsc_session_id') is-invalid @enderror" data-placeholder="Select session">
                                            <option value="">Select session</option>
                                            @foreach($sessions as $session)
                                                <option value="{{ $session->id }}" {{ (old('bsc_session_id') ?? $registration->bsc_session_id) == $session->id ? 'selected' : '' }}>{{ $session->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('bsc_session_id')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bsc_batch_id" class="@error('bsc_batch_id') text-danger @enderror">Batch <span class="text-danger">*</span></label>
                                        <select id="bsc_batch_id" name="bsc_batch_id"
                                                class="form-control select2 @error('bsc_batch_id') is-invalid @enderror" data-placeholder="Select batch">
                                            <option value="">Select batch</option>
                                            @foreach($batches as $batch)
                                                @if($batch->type == 1)
                                                    <option value="{{ $batch->id }}" {{ (old('bsc_batch_id') ?? $registration->bsc_batch_id) == $batch->id ? 'selected' : '' }}>{{ $batch->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('bsc_batch_id')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bsc_reg_no" class="@error('bsc_reg_no') text-danger @enderror">Registration No <span class="text-danger">*</span></label>
                                        <input id="bsc_reg_no" name="bsc_reg_no" value="{{ old('bsc_reg_no') ?? $registration->bsc_reg_no }}" type="text"
                                               class="form-control @error('bsc_reg_no') is-invalid @enderror"
                                               placeholder="Enter registration no" autofocus>
                                        @error('bsc_reg_no')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bsc_student_id" class="@error('bsc_student_id') text-danger @enderror">Student ID <span class="text-danger">*</span></label>
                                        <input id="bsc_student_id" name="bsc_student_id" value="{{ old('bsc_student_id') ?? $registration->bsc_student_id }}" type="text"
                                               class="form-control @error('bsc_student_id') is-invalid @enderror"
                                               placeholder="Enter student id" autofocus>
                                        @error('bsc_student_id')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3>M.Sc Information</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="msc_session_id" class="@error('msc_session_id') text-danger @enderror">Session <span class="text-danger">*</span></label>
                                        <select id="msc_session_id" name="msc_session_id"
                                                class="form-control select2 @error('msc_session_id') is-invalid @enderror" data-placeholder="Select session">
                                            <option value="">Select session</option>
                                            @foreach($sessions as $session)
                                                <option value="{{ $session->id }}" {{ (old('msc_session_id') ?? $registration->msc_session_id) == $session->id ? 'selected' : '' }}>{{ $session->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('msc_session_id')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="msc_batch_id" class="@error('msc_batch_id') text-danger @enderror">Batch <span class="text-danger">*</span></label>
                                        <select id="msc_batch_id" name="msc_batch_id"
                                                class="form-control select2 @error('msc_batch_id') is-invalid @enderror" data-placeholder="Select batch">
                                            <option value="">Select batch</option>
                                            @foreach($batches as $batch)
                                                @if($batch->type == 2)
                                                    <option value="{{ $batch->id }}" {{ (old('msc_batch_id') ?? $registration->msc_batch_id) == $batch->id ? 'selected' : '' }}>{{ $batch->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('msc_batch_id')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="msc_reg_no" class="@error('msc_reg_no') text-danger @enderror">Registration No <span class="text-danger">*</span></label>
                                        <input id="msc_reg_no" name="msc_reg_no" value="{{ old('msc_reg_no') ?? $registration->msc_reg_no }}" type="text"
                                               class="form-control @error('msc_reg_no') is-invalid @enderror"
                                               placeholder="Enter registration no" autofocus>
                                        @error('msc_reg_no')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="msc_student_id" class="@error('msc_student_id') text-danger @enderror">Student ID <span class="text-danger">*</span></label>
                                        <input id="msc_student_id" name="msc_student_id" value="{{ old('msc_student_id') ?? $registration->msc_student_id }}" type="text"
                                               class="form-control @error('msc_student_id') is-invalid @enderror"
                                               placeholder="Enter student id" autofocus>
                                        @error('msc_student_id')
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
