@extends('admin.layouts.master')

@section('content')
    <div class="article-header pt-2"></div>
    <div class="article">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Edit Article</h3>
                            <a href="{{ route('backend.cms.article.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">Article List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.cms.article.update', [$article->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="@error('title') text-danger @enderror">Title <span class="text-danger">*</span></label>
                                        <input id="title" name="title" value="{{ old('title') ?: $article->title }}"
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
                                        <label for="title_bn" class="@error('title_bn') text-danger @enderror">Title (Bengali)</label>
                                        <input id="title_bn" name="title_bn" value="{{ old('title_bn') ?: $article->title_bn }}"
                                               type="text" class="form-control @error('title_bn') is-invalid @enderror"
                                               placeholder="Enter title" autofocus>
                                        @error('title_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="@error('description') text-danger @enderror">Description <span class="text-danger">*</span></label>
                                        <textarea id="description" name="description" class="form-control" rows="3"
                                                  placeholder="Enter description">{!! old('description') ?: $article->description !!}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_bn" class="@error('description_bn') text-danger @enderror">Description (Bengali)</label>
                                        <textarea id="description_bn" name="description_bn" class="form-control" rows="3"
                                                  placeholder="Enter description">{!! old('description_bn') ?: $article->description_bn !!}</textarea>
                                        @error('description_bn')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="article_category_id" class="@error('article_category_id') text-danger @enderror">Category <span class="text-danger">*</span></label>
                                        <select id="article_category_id" name="article_category_id" class="form-control  @error('article_category_id') is-invalid @enderror">
                                            <option value="">Select a category</option>
                                            @foreach($articleCategories as $articleCategory)
                                                <option value="{{ $articleCategory->id }}" {{ old('article_category_id')
                                                    ? (old('article_category_id') == $articleCategory->id ? 'selected' : '')
                                                    : ($article->article_category_id == $articleCategory->id ? 'selected' : '') }}>
                                                    {{ $articleCategory->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('article_category_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="@error('image') text-danger @enderror">Image</label>
                                        <input id="image" name="image" value="{{ old('image') }}" type="file"
                                               class="form-control @error('image') is-invalid @enderror"
                                               placeholder="Select File" autofocus>
                                        @if(isset($article->image->file_name))
                                            <span class="invalid-feedback text-dark"
                                                  role="alert"><strong>Image: {{ $article->image->file_name }}</strong></span>
                                        @endif
                                        @error('image')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="attachment" class="@error('attachment') text-danger @enderror">Attachment</label>
                                        <input id="attachment" name="attachment" value="{{ old('attachment') }}" type="file" class="form-control @error('attachment') is-invalid @enderror" placeholder="Enter attachment" autofocus>
                                        @if(isset($article->attachment))
                                            <div class="main-image">
                                                <object data="{{$article->file_url}}" type="application/pdf" width="50" height="50px">
                                                <p>Unable to display PDF file. <a href="{{$article->file_url}}">Download</a> instead.</p>
                                                </object>
                                            </div>
                                        @endif
                                        @error('attachment')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.cms.article.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
