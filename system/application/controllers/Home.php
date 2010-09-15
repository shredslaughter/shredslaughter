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
           $startNum =0; //for news feed
          

           if($this->input->post('previous')){

               if($startNum == 0){
                   $data['news'] = $this->home_model->getnextnews($startNum);
               }else{
                  $startNum = $this->input->post('prepage');
                  $data['news'] = $this->home_model->getpreviousnews($startNum-3);
                  echo "prepage ".$startNum;//for debuging
               }
               
           }else
               if($this->input->post('next')){
                 $startNum = $this->input->post('nextpage');
                 $data['news'] = $this->home_model->getnextnews($startNum);
                 echo "nextpage".$startNum ; //for debugging
           }else if((!$this->input->post('next')) && (!$this->input->post('previous'))){
               $data['news'] = $this->home_model->getnextnews($startNum);
               echo $startNum ;
           }
           /*
            *  if($this->input->post('prepage')){
               $startNum = $this->input->post('prepage');
               $data['news'] = $this->home_model->getpreviousnews($startNum);
              echo "prepage ";//for debuging
           }else
               if($this->input->post('nextpage')){
                 $startNum = $this->input->post('nextpage');
                 $data['news'] = $this->home_model->getnextnews($startNum);
                 echo "nextpage".$startNum ; //for debugging
           }else{
               $data['news'] = $this->home_model->getnextnews($startNum);
           }
            *
            */
           
           
           
           $this->load->view('Home_view', $data);
	}


}




?>