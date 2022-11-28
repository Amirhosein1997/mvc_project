<?php $this->include('admin.layouts.header'); ?>
<!-- Content Wrapper. Contains page content -->
<?php
if ($_SESSION['adminbertapanel']) :
?>

        <?php
        $info_request_meetingrooms = new \application\model\Meetingroom();
		$info_codes_meetingroom = new \application\model\Meetingroom();
		$info_documents_meetingroom = new \application\model\Meetingroom();
        $info_meetingroom = new \application\model\Meetingroom();
        $info_meetingroom = $info_meetingroom->findlogo('info_document_meetingroom_tbl','code_meetingroom' , $info_request_meetingroom->code_meetingroom);
		$info_codes_meetingroom = $info_codes_meetingroom->all_meeting_user('info_code_meetingroom_tbl','code_meetingroom',$info_request_meetingroom->code_meetingroom); 
		$info_documents_meetingroom = $info_documents_meetingroom->all_meeting_user('info_document_meetingroom_tbl','code_meetingroom',$info_request_meetingroom->code_meetingroom);
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
					<div class="row g-0">
                        <div class="col-md-2">
                            <!--todo image user-->
                            <img src="<?php if (isset($info_request_user)){echo '../../../'.$info_request_user->img;} ?>" class="rounded mx-auto d-block" alt="..." style="width: 100%; height:auto">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail0">نام:</label>
                                    <span class="form-control" id="exampleInputEmail0" disabled=""><?php echo $info_request_user->name ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">نام خانوادگی:</label>
                                    <span class="form-control" id="exampleInputEmail1" disabled=""><?php echo $info_request_user->family ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail2">کدملی:</label>
                                    <span class="form-control" id="exampleInputEmail2" disabled=""><?php echo $info_request_user->mellicode ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail5">مدرک تحصیلی:</label>
                                    <span class="form-control" id="exampleInputEmail5" disabled=""><?php echo $info_request_user->degree ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail5">رشته تحصیلی:</label>
                                    <span class="form-control" id="exampleInputEmail5" disabled=""><?php echo $info_request_user->field ?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail3">تلفن تماس:</label>
                                    <span class="form-control" id="exampleInputEmail3" disabled=""><?php echo $info_request_user->phone ?> </span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail3">آدرس ایمیل :</label>
                                    <span class="form-control" id="exampleInputEmail3" disabled=""><?php echo $info_request_user->email ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="col-md-2"></div>
                            <div class="box-group col-md-10" id="accordion">
                                <div class="panel box box-primary">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="true" class="collapsed">
                                                مشاهده بیوگرافی برگزارکننده
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne1" class="panel-collapse collapse" aria-expanded="true" style="height: 0px;">
                                        <div class="box-body">
    										<?php echo $info_request_user->biography ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
     </div>
    </section>


	 <section class="content">
	 <div class="row" style="margin-top: 3%;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">اطلاعات اتاق جلسه</h3>
                    </div>
                    <div class="card mb-3">
					<div class="row g-0" style="padding: 43px;">
					<div class="table-responsive">
					<p style="background-color: #ffd5db78;text-align:center;border: 2px solid;font-size: large;">آخرین وضعیت اتاق جلسه</p>
                    <table id="myTable" class="table table-bordered" style="background-color: #ffd5db78;">
                        <thead>
                        <tr>
                            <th>عنوان اتاق</th>
                            <th>متقاضی</th>
                            <th>تاریخ درخواست</th>
                            <th>کد استعلام</th>                            
							<th>وضعیت</th>
							<th>ویرایش</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $info_request_meetingroom->titleroom ?></td>
                            <td><?php echo $info_request_meetingroom->titleorgnization ?></td>
                            <td><?php echo $info_request_meetingroom->date_register ?></td>
                            <td><?php echo $info_request_meetingroom->code_meetingroom ?></td>
							<td>
							<div class="form-row">
							<?php 
							switch($info_request_meetingroom->status)
							{
								case '0':
								echo "<button class='btn btn-sm btn-danger form-control'> <i class='fa fa-pencil-square-o' aria-hidden='true'></i> درحال بررسی</button>";
								break;
								case '1':
								echo "<button class='btn btn-sm btn-success form-control'><i class='fa fa-handshake-o' aria-hidden='true'></i>تایید اتاق</button>";
								break;
								case '4':
								echo "<button class='btn btn-sm btn-primary form-control'><i class='fa fa-inbox' aria-hidden='true'></i>بایگانی</button>";
								break;	
								case '3':
								echo "<button class='btn btn-sm btn-warning form-control'><i class='fa fa-inbox' aria-hidden='true'></i>برگزار شده</button>";
								break;								

							}
							?>
	
							</div>
							</td>
							<td>	
							<form method="post" action="<?php $this->url('manage_meetingroom/edit_info_meetingroom') ?>" target="_blank">
							<input type="hidden" name="code" value="<?php echo $info_request_meetingroom->code_meetingroom ?>">
							<button type="submit" class='btn btn-sm btn-primary form-control'><i class="fa fa-paint-brush align-middle"></i></button>
							</form>
							</td>
                        </tr>
                        </tbody>
                    </table>


			 <div class="table-responsive">
					<p style="background-color: #ffd92078;text-align:center;border: 2px solid;font-size: large;">وضعیت پرداخت حق الزحمه اتاق جلسه</p>
                    <table id="myTable" class="table table-bordered" style="background-color: #ffd92078;">
                        <thead>
                        <tr>
                            <th>تاریخ فاکتور</th>
                            <th>مبلغ</th>
                            <th>تاریخ پرداخت</th>
                            <th>کد رهگیری پرداخت</th>
                            <th>وضعیت</th>
                        </tr>
                        </thead>
                        <tbody>
