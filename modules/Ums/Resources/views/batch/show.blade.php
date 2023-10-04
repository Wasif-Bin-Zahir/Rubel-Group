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
                            <h3 class="card-title mt-1">Batch Details</h3>
                            <a href="{{ route('backend.ums.batch.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">View Batch List</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="@error('name') text-danger @enderror">Name</label>
                                        <input id="name" name="name" value="{{ $batch->name ?: 'N/A'}}" type="text"
                                               class="form-control-plaintext" readonly>
                                        @error('name')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="code" class="@error('code') text-danger @enderror">Description</label>
                                        <input id="code" name="code"
                                               value="{{ $batch->code ?: 'N/A'}}" type="text"
                                               class="form-control-plaintext" readonly>
                                        @error('code')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="type" class="@error('type') text-danger @enderror">Type</label>
                                        <input id="type" name="type" value="{{ $batch->type == 1 ? 'B.Sc.' : 'M.Sc.'}}"
                                               type="text" class="form-control-plaintext" readonly>
                                        @error('type')
                                        <span class="invalid-feedback"
                                              role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('backend.ums.batch.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
