@extends('layouts.app')

@section('content')
<script src="/js/pop_up_window_task.js"></script>

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

                    <br>
                    <div class="border rounded shadow-sm bg-white">
@include('admin.developers.dev_table')
</div>
<br>
<br>
<div class="border rounded shadow-sm  p-2 ">

@include('admin.developers.add_dev')
                </div>
    <br>
<br>
<div class="border rounded shadow-sm  p-2 ">
      @include('admin.developers.send_task_to_dev')
</div>

</div>
<br>
<br>
<div class="border rounded shadow-sm  p-2 m-3 ">
@include('admin.developers.dev_project_table')
</div>
      

    </div>
  </div>
        </div>
            </div>
    

    @include('conponment.admin_sidebar')

@endsection
