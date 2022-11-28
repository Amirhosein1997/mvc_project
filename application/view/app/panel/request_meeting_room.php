<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/fcdzvd626kk9sldy2wvyjcfl4acd6hiznqqc3z8gx3yqfy3u/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>


        var useDarkMode = window.matchMedia('(prefers-color-scheme: light)').matches;

        tinymce.init({
            selector: 'textarea#open-source-plugins',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            language: 'fa',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [
                { title: 'My page 1', value: 'https://www.tiny.cloud' },
                { title: 'My page 2', value: 'http://www.moxiecode.com' }
            ],
            image_list: [
                { title: 'My page 1', value: 'https://www.tiny.cloud' },
                { title: 'My page 2', value: 'http://www.moxiecode.com' }
            ],
            image_class_list: [
                { title: 'None', value: '' },
                { title: 'Some class', value: 'class-name' }
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                }
            },
            templates: [
                { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            /* height: 443, */
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });

    </script>
  </head>
<div class="card my-5">
    <div class="card-header text-center">
        <h6 class="mt-2 font-14"> درخواست اتاق جلسات</h6>
    </div>
    <?php
    use application\model\User as UserModel;
    $serach_info = new UserModel();
    $phone = $_SESSION['login_user'];
    $info_user = $serach_info->find('users_tbl','phone',$phone);
    if ($info_user->mellicode == ""){
        ?>
    <br>
    <br>
    <hr>
    <div class="alert alert-danger d-flex align-items-center" style="margin: auto;width: fit-content;" role="alert">
        <svg class="bi flex-shrink-0 me-2"  width="15" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            کاربر گرامی :<br><hr><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"></path>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
            </svg><span style="margin-right: 8px">دسترسی شما به این بخش امکان پذیر نمی باشد.</span><br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-checks-grid"  viewBox="0 0 16 16">
                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"></path>
            </svg><span style="margin-right: 8px">برای بهره مندی از این بخش لطفا اطلاعات خود را در قسمت " ارتقا به برگزار کننده " تکمیل کنید.</span>
        </div>
    </div>
    <hr>
    <?php }
else{?>
    <div class="card-body">
        <div class="card text-right my-3">
            <div class="card-header bg-primary text-center pb-0 text-white"><p class="font-13">فرم درخواست ایجاد اتاق جلسات:</p> </div>
			    <br>
    <br>
    
    <div class="alert alert-primary d-flex align-items-center"  role="alert">
        <svg class="bi flex-shrink-0 me-2"  width="15" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"></path>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
            </svg><span style="margin-right: 8px">لطفا در تکمیل اطلاعات و مستندات اتاق جلسات دقت لازم را داشته باشید</span>
        </div>
    </div>
                <form action="<?php $this->url('manage_meetingroom/register_meeting_room') ?>" method="post" enctype="multipart/form-data">

	                <div id="accordion">

                    <div class="card">
                      <div class="card-header">
					  
                        <a class="card-link font-14 text-muted" data-toggle="collapse" href="#collapseOne">
                            <i class="fa fa-plus align-middle ml-2"></i>
							گام 1 : ارائه اطلاعات اولیه اتاق جلسه
                        </a>
                      </div>
                      <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
 						<div class="form-group">
                        <label for="0"> عنوان اتاق جلسه موردنظر : <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_meetingroom[titleroom]" placeholder="لطفا عنوان اتاق جلسه خود را وارد کنید." required>
                   		</div>

                    <div class="form-group">
                        <label for="3" id="myButton"  class="text-right">عنوان سازمان :<span style="color:red;">*</span></label>
						<input id="0" type="text" class="form-control" name="info_meetingroom[titleorgnization]" placeholder="لطفا عنوان سازمان/واحد خود را وارد کنید." required>
                        <!--<select class="about_us form-select form-control" name="info_webinar[type]" aria-label=".form-select-sm example" id="3" style="font-size: 13px;" required>
                            <option selected disabled>واحد دانشگاهی خود را انتخاب کنید</option>
                            <option value="واحد مشهد">واحد خراسان رضوی - مشهد</option>
							<option value="مجتمع پردیس بین الملل خراسان">واحد خراسان رضوی - مجتمع پردیس بین الملل</option>
							 <option value="واحد گلبهار">واحد خراسان رضوی - گلبهار</option>
                            <option value="واحد نیشابور">واحد خراسان رضوی - نیشابور</option>
                            <option value="واحد سبزوار">واحد خراسان رضوی - سبزوار</option>
                            <option value="واحد قوچان">واحد خراسان رضوی - قوچان</option>
							<option value="واحد تربت حیدریه">واحد خراسان رضوی - تربت حیدریه</option>
							<option value="واحد تربت جام">واحد خراسان رضوی - تربت جام</option>
							<option value="واحد فریمان">واحد خراسان رضوی - فریمان </option>
							<option value="واحد کاشمر">واحد خراسان رضوی - کاشمر </option>						
                        </select>-->
                    </div>

                    <div class="form-group">
                        <label for="3" id="myButton"  class="text-right">قسمت برگزارکننده سازمان</label>
						<input id="0" type="text" class="form-control" name="info_meetingroom[partorganization]" placeholder="لطفا عنوان سازمان/واحد خود را وارد کنید." required>
                        <!--<select class="about_us form-select form-control" name="info_webinar[type]" aria-label=".form-select-sm example" id="3" style="font-size: 13px;" required>
                            <option selected disabled>قسمت برگزارکننده خود را انتخاب کنید</option>
                            <option value="دفتر ریاست واحد ">دفتر ریاست واحد</option>
							<option value="معاونت توسعه مدیریت و منابع">معاونت توسعه مدیریت و منابع</option>
							<option value="معاونت آموزش و تحصیلات تکمیلی">معاونت آموزش و تحصیلات تکمیلی</option>
							<option value="معاونت فرهنگی و دانشجویی">معاونت فرهنگی و دانشجویی</option>
							<option value="معاونت پژوهش و فناوری">معاونت پژوهش و فناوری</option>
							<option value="معاونت آموزش های عمومی و مهارتی">معاونت آموزش های عمومی و مهارتی</option>
							<option value="اداره کل حراست">اداره کل حراست</option>
							<option value="دفتر روابط عمومی واحد">دفتر روابط عمومی واحد</option>
							<option value="اداره کل فناوری اطلاعات و ارتباطات">اداره کل فناوری اطلاعات و ارتباطات</option>
							<option value="اداره امور بین الملل">اداره امور بین الملل</option>
							<option value="دبیرخانه هیات اجرایی جذب">دبیرخانه هیات اجرایی جذب</option>
							<option value="اقتصاد دانش بنیان و سرمایه گذاری">اقتصاد دانش بنیان و سرمایه گذاری</option>
							<option value="دفتر زنان و خانواده">دفتر زنان و خانواده</option>
							<option value="بخش امور حقوقی">بخش امور حقوقی</option>
							<option value="ستاد شاهد و ایثارگران">ستاد شاهد و ایثارگران</option>
							<option value="دانشکده فنی و مهندسی">دانشکده فنی و مهندسی</option>
							<option value="دانشکده پزشکی و پرستاری">دانشکده پزشکی و پرستاری</option>
							<option value="مجتمع/دانشکده علوم انسانی">مجتمع/دانشکده علوم انسانی</option>
							<option value="دانشکده حقوق ، علوم سیاسی و زبان های خارجی">دانشکده حقوق ، علوم سیاسی و زبان های خارجی</option>
							<option value="دانشکده هنر و معماری">دانشکده هنر و معماری</option>
							<option value="دانشکده علوم پایه">دانشکده علوم پایه</option>
							<option value="دانشکده مهارت و کارآفرینی">دانشکده مهارت و کارآفرینی</option>
							<option value="مجتمع پردیس بین الملل خراسان">مجتمع پردیس بین الملل خراسان</option>
                        </select>-->
                    </div>
						<div class="form-group">
                        <label for="3"  class="text-right">لوگوی سازمان</label>
	               	<div class="custom-file">
                        <input type="file" class="custom-file-input" name="imgorgnization" id="customFile9" required>
                        <label class="custom-file-label" for="customFile9">آپلود لوگوی سازمان</label>
                    </div></div>

					<!--<div class="form-group">
                        <label for="3"  class="text-right">نوع اتاق جلسات <span style="color:red;">*</span></label>
                   <select class="form-select form-control" name="info_meetingroom[typemeeting]" id="mySelect" onchange="myFunction()"  aria-label=".form-select-sm example" style="font-size: 13px;" required>
                            <option selected disabled>لطفا نوع اتاق جلسه را انتخاب کنید</option>
                            <option value="آنلاین">ایجاد اتاق جلسه - آنلاین</option>
                            <option value="حضوری">ایجاد اتاق جلسه - حضوری</option>
                        </select>
                    </div>-->
					<div id="demo"></div>
						<div class="form-group">
                        <label for="3" id="myButton"  class="text-right">زمان و تاریخ برگزاری جلسه<span style="color:red;">*</span></label>
                        <div class="form-row">
							
                <input id="4" class="form-control col-md-4 text-center" type="text" name="info_meetingroom[time]" placeholder="ساعت برگزاری جلسه" value=" از 12:00 تا 16:00" required>
							<div class="col-md-1"></div>
                            <input id="4" class="form-control col-md-1 text-center" type="text" name="info_meetingroom[day]" placeholder="روز برگزاری جلسه" value="12" required>
							<input id="4" class="form-control col-md-1 text-center" type="text" name="info_meetingroom[month]" placeholder="ماه برگزاری جلسه" value="10" required>
							<input id="4" class="form-control col-md-2 text-center" type="text" name="info_meetingroom[years]" placeholder="سال برگزاری جلسه" value="1401" required>
							<div class="col-md-1"></div>
                        </div>
					</div>

                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed card-link font-14 text-muted" data-toggle="collapse" href="#collapseTwo">
                            <i class="fa fa-plus align-middle ml-2"></i>گام 2 : ارائه دستور اتاق جلسه
                        </a>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
						<textarea class="form-control" id="open-source-plugins" name="info_meetingroom[ordermeeting]" placeholder="ثبت دستور اتاق جلسه"></textarea>

                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed card-link font-14 text-muted" data-toggle="collapse" href="#collapseThree">
                            <i class="fa fa-plus align-middle ml-2"></i>گام 2 : ارائه کد ورود به اتاق جلسه 
                        </a>
                      </div>
                      <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                    <div class="admincodemeetin_wrapper form-group">
                        <label for="4"  class="text-right"><strong>کد ورود به اتاق جلسه <span style="color:red;">*</span></strong></label><br>
                        <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> اتاق جلسه موردنظر شما باید حداقل دارای یک کد ورود مدیران و یک کد ورود شرکت کنندگان باشد.</small></span>
                        <br><hr>
						<label for="4"  class="text-right"><strong>سطح مدیران / سخنرانان <span style="color:red;">*</span></strong></label><br>
                        <div class=" form-row">
				<input id="4" class="form-control col-md-6" type="text" name="admincodemeeting[]" value="<?php 	$code_meetingroom = substr(base_convert(sha1(uniqid(mt_rand())), 16, 32), 0, 8);
 echo $code_meetingroom;?>"placeholder="کد مربوطه">
                        <input id="2" class="form-control col-md-6" type="text" name="numberadmincode[]" placeholder="تعداد مجاز" required>
                        </div></div><br>
                    <span class="text-info small">برای افزودن کد جدید جدید سطح مدیران / سخنرانان بر روی <a href="javascript:void(0);" class="add_button_adminheadline btn btn-outline-info col-md-1 mb-2 small" title="Add field" style="max-width: fit-content;font-size: 12px;margin-top: 10px;">+</a>
 بزنید.</span><br>
						<div class="participantcodemeetin_wrapper form-group">
						<label for="4"  class="text-right"><strong>سطح شرکت کنندگان  <span style="color:red;">*</span></strong></label><br>
                        <div class="form-row">
						<input id="4" class="form-control col-md-6" type="text" name="participantcodemeeting[]" value="<?php $code_meetingroom = substr(base_convert(sha1(uniqid(mt_rand())), 16, 32), 0, 8);
 echo $code_meetingroom;?>" placeholder="کد مربوطه">
                        <input id="2" class="form-control col-md-6" type="text" name="numberparticipantcode[]" placeholder="تعداد مجاز" required>
                        </div>
                    </div></div>
                    <span class="text-info small">برای افزودن کد جدید جدید سطح شرکت کنندگان بر روی <a href="javascript:void(0);" class="add_button_participantheadline btn btn-outline-info col-md-1 mb-2 small" title="Add field" style="max-width: fit-content;font-size: 12px;margin-top: 10px;">+</a>
 بزنید.</span><br>
                        </div>
                      </div>
                    </div>
                      
                  
            <div class="card-body">

				<div style="border: 3px ridge #17a2b8;border-radius: 37px;padding: 49px;margin: 16px;">
                    <br><div class="file_wrapper custom-file">
                        <input type="file" class="custom-file-input" name="file[]" id="customFile1" required>
                        <label class="custom-file-label" for="customFile1">ارسال مستندات اتاق جلسه</label>
                    </div><br>
					<a href="javascript:void(0);" class="add_button_file btn btn-outline-info  btn-block" title="Add field">افزودن فایل مستند جدید</a>

					<hr>
					<p class="small text-muted"> <span style="color:red;">*</span> فرمت مجاز ارسال فایل درقالب متن و تصویر خواهد بود </p>  
					<p class="small text-muted"> <span style="color:red;">*</span> پس از تایید مدیریت سامانه ، امکان بهره مندی از اتاق جلسات مهیا خواهد شد </p>             
           
            </div>
				<button type="submit" class="btn btn-primary btn-block font-13">ارسال درخواست</button>

			</div>

			</form>
        </div>
    </div>
</div>

<?php } ?>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x=="حضوری")
  {
  document.getElementById("demo").innerHTML = 					
  '<div class="form-group">'+
  '<label for="1"> مکان برگزاری جلسه :<span style="color:red;">*</span></label>'+
  '<textarea  id="editor2" class="form-control" name="info_meetingroom[location]" placeholder="لطفا درصورت حضوری بودن جلسه ، مکان برگزاری آن را بنویسید."></textarea>'+
  '</div>'
  }

}
</script>