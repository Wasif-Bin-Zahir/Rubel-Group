@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('admin.partials._profile_menu', ['active' => 7])
                </div>
                <div class="col-md-9">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Social Account</h3>
                        </div>
                        {!! Form::open(['url' => route('backend.ums.profile-social-account.update', [$personalInfo->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="website_url" class="@error('website_url') text-danger @enderror">Website</label>
                                        <input id="website_url" name="website_url"
                                               value="{{ old('website_url') ?: $personalInfo->website_url }}"
                                               type="text"
                                               class="form-control @error('website_url') is-invalid @enderror"
                                               placeholder="Enter first name" autofocus>
                                        @error('website_url')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="linkedin_link" class="@error('linkedin_link') text-danger @enderror">Linkedin</label>
                                        <input id="linkedin_link" name="linkedin_link"
                                               value="{{ old('linkedin_link') ?: $personalInfo->linkedin_link }}"
                                               type="text"
                                               class="form-control @error('linkedin_link') is-invalid @enderror"
                                               placeholder="Enter first name" autofocus>
                                        @error('linkedin_link')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="github_link" class="@error('github_link') text-danger @enderror">Github</label>
                                        <input id="github_link" name="github_link"
                                               value="{{ old('github_link') ?: $personalInfo->github_link }}"
                                               type="text"
                                               class="form-control @error('github_link') is-invalid @enderror"
                                               placeholder="Enter first name" autofocus>
                                        @error('github_link')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="twitter_link" class="@error('twitter_link') text-danger @enderror">Twitter</label>
                                        <input id="twitter_link" name="twitter_link"
                                               value="{{ old('twitter_link') ?: $personalInfo->twitter_link }}"
                                               type="text"
                                               class="form-control @error('twitter_link') is-invalid @enderror"
                                               placeholder="Enter first name" autofocus>
                                        @error('twitter_link')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="facebook_link" class="@error('facebook_link') text-danger @enderror">Facebook</label>
                                        <input id="facebook_link" name="facebook_link"
                                               value="{{ old('facebook_link') ?: $personalInfo->facebook_link }}"
                                               type="text"
                                               class="form-control @error('facebook_link') is-invalid @enderror"
                                               placeholder="Enter first name" autofocus>
                                        @error('facebook_link')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="youtube_link" class="@error('youtube_link') text-danger @enderror">Youtube</label>
                                        <input id="youtube_link" name="youtube_link"
                                               value="{{ old('youtube_link') ?: $personalInfo->youtube_link }}"
                                               type="text"
                                               class="form-control @error('youtube_link') is-invalid @enderror"
                                               placeholder="Enter first name" autofocus>
                                        @error('youtube_link')
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
