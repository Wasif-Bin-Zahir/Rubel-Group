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
                            <h3 class="card-title mt-1">Create {{ $category->title }}</h3>
                            <a href="{{ route('backend.cms.content.index', ['category_id' => $category->id]) }}" type="button" class="btn btn-success btn-sm text-white float-right">View {{ $category->title }} List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.cms.content.store'), 'method' => 'content', 'files' => true]) !!}
                            <div class="card-body">
                                <div class="row">
                                    <input id="content_category_id" name="content_category_id" value="{{ $category->id }}" type="hidden">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title" class="@error('title') text-danger @enderror">Title <span class="text-danger">*</span></label>
                                            <input id="title" name="title" value="{{ old('title') }}" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title" autofocus>
                                            @error('title')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title_bn" class="@error('title_bn') text-danger @enderror">Title (Bengali)</label>
                                            <input id="title_bn" name="title_bn" value="{{ old('title_bn') }}" type="text" class="form-control @error('title_bn') is-invalid @enderror" placeholder="Enter title" autofocus>
                                            @error('title_bn')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description" class="@error('description') text-danger @enderror">Description <span class="text-danger">*</span></label>
                                            <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter description">{{ old('description') }}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description_bn" class="@error('description_bn') text-danger @enderror">Description (Bengali)</label>
                                            <textarea id="description_bn" name="description_bn" class="form-control" rows="3" placeholder="Enter description">{{ old('description_bn') }}</textarea>
                                            @error('description_bn')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    @if($category->id == 1)
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="start_date" class="@error('start_date') text-danger @enderror">Start Date <span class="text-danger">*</span></label>
                                                <input id="start_date" name="start_date" value="{{ old('start_date') }}" type="text" class="form-control datepicker @error('start_date') is-invalid @enderror" placeholder="Enter display date" autofocus>
                                                @error('start_date')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="end_date" class="@error('end_date') text-danger @enderror">End Date <span class="text-danger">*</span></label>
                                                <input id="end_date" name="end_date" value="{{ old('end_date') }}" type="text" class="form-control datepicker @error('end_date') is-invalid @enderror" placeholder="Enter display date" autofocus>
                                                @error('end_date')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="display_date" class="@error('display_date') text-danger @enderror">Display Date <span class="text-danger">*</span></label>
                                            <input id="display_date" name="display_date" value="{{ old('display_date') }}" type="text" class="form-control datepicker @error('display_date') is-invalid @enderror" placeholder="Enter display date" autofocus>
                                            @error('display_date')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div> --}}
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tag" class="@error('tag') text-danger @enderror">Tag</label>
                                            <input id="tag" name="tag" value="{{ old('tag') }}" type="text" class="form-control @error('tag') is-invalid @enderror" placeholder="Enter tags" autofocus>
                                            @error('tag')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sort_order"
                                                class="@error('sort_order') text-danger @enderror">Order/Priority</label>
                                            <input id="sort_order" name="sort_order"
                                                value="{{ old('sort_order') }}" type="text"
                                                class="form-control @error('sort_order') is-invalid @enderror"
                                                placeholder="Enter order/priority" autofocus>
                                            @error('sort_order')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image" class="@error('image') text-danger @enderror">Image</label>
                                            <input id="image" name="image" value="{{ old('image') }}" type="file" class="form-control @error('image') is-invalid @enderror" placeholder="Select File" autofocus>
                                            @error('image')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="attachment" class="@error('attachment') text-danger @enderror">Attachment</label>
                                            <input id="attachment" name="attachment" value="{{ old('attachment') }}" type="file" class="form-control @error('attachment') is-invalid @enderror" placeholder="Enter attachment" autofocus>
                                            @error('attachment')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                                <a href="{{ route('backend.cms.content.index', ['category_id' => $category->id]) }}" type="button" class="btn btn-dark text-white float-right">Cancel</a>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
