<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه جامع برتا |پیکربندی کدتخفیف</title>
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
    <div class="content-wrapper">
        <section class="content">
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border" style="text-align: center!important;">
                            <h3 class="box-title btn btn-warning">لیست کاربران استفاده کننده از کد تخفیف  <button class="btn btn-danger"><?php echo $code; ?></button></h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">نام و نام خانوادگی</button></button></th>
                                        <th scope="col"><button class="form-control">کد تخفیف</button></th>
                                        <th scope="col"><button class="form-control">زمان استفاده</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($info_user)):
                                        foreach ($info_user as $key=>$info):
                                            ?>
                                            <tr>
                                                <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-success"><?php echo $info->fullname;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-primary"> <?php echo $info->code;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-warning "><?php echo $info->date;?></button></th>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>

                                </table>
									<?php if(count($info_user) == 0): ?>
									<div class="alert alert-danger" style="text-align:center!important">
										براساس آخرین اطلاعات دریافت شده از سامانه ، کاربری از کد تخفیف <button class="btn btn-danger"><?php echo $code; ?></button> استفاده ننموده است.
									</div>
									<?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
else:
    $this->route('user/login/user');
    ?>
<?php endif;?>




