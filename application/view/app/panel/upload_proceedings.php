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
    <title>سامانه جامع برتا |ارسال فایل صورتجلسه</title>
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
						<?php if($notification): ?>
						<div class="alert alert-success" id="preloader-container">
						فایل با موفقیت بارگذاری شد.
						</div>
						<?php else: ?>
                        <div class="box-header with-border">
                            <h3 class="box-title">ارسال فایل صورتجلسه</h3>
                        </div>
							<form method="post" action="#" enctype="multipart/form-data">
							<div class="file_wrapper custom-file">
								<input type="file" class="custom-file-input" name="proceedings" required>
								<label class="custom-file-label" for="customFile1">ارسال صورتجلسه اتاق جلسه</label>
							</div>
							<input type="hidden" name="upload_proceedings" value="<?php echo $code_meeting; ?>">
							<button type="submit" class="btn btn-success form-control">بارگذاری صورتجلسه</button>								
							</form>
						<?php endif; ?>	
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
<div id="loader"></div>

<?php else:
    $this->route('user/login/user');
    ?>
<?php endif; ?>


