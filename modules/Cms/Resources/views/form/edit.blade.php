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
                            <h3 class="card-title mt-1">Edit Form</h3>
                            <a href="{{ route('backend.cms.form.index') }}" type="button" class="btn btn-success btn-sm text-white float-right">View Form List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.cms.form.update', [$form->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title" class="@error('title') text-danger @enderror">Title</label>
                                            <input id="title" name="title" value="{{ old('title') ?: $form->title }}" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title" autofocus>
                                            @error('title')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="form-group">
                                            <label for="data" class="@error('data') text-danger @enderror">Data</label>
                                            <textarea id="data" name="data" class="form-control" rows="3" placeholder="Enter data">{{ old('data') ?: $form->data }}</textarea>
                                            @error('data')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="form-group">
                                            <label for="agent_info" class="@error('agent_info') text-danger @enderror">AgentInfo</label>
                                            <input id="agent_info" name="agent_info" value="{{ old('agent_info') ?: $form->agent_info }}" type="text" class="form-control @error('agent_info') is-invalid @enderror" placeholder="Enter agent_info" autofocus>
                                            @error('agent_info')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="form-group">
                                            <label for="type" class="@error('type') text-danger @enderror">Type</label>
                                            <input id="type" name="type" value="{{ old('type') ?: $form->type }}" type="text" class="form-control @error('type') is-invalid @enderror" placeholder="Enter type" autofocus>
                                            @error('type')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.cms.form.index') }}" type="button" class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
