
<div class="card my-5">
    <div class="card-header text-center">
        <h6 class="mt-2 font-14"> درخواست برگزاری وبینار</h6>
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
            <div class="card-header bg-primary text-center pb-0 text-white"><p class="font-13">فرم درخواست برگزاری وبینار:</p> </div>
			    <br>
    <br>
    
    <div class="alert alert-info d-flex align-items-center"  role="alert">
        <svg class="bi flex-shrink-0 me-2"  width="15" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            <?php echo $info_user->name ?> عزیز :<br><hr><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"></path>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
            </svg><span style="margin-right: 8px">لطفا در تکمیل اطلاعات رویداد مورد نظر دقت کافی را داشته باشید.</span><br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-checks-grid"  viewBox="0 0 16 16">
                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"></path>
            </svg><span style="margin-right: 8px">پرداخت هزینه خدمات رویدادآنلاین به مبلغ 250000 ریال پس از ارسال اطلاعات وبینار در بخش  " لیست درخواست های وبینار -> مشاهده جزئیات وبینار " جهت تایید و انتشار رویداد آنلاین الزامی است .</span>
        </div>
    </div>
                <form action="<?php $this->url('manage_webinars/request_webinar') ?>" method="post" enctype="multipart/form-data">

	                <div id="accordion">

                    <div class="card">
                      <div class="card-header">
					  
                        <a class="card-link font-14 text-muted" data-toggle="collapse" href="#collapseOne">
                            <i class="fa fa-plus align-middle ml-2"></i>
							گام 1 : اطلاعات اولیه رویداد
                        </a>
                      </div>
                      <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
 <div class="form-group">
                        <label for="0"> عنوان دوره : <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[title]" placeholder="لطفا عنوان دوره خود را وارد کنید." required>
                    </div>

                    <div class="form-group" >
                        <label>توضیحات مربوط به دوره <span style="color:red;">*</span></label>
                        <textarea id="editor" class="form-control" name="info_webinar[description]" placeholder="توضیحات مربوط به دوره خود را به طور خلاصه وارد کنید." required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="3" id="myButton"  class="text-right">نوع دوره <span style="color:red;">*</span></label>
                        <select class="about_us form-select form-control" name="info_webinar[type]" aria-label=".form-select-sm example" id="3" style="font-size: 13px;" required>
                            <option selected disabled>نوع دوره خود را انتخاب کنید.</option>
                            <option value="0">رویداد آنلاین | عمومی</option>
                            <option value="1">رویداد حضوری | عمومی</option>
                            <option value="2">رویداد آنلاین | خصوصی</option>
                            <option value="3">رویداد حضوری | خصوصی</option>
                        </select>
                    </div>
					    <script>
     					 tippy('#myButton', {
       					 content: 'راهنما'."<br>".'s',
							placement: 'left',
     					 });
    					</script>
					<div class="form-group">
                        <label for="1"> مکان برگزاری رویداد :<span style="color:red;">*</span></label>
                        <textarea  class="form-control" name="info_webinar[address]" placeholder="لطفا درصورت حضوری بودن رویداد ، مکان برگزاری آن را بنویسید."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="3"  class="text-right">سطح دوره <span style="color:red;">*</span></label>
                        <select class="form-select form-control" name="info_webinar[level]" aria-label=".form-select-sm example" id="3" style="font-size: 13px;" required>
                            <option selected disabled>سطح دوره خود را انتخاب کنید.</option>
                            <option value="مقدماتی">مقدماتی</option>
                            <option value="متوسط">متوسط</option>
                            <option value="پیشرفته">پیشرفته</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="0">مدت زمان دقیق رویداد ( به ساعت )<span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[times_webinar]" placeholder="مثلا 2 یا 1:30:00" required>
                    </div>
                    <div class="form-group">
                        <label for="0">هزینه پیشنهادی رویداد ( به ریال )<span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[price]" placeholder="لطفا هزینه پیشنهادی دوره خود را به ریال وارد کنید." required>
                    </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed card-link font-14 text-muted" data-toggle="collapse" href="#collapseTwo">
                            <i class="fa fa-plus align-middle ml-2"></i>گام 2 : ارائه سرفصل رویداد
                        </a>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                    <div class="headline_wrapper form-group">
                        <label for="4"  class="text-right"><strong>سرفصل رویداد <span style="color:red;">*</span></strong></label><br>
                        <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> رویداد موردنظر شما باید حداقل دارای یک سرفصل باشد.</small></span>
                        <br><hr>
                        <div class="row">
                        <input id="4" class="form-control col-md-3" type="text" value="سرفصل شماره...">
                        <input id="2" class="form-control col-md-9" type="text" name="headlines[]" placeholder="سرفصل مورد نظر را وارد کنید." required>
                        </div><br>
                    </div>
                    <span class="text-info small">برای افزودن سرفصل جدید بر روی <a href="javascript:void(0);" class="add_button_headline btn btn-outline-info col-md-1 mb-2 small" title="Add field" style="max-width: fit-content;font-size: 12px;margin-top: 10px;">+</a>
 بزنید.</span>
                        </div>
                      </div>
                    </div>
                  
                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed card-link font-14 text-muted" data-toggle="collapse" href="#collapseThree">
                            <i class="fa fa-plus align-middle ml-2"></i>گام 3 : ارائه زمانبندی برگزاری رویداد
                        </a>
                      </div>
                      <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                    <div class="meeting_wrapper form-group">
                        <label for="4"  class="text-right"><strong>تعداد و زمان برگزاری جلسات <span style="color:red;">*</span></strong></label><br>
                        <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> رویداد موردنظر شما باید حداقل دارای یک تاریخ و زمان جلسه باشد.</small></span><hr>
                        <div class=" row">
                            <input id="4" class="form-control col-md-3" type="text" value="جلسه شماره...">
                            <input id="4" class="form-control col-md-4" type="text" name="time[]" placeholder="ساعت برگزاری جلسه" value=" از 12:00 تا 16:00" required>
                            <input id="4" class="form-control col-md-5" type="text" name="date[]" placeholder="تاریخ برگزاری جلسه" value="1400/10/12" required>
                        </div><br>
                    </div>
                    <span class="text-info small">برای افزودن جلسه جدید بر روی <a href="javascript:void(0);" class="add_button btn btn-outline-info col-md-1 mb-2 small" title="Add field" style="max-width: fit-content;font-size: 12px;margin-top: 10px;">+</a>
 بزنید.</span><br>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link font-14 text-muted" data-toggle="collapse" href="#collapsefour">
                              <i class="fa fa-plus align-middle ml-2"></i>گام 4 : ارائه اطلاعات برگزارکننده رویداد
                          </a>
                        </div>
                        <div id="collapsefour" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                    <label for="4"  class="text-right"><strong>اطلاعات برگزارکننده دوره</strong></label><br>
                    <div class="form-group">
                        <label for="0"> نام برگزارکننده : <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[name_organizer]" placeholder="لطفا نام برگزارکننده دوره خود را وارد کنید." required>
                    </div>
                    <div class="form-group">
                        <label for="1">درباره برگزارکننده :<span style="color:red;">*</span></label>
                        <textarea  class="form-control" name="info_webinar[about_organizer]" placeholder="بیوگرافی مربوط به برگزارکننده دوره خود را به طور خلاصه وارد کنید." required></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img_four" id="customFile1" required>
                        <label class="custom-file-label" for="customFile1">انتخاب تصویر برگزارکننده<span style="color:red;">*</span></label>
                    </div>
                          </div>
                        </div>
                      </div>
					  

                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link font-14 text-muted" data-toggle="collapse" href="#collapsefive">
                               <i class="fa fa-plus align-middle ml-2"></i>گام 5 : ارائه اطلاعات مدرس رویداد
                          </a>
                        </div>
                        <div id="collapsefive" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                    <label for="4"  class="text-right"><strong>اطلاعات مدرس دوره</strong></label><br>
                    <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> چنانچه رویداد شما دارای مدرس است خواهشمند است تیک " این دوره مدرس دارد " را فعال و سپس نسبت به تکمیل اطلاعات مدرس اقدام نمایید.</small></span>
                	
				  <br>
                    <br>

                    <div class="form-group">
                       <small><input id="0" type="checkbox" class="form-group" name="info_webinar[check_teacher]" >  این دوره مدرس دارد</small>
                    </div>
                    <div class="form-group">
                        <label for="0"> نام و نام خانوادگی مدرس : <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_webinar[name_teacher]" placeholder="لطفا نام و نام خانوادگی مدرس دوره خود را وارد کنید.">
                    </div>
                    <div class="form-group">
                        <label for="1">درباره مدرس :<span style="color:red;">*</span></label>
                        <textarea  class="form-control" name="info_webinar[about_teacher]" placeholder="بیوگرافی مربوط به مدرس دوره خود را به طور خلاصه وارد کنید."></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img_three" id="customFile1">
                        <label class="custom-file-label" for="customFile1">انتخاب تصویر مدرس<span style="color:red;">*</span></label>
                    </div>
                          </div>
                        </div>
                      </div>
                  
                  </div> 


                      <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link font-14 text-muted" data-toggle="collapse" href="#collapsesix">
                               <i class="fa fa-plus align-middle ml-2"></i>گام 6 : ارائه گواهینامه رویداد
                          </a>
                        </div>
                        <div id="collapsesix" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                    <label for="4"  class="text-right"><strong>اطلاعات مدرس دوره</strong></label><br>
                    <span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> لطفانوع گواهینامه قابل ارائه به شرکت کننده و مدرس رویداد را مشخص نمایید.</small></span>
                	<br><br>
					<span class="alert-info"><small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> درصورت انتخاب گواهینامه رسمی ، مبلغ 500 هزار ریال جهت صدور گواهینامه قبل از تایید رویداد از برگزار کننده اخذ خواهد شد. همچنین هزینه صدور گواهینامه رسمی برای هر شرکت کننده رویداد معادل 200 هزار ریال می باشد که پرداخت آن به عهده خود شرکت کننده است.</small></span>
				  <br>
                    <br>
					<div class="form-group">
                       <small><input id="1" type="checkbox" class="form-group" name="info_webinar[orginal_certificate]" > ارائه گواهینامه -رسمی- به مدرس و شرکت کننده رویداد  (500 هزار ریال بابت صدور) </small>
                    </div>
                          </div>
                        </div>
                      </div>
                  
            <div class="card-body">

				<div style="border: 3px ridge #17a2b8;border-radius: 37px;padding: 49px;margin: 16px;">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img_one" id="customFile1" required>
                        <label class="custom-file-label" for="customFile1">انتخاب تصویر قابل نمایش رویداد در صفحه اصلی سامانه <span style="color:red;">*</span></label>
                    </div>

                    <div class="custom-file my-2">
                        <input type="file" class="custom-file-input" name="img_two" id="customFile2" required>
                        <label class="custom-file-label" for="customFile2">انتخاب تصویر معرفی رویداد در سامانه <span style="color:red;">*</span></label>
                    </div>
					<p class="small text-muted"> <span style="color:red;">*</span> .تصاویر ارسالی شما باید بصورت عرضی باشد </p>
					<p class="small text-muted"><span style="color:red;">*</span> ابعاد استاندارد تصویر رویداد در صفحه اصلی سامانه 216 در 350 و تصویر معرفی رویداد 382 در 688 می باشد. </p>
                    <p class="small text-muted"><span style="color:red;">*</span> عکس های انتخابی شما باید متناسب با موضوع دوره شما باشد.</p>               
            </div>
											<button type="submit" class="btn btn-primary btn-block font-13">ارسال درخواست</button>

			</div>

			</form>
        </div>
    </div>
</div>
<?php } ?>