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
                        <h3 class="box-title">لیست پیام های دریافتی</h3>
                    </div>
                    <div class="box box-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ردیف</th>
                                <th scope="col">ارسال کننده</th>
                                <th scope="col">از سر شماره</th>
                                <th scope="col">متن پیام</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>amirhosein</td>
                                <td>1005684</td>
                                <td> خصصقخه صقخ صق صخ اص </td>
                                <td><p class="label label-success">بررسی شده</p></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                            <span class="fa fa-caret-down"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="">مشاهده جزییات پیام</a></li>
                                            <li><a href="">بررسی مجدد</a></li>
                                            <li><a href="">حذف پیام</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>amirhosein</td>
                                <td>1005684</td>
                                <td> خصصقخه صقخ صق صخ اص </td>
                                <td><p class="label label-warning">در حال بررسی</p></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                            <span class="fa fa-caret-down"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="">مشاهده جزییات پیام</a></li>
                                            <li><a href="">بررسی مجدد</a></li>
                                            <li><a href="">حذف پیام</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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





