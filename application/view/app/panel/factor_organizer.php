
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>سامانه جامع برتا - صدور فاکتور برگزاری رویداد</title>
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
        <div class="col-6 text-center"><h3 class="font-weight-bold">سامانه جامع برتا - صورتحساب برگزاری رویداد</h3></div>

        <div class="col-3 text-right">
            <p>شماره درخواست: <?php echo "berta"."-".$info_webinar->id?></p>
            <p style="direction: ltr">تاریخ سفارش: <?php echo $info_webinar->date_submit?></p>
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
                            <p>نام شخص حقیق / حقوقی: <?php echo $info_webinar->organizer?></p>
                        </div>
                        <div class="col-4">
                            <p>شماره تماس :<?php echo $info_organizer->phone?></p>
                        </div>
                        <div class="col-4">
                            <p>وضعیت تراکنش بانکی: تایید تراکنشات توسط پذیرنده</p>
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
                <th>عنوان رویداد</th>
                <th>زمان برگزاری</th>
                <th>تعداد جلسات</th>
                <th>تعداد شرکت کنندگان</th>
                <th>مبلغ واحد (ریال)</th>
                <th>مجموع تخفیفات استفاده شده ( ریال )</th>
                <th>مجموع عواید دریافتی (ریال)</th>
                <th>کارمزد سامانه - 3 درصد +500 تومان به ازای هر بلیط (ریال)</th>

            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td>۱</td>
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
                        echo count($date_webinar)." "."جلسه";
                    }
                    else{
                       echo "1 جلسه";
                    }
                    ?>
                </td>
                <td><?php echo count($count_register)." "."نفر"?></td>
                <td><?php echo number_format($info_webinar->price,0) ?></td>
                <td><?php
                    $sum_Price = 0;
					$sum_pay_Price = 0;
					if($count_register == 0){
						echo 0;
					}
					else{
                    foreach ($count_register as $key=>$price) {
                        $sum_pay_Price = $price->amount + $sum_pay_Price;
                    }
                    $logic_price = $info_webinar->price * count($count_register);
                    $amount_discount = $logic_price - $sum_pay_Price;
                    echo number_format($amount_discount,0);
					}
                    ?></td>
                <td><?php echo number_format($sum_pay_Price,0)?></td>
                <td>
                    <?php
                    $karmozd1 = count($count_register)*5000;
                    $karmozd2 = $sum_pay_Price*0.03;
                    $final_karmozd = $karmozd1 + $karmozd2;
                    echo number_format($final_karmozd,0)
                    ?>
                </td>
            </tr>
            <tr>
                <th colspan="11" class="text-center">مبلغ قابل پرداخت :  <?php
                    $amount_price = $sum_pay_Price - $final_karmozd;
                    echo number_format($amount_price,0)?>  ریال</th>
            </tr>
            <tr>
                <th colspan="5" class="text-right">شرایط و نحوه فروش: &nbsp&nbsp&nbsp&nbsp غیرنقدی &nbsp&nbsp&nbsp&nbsp درگاه آنلاین آی دی پی پرداخت یار شاپرک بانک مرکزی - سامانه جامع برتا</th>
                <th colspan="6" class="text-right"> توضیحات: صدور فاکتور پرداخت با شماره استعلام<?php echo "berta"."-".$info_webinar->id?> بابت رویداد <?php echo "-".$info_webinar->title."-";?></th>
            </tr>
            <tr style="padding: 60px 0;">
                <td colspan="5" class="text-right">مهر و امضا فروشنده : هسته فناور برتا  </td>
                <td colspan="6" class="text-right"> مهر و امضا خریدار : <?php echo $info_organizer->name." ".$info_organizer->family?></td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
