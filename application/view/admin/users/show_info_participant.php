<?php $this->include('admin.layouts.header'); ?>
<?php
if ($_SESSION['adminbertapanel']) :
?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">گزارش اطلاعات شرکت کننده</h3>
                        </div>
                            <div class="box-body">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail0">نام:</label>
                                    <input type="text" class="form-control" id="exampleInputEmail0" disabled value="<?php echo $info_user_participant->name;?>">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">نام خانوادگی:</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" disabled value="<?php echo $info_user_participant->family;?>">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword2">تلفن تماس:</label>
                                    <input type="text" class="form-control" id="exampleInputPassword2" disabled value="<?php echo $info_user_participant->phone;?>">
                                </div>
                            </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">اطلاعات شرکت در وبینار ها </h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <h4>مجموع وبینار های شرکت کرده:<span style="margin-right: 5px;"><?php echo count($info_reg_user_webinar);?> وبینار</span></h4>
                            </div>

                            <div class="col-md-6">
                                <h4>مجموع وبینار های درحال برگزاری:<span style="margin-right: 5px;">5</span></h4>
                            </div>

                            <div class="col-md-6">
                                <h4>مجموع امتیاز ها:<span style="margin-right: 5px;">به زودی ...</span></h4>
                            </div>

                            <div class="col-md-6">
                                <h4>مجموع پرداخت ها:<span style="margin-right: 5px;">
                                        <?php
                                        $sum_Price = 0;
                                        foreach ($info_reg_user_webinar as $key=>$price_webinar) {
                                            $sum_Price = $price_webinar->price + $sum_Price;
                                        }
                                        echo $sum_Price;
                                        ?>   تومان</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">لیست وبینارهای ثبت نام شده کاربر </h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">عنوان وبینار</th>
                                    <th scope="col">تاریخ و زمان برگزاری</th>
                                    <th scope="col">هزینه وبینار</th>
                                    <th scope="col">وضعیت وبینار</th>
                                    <th scope="col">امتیاز </th>
                                    <th scope="col">مشاهده وبینار</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (count($info_reg_user_webinar) !=0):
                                foreach ($info_reg_user_webinar as $key=>$info_webinar) :
                                    $info_webinars = new \application\model\Webinar();
                                    $info_webinars = $info_webinars->find('webinars_tbl' , 'id',$info_webinar->id_webinar);
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1;?></th>
                                    <td><?php echo $info_webinars->title;?></td>
                                    <td><?php
										if(strpos(',',$info_webinars->date)){
                                        $info_dates_webinar = explode(',' ,$info_webinars->date);
                                        $count_session = count($info_dates_webinar);
                                        echo $count_session.' جلسه'.' | '.'تاریخ شروع : '.$info_dates_webinar[1];
										}
										else{
											echo $info_webinars->date."جلسه1 | تاریخ شروع";
										}
                                        ?></td>
                                    <td><?php echo $info_webinars->price;?></td>
                                    <td><p class="label label-success">فعال</p></td>
                                    <td>به زودی ...</td>
                                    <td><a class="btn btn-primary">مشاهده</a></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="alert alert-error text-center">متاسفانه در جستجوی انجام شده هیچ گونه اطلاعات ثبت نامی از کاربر درسامانه یافت نشد !!</p>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
else:
    $this->route('user/login/user');
    ?>
<?php endif;?>
<?php $this->include('admin.layouts.footer'); ?>
