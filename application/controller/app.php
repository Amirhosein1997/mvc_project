<?php


namespace application\controller;
use application\model\Model;
use application\model\User as UserModel;
use application\model\App as appModel;
use application\model\Webinar as WebinarModel;
use application\model\Webinar;
use application\controller\Date as date;
use application\model\Meetingroom as MeetingroomModel;
class App extends Controller
{

    public function index()
    {
        $appModel = new appModel();
        $blogs = $appModel->blog_tbl();
        $this->view('app.index',compact('blogs'));

    }
    public function panel_user()
    {
        $this->view('app.panel.index',compact('info_user','find_info_webinars','notification','info_register_in_event','count_organizer'));
    }

}