<?php

class home_model extends Model{

   

    function getnews(){
        $data = "<div id=\"newsentry\">";

        $query =  $this->db->query('SELECT * FROM news');

        if ($query->num_rows() > 0)
        {
           foreach ($query->result() as $row)
           {
                $title = $row->title;
                $month = $row->month;
                $day = $row->day;
                $object = $row->object;
                $news = $row->news;

               $data = $data. "
              <h1>$title</h1>
              <h2>$month $day</h2>
              <p>$news</p>
              <p>$object</p>
               ";
               

           }
           $data = $data."</div>";
        }


         
        return $data;
    }
}
?>

