<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php 
            use App\Configuration; 
            $configuration = Configuration::first();
        ?>
      @if(isset($configuration->nom_site))
         {{ $configuration->nom_site }} 
      @else
         Login Page 
      @endif</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shortcut icon" href="../{{ $configuration->favicon }}"  />

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/bootstrap/css/bootstrap.min.css') }}"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/dist/css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/resources/assets/plugins/iCheck/square/blue.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)"><b>Connexion</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color: slider;">      
    <form  role="form" method="POST" action="{{ url('/login') }}">
    @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert" data-plugin="alertify">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      {{ Session::get('flash_message') }}
    </div>
    <script type="text/javascript">
      // opener.location.replace('{{URL::To('utilisateurs')}}');
    </script>
    @endif
    
                        {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input type="email" class="form-control" placeholder="Email" value="" name="email">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div >
        <!-- /.col -->
       <div class="" align="right">
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Connexion</button>
          </div>
        </div>
        <!-- /.col -->
  <a href="{{url('password_reset')}}">Mot de passe oublier?</a>
      </div>
    </form>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('/resources/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>  
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('/resources/assets/bootstrap/js/bootstrap.min.js') }}"></script>  
<!-- iCheck -->
<script src="{{ asset('/resources/assets/plugins/iCheck/icheck.min.js') }}"></script>  
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
    function openwindows(page,w,h)
  {
    window.open(page, "same",
      "width="+w+",height="+h+",menubar=no,scrollbars=0,left=" +
      ((screen.width - w)/2) + ",top=" + ((screen.height - h)/2));
  };
</script>
</body>
</html>
