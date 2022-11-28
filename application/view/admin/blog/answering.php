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
                        <h3 class="box-title">انتشار محتوای جدید</h3>
                    </div>
                    <form method="post" action="">
                    <div class="row" style="padding: 1%;">
                        <div class="col-md-12">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="1">متن پیام</label>
                                <textarea id="1" class="form-control" rows="17" readonly><?php if (isset($message_tbl)){ echo $message_tbl->text; } ?></textarea>
                            </div>
                        </div>
                                <div class="col-md-5 margin-bottom">
                                    <label for="2">ارسال پاسخ:</label>
                                    <textarea  rows="17" id="2"  class="form-control" name="text"></textarea>
                                </div>
                        <div class="col-md-4">
                            <div class="box box-primary" style="box-shadow: 0px 0px 20px -10px black;">
                                <div class="box-header with-border">
                                    <h3 class="box-title">درباره پیام </h3>
                                </div>
                                <div class="box-body">
                                    <strong>نام و نام خانوادگی ارسال کننده:</strong>
                                    <p class="text-muted"><?php if (isset($users_tbl)){echo $users_tbl->name.' '.$users_tbl->family; } ?></p>
                                    <strong>نقش در سیستم:</strong>
                                    <?php
                                    if (isset($users_tbl)):
                                    if ($users_tbl->role == 'participant'):
                                        ?>
                                    <p class="text-muted">شرکت کننده</p>
                                    <?php endif; ?>
                                    <?php if ($users_tbl->role == 'organizer'):?>
                                        <p class="text-muted">برگزار کننده </p>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <strong>تلفن تماس و ایمیل:</strong>
                                    <p class="text-muted"><?php if (isset($users_tbl)){echo $users_tbl->phone;} ?></p>
                                    <p class="text-muted"><?php if (isset($users_tbl)){echo $users_tbl->email;} ?></p>
                                    <strong>تاریخ و زمان ارسال:</strong>
                                    <p class="text-muted"><?php if (isset($message_tbl)){echo $message_tbl->date;} ?></p>
                                    <hr>
                                    <button class="btn btn-primary form-control" name="" type="submit">ثبت پاسخ</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </form>

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




