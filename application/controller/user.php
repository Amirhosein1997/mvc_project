<?php
namespace application\controller;
use application\model\User as UserModel;
use application\model\Webinar as WebinarModel;
use application\controller\Request_skyroom as request_skyroom;
use application\controller\Sms;
use application\model\sms as SmsModel;
class User extends Controller
{
    public function forget_password()
    {
        $this->view('app.users.forget-password');
    }

//todo metod costract for chek cookies

    public function login($user)
    {
        $this->view('app.login');
        $login = new UserModel();
        if(isset($_POST['info'])) {
            $user_pass = $_POST['info'];
            $phone = $user_pass['phone'];
            $information = $login->find('users_tbl','phone',$phone);
            if (!$information == ""){
                $password = $user_pass['password'];
                $password = md5($password);
                if ($password == $information->password){

                    $_SESSION['login_user'] = $information->phone;

                        $this->route('app/panel_user');

                    $remember = $user_pass['remember'];
                    $this->remember($remember,$phone);

                }
                else{
                    ?>
                    <script>
                        var x= document.getElementById('password_eror').style.display='block';
                    </script>
                    <?php
                }
            }
            else{
                ?>
                <script>
                    var x= document.getElementById('username_eror').style.display='block';
                </script>
                <?php
            }
        }

    }

    public function remember($remember,$user)
    {
        if (!$remember == ""){
            $cookie_name = "$user";
            $cookie_value = "$remember";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 180), "/"); // 86400 = 1 day
        }
    }

    public function sign_up()

    {
        $this->view('app/sign-up');


    }


    public function reg_info_user(){
        //$this->view('app.users.sign-up-two');

            $register = new UserModel();
            $password = md5($_POST["password"]);
            $info_user = array($_POST["name"],$_POST["family"],$_POST["phone"],$password,$_POST["email"],$_POST["mellicode"]);
            $register->insert($info_user);
            /*$register1 = new UserModel();
            $register1 = $register1->find('users_tbl' , 'phone' , $_POST['phone']);
            $delete_get_code = new UserModel();
            $data =array($_SESSION['phone']);
            $delete_get_code->delete('get_code_tbl','phone',$data);*/
            session_destroy();
            $this->route('user/login/user');

    }





    public function exit()
    {
        session_destroy();
        $this->route('');
    }




}