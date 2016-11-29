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
                    {!! Form::open(array('route' => 'frontend.contact', 'class' => 'form-horizontal')) !!}
                    <fieldset>
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::text('name', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'What we can call you')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::text('email', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Your e-mail address')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::text('company_name', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Your Company Name')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::text('telephone', null,
                                    array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Where to call you')) !!}
                            </div>
                        </div>
                        <div class="col-sm-offset-6 col-sm-6 col-md-3 col-md-offset-9 ">
                            {!! Form::submit('Submit',
                              array('class'=>'btn btn-primary')) !!}
                        </div>
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
