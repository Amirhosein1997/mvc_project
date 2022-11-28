<?php $this->include('admin.layouts.header'); ?>
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
                        <h3 class="box-title">گزارش متمرکز سامانه برتا | دریافت لیست شرکت کنندگان</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" >
                        <div class="box-body">
                            <div class="form-group col-md-6">
                                <label>عنوان وبینار</label>
                                <input type="text" class="form-control"  value="<?php echo $info_webinar->title;?>" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>برگزارکننده</label>
                                <input type="text" class="form-control"  value="<?php echo $info_organizer->name." ".$info_organizer->family?>" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>زمان انتشار وبینار</label>
                                <input type="text" class="form-control" value="<?php echo $info_webinar->date_submit ?>" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>زمان دریافت گزارش </label>
                                <input type="text" class="form-control" value="<?php echo $date_get_report;?>" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label>تعداد کاربرثبت نامی</label>
                                <input type="text" class="form-control" value="<?php
                                    $info_reg_paricipants = new \application\model\Webinar();
                                    $info_reg_paricipants = $info_reg_paricipants->all_checkout_webinar('info_register_webinar_tbl','id_webinar' , $info_webinar->id);
									if($status_payment_organizer){
                                    echo (count($info_reg_paricipants)-1)."نفر ";
									}
									else{
                                    echo count($info_reg_paricipants)."نفر ";
									}
                                ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword5">مجموع عواید دریافتی</label>
                                <input type="text" class="form-control" id="exampleInputPassword5" value="<?php
								$sum_pay_Price = 0;
								if($count_register == 0){
								echo 0;
									}
								else{
                    			foreach ($count_register as $key=>$price) {
                       			 $sum_pay_Price = $price->amount + $sum_pay_Price;
                    			}
								echo $sum_pay_Price;
								}
                                ?> ریال "readonly>
                            </div>
                            <a id="printPageButton" class="btn btn-warning form-control" href="<?php echo $this->url('excel_export/export_excel/'.$info_webinar->id.'/'.$info_webinar->title);?>"> دریافت لیست اکسل شرکت کنندگان</a>
                            <p></p>
                            <a id="printPageButton" class="btn btn-success form-control" onclick="window.print()">چاپ گزارش جاری</a>
                        </div>
                        <!-- /.box-body -->
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
                                <th scope="col">راه ارتباطی</th>
                                <th scope="col">زمان ثبت نام در رویداد</th>
                                <th id="printPageButton" scope="col">لینک ورود به جلسه</th>
                                <th scope="col">وضعیت</th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php
                            if (isset($list_participants)):
                                foreach ($list_participants as $key => $list_participant):
									$fullname = $list_participant->name." ".$list_participant->family;
									if($fullname !== $name_user):
                                    $info_participant = new \application\model\User();
                                    $info_participant = $info_participant->find('users_tbl' , 'id' ,$list_participant->id_user);								
                                    ?>
                                    <tr>
										<?php if($status_payment_organizer):?>
										<th scope="row"><?php echo $key?></th>
										<?php endif;
											if(!$status_payment_organizer):
											?>
                                        <th scope="row"><?php echo $key+1 ?></th>
										<?php endif; ?>
                                        <td><?php echo $list_participant->fullname ?></td>
                                        <td>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="true">اطلاعات تماس
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a><?php echo $info_participant->phone ?></a></li>
                                                    <li><a><?php echo $info_participant->email ?></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td><?php echo $list_participant->register_date?></td>

                                        <td  id="printPageButton">
										<?php if($list_participant->checkout =="checkout"): ?>						
										<a href="<?php echo $list_participant->skyroom_link?>" class=" btn btn-primary form-control"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                                                    <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"></path>
                                                </svg>  ورود به جلسه</a>
										<?php endif; ?>
										<?php if($list_participant->checkout =="refund"):?> 
										<button type="submit" class="btn btn-danger form-control">لغو و تسویه شد</button>
										<?php endif; ?>
										</td>
                                        <td>
										<?php if($list_participant->checkout =="checkout"): ?>
										<form action="<?php echo $this->url('transaction/checkout_register_user') ?>" method="post">
										<input type="hidden" name="info[order_id]" value="<?php echo $list_participant->order_id ?>">
										<input type="hidden" name="info[webinar_id]" value="<?php echo $list_participant->id_webinar ?>">
										<input type="hidden" name="info[user_id]" value="<?php echo $info_participant->id ?>">
										<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>حذف کاربر وتسویه</button>
										</form>
										<?php endif; ?>
										<?php if($list_participant->checkout =="refund"):?> 
										<label class=" bg-info small" style="padding:6px ; direction:ltr"><?php echo $list_participant->date_checkout; ?></label>
										<?php endif; ?>
										</td>
                                    </tr>
									<?php endif; ?>
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
<?php $this->include('admin.layouts.footer'); ?>
