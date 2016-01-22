@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Change Password</div>

    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/account/change-password') }}">
            {!! csrf_field() !!}
            
            <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Current Password</label>

                <div class="col-md-6">
                    <input type="password" class="form-control" name="current_password">

                    @if ($errors->has('current_password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('current_password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">New Password</label>

                <div class="col-md-6">
                    <input type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" name="password_confirmation">

                    @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-refresh"></i>Change Password
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection