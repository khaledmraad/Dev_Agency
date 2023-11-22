
<h1 class="h2 fw-normal mb-1">Add New Admin : </h1>

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
        
                  <form method="POST" action="/admin/add_admin">
                    @csrf
                    
                        <div class="row mb-3">
                            <label for="new_admin_mail" class="col-md-4 col-form-label text-md-end">{{ __('Admin mail address') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="new_admin_mail" id="new_admin_mail"  value="{{ old('dev_email') }}" required autocomplete="dev_email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Admin') }}
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