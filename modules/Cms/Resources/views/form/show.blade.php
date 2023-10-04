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
                            <h3 class="card-title mt-1">Form Details</h3>
                            <a href="{{ route('backend.cms.form.index') }}" type="button"
                               class="btn btn-success btn-sm text-white float-right">View Form List</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="data" class="@error('data') text-danger @enderror d-block">
                                            Date: <span style="font-weight: 400">{{ $form->created_at->format('d M, Y') }}</span>
                                        </label>
                                        <label for="data" class="@error('data') text-danger @enderror d-block">
                                            Name: <span style="font-weight: 400">{{ $data->first_name }} {{ $data->last_name }}</span>
                                        </label>
                                        <label for="data" class="@error('data') text-danger @enderror d-block">
                                            Email: <span style="font-weight: 400">{{ $data->email ?? 'N/A' }}</span>
                                        </label>
                                        <label for="data" class="@error('data') text-danger @enderror d-block">
                                            Phone: <span style="font-weight: 400">{{ $data->phone ?? 'N/A' }}</span>
                                        </label>
                                        <label for="data" class="@error('data') text-danger @enderror d-block">
                                            Address: <span style="font-weight: 400">{{ $data->address ?? 'N/A' }}</span>,  Country: <span style="font-weight: 400">{{ $data->country ?? 'N/A' }}</span>
                                        </label>
                                        <label for="data" class="@error('data') text-danger @enderror d-block">
                                            Subject: <span style="font-weight: 400">{{ $data->subject ?? 'N/A' }}</span>
                                        </label>
                                        <label for="data" class="@error('data') text-danger @enderror d-block">
                                            Message: <span style="font-weight: 400">{{ $data->message ?? 'N/A' }}</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('backend.cms.form.index') }}" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
