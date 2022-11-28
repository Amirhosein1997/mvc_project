<?php
$this->include('admin.layouts.header');
use application\model\blog as blogModel;
?>
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
                        <h3 class="box-title">لیست تمام نظرات ارسال شده</h3>
                    </div>
                    <div class="box box-body">
                        <div class="box-body no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">نام و نام خانوادگی</th>
                                    <th scope="col">متن پیام</th>
                                    <th scope="col">راه های ارتباطی</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($message_tbl)):
                                    $query = new blogModel();
                                foreach ($message_tbl as $key => $message):
                                    $phone = $query->users_tbl($message->phone);
                                    $answer_message = $query->answer_message($message->id);
                                    $text = explode(' ',$message->text );
                                    $esa= array_splice($text,0,4);
                                    $ima = implode(' ', $esa);
                                    if ($message->parent == 0):
                                    ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1 ?></th>
                                    <td><?php echo $phone->name.' '.$phone->family?></td>
                                    <td><?php echo $ima.'...' ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> راه های ارتباطی
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href=""><?php echo $phone->phone ?></a></li>
                                                <li><a href="#"><?php echo $phone->email ?></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <?php if ($message->status == 'off'): ?>
                                    <td><p class="label label-warning">معلق</p></td>
                                    <?php else: ?>
                                    <td><p class="label label-success">تایید شده</p></td>
                                    <?php endif; ?>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true">عملیات ها
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php $this->url('blog/answering/'.$message->id) ?>">مشاهده جزییات و ارسال پاسخ</a></li>
                                                <li><a href="<?php $this->url('blog/delete_message/'.$message->id) ?>"> حذف</a></li>
                                                <?php if ($message->status == 'off'):?>
                                                    <li><a href="<?php $this->url('blog/edit_status_message/'.$message->id) ?>">نمایش در سایت</a></li>
                                                <?php else: ?>
                                                     <li><a href="<?php $this->url('blog/edit_status_message/'.$message->id) ?>">معلق</a></li>
                                                 <?php endif; ?>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                    <?php endif; ?>
                                <?php
                                    foreach ($answer_message as $answer):
                                        $text = explode(' ',$answer->text );
                                        $esa= array_splice($text,0,15);
                                        $text = implode(' ', $esa);
                                    ?>
                                <tr>
                                    <td><p class="fa fa-reply"></p></td>
                                    <td><?php echo 'admin'?></td>
                                    <td><?php echo $text?></td>
                                    <td><?php echo 'admin'?></td>
                                    <?php if ($answer->status == 'off'): ?>
                                        <td><p class="label label-warning">معلق</p></td>
                                    <?php else: ?>
                                        <td><p class="label label-success">تایید شده</p></td>
                                    <?php endif; ?>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true">عملیات ها
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <?php if ($answer->status == 'off'): ?>
                                                    <li><a href="<?php $this->url('blog/edit_status_message/'.$answer->id) ?>">نمایش در سایت</a></li>
                                                <?php else: ?>
                                                    <li><a href="<?php $this->url('blog/edit_status_message/'.$answer->id) ?>">معلق</a></li>
                                                <?php endif; ?>
                                                <li><a href="<?php $this->url('blog/delete_message/'.$answer->id) ?>"> حذف</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endforeach; ?>
                                <?php endif;
                                ?>
                                <?php
                                if (isset($list_comment)):
                                    $query = new blogModel();
                                foreach ($list_comment as $key => $message):
                                    $phone = $query->users_tbl($message->phone);
                                    $answer_message = $query->answer_message($message->id);
                                    $text = explode(' ',$message->text );
                                    $esa= array_splice($text,0,4);
                                    $ima = implode(' ', $esa);
                                    if ($message->parent == 0):
                                    ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1 ?></th>
                                    <td><?php echo $phone->name.' '.$phone->family?></td>
                                    <td><?php echo $ima.'...' ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> راه های ارتباطی
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href=""><?php echo $phone->phone ?></a></li>
                                                <li><a href="#"><?php echo $phone->email ?></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <?php if ($message->status == 'off'): ?>
                                    <td><p class="label label-warning">معلق</p></td>
                                    <?php else: ?>
                                    <td><p class="label label-success">تایید شده</p></td>
                                    <?php endif; ?>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true">عملیات ها
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php $this->url('manage_webinars/answering/'.$message->id) ?>">مشاهده جزییات و ارسال پاسخ</a></li>
                                                <li><a href="<?php $this->url('blog/delete_message/'.$message->id) ?>"> حذف</a></li>
                                                <?php if ($message->status == 'off'):?>
                                                    <li><a href="<?php $this->url('blog/edit_status_message/'.$message->id) ?>">نمایش در سایت</a></li>
                                                <?php else: ?>
                                                     <li><a href="<?php $this->url('blog/edit_status_message/'.$message->id) ?>">معلق</a></li>
                                                 <?php endif; ?>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                    <?php endif; ?>
                                <?php
                                    foreach ($answer_message as $answer):
                                        $text = explode(' ',$answer->text );
                                        $esa= array_splice($text,0,15);
                                        $text = implode(' ', $esa);
                                    ?>
                                <tr>
                                    <td><p class="fa fa-reply"></p></td>
                                    <td><?php echo 'admin'?></td>
                                    <td><?php echo $text?></td>
                                    <td><?php echo 'admin'?></td>
                                    <?php if ($answer->status == 'off'): ?>
                                        <td><p class="label label-warning">معلق</p></td>
                                    <?php else: ?>
                                        <td><p class="label label-success">تایید شده</p></td>
                                    <?php endif; ?>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true">عملیات ها
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <?php if ($answer->status == 'off'): ?>
                                                    <li><a href="<?php $this->url('blog/edit_status_message/'.$answer->id) ?>">نمایش در سایت</a></li>
                                                <?php else: ?>
                                                    <li><a href="<?php $this->url('blog/edit_status_message/'.$answer->id) ?>">معلق</a></li>
                                                <?php endif; ?>
                                                <li><a href="<?php $this->url('blog/delete_message/'.$answer->id) ?>"> حذف</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endforeach; ?>
                                <?php endif;
                                ?>
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




