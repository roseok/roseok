<?php

class Users extends CI_Controller {


    function index($start = 0)//index page
    {
        //$this->session->sess_destroy();
        $this->load->view('users');

    }


    function password()//index page
    {
         $this->load->view('changepassword');
    }

    function addevent()//index page
    {
        $this->load->view('addevent');
    }

    function addyoutube()//index page
    {
        if (!$this->input->post('upme1', true)) {
            $this->load->view('addyoutube');
        }
        if ($this->input->post('upme1', true)) {

            $this->load->library('form_validation');

            $this->form_validation->set_rules('text_youtube', 'text_youtube', 'required');
            $this->form_validation->set_rules('text_youtube_titel', 'text_youtube_titel', 'required');
            $this->form_validation->set_rules('text_youtube_discription', 'text_youtube_discription', 'required');

            if ($this->form_validation->run() == FALSE) {

                $arr['res'] = array('Error in validation');
                $this->load->view('addeyoutube', $arr);

            } else {


                $this->load->model('user_model');
                $arr = $this->user_model->add_youtube($_POST);
                $this->load->view('members', $arr);
            }
        }
    }

    function logout()//index page
    {
        $this->session->set_userdata('logd','');
        $this->session->sess_destroy();
        redirect(base_url('users'));
       // $this->load->view('users');
    }

    public function profile()
    {
       
        
        $this->load->view('/makers/profile'.$_GET["id"]);
    }

    public function action()
    {


        $action = $this->input->post('action1', true);
        switch ($action) {
            case 'Login':
                echo 'You are in Login Page';
                break;


            case 'Register':
                var_dump($_POST);
                echo '<br>';
                $this->load->model('user_model');
                $this->user_model->add_user($_POST);
                echo 'You are in Register Page';
                break;
            default:
                echo 'Sorry';
                break;
        }

    }


    public function showagain()
    {
        $this->load->model('user_model');
        $sess_id = $this->session->userdata('log_id');

        $arr1 = $this->user_model->get_post_id($sess_id);

        $arr2 =$this->user_model->get_all_post();
        $arrx['res'] = $arr1;
        $arrx['res2'] = $arr2;
        $this->load->view('members', $arrx);


    }

