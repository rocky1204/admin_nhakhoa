<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="resources/assets/css/bootstrap.css">
<link rel="stylesheet" href="resources/assets/css/style.css">
 <link rel="stylesheet" href="resources/assets/css/login_custom.css">
</head>
<body style="  background-image:url('images/login.jpg');
  background-repeat: no-repeat;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;
background-position:center;">
@if($errors)
<ul>
@foreach($errors->all() as $loi)
<li>{{$loi}}</li>
@endforeach
</ul>
@endif
<div >
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    
{!!Form::open(array("routes"=>"post_login","class"=>"dangnhap"))!!}
    <p class="welcomelogin">Welcome...</p>
    <p class="welcomelogin2">Sign into your account</p>
{!!Form::text("username","",array("class"=>"username","placeholder"=>"Username","required"=>"required"))!!}
{!!Form::password("password",array("class"=>"password","placeholder"=>"Password","required"=>"required"))!!}
{!!Form::submit("Sign in",array("class"=>"btndangnhap btn-primary"))!!}
{!!Form::close()!!}
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
</div>
</div>
</body>
</html>