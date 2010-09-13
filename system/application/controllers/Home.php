<?php


class Home extends Controller{

        function Home()
        {
            parent::Controller();

            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model("home_model");
            
            
        }

	function index()
	{
           
           
           $data['news'] = $this->home_model->getnews();
           $this->load->view('Home_view', $data);
	}


}




?>