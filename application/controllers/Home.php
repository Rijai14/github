<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
    }

    public function bali()
    {
        $this->load->view('destination/bali');
    }
    public function singapore()
    {
        $this->load->view('destination/singapore');
    }
    public function Korea()
    {
        $this->load->view('destination/korea');
    }
    public function KualaLumpur()
    {
        $this->load->view('destination/kuala-lumpur');
    }
    public function Nepal()
    {
        $this->load->view('destination/nepal');
    }
    public function Japan()
    {
        $this->load->view('destination/japan');
    }
    public function Thailand()
    {
        $this->load->view('destination/thailand');
    }
    public function RajaAmpat()
    {
        $this->load->view('destination/raja-ampat');
    }


}