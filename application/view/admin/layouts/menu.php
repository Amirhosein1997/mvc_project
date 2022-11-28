<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="<?php $this->asset('img/panel/123.jpg') ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>مهدی نوبهاری</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="جستجو">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="<?php $this->url('index/index') ?>"><i class="fa fa-home" style="font-size: 20px;color: white;"></i> <span style="font-size: 20px;color: white;">پیشخوان</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>مدیریت کاربران</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <?php $id=null ?>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php $this->url('user/reg_info_organizer') ?>"><i class="fa fa-circle-o"></i>ثبت اطلاعات برگزار کننده</a></li>
                    <li class="active"><a href="<?php $this->url('user/reg_info_participant/'."") ?>"><i class="fa fa-circle-o"></i>ثبت نام شرکت کننده</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i> <span>مدیریت رویداد ها</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php $this->url('manage_webinars/show_request_webinar') ?>"><i class="fa fa-circle-o"></i>درخواست برگزاری رویداد</a></li>
                    <li class="active"><a href="<?php $this->url('manage_webinars/ongoing_webinars  ') ?>"><i class="fa fa-circle-o"></i>رویداد های در حال برگزاری</a></li>
                    <li class="active"><a href="<?php $this->url('manage_webinars/webinar_over') ?>"><i class="fa fa-circle-o"></i>رویداد های برگزار شده</a></li>
                    <li class="active"><a href="<?php $this->url('manage_webinars/webinar_archive') ?>"><i class="fa fa-circle-o"></i>رویداد های بایگانی شده</a></li>
                </ul>
            </li>
				<li class="treeview">
                <a href="#">
                    <i class="fa fa-tv"></i> <span>مدیریت اتاق جلسات</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php $this->url('manage_meetingroom/list_request_meetingroom') ?>"><i class="fa fa-circle-o"></i>درخواست اتاق جلسات</a></li>
                    <li class="active"><a href="<?php $this->url('manage_meetingroom/list_ongoing_meetingroom') ?>"><i class="fa fa-circle-o"></i>اتاق جلسات درحال برگزاری</a></li>
                    <li class="active"><a href="<?php $this->url('manage_meetingroom/list_held_meetingroom') ?>"><i class="fa fa-circle-o"></i>اتاق جلسات برگزارشده</a></li>
                    <li class="active"><a href="<?php $this->url('manage_meetingroom/list_archive_meetingroom') ?>"><i class="fa fa-circle-o"></i>اتاق جلسات بایگانی شده</a></li>
                </ul>
            </li>
			            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tv"></i> <span>مدیریت اتاق آنلاین</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php $this->url('room_management/submit_manual_room') ?>"><i class="fa fa-circle-o"></i>ثبت دستی اتاق رویداد آنلاین</a></li>
                    <li class="active"><a href="<?php $this->url('room_management/submit_manual_user') ?>"><i class="fa fa-circle-o"></i>ثبت دستی کاربر رویداد آنلاین</a></li>
                    <li class="active"><a href="<?php $this->url('room_management/get_direct_link_skyroom') ?>"><i class="fa fa-circle-o"></i>دریافت لینک مستقیم رویداد</a></li>
                    <li class="active"><a href="<?php $this->url('room_management/get_indirect_link_room') ?>"><i class="fa fa-circle-o"></i>دریافت لینک خودکار رویداد</a></li>
                    <li class="active"><a href="<?php $this->url('room_management/service_status') ?>"><i class="fa fa-circle-o"></i>وضعیت سرویس</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>مدیریت امور مالی</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php $this->url('transaction/report_transaction_webinar') ?>"><i class="fa fa-circle-o"></i>گزارش مالی تراکنشات وبینار</a></li>
                    <li class="active"><a href="<?php $this->url('transaction/report_transaction_user') ?>""><i class="fa fa-circle-o"></i>گزارش مالی تراکنشات کاربر</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i> <span>مدیریت محتوا</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php $this->url('blog/insert_blog') ?>"><i class="fa fa-circle-o"></i>انتشار محتوای جدید</a></li>
                    <li class="active"><a href="<?php $this->url('blog/index') ?>"><i class="fa fa-circle-o"></i>مشاهده محتوا های ثبت شده</a></li>
                    <li class="active"><a href="<?php $this->url('blog/insert_category/') ?>"><i class="fa fa-circle-o"></i>ایجاد دسته بندی جدید</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>مدیریت سرویس پیامک</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php $this->url('sms_manage/send') ?>"><i class="fa fa-circle-o"></i>ارسال پیامک</a></li>
                    <li class="active"><a href="<?php $this->url('sms_manage/received') ?>"><i class="fa fa-circle-o"></i>دریافت پیامک</a></li>
                    <li class="active"><a href="<?php $this->url('sms_manage/condition') ?>"><i class="fa fa-circle-o"></i>پیکربندی وضعیت پیامک</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>