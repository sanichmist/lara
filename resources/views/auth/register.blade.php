@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('auth.register') }}</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => 'register', 'data-parsley-validate' => '']) !!}

                        {{ Form::label('last_name',trans('auth.last_name')) }}
                        {{ Form::text('last_name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

                        {{ Form::label('first_name',trans('auth.first_name')) }}
                        {{ Form::text('first_name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

                        {{ Form::label('second_name',trans('auth.second_name')) }}
                        {{ Form::text('second_name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

                        {{--{{ Form::label('country',trans('auth.country')) }}--}}
                        {{--{{ Form::select(--}}
                            {{--'country',--}}
                            {{--[--}}
                                {{--'+380' => trans('auth.ukraine'),--}}
                                {{--'+799' => trans('auth.russia'),--}}
                                {{--'+373' =>  trans('auth.belarus')--}}
                            {{--],--}}
                            {{--null,--}}
                            {{--['class' => 'form-control b2c-auth-form-country', 'required' => ''])--}}
                        {{--}}--}}

                        {{--{{ Form::label('phone',trans('auth.phone')) }}--}}
                        {{--{{ Form::text('phone', null, ['class' => 'form-control b2c-auth-form-phone', 'required' => '', 'placeholder' => '+___ (__) ___-____']) }}--}}

                        {{ Form::label('password', trans('auth.password')) }}
                        {{ Form::password('password', ['class' => 'form-control', 'required' => '']) }}

                        {{ Form::label('password_confirmation', trans('auth.confirm_password')) }}
                        {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => '']) }}

                        {{ Form::submit('Create post',['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px']) }}
                        {!! Form::close() !!}
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/jquery.maskedinput.js') !!}
    {!! Html::script('js/auth.js') !!}
@endsection
