@extends('frontend.layouts.app')
@section('content')
    <div class="panel">
        <h1>{{$title}}</h1>
        @if(!!$sub_heading)
            <h3>{{$sub_heading}}</h3>
        @endif
        @foreach($sentences as $sentence)
            <p>{{$sentence}}</p>
        @endforeach
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
