<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>درگاه امن ورود به پنل مدیریت | سامانه جامع برتا</title>

    <link href="<?php $this->asset('css/adminpanel/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php $this->asset('css/adminpanel/bootstrap-theme.css')?>" rel="stylesheet">
    <link href="<?php $this->asset('css/adminpanel/elegant-icons-style.css')?>" rel="stylesheet"/>
    <link href="<?php $this->asset('css/adminpanel/font-awesome.css')?>" rel="stylesheet"/>
    <link href="<?php $this->asset('css/adminpanel/style.css')?>" rel="stylesheet">
    <link href="<?php $this->asset('css/adminpanel/style-responsive.css')?>" rel="stylesheet" />
    <script src="<?php $this->asset('js/html5shiv.js')?>"></script>
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" method="post">        
        <div class="login-wrap">
            <p class="login-img"><img src="http://eberta.ir/public/img/logo.png"></i></p>
            <div class="input-group">
              <span class="input-group-addon">نام کاربری</span>
              <input name="info[username]" type="text" class="form-control" maxlength="30" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon">رمزعبور</span>
                <input name="info[password]" type="password" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" value="true" style="background-color: #54636a!important;border-color: #1e1e2c!important;"> ورود به مدیریت سامانه</button>
            <button class="btn btn-info btn-lg btn-block" type="button" style="background-color: #36364999!important;border-color: #1e1e2c!important;" onClick="alert('مجموعه برنامه نویسی کد به کد | پشتیبانی 24 ساعته | 09156639069');">دریافت پشتیبانی</button>
            <label class="checkbox">
                <span style="margin-left: 35px"> <a href="#">DadeNegar Fanavaran Pars Co</a></span>
            </label>
        </div>
      </form>
    </div>
  </body>
</html>
