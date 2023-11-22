@extends('layouts.app')

@section('content')
<div class="fluid-container" style="margin-left: 8%;">
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
                </div>
                <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center mb-3">
    <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            @foreach ($projects as  $project)
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="{{$project->image}}"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5>{{$project->name}}</h5>
                @php
                    $tags = json_decode($project->tags);
                @endphp

                <div class="mt-1 mb-0 text-muted small">
                    @foreach ($tags as $tag)
                        <span>{{ $tag }}</span>
                        <span class="text-primary"> • </span>
                    @endforeach
                </div>
                
                <p class="text mb-4 mb-md-0">
                {{$project->description}}</p>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1">{{$project->price }} DT</h4>
                </div>
                <div class="d-flex flex-column mt-4">
                 <form method="POST" action="{{ route('request_project') }}">
                    @csrf <!-- Include the CSRF token -->
                    <input type="hidden" name="project_name" value="{{$project->name}}" />
                    <button type="submit" class="btn btn-primary btn-sm py-3 px-5">View Timeline</button>
                  </form>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      
    </div>
    
    
  </div>
</section>
            </div>
        </div>
    </div>
    @extends('conponment.client_sidebar')
</div>
@endsection
