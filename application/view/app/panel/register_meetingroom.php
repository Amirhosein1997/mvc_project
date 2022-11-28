
<div class="card my-5 pb-4 text-center">
    <div class="card-header">
        <h6 class="mt-2 font-14"> گزارش وضعیت اتاق های جلسات درخواستی  </h6>
    </div>
    <div class="card-body">
        <?php
        $info_request_meetingrooms = new \application\model\Meetingroom();
		$info_codes_meetingroom = new \application\model\Meetingroom();
		$info_documents_meetingroom = new \application\model\Meetingroom();
        $info_user = new \application\model\User();
        $info_user = $info_user->find('users_tbl' , 'phone' , $_SESSION['login_user']);
        $info_request_meetingrooms = $info_request_meetingrooms->all_meeting_user('info_meeting_room_tbl' , 'id_req_user' , $info_user->id);
        foreach ($info_request_meetingrooms as $key=>$info_request_meetingroom):
        $info_meetingroom = new \application\model\Meetingroom();
        $info_meetingroom = $info_meetingroom->findlogo('info_document_meetingroom_tbl','code_meetingroom' , $info_request_meetingroom->code_meetingroom);
		$info_codes_meetingroom = $info_codes_meetingroom->all_meeting_user('info_code_meetingroom_tbl','code_meetingroom',$info_request_meetingroom->code_meetingroom); 
		$info_documents_meetingroom = $info_documents_meetingroom->all_meeting_user('info_document_meetingroom_tbl','code_meetingroom',$info_request_meetingroom->code_meetingroom);
        ?>
        <div class="card mb-3 pb-4 shadow-sm">

            <div class="card-body d-md-flex">
                <img src="<?php $this->asset('../'.$info_meetingroom->adress) ?>" class="img-fluid float-lg-right mb-2" alt="html" style="width: 250px!important; height: 138.89px!important;">
                <div class="d-inline-block pr-3 text-justify my-course">
                    <a href="<?php $this->url("app/course/".$info_webinar->id) ?>" class="mb-3 d-block text-center text-dark" target="_blank"><?php echo $info_request_meetingroom->titleroom?></a>
                    <small>
                    <?php echo substr($info_request_meetingroom->ordermeeting,0,300)?>
                    </small>
                    <div class="btn-row">
                    <button class="btn btn-outline-success rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download<?php echo $key;?>"> مشاهده اطلاعات اتاق جلسه</button>
