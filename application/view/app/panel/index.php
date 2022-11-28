<?php $this->include('app.layouts.header');
if (isset($_SESSION['login_user'])) :
?>

<div class="container">
    <?php
    if (isset($notification)):
        if ($notification == 'success_register'){
            ?>
            <div id="miladWorkShopAlert" class="mwsModal" style="margin-top: 121px;">
                <div class="mwsModal-content">
                    <div class="mwsModal-header">
                        <span class="close">&times;</span>
                        <h2 style="font-family:tahoma; font-size:12px; font-weight:bold;">پیام سامانه برتــا</h2>
                    </div>
                    <div class="mwsModal-body">
                        <p style="text-align:justify; direction:rtl; line-height:200%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check2-square" style="float: left!important;" viewBox="0 0 16 16">
                                <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                                <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                            </svg>
                            <b>کاربر گرامی :</b>
                            <br /><br />
                                    پرداخت شما  شما برای رویداد <?php echo $info_event." "?>باموفقیت انجام شد.
									<br />
									- چنانچه پرداخت شما جهت ثبت نام در رویداد مورد نظر بوده است ، می توانید با مراجعه به بخش "دوره هایی که ثبت نام کرده اید " نسبت به استفاده از خدمات رویداد اقدام کنید.
																		<br />

									- چنانچه پرداخت شما به عنوان برگزارکننده جهت تایید درخواست انتشار وبینار در سامانه بوده است ، پس از طی مراحل مربوطه آخرین وضعیت رویداد درخواستی در بخش " لیست درخواست برگزاری وبینار " قابل پیگیری خواهد بود.
                        </p>
                    </div>
                    <div class="mwsModal-footer">
                        <h3 style="font-family:tahoma; font-size:10px; font-weight:normal;">مرکز برگزاری رویدادهای <a href="https://eberta.ir" target="_blank" style="color:#FFFFFF; text-decoration:none;">سامانه برتا</a></h3>
                    </div>
                </div>
            </div>
        <?php };?>

		    <?php if ($notification == 'deny_seuccess') :?>
        <div id="miladWorkShopAlert" class="mwsModal" style="margin-top: 121px;">
            <div class="mwsModal-content">
                <div class="mwsModal-header">
                    <span class="close">&times;</span>
                    <h2 style="font-family:tahoma; font-size:12px; font-weight:bold;"> پیام سامانه برتــا - خطا در عملیات پرداخت</h2>
                </div>
                <div class="mwsModal-body">
                    <p style="text-align:justify; direction:rtl; line-height:200%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check2-square" style="float: left!important;" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                        </svg>
                        <b><?php echo $info_register->fullname." "."عزیز"; ?></b>
                        <br /><br />
                        ثبت نام شما در رویداد <?php echo $info_register->description." "?>ناموفق بود
                    </p>
                </div>
                <div class="mwsModal-footer">
                    <h3 style="font-family:tahoma; font-size:10px; font-weight:normal;">مرکز برگزاری رویدادهای <a href="https://eberta.ir" target="_blank" style="color:#FFFFFF; text-decoration:none;">سامانه برتا</a></h3>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php endif;?>

        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card bg-info my-5 p-5">
                    <img src="<?php if ($info_user->img !== "") {echo $this->asset('../'.$info_user->img);} else{ echo $this->asset('img/default_user.png');} ?>" class="img-fluid rounded-circle d-block mx-auto" style="box-shadow: rgb(209 236 241) 0px -12px 0px 20px, rgb(113 142 37 / 7%) -1px -12px 30px 14px, rgb(182 112 112 / 12%) -8px 20px 6px 7px, rgb(88 91 0 / 17%) 0px 12px 13px, rgb(48 46 46 / 9%) 0px -3px;" width="120px" height="120px" alt="user-image" >
                    <h5 class="text-white text-center mt-3"><span> <small>کاربر محترم :</small></span><br><br><?php echo $info_user->name." ".$info_user->family ?></h5>
                </div>
                <div class="text-right">
                    <div class="list-group p-0 mb-5 profile" >
                        <a href="#vaziyat" class="active list-group-item list-group-item-action font-14" data-toggle="list"> <i class="fa fa-cog align-middle ml-2" ></i>مرور وضعیت </a>
                        <a href="#dore-signup" class="list-group-item list-group-item-action" data-toggle="list"> <i class="fa fa-server  align-middle ml-2"></i>دوره هایی که ثبت نام کرده اید </a>
                        <a href="#user-change" class="list-group-item list-group-item-action" data-toggle="list"><i class="fa fa-user-circle align-middle ml-2"></i>ارتقا به برگزار کننده</a>
						<a href="#register_organizers" class="list-group-item list-group-item-action" data-toggle="list"><i class="fa fa-user-circle align-middle ml-2"></i>تعریف لیست برگزارکنندگان</a>
                        <a href="#request" class="list-group-item list-group-item-action" data-toggle="list"><i class="fa fa-address-card align-middle ml-2"></i>درخواست برگزاری رویداد</a>
						<a href="#meeting-room" class="list-group-item list-group-item-action " data-toggle="list"><i class="fa fa-users align-middle ml-2" ></i>درخواست اتاق جلسات</a>
                        <a href="#score" class="list-group-item list-group-item-action " data-toggle="list"><i class="fa fa-tags align-middle ml-2" ></i>گزارش وضعیت اتاق جلسات</a>
                        <a href="<?php $this->url('user/exit') ?>" class="list-group-item list-group-item-action"> <i class=" fa fa-window-close align-middle ml-2"></i> خروج</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-9">

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="vaziyat"><!----- Start vaziyat ----->
                        <div class="card my-5 pb-4 text-right">
                            <div class="card-header text-center">
                                <h6 class="mt-2"> مرور وضعیت </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <i class="p-3 text-light d-inline-block rounded bg-info" aria-hidden="true"><img src="<?php  echo $this->asset('img/course.png');?>"></i>
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0">
													<?php
															echo count($info_register_in_event)." "."دوره";												
													 ?>
													 </p>
                                                    <small> ثبت نام در رویداد های متفاوت داشته اید </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <i class="p-3 text-light d-inline-block rounded bg-info" aria-hidden="true"><img src="<?php  echo $this->asset('img/organizers.png');?>"></i>
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"> <?php
													echo count($count_organizer)." "."دوره";
													 ?> </p>
                                                    <small> به عنوان برگزارکننده حضور داشته اید </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <i class="p-3 text-light d-inline-block rounded bg-info" aria-hidden="true"><img src="<?php  echo $this->asset('img/investment.png');?>"></i>
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"> <?php 
										$sum_Price = 0;
                                        foreach ($info_register_in_event as $key=>$price_webinar) {
                                            $sum_Price = $price_webinar->price + $sum_Price;
                                        }
                                        echo $sum_Price." "."ریال";
													?> </p>
                                                    <small>  سرمایه گذاری برای افزایش مهارت داشته اید  </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <i class="p-3 text-light d-inline-block rounded bg-info" aria-hidden="true"><img src="<?php  echo $this->asset('img/request.png');?>"></i>
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"><?php echo count($count_organizer)." "."ارسال";?> </p>
                                                    <small>  درخواست فعال در سامانه برای شما وجود دارد  </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card mt-3">

                                            <div class="card-body bg-light">
                                                <p class="mb-2"> <i class="fa fa-bell align-middle"></i>  جدیدترین اعلان ها  </p>
																								<?php
		if($notification == 'success_register_meeting'):
	?>
	<div class="toast" data-autohide="false" style="direction:rtl">
    <div class="toast-header" style="direction: inherit;">
      <strong class="mr-auto text-primary" style="display: contents;">اعلان جدید</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" style="background-color: #17a2b8;color: white;">
      ثبت اتاق جلسه با موفقیت انجام شد
    </div>
  </div>
  <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card mt-3">
                                            <div class="card-body bg-light">
                                                <p class="my-4">لیست درخواست های برگزاری وبینار شما:</p>
										 <div class="card mb-3">
							<?php  
								$check_webinar = 0;
								$ongoing_webinar = 0;
								$held_webinar = 0;
								$archive_webinar = 0;
							     foreach ($find_info_webinars as $key=>$request) {
									if($request->final_status == '0'){
										$check_webinar = $check_webinar + 1;
									}
									if($request->final_status == '1'){
										$ongoing_webinar = $ongoing_webinar + 1;
									}
									if($request->final_status == '3'){
										$held_webinar = $held_webinar + 1;
									}
									if($request->final_status == '2'){
										$archive_webinar = $archive_webinar + 1;
									}
								 }

							?>
                    <div class="card-header bg-white px-0 course-table">
                        <ul class="nav nav-justified pr-0">
                            <li class="nav-item"><a href="#check_webinar" class="nav-link font-14" data-toggle="list">وبینارهای درحال بررسی 
							<span class="badge  badge-pill" style="background-color:#b81767 ; color: white;"><?php echo $check_webinar ?></span></a></li>
							<li class="nav-item"><a href="#ongoing_webinar" class="nav-link font-14" data-toggle="list">وبینارهای درحال برگزاری
							<span class="badge  badge-pill" style="background-color:#b81767 ; color: white;"><?php echo $ongoing_webinar ?></span></a></li>
                            <li class="nav-item"><a href="#held_webinar" class="nav-link font-14" data-toggle="list">وبینارهای برگزارشده
							<span class="badge  badge-pill" style="background-color:#b81767 ; color: white;"><?php echo $held_webinar ?></span></a></li>
                            <li class="nav-item"><a href="#archive_webinar" class="nav-link font-14" data-toggle="list">وبینارهای بایگانی شده
							<span class="badge  badge-pill" style="background-color:#b81767 ; color: white;"><?php echo $archive_webinar ?></span></a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane fade" id="check_webinar"><!-- Start check_webinar -->


											        <div class="table-responsive">
                                                    <div class="card-body">
                                                        <?php
                                                            foreach ($find_info_webinars as $key=>$request) :
															if($request->final_status == '0'):
                                                            ?>
                                                            <div class="card mb-3 pb-4 shadow-sm">

                                                                <div class="card-body d-md-flex">
                                                                    <img src="<?php $this->asset('../'.$request->pic_two) ?>" class="img-fluid float-lg-right mb-2" alt="html" style="width: 250px!important; height: 138.89px!important;">
                                                                    <div class="d-inline-block pr-3 text-justify my-course">
                                                                        <a href="<?php $this->url("app/course/".$request->id) ?>" class="mb-3 d-block text-center text-dark" target="_blank"><?php echo $request->title?></a>
                                                                        <small>
                                                                            <?php echo substr($request->description,0,300)?>
                                                                        </small>
                                                                        <div class="btn-row">
                                                                            <button class="btn btn-outline-success rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download<?php echo $key;?>">مشاهده جزئیات درخواست</button>
