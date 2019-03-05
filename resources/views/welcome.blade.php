@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <a href="{{route('login.facebook')}}" class="btn btn-primary">
                <i class="fab fa-facebook-square fa-2x float-left"></i>
                <span class="float-right ml-2" style="margin-top:3px">Login with Facebook</span>
            </a>
        </div>
    </div>
@endsection