
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>سامانه جامع برتا - صدور فاکتور فروش</title>
    <style>
        @media print {
            #printPageButton {
                display: none;
            #notprintPageButton{
                display: block;
            }
        }
        }

    </style>
</head>
<body dir="rtl">


<div class="container-xl" style="margin-top: 100px;">
    <button class="btn btn-outline-dark form-control" onclick="window.print()" id="printPageButton"> چاپ صورتحساب</button>
<hr>
    <div class="row">
        <div class="col-3 text-center" style="color: #007b99">https://www.eberta.ir<img src="<?php echo $this->asset('img/bertalogo.jpeg');?>" style="width: 57px"></div>
        <div class="col-6 text-center"><h3 class="font-weight-bold">سامانه جامع برتا - صورتحساب خرید رویداد</h3></div>

        <div class="col-3 text-right">
            <p>شماره سفارش: <?php 
			//var_dump($info_factor);die();
			if($info_webinar->price == 0){echo '758'.$info_factor->phone; } else {echo $info_factor->order_id;} ?></p>
            <p style="direction: ltr">تاریخ سفارش: <?php if($info_webinar->price == 0){$date = new application\controller\Date(); $date = $date->jdate('Y/n/j - H:i:s'); echo $date; } else {echo $info_factor->date_orginal;} ?></p>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center" colspan="11">مشخصات فروشنده</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="11" class="text-right">
                    <div class="row">
                        <div class="col-4">
                            <p>نام شخص حقیق / حقوقی: دانشگاه آزاد اسلامی واحد نیشابور - هسته فناور برتا</p>
                            <p>آدرس کامل: استان خراسان رضوی،  نیشابور،  بلوار پژوهش،  مجتمع دانشگاه آزاد اسلامی واحد نیشابور، هسته فناوربرتا</p>
                        </div>
                        <div class="col-4">
                            <p>کدپستی :۹۳۱۹۹۷۵۸۵۳</p>
                            <p>تلفن تماس :42621901-051 | داخلی 215</p>
                        </div>
                        <div class="col-4">
                            <p>پست الکترونیک : info@eberta.ir</p>
                            <p>نمابر :42615472-051</p>
                        </div>

                    </div>
                </td>
            </tr>
            </tbody>
            <thead>
            <tr>
                <th class="text-center" colspan="11">مشخصات خریدار</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="11" class="text-right">
                    <div class="row">
                        <div class="col-4">
                            <p>نام شخص حقیق / حقوقی: <?php if($info_webinar->price == 0){echo $info_factor->name." ".$info_factor->family; } else {echo $info_factor->order_id;}?></p>
                        </div>
                        <div class="col-4">
                            <p>شماره تماس :<?php if($info_webinar->price == 0){echo $info_factor->phone; } else {echo $info_factor->phone;} ?></p>
                        </div>
                        <div class="col-4">
                            <p>وضعیت تراکنش بانکی: تایید تراکنش توسط پذیرنده</p>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
            <thead>
            <tr>
                <th class="text-center" colspan="11">مشخصات رویداد خریداری شده</th>
            </tr>
            </thead>
            <thead>
            <tr class="text-center">
                <th>ردیف</th>
                <th>شماره سفارش</th>
                <th>کدرهگیری</th>
                <th>عنوان رویداد</th>
                <th>زمان برگزاری</th>
                <th>تعداد جلسات</th>
                <th>تاریخ پرداخت</th>
                <th>مبلغ واحد (ریال)</th>
                <th>مبلغ تخفیف (ریال)</th>
                <th>مبلغ کل (ریال)</th>
                <th>مبلغ کل پس از تخفیف (ریال)</th>

            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td>۱</td>
                <td><?php if($info_webinar->price == 0){echo 'IAUN'.$info_factor->phone; } else {echo $info_factor->order_id;} ?></td>
                <td><?php if($info_webinar->price == 0){echo '1401'.$info_factor->phone; } else {echo $info_factor->track_id;} ?></td>
                <td><?php if($info_webinar->price == 0){echo $info_webinar->title; } else {echo $info_factor->description;} ?></td>
                <td>
                    <?php
					if($info_webinar->price == 0)
					{
echo 'جلسه1 | ویژه دانشجویان دختر 1401/8/15 - از 9:00 تا 14:00
 - جلسه2 | ویژه دانشجویان پسر 1401/8/16 - از 9:00 تا 14:00
';
					}
					else
					{
                    if (strpos($info_webinar->date,',')) {
                        $date_webinar = explode(',', $info_webinar->date);
                        $time_webinar = explode(',', $info_webinar->time);
                        echo "از" . $date_webinar[0]."-".$time_webinar[0];
                    }
                    else{
                        echo $info_webinar->date."-".$info_webinar->time;
                    }
					}

                    ?>

                </td>
                <td>                                <?php
                    if (strpos($info_webinar->date,',')){
                        $date_webinar = explode(',',$info_webinar->date);
                        echo count($date_webinar)." "."جلسه";
                    }
					else{
						echo "1 جلسه";
					}
                    ?></td>
                <td><?php if($info_webinar->price == 0){echo 'رایگان'; } else {echo $info_factor->date_orginal;}  ?></td>
                <td><?php if($info_webinar->price == 0){echo 'رایگان'; } else {echo number_format($info_webinar->price,0);}  ?></td>
                <td><?php
                   
                    if($info_webinar->price == 0){echo 'رایگان'; } else { $amount_discount = $info_webinar->price - $info_factor->amount; echo number_format($amount_discount,0);} 
                    ?></td>
                <td><?php if($info_webinar->price == 0){echo 'رایگان'; } else {echo number_format($info_factor->amount,0);} ?></td>
                <td><?php if($info_webinar->price == 0){echo 'رایگان'; } else {echo number_format($info_factor->amount,0);}?></td>
            </tr>
            <tr>
                <th colspan="11" class="text-center">جمع کل پرداختی :  <?php if($info_webinar->price == 0){echo '0'; } else {echo number_format($info_factor->amount,0);} ?>  ریال</th>
            </tr>
            <tr>
                <th colspan="5" class="text-right">شرایط و نحوه فروش: &nbsp&nbsp&nbsp&nbsp غیرنقدی &nbsp&nbsp&nbsp&nbsp درگاه آنلاین آی دی پی پرداخت یار شاپرک بانک مرکزی - سامانه جامع برتا</th>
                <th colspan="6" class="text-right"> توضیحات: صدور فاکتور پرداخت با شماره استعلام<?php  if($info_webinar->price == 0){echo 'IAUN'.$info_factor->phone; } else {echo " ".$info_factor->track_id;}  ?> بابت رویداد <?php if($info_webinar->price == 0){echo $info_webinar->title; } else {echo "-".$info_factor->description."-";} ?></th>
            </tr>
            <tr style="padding: 60px 0;">
                <td colspan="5" class="text-right">مهر و امضا فروشنده : دانشگاه آزاد اسلامی واحد نیشابور - هسته فناور برتا</td>
                <td colspan="6" class="text-right"> مهر و امضا خریدار : <?php if($info_webinar->price == 0){echo $info_factor->name." ".$info_factor->family; } else {echo $info_factor->fullname;} ?></td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
