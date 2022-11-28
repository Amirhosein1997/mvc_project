<?php
use application\model\User as UserModel;
$this->include('admin.layouts.header');
?>
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
                            <h3 class="box-title">لیست وبینار های  <?php echo $status; ?></h3>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">کد وبینار</th>
                                <th scope="col">عنوان وبینار</th>
                                <th scope="col">برگزار کننده</th>
                                <th scope="col">تاریخ وزمان برگزاری</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                             if (isset($webinar_status_1)):
                                 $model_user = new UserModel();
                             foreach ($webinar_status_1 as $key => $webinar):
                                 $user = $model_user->find('users_tbl','id',$webinar->id_req_user);
                             ?>
                            <tr>
                                <td><?php echo $key + 1?></td>
                                <td><?php echo $webinar->title ?></td>
                                <td><?php echo $user->name.' '.$user->family ?></td>
                                <td><?php echo $webinar->date_submit?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                            <span class="fa fa-caret-down"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php $this->url('manage_webinars/webinar_information/'."$webinar->id".'/'."$user->id") ?>">مشاهده جزییات و ویرایش وبینار</a></li>
                                            <li><a href="<?php $this->url('manage_webinars/list_participants/'."$webinar->id".'/'."$user->id") ?>">دریافت لیست شرکت کنندگان</a></li>
                                            <li><a href="<?php $this->url('transaction/define_discountcode/'."$webinar->id") ?>">پیکربندی کدتخفیف</a></li>
                                            <li><a href="<?php $this->url('blog/list_comments/'.$webinar->id) ?>">مشاهده تمام نظرات</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php
                             endforeach;
                             endif;
                             ?>
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

