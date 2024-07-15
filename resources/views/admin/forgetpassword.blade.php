@extends('admin/forgetlayout')
@section('content')

<main>
<div class="form-gap"></div>
<div class="container ">
	<div class="row d-flex justify-content-center">
		<div class="col-md-4 col-md-offset-4 mt-5 ">
            <div class="panel panel-default">
            
              <div class="panel-body">
                <div class="text-center">
               
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">

                    <form id="register-form"  class="form" action="{{route('forgetpasswordpost')}}" method="post">
                    @csrf
                      <div class="form-group">
                        <div class="input-group text-center">
                          <span class="input-group-addon"><i class="fa-solid fa-envelope fs-1 "></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control  @error('image') is-invalid @enderror"  type="email">
                          
                        </div>
                        @error('email')
                              <div class="form-error fw-bold text-danger">
                                  {{$message}}
                             </div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-block mt-4" style="background: linear-gradient(45deg, #ff357a, #fff172);" value="Reset Password" type="submit">
                      </div>
                      
                   
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
</main>
@endsection
