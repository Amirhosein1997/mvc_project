					    <div class="box-body">
                            <div class="box-body no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="form-group">
                                        <th scope="col"><button class="form-control">ردیف</button></th>
                                        <th scope="col"><button class="form-control">َشماره سفارش</button></button></th>
                                        <th scope="col"><button class="form-control">َکدرهگیری</button></button></th>
                                        <th scope="col"><button class="form-control">نام و نام خانوادگی</button></th>
                                        <th scope="col"><button class="form-control">تلفن تماس</button></th>
                                        <th scope="col"><button class="form-control">هزینه پرداختی</button></th>
                                        <th scope="col"><button class="form-control">تخفیف</button></th>
                                        <th scope="col"><button class="form-control">تاریخ پرداخت</button></th>
                                        <th scope="col"><button class="form-control"> وضعیت پرداخت</button></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (isset($show_transaction_webinar)):
                                        foreach ($show_transaction_webinar as $key=>$transaction):
                                            ?>
                                            <tr>
                                                <th scope="row"><button class="form-control "><?php echo $key+1;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-soundcloud"><?php echo $transaction->order_id;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-dropbox"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                                                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"></path>
                                                        </svg> <?php echo $transaction->track_id;?></button></th>
                                                <th scope="row"><button class="form-control btn btn-facebook "><?php echo $transaction->fullname;?></button></th>
                                                <th scope="row"><a class="form-control btn btn-success" href="" target="_blank"><?php echo$transaction->phone;?></a></th>
                                                <th scope="row"><button class="form-control  btn-github"><?php echo $transaction->amount." "."ریال";?></button></th>
                                                <th scope="row"><button class="form-control btn-warning ">
                                                        <?php
                                                        $webinar_info = new \application\model\Webinar();
                                                        $webinar_info = $webinar_info->find('webinars_tbl','id',$transaction->id_webinar);
														if($webinar_info->price != '0'){
                                                        $result = ($transaction->amount*100)/$webinar_info->price;
                                                        $result = 100-$result;
														}
														if($webinar_info->price == '0'){
															echo 'رویداد رایگان';
														}
														else{
                                                        echo $result.""."درصد";
														}
                                                        ?>
                                                    </button></th>
                                                <th scope="row"><button class="form-control btn-bitbucket"><?php echo $transaction->date_orginal;?></button></th>
                                                <th scope="row"><button class="form-control">
                                                        <?php
                                                        switch ($transaction->status){
                                                            case 10:
                                                                echo 'درانتظار تایید پرداخت';
                                                                break;
                                                            case 100:
                                                                echo 'تایید پرداخت';
                                                                break;
                                                        }
                                                        ?>
                                                    </button></th>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
														
                        </div>