<?php
						$info_transaction_meetingroom = new \application\model\Transaction();
        				$info_transaction_meetingroom = $info_transaction_meetingroom->check_peyment_meetingroom('transaction_tbl', $info_request_meetingroom->id ,$info_request_user->phone , '300000');
						 ?>
                        <tr>
                            <td style=" direction: ltr;float: right;"><?php echo $info_request_meetingroom->date_register;?></td>
                            <td>300/000 ریال</td>
							<?php if($info_transaction_meetingroom): ?>
                            <td><?php echo $info_transaction_meetingroom->date_orginal;?></td>
							<?php else : ?>
							<td>عدم پرداخت</td>
							<?php endif; ?>

							<?php if($info_transaction_meetingroom): ?>
                            <td><?php echo $info_transaction_meetingroom->track_id;?></td>
							<?php else : ?>
							<td>عدم پرداخت</td>
							<?php endif; ?>

							<?php if($info_transaction_meetingroom): ?>
							<td><button class="btn btn-success form-control">پرداخت موفق</button></td>
							<?php else : ?>
							<td><button class="btn btn-sm btn-danger form-control"> <i class="fa fa-money" aria-hidden="true">   عدم پرداخت  </i>
</button></td>
							<?php endif; ?>
                        </tr>
                        </tbody>
                    </table>	


                <div class="table-responsive">
					<p style="background-color: lightblue;text-align:center;border: 2px solid;font-size: large;">وضعیت کدهای تعریف شده اتاق جلسه</p>
                    <table id="myTable" class="table table-bordered" style="background-color: lightblue;">
                        <thead>
                        <tr>
                            <th>سطح</th>
                            <th>عنوان کد</th>
                            <th>موجودی باقی مانده</th>
                            <th>اقدامات</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php foreach($info_codes_meetingroom as $key=>$info_code_meetingroom): ?>	
						<div class="code_wrapper">
                        <tr>
                            <td>
							<?php
							switch($info_code_meetingroom->level)
							{
								case 'presenter':
								echo "<button class='btn btn-sm btn-danger form-control'>مدیر</button>";
								break;
								case 'participant':
								echo "<button class='btn btn-sm btn-success form-control'>َشرکت کننده</button>";
								break;
							}
							?>
							</td>
                        	<td><input type="text" class="form-control"  value="<?php echo $info_code_meetingroom->code;?>" readonly></td>
                            <td><input type="text" class="form-control"  value="<?php echo $info_code_meetingroom->usage_number;?>" readonly></td>        
                            <td>
							<form method="post" action="<?php $this->url('manage_meetingroom/check_inventory') ?>" target="_blank">
							<input type="hidden" name="code" value="<?php echo $info_code_meetingroom->code ?>">
							<button type="submit" class='btn btn-sm btn-primary form-control'> <i class="fa fa-pie-chart" aria-hidden="true"> جزئیات استفاده و شارژ</i></button>
							</form>
						</td>

                        </tr>
						</div>
       					<?php endforeach; ?>
        
                        </tbody>
                    </table>	

					 <div class="table-responsive">
					<p style="background-color: #a8db9c78;text-align:center;border: 2px solid;font-size: large;r">مستندات ارسالی اتاق جلسه</p>
                    <table id="myTable" class="table table-bordered" style="background-color: #a8db9c78;">
                        <thead>
                        <tr>
                            <th>ردیف</th>
							<th>موضوع</th>
                            <th>نوع فایل</th>
							<th>زمان آپلود</th>
							<th>وضعیت</th>
							<th>ویرایش</th>
                        </tr>
                        </thead>
                        <tbody>
	<?php foreach($info_documents_meetingroom as $key=>$info_document_meetingroom): ?>
                        <tr>
                            <td><?php echo $key+1;?></td>
                            <td>
							<?php
								switch($info_document_meetingroom->part)
								{
									case 'logo':
									echo 'لوگو اتاق';
									break;
									case 'attach':
									echo 'فایل ضمیمه';
									break;
									case 'proceedings':
									echo 'فایل صورتجلسه';
									break;									
								}
							?>
							</td>
                            <td><?php echo $info_document_meetingroom->type;?></td>
							<td><?php echo $info_document_meetingroom->date;;?></td>
                            <td>
							<a href="<?php $this->url($info_document_meetingroom->adress) ?>" class='btn btn-sm btn-primary form-control' target="_blank"><i class="fa fa-file-code-o" aria-hidden="true"></i>
