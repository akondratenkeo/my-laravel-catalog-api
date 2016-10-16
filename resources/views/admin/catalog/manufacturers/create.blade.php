@extends('admin.main')

@section('title', 'New Manufacturer')
@section('h1-header', 'New Manufacturer')

@section('breadcrumbs')
  <li>Home</li>
  <li>Manufacturers</li>
  <li>New Manufacturer</li>
@stop

@section('content')

    {!! Form::open(['url' => '/admin/catalog/manufacturers', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal', 'id' => 'add-entity-form']) !!}
        @include('admin.catalog.manufacturers._form.manufacturer_add_edit', [
            'manufacturer' => null,
        ])
    {!! Form::close() !!}

@stop
