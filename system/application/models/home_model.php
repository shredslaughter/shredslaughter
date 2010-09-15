<?php

class home_model extends Model{

   

    function getnews(){
        $data="";

        $query =  $this->db->query('SELECT * FROM news');

        if ($query->num_rows() > 0)
        {
           foreach ($query->result() as $row)
           {
               $data = $data. "<div id=\"newsentry\">";

                $title = $row->title;
                $month = $row->month;
                $day = $row->day;
                $object = $row->object;
                $news = $row->news;

                switch($month){
                    case 1: $month="JAN"; break;
                    case 2: $month="FEB"; break;
                    case 3: $month="MAR"; break;
                    case 4: $month="APR"; break;
                    case 5: $month="MAY"; break;
                    case 6: $month="JUN"; break;
                    case 7: $month="JUL"; break;
                    case 8: $month="AUG"; break;
                    case 9: $month="SEP"; break;
                    case 10: $month="OCT"; break;
                    case 11: $month="NOV"; break;
                    case 12: $month="DEC"; break;
                }

               $data = $data. "
              <div id=\"newsentryDate\">
                  <span id=\"day\">$day</span>
                  <div class=\"clear\"></div>
                  <span id=\"month\">$month</span>
              </div>
              <span id=\"title\" >$title</span>
              <div class=\"clear\"></div>
              <object id=\"object\" data=\"$object\" width=\"100\" height=\"50\"> </object>
              <div id=\"news\">$news</div>
               ";
               $data = $data."</div>";

           }
           
        }


         
        return $data;
    }
}
?>

