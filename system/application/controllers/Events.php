<?php

class Events extends Controller{

        function Events(){

            parent::Controller();

            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model("events_model");

        }


        function index(){


            $data['events'] = $this->events_model->returnallevents();

            $this->load->view('Events_view', $data);
        }


        function event(){

            $ID = $this->uri->segment(3);

            $data['event'] = $this->events_model->return1events($ID);

            $this->load->view('Event_view', $data);

        }


}

?>
