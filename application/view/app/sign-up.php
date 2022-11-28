<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام </title>
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap-rtl.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/fontawesome/css/all.css') ?>">
</head>
<body>
<?php
//echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];
?>
    <!----- Start sign up box ----->
    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-lg-7 col-xl-6 col-md-9 register">

                <div class="card my-5">

                    <div class="card-body">
                        <h5 class="shadow-sm text-center mb-4 py-3"> ثبت نام در سایت </h5>

                        <form action="<?php $this->url('user/reg_info_user'); ?>" method="post" >
                            
                            <div class="form-group">
                                <label for="name"> تلفن همراه : </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  my-icon"><i class="fa fa-phone align-middle"></i></span>
                                    </div>
                                    <input type="text" name="phone" class="form-control" style="background-color: #a8e7ff" id="Phone" value="<?php //echo $_SESSION['phone']?>" placeholder="تلفن خود را وارد کنید" >
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label for="">نام:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  my-icon"> <i class="fa fa-user align-middle"></i></span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="نام  خود را وارد کنید " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">نام خانوادگی:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  my-icon"> <i class="fa fa-user-alt align-middle"></i></span>
                                    </div>
                                    <input type="text" name="family" class="form-control" placeholder="نام خانوادگی خود را وارد کنید " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">کد ملی:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  my-icon"> <i class="fa fa-user-alt align-middle"></i></span>
                                    </div>
                                    <input type="text" name="mellicode" class="form-control" placeholder="کدملی  خود را وارد کنید " minlength="10" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for=""> ایمیل : </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  my-icon"> <i class="fa fa-envelope align-middle"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder=" ایمیل خود را وارد کنید" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for=""> رمز عبور : </label>
                                <span><small style="color: #ff3333">حداکثر طول رمز عبور 16 کاراکتر است</small></span>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  my-icon"> <i class="fa fa-lock align-middle"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="رمز عبور خود را وارد کنید" maxlength="16" required>
                                </div>
                            </div>
                            
                            <button type="submit" name="register" class="btn btn-primary btn-block rounded-pill custom-btn font-13 mt-4" value="register">ثبت نام</button>

                        </form>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!----- End sign up box ----->
    <script src="<?php $this->asset('js/jquery-1.11.3.min.js') ?>"></script>
    <script src="<?php $this->asset('js/bootstrap.min.js') ?>"></script>
    <script src="<?php $this->asset('js/owl.carousel.min.js') ?>"></script>
    <script src="<?php $this->asset('js/main.js') ?>"></script>
    <script src="<?php $this->asset('js/myscript.js') ?>"></script>
</body>
</html>