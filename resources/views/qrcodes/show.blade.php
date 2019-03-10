@extends('layouts.app')

@section('content')
    <section class="content-header">
            <h1 class="pull-left">Details</h1>
            @if(!Auth::guest() && ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3))
                <h1 class="pull-right">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('qrcodes.edit', [$qrcode->id]) !!}">Edit QRcode</a>
                </h1>
            @endif
    </section>
    <div class="content">
            <div class="clearfix"></div>

            @include('flash::message')
    
            <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('qrcodes.show_fields')
                    
                </div>
            </div>
        </div>
    </div>
@endsection
