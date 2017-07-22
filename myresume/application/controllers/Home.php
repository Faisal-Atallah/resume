<?php


class Home extends CI_Controller

{



    public function index(){
       // $this->output->cache(3000);
        //$this->output->delete_cache('header');
        $this->load->view('header');
        $this->load->view('personal-info');
        $this->load->view('education');
        $this->load->view('experiences');
        $this->load->view('skills');
        $this->load->view('certificates');
        $this->load->view('references');
        $this->load->view('modal');
        $this->load->view('footer');



    }



}