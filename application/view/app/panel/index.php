<?php $this->include('app.layouts.header');?>


    <!----- Start menu ----->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm sticky-top">

        <div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav pr-0 custom-navbar font-14 text-center">
                    <li class="nav-item ml-3 custom-nav-item"><a href="index.html" class="nav-link">صفحه اصلی</a></li>
                    <li class="nav-item ml-3 dropdown custom-nav-item"><a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">دوره های آموزشی</a>

                        <div class="dropdown-menu custom-dropdown-menu dropdown-menu-right font-13 text-right">
                            <a href="course.html" class="dropdown-item border-bottom py-2">دوره متخصص طراحی سایت</a>
                            <a href="course.html" class="dropdown-item border-bottom py-2">دوره آموزش برنامه نویسی اندروید</a>
                            <a href="course.html" class="dropdown-item border-bottom py-2">دوره  جامع آموزش فتوشاپ</a>
                            <a href="course.html" class="dropdown-item border-bottom py-2">دوره آموزش پایتون</a>
                            <a href="course.html" class="dropdown-item py-2">دوره جامع آموزش وردپرس</a>
                        </div>

                    </li>
                    <li class="nav-item ml-3 dropdown custom-nav-item"><a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">صفحات</a>

                        <div class="dropdown-menu  custom-dropdown-menu dropdown-menu-right font-13 text-right">
                            <a href="panel-user.html" class="dropdown-item border-bottom py-2">پنل کاربری</a>
                            <a href="search.html" class="dropdown-item border-bottom py-2">جستجو</a>
                            <a href="error404.html" class="dropdown-item py-2">Error 404</a>
                        </div>

                    </li>
                    <li class="nav-item ml-3 custom-nav-item"><a href="blog.html" class="nav-link">بلاگ</a></li>
                    <li class="nav-item ml-3 custom-nav-item"><a href="contact-us.html" class="nav-link">تماس باما</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!----- End menu ----->

    <div class="container">
        <div class="row">
            
            <div class="col-12 col-lg-3">
                <div class="card bg-info my-5 p-5">
                    <img src="images/a.jpg" class="img-fluid rounded-circle d-block mx-auto" width="120px" height="120px" alt="user-image" >
                    <h5 class="text-white text-center mt-3">کاربر : <br>حجت فضایلی</h5>
                </div>
                <div class="text-right">
                    <div class="list-group p-0 mb-5 profile" >
                        <a href="#vaziyat" class="active list-group-item list-group-item-action font-14" data-toggle="list"> <i class="fa fa-cog align-middle ml-2" ></i>مرور وضعیت </a>
                        <a href="#dore-signup" class="list-group-item list-group-item-action" data-toggle="list"> <i class="fa fa-server  align-middle ml-2"></i>دوره هایی که ثبت نام کرده اید </a>
                        <a href="#shopping-cart" class="list-group-item list-group-item-action " data-toggle="list"><i class="fa fa-shopping-cart align-middle ml-2" ></i>سبد خرید </a>
                        <a href="#ticket" class="list-group-item list-group-item-action " data-toggle="list"><i class="fa fa-tags align-middle ml-2" ></i>تیکت ها </a>
                        <a href="#user-change" class="list-group-item list-group-item-action" data-toggle="list"><i class="fa fa-address-card align-middle ml-2"></i>ارتقا به برگزار کننده</a>
                        <a href="#score" class="list-group-item list-group-item-action " data-toggle="list"><i class="fa fa-tags align-middle ml-2" ></i>امتیازات</a>
                        <a href="index.html" class="list-group-item list-group-item-action"> <i class=" fa fa-window-close align-middle ml-2"></i> خروج</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-9">

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="vaziyat"><!----- Start vaziyat ----->
                        <div class="card my-5 pb-4 text-right">
                            <div class="card-header text-center">
                                <h6 class="mt-2"> مرور وضعیت </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <img src="images/university-campus.png" class="img-fluid d-inline-block p-2 rounded bg-warning" alt="courses">
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"> 12 دوره  </p>
                                                    <small> در سایت وجود دارد </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <img src="images/a.png" class="img-fluid d-inline-block p-2 rounded bg-warning" alt="courses">
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"> 3 دوره  </p>
                                                    <small> ثبت نام کرده اید </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <img src="images/shopping-cart.png" class="img-fluid d-inline-block p-2 rounded bg-warning" alt="courses">
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"> 0 دوره  </p>
                                                    <small>  در انتظار پرداخت  </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <img src="images/wallet-filled-money-tool.png" class="img-fluid d-inline-block p-2 rounded bg-warning" alt="courses">
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0">  0 تومان   </p>
                                                    <small>  موجودی قابل تسویه شما  </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card mt-3">
                                            <div class="card-body bg-light">
                                                <p class="mb-2"> <i class="fa fa-bell align-middle"></i>  جدیدترین اعلان ها  </p>
                                                <small> در تاریخ 1398/01/25 </small>
                                                <div class="alert alert-info mt-3">
                                                    <p class="font-13 text-center mt-3">کد تخفیف 30 % : Takhfif</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div><!----- End vaziyat ----->


                    <div class="tab-pane fade show text-center" id="dore-signup"><!----- Start dore signup ----->
                        <div class="card my-5 pb-4 text-center">
                            <div class="card-header">
                                <h6 class="mt-2 font-14"> دوره هایی که ثبت نام کرده اید  </h6>
                            </div>
                            <div class="card-body">

                                <div class="card mb-3 pb-4 shadow-sm">
                                    <div class="card-body d-md-flex">
                                        <img src="images/html-2.png" class="img-fluid float-lg-right mb-2" alt="html" width="250px" height="300px">
                                        <div class="d-inline-block pr-3 text-justify my-course">
                                            <a href="Category.html" class="mb-3 d-block text-center text-dark">آموزش HTML</a>
                                            <small>
                                                بخش اول متخصص طراحی سایت :
                                                زبان نشانه گذاری HTML به عنوان اولین پایه برای هر دوره آموزش طراحی سایت در نظر گرفته می‌شود.
                                                 این زبان چیست و چه کاربردی دارد؟ HTML مخفف عبارت Hypertext Markup Language است.
                                             </small>
                                             <button class="btn btn-primary rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download1">مشاهده لینک دانلود</button>
                                            
                                        </div>
                                    </div>
                                    <div class="mt-5 collapse" id="download1" >
                                        <table class="table table-borderless text-right font-13">
                                            <tr>
                                                <td>آموزش HTML جلسه 1 - 3</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 3 - 6</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 7 - 10</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 11 - 13</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card mb-3 pb-4 shadow-sm">
                                    <div class="card-body d-md-flex">
                                        <img src="images/html-2.png" class="img-fluid float-lg-right mb-2" alt="html" width="250px" height="300px">
                                        <div class="d-inline-block pr-3 text-justify my-course">
                                            <a href="Category.html" class="mb-3 d-block text-center text-dark">آموزش HTML</a>
                                            <small>
                                                بخش اول متخصص طراحی سایت :
                                                زبان نشانه گذاری HTML به عنوان اولین پایه برای هر دوره آموزش طراحی سایت در نظر گرفته می‌شود.
                                                 این زبان چیست و چه کاربردی دارد؟ HTML مخفف عبارت Hypertext Markup Language است.
                                             </small>
                                             <button class="btn btn-primary rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download2">مشاهده لینک دانلود</button>
                                            
                                        </div>
                                    </div>
                                    <div class="mt-5 collapse" id="download2">
                                        <table class="table table-borderless text-right font-13">
                                            <tr>
                                                <td>آموزش HTML جلسه 1 - 3</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 3 - 6</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 7 - 10</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 11 - 13</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>


                                <div class="card mb-3 pb-4 shadow-sm">
                                    <div class="card-body d-md-flex">
                                        <img src="images/html-2.png" class="img-fluid float-lg-right mb-2" alt="html" width="250px" height="300px">
                                        <div class="d-inline-block pr-3 text-justify my-course">
                                            <a href="Category.html" class="mb-3 d-block text-center text-dark">آموزش HTML</a>
                                            <small>
                                                بخش اول متخصص طراحی سایت :
                                                زبان نشانه گذاری HTML به عنوان اولین پایه برای هر دوره آموزش طراحی سایت در نظر گرفته می‌شود.
                                                 این زبان چیست و چه کاربردی دارد؟ HTML مخفف عبارت Hypertext Markup Language است.
                                             </small>
                                             <button class="btn btn-primary rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download3">مشاهده لینک دانلود</button>
                                            
                                        </div>
                                    </div>
                                    <div class="mt-5 collapse" id="download3">
                                        <table class="table table-borderless text-right font-13">
                                            <tr>
                                                <td>آموزش HTML جلسه 1 - 3</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 3 - 6</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 7 - 10</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 11 - 13</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                               

                            </div>
                        </div>
                    </div><!----- End dore signup ----->


                    <div class="tab-pane fade show text-center" id="shopping-cart"><!----- Start shopping cart----->

                        <div class="card my-5 pb-4 text-center">

                            <div class="card-header">
                                <h6>سبد خرید</h6>
                            </div>

                            <div class="card-body mt-5">

                                <div class="table-responsive">
                                    <table id="myTable" class="table">
                                        <thead>
                                            <tr>
                                                <th>عکس</th>
                                                <th>نام دوره</th>
                                                <th>تعداد</th>
                                                <th>قیمت دوره</th>
                                                <th class="text-right"><span id="amount" class="amount">قیمت کل</span> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="product-img">
                                                        <div class="img-prdct"><img src="images/bootstrap.jpg"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>آموزش جامع Bootstrap 4</p>
                                                </td>
                                                <td>
                                                    <div class="button-container">
                                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                                        <input type="text" name="qty" min="0" class="qty form-control" value="0"/>
                                                        <button class="cart-qty-minus" type="button" value="-">-</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" value="1500" class="price form-control" disabled>
                                                </td>
                                                <td> <span id="amount" class="amount">0</span>تومان</td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="product-img">
                                                        <div class="img-prdct"><img src="images/php-security-2.png"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>آموزش امنیت در PHP</p>
                                                </td>
                                                <td>
                                                    <div class="button-container">
                                                        <button class="cart-qty-plus" type="button" value="+">+</button>
                                                        <input type="text" name="qty" min="0" class="qty form-control" value="0"/>
                                                        <button class="cart-qty-minus" type="button" value="-">-</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" value="64000" class="price form-control" disabled>
                                                </td>
                                                <td><span id="amount" class="amount">0</span>تومان</td>

                                            </tr>
                                                      
                                        </tbody>
                                  </table>

                                  <span class="font-13">قیمت کل :</span><span id="total" class="total mx-2">0</span><span class="font-13">تومان</span>

                                  <button class="btn btn-success btn-block mt-3 font-14"> پرداخت</button>

                                </div>
                                
                            </div>

                            
                        </div>
                                    
                    </div><!----- End shopping cart ----->

                    <div class="tab-pane fade show " id="ticket"><!----- Start ticket ----->
                        <div class="card my-5">
                            <div class="card-header text-center">
                                <h6 class="mt-2 font-14"> تیکت های شما </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">

                                        <form action="">
                                            <div class="form-group">
                                                <label for="title"  class="text-right">عنوان</label>
                                                <input id="title" class="form-control" type="text" name="" placeholder="عنوان مورد نظر خود را وارد کنید ...">
                                            </div>
    
                                            <div class="form-group">
                                                <label for="text">متن پیام</label>
                                                <textarea id="text" class="form-control" name="" rows="3" placeholder="پیام خود را وارد کنید ..."></textarea>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-info btn-block font-13">ارسال تیکت</button>
                                        </form>

                                        <p class="font-14 my-5">لیست تیکت های شما :</p>

                                        <div class="alert alert-warning">
                                            <p class="font-13 vazir mt-3">تاکنون تیکتی برای شما ثبت نشده است !</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!----- End ticket ----->


                    <div class="tab-pane fade show text-right" id="user-change"><!----- Start user change ----->
                        <div class="card my-5">
                            <div class="card-header">
                                <h6 class="mt-2 font-14 text-center">

                                     ارتقا به برگزار کننده
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="card text-right my-3">
                                    <div class="card-header bg-primary text-center pb-0 text-white">
                                        <p class="font-13">

                                            فرم ارتقا به برگزار کننده :
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="<?php $this->url('app/upgrade_to_teacher') ?>" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <p> کد ملی : </p>
                                                <input type="text" class="form-control" value="علی">
                                            </div>

                                            <div class="form-group">
                                                <p> تاریخ تولد : </p>
                                                <input name="birthday" type="text" class="form-control" value="نوروزی">
                                            </div>

                                            <div class="form-group">
                                                <p> مقطع تحصیلی : </p>
                                                <input name="edu_lvl" type="text" class="form-control" value="123456789">
                                            </div>

                                            <div class="form-group">
                                                <p> رشته تحصیلی  : </p>
                                                <input name="field" type="text" class="form-control" value="123456789">
                                            </div>

                                            <div class="form-group">
                                                <label for="text">بیوگرافی</label>
                                                <textarea name="bio" id="text" class="form-control"  rows="3" placeholder="پیام خود را وارد کنید ..."></textarea>
                                            </div>

                                            <div class="form-group">
                                                <p> ایمیل  : </p>
                                                <input name="email" type="email" class="form-control" value="123456789">
                                            </div>

                                            <div class="custom-file my-4">
                                                <input name="pic" type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">انتخاب عکس</label>
                                              </div>

                                            <div class="custom-file my-4">
                                                <input name="resume" type="file" class="custom-file-input" id="customFile">
                                                <label  class="custom-file-label" for="customFile">انتخاب رزومه</label>
                                            </div>


                                            <div class="form-group">
                                                <button class="btn btn-primary btn-block my-4 font-13"> ثبت تغییرات </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!----- End user change ----->
                    <div class="tab-pane fade show text-center" id="score"><!----- Start shopping cart----->

                        <div class="card my-5 pb-4 text-center">

                            <div class="card-header">
                                <h6>امتیازات شما</h6>
                            </div>

                            <div class="card-body mt-5">

                                <div class="table-responsive">
                                    <table id="myTable" class="table">
                                        <thead>
                                        <tr>
                                            <th>تصویر</th>
                                            <th>کارگاه</th>
                                            <th>تاریخ | مدت</th>
                                            <th>امتیاز</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="images/bootstrap.jpg"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>کارگاه آموزش اندنوت</p>
                                            </td>

                                            <td>10 شهریور ماه 1400</td>
                                            <td>10 امتیاز</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="images/bootstrap.jpg"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>کارگاه رمزارزها در بلاکچین</p>
                                            </td>

                                            <td>20 مهر ماه 1399</td>
                                            <td>22 امتیاز</td>

                                        </tr>
                                        </tbody>
                                    </table>

                                    <span class="font-13">امتیاز کل :</span><span class=" mx-2">0</span><span class="font-13">امتیاز</span>

                                    <button class="btn btn-success btn-block mt-3 font-14"> درخواست گواهینامه</button>

                                </div>

                            </div>


                        </div>

                    </div><!----- End shopping cart ----->


                </div>

            </div>

        </div>
    </div>
    





<?php $this->include('app.layouts.footer'); ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/myscript.js"></script>
</body>
</html>