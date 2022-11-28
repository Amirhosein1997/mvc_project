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
					<?php
                    $webinar_info = new \application\model\Webinar();
                    $webinar_info = $webinar_info->find('webinars_tbl','id',$id_webinar);
					?>
 <div class="box-header with-border" style="text-align: center!important;">
						<h3 class="box-title btn btn-facebook" style="padding: 19px;"> گزارش  جامع مالی رویداد <button class="btn btn-primary"><?php echo $webinar_info->title ?></button></h3>
						</div>                                                                                                                               
                      	   
	    <div class="row margin-bottom" style="margin: 6px;">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner" style="padding: 5%;">
                        <h3 style="font-size: 25px;"> دریافت فاکتور رسمی</h3>
                        <p>مجموع کل هزینه فاکتور</p>
                    </div>
                    <div class="icon">
                        <i class="ion-ios-calculator-outline"></i>
                    </div>
                    <a href="<?php echo $this->url('transaction/get_factor_organizer/'."$id_webinar".'/'."$id_organizer") ?>" class="form-control btn" style="border: 2px solid #dd4b39;" target="_blank">دریافت فاکتور رسمی وبینار <i class="fa fa-arrow-circle-left"></i></a>
                </div>
            </div>

			    <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner" style="padding: 5%;">
                        <h3 style="font-size: 25px;">تراکنشات مالی ثبت نام </h3>
                        <p>بانک مرکزی جمهوری اسلامی ایران</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                      <button id="4" type="button" class="form-control btn " style="border: 2px solid #00a65a;" data-toggle="modal" data-target="#modal-default">مشاهده جزئیات تزاکنشات ثبت نام <i class="fa fa-arrow-circle-left"></i></button>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner" style="padding: 5%;">

                        <h3 style="font-size: 25px;">تراکنشات مالی گواهینامه</h3>
                        <p>بانک مرکزی جمهوری اسلامی ایران</p>
                    </div>
                    <div class="icon">
                        <i class="ion-ribbon-b"></i>
                    </div>
                      <button id="4" type="button" class="form-control btn" style="border: 2px solid #f39c12;" data-toggle="modal" data-target="#modal-defaults">مشاهده جزئیات تزاکنشات  گواهینامه <i class="fa fa-arrow-circle-left"></i></button>
                </div>
            </div>


            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner" style="padding: 5%;">

                        <h3 style="font-size: 25px;">بروزرسانی تراکنش بانکی</h3>
                        <p>بانک مرکزی جمهوری اسلامی ایران</p>
                    </div>
                    <div class="icon">
                        <i class="ion-compose"></i>
                    </div>
         <button id="4" type="button" class="form-control btn" style="border: 2px solid #f39c12;" data-toggle="modal" data-target="#modal-transaction">شروع بروزرسانی تراکنش <i class="fa fa-arrow-circle-left"></i></button>
                </div>
            </div>

			</div>
      
 							<div class="modal fade" id="modal-default">
                                <div class="modal-dialog" style="width: 67%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title modal-title box-header with-border box-title btn btn-facebook ">تراکنشات ثبت نام رویداد</h4>
                                        </div>
                                        <div class="modal-body">
															    <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">َشماره سفارش</button></button></th>
                                        <th scope="col"><button class="form-control">َکدرهگیری</button></button></th>
                                        <th scope="col"><button class="form-control">نام و نام خانوادگی</button></th>
                                        <th scope="col"><button class="form-control">تلفن تماس</button></th>
                                        <th scope="col"><button class="form-control">هزینه پرداختی</button></th>
                                        <th scope="col"><button class="form-control">تخفیف</button></th>
                                        <th scope="col"><button class="form-control">تاریخ پرداخت | تسویه</button></th>
                                        <th scope="col"><button class="form-control"> وضعیت پرداخت</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($show_transaction_webinar)):
                                        foreach ($show_transaction_webinar as $key=>$transaction):
                                            ?>
                                            <tr>
                                                <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-soundcloud"><?php echo $transaction->order_id;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-dropbox"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                                                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"></path>
                                                        </svg> <?php echo $transaction->track_id;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-facebook "><?php echo $transaction->fullname;?></button></th>
                                                <th scope="row"><a class="form-control btn btn-success" href="" target="_blank"><?php echo$transaction->phone;?></a></th>
                                                <th scope="row"><button class="form-control  btn-github"><?php echo $transaction->amount." "."ریال";?></button></th>
                                                <th scope="row"><button class="form-control btn-warning ">
                                                        <?php
                                                        $webinar_info = new \application\model\Webinar();
                                                        $webinar_info = $webinar_info->find('webinars_tbl','id',$transaction->id_webinar);
														if($webinar_info->price != '0'){
                                                        $result = ($transaction->amount*100)/$webinar_info->price;
                                                        $result = 100-$result;
														}
														if($webinar_info->price == '0'){
															echo 'رویداد رایگان';
														}
														else{
                                                        echo $result.""."درصد";
														}
                                                        ?>
                                                    </button></th>
                                                <th scope="row">
												<?php if($transaction->checkout == "checkout"): ?>
												<button class="form-control btn-bitbucket"><?php echo $transaction->date_orginal;?></button>
												<?php endif; ?>
												<?php if($transaction->checkout == "refund"): ?>
												<button class="form-control btn-danger" style="direction:ltr"><?php echo $transaction->date_checkout;?></button>
												<?php endif; ?>
												</th>
                                                <th scope="row">
                                                        <?php
														if($transaction->checkout == "checkout")
														{
                                                        switch ($transaction->status){
                                                            case 10:
                                                                echo "<button class='form-control'>در انتظار پرداخت</button>";
                                                                break;
                                                            case 100:
                                                                echo "<button class='form-control'>تایید پرداخت</button>";
                                                                break;
															case 101:
                                                                echo "<button class='form-control'>تایید پرداخت</button>";
                                                                break;
                                                        }
														}
                                                        ?>
                                                    
													<?php
														{
														if($transaction->checkout == "refund")
														echo "<button class='form-control btn-danger'>لفو و تسویه</button>";			
														}
													 ?>

													</th>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
														
                        </div>	
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">بستن</button>
                                        </div>
                                    </div>
                                </div>
                            </div>





 							<div class="modal fade" id="modal-transaction">
                                <div class="modal-dialog" style="width: 67%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title modal-title box-header with-border box-title btn btn-facebook ">بروزرسانی تراکنش رویداد</h4>
                                        </div>
                                        <div class="modal-body">
															    <div class="box-body">
                            <div class="box-body no-padding">
									<div  style="padding: 2%;">

									<p class="vazir small text-danger"><i class="fa fa-exclamation-triangle align-middle ml-2"></i>  مدیریت محترم؛ مطابق با دستور بانک مرکزی جمهوری اسلامی ایران کلیه بروزرسانی تراکنشات جاری این سامانه در رونوشت ارسالی 48 ساعته بانک به سرور مرکزی سامانه اعمال خواهد شد.</p>
									
									<p class="vazir small text-danger"><i class="fa fa-exclamation-triangle align-middle ml-2"></i> نتایج بروزرسانی تراکنش بانکی مورد نظر پس از ارسال به سرور در تمام ناحیه مالی رویداد جاری و سامانه از جمله فاکتور رسمی ، گزارشات تراکنش مالی و... اعمال خواهد شد.</p>
									<p class="vazir small text-success"><i class="fa fa-spinner align-middle ml-2"></i> هرگونه اعمال تغییرات مستقل از داده ها و اسناد مالی پرداخت یار بانک مرکزی می باشد.</p>
									<hr>
                            <div class="form-group">
                                <label for="exampleInputPassword0">رویداد جاری</label>
                                <input type="text" class="form-control" value="<?php echo 'سامانه برتا (کسب و کارخرد - مهدی نوبهاری /1060420961)'.' - '.$webinar_info->title ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword0">اسنادمالی سامانه</label>
                                <input type="text" class="form-control" value="<?php echo 'رونوشت اسناد مالی بانک مرکزی جمهوری اسلامی ایران - سامانه برتا ( مهدی نوبهاری/1060420961) شش ماهه دوم 1401 - سرور 48 ساعته مرکزی' ?>" readonly>
                            </div>
							<form action="<?php $this->url('transaction/edit_amount_trnsaction')?>" method="post">
                           <div class="form-group">
                                <label for="exampleInputPassword0">شماره سفارش تراکنش بانکی</label>
                                <input type="text" class="form-control" name="info[order_id]" minlength="7" maxlength="7" placeholder="لطفا شماره سفارش هفت رقمی تراکنش رویداد جاری را وارد نمایید" required>
                           </div>
						   <div class="form-group">
                                <label for="exampleInputPassword0">مبلغ بروز تراکنش بانکی (به ریال)</label>
                                <input type="text" class="form-control" name="info[amount]" placeholder="لطفا مبلغ تراکنش شماره سفارش مورد نظر را به ریال وارد نمایید" required>
								<input type="hidden" name="info[webinar_id]" value="<?php echo $id_webinar; ?>">
                        	</div>
							<button type="submit" class="btn btn-linkedin form-control">ثبت بروزرسانی تراکنش</button>
							</form>
							</div>
                            </div>
														
                        </div>	
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">بستن</button>
                                        </div>
                                    </div>
                                </div>
                            </div>




							 	<div class="modal fade" id="modal-defaults">
                                <div class="modal-dialog" style="width: 67%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title modal-title box-header with-border box-title btn btn-facebook ">تراکنشات گواهینامه رویداد</h4>
                                        </div>
                                        <div class="modal-body">
										<div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">نام و نام خانوادگی</button></button></th>
                                        <th scope="col"><button class="form-control">کد استعلام</button></th>
                                        <th scope="col"><button class="form-control">تاریخ صدور</button></th>
                                        <th scope="col"><button class="form-control">شماره سفارش</button></th>
										<th scope="col"><button class="form-control">تاریخ پرداخت وجه</button></th>
										<th scope="col"><button class="form-control">وضعیت</button></th>
										<th scope="col"><button class="form-control">نمایش</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($info_certificate_webinar)):
                                        foreach ($info_certificate_webinar as $key=>$info_certificate):
                                            ?>
                                            <tr>
                                                <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-soundcloud"><?php echo $info_certificate->fullname;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-dropbox"> <?php echo $info_certificate->code_certificate;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-facebook "><?php echo $info_certificate->date_issued;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-facebook "><?php echo $info_certificate->order_id;?></button></th>
												<th scope="row"><button class="form-control btn btn-facebook "><?php echo $info_certificate->date_peyment;?></button></th>
												<?php if($info_certificate->position == "organizer"):?>
                                                <th scope="row"><button class="form-control btn btn-danger">مدرس رویداد</button></th>
												
												<?php else: ?>
                                                <th scope="row"><button class="form-control btn btn-warning">شرکت کننده</button></th>
												<?php endif; ?>
												<?php if($info_certificate->position == "organizer"):?>
									<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$info_certificate->id_webinar".'/'."$info_certificate->id_user".'/'."$info_certificate->fullname") ?>">	
									<?php endif;?>
												<?php if($info_certificate->position == "participant"):?>
									<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$info_certificate->id_webinar".'/'."$info_certificate->id_user".'/'."approved") ?>">	
									<?php endif;?>
												<th scope="row"><button class="form-control btn btn-success">دریافت</button></th>
												</form>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
									<?php if(count($info_certificate_webinar) == 0): ?>
									<div class="alert alert-danger" style="text-align:center!important">
									براساس آخرین اطلاعات دریافت شده از سامانه ،هیچ گواهینامه رسمی ای برای این رویداد صادر نشده است.
									<?php endif;?>
                            </div>
                        </div>
                    </div>
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">بستن</button>
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





