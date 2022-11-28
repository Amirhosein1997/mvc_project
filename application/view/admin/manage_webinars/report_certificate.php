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
                        <div class="box-header with-border" style="text-align: center!important;">
						<h3 class="box-title btn btn-facebook">لیست گواهینامه های رسمی صادر شده رویداد</h3>
						</div>
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




