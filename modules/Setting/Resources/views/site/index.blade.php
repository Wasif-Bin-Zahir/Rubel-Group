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
                            <h3 class="card-title mt-1">Update Site Info</h3>
                        </div>
                        {!! Form::open(['url' => route('backend.setting.site.update', [$site->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" class="@error('title') text-danger @enderror">Title <span class="text-danger">*</span></label>
                                        <input id="title" name="title" value="{{ old('title') ?: $site->title }}"
                                               type="text" class="form-control @error('title') is-invalid @enderror"
                                               placeholder="Enter title" autofocus>
                                        @error('title')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description" class="@error('description') text-danger @enderror">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3"
                                                  placeholder="Enter description">{!! old('description') ?: $site->description !!}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo" class="@error('logo') text-danger @enderror">Logo</label>
                                        <input id="logo" name="logo" value="{{ old('logo') }}" type="file"
                                               class="form-control @error('logo') is-invalid @enderror"
                                               placeholder="Select File" autofocus>
                                        @if(isset($site->logo))
                                            <div class="image-output">
                                                <img src="{{ $site->logo->file_url }}">
                                            </div>
                                        @endif
                                        @error('logo')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="favicon"
                                               class="@error('favicon') text-danger @enderror">Favicon</label>
                                        <input id="favicon" name="favicon" value="{{ old('favicon') }}" type="file"
                                               class="form-control @error('favicon') is-invalid @enderror"
                                               placeholder="Select File" autofocus>
                                        @if(isset($site->favicon))
                                            <div class="image-output">
                                                <img src="{{ $site->favicon->file_url }}">
                                            </div>
                                        @endif
                                        @error('favicon')
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
