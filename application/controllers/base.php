<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Base extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        if ($this->config->item('maintenance'))
        {
            redirect(base_url('maintenance'));
            die();
        }
    }
    
    public function index()
    {
        // load the main view
        $this->load->view('frontend/main');
    }
	public function agents()
    {
        // load the main view
        $this->load->view('frontend/agents');
    }
	public function agent($agentID)
	{
		// load the main view
        $this->load->view('frontend/agent');
	}
}

/* End of file base.php */
/* Location: ../application/controllers/base.php */