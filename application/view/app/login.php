<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap-rtl.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/fontawesome/css/all.css') ?>">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7 col-xl-6 col-md-9 register">
                <div class="card my-5">

                    <div class="card-body">
                        <h5 class="shadow-sm text-center mb-4 py-3">ورود به سایت</h5>
                        <div id="username_eror" class="text text-danger" role="alert" style="display: none; font-size: 12px;">
                            کاربر گرامی نام کاربری شما نامعتبر می باشد!
                        </div>
                        <div id="password_eror" class="text text-danger" role="alert" style="display: none; font-size: 12px;">
                            کاربر گرامی رمز عبور شما نامعتبر می باشد!
                        </div>
                        <form action="" method="post">
                
                            <div class="form-group">
                                <label for="">تلفن همراه</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  my-icon"> <i class="fa fa-user-plus align-middle"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="info[phone]" placeholder="لطفا تلفن همراه خود را وارد نمایید...">
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label for=""> رمز عبور : </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  my-icon"> <i class="fa fa-lock align-middle"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="info[password]" placeholder="رمز عبور خود را وارد کنید">
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input vazir ml-2" name="info[remember]" value="remember" >یادآوری رمز عبور
                                </label>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn-block rounded-pill custom-btn font-13 my-3">ورود </button>
                            
                            <p class="text-center my-3  font-12 vazir">رمز عبور خود را فراموش کرده اید؟ <a href="<?php $this->url('user/forget_password') ?>" class="login">بازیابی رمز عبور</a></p>
                            
                            <p class="text-center my-3  font-12 vazir">هنوز در سایت ثبت نام نکرده اید ؟ <a href="<?php $this->url('user/sign_up') ?>" class="login">ثبت نام</a></p>

                        </form>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="<?php $this->asset('js/jquery-1.11.3.min.js') ?>"></script>
    <script src="<?php $this->asset('js/bootstrap.min.js') ?>"></script>
    <script src="<?php $this->asset('js/owl.carousel.min.js') ?>"></script>
    <script src="<?php $this->asset('js/main.js') ?>"></script>
    <script src="<?php $this->asset('js/myscript.js') ?>"></script>
</body>
</html>