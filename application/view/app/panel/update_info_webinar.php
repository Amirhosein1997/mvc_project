<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه جامع برتا | دانشگاه آزاد اسلامی واحد نیشابور</title>
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
            <div id="miladWorkShopAlert" class="mwsModal" >
                <div class="mwsModal-content">
                    <div class="mwsModal-header">
                        <span class="close">&times;</span>
                        <h2 style="font-family:tahoma; font-size:12px; font-weight:bold;">پیام سامانه برتــا</h2>
                    </div>
                    <div class="mwsModal-body">
                        <p style="text-align:justify; direction:rtl; line-height:200%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check2-square" style="float: left!important;" viewBox="0 0 16 16">
                                <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                                <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                            </svg>
                            <b>کاربر محترم دقت بفرمایید :</b>
                            <br /><br />
جهت ویرایش رویداد مورد نظر ، ارسال مجدد فایل تصاویر ( تصویر اصلی ، تصویر معرفی ، تصویر برگزارکننده و تصویر مدرس [درصورتی که رویداد دارای مدرس است] قبل از کلیک روی ویرایش درخواست الزامی است .)
                        </p>
                    </div>
                    <div class="mwsModal-footer">
                        <h3 style="font-family:tahoma; font-size:10px; font-weight:normal;">مرکز برگزاری رویدادهای <a href="https://eberta.ir" target="_blank" style="color:#FFFFFF; text-decoration:none;">سامانه برتا</a></h3>
                    </div>
                </div>
            </div>
<div class="container">
<div class="card my-5">
    <div class="card-header text-center">
        <h6 class="mt-2 font-14"> ویرایش درخواست برگزاری وبینار</h6>

    <div class="card-body">
        <div class="card text-right my-3">
            <div class="card-header bg-primary text-center pb-0 text-white"><p class="font-13">فرم درخواست برگزاری وبینار:</p> </div>
            <div class="card-body">
                <form action="<?php $this->url('manage_webinars/edit_info_webinar/'.$id_webinar) ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="0"> عنوان دوره : <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[title]" placeholder="لطفا عنوان دوره خود را وارد کنید." value="<?php echo $info_webinar->title;?>">
                    </div>

                    <div class="form-group">
                        <label for="1">توضیحات مربوط به دوره <span style="color:red;">*</span></label>
                        <textarea id="editor" row="10" class="form-control" name="info_webinar[description]" placeholder="توضیحات مربوط به دوره خود را به طور خلاصه وارد کنید."><?php echo $info_webinar->description;?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="3"  class="text-right">نوع دوره <span style="color:red;">*</span></label>
                        <select class="form-select form-control" name="info_webinar[type]" aria-label=".form-select-sm example" id="3" style="font-size: 13px;">
                            <option selected disabled>نوع دوره خود را انتخواب کنید.</option>
                            <option <?php if ($info_webinar->type == 0){echo 'selected';} ?> value="0">رویداد آنلاین</option>
                            <option <?php if ($info_webinar->type == 1){echo 'selected';}?>  value="1">رویداد حضوری</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>آدرس مکان برگزاری رویداد</label>
                        <textarea  class="form-control" name="info_webinar[address]" placeholder="لطفا در صورت حضوری بودن رویداد، آدرس محل برگزاری را وارد نمایید."><?php if ($info_webinar->address !=='no'){ echo $info_webinar->address;}?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="3"  class="text-right">سطح دوره <span style="color:red;">*</span></label>
                        <select class="form-select form-control" name="info_webinar[level]" aria-label=".form-select-sm example" id="3" style="font-size: 13px;">
                            <option selected disabled>سطح دوره خود را انتخواب کنید.</option>
                            <option <?php if($info_webinar->level == 'مقدماتی'){echo 'selected';} ?> value="مقدماتی">مقدماتی</option>
                            <option <?php if($info_webinar->level == 'متوسط'){echo 'selected';} ?> value="متوسط">متوسط</option>
                            <option <?php if($info_webinar->level == 'پیشرفته'){echo 'selected';} ?> value="پیشرفته">پیشرفته</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="0">هزینه پیشنهادی دوره ( به ریال )<span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[price]" placeholder="لطفا هزینه پیشنهادی دوره خود را وارد کنید." value="<?php echo $info_webinar->price; ?>">
                    </div>
                    <div class="headline_wrapper form-group">
                        <label for="4"  class="text-right"><strong>سرفصل رویداد <span style="color:red;">*</span></strong></label><br>
                        <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> رویداد موردنظر شما باید حداقل دارای یک سرفصل باشد.</small></span>
                        <br><hr>
                        <?php
                        $head_lines = explode(',',$info_webinar->headlines);
                        foreach ($head_lines as $key=>$headline):
                        ?>
                        <div class="row">
                            <input id="4" class="form-control col-md-3" type="text" value="سرفصل شماره...">
                            <input id="2" class="form-control col-md-8" type="text" name="headlines[]" placeholder="سرفصل مورد نظر را وارد کنید." value="<?php echo $headline;?>" required>
                            <a id="4" href="javascript:void(0);" class="col-md-1 form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>
                        </div><br>
                        <?php endforeach; ?>
                    </div>
                    <span class="text-info small">برای افزودن سرفصل جدید بر روی <a href="javascript:void(0);" class="add_button_headline btn btn-outline-info col-md-1 mb-2 small" title="Add field" style="max-width: fit-content;font-size: 12px;margin-top: 10px;">+</a>
 بزنید.</span><br>

                    <br>
                    <div class="meeting_wrapper form-group">
                        <label for="4"  class="text-right"><strong>تعداد و زمان برگزاری جلسات <span style="color:red;">*</span></strong></label><br>
                        <label for="4"  class="text-right"><strong>سرفصل رویداد</strong></label><br>
                        <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> رویداد موردنظر شما باید حداقل دارای یک تاریخ و زمان جلسه باشد.</small></span><hr>
                        <?php
                            if (isset($info_webinar)):
                            $dates = explode(',',$info_webinar->date);
							$times = explode(',',$info_webinar->time);
                           	foreach ($dates as $key_date => $date):
                            $key_date_plus_1 = $key_date + 1;
                        ?>

                        <div class=" row">
                            <input id="4" class="form-control col-md-3" type="text" value="جلسه شماره...">
							<input id="4" class="form-control col-md-4" type="text" name="date[]" placeholder="تاریخ برگزاری جلسه" value="<?php echo $date?>" required>
                            <input id="4" class="form-control col-md-4" type="text" name="time[]" placeholder="ساعت برگزاری جلسه" value="<?php echo $times[$key_date];?>" required>
                            <a id="4" href="javascript:void(0);" class="form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>
                        </div><br>
                        <?php endforeach; ?>
						<?php else : ?>
						                        <div class=" row">
                            <input id="4" class="form-control col-md-3" type="text" value="جلسه شماره...">
							<input id="4" class="form-control col-md-4" type="text" name="date[]" placeholder="تاریخ برگزاری جلسه" value="<?php echo $info_webinar->date;?>" required>
                            <input id="4" class="form-control col-md-4" type="text" name="time[]" placeholder="ساعت برگزاری جلسه" value="<?php echo $info_webinar->time;?>" required>
                            <a id="4" href="javascript:void(0);" class="form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>
                        </div><br>
                        <?php endif; ?>
                    </div>
                    <span class="text-info small">برای افزودن جلسه جدید بر روی <a href="javascript:void(0);" class="add_button btn btn-outline-info col-md-1 mb-2 small" title="Add field" style="max-width: fit-content;font-size: 12px;margin-top: 10px;">+</a>
 بزنید.</span><br>
                    <hr>
                    <label for="4"  class="text-right"><strong>اطلاعات برگزارکننده دوره</strong></label><br>
                    <div class="form-group">
                        <label for="0"> نام برگزارکننده : <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[name_organizer]" placeholder="لطفا نام برگزارکننده دوره خود را وارد کنید." value="<?php if ($info_webinar->organizer !=='no'){echo $info_webinar->organizer;} ;?>" required >
                    </div>
                    <div class="form-group">
                        <label for="1">درباره برگزارکننده :<span style="color:red;">*</span></label>
                        <textarea id="editor2" class="form-control" name="info_webinar[about_organizer]" placeholder="بیوگرافی مربوط به برگزارکننده دوره خود را به طور خلاصه وارد کنید."><?php if ($info_webinar->about_organizer !=='no'){echo $info_webinar->about_organizer;} ;?></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img_four" id="customFile1">
                        <label class="custom-file-label" for="customFile1">انتخاب تصویر برگزارکننده<span style="color:red;">*</span></label>
                    </div>
					<a class="form-control btn btn-primary" href="<?php $this->url($info_webinar->pic_organizer) ?>" target="_blank">تصویر ارسال شده برگزارکننده به سامانه برتا</a>
                    <hr>
                    <label for="4"  class="text-right"><strong>اطلاعات مدرس دوره</strong></label><br>
                    <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> چنانچه رویداد شما دارای مدرس است خواهشمند است تیک " این دوره مدرس دارد " را فعال و سپس نسبت به تکمیل اطلاعات مدرس اقدام نمایید.</small></span>
                    <br>

                    <br>

                    <div class="form-group">
                        <small><input id="0" type="checkbox" class="form-group" name="info_webinar[check_teacher]" <?php if ($info_webinar->teacher !=='no'){echo 'checked';} ?>>  این دوره مدرس دارد</small>
                    </div>
                    <div class="form-group">
                        <label for="0"> نام و نام خانوادگی مدرس : <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[name_teacher]" placeholder="لطفا نام و نام خانوادگی مدرس دوره خود را وارد کنید." value="<?php if ($info_webinar->teacher !=='no'){echo $info_webinar->teacher;} ?>">
                    </div>
                    <div class="form-group">
                        <label for="1">درباره مدرس :<span style="color:red;">*</span></label>
                        <textarea id="editor1" class="form-control" name="info_webinar[about_teacher]" placeholder="بیوگرافی مربوط به مدرس دوره خود را به طور خلاصه وارد کنید."><?php if ($info_webinar->about_teacher !=='no'){echo $info_webinar->about_teacher;} ?></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img_three" id="customFile1">
                        <label class="custom-file-label" for="customFile1">انتخاب تصویر مدرس<span style="color:red;">*</span></label>
                    </div>
					<?php if($info_webinar->pic_teacher !=='no'): ?>
				<a class="form-control btn btn-primary" href="<?php $this->url($info_webinar->pic_teacher) ?>" target="_blank">تصویرارسال شده مدرس به سامانه برتا</a>
					<?php endif; ?>
                    <hr>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img_one" id="customFile1">
                        <label class="custom-file-label" for="customFile1">انتخاب تصویر قابل نمایش رویداد در صفحه اصلی سامانه <span style="color:red;">*</span></label>
                    </div>
					<a class="form-control btn btn-primary" href="<?php $this->url($info_webinar->pics_one) ?>" target="_blank">تصویر قابل نمایش رویدادارسال شده به سامانه برتا</a>
					<hr>
                    <div class="custom-file my-2">
                        <input type="file" class="custom-file-input" name="img_two" id="customFile2">
                        <label class="custom-file-label" for="customFile2">انتخاب تصویر معرفی رویداد در سامانه <span style="color:red;">*</span></label>
                    </div>
					<a class="form-control btn btn-primary" href="<?php $this->url($info_webinar->pic_two) ?>" target="_blank">تصویر معرفی رویدادارسال شده به سامانه برتا</a>
					<hr>
					<p class="small text-muted"> <span style="color:red;">*</span> .تصاویر ارسالی شما باید بصورت عرضی باشد </p>
					<p class="small text-muted"><span style="color:red;">*</span> ابعاد استاندارد تصویر رویداد در صفحه اصلی سامانه 216 در 350 و تصویر معرفی رویداد 382 در 688 می باشد. </p>
                    <p class="small text-muted"><span style="color:red;">*</span> عکس های انتخابی شما باید متناسب با موضوع دوره شما باشد.</p>
					                    <button type="submit" class="btn btn-primary btn-block font-13">ویرایش درخواست</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="<?php $this->asset('js/jquery-1.11.3.min.js') ?>"></script>
