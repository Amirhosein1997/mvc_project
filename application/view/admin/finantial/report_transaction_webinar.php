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
                            <h3 class="box-title">دریافت گزارش تراکنشات رویداد</h3>
                        </div>
                        <form class="form-group" method="post" action="<?php $this->url('transaction/search_transaction_webinar'); ?>">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword0">جستجوی رویداد</label>
                                        <input type="text" class="form-control" name="event" placeholder="لطفا نام رویداد مورد نظر را بنویسید ...">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword0">.</label>
                                            <input type="submit" name="submit" class="form-control btn btn-primary" value="شروع فرآیند جستجو">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">مشاهده نتیجه جستجو رویداد</h3>
                        </div>
                        <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">عنوان رویداد</button></button></th>
                                        <th scope="col"><button class="form-control">شناسه احراز اسکای روم</button></th>
                                        <th scope="col"><button class="form-control">ایجاد کننده</button></th>
                                        <th scope="col"><button class="form-control">وضعیت</button></th>
                                        <th scope="col"><button class="form-control">مشاهده تراکنشات</button></th>
										
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($searchs)):
                                        foreach ($searchs as $key=>$search):
                                            ?>
                                            <tr>
                                                <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-soundcloud"><?php echo $search->title;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-dropbox"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                                                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"></path>
                                                        </svg> <?php echo $search->skyroom_id;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-facebook "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                                        </svg>
                                                    <?php
                                                        $name_provider = new \application\model\User();
                                                        $name_provider = $name_provider->find('users_tbl','id',$search->id_req_user);
                                                        echo $name_provider->name." ".$name_provider->family;
                                                    ?>
                                                    </button></th>
                                                <th scope="row"><button class="form-control btn btn-success"><?php
                                                        switch ($search->final_status){
                                                            case 1:
                                                                echo 'درحال برگزاری';
                                                                break;
                                                            case 2:
                                                                echo 'بایگانی شده';
                                                                break;
															case 3:
                                                                echo 'برگزار شده';
                                                                break;	
                                                        }
                                                        ;?></button></th>
                                                <th scope="row" style="text-align: center!important;">
                                                    <a class="form-control btn btn-github" href="<?php $this->url('transaction/show_transactions_webinar/'.$search->id); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                    </svg>
                                                    </a>
                                                </th>
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




