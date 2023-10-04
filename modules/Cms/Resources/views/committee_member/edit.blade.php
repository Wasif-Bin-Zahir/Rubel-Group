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
                            <h3 class="card-title mt-1">Edit Committee Member</h3>
                            <a href="{{ route('backend.cms.committee-member.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">View Committee Member List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.cms.committee-member.update', [$committeeMember->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="committee_category_id"
                                               class="@error('committee_category_id') text-danger @enderror">Category <span class="text-danger">*</span></label>
                                        <select id="committee_category_id" name="committee_category_id"
                                                class="form-control @error('committee_category_id') is-invalid @enderror">
                                            <option value="">Select Category</option>
                                            @foreach($committeeCategories as $committeeCategory)
                                                <option value="{{ $committeeCategory->id }}" {{ old('committee_category_id') ? (old('committee_category_id') == $committeeCategory->id ? 'selected' : '') : ($committeeMember->committee_category_id == $committeeCategory->id ? 'selected' : '') }}>{{ $committeeCategory->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('committee_category_id')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="avatar" class="@error('avatar') text-danger @enderror">Avatar</label>
                                        <input id="avatar" name="avatar" value="{{ old('avatar') }}" type="file"
                                               class="form-control @error('avatar') is-invalid @enderror"
                                               placeholder="Select File" autofocus>
                                        @if(isset($committeeMember->avatar->file_name))
                                            <span class="invalid-feedback text-dark"
                                                  role="alert"><strong>Avatar: {{ $committeeMember->avatar->file_name }}</strong></span>
                                        @endif
                                        @error('avatar')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="@error('name') text-danger @enderror">Name <span class="text-danger">*</span></label>
                                        <input id="name" name="name" value="{{ old('name') ?: $committeeMember->name }}"
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
                                        <label for="name_bn" class="@error('name_bn') text-danger @enderror">Name (Bengali)</label>
                                        <input id="name_bn" name="name_bn" value="{{ old('name_bn') ?: $committeeMember->name_bn }}"
                                               type="text" class="form-control @error('name_bn') is-invalid @enderror"
                                               placeholder="Enter name" autofocus>
                                        @error('name_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company" class="@error('company') text-danger @enderror">Company <span class="text-danger">*</span></label>
                                        <input id="company" name="company"
                                               value="{{ old('company') ?: $committeeMember->company }}" type="text"
                                               class="form-control @error('company') is-invalid @enderror"
                                               placeholder="Enter company" autofocus>
                                        @error('company')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_bn" class="@error('company_bn') text-danger @enderror">company (Bengali)</label>
                                        <input id="company_bn" name="company_bn"
                                               value="{{ old('company_bn') ?: $committeeMember->company_bn }}" type="text"
                                               class="form-control @error('company_bn') is-invalid @enderror"
                                               placeholder="Enter company_bn" autofocus>
                                        @error('company_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation" class="@error('designation') text-danger @enderror">Designation <span class="text-danger">*</span></label>
                                        <input id="designation" name="designation"
                                               value="{{ old('designation') ?: $committeeMember->designation }}" type="text"
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
                                        <label for="designation_bn" class="@error('designation_bn') text-danger @enderror">Designation (Bengali)</label>
                                        <input id="designation_bn" name="designation_bn"
                                               value="{{ old('designation_bn') ?: $committeeMember->designation_bn }}" type="text"
                                               class="form-control @error('designation_bn') is-invalid @enderror"
                                               placeholder="Enter designation_bn" autofocus>
                                        @error('designation_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bio" class="@error('bio') text-danger @enderror">Bio</label>
                                        <textarea id="bio" name="bio" class="form-control" rows="3"
                                                  placeholder="Enter bio">{{ old('bio') ?: $committeeMember->bio }}</textarea>
                                        @error('bio')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bio_bn" class="@error('bio_bn') text-danger @enderror">Bio (Bengali)</label>
                                        <textarea id="bio_bn" name="bio_bn" class="form-control" rows="3"
                                                  placeholder="Enter bio_bn">{{ old('bio_bn') ?: $committeeMember->bio_bn }}</textarea>
                                        @error('bio_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="@error('email') text-danger @enderror">Email</label>
                                        <input id="email" name="email" value="{{ old('email') ?: $committeeMember->email }}"
                                               type="text" class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Enter email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="@error('phone') text-danger @enderror">Phone</label>
                                        <input id="phone" name="phone" value="{{ old('phone') ?: $committeeMember->phone }}"
                                               type="text" class="form-control @error('phone') is-invalid @enderror"
                                               placeholder="Enter phone" autofocus>
                                        @error('phone')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile"
                                               class="@error('mobile') text-danger @enderror">Mobile</label>
                                        <input id="mobile" name="mobile"
                                               value="{{ old('mobile') ?: $committeeMember->mobile }}" type="text"
                                               class="form-control @error('mobile') is-invalid @enderror"
                                               placeholder="Enter mobile" autofocus>
                                        @error('mobile')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fax" class="@error('fax') text-danger @enderror">Fax</label>
                                        <input id="fax" name="fax" value="{{ old('fax') ?: $committeeMember->fax }}"
                                               type="text" class="form-control @error('fax') is-invalid @enderror"
                                               placeholder="Enter fax" autofocus>
                                        @error('fax')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook"
                                               class="@error('facebook') text-danger @enderror">Facebook</label>
                                        <input id="facebook" name="facebook"
                                               value="{{ old('facebook') ?: $committeeMember->facebook }}" type="text"
                                               class="form-control @error('facebook') is-invalid @enderror"
                                               placeholder="Enter facebook" autofocus>
                                        @error('facebook')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter"
                                               class="@error('twitter') text-danger @enderror">Twitter</label>
                                        <input id="twitter" name="twitter"
                                               value="{{ old('twitter') ?: $committeeMember->twitter }}" type="text"
                                               class="form-control @error('twitter') is-invalid @enderror"
                                               placeholder="Enter twitter" autofocus>
                                        @error('twitter')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="linkedin"
                                               class="@error('linkedin') text-danger @enderror">Linkedin</label>
                                        <input id="linkedin" name="linkedin"
                                               value="{{ old('linkedin') ?: $committeeMember->linkedin }}" type="text"
                                               class="form-control @error('linkedin') is-invalid @enderror"
                                               placeholder="Enter linkedin" autofocus>
                                        @error('linkedin')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sort_order"
                                               class="@error('sort_order') text-danger @enderror">Order/Priority</label>
                                        <input id="sort_order" name="sort_order"
                                               value="{{ old('sort_order') ?: $committeeMember->sort_order }}" type="text"
                                               class="form-control @error('sort_order') is-invalid @enderror"
                                               placeholder="Enter order/priority" autofocus>
                                        @error('sort_order')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.cms.committee-member.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
