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
                            <h3 class="box-title">ثبت نام شرکت کننده</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
						<?php if (isset($reg_info_participant)): ?>
						<form role="form" method="post" action="<?php echo $this->url('user/reg_info_participant/'.$reg_info_participant->id); ?>" >
						<?php else: ?>
                        <form role="form" method="post" action="<?php echo $this->url('user/register_client'); ?>" >
						<?php endif; ?>
                            <div class="box-body">
							<?php if(isset($_COOKIE["edit"])): ?>
                                <div id="username_err" class="alert alert-success" role="alert" style="display:block;">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
</svg>
                                    ویرایش اطلاعات کاربر احراز شده با موفقیت انجام پذیرفت !!
                                </div>
								<?php endif; ?>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail0">نام</label>
                                    <input type="text" class="form-control" id="exampleInputEmail0" name="info[name]"  value="<?php if (isset($reg_info_participant)){echo $reg_info_participant->name;}?>" placeholder="نام">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">نام خانوادگی</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="info[family]" value="<?php if (isset($reg_info_participant)){echo $reg_info_participant->family;}?>" placeholder="نام خانوادگی ">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword2">تلفن تماس </label>
                                    <input type="text" class="form-control" id="exampleInputPassword2" name="info[phone]" value="<?php if (isset($reg_info_participant)){echo $reg_info_participant->phone;}?>" placeholder="تلفن تماس">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword4">رمز عبور</label><br>
                                    <span class="form-control alert-warning"> توجه : درحالت ویرایش ، درصورت خالی بودن فیلد رمز عبور همان رمز قبلی جایگزین خواهد شد.</span>
                                    <input type="password" class="form-control" id="exampleInputPassword4"  name="info[password]" placeholder="رمز عبور جدید را وارد نمایید">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword5">آدرس ایمیل</label>
                                    <input type="email" class="form-control" id="exampleInputPassword5" value="<?php if (isset($reg_info_participant)){echo $reg_info_participant->email;}?>" name="info[email]" placeholder="آدرس ایمیل">
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer" style="direction: ltr">
                                <?php if (isset($reg_info_participant)) : ?>
                                <button type="submit" name="edit_info" class="btn btn-primary">ویرایش اطلاعات</button>
                                <?php else: ?>
                                <button type="submit" name="send" class="btn btn-primary">ارسال</button>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">لیست شرکت کنندگان</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">نام و نام خانوادگی</th>
                                    <th scope="col">نقش در سیستم</th>
                                    <th scope="col">راه های ارتباطی</th>
                                    <th scope="col">سمت در سیستم</th>
                                    <th scope="col">وضعیت در سیستم</th>
                                    <th scope="col">وضعیت</th>
                                </tr>

                                </thead>
                                <tbody>
                                <?php
                                if (isset($list_info)):
                                    foreach ($list_info as $key => $val):
                                        $id = $val->id;
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1 ?></th>
                                    <td><?php echo $val->name." ".$val->family ?></td>
                                    <td>کاربراحرازشده</td>
                                    <td>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="true">اطلاعات تماس
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a><?php echo $val->phone ?></a></li>
                                                <li><a><?php echo $val->email ?></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <?php
                                        if ($val->role == 'participant'){
                                            echo "شرکت کننده";
                                        }
                                        else{
                                            echo "برگزار کننده";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($val->status == 'on'): ?>
                                        <p class="btn btn-success form-control">فعال است</p>
                                        <?php else: ?>
                                        <p class="btn btn-danger form-control"> غیرفعال است</p>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php $this->url('user/show_info_participant/'."$val->id") ?>" target="_blank">مشاهده اطلاعات</a></li>
                                                <li><a href="<?php $this->url('user/edit_info_participant/'."$val->id") ?>">ویرایش اطلاعات</a></li>
												<?php if ($val->role == 'participant'): ?>
                                                <li><a href="<?php $this->url('user/reg_info_organizer_id/'."$val->id") ?>">ارتقا به برگزار کننده</a></li>
												<?php endif; ?>
                                                <?php if ($val->status == 'on'): ?>
                                                <li><a href="<?php $this->url('user/edit_status/'."$val->id") ?>">معلق سازی کاربر</a></li>
                                                <?php else: ?>
                                                <li><a href="<?php $this->url('user/edit_status/'."$val->id") ?>">فعال سازی کاربر</a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
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
