<?php
use application\model\blog as blogModel;
$blog = new blogModel();
$categories = $blog->select_category_blog();
$this->include('admin.layouts.header');
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
                        <h3 class="box-title">انتشار محتوای جدید</h3>
                    </div>
                    <div class="row">
                        <?php if (isset($cat)): ?>
                        <form class="my-form col-md-12" method="post" enctype="multipart/form-data" action="<?php echo $this->url('blog/edit_blog/'.$cat->id) ?>">
                        <?php else: ?>
                        <form class="my-form col-md-12" method="post" enctype="multipart/form-data" action="<?php echo $this->url('blog/insert_blog') ?>">
                        <?php endif; ?>
                        <div class="col-md-8" style="padding: 2%;">
                            <div class="form-group">
                                <label for="exampleInputPassword0">عنوان وبلاگ</label>
                                <input type="text" class="form-control" id="exampleInputPassword0" name="info[title]" <?php if (isset($cat)):?> value="<?php echo $cat -> title?>" <?php endif; ?>  placeholder="عنوان وبلاگ خود را وارد  کمید.">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword10">خلاصه توضیحات وبلاگ</label>
                                <textarea  id="exampleInputPassword10" rows="5" class="form-control" name="info[description]"><?php if (isset($cat)){ echo  $cat->description; } ?></textarea>
                            </div>
                            <?php if (!isset($cat)): ?>
                            <div class="form-group">
                                <label for="exampleInputPassword1">تصویر شاخص</label>
                                <input  type="file" class="form-control" id="exampleInputPassword1" name="image" >
                            </div>
                            <?php endif; ?>
                            <?php if (isset($cat)): $text = htmlspecialchars($cat->text); ?>
                                <textarea  id="open-source-plugins"  rows="27" class="form-control" name="info[text]"><?php echo $text?></textarea>
                            <?php else: ?>
                                <textarea  id="open-source-plugins"  class="form-control" name="info[text]" ></textarea>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-4" style="padding: 2%;">
                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">دسته بندی ها</h3>
                                </div>
                                <div class="box-body">
                                    <h5 class="box-title"><strong>دسته بندی اصلی خود را انتخاب کنید</strong></h5>
                                    <?php
                                    foreach ($categories as $category):
                                            if ($category->parent == 0):
                                    ?>
                                    <div class="radio">
                                        <label><input type="radio" name="main_cat[]" id="optionsRadios2" value="<?php echo $category->id?>" <?php if (isset($cat)){if (strpos($cat->main_cat , $category->id) !== false ){echo 'checked';}} ?> ><?php echo $category->title?></label>
                                    </div>
                                    <?php
                                    endif;
                                    endforeach;
                                    ?>
                                    <hr>
                                    <h5 class="box-title"><strong>دسته بندی های خود را انتخاب کنید</strong></h5>
                                    <div class="form-group">
                                        <?php
                                        foreach ($categories as $key=>$category):
												if($key<5):
                                                if ($category->parent == 0):
												
                                        ?>
                                        <div class="checkbox">
                                            <label><input name="cat[]"  value="<?php echo $category->id?>" type="checkbox" <?php if (isset($cat)){if (strpos($cat->category , $category->id) !== false ){echo 'checked';}} ?> ><?php echo $category->title?></label>
                                        </div>
                                            <?php endif; ?>
                                        <?php if (!$category->parent == 0): ?>
                                            <div class="checkbox">
                                                <P class="fa fa-reply" style="font-size: 11px;"></P><label><input name="cat[]" value="<?php echo $category->id?>" type="checkbox" <?php if (isset($cat)){if (strpos($cat->category , $category->id) !== false ){echo 'checked';}} ?> ><?php echo $category->title?></label>
                                            </div>
                                        <?php endif; ?>
										<?php endif; ?>
                                        <?php endforeach; ?>
										<div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne0" aria-expanded="false" class="collapsed btn btn-danger">
                                                        مشاهده بیشتر +
                                                    </a>
                                                </h4>
                                        </div>
                                        <div id="collapseOne0" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
										<?php
                                        foreach ($categories as $key=>$category):
												if($key>=5):
                                                if ($category->parent == 0):
												
                                        ?>
                                        <div class="checkbox">
                                            <label><input name="cat[]"  value="<?php echo $category->id?>" type="checkbox" <?php if (isset($cat)){if (strpos($cat->category , $category->id) !== false ){echo 'checked';}} ?> ><?php echo $category->title?></label>
                                        </div>
                                            <?php endif; ?>
                                        <?php if (!$category->parent == 0): ?>
                                            <div class="checkbox">
                                                <P class="fa fa-reply" style="font-size: 11px;"></P><label><input name="cat[]" value="<?php echo $category->id?>" type="checkbox" <?php if (isset($cat)){if (strpos($cat->category , $category->id) !== false ){echo 'checked';}} ?> ><?php echo $category->title?></label>
                                            </div>
                                        <?php endif; ?>
										<?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
									</div>
                                </div>
                            </div>
                            <?php
                            if (isset($cat)):
                                ?>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">تصویر شاخص</h3>
                                </div>
                                <div class="box-body">
                                    <img src="<?php echo '../../'.$cat -> img?>" class="img-fluid rounded-start mb-4" alt="..." style="width: 100%;max-width: 100%;height: 250px;margin-bottom: 5%;">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">انتخاب تصویر جدید</label>
                                        <input  type="file" class="form-control" id="exampleInputPassword1" name="image" >
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if (isset($cat)): ?>
                            <input type="submit" name="edit" class="btn btn-primary form-control" value="ثبت و ویرایش محتوا">
                            <?php else: ?>
                            <input type="submit" name="" class="btn btn-primary form-control" value="ثبت و انتشار محتوا">
                            <?php endif; ?>
                        </div>
                        </form>
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



