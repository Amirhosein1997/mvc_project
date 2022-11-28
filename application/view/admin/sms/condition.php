<?php
use application\model\sms as smsModel;
$this->include('admin.layouts.header');
?>
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
                        <h3 class="box-title">وضعیت پنل پیامک</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class=""><a href="#tab_1" data-toggle="tab" aria-expanded="false">موجودی حساب</a></li>
                                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">ایجاد پیام پیش فرض</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane row" id="tab_1">
                                            <div class="col-md-12" style="font-size: 16px;">
                                                <p><strong>نام کاربری شما : </strong><span>amirhosein</span></p>
                                                <p><strong>رمز عبور : </strong><span>wljgwjwelkn</span></p>
                                                <p><strong>موجودی حساب شما : </strong><span>15000 T</span></p>
                                                <p><strong>سر شماره ها : </strong><span>1000 - 5000</span></p>
                                                <p><strong>شماره های سرویس پیامکی : </strong><span>1000-6646416 - 50006461365</span></p>
                                                <p><strong>موجودی حساب : </strong><span>15000 T</span></p>
                                                <p><strong>وضعیت سرویس پیامک : </strong><span class="label label-success">فعال</span></p>
                                                <hr>
                                                <a class="btn btn-primary" href="">شارژ حساب کاربری از طریق پنل رادکام</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane active" id="tab_2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="post" action="">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">متن پیام:</label>
                                                            <textarea id="exampleInputPassword1" rows="4" class="form-control" name="text" placeholder="متن پیام پیش فرض را وارد کنید"><?php if (isset($text_sms)){ echo $text_sms->text; } ?></textarea>
                                                        </div>

                                                        <div class="form-group" style="margin-bottom: 80px">
                                                            <button type="submit" class="btn btn-primary" name="submit" style="float: left">ثبت پیام</button>
                                                        </div>

                                                        <div class="box">
                                                            <div class="box-header with-border">
                                                                <h3 class="box-title">لیست پیام های پیش فرض</h3>
                                                            </div>
                                                            <div class="box-body">
                                                                <table class="table table-hover no-padding">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col">ردیف</th>
                                                                        <th scope="col">ایجاد کننده</th>
                                                                        <th scope="col">متن پیام</th>
                                                                        <th scope="col">عملیات</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                    if (isset($default_sms_tbl)):
                                                                        $query = new smsModel();
                                                                    foreach ($default_sms_tbl as $key => $default_sms):
                                                                        $author = $query->find('admin_tbl','phone',$default_sms->author);
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $key + 1?></td>
                                                                        <td><?php echo $author->name.' '.$author->family?></td>
                                                                        <td><?php echo $default_sms->text ?></td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                                                                    <span class="fa fa-caret-down"></span>
                                                                                </button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="<?php $this->url('sms_manage/delete_default_sms/'.$default_sms->id) ?>">حذف</a></li>
                                                                                    <li><a href="<?php $this->url('sms_manage/edit_default_sms/'.$default_sms->id) ?>">ویرایش</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                    endforeach;
                                                                    endif;
                                                                    ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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




