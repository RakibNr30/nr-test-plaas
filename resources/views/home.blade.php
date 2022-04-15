@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">
                    This is Home Page
                    <br>
                    <a href="{{ route('user.index') }}">
                        Goto User
                    </a>
                </h1>
            </div>
        </div>
    </div>
@endsection
