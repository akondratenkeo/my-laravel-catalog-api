@extends('admin.main')

@section('title', 'New Manufacturer')
@section('h1-header', 'New Manufacturer')

@section('breadcrumbs')
  <li>Home</li>
  <li>Manufacturers</li>
  <li>New Manufacturer</li>
@stop

@section('content')

    {!! Form::open(['url' => '/admin/catalog/manufacturers', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal', 'id' => 'form-product']) !!}
        <div class="col-xs-12 content-body">
            <div class="nav-submit">
                <div class="nav-pull-right">
                    <button type="submit" form="form-product" data-toggle="tooltip" class="btn btn-primary btn-submit" data-original-title="Save">
                        <i class="fa fa-save"></i>
                        <span class="btn-label">Save Manufacturer</span>
                    </button>
                    <a href="/admin/catalog/manufacturers" data-toggle="tooltip" class="btn btn-default btn-cancel" data-original-title="Cancel">
                        <i class="fa fa-reply"></i>
                        <span class="btn-label">Cancel</span>
                    </a>
                </div>
            </div>
            <div class="main-wrapper-content">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                    <li role="presentation"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Images</a></li>
                </ul>
                <div class="tab-content tab-form-content">
                    <div role="tabpanel" class="tab-pane active" id="general">
                        <div class="form-group required">
                            {!! Form::label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::text('name', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('brand', 'Brand:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::text('brand', null, ['class' => 'form-control']) !!}</div>
                        </div>
                        <div class="form-group required">
                            {!! Form::label('annotation', 'Annotation:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">{!! Form::textarea('annotation', null, ['class' => 'form-control', 'rows' => '3']) !!}</div>
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
                    <div role="tabpanel" class="tab-pane" id="images">
                        <div class="form-group required">
                            {!! Form::label('image', 'Image:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                <div class="product-image clearfix">
                                    <img src="../images/no-photo.jpg" alt="product-image">
                                </div>
                                <div class="input-product-image">
                                    {!! Form::file('image', ['id' => 'file-product-image']) !!}
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
