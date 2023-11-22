@extends('layouts.app')

@section('content')
<div class="container mx-8 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
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
                </div>
            </div>
        </div>
    </div>
    @extends('conponment.client_sidebar')
</div>
@endsection
