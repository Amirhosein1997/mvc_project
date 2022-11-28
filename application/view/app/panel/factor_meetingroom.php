
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>سامانه جامع برتا - صدور فاکتور مالی پرداخت هزینه اتاق جلسه</title>
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
            <p>شماره سفارش: <?php echo $info_factor->order_id?></p>
            <p style="direction: ltr">تاریخ سفارش: <?php echo $info_factor->date_orginal?></p>
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
                            <p>نام شخص حقیق / حقوقی: <?php echo $find_info_meetingroom->titleorgnization?></p>
                        </div>
                        <div class="col-4">
                            <p>بخش مربوطه :<?php echo $find_info_meetingroom->partorganization?></p>
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
                <th class="text-center" colspan="11">مشخصات اتاق جلسه خریداری شده</th>
            </tr>
            </thead>
            <thead>
            <tr class="text-center">
                <th>ردیف</th>
                <th>شماره سفارش</th>
                <th>کدرهگیری</th>
                <th>عنوان اتاق</th>
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
                <td><?php echo $info_factor->order_id;?></td>
                <td><?php echo $info_factor->track_id;?></td>
                <td><?php echo $find_info_meetingroom->titleroom;?></td>
                <td><?php echo $find_info_meetingroom->date."-".$find_info_meetingroom->time;?></td>
                <td>1جلسه</td>
                <td><?php echo $info_factor->date_orginal?></td>
                <td><?php echo number_format($info_factor->amount,0) ?></td>
                <td>0 ریال</td>
                <td><?php echo number_format($info_factor->amount,0)?></td>
                <td><?php echo number_format($info_factor->amount,0)?></td>
            </tr>
            <tr>
                <th colspan="11" class="text-center">جمع کل پرداختی :  <?php echo number_format($info_factor->amount,0)?>  ریال</th>
            </tr>
            <tr>
                <th colspan="5" class="text-right">شرایط و نحوه فروش: &nbsp&nbsp&nbsp&nbsp غیرنقدی &nbsp&nbsp&nbsp&nbsp درگاه آنلاین آی دی پی پرداخت یار شاپرک بانک مرکزی - سامانه جامع برتا</th>
                <th colspan="6" class="text-right"> توضیحات: صدور فاکتور پرداخت با شماره استعلام<?php echo " ".$info_factor->track_id; ?> بابت اتاق جلسه <?php echo "-".$find_info_meetingroom->titleroom."-";?></th>
            </tr>
            <tr style="padding: 60px 0;">
                <td colspan="5" class="text-right">مهر و امضا فروشنده : دانشگاه آزاد اسلامی واحد نیشابور - هسته فناور برتا</td>
                <td colspan="6" class="text-right"> مهر و امضا خریدار : <?php echo $find_info_meetingroom->titleorgnization?></td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
