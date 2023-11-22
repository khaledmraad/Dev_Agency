<h1 class="h2 fw-normal mb-1">Send task to developer : </h1>

<div class="accordion" id="accordionExample">
<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Click to open
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

<div class="container   ">
    <div class="row">
        <div class="col">
        
                  <form method="POST" action="/admin/send_task">
                    @csrf
                    
                        <div class="row mb-3">
                            <label for="dev_email" class="col-md-4 col-form-label text-md-end">{{ __('Dev mail address') }}</label>

                            <div class="col-md-6">
                                <select id="dev_email"  class="js-example-basic-single form-control @error('email') is-invalid @enderror" name="dev_email"  required autocomplete="dev_email">
                                    @foreach($dev_table as $dev)
                                    <option value="{{$dev->email}}">{{$dev->email}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>


<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>




                        <div class="row mb-3">
                            <label for="project_name" class="col-md-4 col-form-label text-md-end">{{ __('Project name') }}</label>

                            <div class="col-md-6">
                                <select id="project_name" type="text" class="js-example-basic-single form-control @error('project_name') is-invalid @enderror" name="project_name" value="{{ old('project_name') }}" required>
                              
                                    @foreach($project_table as $project)
                                  <option value="{{$project->project_name}}">{{$project->project_name}}</option>
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
                            <label for="client_name" class="col-md-4 col-form-label text-md-end">{{ __('Client name') }}</label>

                            <div class="col-md-6">
                                <select id="client_name" type="text"  class="js-example-basic-single form-control @error('client_name') is-invalid @enderror" name="client_name" value="{{ old('client_name') }}" required>
                               
                                    @foreach($project_table as $project)
                                  <option value="{{$project->user_email}}">{{$project->user_email}}</option>
                                  @endforeach
                                </select>
                                @error('client_name')
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
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control @error('message') is-invalid @enderror" id="message" rows="3"  name="message"></textarea>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Task') }}
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
