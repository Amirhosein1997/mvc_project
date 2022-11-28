<!DOCTYPE html>
<html lang="fa">
<head>
<style type="text/css">
#loader {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  background: rgba(0,0,0,0.75) url(images/loading2.gif) no-repeat center center;
  z-index: 10000;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه جامع برتا |ویرایش فایل اتاق جلسه</title>
    <link rel="icon" href="<?php $this->asset('img/icon.png')  ?>">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap-rtl.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/fontawesome/css/all.css') ?>">
	<script src="https://cdn.tiny.cloud/1/fcdzvd626kk9sldy2wvyjcfl4acd6hiznqqc3z8gx3yqfy3u/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>


        var useDarkMode = window.matchMedia('(prefers-color-scheme: light)').matches;

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
<body>
<?php
if (isset($_SESSION['login_user'])) :
    ?>
<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <div class="row" style="margin-top: 3%;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
						<?php if($notification == 'edit'): ?>
						<div class="alert alert-success" id="preloader-container">
							ویرایش اطلاعات اولیه اتاق جلسه با موفقیت انجام شد.
						</div>
						<?php else: ?>
				<form method="post" action="#">
                    <div class="box box-primary">
						<div class="form-group">
                        <label for="0"> عنوان اتاق جلسه موردنظر : <span style="color:red;">*</span></label>
                        <input id="0" type="text" class="form-control" name="info_meetingroom[titleroom]" value="<?php echo $info_meetingroom->titleroom ?>" placeholder="لطفا عنوان اتاق جلسه خود را وارد کنید." required>
                   		</div>

                    <div class="form-group">
                        <label for="3" id="myButton"  class="text-right">عنوان سازمان :<span style="color:red;">*</span></label>
						<input id="0" type="text" class="form-control" name="info_meetingroom[titleorgnization]" value="<?php echo $info_meetingroom->titleorgnization ?>" placeholder="لطفا عنوان سازمان/واحد خود را وارد کنید." required>

                    </div>

                    <div class="form-group">
                        <label for="3" id="myButton"  class="text-right">قسمت برگزارکننده سازمان</label>
						<input id="0" type="text" class="form-control" name="info_meetingroom[partorganization]" value="<?php echo $info_meetingroom->partorganization ?>" placeholder="لطفا عنوان سازمان/واحد خود را وارد کنید." required>

                    </div>
					

					<div id="demo"></div>
						<div class="form-group">
                        <label for="3" id="myButton"  class="text-right">زمان و تاریخ برگزاری جلسه<span style="color:red;">*</span></label>
                        <div class="form-row">
							
                <input id="4" class="form-control col-md-4 text-center" type="text" name="info_meetingroom[time]" placeholder="ساعت برگزاری جلسه" value="<?php echo $info_meetingroom->time ?>"" required>
				<?php $date = explode('/', $info_meetingroom->date); ?>
							<div class="col-md-1"></div>
                            <input id="4" class="form-control col-md-1 text-center" type="text" name="info_meetingroom[day]" value="<?php echo $date[2] ?>" placeholder="روز برگزاری جلسه" value="12" required>
							<input id="4" class="form-control col-md-1 text-center" type="text" name="info_meetingroom[month]" value="<?php echo $date[1] ?>" placeholder="ماه برگزاری جلسه" value="10" required>
							<input id="4" class="form-control col-md-2 text-center" type="text" name="info_meetingroom[years]" value="<?php echo $date[0] ?>" placeholder="سال برگزاری جلسه" value="1401" required>
							<div class="col-md-1"></div>
                        </div>

					</div>
						<div class="form-group">
                        <label for="3" id="myButton"  class="text-right">دستور اتاق جلسه<span style="color:red;">*</span></label>
						<textarea id="open-source-plugins" class="form-control" name="info_meetingroom[ordermeeting]" placeholder="ثبت دستور اتاق جلسه"><?php echo $info_meetingroom->ordermeeting ?></textarea>
						</div>
						<input type="hidden" name="code" value="<?php echo $info_meetingroom->code_meetingroom ?>">
						<button type="submit" class="btn btn-success form-control">بروزرسانی اطلاعات اولیه</button>								
                        </div>
                      </div>
                    </div>
				</form>
				<?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</div>
<div id="loader"></div>

<?php else:
    $this->route('user/login/user');
    ?>
<?php endif; ?>


