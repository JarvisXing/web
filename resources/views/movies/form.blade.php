
@extends('.layouts.master')

@section('content')
    {{ Form::open(['url'=>'movies/store','class'=>'form-horizontal']) }}

    <div class="form-group">
        {{Form::label('movie_title','电影标题',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('movie_title','Jarvis',array('class'=>'col-sm-2 form-control'))}}
        </div>
    </div>
    <div class="form-group">
        {{Form::label('movie_budget','制作成本',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('movie_budget','123',array('class'=>'col-sm-2 form-control'))}}
        </div>
    </div>
    <div class="form-group">
        {{Form::label('movie_date','发行日期',array('class'=>'col-sm-2 control-label'))}}
        <div class="col-sm-10">
            {{Form::text('movie_date','2011-12-12',array('class'=>'col-sm-2 form-control'))}}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{Form::submit('submit',array('class'=>'btn btn-default','action' => 'movies.store'))}}
        </div>
    </div>

    {{Form::close()}}

    
@stop