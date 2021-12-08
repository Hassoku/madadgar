@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


                                <div class="card" style="top: 127px;">
                                    <div class="card-header" style="background-color: #38c172; color: #fff;">{{ __('vocab.admin_login') }}</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('admin.login') }}" method="post" class="">
                                           @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i style="margin-top:11px" class="fa fa-envelope"></i>
                                                    </div>
                                                    <input style="margin-left:6px" type="email" id="email" name="email" placeholder="Email" class="form-control">


                                                </div>
                                                @error('email')
                                                <span style="margin-left:25px"  role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i style="margin-top:11px" class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input style="margin-left:10px" type="password" id="password" name="password" placeholder="Password" class="form-control">

                                                </div>
                                                @error('password')
                                                <span style="margin-left:25px"  role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-actions form-group">
                                                <button style="margin-left: 22px;" type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                        </form>
                                    </div>
                                </div>
                            </div>



        </div>
    </div>
</div>
@endsection
