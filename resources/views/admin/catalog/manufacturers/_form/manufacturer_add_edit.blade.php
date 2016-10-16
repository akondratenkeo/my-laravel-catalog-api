<div class="col-xs-12 content-body">
    <div class="nav-submit">
        <div class="nav-pull-right">
            <button type="submit" form="add-entity-form" data-toggle="tooltip" class="btn btn-primary btn-submit" data-original-title="Save">
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
            <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">Add Manufacturer</a></li>
        </ul>
        <div class="tab-content tab-form-content">
            <div role="tabpanel" class="tab-pane active" id="general">
                @if ($errors->any())
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <ul class="alert alert-warning errors">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="form-group required">
                    {!! Form::label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">{!! Form::text('name', null, ['class' => 'form-control']) !!}</div>
                </div>
                <div class="form-group required">
                    {!! Form::label('description', 'Description:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">{!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}</div>
                </div>
                <div class="form-group">
                    {!! Form::label('sort_order', 'Sort Order:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">{!! Form::text('sort_order', null, ['class' => 'form-control']) !!}</div>
                </div>
                <div class="form-group">
                    {!! Form::label('image', 'Image:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        <div class="entity-image clearfix">
                            @if ($manufacturer !== null && $manufacturer->image !== null)
                                <img src="{{ $manufacturer->image }}" alt="entity-image">
                            @else
                                <img src="../../images/no-photo.jpg" alt="entity-image">
                            @endif
                        </div>
                        <div class="input-entity-image">
                            {!! Form::file('image', ['id' => 'file-entity-image']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group required">
                    {!! Form::label('meta_title', 'Meta Title:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">{!! Form::text('meta_title', null, ['class' => 'form-control']) !!}</div>
                </div>
                <div class="form-group">
                    {!! Form::label('meta_description', 'Meta Description:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">{!! Form::textarea('meta_description', null, ['class' => 'form-control', 'rows' => '4']) !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
