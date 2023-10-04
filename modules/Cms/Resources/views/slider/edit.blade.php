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
                            <h3 class="card-title mt-1">Edit Slider</h3>
                            <a href="{{ route('backend.cms.slider.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">View Slider List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.cms.slider.update', [$slider->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="@error('title') text-danger @enderror">Title <span class="text-danger">*</span></label>
                                        <input id="title" name="title" value="{{ old('title') ?: $slider->title }}"
                                               type="text" class="form-control @error('title') is-invalid @enderror"
                                               placeholder="Enter title" autofocus>
                                        @error('title')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_bn" class="@error('title_bn') text-danger @enderror">Title
                                            (Bengali)</label>
                                        <input id="title_bn" name="title_bn"
                                               value="{{ old('title_bn') ?: $slider->title_bn }}" type="text"
                                               class="form-control @error('title_bn') is-invalid @enderror"
                                               placeholder="Enter title" autofocus>
                                        @error('title_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sort_order"
                                               class="@error('sort_order') text-danger @enderror">Order</label>
                                        <input id="sort_order" name="sort_order"
                                               value="{{ old('sort_order') ?: $slider->sort_order }}" type="text"
                                               class="form-control @error('sort_order') is-invalid @enderror"
                                               placeholder="Enter order" autofocus>
                                        @error('sort_order')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="link" class="@error('link') text-danger @enderror">Link</label>
                                        <input id="link" name="link" value="{{ old('link') ?: $slider->link }}" type="text" class="form-control @error('link') is-invalid @enderror" placeholder="Enter title" autofocus>
                                        @error('link')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="@error('image') text-danger @enderror">Upload Image <span class="text-danger">*</span></label>
                                        <input id="image" name="image" value="{{ old('image') }}" type="file"
                                               class="form-control @error('image') is-invalid @enderror"
                                               placeholder="Select Image" autofocus>
                                        @if(isset($slider->image->file_name))
                                            <span class="invalid-feedback text-dark" role="alert"><strong>Image: {{ $slider->image->file_name }}</strong></span>
                                        @endif
                                        @error('image')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    @if(isset($slider->image))
                                        <div class="mt-3">
                                            <img style="width: 100%;" src="{{ $slider->image->file_url }}">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.cms.slider.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
