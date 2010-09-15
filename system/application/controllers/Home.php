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
           $pageNUM=0;

           if($this->input->post('prepage')){
              $pageNUM = $this->input->post('Previous');
              $pageNUM-=3;
              echo $pageNUM;
           }else
               if($this->input->post('nextpage')){
                 $pageNUM = $this->input->post('Next');
                 $pageNUM+=3;
           }

           
           
           $data['news'] = $this->home_model->getnews($pageNUM);
           $this->load->view('Home_view', $data);
	}


}




?>