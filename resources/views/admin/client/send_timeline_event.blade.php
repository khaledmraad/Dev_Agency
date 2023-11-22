<h1 class="h2 fw-normal mb-1">Send Timeline event to client : </h1>

<div class="accordion" id="accordionExample">
<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Click to open
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">


<div class="container" >
    <div class="row">
        <div class="col">
            
        <form method="POST" action="/admin/send_timeline">
                    @csrf
                    
                        <div class="row mb-3">
                            <label for="user_email" class="col-md-4 col-form-label text-md-end">{{ __('Client mail address') }}</label>

                            <div class="col-md-6">
                                <select id="user_email" type="email" class="js-example-basic-single form-control @error('email') is-invalid @enderror" name="user_email" value="{{ old('user_email') }}" required autocomplete="user_email">
                                @foreach($clients as $client)
                                    <option value="{{$client->email}}">{{$client->email}}</option>
                                  @endforeach
                                </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <script type="text/javascript">
        $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
                        </div>


                        <div class="row mb-3">
                            <label for="project_name" class="col-md-4 col-form-label text-md-end">{{ __('Project name') }}</label>

                            <div class="col-md-6">
                                <select id="project_name" type="text" class="js-example-basic-single form-control @error('project_name') is-invalid @enderror" name="project_name" value="{{ old('project_name') }}" required>
                                @foreach($project_table as $proj)
                                    <option value="{{$proj->name}}">{{$proj->project_name}}</option>
                                  @endforeach
                                </select>
                                @error('project_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="topic" class="col-md-4 col-form-label text-md-end">{{ __('Topic') }}</label>

                            <div class="col-md-6">
                                <input id="topic" type="text" class="form-control @error('topic') is-invalid @enderror" name="topic" value="{{ old('topic') }}" required>

                                @error('topic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="message" rows="3"  name="description"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="start_date" class="col-md-4 col-form-label text-md-end">{{ __('Start date') }}</label>

                            <div class="col-md-6">
                                <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required>

                                @error('project_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duration" class="col-md-4 col-form-label text-md-end">{{ __('Duration') }}</label>

                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}" required>

                                @error('project_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send timeline event') }}
                                </button>
                            </div>
                        </div>
                    </form>
           
          
        </div>
    </div>
</div>
      </div>
    </div>
</div>
</div>

