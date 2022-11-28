<!DOCTYPE html>
<html lang="fa-IR" prefix="og: https://ogp.me/ns#">
<head>
	<meta name="description" content="برگزاری رویدادهای مهارت آموزی و... سامانه برتا">
	<meta name="robots" content="index, follow">
	<meta name="theme-color" content="">
	<link rel="canonical" href="https://eberta.ir/">
	<meta property="og:title" content=" سامانه برتا- برگزاری رویدادهای مهارت آموزی">
	<meta property="og:url" content="https://eberta.ir/">
	<meta property="og:locale" content="fa_IR">
	<meta property="og:type" content="website">
	<meta property="og:description" content="برگزاری رویدادهای مهارت آموزی و... سامانه برتا">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="enamad" content="936590"/>
    <title>سامانه جامع برتا</title>
    <link rel="icon" href="<?php $this->asset('img/icon.png')  ?>">
    <meta name="theme-color" content="#17a2b8">
	<meta name="google-site-verification" content="QInbF53BksCHUJMpms2czP92qGksg1dAaNup2UlayaM">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap-rtl.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/fontawesome/css/all.css') ?>">
	<!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>-->
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">-->

<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/decoupled-document/ckeditor.js"></script>
					<!-- Development -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

<!-- Production -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
</head>
<body>


<header class="bg-white">
    <div class="container">
        <div class="row pb-3">
            <div class="d-none d-lg-block col-lg-2" style="margin-top: 1.5%;">
                <a href="<?php $this->url('') ?>"><img src="<?php $this->asset('img/bertalogo.jpeg')  ?>" alt="berta" style="width: 67px;" title="سامانه جامع برتا" class="img-fluid"></a>
            </div>

            <div class="d-none d-lg-flex col-lg-6 align-items-center search-box" style="margin-top: 1.5%;">
                <form action="<?php echo $this->url('manage_webinars/search')?>" method="post">
                    <div class="input-group">
                        <input type="search" name="search_content" class="form-control rounded-pill" placeholder="جستجو براساس عنوان رویداد مورد نظر ....">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-info rounded-pill font-13"> جستجو در سامانه برتا</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end" style="margin-top: 1.5%;">
                <?php if (!isset($_SESSION['login_user'])):;?>

                <a href="<?php $this->url('user/sign_up') ?>" class="btn btn-outline-info font-14 vazir-med-fa"><i class="fa fa-user-plus pl-1"></i>ثبت نام</a>
                <a href="<?php $this->url('user/login/user') ?>" class="btn btn-info font-14 vazir-med-fa mx-2">ورود</a>
                <?php else: ?>
                    <a href="<?php $this->url('') ?>" class="btn btn-outline-info font-14 vazir-med-fa mx-2"><i class="fa fa-user pl-1"></i>مشاهده وب سایت</a>
                    <a href="<?php $this->url('app/panel_user') ?>" class="btn btn-outline-info font-14 vazir-med-fa"><i class="fa fa-user pl-1"></i>پنل کاربری</a>
                    <a href="<?php $this->url('user/exit') ?>" class="btn btn-danger font-14 vazir-med-fa mx-2">خروج</a>
                <?php endif; ?>
            </div>

        </div>

        <div class="row"><!----- Start mobile header ----->

            <!--<div class="col-12 d-flex d-lg-none justify-content-center">
                <img src="<?php /*$this->asset('img/bertalogo.jpeg') */?>" alt="berta" alt="berta" class="img-fluid mb-3" style="max-width: 30%;">
            </div>-->
            <div class="col-12 d-flex d-lg-none justify-content-center mb-2 mobile-header">
			    <a href="<?php $this->url('') ?>" class="border-left ml-3"><i class="fa fa-home ml-3"></i></a>
                <a href="<?php $this->url('user/sign_up') ?>" class="border-left ml-3"><i class="fa fa-user-plus ml-3"></i></a>
                <a href="<?php $this->url('app/panel_user') ?>" class="border-left ml-3"><i class="fa fa-user ml-3"></i></a>
                <a href="<?php $this->url('user/login/user') ?>" class="border-left ml-3"><i class="fa fa-sign-in-alt ml-3"></i></a>
                <a href="#search" data-toggle="collapse"><i class="fa fa-search"></i></a>
            </div>

            <div id="search" class=" d-lg-none col-10 mx-auto collapse mb-4 justify-content-center">
				 <form action="<?php echo $this->url('manage_webinars/search')?>" method="post">
                    <div class="input-group">
                        <input type="search" name="search_content" class="form-control rounded-pill" placeholder="جستجو براساس عنوان رویداد مورد نظر ....">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-info rounded-pill font-13"> جستجو در سامانه برتا</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!----- End mobile header ----->
    </div>
</header>
<!----- End header ----->
<?php $this->include('app.layouts.menu') ?>