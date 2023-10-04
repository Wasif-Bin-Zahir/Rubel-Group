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
                                <li><a href="javascript:void(0)">{{__('cms.registration')}}</a></li>
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
                    <div class="contact-form-area m-top-30" style="background: #053B50;">
                        <h4 style="text-align:center;color:wheat;">{{__('cms.registration')}}</h4>
                        <div style="margin-top: 30px;">
                        
                        <div style="margin-top: 30px;">
                            @include('common.partials._alert')
                        </div>
                        </div>


                        {!! Form::open(['url' => 'registration', 'method' => 'post', 'class' => 'form']) !!}
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="first_name" name="first_name" value="{{ old('first_name') }}" type="text" placeholder="Name">
                                        @error('first_name')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="email" name="email" type="text" value="{{ old('email') }}" placeholder="Email Address">
                                        @error('email')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="phone" name="phone" type="text" value="{{ old('phone') }}"  placeholder="Phone/Mobile No">
                                        @error('phone')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="company" name="company" type="text" value="{{ old('company') }}" placeholder="Company name">
                                    </div>
                                    @error('company')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                {{-- country input --}}

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="country" name="designation" type="text" value="{{ old('designation') }}" placeholder="Designation">
                                    </div>
                                    @error('designation')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="country" name="country" type="text" value="{{ old('country') }}" placeholder="Country">
                                    </div>
                                    @error('designation')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="form" style="margin-top: 10px; margin-left: 19px;color: #fff;">
                                        <label style="margin-left: -17px;">Interest On</label>
                                        <div class="form-check">
                                            <input class="form-check-input" name="interest_on[]" type="checkbox" value="Dairy industry" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Dairy industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Aqua industry" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Aqua industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Poultry industry" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Poultry industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Pet industry" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Pet industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Feed industry" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Feed industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Others" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Others
                                            </label>
                                        </div>


                                    </div>
                                    @error('interest_on')
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>


                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="bizwheel-btn theme-1" style="background: wheat;color:#053B50">{{__('cms.submit')}}</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="contact-box-main m-top-30">
                        <div class="contact-title">
                            <h2>Registration Instruction</h2>
                        </div>
                        <div class="single-contact-box">
                            <div class="c-text">
                                <p>Please check your mobile and email for your QR Code and show it to the Registration counter for your Visitors Pass</p>
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
