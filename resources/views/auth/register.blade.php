@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('auth.register') }}</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => 'register', 'data-parsley-validate' => '']) !!}

                        {{ Form::label('name',trans('auth.name')) }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'maxlength' => '255']) }}

                        {{ Form::label('country',trans('auth.country')) }}
                        {{ Form::select(
                            'country',
                            [
                                '1' => trans('auth.ukraine'),
                                '2' => trans('auth.russia'),
                                '3' =>  trans('auth.belarus')
                            ],
                            null,
                            ['class' => 'form-control b2c-auth-form-country', 'required' => ''])
                        }}

                        {{ Form::label('phone',trans('auth.phone')) }}
                        {{ Form::text('phone', null, ['class' => 'form-control b2c-auth-form-phone', 'required' => '']) }}

                        {{ Form::label('password', trans('auth.password')) }}
                        {{ Form::password('password', ['class' => 'form-control', 'required' => '']) }}

                        {{ Form::label('password_confirmation', trans('auth.confirm_password')) }}
                        {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => '']) }}

                        <div class="checkbox text-center">
                            <label>
                                {{ Form::checkbox('agree', 1, null) }} {{ trans('agreement') }}
                            </label>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6Ld5RCQUAAAAAHjozy5gHgPydR2X5VdcrFXpC3Lm"></div>

                        {{ Form::submit('Register',['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px']) }}
                        {!! Form::close() !!}
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
