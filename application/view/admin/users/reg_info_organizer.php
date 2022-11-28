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
                            <h3 class="box-title">ثبت اطلاعات برگزار کننده</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail0">نام</label>
                                    <input type="text" class="form-control" id="exampleInputEmail0" <?php if (isset($res)): ?> value="<?php  echo $res->name; ?>" <?php echo 'readonly'  ?> <?php endif; ?> placeholder="نام">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">نام خانوادگی</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" <?php if (isset($res)): ?> value="<?php echo $res->family; ?>" <?php echo 'readonly' ?> <?php endif; ?>  placeholder="نام خانوادگی ">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword2">تلفن تماس </label>
                                    <input type="text" class="form-control" id="exampleInputPassword2" <?php if (isset($res)): ?> value="<?php echo $res->phone; ?>" <?php echo 'readonly' ?> <?php endif; ?> name="info_user[phone]" placeholder="تلفن تماس">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword3">آخرین وضعیت در سیستم</label>
                                    <input type="text" class="form-control" id="exampleInputPassword3" <?php if (isset($res)): ?> value="<?php echo $res->role; ?>" <?php echo 'readonly' ?> <?php endif; ?> placeholder="نام کاربری">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword4">آدرس ایمیل</label>
                                    <input type="email" class="form-control" id="exampleInputPassword4" <?php if (isset($res)): ?> value="<?php echo $res->email; ?>"  <?php endif; ?> name="info_user[email]" placeholder="آدرس ایمیل">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword7">کدملی</label>
                                    <input type="number" class="form-control" id="exampleInputPassword7" name="info_user[mellicode]" placeholder="کدملی">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword8">تاریخ تولد</label>
                                    <input type="text" class="form-control" id="exampleInputPassword8" name="info_user[birthday]" placeholder="تاریخ تولد">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword9">مقطع تحصیلی</label>
                                    <select class="form-control" id="exampleInputPassword9" name="info_user[degree]">
                                        <option selected disabled>مقطع تحصیلی</option>
                                        <option value="کاردانی">کاردانی </option>
                                        <option value="کارشناسی">کارشناسی</option>
                                        <option value="کارشناسی ارشد">کارشناسی ارشد</option>
                                        <option value="دکتری">دکتری</option>
                                        <option value="سایر مقاطع">سایر مقاطع</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword10">رشته تحصیلی</label>
                                    <input type="text" class="form-control" id="exampleInputPassword10" name="info_user[field]" placeholder="رشته تحصیلی">
                                </div>

<!--                                <div class="form-group col-md-4">
                                    <label for="state">استان</label>
                                    <select class="form-control" id="state" name="info[state]" aria-label="select example">
                                        <option selected disabled> استان</option>
                                        <?php
/*                                        if (isset($provinces)):
                                            foreach ($provinces as $province):
                                                */?>
                                        <option value="<?php /*echo $province->id; */?>"><?php /*echo $province->name; */?></option>
                                        <?php /*endforeach; */?>
                                        <?php /*endif; */?>
                                    </select>
                                </div>-->

<!--                                <div class="form-group col-md-4">
                                    <label for="city">شهرستان</label>
                                    <select class="form-control" id="city" name="info[city]" aria-label="select example">
                                        <option selected disabled> شهرستان</option>
                                    </select>
                                </div>-->

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword5">تصویر فرد</label>
                                    <input type="file" class="form-control" id="exampleInputPassword5" name="img_user" placeholder="تصویر فرد">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword6">آپلود رزومه</label>
                                    <input type="file" class="form-control" id="exampleInputPassword6" name="cv_user" placeholder="آپلود رزومه">
                                </div>

                                <div class=" col-md-12 ">
                                    <label>شرح بیوگرافی</label>
                                    <div class="box-body pad">
                                        <textarea id="mytextarea" rows="15" class="form-control" name="info_user[biography]" placeholder="توضیحات مربوط به دسته بندی خود را وارد کنید"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer " style="direction: initial">
                                <button type="submit" name="submit_info_user" class="btn btn-primary" >ارسال</button>
                            </div>
                        </form>
                    </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">لیست برگزار کنندگان</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ردیف</th>
                                <th scope="col">نام و نام خانوادگی</th>
                                <th scope="col">کدملی</th>
                                <th scope="col">وضعیت سیستمی</th>
                                <th scope="col">تلفن تماس</th>
                                <th scope="col">وضعیت در سیستم</th>
                                <th scope="col">وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php
                                foreach ($info_user_organizers as $key => $info_user_organizer) :
                        ?>
                            <tr>
                                <th scope="row"><?php echo $key+1 ?></th>
                                <td><?php echo $info_user_organizer->name ." ".$info_user_organizer->family?></td>
                                <td><?php echo $info_user_organizer->mellicode ?></td>
                                <td><?php echo $info_user_organizer->role ?></td>
                                <td><?php echo $info_user_organizer->phone ?></td>
                                <td><p class="label label-danger"><?php switch ($info_user_organizer->status) {case 'on': echo 'فعال' ; break; case 'off': echo 'غیرفعال'; break;}?></p></td>
                                <td>
                                    <a href="<?php $this->url('user/cv_lecture') ?>" class="btn btn-primary">مشاهده سوابق</a>
                                </td>
                            </tr>
                            <?php
                                endforeach;
                            ?>
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
