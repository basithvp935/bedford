<form method="post" action="{{ route('career_store') }}" class="contact-form" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    
    <div class="modal fade" id="getCareerform" tabindex="-1" role="dialog" aria-labelledby="getCareerform" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Career Forn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="#getCareerform">
        <input name="career_id" type="hidden" value="{{ $career->id }}" />
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required
                        value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="error">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email"
                        value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control"
                        placeholder="Phone" required="">
                    @if ($errors->has('phone'))
                        <span class="error">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Remark</label>
                    <textarea class="form-control" name="remark" id="remark" rows="6" placeholder="Remark" required="">{{ old('remark') }}</textarea>
                    @if ($errors->has('remark'))
                        <span class="error">{{ $errors->first('remark') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="upload">
                        <label for="exampleFormControlInput1" class="form-label">Attach your Resume/CV</label>
                        <input class="form-control" type="file" name="myfile" required />
                    </div>
                </div>
            </div>
            <div class="col smd1 gutter">
                <div class="g-recaptcha"
                    style="transform:scale(0.7);transform-origin:0;-webkit-transform:scale(0.7);
transform:scale(0.7);-webkit-transform-origin:0 0;transform-origin:0 0;"
                    data-sitekey="{{ env('RecaptchaSitekey') }}" data-callback="recaptchaCallback">
                </div>
            </div>
        </div>

    </div>
      <div class="modal-footer">
        <button type="submit" id="Submit_btn" class="btn btn-primary w-100 p-2">
            Submit
        </button>
      </div>
    </div>
  </div>
</div>
   
  
  
</form>


<script>
    function recaptchaCallback() {
        var bookbutton = document.getElementById("Submit_btn");
        document.getElementById('Submit_btn').disabled = false;
    }

    $(function() {
        $("input[name='phone']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>
