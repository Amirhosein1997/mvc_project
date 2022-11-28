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
                        <h3 class="box-title">لیست درخواست های اتاق جلسات</h3>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
							<th scope="col">درخواست دهنده</th>
                            <th scope="col">عنوان اتاق</th>
                            <th scope="col">سازمان/واحد</th>
                            <th scope="col">تاریخ برگزاری</th>
                            <th scope="col">وضعیت دوره</th>
                            <th scope="col">عملیات ها</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($info_request_meetingroom)):
                            foreach ($info_request_meetingroom as $key=>$meetingroom) :
                        ?>
                        <tr>
                            <td><?php echo $key+1 ; ?></td>
                            <td><?php echo $meetingroom->titleroom ; ?></td>
                            <td><?php
                                $info_user_organizer = new \application\model\User();
                                $info_user_organizer = $info_user_organizer->find('users_tbl' , 'id' , $meetingroom->id_req_user);
                                echo $info_user_organizer->name. " " .$info_user_organizer->family;
                            ?> </td>
							<td><?php echo $meetingroom->titleorgnization ; ?></td>
							<td><?php echo $meetingroom->date ; ?></td>

                            <td><span class="label label-success">درحال بررسی</span></td>
                            <td>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">عمیلات ها
                                        <span class="fa fa-caret-down"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php $this->url('manage_meetingroom/information_meetingroom/'."$meetingroom->id".'/'."$info_user_organizer->id") ?>">مشاهده اطلاعات کامل</a></li>
                                        <li><a href="<?php $this->url('#') ?>">حذف</a></li>
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


