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
              <span id=\"title\" >$title</span>
              <span id=\"date\">$month $day</span>
              <div id=\"news\">$news</div>
              <div id=\"object\">$object</div>
               ";
               

           }
           $data = $data."</div>";
        }


         
        return $data;
    }
}
?>

