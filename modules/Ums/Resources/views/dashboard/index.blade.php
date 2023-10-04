@extends('admin.layouts.master')

@section('content')
    <div class="p-5">
        <div class="row">
            @foreach($data as $item)
                <div class="col-md-3 col-6">
                    <a href="{{ $item['url'] }}">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-purple">
                                <i class="far {{ $item['icon'] }}"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text text-dark" style="font-size: 16px">{{ $item['title'] }}</span>
                                <span class="info-box-number text-bold text-dark" style="font-size: 20px">{{ $item['count'] }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@stop
