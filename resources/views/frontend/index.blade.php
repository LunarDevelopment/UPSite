@extends('frontend.layouts.app')

@section('content')

    <div class="jumbotron">
        <h2>You're here early.</h2>
        <p>Get early access to our exclusive energy deals by notifying us below or call <a href="tel:01912359569">0191 235 9569</a>.</p>
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
