@extends('admin.main')

@section('title', 'Edit Manufacturer')
@section('h1-header', 'Edit Manufacturer')

@section('breadcrumbs')
  <li>Home</li>
  <li>Manufacturers</li>
  <li>Edit Manufacturer</li>
@stop

@section('content')

    {!! Form::model($manufacturer, ['url' => '/admin/catalog/manufacturers', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal', 'id' => 'add-entity-form']) !!}
        @include('admin.catalog.manufacturers._form.manufacturer_add_edit', [
            'manufacturer' => $manufacturer,
        ])
    {!! Form::close() !!}

@stop
