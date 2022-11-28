<div class="card my-5 pb-4 text-center">
    <div class="card-header">
        <h6 class="mt-2 font-14"> دوره های ثبت نامی شما در سامانه برتا  </h6>
    </div>

    <div class="card-body">
        <?php
        $info_reg_webinars_user = new \application\model\Webinar();
        $info_user = new \application\model\User();
        $info_user = $info_user->find('users_tbl' , 'phone' , $_SESSION['login_user']);
        $info_reg_webinars_user = $info_reg_webinars_user->all('info_register_webinar_tbl' , 'id_user' , $info_user->id);
        foreach ($info_reg_webinars_user as $key=>$info_reg_webinar_user) :
        $info_webinar = new \application\model\Webinar();
        $info_webinar = $info_webinar->find('webinars_tbl','id' , $info_reg_webinar_user->id_webinar);

        ?>
        <div class="card mb-3 pb-4 shadow-sm">

            <div class="card-body d-md-flex">
                <img src="<?php $this->asset('../'.$info_webinar->pic_two) ?>" class="img-fluid float-lg-right mb-2" alt="html" style="width: 250px!important; height: 138.89px!important;">
                <div class="d-inline-block pr-3 text-justify my-course">
                    <a href="<?php $this->url("app/course/".$info_webinar->id) ?>" class="mb-3 d-block text-center text-dark" target="_blank"><?php echo $info_webinar->title?></a>
                    <small>
                    <?php echo substr($info_webinar->description,0,300)?>
                    </small>
                    <div class="btn-row">
					<?php if($info_reg_webinar_user->checkout == "checkout"): ?>
           <button class="btn btn-outline-success rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download<?php echo $key;?>">مشاهده اطلاعات اختصاصی شما در دوره</button>
                   <?php endif; ?>
				   	<?php if($info_reg_webinar_user->checkout == "refund"): ?>
           <button class="btn btn-danger rounded-pill float-left mt-3 font-12">لغو ثبت نام و تسویه شد</button>
                   <?php endif; ?>
				    <a href="<?php $this->url("app/course/".$info_webinar->id) ?>" class="btn btn-outline-info rounded-pill float-left mt-3 font-12"target="_blank" >مشاهده اطلاعات دوره در سایت</a>
                    </div>
                </div>
            </div>
            <div class="mt-5 collapse" id="download<?php echo $key;?>" >
                <div class="table-responsive ">
                    <span class="font-14">دریافت اطلاعات متمرکز کاربـــر | سامانه برتـــا</span><hr>
                    <table id="myTable" class="table">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th> عنوان دوره</th>
                            <th> تاریخ برگزاری</th>
                            <th>تعداد جلسات</th>
                            <th> تاریخ ثبت نام</th>
                            <th>هزینه رویداد بدون تخفیف </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $info_user->name;?></td>
                            <td><?php echo $info_user->family;?></td>
                            <td><?php echo $info_webinar->title;?></td>
                            <td>
                                <?php
                                if (strpos($info_webinar->date,',')) {
                                    $date_webinar = explode(',', $info_webinar->date);
                                    $time_webinar = explode(',', $info_webinar->time);
                                    echo "از" . $date_webinar[0]."-".$time_webinar[0];
                                }
                                else{
                                    echo $info_webinar->date."-".$info_webinar->time;
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if (strpos($info_webinar->date,',')){
                                    $date_webinar = explode(',',$info_webinar->date);
                                    echo count($date_webinar)."جلسه";
                                }
                                ?>
                            </td>
                            <td><?php echo $info_reg_webinar_user->register_date;?></td>
                            <td><?php echo $info_reg_webinar_user->price." "."ریال";?></td>

                        </tr>

                        </tbody>
                    </table>
                    <hr>
                    <span class="font-13"><strong><?php echo $info_user->name." "?></strong>عزیز :</span><br>
                    <span class="font-13  btn-outline-light alert-warning">تعداد ورود شما به جلسه آنلاین درسامانه محدود است . لطفا تنها در زمان برگزاری جلسه روی گزینه "ورود به جلسه آنلاین " کلیک کنید. </span>
					<?php if($info_webinar->final_status == 1 and ($info_webinar->type == 0 or $info_webinar->type == 2)): ?>
                    <a class="btn btn-outline-info btn-block mt-3 font-14" href="<?php echo $info_reg_webinar_user->skyroom_link?>">ورود به جلسه آنلاین</a>
					<?php endif; ?>
					<?php if($info_webinar->price !== '0'): ?>
                    <a class="btn btn-outline-info btn-block mt-3 font-14" href="<?php echo $this->url('transaction/get_factor_participant/'.$info_reg_webinar_user->order_id);?>" target="_blank">دریافت فاکتور آنلاین</a>
					<?php endif; ?>
									

						<?php
						$info_peyment_certificate_user = new \application\model\Transaction();
						$info_peyment_certificate_user = $info_peyment_certificate_user->check_peyment_certificate_participant('transaction_tbl', $info_webinar->id ,$info_user->phone , '200000','certificate');
						if($info_webinar->final_status == 3):
						 ?>
						<?php if($info_webinar->status_meetingroom == 2 or $info_webinar->status_meetingroom == 3 ): ?> 
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/free_certificate_issue/'."$info_webinar->id".'/'."$info_user->id".'/'."participant") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه عادی رویداد</button>
						</form>	
						<?php if(!$info_peyment_certificate_user): ?>	
						<form method="post" action="<?php $this->url('transaction/create_transaction/'."$info_webinar->id".'/'."200000".'/'."certificate")?>">
 						<button class="btn btn-outline-danger btn-block mt-3 font-14" style="border-radius: 63px;">پرداخت هزینه صدور گواهینامه رسمی رویداد | 20 هزارتومان</button>
						</form>	
						<?php endif; ?>
						<?php if($info_peyment_certificate_user): ?>
						<form method="post" target="_blank" action="<?php $this->url('manage_webinars/certificate_issue/'."$info_webinar->id".'/'."$info_user->id".'/'."approved") ?>">
                   		 <button class="btn btn-outline-success btn-block mt-3 font-14">دریافت گواهینامه رسمی رویداد</button>
						</form>	
						<?php endif; ?>
						<?php endif; ?>
						<?php endif; ?>
						
                </div>


            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>