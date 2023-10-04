@extends('front.theme1.layouts.master')

@section('content')

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">{{__('cms.home')}}</a></li>
                                <li><a href="javascript:void(0)">{{__('cms.schedule')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            @if(count($data->notices))
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Day</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data->notices as $notice)
                            <tr>
                            <th scope="row">1</th>
                            <td>{{ substr($notice->title, 0, 25) }}</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        </table>
                    </table>
                </div>
                @if($data->notices->hasPages())
                    <div class="row">
                        <div class="col-md-12">
                            {!! $data->notices->links() !!}
                        </div>
                    </div>
                @endif
            @else
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('common/img/empty-page.jpg') }}" alt="Empty state">
                    </div>
                </div>
            @endif

           

        </div>
    </section>

@stop
