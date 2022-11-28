
<div class="card my-5">
    <div class="card-header">
        <h6 class="mt-2 font-14 text-center">ارتقا به برگزار کننده </h6>
    </div>
    <?php
    use application\model\User as UserModel;
    $serach_info = new UserModel();
    $phone = $_SESSION['login_user'];
    $info_user = $serach_info->find('users_tbl','phone',$phone);
    if ($info_user->mellicode !== ""){
    ?>
    <br>
    <br>
    <hr>
    <div class="alert alert-info d-flex align-items-center" style="margin: auto;width: 20cm;" role="alert">
        <svg class="bi flex-shrink-0 me-2"  width="15" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            کاربر گرامی :<br><hr><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"></path>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
            </svg><span style="margin-right: 8px">شما اطلاعات تکمیلی خود را ارسال نموده اید.</span><br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-checks-grid"  viewBox="0 0 16 16">
                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"></path>
            </svg><span style="margin-right: 8px">درحال حاضر صرفا جهت ویرایش اطلاعات ثبت شده می توانید اقدام کنید.</span>
        </div>
    </div>
    <hr>
    <?php } ?>
    <div class="card-body">
        <div class="card text-right my-3">
            <div class="card-header bg-primary text-center pb-0 text-white">
                <p class="font-13">فرم ارتقا به برگزار کننده : </p>
            </div>
            <div class="card-body">
                <form action="<?php $this->url('user/update_info_user/'.$side='client') ?>" enctype="multipart/form-data" method="post">

                    <div class="form-group">
                        <label for="01">  کد ملی <span style="color:red;">*</span></label>  <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg>  توجه : پس از ثبت اطلاعات تغییر کدملی امکان پذیر نیست.</small></span>
                        <input id="11" type="text" class="form-control" name="info_user[mellicode]" value="<?php echo $info_user->mellicode; ?>" placeholder="لطفا کد ملی خود را وارد کنید" <?php if ($info_user->mellicode !== "") echo 'readonly'?> required>
                    </div>

                    <div class="form-group">
                        <label for="01">تاریح تولد<span style="color:red;">*</span><small>لطفا تاریخ تولد خود را مطابق الگو وارد نمایید</small></label>
                        <input id="11" type="text" class="form-control" name="info_user[birthday]" value="<?php echo $info_user->birthday; ?>" placeholder="انتخاب تاریخ تولد" value="1400/10/12" required>
                    </div>

                    <div class="form-group">
                        <label for="00">مقطع تحصیلی<span style="color:red;">*</span></label>
                        <select class="form-control" id="00" name="info_user[degree]" style="font-size: 12px;" required>
                            <option selected disabled>مقطع تحصیلی</option>
                            <option <?php if ($info_user->degree == 'کاردانی') echo 'selected'?>value="کاردانی">کاردانی </option>
                            <option <?php if ($info_user->degree == 'کارشناسی') echo 'selected'?> value="کارشناسی">کارشناسی</option>
                            <option <?php if ($info_user->degree == 'کارشناسی ارشد') echo 'selected'?> value="کارشناسی ارشد">کارشناسی ارشد</option>
                            <option <?php if ($info_user->degree == 'دکتری') echo 'selected'?> value="دکتری">دکتری</option>
                            <option <?php if ($info_user->degree == 'سایر مقاطع') echo 'selected'?> value="سایر مقاطع">سایر مقاطع</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="01">رشته تحصیلی<span style="color:red;">*</span></label>
                        <input id="01" type="text" class="form-control" name="info_user[field]" value="<?php echo $info_user->field; ?>" placeholder="لطفا رشته تحصیلی خود را وارد کنید" required>
                    </div>

                    <div class="form-group">
                        <label for="02">بیوگرافی<span style="color:red;">*</span></label>
                        <textarea id="02" class="form-control" name="info_user[biography]" placeholder="لطفا بیوگرافی خود را وارد کنید" required><?php echo $info_user->biography; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="05">آدرس ایمیل<span style="color:red;">*</span></label>
                        <input id="05" type="email" class="form-control" name="info_user[email]" value="<?php echo $info_user->email; ?>" placeholder="آدرس ایمیل خود را وارد کنید" required>
                    </div>

                    <div class="custom-file my-2">
                        <input type="file" name="img_user" class="custom-file-input" id="03" required>
                        <label class="custom-file-label" for="03">تصویر پروفایل<span style="color:red;">*</span></label>
                    </div>

                    <div class="custom-file my-2">
                        <input type="file"  name="cv_user" class="custom-file-input" id="04" required>
                        <label class="custom-file-label" for="04">رزومه خود را آپلود کنید<span style="color:red;">*</span></label>
                    </div>
                    <?php if ($info_user->mellicode !=="") {?>
                    <div class="form-group">
                        <label for="05">فایل های آپلود شده شما</label><hr>
                        <a class="btn btn-primary" href="<?php $this->url($info_user->img) ?>" target="_blank">تصویر پروفایل ارسال شده</a>
                        <a class="btn btn-success" href="<?php $this->url($info_user->cv) ?>" target="_blank">فایل رزومه ارسال شده</a>
                    </div>
                    <?php  }?>
                    <div class="form-group">
                        <button type="submit" name="submit_info_user" class="btn btn-primary btn-block my-4 font-13">  <?php if ($info_user->mellicode !=="") {echo 'ویرایش اطلاعات تکمیلی';} else {echo 'ثبت اطلاعات تکمیلی';}?></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