مشاهده فایل</a>
							</td>
							<td>
							<form method="post" action="<?php $this->url('manage_meetingroom/edit_uploadfile') ?>" target="_blank">
							<input type="hidden" name='id_file' value="<?php echo $info_document_meetingroom->id; ?>">
							<button type="submit" class="btn btn-sm btn-warning form-control"> <i class="fa fa-paint-brush align-middle"></i> ویرایش کنید</button>
							</form>
							</td>
                        </tr>
						<?php endforeach; ?>
						<tr>
                            <td><?php echo count($info_documents_meetingroom)+1;?></td>
                            <td>فایل ضمیمه</td>
                            <td>عدم بارگذاری</td>
							<td>عدم بارگذاری</td>
                            <td>
							<form method="post" action="<?php $this->url('manage_meetingroom/upload_attachfile') ?>" target="_blank">
							<input type="hidden" name='upload_attach' value="<?php echo $info_request_meetingroom->code_meetingroom; ?>">
							<button type="submit" class="btn btn-sm btn-warning form-control"><i class="fa fa-upload" aria-hidden="true"></i>   بارگذاری کنید</button>
							</form>
							</td>
							<td><button class="btn btn-sm btn-danger form-control"><i class="fa fa-ban" aria-hidden="true"></i></button></td>
                        </tr>
						<tr>
                            <td><?php echo count($info_documents_meetingroom)+2;?></td>
                            <td>صورتجلسه</td>
                            <td>عدم بارگذاری</td>
							<td>عدم بارگذاری</td>
                            <td>
							<form method="post" action="<?php $this->url('manage_meetingroom/upload_proceedings') ?>" target="_blank">
							<input type="hidden" name='upload_proceedings' value="<?php echo $info_request_meetingroom->code_meetingroom; ?>">
							<button type="submit" class="btn btn-sm btn-warning form-control"> <i class="fa fa-upload" aria-hidden="true"></i>
