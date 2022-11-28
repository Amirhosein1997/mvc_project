<?php $this->include('admin.layouts.header'); ?>
<?php
if ($_SESSION['adminbertapanel']) :
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row" style="margin-top: 3%;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">وضعیت سرویس </h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text margin">
                                <strong>تاریخ خرید : </strong><span>1400/8/19</span><br>
                                </div>
                                <div class="text margin">
                                <strong>تاریخ اتمام : </strong><span>1400/1/13</span><br>
                                </div>
                                <div class="text margin">
                                    <strong>نوع سرویس : </strong><span>طلایی</span><br>
                                </div>
                                <div class="text margin">
                                    <strong>حداکثر امکان ایجاد اتاق انلاین : </strong><span>30</span><br>
                                </div>
                                <div class="text margin">
                                    <strong>حداکثر تعداد کاربران فعال در یک اتاق انلاین : </strong><span>100</span><br>
                                </div>
                            </div>
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
<?php $this->include('admin.layouts.footer'); ?>




