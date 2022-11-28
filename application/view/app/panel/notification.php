<!DOCTYPE html>
<html lang="fa">
<head>
<style type="text/css">
#loader {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  background: rgba(0,0,0,0.75) url(images/loading2.gif) no-repeat center center;
  z-index: 10000;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه جامع برتا |عملیات موفق</title>
    <link rel="icon" href="<?php $this->asset('img/icon.png')  ?>">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap-rtl.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/fontawesome/css/all.css') ?>">
	
</head>
<body>
<?php
if (isset($_SESSION['login_user'])) :
    ?>
<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="box box-primary">
						<?php 
						if($notification == 'edit'):
						 ?>
						<div class="alert alert-success" id="preloader-container">
						ویرایش و بارگذاری فایل جایگزین مورد نظر با موفقیت انجام شد.
						<hr>
											                      <p class="vazir font-15 text-danger"><i class="fa fa-exclamation-triangle align-middle ml-2"></i>لطفا پس از بسته شدن این پیام ،پنل خود را بروزرسانی نمایید </p>
						</div>
						<?php endif; ?>
						<?php 
						if($notification == 'delete'):
						 ?>
						<div class="alert alert-success" id="preloader-container">
						حذف فایل مورد نظر با موفقیت انجام شد.
						<hr>
																	                      <p class="vazir font-15 text-danger"><i class="fa fa-exclamation-triangle align-middle ml-2"></i>لطفا پس از بسته شدن این پیام ،پنل خود را بروزرسانی نمایید </p>
						</div>
						<?php endif; ?>
						<?php 
						if($notification == 'attach'):
						 ?>
						<div class="alert alert-success" id="preloader-container">
						بارگذاری فایل ضمیمه با موفقیت انجام شد.
						<hr>
																	                      <p class="vazir font-15 text-danger"><i class="fa fa-exclamation-triangle align-middle ml-2"></i>لطفا پس از بسته شدن این پیام ،پنل خود را بروزرسانی نمایید </p>
						</div>
						<?php endif; ?>
						<?php 
						if($notification == 'proceedings'):
						 ?>
						<div class="alert alert-success" id="preloader-container">
						بارگذاری فایل صورتجلسه با موفقیت انجام شد.
						<hr>
																	                      <p class="vazir font-15 text-danger"><i class="fa fa-exclamation-triangle align-middle ml-2"></i>لطفا پس از بسته شدن این پیام ،پنل خود را بروزرسانی نمایید </p>
						</div>
						<?php endif; ?>
												<?php 
						if($notification == 'edit-info'):
						 ?>
						<div class="alert alert-success" id="preloader-container">
				ویرایش اطلاعات اولیه اتاق جلسه با موفقیت انجام شد.
						<hr>
																	                      <p class="vazir font-15 text-danger"><i class="fa fa-exclamation-triangle align-middle ml-2"></i>لطفا پس از بسته شدن این پیام ،پنل خود را بروزرسانی نمایید </p>
						</div>
						<?php endif; ?>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
<div id="loader"></div>

<script>
 
function closeWindow(){
 setTimeout(function(){
  window.close();
 }, 5000);
}
 
window.onload = closeWindow();
 
</script>
<?php else:
    $this->route('user/login/user');
    ?>
<?php endif; ?>


