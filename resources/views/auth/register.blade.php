@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 style="font-weight: 600;">Register</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">

                            <h4 style="font-weight: 600;">Public Info</h4>

                            <hr>
                                
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Shop Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" placeholder="ABC(pvt) Ltd" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('business_sector') ? ' has-error' : '' }}">
                                    <label for="business_sector" class="col-md-4 control-label">Business Sector</label>

                                    <div class="col-md-6">
                                        <select id="business_sector" class="form-control" name="business_sector" value="{{ old('business_sector') }}" required>
                                            <option value="tailor shop">Tailor Shop</option>
                                            <option value="retail shop">Retail Shop</option>
                                            <option value="mechanical shop">Mechenical Shop</option>
                                            <option value="other">Other</option>
                                        </select>

                                        @if ($errors->has('business_sector'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('business_sector') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" placeholder="Someone@gmail.com" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label for="image" class="col-md-4 control-label">Image</label>

                                    <div class="col-md-6">
                                        <input id="image" type="file" class="form-control" name="image" >
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                    <label for="location" class="col-md-4 control-label">Location</label>

                                    <div class="col-md-6">
                                        <textarea id="location" type="location" placeholder="Your Address" class="form-control" name="location" required>

                                        </textarea>

                                        @if ($errors->has('location'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('location') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                            <h4 style="font-weight: 600;">Account Info</h4>

                            <hr>

                                <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                    <label for="telephone" class="col-md-4 control-label">Telephone</label>

                                    <div class="col-md-6">
                                        <input id="telephone" type="text" class="form-control" placeholder="Use as Username" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                        @if ($errors->has('telephone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" placeholder="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                 </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" placeholder="confirm password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-10">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
