<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

<h1 class="h2 fw-normal mb-1">Add new developer : </h1>

<div class="accordion" id="accordionExample">
<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapseOne">
        Click to open
      </button>
    </h2>
    <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

<div class="container   ">
    <div class="row">
        <div class="col">
        
                  <form method="POST" action="/admin/add_dev">
                    @csrf
                    
                    <div class="row mb-3">
                            <label for="dev_email" class="col-md-4 col-form-label text-md-end">{{ __('Dev mail address') }}</label>

                            <div class="col-md-6">
                                <select id="dev_email"  class="js-example-basic-single form-control @error('email') is-invalid @enderror" name="dev_email"  required autocomplete="dev_email">
                                    @foreach ($user_table as $user)
                                    <option value="{{$user->email}}">{{$user->email}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="position" class="col-md-4 col-form-label text-md-end">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                
                            <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" required>
                             
                            

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('status (junior/senior)') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required>

                                @error('topic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add developer') }}
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