    public function showprofile()
    {



        $this->load->model('user_model');
        $arrx['res'] = $this->user_model->get_post_id($_POST);
        $this->load->view('profile', $arrx);
    }


public function alpha_dash_space($str)
    {
        return ( ! preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
    }

    public function members()
    {
        if ( $this->input->post('shoall',true) )
        {

            $this->load->model('user_model');
                $arrx['res'] = $this->user_model->get_all_post();
                $this->load->view('showall', $arrx);
        }

        $this->load->helper(array('form', 'url'));

if ( $this->input->post('register',true) )
{

        $this->load->library('form_validation');


    $this->form_validation->set_rules('text_First_Name', 'First_Name', 'required|trim|alpha');
    $this->form_validation->set_rules('text_Job_titel', 'Job_titel', 'required');
    $this->form_validation->set_rules('text_Password', 'Password', 'trim|required|min_length[6]|max_length[20]');
    $this->form_validation->set_rules('text_Confirm_Password', 'Password Confirmation', 'trim|required|matches[text_Password]');
    $this->form_validation->set_rules('text_Email_Address', 'Email', 'trim|required|is_unique[users.email]|valid_email');

        if ($this->form_validation->run() == FALSE) {

            $arr['res']=array('1');
            $this->load->view('users',$arr);

        } else {
            $nameuser=$this->input->post('text_First_Name',true);
            $this->session->set_userdata('member_name',$nameuser);

            $this->load->model('user_model');


            if(empty($this->user_model->get_post($_POST))  )
            {
            $arr=$this->user_model->add_user($_POST);

                $this->session->set_userdata('log_id',$arr);

                $arr1 = $this->user_model->get_post_id($arr);

                $arr2 =$this->user_model->get_all_post();
                $arrx['res'] = $arr1;
                $arrx['res2'] = $arr2;
                $this->load->view('members', $arrx);

              //  $this->load->view('members');
            }
            else
            {
                $arr['res']=array('2');
                $this->load->view('users',$arr);
            }

        }
}


        // ************************************* Log me *********************************************
        if ( $this->input->post('log',true) ) {

            $this->load->library('form_validation');


            $this->form_validation->set_rules('text_Password', 'Password', 'trim|required|min_length[1]|max_length[20]');
          //  $this->form_validation->set_rules('text_Email_Address', 'Email', 'trim|required|is_unique[users.email]|valid_email');
            if ($this->form_validation->run() == FALSE) {

                $arr['res'] = array('3');
                $this->load->view('users', $arr);

            } else {
            $this->load->model('user_model');
            if (empty($this->user_model->get_post($_POST))) {
                $arr['res'] = array('3');
                $this->load->view('users', $arr);
            } else {



                $arr1 = $this->user_model->get_post($_POST);

                $arr2 =$this->user_model->get_all_post();
                $arrx['res'] = $arr1;
                $arrx['res2'] = $arr2;
                $this->session->set_userdata('logd','1');
                $this->load->view('members', $arrx);
            }

        }
        }
        }
        // ************************************* Log me *********************************************






       public function uploadfile()
    {
        if ( $this->input->post('upme',true) ) {
            $this->load->view('upload');
        }
        if ( $this->input->post('upme1',true) ) {


            $this->load->library('form_validation');


            $this->form_validation->set_rules('text_event_titel', 'event_titel', 'required');
            $this->form_validation->set_rules('text_Event_discription', 'Event_discription', 'required');

            if ($this->form_validation->run() == FALSE) {
                if ($this->form_validation->run() == FALSE) {

                    $arr['res'] = array('Error in validation');
                    $this->load->view('addevent', $arr);

                } else {
                    $event = $this->input->post('text_event_titel', true);
                    $this->session->set_userdata('event_name', $event);

                    $this->load->model('user_model');


                    $arr = $this->user_model->add_event($_POST);


                    $this->load->view('members', $arr);

                    //  $this->load->view('members');

                }


            }
        }
    }

    public function updateme()
    {
        $log_id=$_POST['log_id'];
        if(isset($_POST['update'])) {
            if ($this->input->post('log_id', true)) {
                $this->load->model('user_model');
                if (empty($this->user_model->get_post($_POST))) {
                    if ($this->input->post()) {
                        $data = array('first_name' => $this->input->post('text_First_Name'), 'job_titel' => $this->input->post('text_Job_titel'), 'email' => $this->input->post('text_Email_Address'), 'password' => $this->input->post('text_Password'), 'updated_at' => date("Y-m-d, H:i:s"));


                        $this->user_model->update_post($log_id, $data);

                        $data['success'] = 1;
                    }

                    $arrx['res'] = $this->user_model->get_post_id($_POST);

                    $this->load->view('welcomeLog', $arrx);
                } else {
                    $arr['res'] = array('1');
                    $this->load->view('welcomeLog', $arr);
                }


            }
        }
        elseif (isset($_POST['delete'])){

            $this->load->model('user_model');
            $this->user_model->delete_post($log_id);
            $this->load->view('users');
        }

    }














    public function changepassword()
    {


        $this->load->helper(array('form', 'url'));

        if ( $this->input->post('changepws',true) )
        {

            $this->load->library('form_validation');

            $this->form_validation->set_rules('text_Password_old', 'Old Password', 'trim|required|min_length[6]|max_length[20]');

            $this->form_validation->set_rules('text_Password', 'Password', 'trim|required|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('text_Confirm_Password', 'Password Confirmation', 'trim|required|matches[text_Password]');

            if ($this->form_validation->run() == FALSE) {

                $arr['res']=array('1');
                $this->load->view('changepassword',$arr);

            } else {


                $this->load->model('user_model');
//var_dump($this->user_model->get_post_withpws($_POST));
//die('hhhhhhhh');
                if(!empty($this->user_model->get_post_withpws($_POST))  )
                {
                    //die('i can change');
                    if($this->user_model->updatepws($_POST))
                    {
                    $this->load->view('users');
                    }
                    //  $this->load->view('members');

                }
                else
                {
                    $arr['res']=array('2');
                    $this->load->view('changepassword',$arr);
                }

            }
        }


        // ************************************* Log me *********************************************
        if ( $this->input->post('log',true) ) {

            $this->load->library('form_validation');


            $this->form_validation->set_rules('text_Password', 'Password', 'trim|required|min_length[1]|max_length[20]');
            //  $this->form_validation->set_rules('text_Email_Address', 'Email', 'trim|required|is_unique[users.email]|valid_email');
            if ($this->form_validation->run() == FALSE) {

                $arr['res'] = array('3');
                $this->load->view('users', $arr);

            } else {
                $this->load->model('user_model');
                if (empty($this->user_model->get_post($_POST))) {
                    $arr['res'] = array('3');
                    $this->load->view('users', $arr);
                } else {



                    $arr1 = $this->user_model->get_post($_POST);

                    $arr2 =$this->user_model->get_all_post();
                    $arrx['res'] = $arr1;
                    $arrx['res2'] = $arr2;
                    $this->session->set_userdata('logd','1');
                    $this->load->view('members', $arrx);
                }

            }
        }
    }
    // ************************************* Log me *********************************************







    // ************************************* getyoutube *********************************************
    public function getyoutube()
    {


            $this->load->model('user_model');
            $arrx['res'] = $this->user_model->get_all_youtube();
            $this->load->view('showfilms', $arrx);

    }
    // ************************************* getyoutube *********************************************




}