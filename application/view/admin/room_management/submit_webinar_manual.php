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
                        <h3 class="box-title">ثبت دستی اتاق رویداد آنلاین</h3>
                    </div>
                    <form class="form-group" method="post" action="">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword0">انتخاب اتاق آنلاین:</label>
                                    <select class="form-control" id="exampleInputPassword2" name="room" aria-label="select example">
                                        <option selected disabled>انتخاب اتاق آنلاین در سامانه برتا</option>
                                        <?php
                                        foreach ($info_null_skyroom_id_webinar as $value) :?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->title." | تاریخ ثبت :".$value->date_submit."| سطح رویداد :  ".$value->level."| هزینه رویداد ".$value->price."تومان"."---شناسه اسکای روم اختصاص داده نشده"; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="" style="direction: ltr">
                                    <input type="submit" name="submit" class="btn btn-primary" value="ثبت دستی اتاق">
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">لیست ثبت دستی اتاق آنلاین</h3>
                    </div>
                    <div class="box-body">
                        <div class="box-body no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr class="form-group">
                                    <th scope="col"><button class="form-control">ردیف</button></th>
                                    <th scope="col"><button class="form-control">عنوان رویداد</button></button></th>
                                    <th scope="col"><button class="form-control">شناسه احراز اسکای روم</button></th>
                                    <th scope="col"><button class="form-control">ایجاد کننده</button></th>
                                    <th scope="col"><button class="form-control">وضعیت</button></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($info_status_manual_assign as $key=>$webinar):
                                ?>
                                <tr>
                                    <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                    <th scope="row"><button class="form-control btn btn-soundcloud"><?php echo $webinar->title;?></button></th>
                                    <th scope="row"><button class="form-control btn btn-dropbox"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"></path>
                                            </svg> <?php echo $webinar->skyroom_id;?></button></th>
                                    <th scope="row"><button class="form-control btn btn-facebook "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                            </svg>  مهدی نوبهاری</button></th>
                                    <th scope="row"><button class="form-control btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"></path>
                                            </svg>  شناسه فعال شد</button></th>
                                </tr>
                                <?php endforeach; ?>
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




