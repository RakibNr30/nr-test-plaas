@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            User List
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>This is edit page</h1>
                    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
