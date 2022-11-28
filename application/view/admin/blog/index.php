<?php $this->include('admin.layouts.header'); ?>
<?php
if ($_SESSION['adminbertapanel']) :
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row" style="margin-top: 3%;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">مشاهده محتوا های ثبت شده</h3>
                    </div>
                    <div class="box box-body">
                        <div class="box-body no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">تصویر شاخص</th>
                                    <th scope="col">منتشر کننده</th>
                                    <th scope="col">تاریخ و زمان انتشار</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($res)):
                                    foreach ($res as $key => $val):
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1?></th>
                                    <td><?php echo $val-> title ?></td>
                                    <td>
                                            <img src="<?php echo '../'.$val -> img?>" class="img-fluid rounded-start mb-4" alt="..." style="width: 50%;max-width: 50%;height: 60px;">
                                    </td>
                                    <td>مهدی نوبهاری</td>
                                    <td><?php echo $val->date ?></td>
                                    <td>
                                        <?php if ($val->status	 == 'off'):?>
                                        <P class="label label-danger">غیر فعال</P>
                                        <?php else: ?>
                                        <P class="label label-success"> فعال</P>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php $this->url('blog/edit_blog/'.$val->id) ?>">مشاهده اطلاعات و ویرایش </a></li>
                                                <li><a href="<?php $this->url('blog/list_comments/'.$val->id) ?>">مشاهده تمام نظرات</a></li>
                                                <li>
                                                    <?php if ($val->status	 == 'off'):?>
                                                    <a href="<?php $this->url('blog/edit_status_blog/'.$val->id) ?>">فعال</a>
                                                    <?php else: ?>
                                                    <a href="<?php $this->url('blog/edit_status_blog/'.$val->id) ?>">غیر فعال</a>
                                                    <?php endif; ?>
                                                </li>
                                                <li><a href="<?php $this->url('blog/delete_blog/'.$val->id) ?>">حذف وبلاگ</a></li>
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
        </div>
    </section>
</div>
<?php
else:
    $this->route('user/login/user');
    ?>
<?php endif;?>
<?php $this->include('admin.layouts.footer'); ?>