<script src="<?php $this->asset('js/bootstrap.min.js') ?>"></script>
<script src="<?php $this->asset('js/owl.carousel.min.js') ?>"></script>
<script src="<?php $this->asset('js/main.js') ?>"></script>
<script src="<?php $this->asset('js/myscript.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.meeting_wrapper'); //Input field wrapper
        var fieldHTML =
            '<div class="count-headline">'+
            '<div class="row">'+
            '<input id="4" class="form-control col-md-3" type="text"  placeholder="ساعت برگزاری جلسه" value="جلسه شماره...">'+
            '<input id="4" class="form-control col-md-4" type="text" name="date[]" placeholder="ساعت برگزاری جلسه"  value="1400/10/12" required>'+
            '<input id="4" class="form-control col-md-4" type="text" name="time[]" placeholder="تاریخ برگزاری جلسه" value=" از 12:00 تا 16:00" required>'+
            '<a id="4" href="javascript:void(0);" class="form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>'+
            '</div>'+ '</div>'+'<br>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button_headline'); //Add button selector
        var wrapper = $('.headline_wrapper'); //Input field wrapper
        var fieldHTML =
            '<div class="count-headline">'+
            '<div class="form-group">'+
            '<div class="row">'+
            '<input id="2" class="form-control col-md-3" type="text" value="سرفصل شماره...">'+
            '<input id="2" class="form-control col-md-8" type="text" name="headlines[]" placeholder="عنوان مورد نظر خود را وارد کنید ..." required>'+
            '<a id="4" href="javascript:void(0);" class="col-md-1 form-control col-md-1 remove_button btn btn-outline-danger col-md-1 mb-2 small" style="max-width: none;font-size: 13px;margin-top: 3px;">حذف</a>'+
            '</div>'+
            '</div>'+'</div>'+'<br>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>

<script type="text/javascript" src="<?php $this->asset('tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#editor,#editor1,#editor2",
        plugins: "advlist autolink code colorpicker hr imagetools link image lists media table textcolor preview",
        language: 'fa',
        convert_urls: false,
        toolbar: "undo redo | styleselect | fontselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview code | forecolor backcolor",
        font_formats: "Iranian Sans='iransans',tahoma;Arial=arial,helvetica,sans-serif;Tahoma=tahoma,arial,helvetica,sans-serif;Webdings=webdings;Wingdings=wingdings,zapf dingbats"

    });
</script>
<script>
    var mwsModal = document.getElementById('miladWorkShopAlert');
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        mwsModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == mwsModal) {
            mwsModal.style.display = "none";
        }
    }
</script>