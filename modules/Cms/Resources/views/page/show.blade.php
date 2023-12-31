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
                            <h3 class="card-title mt-1">Page Details</h3>
                            <a href="{{ route('backend.cms.page.index') }}" type="button" class="btn btn-success btn-sm text-white float-right">View Page List</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="page_category_id" class="@error('page_category_id') text-danger @enderror">Page Category Id</label>
                                        <input id="page_category_id" name="page_category_id" value="{{ $page->page_category_id ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('page_category_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" class="@error('title') text-danger @enderror">Title</label>
                                        <input id="title" name="title" value="{{ $page->title ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title_bn" class="@error('title_bn') text-danger @enderror">Title (Bengali)</label>
                                        <input id="title_bn" name="title_bn" value="{{ $page->title_bn ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('title_bn')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
									<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="slug" class="@error('slug') text-danger @enderror">Slug</label>
                                        <input id="slug" name="slug" value="{{ $page->slug ?: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @error('slug')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description-" class="@error('description') text-danger @enderror">Description</label>
                                        <div>
                                            {!! $page->description ?: 'N/A' !!}
                                        </div>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description_bn-" class="@error('description_bn') text-danger @enderror">Description (Bengali)</label>
                                        <div>
                                            {!! $page->description_bn ?: 'N/A' !!}
                                        </div>
                                        @error('description_bn')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="feature_image" class="@error('feature_image') text-danger @enderror">Feature Image</label>
                                        <input id="feature_image" name="feature_image" value="{{ $page->image? $page->image->file_name: 'N/A'}}" type="text" class="form-control-plaintext" readonly>
                                        @if(isset($page->image))
                                            <div class="image-output">
                                                <img src="{{ $page->image->file_url }}">
                                            </div>
                                        @endif
                                        @error('feature_image')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('backend.cms.page.index') }}" type="button" class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
