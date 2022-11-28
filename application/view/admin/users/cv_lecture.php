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
                            <h3 class="box-title">اطلاعات برگزار کننده</h3>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="<?php $this->asset('img/panel/123.png') ?>" class="img-fluid rounded-start" alt="..." style="max-width: 111px;margin-right: 20px">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail0">نام:</label>
                                            <span class="form-control" id="exampleInputEmail0" disabled="">امیر حسین</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">نام خانوادگی:</label>
                                            <span class="form-control" id="exampleInputEmail1" disabled="">سلیمانی</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail2">کدملی:</label>
                                            <span class="form-control" id="exampleInputEmail2" disabled="">1051020365</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail3">تلفن تماس:</label>
                                            <span class="form-control" id="exampleInputEmail3" disabled="">09150794026</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail4">استان محل زندگی:</label>
                                            <span class="form-control" id="exampleInputEmail4" disabled="">خراسان رضوی</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail5">مدرک تحصیلی:</label>
                                            <span class="form-control" id="exampleInputEmail5" disabled="">کارشناسی</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">اطلاعات شرکت در وبینار ها </h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <h4>مجموع وبینار های برگزار شده:<span style="margin-right: 5px;">3</span></h4>
                            </div>

                            <div class="col-md-6">
                                <h4>مجموع وبینار های درحال برگزاری:<span style="margin-right: 5px;">2</span></h4>
                            </div>

                            <div class="col-md-6">
                                <h4>مجموع امتیاز ثبت شده ها:<span style="margin-right: 5px;">420</span></h4>
                            </div>

                            <div class="col-md-6">
                                <h4>مجموع عواید دریافتی از وبینار ها:<span style="margin-right: 5px;">350000</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">لیست شرکت کنندگان</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">عنوان وبینار</th>
                                    <th scope="col">تاریخ و زمان برگزاری</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">آدرس</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>برنامه نویسی php</td>
                                    <td>
                                        1400/9/6 - 15:30
                                    </td>
                                    <td><span class="btn btn-success">در حال برگزاری</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>برنامه نویسی php</td>
                                    <td>
                                        1400/9/6 - 15:30
                                    </td>
                                    <td><span class="btn btn-danger">برگزار شده</span></td>
                                    <td></td>
                                </tr>


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


