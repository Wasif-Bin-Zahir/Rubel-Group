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
                            <h3 class="card-title mt-1">Committee Member Details</h3>
                            <a href="{{ route('backend.cms.committee-member.index') }}" type="button" class="btn btn-success btn-sm text-white float-right">View Committee Member List</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="@error('name') text-danger @enderror">Name</label>
                                        <input id="name" name="name" value="{{ $committeeMember->name ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name_bn" class="@error('name_bn') text-danger @enderror">Name (Bengali)</label>
                                        <input id="name_bn" name="name_bn" value="{{ $committeeMember->name_bn ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('name_bn')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="designation" class="@error('designation') text-danger @enderror">Designation</label>
                                        <input id="designation" name="designation" value="{{ $committeeMember->designation ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('designation')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="designation_bn" class="@error('designation_bn') text-danger @enderror">Designation (Bengali)</label>
                                        <input id="designation_bn" name="designation_bn" value="{{ $committeeMember->designation_bn ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('designation_bn')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="bio" class="@error('bio') text-danger @enderror">Bio</label>
                                        <input id="bio" name="bio" value="{{ $committeeMember->bio ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('bio')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="bio_bn" class="@error('bio_bn') text-danger @enderror">Bio (Bengali)</label>
                                        <input id="bio_bn" name="bio_bn" value="{{ $committeeMember->bio_bn ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('bio_bn')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email" class="@error('email') text-danger @enderror">Email</label>
                                        <input id="email" name="email" value="{{ $committeeMember->email ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone" class="@error('phone') text-danger @enderror">Phone</label>
                                        <input id="phone" name="phone" value="{{ $committeeMember->phone ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mobile" class="@error('mobile') text-danger @enderror">Mobile</label>
                                        <input id="mobile" name="mobile" value="{{ $committeeMember->mobile ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fax" class="@error('fax') text-danger @enderror">Fax</label>
                                        <input id="fax" name="fax" value="{{ $committeeMember->fax ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('fax')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="facebook" class="@error('facebook') text-danger @enderror">Facebook</label>
                                        <input id="facebook" name="facebook" value="{{ $committeeMember->facebook ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('facebook')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="twitter" class="@error('twitter') text-danger @enderror">Twitter</label>
                                        <input id="twitter" name="twitter" value="{{ $committeeMember->twitter ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('twitter')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="linkedin" class="@error('linkedin') text-danger @enderror">Linkedin</label>
                                        <input id="linkedin" name="linkedin" value="{{ $committeeMember->linkedin ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('linkedin')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="committee_category_id" class="@error('committee_category_id') text-danger @enderror">CommitteeCategoryId</label>
                                        <input id="committee_category_id" name="committee_category_id" value="{{ $committeeMember->committee_category_id ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('committee_category_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('backend.cms.committee-member.index') }}" type="button" class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
