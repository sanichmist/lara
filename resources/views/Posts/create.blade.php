@extends('main')

@section('title', '| Create new post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Create New Post</h2>
            <hr>

            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
            {{ Form::label('title','Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

            {{ Form::label('slug','Slug:') }}
            {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlenth' => '5']) }}

            {{ Form::label('body', 'Post body') }}
            {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}

            {{ Form::submit('Create post',['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection
