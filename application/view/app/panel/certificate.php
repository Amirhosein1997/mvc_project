
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اعتبارنامه صدور گواهینامه رسمی</title>
    <link rel="icon" href="<?php $this->asset('img/icon.png')  ?>">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap-rtl.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/fontawesome/css/all.css') ?>">
</head>
<body>
<?php if(isset($issued) and $issued='issue'): ?>
<div class="alert alert-primary" style="text-align:center!important;position: fixed;left: 11px;width: 421px;top: 186px;direction: ltr;">
پاسخ به استعلام درزمان
<br>
<strong><?php echo $date_issue; ?></strong>
</div>
									<div class="alert alert-success" style="text-align:center!important;position: fixed;left: 11px;width: 421px;top: 267px;">
									براساس آخرین اطلاعات دریافت شده از سامانه جامع برتا ،این گواهینامه با شماره سفارش <strong><?php echo " ".$info_certificate_user->order_id." " ?></strong>و تاریخ صدور <strong><?php echo " ".$info_certificate_user->date_peyment." " ?></strong> بنام <strong><?php echo " ".$info_certificate_user->fullname." " ?></strong> دارای اعتبار می باشد.
									</div>
									<div class="alert alert-danger" style="text-align:center!important;position: fixed;left: 11px;width: 421px;top: 372px;direction: ltr;">
												<a href="https://eberta.ir" style="color:#2a2424">مرکز استعلام سامانه جامع برتا</a>
									</div>
?>
<?php endif; ?>
<?php 
if(isset($info_certificate_user)):
if($info_certificate_user->position == "participant"): ?>
<img src="http://eberta.ir/public/img/certificate_participant.jpg" width="1000px" style="position: fixed;right: 266px;top: 5px;">
<p style="position: fixed;top: 316px;right: 587px;font-size: 47px;"><?php echo $info_certificate_user->fullname ?></p>
<p style="position: fixed;top: 422px;right: 474px;font-size: 14px;font-weight: bolder;;"><?php echo $info_certificate_user->date_webinar ?></p>
<p style="position: fixed;top: 422px;right: 619px;font-size: 14px;font-weight: bolder;;"><?php echo $info_certificate_user->time_webinar."ساعت" ?></p>
<p style="position: fixed;top: 422px;right: 740px;font-size: 12px;font-weight: bolder;;">
<?php 
if($info_certificate_user->type_webinar ==0 or $info_certificate_user->type_webinar ==2){
	echo "آنلاین";
}
else{
	echo "حضوری";
}
?></p>
<p style="position: fixed;top: 422px;right: 841px;font-size: 14px;font-weight: bolder;;">
<?php 
if($info_certificate_user->type_webinar ==2 or $info_certificate_user->type_webinar ==3){
	echo "خصوصی";
}
else{
	echo "عمومی";
}
?></p>
<p style="position: fixed;top: 464px;right: 419px;font-size: 11px;font-weight: bolder;;"><?php echo $info_certificate_user->title_webinar ?></p>
<p style="position: fixed;top: 555px;right: 419px;font-size: 11px;font-weight: bolder;;"><?php echo $info_certificate_user->date_issued ?></p>
<p style="position: fixed;top: 555px;right: 567px;font-size: 11px;font-weight: bolder;;"><?php echo $info_certificate_user->code_certificate ?></p>
<?php endif; ?>
<?php endif; ?>


<?php
if(isset($info_certificate_user)):
if($info_certificate_user->position == "organizer"): 
?>
<img src="http://eberta.ir/public/img/certificate_organizer.jpg" width="1000px" style="position: fixed;right: 266px;top: 5px;">
<p style="position: fixed;top: 316px;right: 587px;font-size: 47px;"><?php echo $info_certificate_user->fullname ?></p>
<p style="position: fixed;top: 422px;right: 474px;font-size: 14px;font-weight: bolder;;"><?php echo $info_certificate_user->date_webinar ?></p>
<p style="position: fixed;top: 422px;right: 619px;font-size: 14px;font-weight: bolder;;"><?php echo $info_certificate_user->time_webinar."ساعت" ?></p>
<p style="position: fixed;top: 422px;right: 740px;font-size: 12px;font-weight: bolder;;">
<?php 
if($info_certificate_user->type_webinar ==0 or $info_certificate_user->type_webinar ==2){
	echo "آنلاین";
}
else{
	echo "حضوری";
}
?></p>
<p style="position: fixed;top: 422px;right: 841px;font-size: 14px;font-weight: bolder;;">
<?php 
if($info_certificate_user->type_webinar ==2 or $info_certificate_user->type_webinar ==3){
	echo "خصوصی";
}
else{
	echo "عمومی";
}
?></p>
<p style="position: fixed;top: 464px;right: 419px;font-size: 11px;font-weight: bolder;;"><?php echo $info_certificate_user->title_webinar ?></p>
<p style="position: fixed;top: 555px;right: 419px;font-size: 11px;font-weight: bolder;;"><?php echo $info_certificate_user->date_issued ?></p>
<p style="position: fixed;top: 555px;right: 567px;font-size: 11px;font-weight: bolder;;"><?php echo $info_certificate_user->code_certificate ?></p>
<?php endif; ?>
<?php endif; ?>

<?php if(isset($info_webinar)): ?>
<?php if($position == "participant"): ?>
<img src="http://eberta.ir/public/img/normal_certificate_participant.jpg" width="1000px" style="position: fixed;right: 266px;top: 5px;">
<?php endif; ?>
<?php if($position == "organizer"): ?>
<img src="http://eberta.ir/public/img/normal_certificate_organizer.jpg" width="1000px" style="position: fixed;right: 266px;top: 5px;">
<?php endif; ?>
<p style="position: fixed;top: 316px;right: 587px;font-size: 47px;"><?php echo $info_certificate[0]->fullname  ?></p>
<p style="position: fixed;top: 422px;right: 474px;font-size: 14px;"><?php echo $info_date_webinar ?></p>
<p style="position: fixed;top: 422px;right: 619px;font-size: 14px;font-weight: bolder;;"><?php echo $info_webinar->time_webinar."ساعت" ?></p>
<p style="position: fixed;top: 422px;right: 740px;font-size: 12px;font-weight: bolder;;">
<?php 
if($info_webinar->type ==0 or $info_webinar->type ==2){
	echo "آنلاین";
}
else{
	echo "حضوری";
}
?></p>
<p style="position: fixed;top: 422px;right: 841px;font-size: 14px;font-weight: bolder;;">
<?php 
if($info_webinar->type ==2 or $info_webinar->type ==3){
	echo "خصوصی";
}
else{
	echo "عمومی";
}
?></p>
<p style="position: fixed;top: 464px;right: 419px;font-size: 11px;font-weight: bolder;;"><?php echo $info_webinar->title ?></p>

<?php endif; ?>


</body>
</html>