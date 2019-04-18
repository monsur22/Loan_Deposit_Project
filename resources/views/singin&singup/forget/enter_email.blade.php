@extends('singin&singup.master_singin&up')
@section('mainContent')
<form class="form-login" method="POST" action="{{url('/admin-password-reset')}}">
    {{ csrf_field() }}
        <h2 class="form-login-heading">Forget Password</h2>
    <div class="login-wrap">
      
      <input type="email" class="form-control" name="email" placeholder="Email" autofocus>
      <br>
      <button class="btn btn-theme btn-block" name="btn" type="submit"> Submit</button>
      
      
     
    </div>
  
    <div>
      <div class="copywrite text-center" style="font-size: 12px;margin-top: 15px;>
        <div class="text-center"> <b style="font-size: 14px;"> Copyright &copy; <a href="https://www.creativepos.com.bd">Creative Pos</a>&nbsp; <?php echo date("Y") ?>.</b><br>
<div class="footer text-center" style="font-size: 15px;margin-left: -6px;">
    Develop by <a style="color:red;" href="https://www.creativesoftware.com.bd">Creative Software</a>
</div>
    </div>
  </div>
  </form>
@endsection