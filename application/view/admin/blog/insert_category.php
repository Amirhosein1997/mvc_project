<?php
$this->include('admin.layouts.header');
use application\model\blog as contentModel;
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
                        <h3 class="box-title">ایجاد دسته بندی جدید</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
						<?php if($category!=null): ?>
                            <form class="my-form" method="post" enctype="multipart/form-data" action="<?php echo $this->url('blog/insert_category/'.$category->id) ?>">
							<?php else: ?>
                            <form class="my-form" method="post" enctype="multipart/form-data" action="<?php echo $this->url('blog/insert_category/') ?>">
							<?php endif; ?>
                                <div class="col-md-12">
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputPassword0">عنوان دسته بندی را وارد کنید</label>
                                        <input type="text" class="form-control" id="exampleInputPassword0" name="info[title]" value="<?php if($category!=null){echo $category->title;} ?>" placeholder="لطفا عنوان دسته بندی خود را وارد  کنید." required>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputPassword1">دسته بندی خود را وارد کنید</label>
                                        <select class="form-control" id="exampleInputPassword1" name="info[parent]" aria-label="select example" required>
                                            <option selected disabled>لطفا دسته بندی خود را وارد کنید</option>
                                <option value="0" style="background-color:#5db575;color:white;" <?php if($category!=null and $category->parent == 0){echo 'selected';} ?>>اختصاص به عنوان یک دسته بندی جدید</option>
                                            <?php
                                            if (isset($parent0)) :
                                                foreach ($parent0 as $val):
                                            ?>
                                            <option value="<?php echo $val->id ?>" style="background-color:#646a97;color:white;" <?php if($category!=null and $category->parent == $val->id){echo 'selected';} ?> >اختصاص به دسته > <?php echo $val->title ?></option>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword0">اولویت</label>
                             <input type="number" class="form-control" id="exampleInputPassword0" name="info[importance]" value="<?php if($category!=null){echo $category->importance;}?>" placeholder="اولویت نمایش" required>
                                    </div>									
                                    <div class="form-group col-md-12">
                                        <label for="text">توضیحات</label>
                                        <textarea rows="5" class="form-control" name="info[text]" placeholder="توضیحات مربوط به دسته بندی خود را وارد کنید"><?php if($category!=null){echo $category->text;} ?></textarea>
                                    </div>
									<?php if($category!=null): ?>
                                    <input class="btn btn-primary" type="submit" name="edit_category" style="float: left;" value="ویرایش دسته بندی">
									<?php else: ?>
                                    <input class="btn btn-primary" type="submit" name="submit_category" style="float: left;" value="ایجاد دسته بندی">
									<?php endif; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">لیست دسته بندی ها</h3>
                    </div>
                    <div class="box box-body">
                        <div class="box-body no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ردیف</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">توضیحات</th>
									<th scope="col">اولویت</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($parent0)):
                                    $query = new contentModel();
                                    foreach ($parent0 as $key => $val1):
                                        $reply = $query->select_parent_category($val1->id);

                                ?>
                                        <tr>

                                            <td><button class="form-control"><strong><?php echo $key + 1 ?></strong></button></td>
                                            <td><button class="form-control btn btn-warning"><?php echo $val1->title ?></button></td>
											<?php if($val1->text == ""): ?>
											<td><button class="form-control btn btn-danger">توضیحات این دسته بندی اعلام نشده است</button></td>
											<?php else: ?>
                                            <td><button class="form-control btn btn-warning"><?php echo $val1->text ?></button></td>
											<?php endif; ?>
                                            <!--todo author-->
                                            <td><button class="form-control btn btn-warning"><?php echo $val1->importance ?></button> </td>
                                            <?php if ($val1->status == 'off'):?>
                                            <td><button class="form-control btn btn-danger">غیرفعال</button></td>
                                            <?php else: ?>
                                            <td><button class="form-control btn btn-success">فعال</button></td>
                                            <?php endif; ?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                                        <span class="fa fa-caret-down"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <?php if ($val1->status == 'off'):?>

                                                            <li><a href="<?php $this->url('blog/category_status/'."$val1->id") ?>">فعال کردن</a></li>
                                                        <?php else: ?>

                                                            <li><a href="<?php $this->url('blog/category_status/'."$val1->id") ?>">غیر فعال کردن</a></li>
                                                        <?php endif; ?>
                                                        <li><a href="<?php $this->url('blog/insert_category/'."$val1->id") ?>">ویرایش</a></li>
                                                        <li><a href="<?php $this->url('blog/delete_category/'."$val1->id") ?>">حذف</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php foreach ($reply as $key1 => $value): ?>
                                        <tr>
                                        <td><p class="form-control fa fa-reply"></p></td>
                                        <td ><button class="form-control btn btn-linkedin"><?php echo $value->title ?></button></td>
											<?php if($value->text == ""): ?>
											<td><button class="form-control btn btn-danger">توضیحات این زیر مجموعه اعلام نشده است</button></td>
											<?php else: ?>
                                            <td><button class="form-control btn btn-linkedin"><?php echo $value->text ?></button></td>
											<?php endif; ?>                                            <!--todo author-->
                                            <td><button class="form-control btn btn-linkedin"><?php echo $value->importance ?></button> </td>
                                            <?php if ($value->status == 'off'):?>
                                            <td><button class="form-control btn btn-danger">غیرفعال</button></td>
                                            <?php else: ?>
                                                <td><button class="form-control btn btn-success">فعال</button></td>
                                            <?php endif; ?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> عملیات
                                                        <span class="fa fa-caret-down"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <?php if ($value->status == 'off'):?>

                                                            <li><a href="<?php $this->url('blog/category_status/'."$value->id") ?>">فعال کردن</a></li>
                                                        <?php else: ?>

                                                            <li><a href="<?php $this->url('blog/category_status/'."$value->id") ?>">غیر فعال کردن</a></li>
                                                        <?php endif; ?>
															<li><a href="<?php $this->url('blog/insert_category/'."$value->id") ?>">ویرایش</a></li>

                                                        <li><a href="<?php $this->url('blog/delete_category/'."$value->id") ?>">حذف</a></li>
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




