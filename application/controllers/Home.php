<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()    {
        $this->load->view('objednavky/header');
        $this->load->view('objednavky/navigation');
        $this->load->view('home');
        $this->load->view('objednavky/footer');    }
}