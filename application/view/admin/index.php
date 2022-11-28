<?php $this->include('admin.layouts.header');

if ($_SESSION['adminbertapanel']) :
?>
<div class="content-wrapper">
    <section class="content-header">
        <img src="<?php $this->asset('img/panel/hello.jpg') ?>" alt="User Image" style="width: 100%;height: 290px;margin-bottom: -5px;">

    </section>

    <section class="content">


        <div class="row margin-bottom">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner" style="padding: 5%;">
                        <?php
                        $info_user_reg = new \application\model\User();
                        $info_participant_reg = $info_user_reg->all( 'role' ,'participant');
                        $count_info_participant_reg = count($info_participant_reg);
                        ?>
                        <h3 style="font-size: 25px;"><?php echo $count_info_participant_reg; ?>  نفر</h3>
                        <p>تعداد شرکت کنندگان کل سامانه</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="<?php $this->url('user/reg_info_participant/') ?>" class="small-box-footer">ورود به بخش شرکت کنندگان <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner" style="padding: 5%;">
                        <?php
                        $info_organizer_reg = new \application\model\User();
                        $info_organizert_reg = $info_user_reg->all( 'role' ,'organizer');
                        $count_info_organizer_reg = count($info_organizert_reg);
                        ?>
                        <h3 style="font-size: 25px;"><?php echo $count_info_organizer_reg; ?>  نفر</h3>
                        <p>تعداد برگزار کنندگان کل سامانه</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?php $this->url('user/reg_info_organizer') ?>" class="small-box-footer">ورود به بخش برگزارکنندگان<i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner" style="padding: 5%;">
                        <?php
                        $sum_Price = 0;
                        $money = new \application\model\Transaction;
						$money = $money->all_transactions('transaction_tbl','status','100');
						foreach ($money as $key=>$price) {
                        $sum_Price = $price->amount + $sum_Price;
                                }
                        ?>
                        <h3 style="font-size: 25px;"><?php echo number_format($sum_Price,0);?>  ریال </h3>
                        <p>مجموع عواید دریافتی</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a href="<?php $this->url('transaction/report_transaction_webinar') ?>" class="small-box-footer">ورود به بخش امورمالی <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner" style="padding: 5%;">
					<?php
						$info_transaction_online_event = new application\model\Transaction;
						$info_transaction_online_event = $info_transaction_online_event->all_transaction_webinar_online();
						$info_webinar_online = new application\model\Webinar;
						$info_webinar_online = $info_webinar_online->all_webinar_online();
						$item = 0;
						foreach($info_webinar_online as $webinaronline){
						$count_peymant_organizer = new application\model\Webinar;
						$count_peymant_organizer = $count_peymant_organizer->count_peymant_organizer($webinaronline->id ,$webinaronline->id_req_user);
						if($count_peymant_organizer){
							$item = $item + 250000;
						}
						}
						$sum_income = 0;
						foreach ($info_transaction_online_event as $key=>$price) {
        				$sum_income = $price->amount + $sum_income;
        				}
						$final = $sum_income - $item;
						$final1 = count($info_transaction_online_event) - ($item/250000);
						$final_income = (0.03 * $final) + ($final1 * 5000);
						$final_money = $final_income + $item;
					 ?>
                        <h3 style="font-size: 25px;"><?php echo number_format($final_money,0); ?> ریال</h3>

                        <p>درآمدخالص سامانه تا این لحظه</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a href="<?php $this->url('transaction/report_transaction_webinar') ?>" class="small-box-footer">جستجو اطلاعات مالی درآمد <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>

            <!-- ./col -->
        </div>

        <div class="row">
            <a href="" class="">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-number margin">ثبت شرکت کننده</span>
                        <span class="info-box-number"><a href="" class="small-box-footer margin">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a></span>
                    </div>
                </div>
            </div>
            </a>
            <a href="" class="">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number margin">ثبت برگزار کننده</span>
                            <span class="info-box-number"><a href="" class="small-box-footer margin">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a></span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-money"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number margin">وبینار های برگزار شده</span>
                            <span class="info-box-number"><a href="" class="small-box-footer margin">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a></span>                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-comments"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number margin">پیام های دریافتی</span>
                            <span class="info-box-number"><a href="" class="small-box-footer margin">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a></span>

                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="row margin-bottom">
            <a href="" class="">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number margin">کاربران شرکت کننده</span>
                            <span class="info-box-number"><a href="" class="small-box-footer margin">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a></span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number margin">کاربران برگزار کننده</span>
                            <span class="info-box-number"><a href="" class="small-box-footer margin">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a></span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-money"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number margin">وبینار های در حال برگزاری</span>
                            <span class="info-box-number"><a href="" class="small-box-footer margin">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a></span>                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-comments"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number margin">ارسال پیام جدید</span>
                            <span class="info-box-number"><a href="" class="small-box-footer margin">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a></span>

                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">وبینار های برگزارشده</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>کد وبینار</th>
                                    <th>عنوان وبینار</th>
                                    <th>تاریخ و زمان برگزاری</th>
                                    <th>اطلاعات بیشتر</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><p class="label label-info">h39ry</p></td>
                                    <td>برنامه نویسی</td>
                                    <td>تاریخ : 1400/3/6<br> ساعت : 12:30</td>
                                    <td><a class="btn btn-primary">اطلاعات بیشتر</a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">ادمین های سامانه جامع برتا</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding" style="">
                        <ul class="users-list clearfix" style="margin: 2%;">
                            <li>
                                <img src="<?php $this->asset('img/panel/123.jpg') ?>" alt="User Image" style="width: 75%;">
                                <a class="users-list-name" href="#">مهدی نوبهاری</a>
                                <span class="users-list-date"><i class="fa fa-circle text-success"></i> آنلاین| احراز امنیت</span>
                            </li>
                            <li>
                                <img src="<?php $this->asset('img/panel/1234.png') ?>" alt="User Image" style="width: 75%;">
                                <a class="users-list-name" href="#">حجت فضایلی</a>
                                <span class="users-list-date"><i class="fa fa-circle text-danger"></i> آفلاین</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-muted">
            (برنامه نویسی شده توسط کد به کد)
        </div>
    </section>

</div>
<?php
else:
$this->route('user/login/user');
?>
<?php endif;?>
<?php $this->include('admin.layouts.footer'); ?>
