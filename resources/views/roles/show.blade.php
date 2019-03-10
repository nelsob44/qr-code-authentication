@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="col-md-6">
            Role : {!! $role->name !!}
        </h1>
        <h1 class="col-md-5">
        <a href="{!! route('roles.edit', [$role->id]) !!}" class='btn btn-primary pull-right'>Edit Role</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('roles.show_fields')
                    
                </div>
            </div>
        </div>
    </div>
@endsection
