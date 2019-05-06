@extends('singin&singup.master_singin&up')
@section('mainContent')
<form class="form-login" method="POST" action="{{url('/admin-reset-code')}}">
  {{ csrf_field() }}    <h2 class="form-login-heading">Forget Password Code</h2>
    <div class="login-wrap">
      <input type="number" class="form-control" name="token" placeholder="Code" autofocus>
      <br>
       <button class="btn btn-theme btn-block" name="btn" type="submit"> Submit</button>
    
      
     
    </div>
  
    <div>
      <div class="copywrite text-center" style="font-size: 12px;margin-top: 15px;>
        <div class="text-center"> <b style="font-size: 14px;"> Copyright &copy; <a href="https://www.creativepos.com.bd">Creative Pos</a>&nbsp; <?php echo date("Y") ?>.</b><br>
<div class="footer text-center" style="font-size: 15px;margin-left: -6px;">
  <b> Develop by</b> <a style="color:red;" href="https://www.creativesoftware.com.bd">Creative Software</a>
</div>
    </div>
  </div>
  </form>
@endsection