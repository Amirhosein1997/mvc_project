<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>سامانه جامع برتا | کنترل پنل مدیریت</title>
    <!-- Tell the browser to be responsive to screen width -->
    <style>
        @media print {
            #printPageButton {
                display: none;
            #notprintPageButton{
                display: block;
            }
        }
        }

    </style>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap-theme.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/rtl.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/persian-datepicker-0.4.5.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/AdminLTE.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/_all-skins.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/morris.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/jquery-jvectormap.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/daterangepicker.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/daterangepicker.css') ?>">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://cdn.tiny.cloud/1/fcdzvd626kk9sldy2wvyjcfl4acd6hiznqqc3z8gx3yqfy3u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

	

    <script>


        var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

        tinymce.init({
            selector: 'textarea#open-source-plugins',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            language: 'fa',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [
                { title: 'My page 1', value: 'https://www.tiny.cloud' },
                { title: 'My page 2', value: 'http://www.moxiecode.com' }
            ],
            image_list: [
                { title: 'My page 1', value: 'https://www.tiny.cloud' },
                { title: 'My page 2', value: 'http://www.moxiecode.com' }
            ],
            image_class_list: [
                { title: 'None', value: '' },
                { title: 'Some class', value: 'class-name' }
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                }
            },
            templates: [
                { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            /* height: 443, */
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });



    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="<?php $this->url('admin/index') ?>" class="logo" style="background-color: #18577b;">
            <span class="logo-mini">پنل</span>
            <span class="logo-lg"><b> سامانه جامع برتا</b></span>
        </a>
        <nav class="navbar navbar-static-top" style="background-color: #18577b;}">
            <a href="#" class="sidebar-toggle"  data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <a class="btn btn-danger margin" href="<?php $this->url('admin/exit'); ?>" style="float: left">خروج از سامانه</a>
            <a class="btn btn-success margin" href="https://eberta.ir" style="float: left" target="_blank" >نمایش وب سایت</a>
            <a class="btn btn-warning margin" href="https://cp58.netafraz.com/roundcube" style="float: left" target="_blank" >ورود به ایمیل سازمانی</a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu" style="float: left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php $this->asset('img/panel/123.jpg') ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs">مهدی نوبهاری</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php $this->asset('img/panel/123.jpg') ?>" class="img-circle" alt="User Image">

                                <p>
                                    مهدی نوبهاری
                                    <small>مدیرت سامانه برتا</small>
                                </p>

                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">خروج</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php $this->include('admin.layouts/menu') ?>