<!--                                                                            <a href="<?php /*$this->url("app/course/".$request->id) */?>" class="btn btn-outline-info rounded-pill float-left mt-3 font-12"target="_blank" >مشاهده اطلاعات دوره در سایت</a>
-->                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-5 collapse" id="download<?php echo $key;?>" >
                                                                    <div class="table-responsive ">
                                                                        <span class="font-14">دریافت اطلاعات متمرکز وبینار | سامانه برتـــا</span><hr>
                                                                        <table id="myTable" class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>عنوان وبینار</th>
                                                                                <th>درخواست کننده</th>
                                                                                <th>تاریخ درخواست</th>
                                                                                <th> تاریخ برگزاری</th>
                                                                                <th>تعداد جلسات</th>
                                                                                <th>هزینه موردتایید</th>
                                                                                <th>کارمزد</th>
                                                                                <th>وضعیت</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td><?php echo $request->title;?></td>
                                                                                <td><?php echo $info_user->name." ".$info_user->family;?></td>
                                                                                <td><?php echo $request->date_submit;?></td>
                                                                                <td>
                                                                                    <?php
                                                                                    if (strpos($request->date,',')) {
                                                                                        $date_webinar = explode(',', $request->date);
                                                                                        $time_webinar = explode(',', $request->time);
                                                                                        echo "از" . $date_webinar[0]."-".$time_webinar[0];
                                                                                    }
                                                                                    else{
                                                                                        echo $request->date."-".$request->time;
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php
                                                                                    if (strpos($request->date,',')){
                                                                                        $date_webinar = explode(',',$request->date);
                                                                                        echo count($date_webinar)."جلسه";
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td><?php echo $request->price." "."ریال";?></td>
                                                                                <td>3 درصد + 500 تومان به ازای هرثبت نام</td>
                                                                                <td>
                                                                                    <?php
                                                                                    switch ($request->final_status){
                                                                                        case 0:
                                                                                            echo 'درحال بررسی';
                                                                                            break;
                                                                                        case 1:
                                                                                            echo 'تایید رویداد';
                                                                                            break;
																						case 2:
                                                                                            echo 'بایگانی شده';
                                                                                            break;
                                                                                        case 3:
                                                                                            echo 'برگزارشده';
                                                                                            break;
                                                                                    }
                                                                                    ?>
                                                                                </td>

                                                                            </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <hr>
																		<?php
																		$info_reg_webinars_user = new \application\model\Transaction();
																		$info_reg_webinars_organizer = new \application\model\Transaction();
       																	$info_user = new \application\model\User();
       																	$info_user = $info_user->find('users_tbl' , 'phone' , $_SESSION['login_user']);
        																$info_reg_webinars_users = $info_reg_webinars_user->check_peyment('transaction_tbl', $request->id ,$info_user->phone , '250000');
																		$info_reg_webinars_organizer = $info_reg_webinars_organizer->check_peyment('transaction_tbl', $request->id ,$info_user->phone , '500000');
																		if($info_reg_webinars_users):
																		?>
																		<button class="btn btn-success btn-block" style="border-radius: 65px;">َشما در مورخه<?php echo $info_reg_webinars_users->date_orginal ?>مبلغ 250000 ریال بابت حق انتشار و خدمات رویداد آنلاین پرداخت نموده اید</button>

																		<button class="btn-block" style="border-radius: 65px;">شماره رهگیری پرداخت : <?php echo $info_reg_webinars_users->order_id?></button>
																		
																		<?php endif; ?>
																		<?php
																		if($info_reg_webinars_organizer):
																		?>
																		<button class="btn btn-success btn-block" style="border-radius: 65px;">َشما در مورخه<?php echo $info_reg_webinars_organizer->date_orginal ?>مبلغ 500000 ریال بابت صدور گواهینامه رسمی برگزاری وبینار پرداخت نموده اید</button>

																		<button class="btn-block" style="border-radius: 65px;">شماره رهگیری پرداخت : <?php echo $info_reg_webinars_organizer->order_id?></button>
																																										<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$request->id".'/'."$info_user->id/"."$request->teacher") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه رسمی رویداد</button>
						</form>	
																		
																		<?php endif; ?>

																<?php if ($request->final_status == 0 and $info_reg_webinars_users==false and ($request->type == 0 or $request->type == 2)): ?>
																	
																		<form method="post" action="<?php $this->url('transaction/create_transaction/'."$request->id".'/'."250000".'/'."services")?>">
 																<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه انتشار و خدمات رویداد آنلاین</button>
																		</form>	

																																	
															 <?php endif; ?>
																<?php if ( $request->final_status == 3 and !$info_reg_webinars_organizer): ?>
																	
																		<form method="post" action="<?php $this->url('transaction/create_transaction/'."$request->id".'/'."500000".'/'."certificate")?>">
 																<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه صدور گواهینامه رسمی</button>
																		</form>	

																																	
															 <?php endif; ?>															 
															<?php 
															if($request->final_status == 0): ?>

															                                                                                                                                            <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('manage_webinars/update_info_webinar/'."$request->id") ?>">ویرایش اطلاعات وبینار</a>

																		<?php endif; ?>
                                                                        <?php if ($request->final_status == 1): ?>
																		<?php if($request->type == 2): ?>
                     
					    <div class="row" style="margin: 16px;">
						<div class="col-md-5" style="padding: 12px;text-align: center;">کد اختصاصی رویداد شما</div>
						<div class="col-md-1"></div>
						<div class="col-md-6" style="padding: 12px;text-align: center;">لینک اختصاصی ثبت نام</div>
						<div class="col-md-5" style="background: #17a2b8;padding: 12px;text-align: center;color: white;"> <?php echo $request->private_code ?> </div>
						<div class="col-md-1"></div>
						<div class="col-md-6" style="background: #17a2b8;padding: 12px;text-align: center;color: white;"><a href="<?php echo "https://eberta.ir/app/course/".$request->id;?>" style="color: #ffffff;" target="_blank"><?php echo "https://eberta.ir/app/course/".$request->id;?></a></div>
                        </div>
																	<?php endif; ?>
                                                                        <a class="btn btn-outline-dark btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('app/course/'.$request->id);?>">مشاهده رویداد منتشرشده در سامانه</a>
                                                                        <?php if ($request->type == 0 or $request->type == 2):?>

																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $request->presenter_link?>">ورود به جلسه آنلاین</a>
																		<?php if($request->status_link == 0):
																		?>
																		<form method="post" action="<?php $this->url('manage_webinars/update_status_link/'."$request->id"."/"."1") ?>">
																		<button class="btn btn-outline-info btn-block mt-3 font-14">فعال سازی لینک جلسه آنلاین کاربران</button>
																		</form>
																		<?php endif; ?>
																		<?php if($request->status_link == 1):
																		?>
																		<form method="post" action="<?php $this->url('manage_webinars/update_status_link/'."$request->id"."/"."0") ?>">
																		<button class="btn btn-outline-danger btn-block mt-3 font-14">غیرفعالسازی سازی لینک جلسه آنلاین کاربران</button>
																		</form>
																		 <?php endif; ?>
																	   
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('excel_export/export_excel/'.$request->id.'/'.$request->title);?>">دریافت فایل اکسل اطلاعات شرکت کنندگان</a>
																		<?php if($request->final_status == 1): ?>
																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/event_discount/'."$request->id") ?>">ایجاد کد تخفیف رویداد</a>
																		<?php endif; ?>									
                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
                                                                                                                                             <?php endif; ?>
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('manage_webinars/update_info_webinar/'."$request->id") ?>">ویرایش اطلاعات رویداد</a>

										
                                                                        <?php endif; ?>
																		<?php if( $request->final_status == 1 and( $request->type == 1 or $request->type == 3)): ?>
																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/event_discount/'."$request->id") ?>">ایجاد کد تخفیف رویداد</a>
																		<?php endif; ?>
                                                                    </div>
																	   <?php if($request->final_status == 3 or $request->final_status == 1): ?>
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('excel_export/export_excel/'.$request->id.'/'.$request->title);?>">دریافت فایل اکسل اطلاعات شرکت کنندگان</a>
																		<?php endif; ?>
																		<?php if($request->final_status == 3): ?>

                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
																		<?php if($request->status_meetingroom == 1 or $request->status_meetingroom == 3): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/free_certificate_issue/'."$request->id".'/'."$info_user->id".'/'."free") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه عادی رویداد</button>
						</form>
																		<?php if($info_reg_webinars_organizer): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$request->id".'/'."$info_user->id/"."$request->teacher") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه رسمی رویداد</button>
						</form>																			<?php endif; ?>	
																		<?php endif; ?>				   
																		<?php endif; ?>

                                                                </div>
                                                            </div>
															<?php endif; ?>
                                                        <?php endforeach; ?>
														

                                                    </div>

                                                </div>

                            </div><!-- End check_webinar -->



                            <div class="tab-pane active" id="ongoing_webinar"><!-- Start ongoing_webinar -->
											

											        <div class="table-responsive">
                                                    <div class="card-body">
                                                        <?php
                                                            foreach ($find_info_webinars as $key=>$request) :
															if($request->final_status == '1'):
                                                            ?>
                                                            <div class="card mb-3 pb-4 shadow-sm">

                                                                <div class="card-body d-md-flex">
                                                                    <img src="<?php $this->asset('../'.$request->pic_two) ?>" class="img-fluid float-lg-right mb-2" alt="html" style="width: 250px!important; height: 138.89px!important;">
                                                                    <div class="d-inline-block pr-3 text-justify my-course">
                                                                        <a href="<?php $this->url("app/course/".$request->id) ?>" class="mb-3 d-block text-center text-dark" target="_blank"><?php echo $request->title?></a>
                                                                        <small>
                                                                            <?php echo substr($request->description,0,300)?>
                                                                        </small>
                                                                        <div class="btn-row">
                                                                            <button class="btn btn-outline-success rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download<?php echo $key;?>">مشاهده جزئیات درخواست</button>
<!--                                                                            <a href="<?php /*$this->url("app/course/".$request->id) */?>" class="btn btn-outline-info rounded-pill float-left mt-3 font-12"target="_blank" >مشاهده اطلاعات دوره در سایت</a>
-->                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-5 collapse" id="download<?php echo $key;?>" >
                                                                    <div class="table-responsive ">
                                                                        <span class="font-14">دریافت اطلاعات متمرکز وبینار | سامانه برتـــا</span><hr>
                                                                        <table id="myTable" class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>عنوان وبینار</th>
                                                                                <th>درخواست کننده</th>
                                                                                <th>تاریخ درخواست</th>
                                                                                <th> تاریخ برگزاری</th>
                                                                                <th>تعداد جلسات</th>
                                                                                <th>هزینه موردتایید</th>
                                                                                <th>کارمزد</th>
                                                                                <th>وضعیت</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td><?php echo $request->title;?></td>
                                                                                <td><?php echo $info_user->name." ".$info_user->family;?></td>
                                                                                <td><?php echo $request->date_submit;?></td>
                                                                                <td>
                                                                                    <?php
                                                                                    if (strpos($request->date,',')) {
                                                                                        $date_webinar = explode(',', $request->date);
                                                                                        $time_webinar = explode(',', $request->time);
                                                                                        echo "از" . $date_webinar[0]."-".$time_webinar[0];
                                                                                    }
                                                                                    else{
                                                                                        echo $request->date."-".$request->time;
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php
                                                                                    if (strpos($request->date,',')){
                                                                                        $date_webinar = explode(',',$request->date);
                                                                                        echo count($date_webinar)."جلسه";
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td><?php echo $request->price." "."ریال";?></td>
                                                                                <td>3 درصد + 500 تومان به ازای هرثبت نام</td>
                                                                                <td>
                                                                                    <?php
                                                                                    switch ($request->final_status){
                                                                                        case 0:
                                                                                            echo 'درحال بررسی';
                                                                                            break;
                                                                                        case 1:
                                                                                            echo 'تایید رویداد';
                                                                                            break;
																						case 2:
                                                                                            echo 'بایگانی شده';
                                                                                            break;
                                                                                        case 3:
                                                                                            echo 'برگزارشده';
                                                                                            break;
                                                                                    }
                                                                                    ?>
                                                                                </td>

                                                                            </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <hr>
																		<?php
																		$info_reg_webinars_user = new \application\model\Transaction();
																		$info_reg_webinars_organizer = new \application\model\Transaction();
       																	$info_user = new \application\model\User();
       																	$info_user = $info_user->find('users_tbl' , 'phone' , $_SESSION['login_user']);
        																$info_reg_webinars_users = $info_reg_webinars_user->check_peyment('transaction_tbl', $request->id ,$info_user->phone , '250000');
																		$info_reg_webinars_organizer = $info_reg_webinars_organizer->check_peyment('transaction_tbl', $request->id ,$info_user->phone , '500000');
																		if($info_reg_webinars_users):
																		?>
																		<button class="btn btn-success btn-block" style="border-radius: 65px;">َشما در مورخه<?php echo $info_reg_webinars_users->date_orginal ?>مبلغ 250000 ریال بابت حق انتشار و خدمات رویداد آنلاین پرداخت نموده اید</button>

																		<button class="btn-block" style="border-radius: 65px;">شماره رهگیری پرداخت : <?php echo $info_reg_webinars_users->order_id?></button>
																		
																		<?php endif; ?>
																		<?php
																		if($info_reg_webinars_organizer):
																		?>
																		<button class="btn btn-success btn-block" style="border-radius: 65px;">َشما در مورخه<?php echo $info_reg_webinars_organizer->date_orginal ?>مبلغ 500000 ریال بابت صدور گواهینامه رسمی برگزاری وبینار پرداخت نموده اید</button>

																		<button class="btn-block" style="border-radius: 65px;">شماره رهگیری پرداخت : <?php echo $info_reg_webinars_organizer->order_id?></button>
																								<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$request->id".'/'."$info_user->id/"."$request->teacher") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه رسمی رویداد</button>
						</form>	
																		<?php endif; ?>

																<?php if ($request->final_status == 0 and $info_reg_webinars_users==false and ($request->type == 0 or $request->type == 2)): ?>
																	
																		<form method="post" action="<?php $this->url('transaction/create_transaction/'."$request->id".'/'."250000".'/'."services")?>">
 																<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه انتشار و خدمات رویداد آنلاین</button>
																		</form>	

																																	
															 <?php endif; ?>
																<?php if ( $request->final_status == 3 and !$info_reg_webinars_organizer): ?>
																	
																		<form method="post" action="<?php $this->url('transaction/create_transaction/'."$request->id".'/'."500000".'/'."certificate")?>">
 																<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه صدور گواهینامه رسمی</button>
																		</form>	

																																	
															 <?php endif; ?>															 
															<?php 
															if($request->final_status == 0): ?>

															                                                                                                                                            <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('manage_webinars/update_info_webinar/'."$request->id") ?>">ویرایش اطلاعات وبینار</a>

																		<?php endif; ?>
                                                                        <?php if ($request->final_status == 1): ?>
																		<?php if($request->type == 2): ?>
                     
					    <div class="row" style="margin: 16px;">
						<div class="col-md-5" style="padding: 12px;text-align: center;">کد اختصاصی رویداد شما</div>
						<div class="col-md-1"></div>
						<div class="col-md-6" style="padding: 12px;text-align: center;">لینک اختصاصی ثبت نام</div>
						<div class="col-md-5" style="background: #17a2b8;padding: 12px;text-align: center;color: white;"> <?php echo $request->private_code ?> </div>
						<div class="col-md-1"></div>
						<div class="col-md-6" style="background: #17a2b8;padding: 12px;text-align: center;color: white;"><a href="<?php echo "https://eberta.ir/app/course/".$request->id;?>" style="color: #ffffff;" target="_blank"><?php echo "https://eberta.ir/app/course/".$request->id;?></a></div>
                        </div>
																	<?php endif; ?>
                                                                        <a class="btn btn-outline-dark btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('app/course/'.$request->id);?>">مشاهده رویداد منتشرشده در سامانه</a>
                                                                        <?php if ($request->type == 0 or $request->type == 2):?>

																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $request->presenter_link?>">ورود به جلسه آنلاین</a>
																		<?php if($request->status_link == 0):
																		?>
																		<form method="post" action="<?php $this->url('manage_webinars/update_status_link/'."$request->id"."/"."1") ?>">
																		<button class="btn btn-outline-info btn-block mt-3 font-14">فعال سازی لینک جلسه آنلاین کاربران</button>
																		</form>
																		<?php endif; ?>
																		<?php if($request->status_link == 1):
																		?>
																		<form method="post" action="<?php $this->url('manage_webinars/update_status_link/'."$request->id"."/"."0") ?>">
																		<button class="btn btn-outline-danger btn-block mt-3 font-14">غیرفعالسازی سازی لینک جلسه آنلاین کاربران</button>
																		</form>
																		 <?php endif; ?>
																	   
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('excel_export/export_excel/'.$request->id.'/'.$request->title);?>">دریافت فایل اکسل اطلاعات شرکت کنندگان</a>
																		<?php if($request->final_status == 1): ?>
																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/event_discount/'."$request->id") ?>">ایجاد کد تخفیف رویداد</a>
																		<?php endif; ?>									
                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
                                                                                                                                             <?php endif; ?>
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('manage_webinars/update_info_webinar/'."$request->id") ?>">ویرایش اطلاعات رویداد</a>

										
                                                                        <?php endif; ?>
																		<?php if( $request->final_status == 1 and( $request->type == 1 or $request->type == 3)): ?>
																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/event_discount/'."$request->id") ?>">ایجاد کد تخفیف رویداد</a>
																		<?php endif; ?>
                                                                    </div>
																	   <?php if($request->final_status == 3 or $request->final_status == 1): ?>
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('excel_export/export_excel/'.$request->id.'/'.$request->title);?>">دریافت فایل اکسل اطلاعات شرکت کنندگان</a>
																		<?php endif; ?>
																		<?php if($request->final_status == 3): ?>

                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
																		<?php if($request->status_meetingroom == 1 or $request->status_meetingroom == 3): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/free_certificate_issue/'."$request->id".'/'."$info_user->id".'/'."free") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه عادی رویداد</button>
						</form>
																		<?php if($info_reg_webinars_organizer): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$request->id".'/'."$info_user->id/"."$request->teacher") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه رسمی رویداد</button>
						</form>																			<?php endif; ?>	
																		<?php endif; ?>				   
																		<?php endif; ?>

                                                                </div>
                                                            </div>
															<?php endif; ?>
                                                        <?php endforeach; ?>
														

                                                    </div>

                                                </div>
                                
                            </div><!-- End ongoing_webinar -->

                            <div class="tab-pane fade" id="held_webinar"><!-- Start held_webinar -->


											        <div class="table-responsive">
                                                    <div class="card-body">
                                                        <?php
                                                            foreach ($find_info_webinars as $key=>$request) :
															if($request->final_status == '3'):
                                                            ?>
                                                            <div class="card mb-3 pb-4 shadow-sm">

                                                                <div class="card-body d-md-flex">
                                                                    <img src="<?php $this->asset('../'.$request->pic_two) ?>" class="img-fluid float-lg-right mb-2" alt="html" style="width: 250px!important; height: 138.89px!important;">
                                                                    <div class="d-inline-block pr-3 text-justify my-course">
                                                                        <a href="<?php $this->url("app/course/".$request->id) ?>" class="mb-3 d-block text-center text-dark" target="_blank"><?php echo $request->title?></a>
                                                                        <small>
                                                                            <?php echo substr($request->description,0,300)?>
                                                                        </small>
                                                                        <div class="btn-row">
                                                                            <button class="btn btn-outline-success rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download<?php echo $key;?>">مشاهده جزئیات درخواست</button>
<!--                                                                            <a href="<?php /*$this->url("app/course/".$request->id) */?>" class="btn btn-outline-info rounded-pill float-left mt-3 font-12"target="_blank" >مشاهده اطلاعات دوره در سایت</a>
-->                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-5 collapse" id="download<?php echo $key;?>" >
                                                                    <div class="table-responsive ">
                                                                        <span class="font-14">دریافت اطلاعات متمرکز وبینار | سامانه برتـــا</span><hr>
                                                                        <table id="myTable" class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>عنوان وبینار</th>
                                                                                <th>درخواست کننده</th>
                                                                                <th>تاریخ درخواست</th>
                                                                                <th> تاریخ برگزاری</th>
                                                                                <th>تعداد جلسات</th>
                                                                                <th>هزینه موردتایید</th>
                                                                                <th>کارمزد</th>
                                                                                <th>وضعیت</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td><?php echo $request->title;?></td>
                                                                                <td><?php echo $info_user->name." ".$info_user->family;?></td>
                                                                                <td><?php echo $request->date_submit;?></td>
                                                                                <td>
                                                                                    <?php
                                                                                    if (strpos($request->date,',')) {
                                                                                        $date_webinar = explode(',', $request->date);
                                                                                        $time_webinar = explode(',', $request->time);
                                                                                        echo "از" . $date_webinar[0]."-".$time_webinar[0];
                                                                                    }
                                                                                    else{
                                                                                        echo $request->date."-".$request->time;
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php
                                                                                    if (strpos($request->date,',')){
                                                                                        $date_webinar = explode(',',$request->date);
                                                                                        echo count($date_webinar)."جلسه";
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td><?php echo $request->price." "."ریال";?></td>
                                                                                <td>3 درصد + 500 تومان به ازای هرثبت نام</td>
                                                                                <td>
                                                                                    <?php
                                                                                    switch ($request->final_status){
                                                                                        case 0:
                                                                                            echo 'درحال بررسی';
                                                                                            break;
                                                                                        case 1:
                                                                                            echo 'تایید رویداد';
                                                                                            break;
																						case 2:
                                                                                            echo 'بایگانی شده';
                                                                                            break;
                                                                                        case 3:
                                                                                            echo 'برگزارشده';
                                                                                            break;
                                                                                    }
                                                                                    ?>
                                                                                </td>

                                                                            </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <hr>
																		<?php
																		$info_reg_webinars_user = new \application\model\Transaction();
																		$info_reg_webinars_organizer = new \application\model\Transaction();
       																	$info_user = new \application\model\User();
       																	$info_user = $info_user->find('users_tbl' , 'phone' , $_SESSION['login_user']);
        																$info_reg_webinars_users = $info_reg_webinars_user->check_peyment('transaction_tbl', $request->id ,$info_user->phone , '250000');
																		$info_reg_webinars_organizer = $info_reg_webinars_organizer->check_peyment('transaction_tbl', $request->id ,$info_user->phone , '500000');
																		if($info_reg_webinars_users):
																		?>
																		<button class="btn btn-success btn-block" style="border-radius: 65px;">َشما در مورخه<?php echo $info_reg_webinars_users->date_orginal ?>مبلغ 250000 ریال بابت حق انتشار و خدمات رویداد آنلاین پرداخت نموده اید</button>

																		<button class="btn-block" style="border-radius: 65px;">شماره رهگیری پرداخت : <?php echo $info_reg_webinars_users->order_id?></button>
																		
																		<?php endif; ?>
																		<?php
																		if($info_reg_webinars_organizer):
																		?>
																		<button class="btn btn-success btn-block" style="border-radius: 65px;">َشما در مورخه<?php echo $info_reg_webinars_organizer->date_orginal ?>مبلغ 500000 ریال بابت صدور گواهینامه رسمی برگزاری وبینار پرداخت نموده اید</button>

																		<button class="btn-block" style="border-radius: 65px;">شماره رهگیری پرداخت : <?php echo $info_reg_webinars_organizer->order_id?></button>
																																									<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$request->id".'/'."$info_user->id/"."$request->teacher") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه رسمی رویداد</button>
						</form>		
																		<?php endif; ?>

																<?php if ($request->final_status == 0 and $info_reg_webinars_users==false and ($request->type == 0 or $request->type == 2)): ?>
																	
																		<form method="post" action="<?php $this->url('transaction/create_transaction/'."$request->id".'/'."250000".'/'."services")?>">
 																<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه انتشار و خدمات رویداد آنلاین</button>
																		</form>	

																																	
															 <?php endif; ?>
																<?php if ( $request->final_status == 3 and !$info_reg_webinars_organizer): ?>
																	
																		<form method="post" action="<?php $this->url('transaction/create_transaction/'."$request->id".'/'."500000".'/'."certificate")?>">
 																<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه صدور گواهینامه رسمی</button>
																		</form>	

																																	
															 <?php endif; ?>															 
															<?php 
															if($request->final_status == 0): ?>

															                                                                                                                                            <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('manage_webinars/update_info_webinar/'."$request->id") ?>">ویرایش اطلاعات وبینار</a>

																		<?php endif; ?>
                                                                        <?php if ($request->final_status == 1): ?>
																		<?php if($request->type == 2): ?>
                     
					    <div class="row" style="margin: 16px;">
						<div class="col-md-5" style="padding: 12px;text-align: center;">کد اختصاصی رویداد شما</div>
						<div class="col-md-1"></div>
						<div class="col-md-6" style="padding: 12px;text-align: center;">لینک اختصاصی ثبت نام</div>
						<div class="col-md-5" style="background: #17a2b8;padding: 12px;text-align: center;color: white;"> <?php echo $request->private_code ?> </div>
						<div class="col-md-1"></div>
						<div class="col-md-6" style="background: #17a2b8;padding: 12px;text-align: center;color: white;"><a href="<?php echo "https://eberta.ir/app/course/".$request->id;?>" style="color: #ffffff;" target="_blank"><?php echo "https://eberta.ir/app/course/".$request->id;?></a></div>
                        </div>
																	<?php endif; ?>
                                                                        <a class="btn btn-outline-dark btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('app/course/'.$request->id);?>">مشاهده رویداد منتشرشده در سامانه</a>
                                                                        <?php if ($request->type == 0 or $request->type == 2):?>

																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $request->presenter_link?>">ورود به جلسه آنلاین</a>
																		<?php if($request->status_link == 0):
																		?>
																		<form method="post" action="<?php $this->url('manage_webinars/update_status_link/'."$request->id"."/"."1") ?>">
																		<button class="btn btn-outline-info btn-block mt-3 font-14">فعال سازی لینک جلسه آنلاین کاربران</button>
																		</form>
																		<?php endif; ?>
																		<?php if($request->status_link == 1):
																		?>
																		<form method="post" action="<?php $this->url('manage_webinars/update_status_link/'."$request->id"."/"."0") ?>">
																		<button class="btn btn-outline-danger btn-block mt-3 font-14">غیرفعالسازی سازی لینک جلسه آنلاین کاربران</button>
																		</form>
																		 <?php endif; ?>
																	   
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('excel_export/export_excel/'.$request->id.'/'.$request->title);?>">دریافت فایل اکسل اطلاعات شرکت کنندگان</a>
																		<?php if($request->final_status == 1): ?>
																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/event_discount/'."$request->id") ?>">ایجاد کد تخفیف رویداد</a>
																		<?php endif; ?>									
                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
                                                                                                                                             <?php endif; ?>
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('manage_webinars/update_info_webinar/'."$request->id") ?>">ویرایش اطلاعات رویداد</a>

										
                                                                        <?php endif; ?>
																		<?php if( $request->final_status == 1 and( $request->type == 1 or $request->type == 3)): ?>
																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/event_discount/'."$request->id") ?>">ایجاد کد تخفیف رویداد</a>
																		<?php endif; ?>
                                                                    </div>
																	   <?php if($request->final_status == 3 or $request->final_status == 1): ?>
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('excel_export/export_excel/'.$request->id.'/'.$request->title);?>">دریافت فایل اکسل اطلاعات شرکت کنندگان</a>
																		<?php endif; ?>
																		<?php if($request->final_status == 3): ?>

                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
																		<?php if($request->status_meetingroom == 1 or $request->status_meetingroom == 3): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/free_certificate_issue/'."$request->id".'/'."$info_user->id".'/'."free") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه عادی رویداد</button>
						</form>
																		<?php if($info_reg_webinars_organizer): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$request->id".'/'."$info_user->id/"."$request->teacher") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه رسمی رویداد</button>
						</form>																			<?php endif; ?>	
																		<?php endif; ?>				   
																		<?php endif; ?>

                                                                </div>
                                                            </div>
															<?php endif; ?>
                                                        <?php endforeach; ?>
														

                                                    </div>

                                                </div>

                            </div><!-- End held_webinar -->

                            <div class="tab-pane fade" id="archive_webinar"><!-- Start archive_webinar -->


											        <div class="table-responsive">
                                                    <div class="card-body">
                                                        <?php
                                                            foreach ($find_info_webinars as $key=>$request) :
															if($request->final_status == '2'):
                                                            ?>
                                                            <div class="card mb-3 pb-4 shadow-sm">

                                                                <div class="card-body d-md-flex">
                                                                    <img src="<?php $this->asset('../'.$request->pic_two) ?>" class="img-fluid float-lg-right mb-2" alt="html" style="width: 250px!important; height: 138.89px!important;">
                                                                    <div class="d-inline-block pr-3 text-justify my-course">
                                                                        <a href="<?php $this->url("app/course/".$request->id) ?>" class="mb-3 d-block text-center text-dark" target="_blank"><?php echo $request->title?></a>
                                                                        <small>
                                                                            <?php echo substr($request->description,0,300)?>
                                                                        </small>
                                                                        <div class="btn-row">
                                                                            <button class="btn btn-outline-success rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download<?php echo $key;?>">مشاهده جزئیات درخواست</button>
<!--                                                                            <a href="<?php /*$this->url("app/course/".$request->id) */?>" class="btn btn-outline-info rounded-pill float-left mt-3 font-12"target="_blank" >مشاهده اطلاعات دوره در سایت</a>
-->                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-5 collapse" id="download<?php echo $key;?>" >
                                                                    <div class="table-responsive ">
                                                                        <span class="font-14">دریافت اطلاعات متمرکز وبینار | سامانه برتـــا</span><hr>
                                                                        <table id="myTable" class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>عنوان وبینار</th>
                                                                                <th>درخواست کننده</th>
                                                                                <th>تاریخ درخواست</th>
                                                                                <th> تاریخ برگزاری</th>
                                                                                <th>تعداد جلسات</th>
                                                                                <th>هزینه موردتایید</th>
                                                                                <th>کارمزد</th>
                                                                                <th>وضعیت</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td><?php echo $request->title;?></td>
                                                                                <td><?php echo $info_user->name." ".$info_user->family;?></td>
                                                                                <td><?php echo $request->date_submit;?></td>
                                                                                <td>
                                                                                    <?php
                                                                                    if (strpos($request->date,',')) {
                                                                                        $date_webinar = explode(',', $request->date);
                                                                                        $time_webinar = explode(',', $request->time);
                                                                                        echo "از" . $date_webinar[0]."-".$time_webinar[0];
                                                                                    }
                                                                                    else{
                                                                                        echo $request->date."-".$request->time;
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php
                                                                                    if (strpos($request->date,',')){
                                                                                        $date_webinar = explode(',',$request->date);
                                                                                        echo count($date_webinar)."جلسه";
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <td><?php echo $request->price." "."ریال";?></td>
                                                                                <td>3 درصد + 500 تومان به ازای هرثبت نام</td>
                                                                                <td>
                                                                                    <?php
                                                                                    switch ($request->final_status){
                                                                                        case 0:
                                                                                            echo 'درحال بررسی';
                                                                                            break;
                                                                                        case 1:
                                                                                            echo 'تایید رویداد';
                                                                                            break;
																						case 2:
                                                                                            echo 'بایگانی شده';
                                                                                            break;
                                                                                        case 3:
                                                                                            echo 'برگزارشده';
                                                                                            break;
                                                                                    }
                                                                                    ?>
                                                                                </td>

                                                                            </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <hr>
																		<?php
																		$info_reg_webinars_user = new \application\model\Transaction();
																		$info_reg_webinars_organizer = new \application\model\Transaction();
       																	$info_user = new \application\model\User();
       																	$info_user = $info_user->find('users_tbl' , 'phone' , $_SESSION['login_user']);
        																$info_reg_webinars_users = $info_reg_webinars_user->check_peyment('transaction_tbl', $request->id ,$info_user->phone , '250000');
																		$info_reg_webinars_organizer = $info_reg_webinars_organizer->check_peyment('transaction_tbl', $request->id ,$info_user->phone , '500000');
																		if($info_reg_webinars_users):
																		?>
																		<button class="btn btn-success btn-block" style="border-radius: 65px;">َشما در مورخه<?php echo $info_reg_webinars_users->date_orginal ?>مبلغ 250000 ریال بابت حق انتشار و خدمات رویداد آنلاین پرداخت نموده اید</button>

																		<button class="btn-block" style="border-radius: 65px;">شماره رهگیری پرداخت : <?php echo $info_reg_webinars_users->order_id?></button>
																		
																		<?php endif; ?>
																		<?php
																		if($info_reg_webinars_organizer):
																		?>
																		<button class="btn btn-success btn-block" style="border-radius: 65px;">َشما در مورخه<?php echo $info_reg_webinars_organizer->date_orginal ?>مبلغ 500000 ریال بابت صدور گواهینامه رسمی برگزاری وبینار پرداخت نموده اید</button>

																		<button class="btn-block" style="border-radius: 65px;">شماره رهگیری پرداخت : <?php echo $info_reg_webinars_organizer->order_id?></button>
																		
																		<?php endif; ?>

																<?php if ($request->final_status == 0 and $info_reg_webinars_users==false and ($request->type == 0 or $request->type == 2)): ?>
																	
																		<form method="post" action="<?php $this->url('transaction/create_transaction/'."$request->id".'/'."250000".'/'."services")?>">
 																<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه انتشار و خدمات رویداد آنلاین</button>
																		</form>	

																																	
															 <?php endif; ?>
																<?php if ( $request->final_status == 3 and !$info_reg_webinars_organizer): ?>
																	
																		<form method="post" action="<?php $this->url('transaction/create_transaction/'."$request->id".'/'."500000".'/'."certificate")?>">
 																<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه صدور گواهینامه رسمی</button>
																		</form>	

																																	
															 <?php endif; ?>															 
															<?php 
															if($request->final_status == 0): ?>

															                                                                                                                                            <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('manage_webinars/update_info_webinar/'."$request->id") ?>">ویرایش اطلاعات وبینار</a>

																		<?php endif; ?>
                                                                        <?php if ($request->final_status == 1): ?>
																		<?php if($request->type == 2): ?>
                     
					    <div class="row" style="margin: 16px;">
						<div class="col-md-5" style="padding: 12px;text-align: center;">کد اختصاصی رویداد شما</div>
						<div class="col-md-1"></div>
						<div class="col-md-6" style="padding: 12px;text-align: center;">لینک اختصاصی ثبت نام</div>
						<div class="col-md-5" style="background: #17a2b8;padding: 12px;text-align: center;color: white;"> <?php echo $request->private_code ?> </div>
						<div class="col-md-1"></div>
						<div class="col-md-6" style="background: #17a2b8;padding: 12px;text-align: center;color: white;"><a href="<?php echo "https://eberta.ir/app/course/".$request->id;?>" style="color: #ffffff;" target="_blank"><?php echo "https://eberta.ir/app/course/".$request->id;?></a></div>
                        </div>
																	<?php endif; ?>
                                                                        <a class="btn btn-outline-dark btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('app/course/'.$request->id);?>">مشاهده رویداد منتشرشده در سامانه</a>
                                                                        <?php if ($request->type == 0 or $request->type == 2):?>

																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $request->presenter_link?>">ورود به جلسه آنلاین</a>
																		<?php if($request->status_link == 0):
																		?>
																		<form method="post" action="<?php $this->url('manage_webinars/update_status_link/'."$request->id"."/"."1") ?>">
																		<button class="btn btn-outline-info btn-block mt-3 font-14">فعال سازی لینک جلسه آنلاین کاربران</button>
																		</form>
																		<?php endif; ?>
																		<?php if($request->status_link == 1):
																		?>
																		<form method="post" action="<?php $this->url('manage_webinars/update_status_link/'."$request->id"."/"."0") ?>">
																		<button class="btn btn-outline-danger btn-block mt-3 font-14">غیرفعالسازی سازی لینک جلسه آنلاین کاربران</button>
																		</form>
																		 <?php endif; ?>
																	   
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('excel_export/export_excel/'.$request->id.'/'.$request->title);?>">دریافت فایل اکسل اطلاعات شرکت کنندگان</a>
																		<?php if($request->final_status == 1): ?>
																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/event_discount/'."$request->id") ?>">ایجاد کد تخفیف رویداد</a>
																		<?php endif; ?>									
                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
                                                                                                                                             <?php endif; ?>
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('manage_webinars/update_info_webinar/'."$request->id") ?>">ویرایش اطلاعات رویداد</a>

										
                                                                        <?php endif; ?>
																		<?php if( $request->final_status == 1 and( $request->type == 1 or $request->type == 3)): ?>
																		<a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/event_discount/'."$request->id") ?>">ایجاد کد تخفیف رویداد</a>
																		<?php endif; ?>
                                                                    </div>
																	   <?php if($request->final_status == 3 or $request->final_status == 1): ?>
																	    <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('excel_export/export_excel/'.$request->id.'/'.$request->title);?>">دریافت فایل اکسل اطلاعات شرکت کنندگان</a>
																		<?php endif; ?>
																		<?php if($request->final_status == 3): ?>

                                                                        <a class="btn btn-outline-info btn-block mt-3 font-14" target="_blank" href="<?php echo $this->url('transaction/get_factor_organizer/'."$request->id".'/'.$info_user->id) ?>">دریافت فاکتور رسمی وبینار</a>
																		<?php if($request->status_meetingroom == 1 or $request->status_meetingroom == 3): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/free_certificate_issue/'."$request->id".'/'."$info_user->id".'/'."free") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه عادی رویداد</button>
						</form>
																		<?php if($info_reg_webinars_organizer): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$request->id".'/'."$info_user->id/"."$request->teacher") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه رسمی رویداد</button>
						</form>																			<?php endif; ?>	
																		<?php endif; ?>				   
																		<?php endif; ?>

                                                                </div>
                                                            </div>
															<?php endif; ?>
                                                        <?php endforeach; ?>
														

                                                    </div>

                                                </div>

                            </div><!-- End archive_webinar -->
                            
                        </div>
                    </div>
                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div><!----- End vaziyat ----->
                    <div class="tab-pane fade show text-center" id="dore-signup"><!----- Start dore signup ----->
                        <?php $this->include('app.panel.register_course'); ?>
                    </div><!----- End dore signup ----->
                    <div class="tab-pane fade show " id="meeting-room"><!----- Start ticket ----->
                        <?php $this->include('app.panel.request_meeting_room'); ?>

                    </div><!----- End ticket ----->
                    <div class="tab-pane fade show text-right" id="user-change"><!----- Start upgrade organizer ----->
                        <?php $this->include('app.panel.upgrade_organizer'); ?>
                    </div><!----- End upgrade organizer ----->
					<div class="tab-pane fade show text-center" id="register_organizers"><!----- Start scores ----->
						<?php $this->include('app.panel.register_organizers'); ?>
                    </div><!----- End scores ----->
                    <div class="tab-pane fade show text-right" id="request"><!----- Start request webinar ----->
                        <?php $this->include('app.panel.request_webinar'); ?>
                    </div><!----- End request webinar ----->
                    <div class="tab-pane fade show text-center" id="score"><!----- Start scores ----->
						<?php $this->include('app.panel.register_meetingroom'); ?>
                    </div><!----- End scores ----->


                </div>

            </div>

        </div>
</div>
<?php else:
$this->route('user/login/user');
?>
<?php endif; ?>
<?php $this->include('app.layouts.footer'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button_headline'); //Add button selector
        var wrapper = $('.headline_wrapper'); //Input field wrapper
        var fieldHTML =
            '<div class="count-headline">'+
            '<div class="row">'+
            '<input id="4" class="form-control col-md-3" type="text" value="سرفصل شماره...">'+
            '<input id="2" class="form-control col-md-8" type="text" name="headlines[]" placeholder="سرفصل مورد نظر را وارد کنید." required>'+
            '<a id="4" href="javascript:void(0);" class="form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>'+'</div>'+ '</div>'+'<br>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.meeting_wrapper'); //Input field wrapper
        var fieldHTML =
            '<div class="count-headline">'+
            '<div class="row">'+
            '<input id="4" class="form-control col-md-3" type="text"  placeholder="ساعت برگزاری جلسه" value="جلسه شماره...">'+
            '<input id="4" class="form-control col-md-4" type="text" name="time[]" placeholder="ساعت برگزاری جلسه" value=" از 12:00 تا 16:00" required>'+
            '<input id="4" class="form-control col-md-4" type="text" name="date[]" placeholder="تاریخ برگزاری جلسه" value="1400/10/12" required>'+
            '<a id="4" href="javascript:void(0);" class="form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>'+
            '</div>'+ '</div>'+'<br>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button_adminheadline'); //Add button selector
        var wrapper = $('.admincodemeetin_wrapper'); //Input field wrapper
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
								var codes = "";
 				var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  				for (var i = 0; i < 5; i++)
		  			{
   						codes += possible.charAt(Math.floor(Math.random() * possible.length));			  
		 			}
        var fieldHTML =
            '<br>'+'<div class="count-headline">'+
			'<div class="form-row">'+
			'<input id="4" class="form-control col-md-6" type="text"  name="participantcodemeeting[]" value='+codes+' placeholder="کد مربوطه" readonly>'+
            '<input id="2" class="form-control col-md-5" type="text" name="numberparticipantcode[]" placeholder="تعداد مجاز" required>'+
			'<a id="4" href="javascript:void(0);" class="form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>'+
            '</div>'+
            '</div>'+'<br>';
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button_participantheadline'); //Add button selector
        var wrapper = $('.participantcodemeetin_wrapper'); //Input field wrapper
 //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter	
				var codes = "";
 				var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  				for (var i = 0; i < 5; i++)
		  			{
   						codes += possible.charAt(Math.floor(Math.random() * possible.length));			  
		 			}
        var fieldHTML =
            '<br>'+'<div class="count-headline">'+
			'<div class="form-row">'+
			'<input id="4" class="form-control col-md-6" type="text"  name="participantcodemeeting[]" value='+codes+' placeholder="کد مربوطه" readonly>'+
            '<input id="2" class="form-control col-md-5" type="text" name="numberparticipantcode[]" placeholder="تعداد مجاز" required>'+
			'<a id="4" href="javascript:void(0);" class="form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>'+
            '</div>'+
            '</div>'+'<br>';				 						
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

</script>



<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button_file'); //Add button selector
        var wrapper = $('.file_wrapper'); //Input field wrapper
        var fieldHTML =
            '<div class="count-headline">'+
			'<div class="custom-file">'+
            '<input type="file" class="custom-file-input col-md-11" name="file[]" id="customFile1" required>'+
            '<label class="custom-file-label" for="customFile1">ارسال مستندات اتاق جلسه</label>'+
			'<a id="4" href="javascript:void(0);" class="form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>'+'</div>'+'</div>'+'<br>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>


<script>
    var mwsModal = document.getElementById('miladWorkShopAlert');
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        mwsModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == mwsModal) {
            mwsModal.style.display = "none";
        }
    }
</script>
<script>
    DecoupledEditor
        .create( document.querySelector( '#editorx' ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>



