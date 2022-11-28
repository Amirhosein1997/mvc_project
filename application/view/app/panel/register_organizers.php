
<div class="card my-5">
    <div class="card-header">
        <h6 class="mt-2 font-14 text-center">تعریف برگزارکننده جدید</h6>
    </div>
	<br>
	<div class="alert alert-info d-flex align-items-center" style="margin: auto;width: 20cm;text-align: justify;" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="15" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"></use></svg>
        <div>
            کاربر گرامی :<br><hr><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"></path>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
            </svg><span style="margin-right: 8px">در این بخش امکان تعریف برگزارکنندگام متعدد در سامانه فراهم شده است.</span><br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"></path>
            </svg><span style="margin-right: 8px">شما می توانید پس از تعریف لیست برگزارکنندگان ، با مراجعه به بخش درخواست برگزاری رویداد نسبت به انتخاب برگزارکننده رویداد موردنظر اقدام کنید.</span>
        </div>
    </div>
	<div style="border: 3px ridge #17a2b8;border-radius: 37px;padding: 49px;margin: 16px;">
				<form method="post" action="<?php $this->url('manage_webinars/register_webinar_organizer') ?>" enctype="multipart/form-data">
                     <div class="card-body">
                    <div class="form-group">
                        <label for="0" style="position: relative;float: right;"> نام برگزارکننده / سازمان: <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_organizer[name_organizer]" placeholder="لطفا نام برگزارکننده/ سازمان دوره خود را وارد کنید." required>
                    </div>
                    <div class="form-group">
                        <label for="1" style="position: relative;float: right;">درباره برگزارکننده / سازمان :<span style="color:red;">*</span></label>
                        <textarea  class="form-control" name="info_organizer[about_organizer]" placeholder="بیوگرافی مربوط به برگزارکننده / سازمان دوره خود را به طور خلاصه وارد کنید." required></textarea>
                    </div>
					<div class="custom-file">
                        <input type="file" class="custom-file-input" name="img_pics_organizer" id="customFile1" required>
                        <label class="custom-file-label" for="customFile1" >ارسال تصویر برگزارکننده / سازمان<span style="color:red;">*</span></label>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img_pics_logo_organizer" id="customFile1" required>
                        <label class="custom-file-label" for="customFile1" >انتخاب لوگو برگزارکننده/ سازمان</label>
                    </div>
					<br><br>
					<button type="submit" class="btn btn-primary btn-block font-13">ثبت برگزارکننده</button>
                    </div>
				</form>	
	 </div>
	<hr>
	 <div class="table-responsive" style="padding: 31px;">
                                    <table id="myTable" class="table">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
											<th>تصویر</th>
                                            <th>برگزارکننده</th>
                                            <th>توضیحات</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
										<td>1</td>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="https://eberta.ir/public/upload/webinar/97762.jpg"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>دانشگاه آزاد نیشابور</p>
                                            </td>

                                            <td><p>دانشگاه آزاد اسلامی واحد نیشابور با درک یک ضرورت و احساس خلاء مرکز آموزش عالی در شهر کهن و ادب پرور نیشابور در سال ۱۳۶۴ تاسیس گردید.</p></td>
                                            <td>
											<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-paint-brush align-middle"></i></button>
											</td>

                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

</div>

