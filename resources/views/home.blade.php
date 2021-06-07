@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                @if(Auth::user())
                    @if (Auth::user()->status == '0')
                        <div class="alert alert-success" role="alert">
                            {{ __('Your Account Is Under Review!') }}
                        </div>
                    @elseif(Auth::user()->status == '1')
                    <div class="alert alert-success" role="alert">
                            {{ __('Your Account Approved By Admin!') }}
                        </div>
                    @endif
                @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
