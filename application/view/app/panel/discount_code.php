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
<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">پیکربندی کدتخفیف رویداد</h3>
                        </div>
                        <form class="form-group" method="post" action="<?Php echo $this->url('transaction/create_discount_code_client/'.$id_webinar);?>">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group  row">
                                            <div class="col-md-4">
                                                <label for="exampleInputPassword0">عنوان کد تخفیف</label>
                                                <input type="text" class="form-control" name="title" placeholder="لطفا عنوان کد تخفیف مورد نظر را بنویسید ...">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="exampleInputPassword0">درصد</label>
                                                <input type="text" class="form-control" name="percent" placeholder="لطفا درصد کد تخفیف مورد نظر را بنویسید ...">
                                            </div>
											<div class="col-md-4">
                                                <label for="exampleInputPassword0">تعداد کاربرمجاز</label>
                                                <input type="text" class="form-control" name="usernumber" placeholder="تعداد کاربر مجاز استفاده از کد تخفیف">
                                            </div>
                                        </div>
                                        <div>
                                            <input type="submit" name="create_code" class="form-control btn btn-primary" value="ایجاد کدتخفیف">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">لیست کدتخفیف های ایجاد شده برای رویداد</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">عنوان کدتخفیف</button></button></th>
                                        <th scope="col"><button class="form-control">زمان ایجاد</button></th>
                                        <th scope="col"><button class="form-control">درصد</button></th>
                                        <th scope="col"><button class="form-control">اعتبار باقی مانده</button></th>
										<th scope="col"><button class="form-control">جزئیات استفاده</button></th>
                                        <th scope="col"><button class="form-control">حذف کد</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($info_discountcodes)):
                                        foreach ($info_discountcodes as $key=>$info_discountcode):
                                            ?>
                                            <tr>
                                                <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                                <th scope="row"><button class="form-control "><?php echo $info_discountcode->code;?></button></th>
                                                <th scope="row"><button class="form-control "> <?php echo $info_discountcode->date;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-success "><?php echo $info_discountcode->discount;?></button></th>
												<?php if($info_discountcode->number == 0):?>
                                                <th scope="row"><button class="form-control btn btn-danger">اتمام ظرفیت</button></th>												
												<?php else: ?>
                                                <th scope="row"><button class="form-control btn btn-warning"><?php echo $info_discountcode->number ?> نفر</button></th>
												<?php endif; ?>	
												<th scope="row"><a class="form-control btn btn-primary" href="<?php echo $this->url('transaction/show_use_discount_client/'.$info_discountcode->id_webinar.'/'.$info_discountcode->code); ?>"><i class=" fa fa-eye  "></i></a></th>
                                                <th scope="row"><a class="form-control btn btn-danger" href="<?php echo $this->url('transaction/delete_discountcode_client/'.$info_discountcode->id_webinar.'/'.$info_discountcode->id); ?>">حذف</a></th>
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




