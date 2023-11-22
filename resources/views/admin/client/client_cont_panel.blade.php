@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card my-2">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    {{ __('You are logged in!') }}
                    <h1>{{ $message }}</h1>
                    <div class="border rounded shadow-sm bg-white">

                    @include('admin.client.client_table')
                    </div>
                    <br>
                    <br>
                    <div class="border rounded shadow-sm bg-white p-2">

                    @include('admin.client.send_timeline_event')
                    </div>
                    <br>
                    <br>
                    <div class="border rounded shadow-sm bg-white p-2">

                    @include('admin.client.client_project_table')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('conponment.admin_sidebar')
</div>
@endsection
