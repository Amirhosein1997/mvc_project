<?php $this->include('admin.layouts.header'); ?>
<?php
if ($_SESSION['adminbertapanel']) :
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row" style="margin-top: 3%;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">لیست درخواست های برگزاری وبینار</h3>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            <th scope="col">عنوان دوره</th>
                            <th scope="col"> نام مدرس</th>
                            <th scope="col">راه های ارتباطی</th>
                            <th scope="col">وضعیت دوره</th>
                            <th scope="col">عملیات ها</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($info_request_webinars)):
                            foreach ($info_request_webinars as $key=>$info_request_webinar) :
                        ?>
                        <tr>
                            <td><?php echo $key+1 ; ?></td>
                            <td><?php echo $info_request_webinar->title ; ?></td>
                            <td><?php
                                $info_user_organizer = new \application\model\User();
                                $info_user_organizer = $info_user_organizer->find('users_tbl' , 'id' , $info_request_webinar->id_req_user);
                                echo $info_user_organizer->name. " " .$info_user_organizer->family;
                            ?> </td>
                            <td>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">اطلاعات تماس
                                        <span class="fa fa-caret-down"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a><?php echo $info_user_organizer->phone; ?></a></li>
                                        <li><a><?php echo $info_user_organizer->email; ?></a></li>
                                    </ul>
                                </div>
                            </td>
                            <td><span class="label label-success"><?php echo $info_request_webinar->status; ?></span></td>
                            <td>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">عمیلات ها
                                        <span class="fa fa-caret-down"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php $this->url('manage_webinars/webinar_information/'."$info_request_webinar->id".'/'."$info_user_organizer->id") ?>">مشاهده اطلاعات کامل</a></li>
                                        <li><a href="<?php $this->url('manage_webinars/delete_webinar/'."$info_request_webinar->id") ?>">حذف</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<!-- /.row -->
   </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
else:
    $this->route('user/login/user');
    ?>
<?php endif;?>
<?php $this->include('admin.layouts.footer'); ?>


