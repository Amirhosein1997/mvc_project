<footer class="bg-white"><!----- Start footer ----->
    <div class="container py-2">
        <div class="row">

            <div class="col-md-4">
                <img src="<?php $this->asset('images/logo4.jpg') ?>" alt="" class="img-fluid">
                <p class="text-justify font-14 vazir mb-4">
سامانه جامع برتا با هدف مدیرت متمرکز رویداهای حضوری و غیر حضوری  در اسفندماه سال 1400 توسط شرکت نرم افزاری داده نگارفن آوران پارس راه اندازی شد.
                </p>
                <p class="font-14"><i class="fas fa-map-marker-alt text-muted ml-2"></i> ایران , خراسان رضوی , شهرستان نیشابور , دانشگاه آزاداسلامی واحد نیشابور,  هسته فناور برتا</p>
                <p class="font-14"><i class="fas fa-envelope text-muted ml-2"></i> info@eberta.ir</p>
                <p class="font-14"><i class="fa fa-phone text-muted ml-2"></i>051-42621901-داخلی 215 | 09153528823</p>
            </div>

            <div class="col-md-2 text-center footer-links">
                <span class="mt-5 mb-3 d-block font-14">دسترسی سریع</span>
                <ul class="list-unstyled">
                    <li class="my-3"><a href="<?php echo $this->url('user/contact_us') ?>">تماس با ما</a></li>
                    <li class="my-3"><a href="<?php echo $this->url('manage_webinars/cat/47') ?>">وبینارهای آنلاین</a></li>
                    <li class="my-3"><a href="<?php echo $this->url('manage_webinars/cat/52') ?>">کارگاه های حضوری</a></li>
                </ul>
            </div>

            <div class="col-md-2 text-center footer-links">
                <h6  class="my-5">برتا در شبکه های اجتماعی!</h6>
                <div class="mt-5 social-media">
                    <a href="#"><i class="fab fa-instagram p-1" id="instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter bg-info p-1"></i></a>
                    <a href="#"><i class="fab fa-youtube bg-danger p-1"></i></a>
                    <a href="#"><i class="fab fa-telegram bg-primary p-1"></i></a>
                </div>
            </div>

            <div class="col-md-4 search-box text-center">
 <img referrerpolicy='origin' id = 'nbqeoeuksizpfukzsizpoeuk' style = 'cursor:pointer' onclick = 'window.open("https://logo.samandehi.ir/Verify.aspx?id=289698&p=uiwkmcsipfvlgvkapfvlmcsi", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt = 'logo-samandehi' src = 'https://logo.samandehi.ir/logo.aspx?id=289698&p=odrfaqgwbsiywlbqbsiyaqgw' />
                <a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=260407&amp;Code=htSHKM33zsMWF26VKKvi"><img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=260407&amp;Code=htSHKM33zsMWF26VKKvi" alt="" style="cursor:pointer" id="htSHKM33zsMWF26VKKvi"></a>
											<script src="https://static.idpay.ir/trust.js?id=96851719&width=64"></script>

            </div>

		</div>

<div><script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="89bbf93e-6925-4752-b743-0d90ad8df326";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>ّ</div>
        <div class="row justify-content-end">
            <a  class="topbutton"> <i class="fa fa-chevron-circle-up"></i></a>
        </div>


        <div class="row">
            <div class="col-12 text-center">
                <hr>
                <p class="text-muted font-14">  کلیه حقوق این سایت متعلق به <a href="https://eberta.ir">سامانه جامع برتا</a> می باشد و نشرمقالات با ذکر منبع بلامانع است ©1400| نسخه نرم افزاری تحت وب - 1.0.1 </p>
                <p class="text-muted font-14">  برنامه نویسی و توسعه <span><button class="btn btn-outline-dark font-12" onClick="alert(' شرکت داده نگار فن آوران پارس | طراحی ، برنامه نویسی و توسعه تخصصی سرویس های تحت وب | تلفن تماس : 09156639069');">شرکت داده نگار فن آوران پارس</button></span> </p>
            </div>
        </div>

    </div>
</footer>
<!----- End footer ----->

<script src="<?php $this->asset('js/jquery-1.11.3.min.js') ?>"></script>
<script src="<?php $this->asset('js/bootstrap.min.js') ?>"></script>
<script src="<?php $this->asset('js/owl.carousel.min.js') ?>"></script>
<script src="<?php $this->asset('js/main.js') ?>"></script>
<script src="<?php $this->asset('js/myscript.js') ?>"></script>
<script>
    DecoupledEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
window.addEventListener("load" , function(){
	if(navigator.online){
		console.log("اتصال برقرار است");
	}
	else{
		console.log("اتصال قطع است");
	}
});
	window.addEventListener("offline",function(){
		alert("ارتباط شما با سامانه برتا قطع شده است . لطفا اینترنت خود را بررسی نمایید و دوباره آنلاین شوید!!");
	});
		window.addEventListener("online",function(){
		alert("ارتباط شما با سامانه برتا برقرار شد !!");
	});
</script>

</body>
</html>
