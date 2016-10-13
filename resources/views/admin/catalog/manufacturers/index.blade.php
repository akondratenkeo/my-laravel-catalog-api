@extends('admin.main')

@section('title', 'Manufacturers')
@section('h1-header', 'Manufacturers')

@section('breadcrumbs')
  <li>Home</li>
  <li>Manufacturers</li>
@stop

@section('content')
    <div class="col-xs-12 content-body">
        <div class="nav-submit">
            <div class="nav-pull-right mw-title-navigation">
                <a href="/admin/catalog/manufacturers/create" data-toggle="tooltip" class="btn btn-primary btn-submit" data-original-title="Add Manufacturer">
                    <i class="fa fa-plus"></i>
                    <span class="btn-label-visible">Add Manufacturer</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="main-wrapper-title">
                <h5>Manufacturers list</h5>
            </div>
        </div>
        <div class="main-wrapper-content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name<span class="fa fa-caret-down"></span></th>
                        <th>Brand<span class="fa fa-caret-down"></span></th>
                        <th>Price<span class="fa fa-caret-down"></span></th>
                        <th>Quantity<span class="fa fa-caret-down"></span></th>
                        <th>Status<span class="fa fa-caret-down"></span></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Example manufacturer 9</td>
                        <td>Brand</td>
                        <td>$150.00</td>
                        <td>450</td>
                        <td>
                            <span class="label label-primary">Enable</span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-xs" role="group" aria-label="Action">
                                <a href="/admin/catalog/manufacturers/1" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-default">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Example manufacturer 14</td>
                        <td>Brand</td>
                        <td>$98.00</td>
                        <td>61</td>
                        <td>
                            <span class="label label-danger">Disable</span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-xs" role="group" aria-label="Action">
                                <a href="/admin/catalog/manufacturers/2" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-default">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Example manufacturer 33</td>
                        <td>Brand</td>
                        <td>$87.00</td>
                        <td>55</td>
                        <td>
                            <span class="label label-primary">Enable</span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-xs" role="group" aria-label="Action">
                                <a href="/admin/catalog/manufacturers/3" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-default">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm pull-right">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div>
    </div>
@stop
