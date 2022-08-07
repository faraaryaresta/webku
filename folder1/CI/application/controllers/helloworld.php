<?php
defined('BASEPATH') OR exit('No direct script access
allowed');

class Helloworld extends CI_Controller {
    public function index()
    {
        //echo "Hello world!!!!";
        $this->load->model('modelku');
        $data=$this->modelku->getData();
        $this->load->view('hello_ci', $data);
    }
}