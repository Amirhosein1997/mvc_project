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
                        <div class="box-header with-border" style="text-align: center!important;">
                            <h3 class="box-title btn btn-facebook">لیست کاربران استفاده کننده از کد تخفیف  <button class="btn btn-primary"><?php echo $code; ?></button></h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">نام و نام خانوادگی</button></button></th>
                                        <th scope="col"><button class="form-control">کد تخفیف</button></th>
                                        <th scope="col"><button class="form-control">زمان استفاده</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($info_user)):
                                        foreach ($info_user as $key=>$info):
                                            ?>
                                            <tr>
                                                <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-soundcloud"><?php echo $info->fullname;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-dropbox"> <?php echo $info->code;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-facebook "><?php echo $info->date;?></button></th>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
									<?php if(count($info_user) == 0): ?>
									<div class="alert alert-danger" style="text-align:center!important">
									براساس آخرین اطلاعات دریافت شده از سامانه ، کاربری از کد تخفیف <button class="btn btn-primary"><?php echo $code; ?></button> استفاده ننموده است.
									</div>
									<?php endif;?>
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




