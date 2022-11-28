<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه جامع برتا |پیکربندی کد اتاق جلسه</title>
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
                        <div class="box-header with-border">
                            <h3 class="box-title">پیکربندی کداتاق جلسه</h3>
                        </div>
                        <form class="form-group" method="post" action="#">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group  row">
                                            <div class="col-md-4">
                                                <label for="exampleInputPassword0">کد مربوطه</label>
                                                <input type="text" class="form-control" name="code" value="<?php echo $info_code->code  ?>" placeholder="لطفا عنوان کد تخفیف مورد نظر را بنویسید ..." readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="exampleInputPassword0">سطح</label>
                                                <input type="text" class="form-control" value="<?php
												  switch($info_code->level)
												  {
													  case 'presenter':
													  echo 'مدیر';
													  break;
													  case 'participant':
													  echo 'شرکت کننده';
													  break;
												  } 
												  ?>" readonly>
                                            </div>
											<div class="col-md-4">
                                                <label for="exampleInputPassword0">تعداد کاربرمجاز</label>
                                                <input type="text" class="form-control"  name="number" value="<?php echo $info_code->usage_number  ?>" placeholder="تعداد کاربر مجاز استفاده از کد مربوطه">
                                            </div>
                                        </div>
                                        <div>
                                            <input type="submit" name="sharje_code" class="form-control btn btn-primary" value="شارژ مجدد">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">لیست کاربران استفاده کننده</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">نام و نام خانوادگی</button></button></th>
                                        <th scope="col"><button class="form-control">تلفن تماس</button></th>
                                        <th scope="col"><button class="form-control">تاریخ</button></th>
                                        <th scope="col"><button class="form-control">وضعیت</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($info_user_usage_code)):
                                        foreach ($info_user_usage_code as $key=>$user):
                                            ?>
                                            <tr>
                                                <td scope="row"><button class="form-control "><?php echo $key+1;?></button></td>
                                                <td scope="row"><button class="form-control "><?php echo $user->fullname;?></button></td>
                                                <td scope="row"><button class="form-control "> <?php echo $user->phone;?></button></td>
                                                <td scope="row"><button class="form-control btn btn-success "><?php echo $user->date_register;?></button></td>	
												<td scope="row"><a class="form-control btn btn-primary" href="<?php echo $user->skyroom_link;?>" target="_blank">لینک جلسه</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php else:
    $this->route('user/login/user');
    ?>
<?php endif; ?>




