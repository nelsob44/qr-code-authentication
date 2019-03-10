<div class="col-md-6">
    <!-- Product Name Field -->
    <div class="form-group">
        <h3>{!! $qrcode->product_name !!}<br>
            @if(isset($qrcode->company_name))
                <small>By {!! $qrcode->company_name !!} </small>
            @endif
        </h3>
    </div>

    <!-- Amount Field -->
    <div class="form-group">
        <h4>Price: £{!! $qrcode->amount !!}</h4>
    </div>

    <!-- Product Url Field -->
    <div class="form-group">
        <a href="{!! $qrcode->product_url !!}" target="_blank">
            <p>{!! $qrcode->product_url !!}</p>
        </a>
    </div>

    @if(!Auth::guest() && ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3))
    <hr>
        <!-- User Id Field -->
        <div class="form-group">
            {!! Form::label('user_id', 'User Name:') !!}
            <p>{!! $qrcode->user['email'] !!}</p>
        </div>

        <!-- Website Field -->
        <div class="form-group">
            {!! Form::label('website', 'Website:') !!}
            <p>
                <a href="{!! $qrcode->website !!}" target="_blank">{!! $qrcode->website !!}</a>
            </p>
        </div>
        
        <!-- Callback Url Field -->
        <div class="form-group">
            {!! Form::label('callback_url', 'Callback Url:') !!}
            <p>
                <a href="{!! $qrcode->callback_url !!}" target="_blank">{!! $qrcode->callback_url !!}</a>
            </p>
        </div>

        <!-- Status Field -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            <p>
                @if($qrcode->status == 1)
                    Active
                @else
                    Inactive
                @endif
            </p>
        </div>

        <!-- Deleted At Field -->
        <div class="form-group">
            {!! Form::label('deleted_at', 'Deleted At:') !!}
            <p>{!! $qrcode->deleted_at !!}</p>
        </div>

        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $qrcode->created_at !!}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $qrcode->updated_at !!}</p>
        </div>
    @endif
</div>

<div class="col-md-5 pull-right">
    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Scan QRcode and pay with App') !!}
        
    <p><img src="{{asset($qrcode->qrcode_path)}}"></p>
    </div>

    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
            <div class="row" style="margin-bottom:40px;">
              <div class="col-md-8 col-md-offset-2">
                <p>
                    <div>
                        Lagos Eyo Print Tee Shirt
                        ₦ 2,950
                    </div>
                </p>
                <input type="hidden" name="email" value="nelsob44@gmail.com"> 
                <input type="hidden" name="orderID" value="{{ $qrcode->id }}">
                <input type="hidden" name="amount" value="150000"> {{--{{ $qrcode->amount }}--}}
                <input type="hidden" name="quantity" value="1">
                @if(!Auth::guest())
                <input type="hidden" name="metadata" value="{{ json_encode($array = ['buyer_user_id' => Auth::user()->id,]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                @endif
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
    
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
    
    
                <p>
                  <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                  <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                  </button>
                </p>
              </div>
            </div>
    </form>
</div>

@if(!Auth::guest() && ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3))

<div class="col-xs-12">
    <h3 class="text-center">Transactions on this QRCode</h3>

    @include('transactions.table')
</div>
@endif