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
                        <h3 class="box-title">ایجاد دسته بندی جدید</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword0">نام کاربری</label>
                                    <input type="text" class="form-control" id="exampleInputPassword0" name="" placeholder="لطفا نام کاربری خود را وارد کنید">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">رمز عبور</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="" placeholder="لطفا رمز عبور خود را وارد کنید">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword2">اتاق انلاین</label>
                                    <select class="form-control" id="exampleInputPassword2" name="" aria-label="select example">
                                        <option selected disabled>لطفا اتاق انلاین خود را وارد کنید</option>
                                        <option value="">320</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword3">سطح دسترسی</label>
                                    <select class="form-control" id="exampleInputPassword3" name="" aria-label="select example">
                                        <option selected disabled>لطفا سطح دسترسی خود را انتخواب کنید</option>
                                        <option value="">شرکت کننده</option>
                                        <option value="">برگزار کننده</option>
                                        <option value="">ادمین</option>
                                    </select>
                                </div>

                                <div class="" style="direction: ltr">
                                    <button type="submit" name="send" class="btn btn-primary">ثبت اطلاعات</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">لیست اتاق های انلاین</h3>
                    </div>
                    <div class="box-body">
                        <div class="box-body no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">نام کاربری</th>
                                    <th scope="col">رمز عبور</th>
                                    <th scope="col">کد اتاق انلاین</th>
                                    <th scope="col">سطح دسترسی</th>
                                    <th scope="col">تاریخ و زمان ایجاد</th>
                                    <th scope="col">ایجاد کننده</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">bertaroom1400</th>
                                    <th scope="row">berta65468413</th>
                                    <th scope="row">320</th>
                                    <th scope="row">شرکت کننده</th>
                                    <th scope="row">تاریخ :1400/3/26<br> ساعت : 20:30</th>
                                    <th scope="row">امیر حسین سلیمانی</th>
                                    <th scope="row"><p class="label label-warning">معلق</p></th>
                                    <th scope="row">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">حذف</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="row">bertaroom1400</th>
                                    <th scope="row">berta65468413</th>
                                    <th scope="row">320</th>
                                    <th scope="row">شرکت کننده</th>
                                    <th scope="row">تاریخ :1400/3/26<br> ساعت : 20:30</th>
                                    <th scope="row">امیر حسین سلیمانی</th>
                                    <th scope="row"><p class="label label-success">فعال</p></th>
                                    <th scope="row">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">حذف</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
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




