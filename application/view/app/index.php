<?php
use application\model\Webinar as WebinarModel;
$this->include('app.layouts.header');

?>

    <!----- Start middle box ----->
<div class="main">
    <div class="main-slider">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <a target="_blank" href="#"><img src="<?php $this->asset('img/slide1.jpg') ?>" alt="bootstrap course"/></a>
                <span><a href="#">سامانه جامع برگزاری رویدادهای برتا</a> </span>
            </div>
            <div class="item">
                <a target="_blank" href="#"><img src="<?php $this->asset('img/slide4.jpg') ?>"/></a>
                <span><a href="#"> برتا مجموعه منحصر بفرد از مهارت ها</a> </span>
            </div>
        </div>
    </div>
</div>
    <!----- End middle box ----->
<hr>
    <!----- Start category box ----->
	<div class="clearfix"></div>
    <div class="container" style="max-width:1391px">
        <div class="row my-5">

            <div class="col-md-3 col-sm-6">
                <div class="card box border-0 shadow mb-3" id="box1">
                    <img src="<?php $this->asset('img/online_webinar.png') ?>" alt="webdesign" class="my-2 mx-auto d-block">
                    <a href="<?php $this->url('manage_webinars/cat/47') ?>" class="text-center text-white my-2 d-block"> وبینارهای آنلاین</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card box border-0 shadow mb-3" id="box2">
                    <img src="<?php $this->asset('img/workshop.png') ?>" alt="webdesign" class="my-2 mx-auto d-block">
                    <a href="<?php $this->url('manage_webinars/cat/52') ?>" class="text-center text-white my-2 d-block">کارگاه های حضوری</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card box border-0 shadow mb-3" id="box3">
                    <img src="<?php $this->asset('img/industry.png') ?>" alt="webdesign" class="my-2 mx-auto d-block">
                    <a href="#" class="text-center text-white my-2 d-block"> مهارت آموزی صنایع</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card box border-0 shadow mb-3" id="box4">
                    <img src="<?php $this->asset('img/visit.png') ?>" alt="webdesign" class="my-2 mx-auto d-block">
                    <a href="#" class="text-center text-white my-2 d-block">بازدیدهای گروهی</a>
                </div>
            </div>

        </div>
    </div>
    <!----- End category box ----->


    <div class="container" style="max-width:1609px!important">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between">
                <h6 class="title pb-2">جدیدترین دوره های منتشرشده بــــرتا</h6>
            </div>
        </div>
    </div>

    <!----- Start course boxes ----->
    <div class="container my-3" style="max-width:1609px!important">
        <div class="row">
            <?php
            /*$info_request_webinars = new WebinarModel();
            $webinars = $info_request_webinars->all_webinar_active('webinars_tbl','final_status','1');
            if (isset($webinars)):
                $x = 12;
            foreach ($webinars as $key => $webinar):
                $operations = explode(',',$webinar->operations);
            if (strpos($webinar->operations , 'view_website') !== false):
                if ($key < 12):
                $text_explode = explode(' ', $webinar->description);
                $text_array_splice = array_splice($text_explode,0,25);
                $text = implode(' ', $text_array_splice);*/
            ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card custom-card mb-3 shadow-sm">
                        <div class="sub-layer">
                            <img src="<?php $this->asset('../'.$webinar->pics_one) ?>" alt="article" class="img-fluid card-img-top">
                            <div class="over-layer">
                                <a href="<?php $this->url('app/course/'.$webinar->id) ?>" class=" btn btn-outline-info" style=" right: 25%!important; top: 85%!important;"> سامانه جامع برتا | رویداد ها</a>
                            </div>
                        </div>

                        <div class="card-body" style=" background-image: linear-gradient(to right, rgb(154 51 51 / 0%), rgb(126 159 226 / 66%));">
                            <div class=" text-center mb-2 mt-2">
                                <a href="<?php $this->url('app/course/'.$webinar->id) ?>" class="card-link" style="font-size: 14px;"><?php echo $webinar->title?></a>
                            </div><hr>
                           <!-- <div class="card-text font-12 text-muted" style="margin-bottom: 4%;"><?php echo $text.'...' ?></div>-->
                            <span class=" p-2 text-muted font-12 " style="background: linear-gradient(40deg,#ecf3ff,#a1a8d6) !important;
    border-radius: 13px;">
                            <!--todo $author-->

                            <i class=" fa fa-calendar mx-1 "></i> برگزاری رویــداد<?php 
							if($webinar->type == 0){
								echo 'آنلاین';
							}
							if($webinar->type == 1){
								echo 'حضوری';
							}	
							if($webinar->type == 2){
								echo 'آنلاین | خصوصی';
							}	
							if($webinar->type == 3){
								echo 'حضوری | خصوصی';
							}												
							 ?>
							 
							 <i class=" fa fa-eye mx-1 "></i> <?php echo $webinar->click; ?>
                        	</span>
                            <a href="<?php $this->url('app/course/'.$webinar->id) ?>" class="btn float-left read-more">مشاهده  رویداد</a>
                        </div>
                    </div>
                </div>
            <?php
           // endif;
          //  endif;
          //  endforeach;
          //  endif ?>
        
		</div>
	 <a href="<?php echo $this->url('manage_webinars/search')?>" class="btn float-left read-more">مشاهده تمام رویدادها</a>
    </div>
	
    <!----- End course boxes ----->

    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between">
                <h6 class="title pb-2">از دوره های آینده بـــرتا باخبر شوید</h6>
            </div>
        </div>
    </div>

    <!----- Start events ----->
    <div class="container my-3">
        <div class="row">

            <div class="d-none d-lg-block col-lg-6">
                <img src="<?php $this->asset('img/eventberta.png') ?>" alt="event" class="img-fluid event-img">
            </div>

            <div class="col-lg-6">
                <!----- max 3 ----->
                <?php
                /*if (isset($webinars)):
                $x = 6;
                foreach ($webinars as $key => $webinar):
                $operations = explode(',',$webinar->operations);
                if (strpos($webinar->operations , 'upcoming_webinars') !== false):
                if ($key <= $x):
                $text_explode = explode(' ', $webinar->description);
                $text_array_splice = array_splice($text_explode,0,20);
                $text = implode(' ', $text_array_splice);*/
                ?>
                <div class="events">
                    <a href="<?php $this->url('app/course') ?>" class="d-block mb-3 font-14 text-info"><?php echo $webinar->title?></a>
                    <p class="font-13"><?php echo $text."...";?></p>
                    <span class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
