@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="/js/real_time.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid">
    <div class="row d-flex justify-content-center ">
        <div class="col">
            <div class="card">
                <div class="card-header ">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                    @endif


                    {{ __('You are logged in!') }}
                    <h1>{{ $message }}</h1>
                    <br>
                    <h2>TASKS :</h2>


                    <div class="container-lg my-5 ">
                        <div class="row gy-3">
                            <div class="col-md-6 col-lg-6">
                                <h2>TODO  </h2>
                                <div class="todo">
                                @foreach ($tasks as $task)
                                @if ($task->done == "still")
                                <div class=" text-light class{{ $task->id }}">

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item my-2">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading{{ $loop->index }}">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse{{ $loop->index }}"
                                                    aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapse{{ $loop->index }}">
                                                    <strong>{{ $task->project_name }}</strong>
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapse{{ $loop->index }}"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="panelsStayOpen-heading{{ $loop->index }}">
                                                <div class="accordion-body">
                                                    <strong>{{ $task->topic }}.</strong><br>{{ $task->task }}
                                                    <p style="color: gray;">{{ $task->sender }} <br>
                                                        {{ $task->created_at }}</p>
                                                
                                                    <button type="button" class="btn btn-success" id="done" data-id="{{ $task->id }}">Done</button>

                                                    <button type="button" class="btn btn-danger mx-2"
                                                    id="remove" data-id="{{ $task->id }}">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                                @endif
                                @endforeach
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 ">
                                <h2>DONE  </h2>
                                <div class="done">
                                @foreach ($tasks as $task)
                                    @if ($task->done == "done")
                                <div class="text-light  class{{ $task->id }}" >
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item my-2">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading{{ $loop->index }}">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse{{ $loop->index }}"
                                                    aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapse{{ $loop->index }}">
                                                    <strong>{{ $task->project_name }}</strong>
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapse{{ $loop->index }}"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="panelsStayOpen-heading{{ $loop->index }}">
                                                <div class="accordion-body">
                                                    <strong>{{ $task->topic }}.</strong><br>{{ $task->task }}
                                                    <p style="color: gray;">{{ $task->sender }} <br>
                                                        {{ $task->created_at }}</p>
                                                    <button type="button" class="btn btn-warning" data-id="{{ $task->id }}" id="still">Still</button>
                                                    <button type="button" class="btn btn-danger mx-2"
                                                    id="remove" data-id="{{ $task->id }}">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endif
                                    @endforeach
                            </div>
                        </div>
                    </div>




                </div>




            </div>
        </div>
    </div>
</div>
</div>

@endsection