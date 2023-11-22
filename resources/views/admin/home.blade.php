@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/pop_up_window_timeline.js"></script>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>


@include('conponment.admin_sidebar')

<button type="submit"  class="btn btn-primary send_btn_task">
                                    {{ __('Send Task') }}
                                </button>

                                <br>
<br>
<br>
<button type="submit"  class="btn btn-primary send_btn_timeline">
                                    {{ __('Send timeline') }}
                                </button>
<div class="container">
    <div class="row justify-content-center">
        <div class="fluid-container">
            <div class="card">
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
                <form method="POST" action="/home/add_admin">
        @csrf
        <input type="email" name="new_admin_mail"  placeholder="enter the name of the new admin" id="new_admin_mail">
        <input type="submit" value="create new admin">
    </form>
    <br>

    <form method="POST" action="/home/add_dev">
        @csrf
        <input type="email" name="new_dev_mail"  placeholder="enter the name of the new developper" id="new_dev_mail">
        <input type="submit" value="create new developper">
    </form>

   
  

  <form action="/home/pdf" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="pdfFile" accept=".pdf">
    <input type="submit" value="Upload">
  </form> 


  
  
</div>
</div>
</div>
</div>
<iframe src="/assets/pdfviewer/web/viewer.html?pdfname={{$doc}}" title="Iframe Example" id="myIframe" style="width: 100%; height:100vh"></iframe>







@endsection