<a href="#" class="btn btn-info rounded-pill float-left mt-3 font-12" target="_blank"><?php echo 'برگزاری در تاریخ'.$info_request_meetingroom->date."-".$info_request_meetingroom->time ?></a>
                    </div>
                </div>
            </div>
            <div class="mt-5 collapse" id="download<?php echo $key;?>" >

			 <div class="table-responsive">
                    <span class="font-14">دریافت اطلاعات متمرکز اتاق جلسه | سامانه برتـــا</span><hr>
					<p style="background-color: #ffd5db78;">آخرین وضعیت اتاق جلسه</p>
                    <table id="myTable" class="table table-bordered" style="background-color: #ffd5db78;">
                        <thead>
                        <tr>
                            <th>عنوان اتاق </th>
                            <th>متقاضی</th>
                            <th>تاریخ درخواست</th>
                            <th>کد استعلام</th>                            
							<th>وضعیت</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $info_request_meetingroom->titleroom;?></td>
                            <td><?php echo $info_request_meetingroom->titleorgnization;?></td>
                            <td><?php echo $info_request_meetingroom->date_register;?></td>
                            <td><?php echo $info_request_meetingroom->code_meetingroom;?></td>
							<td>
							<div class=" d-inline-flex">
							<?php 
							switch($info_request_meetingroom->status)
							{
								case '0':
								echo "<button class='btn btn-sm btn-danger'> <i class='fa fa-pencil-square-o' aria-hidden='true'></i> درحال بررسی</button>";
								break;
								case '1':
								echo "<button class='btn btn-sm btn-success'><i class='fa fa-handshake-o' aria-hidden='true'></i>تایید </button>";
								break;
								case '4':
								echo "<button class='btn btn-sm btn-primary'><i class='fa fa-inbox' aria-hidden='true'></i>بایگانی</button>";
								break;	
								case '3':
								echo "<button class='btn btn-sm btn-warning'><i class='fa fa-inbox' aria-hidden='true'></i>برگزار شده</button>";
								break;;								

							}
							?>
							<div class="mr-1"></div>
							<form method="post" action="<?php $this->url('manage_meetingroom/edit_info_meetingroom') ?>" target="_blank">
							<input type="hidden" name="code" value="<?php echo $info_request_meetingroom->code_meetingroom ?>">
							<button type="submit" class='btn btn-sm btn-primary'><i class="fa fa-paint-brush align-middle"></i></button>
							</form>	
							</div>						
							</td>
                        </tr>
                        </tbody>
                    </table>


			 <div class="table-responsive">
					<p style="background-color: #ffd92078;">وضعیت پرداخت حق الزحمه اتاق جلسه</p>
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
        				$info_transaction_meetingroom = $info_transaction_meetingroom->check_peyment_meetingroom('transaction_tbl', $info_request_meetingroom->id ,$info_user->phone , '300000');
						 ?>
                        <tr>
                            <td><?php echo $info_request_meetingroom->date_register;?></td>
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
							<td><button class="btn btn-success">پرداخت موفق</button></td>
							<?php else : ?>
							<td>
							<form method="post" action="<?php $this->url('transaction/create_transaction/'."$info_request_meetingroom->id".'/'."300000".'/'."meetingroom"); ?>">
							<button class="btn btn-sm btn-danger">پرداخت کنید</button>
							</form>
							</td>
							<?php endif; ?>
                        </tr>
                        </tbody>
                    </table>	


                <div class="table-responsive">
					<p style="background-color: lightblue;">وضعیت کدهای تعریف شده اتاق جلسه</p>
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
						<?php foreach($info_codes_meetingroom as $info_code_meetingroom): ?>
                        <tr>
                            <td>
							<?php
							switch($info_code_meetingroom->level)
							{
								case 'presenter':
								echo "<button class='btn btn-sm btn-danger'>مدیر</button>";
								break;
								case 'participant':
								echo "<button class='btn btn-sm btn-success'>َشرکت کننده</button>";
								break;
							}
							?>
							</td>
                            <td><?php echo $info_code_meetingroom->code;?></td>
                            <td>
							
							<?php
							 if($info_code_meetingroom->usage_number == 0)
							 {
								echo "<button class='btn btn-sm btn-danger'>به اتمام رسیده</button>";

							 }
							 else{
								echo $info_code_meetingroom->usage_number;
							 } 
							 
							 ?>
							
							</td>
                            <td>
							<form method="post" action="<?php $this->url('manage_meetingroom/check_inventory') ?>" target="_blank">
							<input type="hidden" name="code" value="<?php echo $info_code_meetingroom->code ?>">
							<button type="submit" class='btn btn-sm btn-primary'>جزئیات استفاده و شارژ</button>
							</form>
							</td>

                        </tr>
        				<?php endforeach; ?>
                        </tbody>
                    </table>	
					 <div class="table-responsive">
					<p style="background-color: #a8db9c78;">مستندات ارسالی اتاق جلسه</p>
                    <table id="myTable" class="table table-bordered" style="background-color: #a8db9c78;">
                        <thead>
                        <tr>
                            <th>ردیف</th>
							<th>موضوع</th>
                            <th>نوع فایل</th>
							<th>زمان آپلود</th>
							<th>وضعیت</th>
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
							<td><?php echo $info_document_meetingroom->date;?></td>
                            <td>
							<div class="form-row d-inline-flex">
							<a href="<?php $this->url($info_document_meetingroom->adress) ?>" class='btn btn-sm btn-danger' target="_blank">دریافت فایل</a> 
							<div class="mr-1"></div>
							<form method="post" action="<?php $this->url('manage_meetingroom/edit_uploadfile') ?>" target="_blank">
							<input type="hidden" name='id_file' value="<?php echo $info_document_meetingroom->id; ?>">
							<button type="submit" class="btn btn-sm btn-warning">پیکربندی</button>
							</form>	
							</div>						
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
							<button type="submit" class="btn btn-sm btn-primary">بارگذاری کنید</button>
							</form>
							</td>
                        </tr>						
						<?php if($info_request_meetingroom->status == '1' or $info_request_meetingroom->status == '3' or $info_request_meetingroom->status == '4'): ?>						
						<tr>
                            <td><?php echo count($info_documents_meetingroom)+2;?></td>
                            <td>صورتجلسه</td>
                            <td>عدم بارگذاری</td>
							<td>عدم بارگذاری</td>
                            <td>
							<form method="post" action="<?php $this->url('manage_meetingroom/upload_proceedings') ?>" target="_blank">
							<input type="hidden" name='upload_proceedings' value="<?php echo $info_request_meetingroom->code_meetingroom; ?>">
							<button type="submit" class="btn btn-sm btn-warning">بارگذاری کنید</button>
							</form>
							</td>
                        </tr>
						<?php endif; ?>						
                        </tbody>
                    </table>
                </div>
					<?php if($info_request_meetingroom->status == '1' or $info_request_meetingroom->status == '3' or $info_request_meetingroom->status == '4'): ?>
					<div class="table-responsive">
					<p style="background-color: #6dab9f78;">دریافت گزارشات اتاق جلسه</p>
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
			<?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>

</div>

