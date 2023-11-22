
@extends('layouts.app')
<link href="/css/timeline.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@section('content')
<div class="container mx-8 ">
    
    @extends('conponment.client_sidebar')
</div>


<div class="fluid-container " style="margin-left: 8%;margin-right: 8%" >
<div class="card my-2">
                <div class="card-header">{{ __('Dashboard') }}</div>

    <div class="page-header p-4">
      <br>
        <h1 id="timeline">Timeline : {{ $keyword }}</h1>
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Select project
  </button>
  <ul class="dropdown-menu">
  @foreach ($projects as $project)
    <li><a class="dropdown-item" href="{{ route('timeline', ['project' => $project->project_name]) }}">{{ $project->project_name }}</a></li>
@endforeach

  </ul>
</div>
    </div>
    <ul class="timeline p-1">

    @foreach ($events as $event)
        <li>
        @if($event->done == "done")
          <div class="timeline-badge" style="background-color: green;"><i class="glyphicon glyphicon-check"></i></div>
          @elseif($event->done == "still")
          <div class="timeline-badge" style="background-color: orange;"><i class="glyphicon glyphicon-check"></i></div>
          @endif
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">{{ $event-> project_name}}</h4>
              <h5 class="timeline-title">{{ $event-> topic}}</h5>
              <small class="text-muted"><i class="glyphicon glyphicon-time"></i> duration : {{ $event-> duration}}</small><br>
              <small class="text-muted"><i class="glyphicon glyphicon-time"></i>start date : {{ $event-> start_date}}</small><br>
            </div>
            <br>
            <div class="timeline-body">
              <p>{{ $event->description }}</p>
            </div>

          </div>
        </li>
        @endforeach
        
        
        
       
        
    </ul>
</div>
</div>


@endsection