بارگذاری کنید</button>
							</form>
							</td>
							<td><button class="btn btn-sm btn-danger form-control"><i class="fa fa-ban" aria-hidden="true"></i></button></td>
                        </tr>								
                        </tbody>
                    </table>
                </div>
					<hr>
					<div class="table-responsive">
					<p style="background-color: #a8db9c78;text-align:center;border: 2px solid;font-size: large;r">دریافت گزارشات اتاق جلسه</p>
                    <table id="myTable" class="table table-bordered" style="background-color: #6dab9f78;">
                        <thead>
                        <tr>
                            <th>فاکتور رسمی</th>
                            <th>گزارش حضور</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
							<?php if($info_transaction_meetingroom): ?>
                            <td><a href="<?php echo $this->url('transaction/get_factor_meetingroom'.'/'."$info_request_meetingroom->id") ?>" class="form-control btn btn-success" target="_blank">دریافت فاکتور رسمی وبینار</a></td>
							<?php else : ?>
							<td><button class="btn btn-sm btn-danger form-control"> <i class="fa fa-money" aria-hidden="true"> عدم صدورفاکتور بدلیل عدم پرداخت  </i>
</button></td>
							<?php endif; ?>

						<td><a class="btn btn-sm btn-primary form-control" href="<?php echo $this->url('excel_export/excel_export_meetingroom/'.$info_request_meetingroom->code_meetingroom)?>">دریافت لیست حضورو غیاب</a></td>

                        </tr>
                        </tbody>
                    </table>
</div>
            </div>
        </div>

            </div>
                    </div>
                </div>
                
            </div>
     </div>
    </section>




		 <section class="content">
	 <div class="row" style="margin-top: 3%;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">پیکربندی وضعیت اتاق جلسه</h3>
                    </div>
                    <div class="card mb-3">
					<div class="row g-0" style="padding: 43px;">
					<form method="post" action="<?php $this->url('manage_meetingroom/change_status') ?>">
                    <table id="myTable" class="table table-bordered" style="background-color: #ffd5db78;">
                        <thead>
                        <tr>
                            <th>تنظیمات </th>
                            <th>پیکربندی</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>اتاق جلسه</td>
                            <td>
							<div class="radio">
							<label><input type="radio" name="status[]" value="1" <?php if($info_request_meetingroom->status == 1){echo 'checked';} ?>>با فعالسازی اتاق جلسه جهت بهره مندی در تاریخ <?php echo $info_request_meetingroom->date." - ".$info_request_meetingroom->time." "  ?>موافقت می گردد</label>
							</div>

							<div class="radio">
							<label><input type="radio" name="status[]" value="0" <?php if($info_request_meetingroom->status == 0){echo 'checked';} ?>>با غیرفعالسازی اتاق جلسه جهت بهره مندی در تاریخ <?php echo $info_request_meetingroom->date." - ".$info_request_meetingroom->time." "  ?>موافقت می گردد</label>
							</div>

							<div class="radio">
							<label><input type="radio" name="status[]" value="3" <?php if($info_request_meetingroom->status == 3){echo 'checked';} ?>>اتاق جلسه در مورخه با موفقیت<?php echo $info_request_meetingroom->date." - ".$info_request_meetingroom->time." "  ?>برگزار گردید و به جلسات برگزارشده منتقل گردد</label>
							</div>

							<div class="radio">
							<label><input type="radio" name="status[]" value="4" <?php if($info_request_meetingroom->status == 4){echo 'checked';} ?>>باتوجه به عدم برگزاری جلسه در مورخه <?php echo $info_request_meetingroom->date." - ".$info_request_meetingroom->time." "  ?>به جلسات بایگانی شده منتقل گردد</label>
							</div>
							
							</td>									
                        </tr>
                        </tbody>
                    </table>
					<input type="hidden" name="code" value="<?php echo $info_request_meetingroom->code_meetingroom?>">
					<button type="submit" class="btn btn-sm btn-success" style="float: left;"> <i class="fa fa-check-square-o" aria-hidden="true"></i>  تایید و ارسال  </button>					
					</form>
					</div>

				</div>
			</div>
	</div>				
	</div>
<?php
else:
    $this->route('user/login/user');
    ?>
<?php endif;?>
<?php $this->include('admin.layouts.footer'); ?>


