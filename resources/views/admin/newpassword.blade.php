@extends('admin/forgetlayout')
@section('content')
<main>
<div class="form-gap"></div>
<div class="container">
@include('flashmessages')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default" style="background-color:gray;">
            
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">

                    <form id="register-form" role="form" autocomplete="off" class="form" action="{{route('resetpasswordpost')}}" method="post">
                    @csrf
                    <input type="hidden" class="hide" name="token" id="token" value="{{$token}}"> 
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control  @error('image') is-invalid @enderror"  type="email">
                        </div>
                        @error('email')
                              <div class="form-error  text-danger">
                                  {{$message}}
                             </div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa-solid fa-lock"></i></span>
                          <input id="email" name="password" placeholder="enter new password" class="form-control  @error('image') is-invalid @enderror"  type="password">
                        </div>
                        @error('password')
                              <div class="form-error text-danger">
                                  {{$message}}
                             </div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa-solid fa-lock"></i></span>
                          <input id="email" name="password_comfirmation" placeholder="enter confirm password" class="form-control  @error('image') is-invalid @enderror"  type="password">
                        </div>
                        @error('password')
                              <div class="form-error text-danger">
                                  {{$message}}
                             </div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" style="background: linear-gradient(45deg, #ff357a, #fff172);" value="Reset Password" type="submit">
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