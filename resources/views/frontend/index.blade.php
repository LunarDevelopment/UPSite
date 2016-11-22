@extends('frontend.layouts.app')

@section('content')

    <div class="jumbotron">
        <h2>We've had an idea!</h2>
        <p>When it comes to managing the utilities for your business, we understand it's no picnic, but we're here to change that! Our team are here to support the management of your utilities - we'll help you reduce your energy consumption and help you to take full control of your utility spend.</p>
        <p>So, are you ready to save time and money?</p>
        <p>We're currently charging up our new website, but if you want to be the first to take advantage of our services, sign up below. Alternatively, you can give us a call on <a href="tel:01912359569">0191 235 9569</a>.</p>

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

    <div>
        <img class="wind-farm " src="img/website/windfarm.png" />
    </div>
@endsection
