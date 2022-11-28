<?php $this->include('admin.layouts.header'); ?>
<!-- Content Wrapper. Contains page content -->
<?php
if ($_SESSION['adminbertapanel']) :
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row" style="margin-top: 3%;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">اطلاعات درخواست دهنده</h3>
                    </div>
                    <div class="card mb-3">
                        <div class="col-md-2">
                            <!--todo image user-->
                            <img src="<?php if (isset($info_user_organizer)){echo '../../../'.$info_user_organizer->img;} ?>" class="rounded mx-auto d-block" alt="..." style="width: 100%; height:auto">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail0">نام:</label>
                                    <span class="form-control" id="exampleInputEmail0" disabled=""><?php if (isset($info_user_organizer)){echo $info_user_organizer->name;} ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">نام خانوادگی:</label>
                                    <span class="form-control" id="exampleInputEmail1" disabled=""><?php if (isset($info_user_organizer)){echo $info_user_organizer->family;} ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail2">کدملی:</label>
                                    <span class="form-control" id="exampleInputEmail2" disabled=""><?php if (isset($info_user_organizer)){echo $info_user_organizer->mellicode	;} ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail5">مدرک تحصیلی:</label>
                                    <span class="form-control" id="exampleInputEmail5" disabled=""><?php if (isset($info_user_organizer)){echo $info_user_organizer->degree	;} ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail5">رشته تحصیلی:</label>
                                    <span class="form-control" id="exampleInputEmail5" disabled=""><?php if (isset($info_user_organizer)){echo $info_user_organizer->field	;} ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail3">تلفن تماس:</label>
                                    <span class="form-control" id="exampleInputEmail3" disabled=""><?php if (isset($info_user_organizer)){echo $info_user_organizer->phone	;} ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail3">آدرس ایمیل :</label>
                                    <span class="form-control" id="exampleInputEmail3" disabled=""><?php if (isset($info_user_organizer)){echo $info_user_organizer->email	;} ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="col-md-2"></div>
                            <div class="box-group col-md-10" id="accordion">
                                <div class="panel box box-primary">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="false" class="collapsed">
                                                مشاهده بیوگرافی برگزارکننده
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="box-body">
                                            <?php if (isset($info_user_organizer)){echo $info_user_organizer->biography	;} ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($info_webinar->organizer !=='no'): ?>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">اطلاعات برگزارکننده دوره</h3>
                        </div>
                        <div class="card mb-3">
                            <div class="col-md-2">
                                <!--todo image user-->
                                <img src="<?php if (isset($info_webinar)){echo '../../../'.$info_webinar->pic_organizer; } ?>" class="rounded mx-auto d-block" alt="..." style="width: 100%; height:auto">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail0">نام برگزار کننده:</label>
                                        <span class="form-control" id="exampleInputEmail0" disabled=""><?php if (isset($info_webinar)){echo $info_webinar->teacher;} ?></span>
                                    </div>

                                </div>
                            </div>
                            <div class="box-body">
                                <div class="col-md-2"></div>
                                <div class="box-group col-md-10" id="accordion">
                                    <div class="panel box box-primary">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne15" aria-expanded="false" class="collapsed">
                                                    مشاهده بیوگرافی برگزارکننده
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne15" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="box-body">
                                                <?php if (isset($info_webinar)){echo $info_webinar->about_organizer;} ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($info_webinar->teacher !=='no'): ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">اطلاعات مدرس دوره</h3>
                    </div>
                    <div class="card mb-3">
                        <div class="col-md-2">
                            <!--todo image user-->
                            <img src="<?php if (isset($info_webinar)){echo '../../../'.$info_webinar->pic_teacher; } ?>" class="rounded mx-auto d-block" alt="..." style="width: 100%; height:auto">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail0">نام و نام خانوادگی مدرس:</label>
                                    <span class="form-control" id="exampleInputEmail0" disabled=""><?php if (isset($info_webinar)){echo $info_webinar->teacher;} ?></span>
                                </div>

                            </div>
                        </div>
                        <div class="box-body">
                            <div class="col-md-2"></div>
                            <div class="box-group col-md-10" id="accordion">
                                <div class="panel box box-primary">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne12" aria-expanded="false" class="collapsed">
