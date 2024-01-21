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
                    <div class="border rounded shadow-sm  p-2  ">
                        @include('admin.admin.admin_table')
                    </div>
                    <br>
                    <br>

                    <div class="border rounded shadow-sm  p-2 ">
                        @include('admin.admin.add_project')
                    </div>
                    <div class="border rounded shadow-sm  p-2 my-2">
                        @include('admin.admin.add_admin')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('conponment.admin_sidebar')
</div>
@endsection
