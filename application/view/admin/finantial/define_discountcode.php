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
                            <h3 class="box-title">پیکربندی کدتخفیف رویداد</h3>
                        </div>
                        <form class="form-group" method="post" action="<?Php echo $this->url('transaction/create_discount_code/'.$id_webinar);?>">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group col-md-10 row">
                                            <div class="col-md-4">
                                                <label for="exampleInputPassword0">عنوان کد تخفیف</label>
                                                <input type="text" class="form-control" name="title" placeholder="لطفا عنوان کد تخفیف مورد نظر را بنویسید ...">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="exampleInputPassword0">درصد</label>
                                                <input type="text" class="form-control" name="percent" placeholder="لطفا درصد کد تخفیف مورد نظر را بنویسید ...">
                                            </div>
											<div class="col-md-4">
                                                <label for="exampleInputPassword0">تعداد کاربرمجاز</label>
                                                <input type="number" class="form-control" name="usernumber" placeholder="تعداد کاربر مجاز استفاده از کد تخفیف ...">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="exampleInputPassword0">.</label>
                                            <input type="submit" name="submit" class="form-control btn btn-primary" value="ایجاد کدتخفیف">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">لیست کدتخفیف های ایجاد شده برای رویداد</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">عنوان کدتخفیف</button></button></th>
                                        <th scope="col"><button class="form-control">زمان ایجاد</button></th>
                                        <th scope="col"><button class="form-control">درصد</button></th>
                                        <th scope="col"><button class="form-control">ایجاد کننده</button></th>
										<th scope="col"><button class="form-control">اعتبار باقی مانده</button></th>
										<th scope="col"><button class="form-control">جزئیات استفاده</button></th>
                                        <th scope="col"><button class="form-control">حذف کد</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($info_discountcodes)):
                                        foreach ($info_discountcodes as $key=>$info_discountcode):
                                            ?>
                                            <tr>
                                                <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-soundcloud"><?php echo $info_discountcode->code;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-dropbox"> <?php echo $info_discountcode->date;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-facebook "><?php echo $info_discountcode->discount;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-success">مهدی نوبهاری</button></th>
												<?php if($info_discountcode->number == 0):?>
                                                <th scope="row"><button class="form-control btn btn-danger">اتمام ظرفیت</button></th>
												
												<?php else: ?>
                                                <th scope="row"><button class="form-control btn btn-warning"><?php echo $info_discountcode->number ?> نفر</button></th>
												<?php endif; ?>	
																								<th scope="row"><a class="form-control btn btn-primary" href="<?php echo $this->url('transaction/show_use_discount/'.$info_discountcode->id_webinar.'/'.$info_discountcode->code); ?>"><i class=" fa fa-eye  "></i></a></th>										
                                                <th scope="row"><a class="form-control btn btn-danger" href="<?php echo $this->url('transaction/delete_discountcode/'.$info_discountcode->id_webinar.'/'.$info_discountcode->id); ?>">حذف</a></th>

                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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




