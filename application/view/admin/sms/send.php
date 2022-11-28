<?php
use application\model\sms as smsModel;
$query = new smsModel();
$this->include('admin.layouts.header'); ?>
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
                        <h3 class="box-title">ارسال پیامک جدید</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <form method="post" action="<?php echo $this->url('sms_manage/send') ?>">
                                <div class="col-md-12">

                                    <div class="form-group col-sm-5">
                                        <label for="1">انتخواب سرشماره:</label>
                                        <select class="form-control" id="1" name="info[sender]" aria-label="select example">
                                            <option selected disabled>سرشماره خود را انتخواب کنید</option>
                                            <option value="+98500010403528823">500010403528823</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="2">به شماره:</label>
                                        <input class="form-control" type="text" name="info[receiver]" placeholder="شماره مورد نظر خود را وارد کنید" id="2">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="4">دفترچه تلفن</label>
                                        <button id="4" type="button" class="form-control btn btn-primary" data-toggle="modal" data-target="#modal-default">انتخواب از دفترچه تلفن</button>
                                    </div>

                                    <!--<div class="form-group col-md-12">
                                        <label for="5">انتخواب سرشماره:</label>
                                        <select class="form-control" id="5" name="info[default]" aria-label="select example">
                                            <option selected disabled>متن پیش فرض خود را وارد کنید</option>
                                            <?php
/*                                            if (isset($default_sms)):
                                            foreach ($default_sms as $default):
                                            */?>
                                            <option value="<?php /*echo $default->text */?>"><?php /*echo $default->text*/?></option>
                                            <?php
/*                                            endforeach;
                                            endif;
                                            */?>
                                        </select>
                                    </div>-->

                                    <div class="form-group col-md-12">
                                        <label for="3">متن پیام:</label>
                                        <textarea id="3" rows="5" class="form-control" name="info[text]" placeholder="توضیحات مربوط به دسته بندی خود را وارد کنید"></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary" style="float: left;"> ارسال پیام</button>
                                </div>
                            </form>
                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog" style="width: 50%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">دفترچه تلفن</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">عملیات</th>
                                                    <th scope="col">نام و نام خانوادگی</th>
                                                    <th scope="col">تلفن تماس</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $users_tbl = $query->all('users_tbl');
                                                foreach ($users_tbl as $user):
                                                    ?>
                                                <tr>
                                                    <td><button type="button" class="btn btn-primary">افزودن</button></td>
                                                    <td><?php echo $user->name.' '.$user->family ?></td>
                                                    <td><?php echo $user->phone ?></td>
                                                </tr>
                                                <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">خروج</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">لیست پیام های ارسالی</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-hover no-padding">
                            <thead>
                            <tr>
                                <th scope="col">ارسال کننده</th>
                                <th scope="col">سر شماره و شماره هدف</th>
                                <th scope="col">تاریخ و زمان ارسال</th>
                                <th scope="col">متن پیام</th>
                                <th scope="col">وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($sms_tbl)):
                            foreach ($sms_tbl as $sms):
                            $author = $query->find('admin_tbl','phone',$sms->author);
                            ?>
                            <tr>
                                <td><?php echo $author->name.' '.$author->family ?></td>
                                <td>
                                    از سر شماره: <?php echo $sms->sender ?>
                                    <br>
                                    به شماره:<?php echo $sms->receiver ?>
                                </td>
                                <td><?php echo $sms->date ?></td>
                                <td><?php echo $sms->text ?></td>
                                <td><p class="label label-success">بررسی شد</p></td>
                            </tr>
                            <?php
                            endforeach;
                            endif;
                            ?>
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




