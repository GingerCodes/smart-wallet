@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1>{{ $user->full_name}}</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills" role="tablist">
            <li role="presentation"><a href="{{ url('/account/update') }}">Edit</a></li>
            <li role="presentation"><a href="{{ url('/account/change-password') }}">Change Password</a></li>
        </ul>
    </div>
</div>





<div class="row">
    <div class="col-md-6">
        <h3>Groups</h3>
        <div class="list-group">
            @foreach ($user->groups as $group)
            <a href="#" class="list-group-item">$group->name</a>
            @endforeach
        </div>
    </div>
</div>
@endsection