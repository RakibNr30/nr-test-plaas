@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>User List</h1>
            <a href="{{ route('index') }}" class="btn btn-primary btn-sm float-right">Home</a>
        </div>
        <div class="card-body mb-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive p-3">
                        <livewire:user-table />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    @powerGridStyles
@endsection

@section('script')
    @powerGridScripts
@endsection
