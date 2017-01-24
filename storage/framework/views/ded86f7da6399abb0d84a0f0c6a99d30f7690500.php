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
<?php if($errors): ?>
<ul>
<?php foreach($errors->all() as $loi): ?>
<li><?php echo e($loi); ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
<div >
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    
<?php echo Form::open(array("routes"=>"post_login","class"=>"dangnhap")); ?>

    <p class="welcomelogin">Welcome...</p>
    <p class="welcomelogin2">Sign into your account</p>
<?php echo Form::text("username","",array("class"=>"username","placeholder"=>"Username","required"=>"required")); ?>

<?php echo Form::password("password",array("class"=>"password","placeholder"=>"Password","required"=>"required")); ?>

<?php echo Form::submit("Sign in",array("class"=>"btndangnhap btn-primary")); ?>

<?php echo Form::close(); ?>

</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
</div>
</div>
</body>
</html>