<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function logged_in()
    {
        if ($this->session->userdata('logged_in'))
        {
            return true;
        }
        return false;
    }
}

// END