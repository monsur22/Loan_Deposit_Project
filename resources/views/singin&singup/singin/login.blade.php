@extends('singin&singup.master_singin&up')
@section('mainContent')


<h3 class="text-center text-success">{{ Session::get('successmessage') }}</h3>

    <form class="form-login" method="POST" action="{{url('/admin-login')}}">
      {{ csrf_field() }}
        <h2 class="form-login-heading">Welcome to Creative Pos login</h2>
        <div class="login-wrap">
          <input type="email" class="form-control" placeholder="Email" name="email" autofocus>
        
          <br>
          
               <input type="password" class="form-control" placeholder="Password" name="password" id="showPass" >
               <span toggle="#password-field" class="fa fa-lg fa-eye field-icon toggle-password"  onclick="myFunction()"></span>
            
          <label class="checkbox">
            
            <span class="pull-right">
            <a  href="{{url('/admin-password-reset')}}"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" name="btn" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
         <!-- <hr>
          <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
          <a class="btn btn-facebook" href="{{url('login/facebook')}}" type="submit"><i class="fa fa-facebook"></i> Facebook</a>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          <div class="registration">
            Don't have an account yet?<br/>
            <a href="{{url('/admin-register')}}">
              Create an account
              </a>
          </div>-->
        </div>
        <div class="copywrite text-center" style="font-size: 12px;margin-top: 15px;>
          <div class="text-center"> <b style="font-size: 14px;"> Copyright &copy; <a href="https://www.creativepos.com.bd">Creative Pos</a>&nbsp; <?php echo date("Y") ?>.</b><br>
  <div class="footer text-center" style="font-size: 15px;margin-left: -6px;">
     <b> Develop by</b> <a style="color:red;" href="https://www.creativesoftware.com.bd">Creative Software</a>
  </div>
      
     
      </form>


    
@endsection