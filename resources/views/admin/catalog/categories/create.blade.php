@extends('admin.main')

@section('title', 'New Category')
@section('h1-header', 'New Category')

@section('breadcrumbs')
  <li>Home</li>
  <li>Categories</li>
  <li>New Category</li>
@stop

@section('content')

    {!! Form::open(['url' => '/admin/catalog/categories', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal', 'id' => 'add-entity-form']) !!}
        <div class="col-xs-12 content-body">
            <div class="nav-submit">
                <div class="nav-pull-right">
                    <button type="submit" form="add-entity-form" data-toggle="tooltip" class="btn btn-primary btn-submit" data-original-title="Save">
                        <i class="fa fa-save"></i>
                        <span class="btn-label">Save Category</span>
                    </button>
                    <a href="/admin/catalog/categories" data-toggle="tooltip" class="btn btn-default btn-cancel" data-original-title="Cancel">
                        <i class="fa fa-reply"></i>
                        <span class="btn-label">Cancel</span>
                    </a>
                </div>
            </div>
            <div class="main-wrapper-content">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                    <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Data</a></li>
                </ul>
                <div class="tab-content tab-form-content">
                    <div role="tabpanel" class="tab-pane active" id="general">
                        <div class="form-group required">
                            {!! Form::label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::text('name', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group required">
                            {!! Form::label('description', 'Description:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}</div>
                        </div>
                        <div class="form-group required">
                            {!! Form::label('meta_title', 'Meta Title:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::text('meta_title', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('meta_keywords', 'Meta Keywords:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::textarea('meta_keywords', null, ['class' => 'form-control', 'rows' => '3']) !!}</div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('meta_description', 'Meta Description:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::textarea('meta_description', null, ['class' => 'form-control', 'rows' => '3']) !!}</div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="data">
                        <div class="form-group required">
                            {!! Form::label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::text('name', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group required">
                            {!! Form::label('image', 'Image:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                <div class="entity-image clearfix">
                                    <img src="../../images/no-photo.jpg" alt="entity-image">
                                </div>
                                <div class="input-entity-image">
                                    {!! Form::file('image', ['id' => 'file-entity-image']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop
