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
                                <li><a href="javascript:void(0)">{{__('cms.contact')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-us section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="contact-form-area m-top-30">
                        <h4>{{__('cms.get_in_touch')}}</h4>
                        <div style="margin-top: 30px;">
                            @include('common.partials._alert')
                        </div>
                        {!! Form::open(['url' => 'contact', 'method' => 'post', 'class' => 'form']) !!}
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="first_name" name="first_name" type="text" placeholder="First Name">
                                        @error('first_name')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="last_name" name="last_name" type="text" placeholder="Last Name">
                                        @error('last_name')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="email" name="email" type="text" placeholder="Email Address">
                                        @error('email')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="phone" name="phone" type="text" placeholder="Phone/Mobile No">
                                        @error('phone')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="address" name="address" type="text" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="country" name="country" type="text" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject">
                                        @error('subject')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group textarea">
                                        <textarea type="textarea" name="message" rows="5"></textarea>
                                        @error('message')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="bizwheel-btn theme-1">{{__('cms.send_now')}}</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="contact-box-main m-top-30">
                        <div class="contact-title">
                            <h2>{{__('cms.contact_with_us')}}</h2>
                        </div>
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-address-book"></i></div>
                            <div class="c-text">
                                <h4>{{__('cms.address')}}</h4>
                                <p>{{ $global_contact->address }}</p>
                            </div>
                        </div>
                        @if($global_contact->working_days)
                            <div class="single-contact-box">
                                <div class="c-icon"><i class="fa fa-clock-o"></i></div>
                                <div class="c-text">
                                    <h4>Working Days & Hours</h4>
                                    <p>{{ $global_contact->working_days }}<br>{{ $global_contact->working_hours }}</p>
                                </div>
                            </div>
                        @endif
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-phone"></i></div>
                            <div class="c-text">
                                <h4>{{__('cms.call_us')}}</h4>
                                <p>{{__('cms.telephone')}}.: {{ $global_contact->phone }}<br>{{__('cms.mobile')}}.: {{ $global_contact->mobile }}</p>
                            </div>
                        </div>
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="c-text">
                                <h4>{{__('cms.email_us')}}</h4>
                                <p>{{ $global_contact->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('css')

    <link rel="stylesheet" href="{{ asset('common/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('common/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

@stop

@section('js')

    <script src="{{ asset('common/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select-dd').select2({
                theme: 'bootstrap4',
            });
        });
    </script>

@stop
