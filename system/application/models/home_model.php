<?php

class home_model extends Model{

   
    /*
    function getnews(){
        $data="";

        $query =  $this->db->query('SELECT * FROM news');

        if ($query->num_rows() > 0)
        {
           foreach ($query->result() as $row)
           {
               $data = $data. "<div id=\"newsentry\">\n";

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
              <div id=\"newsentryDate\">\n
                  <span id=\"day\">$day</span>
                  <div class=\"clear\"></div>
                  <span id=\"month\">$month</span>
              </div>\n
              <span id=\"title\" >$title</span>
              <div class=\"clear\"></div>
              <object id=\"object\" data=\"$object\" width=\"300\" height=\"200\"></object>\n
              <div id=\"news\">$news</div>\n
               ";
               $data = $data."</div>";

           }
           
        }


         
        return $data;
    }*/


    function getnews($startNum){
        $data="";
        $x = $startNum;
        $max = $startNum + 3;
        $query =  $this->db->query('SELECT * FROM news');

        if ($query->num_rows() > 0)
        {
            $numRows = $query->num_rows();

            for($x; $x<$max; $x++){
                 $row = $query->row($x);

                 $data = $data. "<div id=\"newsentry\">\n";

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
              <div id=\"newsentryDate\">\n
                  <span id=\"day\">$day</span>
                  <div class=\"clear\"></div>
                  <span id=\"month\">$month</span>
              </div>\n
              <span id=\"title\" >$title</span>
              <div class=\"clear\"></div>
              <object id=\"object\" data=\"$object\" width=\"300\" height=\"200\"></object>\n
              <div id=\"news\">$news</div>\n
               ";
               $data = $data."</div>";

               $endingNum = $startNum+4;

            }

            $formopen = form_open('Home');

            $data = $data."<div class=\"clear\"></div>";
            $data = $data."\n <div id=\"newsNavpre\">".form_open('Home') ."\n". form_hidden('prepage', $endingNum );
            $data = $data."<input value=\"Previous\"type=\"submit\" /> \n </form></div>";

            $data = $data."\n <div id=\"newsNavnext\">".form_open('Home') ."\n". form_hidden('nextpage', $endingNum);
            $data = $data."<input value=\"Next\"type=\"submit\" /> \n </form></div>";
        }

        return $data;
    }




}
?>

