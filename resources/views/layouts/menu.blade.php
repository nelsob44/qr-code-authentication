{{-- Users access --}}

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.show', ['id'=> Auth::user()->id]) !!}"><i class="fa fa-edit"></i><span>My Profile</span></a>
</li>
<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('transactions.index') !!}"><i class="fa fa-edit"></i><span>Transactions</span></a>
</li>
<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{!! route('accounts.show') !!}"><i class="fa fa-edit"></i><span>My Accounts</span></a>
</li>


{{-- Webmasters access --}}
@if(Auth::user()->role_id < 4)
<li class="{{ Request::is('qrcodes*') ? 'active' : '' }}">
    <a href="{!! route('qrcodes.index') !!}"><i class="fa fa-edit"></i><span>Qrcodes</span></a>
</li>
@endif

{{-- Moderators access --}}
@if(Auth::user()->role_id < 3)
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>


<li class="{{ Request::is('accountHistories*') ? 'active' : '' }}">
    <a href="{!! route('accountHistories.index') !!}"><i class="fa fa-edit"></i><span>Account Histories</span></a>
</li>
@endif
{{-- Admin access --}}
@if(Auth::user()->role_id == 1)
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endif


<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.api') !!}">
    <i class="fa fa-edit"></i><span>API</span></a>
</li>