مشاهده بیوگرافی مدرس دوره
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne12" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="box-body">
                                            <?php if (isset($info_webinar)){echo $info_webinar->about_teacher;} ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">اطلاعات وبینار | درخواست رویداد 
					<?php 
						switch($info_webinar->type){
							case 0 :
							echo '<a href="" class="btn btn-primary"> آنلاین</a>';
							break;
							case 1 :
							echo '<a href="" class="btn btn-warning"> حضوری</a>';
							break;
							case 2 :
							echo '<a href="" class="btn btn-primary">آنلاین</a>';
							break;
							case 3 :
							echo '<a href="" class="btn btn-warning">حضوری</a>';
							break;
						}
						
						 ?>
						 
					<?php
										
						switch($info_webinar->type){
							case 0 :
							echo '<a href="" class="btn btn-foursquare">عمومی</a>';
							break;
							case 1 :
							echo '<a href="" class="btn btn-foursquare">عمومی</a>';
							break;
							case 2 :
							echo '<a href="" class="btn btn-warning">خصوصی</a>';
							break;
							case 3 :
							echo '<a href="" class="btn btn-warning">خصوصی</a>';
							break;
						}
						
						 ?>
						 </h3>
					<?php
					if($info_webinar->type == 0 or $info_webinar->type == 2):
					$info_reg_webinars_user = new \application\model\Transaction();
        			$info_reg_webinars_users = $info_reg_webinars_user->check_peyment('transaction_tbl', $info_webinar->id ,$info_user_organizer->phone , '250000');
					if($info_reg_webinars_users):
					?>
					<a href="" class="btn btn-success">پرداخت موفق سرویس در تاریخ <?php echo $info_reg_webinars_users->date_orginal; ?> به شماره پرداخت <?php echo  $info_reg_webinars_users->order_id; ?></a>
					<?php
					else:
					 ?>
					 <a href="" class="btn btn-danger">عدم پرداخت حق الزحمه سرویس سامانه</a>
					<?php endif; ?>
					<?php endif; ?>
					<?php
					$info_reg_webinars_organizer = new \application\model\Transaction();
					$info_reg_webinars_organizer = $info_reg_webinars_organizer->check_peyment('transaction_tbl', $info_webinar->id ,$info_user_organizer->phone , '500000');
					if($info_reg_webinars_organizer):
					?>
					<a href="" class="btn btn-success">پرداخت موفق  بابت صدور گواهینامه رسمی در تاریخ <?php echo $info_reg_webinars_organizer->date_orginal; ?> به شماره پرداخت <?php echo  $info_reg_webinars_organizer->order_id; ?> </a>
					<?php
					else:
					 ?>
					 <a href="" class="btn btn-danger">عدم پرداخت هزینه صدور گواهینامه رسمی</a>
					<?php endif; ?>
					                    </div>

                    <div class="card mb-3">
                        <div class="row g-0">
                            <form method="post" enctype="multipart/form-data" action="">
                            <div class="col-md-12">
                            <div class="col-md-9" style="padding: 2%;">
                                <div class="card-body">

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail00">عنوان دوره:</label>
                                        <input type="text" name="info[title]" class="form-control" id="exampleInputEmail00"  value="<?php if (isset($info_webinar)){echo $info_webinar->title; } ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail01">سطح دوره:</label>
                                        <input type="text" name="info[level]" class="form-control" id="exampleInputEmail01" value="<?php if (isset($info_webinar)){echo $info_webinar->	level; } ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail02">مبلغ پیشنهادی :</label>
                                        <input type="text" name="info[price]" class="form-control" id="exampleInputEmail02" value="<?php if (isset($info_webinar)){echo $info_webinar->price; } ?>">
                                    </div>
                                    <?php if (isset($info_webinar)):
                                    $headlines = explode(',',$info_webinar->headlines);
                                    foreach ($headlines as $key => $headline):
                                        $key_plus_1 = $key + 1;
                                    ?>
                                    <div class="form-group col-md-3">
                                        <label for="<?php echo 'exampleInputEmail03'.$key_plus_1?>"><?php echo 'سرفصل'.' '.$key_plus_1.':'?></label>
                                        <input type="text" name="headlines[]" class="form-control" id="<?php echo 'exampleInputEmail03'.$key_plus_1?>" value="<?php echo $headline?>">
                                    </div>
                                    <?php
                                    endforeach;
                                    endif;
                                    ?>
                                    <div class="form-group col-md-12"></div>
                                    <div class="form-group col-md-6">
                                        <label>تاریخ برگزاری جلسات :</label>
                                        <?php
                                        if (isset($info_webinar)):
                                        $dates = explode(',',$info_webinar->date);
                                        foreach ($dates as $key_date => $date):
                                            $key_date_plus_1 = $key_date + 1;
                                        ?>
                                        <div class="input-group date">
                                            <div class="input-group-addon"><i class=""></i><?php echo 'جلسه'.' '.$key_date_plus_1;?></div>
                                            <input type="text" name="date[]" class="form-control pull-right" value="<?php echo $date?>">
                                        </div>
                                        <?php
                                        endforeach;
                                        endif;
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>ساعت برگزاری جلسات :</label>
                                        <?php
                                        if (isset($info_webinar)):
                                        $times = explode(',',$info_webinar->time);
                                        foreach ($times as $key_time => $time):
                                            $key_time_plus_1 = $key_time +1 ;
                                        ?>
                                        <div class="input-group date">
                                            <div class="input-group-addon"><i class=""></i><?php echo 'جلسه'.' '.$key_time_plus_1 ?></div>
                                            <input type="text" name="time[]" class="form-control pull-right" value="<?php echo $time ?>">
                                        </div>
                                        <?php
                                        endforeach;
                                        endif;
                                        ?>
                                    </div>
                                    <div class="box-group col-md-12" id="accordion" style="margin-top: 4%;">
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne11" aria-expanded="false" class="collapsed">
                                                        توضیحات و تصاویر وبینار
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne11" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="box-body">
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputEmail04">توضیحات  وبینار:</label>
                                                        <textarea id="open-source-plugins" name="info[description]" rows="27" class="form-control"><?php if (isset($info_webinar)){echo $info_webinar->	description; } ?></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12"></div>
                                                    <div class="form-group col-md-6">
                                                        <div class="box box-default">
                                                            <div class="box-header with-border">
                                                                <h3 class="box-title">تصویر اول وبینار</h3>
                                                            </div>
                                                            <div class="box-body">
                                                                <img src="<?php if (isset($info_webinar)){echo '../../../'.$info_webinar->pics_one; } ?>" class="img-fluid rounded-start mb-4" alt="..." style="width: 100%;max-width: 100%;height: 210px;margin-bottom: 5%;">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail05">ویرایش تصویر اول</label>
                                                                    <input type="file" class="form-control" id="exampleInputEmail05" name="pics_one">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <div class="box box-default">
                                                            <div class="box-header with-border">
                                                                <h3 class="box-title">تصویر دوم وبینار</h3>
                                                            </div>
                                                            <div class="box-body">
                                                                <img src="<?php if (isset($info_webinar)){echo '../../../'.$info_webinar->pic_two; } ?>" class="img-fluid rounded-start mb-4" alt="..." style="width: 100%;max-width: 100%;height: 210px;margin-bottom: 5%;">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail06">ویرایش تصویر دوم</label>
                                                                    <input type="file" class="form-control" id="exampleInputEmail06" name="pics_two">
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
                            <div class="col-md-3" style="padding: 2%;">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">عملیات</h3>
                                    </div>
                                    <div class="box-body">
                                        <?php if (isset($category)): ?>
                                            <h5 class="box-title"><strong>دسته بندی ها :</strong></h5>
                                            <?php foreach ($category as $key=>$category_webinar ): ?>
											<?php if($key<5): ?>
                                        <div class="checkbox">
                                            <label style="font-size: 12px;"><input type="checkbox" name="category[]" value="<?php echo $category_webinar->id ?>" <?php if (isset($info_webinar)){if (strpos($info_webinar->category, $category_webinar->id) !==false) echo 'checked' ;}  ?>><?php echo $category_webinar->title ?></label>
                                        </div>									
                                        <?php
										endif;
                                        endforeach;
                                        endif;
                                        ?>
										<?php if(isset($category)): ?>	
											<div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne0" aria-expanded="false" class="collapsed btn btn-danger">
                                                        مشاهده بیشتر +
                                                    </a>
                                                </h4>
                                            </div>
                                        <div id="collapseOne0" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">	
										<?php foreach ($category as $key=>$category_webinar ): ?>
										<?php if($key>=5): ?>
                                        <div class="checkbox">
                                            <label style="font-size: 12px;"><input type="checkbox" name="category[]" value="<?php echo $category_webinar->id ?>" <?php if (isset($info_webinar)){if (strpos($info_webinar->category, $category_webinar->id) !==false) echo 'checked' ;}  ?>><?php echo $category_webinar->title ?></label>
                                        </div>											
										
										<?php endif; ?>	
										<?php endforeach; ?>
										<?php endif; ?>
										</div>
                                        <hr>
                                        <h5 class="box-title"><strong>وضعیت وبینار:</strong></h5>
                                        <div class="radio">
                                            <label><input type="radio" name="status[]" id="optionsRadios2" value="0" <?php if (isset($info_webinar)){if (strpos($info_webinar->final_status , '0') !==false) echo 'checked' ;} ?>>در حال بررسی</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="status[]" id="optionsRadios2" value="1" <?php if (isset($info_webinar)){if (strpos($info_webinar->final_status , '1') !==false) echo 'checked' ;} ?>>تایید وبینار</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="status[]" id="optionsRadios2" value="2" <?php if (isset($info_webinar)){if (strpos($info_webinar->final_status , '2') !==false) echo 'checked' ;} ?>>بایگانی وبینار</label>
                                        </div>
										<div class="radio">
                                        <label><input type="radio" name="status[]" id="optionsRadios2" value="3" <?php if (isset($info_webinar)){if (strpos($info_webinar->final_status , '3') !==false) echo 'checked' ;} ?>>وبینار برگزارشده</label>
                                        </div>
                                        <hr>
                                        <h5 class="box-title"><strong>دسته بندی های خود را انتخاب کنید</strong></h5>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="operations[]" value="online_room" <?php if (isset($info_webinar)){if (strpos($info_webinar->operations , 'online_room') !==false) echo 'checked' ;} ?> >امکان فعال سازی اتاق آنلاین</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="operations[]" value="create_an_account" <?php if (isset($info_webinar)){if (strpos($info_webinar->operations , 'create_an_account') !==false) echo 'checked' ;} ?>>امکان ایجاد حساب کاربری آنلاین</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="operations[]" value="payment_gateway" <?php if (isset($info_webinar)){if (strpos($info_webinar->operations , 'payment_gateway') !==false) echo 'checked' ;} ?>>امکان ایجاد درگاه پرداخت آنلاین</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="operations[]" value="view_website" <?php if (isset($info_webinar)){if (strpos($info_webinar->operations , 'view_website') !==false) echo 'checked' ;} ?>>امکان نمایش در وب سایت</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="operations[]" value="upcoming_webinars" <?php if (isset($info_webinar)){if (strpos($info_webinar->operations , 'upcoming_webinars') !==false) echo 'checked' ;} ?>>انتقال به وبینار های آینده</label>
                                            </div>
                                        </div>

										<hr>
                                        <h5 class="box-title"><strong>وضعیت صدور گواهینامه:</strong></h5>
                                        <div class="radio">
                                                <label><input type="radio" name="status_meetingroom[]" value="1" <?php if (isset($info_webinar)){if (strpos($info_webinar->status_meetingroom , '1') !==false) echo 'checked' ;} ?>>ارائه گواهینامه برگزارکننده</label>
                                        </div>
                                        <div class="radio">
                                                <label><input type="radio" name="status_meetingroom[]" value="2" <?php if (isset($info_webinar)){if (strpos($info_webinar->status_meetingroom , '2') !==false) echo 'checked' ;} ?>>ارائه گواهینامه شرکت کننده</label>
                                        </div>
										<div class="radio">
                                                <label><input type="radio" name="status_meetingroom[]" value="3" <?php if (isset($info_webinar)){if (strpos($info_webinar->status_meetingroom , '3') !==false) echo 'checked' ;} ?>>ارائه گواهینامه برگزارکننده و شرکت کننده</label>
                                        </div>
										<div class="radio">
                                                <label><input type="radio" name="status_meetingroom[]" value="4" <?php if (isset($info_webinar)){if (strpos($info_webinar->status_meetingroom , '4') !==false) echo 'checked' ;} ?>>عدم صدور گواهینامه</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="form-control btn btn-primary">ثبت و ویرایش اطلاعات وبینار</button>
                            </div>
                            </div>
                            </form>
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


