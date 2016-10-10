@extends('admin.main')

@section('title', 'New Products')
@section('h1-header', 'New Products')

@section('breadcrumbs')
  <li>Home</li>
  <li>Products</li>
  <li>New Product</li>
@stop

@section('content')

    {!! Form::open(['url' => 'admin/products', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal', 'id' => 'form-product']) !!}
        <div class="form-body">
            <div class="nav-submit">
                <div class="nav-pull-right">
                    <button type="submit" form="form-product" data-toggle="tooltip" class="btn btn-primary" data-original-title="Save"><i class="fa fa-save"></i></button>
                    <a href="/admin/products" data-toggle="tooltip" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a>
                </div>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Data</a></li>
                <li role="presentation"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Images</a></li>
            </ul>
            <!-- Tab panes -->
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
                <div role="tabpanel" class="tab-pane" id="data">
                    <div class="form-group required">
                        {!! Form::label('sku', 'Sku:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">{!! Form::text('sku', null, ['class' => 'form-control']) !!}</div>
                    </div>
                    <div class="form-group required">
                        {!! Form::label('price', 'Price:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">{!! Form::text('price', null, ['class' => 'form-control']) !!}</div>
                    </div>
                    <div class="form-group required">
                        {!! Form::label('quantity', 'Quantity:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">{!! Form::text('quantity', null, ['class' => 'form-control']) !!}</div>
                    </div>
                    <div class="form-group required">
                        {!! Form::label('currency', 'Currency:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!!
                                Form::select('currency', [
                                    1 => 'USD',
                                    2 => 'EUR',
                                ], 1, ['class' => 'form-control'])
                            !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('params', 'Params:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">{!! Form::textarea('params', null, ['class' => 'form-control', 'rows' => '3']) !!}</div>
                    </div>
                    <div class="form-group required">
                        {!! Form::label('visible', 'Status:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!!
                                Form::select('visible', [
                                    1 => 'Enable',
                                    0 => 'Disable',
                                ], 1, ['class' => 'form-control'])
                            !!}
                        </div>
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
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop
