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
    <title>سامانه جامع برتا |ویرایش اطلاعات اتاق جلسه</title>
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
						<?php if($notification == 'edit'): ?>
						<div class="alert alert-success" id="preloader-container">
							ویرایش اطلاعات اولیه اتاق جلسه با موفقیت انجام شد.
						</div>
						<?php else: ?>
                    <div class="box box-primary form-row">
						<div class="col-md-3">
                        <label for="0"> موضوع فایل : </label>
                        <input id="0" type="text" class="form-control"  value="<?php 
						
								switch($info_file_meetingroom->part)
								{
									case 'logo':
									echo 'لوگو اتاق';
									break;
									case 'attach':
									echo 'فایل ضمیمه';
									break;
									case 'proceedings':
									echo 'فایل صورتجلسه';
									break;									
								}
							?>"
						readonly disabled>
                   		</div>

                    <div class="col-md-3">
                        <label for="3" id="myButton"  class="text-right">نوع فایل :</label>
						<input id="0" type="text" class="form-control"  value="<?php echo $info_file_meetingroom->type ?>" readonly disabled>

                    </div>

                    <div class="col-md-3">
                        <label for="3" id="myButton"  class="text-right">زمان بارگذاری :</label>
						<input id="0" type="text" class="form-control"  value="<?php echo $info_file_meetingroom->date ?>" readonly disabled>

                    </div>
					<div class="col-md-3">
                        <label for="3" id="myButton"  class="text-right">اتاق جلسه :</label>
						<input id="0" type="text" class="form-control"  value="<?php echo $info_meetingroom->titleroom ?>" readonly disabled>

                    </div>	

                      </div>
					  <hr>
					                      <p class="vazir font-15 text-danger"><i class="fa fa-exclamation-triangle align-middle ml-2"></i> کاربرگرامی؛ شما می توانید در محیط جاری نسبت به حذف یا بارگذاری فایل جایگزین فایل جاری اقدام فرمایید. </p>
						<form method="post" action="#" enctype="multipart/form-data">
							<div class="file_wrapper custom-file">
								<input type="file" class="custom-file-input" name="file_meeting" required>
								<label class="custom-file-label" for="customFile1">بارگذاری فایل جایگزین</label>
							</div>
										  <hr>
						<input type="hidden" name="id_file" value="<?php echo $info_file_meetingroom->id ?>">
						<button type="submit" class="btn btn-success mr-2" style="float:left">بارگذاری فایل جدید</button>
						</form>
						<form method="post" action="<?php $this->url('manage_meetingroom/delete_file_meeting') ?>" enctype="multipart/form-data">
						<input type="hidden" name="id_file" value="<?php echo $info_file_meetingroom->id ?>">
						<button type="submit" class="btn btn-danger" style="float:left">حذف فایل جاری</button>
						</form>
                    </div>
				<?php endif; ?>
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