</svg> وبینارهای آینده | مرکزبرگزاری رویدادهای برتا </span>
                    <a href="<?php $this->url('app/course/'.$webinar->id) ?>" target="_blank" class="btn read-more float-left ml-3">مشاهده اطلاعات وبینار</a>
                    <hr>
                </div>
                <?php// endif; ?>
                <?php// endif; ?>
                <?php//endforeach; ?>
                <?php// endif; ?>
            </div>

        </div>
    </div>
    <!----- Start events ----->
<!----- Start site info ----->
<div class="container py-4">
    <div class="row">

        <div class="col-sm-3 text-center info">
            <img src="<?php $this->asset('img/active_user.png') ?>" class="icon">
            <p class="mt-3 ">مهارت آموز فعال</p>
            <span id="Skills">0</span>+
        </div>
        <div class="col-sm-3 text-center info">
            <img src="<?php $this->asset('img/organizer.png') ?>" class="icon">
            <p class="mt-3 ">برگزارکننده فعال</p>
            <span id="Organizers">0</span>+
        </div>
        <div class="col-sm-3 text-center info">
            <img src="<?php $this->asset('img/elearning.png') ?>" class="icon">
            <p class="mt-3 ">رویداد منتشرشده</p>
            <span id="Events">0</span>+
        </div>
        <div class="col-sm-3 text-center info">
            <img src="<?php $this->asset('img/paper.png') ?>" class="icon">
            <p class="mt-3 ">مقالات پژوهشی</p>
            <span id="Papers">0</span>+
        </div>
    </div>

</div>

<!----- End site info ----->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between">
                <h6 class="title pb-2">تازه ترین مطالب منتشرشده برتــا</h6>
            </div>
        </div>
    </div>
<?php
use application\model\App as appModel;
$app = new appModel();
$blogs = $app->blog_tbl();
?>
    <div class="container">
        <div class="row mt-3 mb-5">
            <?php
            /*if (isset($blogs)):
                $x = 6;
                foreach ($blogs as $key => $blog):
                    if ($blog->status == 'on'):
                        if ($key < $x):*/
                        ?>
            <div class="col-md-6 col-lg-4">
                <div class="card custom-card mb-3 shadow-sm">

                    <img src="<?php $this->asset('../'.$blog->img) ?>" alt="article" class="img-fluid card-img-top">

                    <div class="card-body">
                        <div class="text-center mb-2 mt-2">
                            <a href="<?php $this->url('app/article/'.$blog->id) ?>" class="card-link" style="font-size: 14px;"><?php echo $blog->title?></a>
                        </div>
                        <div class="card-text font-12 text-muted" style="margin-bottom: 4%;"><?php echo $blog->description?></div>

                        <span class="bg-light p-2 text-muted font-12 ">
                            <!--todo $author-->
                            <i class="fa fa-building ml-1"></i> مرکزمطالعات پژوهشی برتا
                            <i class=" fa fa-pen mx-1"></i>مقاله
                        </span>
                        <a href="<?php $this->url('app/article/'.$blog->id) ?>" class="btn float-left read-more">بیشتر بخوانید</a>
                    </div>

                </div>
            </div>
                    <?php //endif ?>
                    <?php //endif ?>
                <?php// endforeach; ?>
            <?php //endif ?>
        </div>
    </div>
<?php $this->include('app.layouts.footer'); ?>
