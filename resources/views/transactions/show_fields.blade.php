<!-- Qrcode Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_id', 'Product Name:') !!}
    <p>
        <a href="/qr-code-authentication/public/qrcodes/{!! $transaction->qrcode['id'] !!}">
            <b>{!! $transaction->qrcode['product_name'] !!}</b>
        </a>
    </p>
</div>
<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>£{!! $transaction->amount !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Buyer Name:') !!}
    <p>
        <a href="/qr-code-authentication/public/users/{!! $transaction->user['id'] !!}">{!! $transaction->user['name'] !!} | {!! $transaction->user['email'] !!}</a>
    </p>
</div>

<!-- Qrcode Owner Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_owner_id', 'Qrcode Owner Name:') !!}
    <p>
        <a href="/qr-code-authentication/public/users/{!! $transaction->qrcode_owner['id'] !!}">{!! $transaction->qrcode_owner['name'] !!}</a>
    </p>
</div>

<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{!! $transaction->payment_method !!}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{!! $transaction->message !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $transaction->status !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $transaction->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $transaction->created_at->format('D d M, Y H:i:s') !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $transaction->updated_at->format('D d M, Y H:i:s') !!}</p>
</div>

