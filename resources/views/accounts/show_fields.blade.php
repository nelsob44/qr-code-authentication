<div class="col-md-6">
    <!-- User Id Field -->
    <div class="form-group">
        {!! Form::label('user', 'User:') !!}
        <p>{!! $account->user['name'] !!} : {!! $account->user['email'] !!}</p>
    </div>

    <!-- Balance Field -->
    <div class="form-group">
        {!! Form::label('balance', 'Balance:') !!}
        <p>£{!! number_format($account->balance) !!}</p>
    </div>

    <!-- Total Credit Field -->
    <div class="form-group">
        {!! Form::label('total_credit', 'Total Credit:') !!}
        <p>£{!! number_format($account->total_credit) !!}</p>
    </div>

    <!-- Total Debit Field -->
    <div class="form-group">
        {!! Form::label('total_debit', 'Total Debit:') !!}
        <p>£{!! number_format($account->total_debit) !!}</p>
    </div>

    <!-- Withdrawal Method Field -->
    <div class="form-group">
        {!! Form::label('withdrawal_method', 'Withdrawal Method:') !!}
        <p>{!! $account->withdrawal_method !!}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{!! $account->created_at->format('D d, M, Y H:i') !!}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{!! $account->updated_at !!}</p>
    </div>
</div>

<div class="col-md-6">
    <!-- Payment Email Field -->
    <div class="form-group">
        {!! Form::label('payment_email', 'Payment Email:') !!}
        <p>{!! $account->payment_email !!}</p>
    </div>

    <!-- Bank Name Field -->
    <div class="form-group">
        {!! Form::label('bank_name', 'Bank Name:') !!}
        <p>{!! $account->bank_name !!}</p>
    </div>

    <!-- Bank Branch Field -->
    <div class="form-group">
        {!! Form::label('bank_branch', 'Bank Branch:') !!}
        <p>{!! $account->bank_branch !!}</p>
    </div>

    <!-- Bank Account Field -->
    <div class="form-group">
        {!! Form::label('bank_account', 'Bank Account:') !!}
        <p>{!! $account->bank_account !!}</p>
    </div>

    <!-- Applied For Payout Field -->
    <div class="form-group">
        {!! Form::label('applied_for_payout', 'Applied For Payout:') !!}
        <p>
            @if($account->applied_for_payout == 1)
            Yes
            @else
            No
            @endif
        </p>
    </div>

    <!-- Country Field -->
    <div class="form-group">
        {!! Form::label('country', 'Country:') !!}
        <p>{!! $account->country !!}</p>
    </div>

    <!-- Other Details Field -->
    <div class="form-group">
        {!! Form::label('other_details', 'Other Details:') !!}
        <p>{!! $account->other_details !!}</p>
    </div>
   
</div>

<div class="col-xs-12">
<h3 class="text-center">Account history</h3>
@include('account_histories.table')

</div>