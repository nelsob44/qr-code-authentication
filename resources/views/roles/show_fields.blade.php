<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $role->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $role->created_at->format('H:i, D d, M, Y') !!}</p>
</div>

<h3 class="text-center">Users that belong to this role</h3>
@include('users.table')
