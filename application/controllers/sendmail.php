<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sendmail extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
{

}
    public function sendme()
    {

        $this->load->library('email');
//        $this->email->initialize($config);
        $name = $this->input->post("name");
        $cemail = $this->input->post("email");

        $message = $this->input->post("message");


        $this->email->from($cemail, $name);
        $this->email->to('info@rosestories.nl');
//        $this->email->cc('another@another-example.com');
//        $this->email->bcc('them@their-example.com');

        $this->email->subject('Rose Stories web form');
        $this->email->message($message);

        // work it on web when it uploade  $this->email->send();

        $mesarr['meskey']=array('Your message was sent successfully');
       // echo $this->email->print_debugger();
        $this->load->view('getmesag',$mesarr);

        //$this->load->view('main');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */