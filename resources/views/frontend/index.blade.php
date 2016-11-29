@extends('frontend.layouts.app')

@section('content')

    <div class="panel">
        <h1>Welcome to Utility Picnic!</h1>
        <p>When it comes to managing the utilities for your business, we understand it's no Picnic, but we're here to
            change that!</p>
        <p>From procurement to consumption, our team will help save you time, money and effort. Our solutions are
            designed to to give you full control of your utility spend, with our services helping you reduce your energy
            consumption throughout your contract.</p>
        <p>Click to find out more about our services</p>

        <div class="row">
            <div class="col-xs-4 text-center">
                <a class="product-icon" href="{{route('frontend.electricity')}}">
                    <img src="img/energy_icons/bulb.svg" class="">
                </a>
            </div>
            <div class="col-xs-4 text-center">
                <a class="product-icon" href="{{route('frontend.gas')}}">
                    <img src="img/energy_icons/oilplatform.svg" class="product-icon">
                </a>
            </div>
            <div class="col-xs-4 text-center">
                <a class="product-icon" href="{{route('frontend.water')}}">
                    <img src="img/energy_icons/dam.svg" class="product-icon">
                </a>
            </div>
        </div>
        <p></p>
        <p>Or talk to an expert</p>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class=" bs-component">

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    {!! Form::open(array('route' => 'frontend.subscribe', 'class' => 'form-horizontal')) !!}


                    <fieldset>
                        <div class="form-group">
                            <div class="col-xs-6 col-md-9">
                                {!! Form::text('email', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Your e-mail address')) !!}

                            </div>

                            <div class="col-xs-6 col-md-3 ">
                                {!! Form::submit('Submit',
                                  array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
