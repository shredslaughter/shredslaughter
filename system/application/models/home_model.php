<?php

class home_model extends Model{

    /*****************************************
     * Gets the next news entrys for the feed
     ****************************************/
    function getnextnews($startNum){
        
        $hidden = $startNum;

        $query =  $this->db->query('SELECT * FROM news');

        if ($query->num_rows() > 0)
        {
            $numRows = $query->num_rows();


            for($x=0; $x<3; $x++){

                $data="";
                
                $row = $query->row($startNum);

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
                <span class=\"slash\">/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////</span>
                <div class=\"clear\"></div>
                
              <div class=\"clear\"></div>
              <object id=\"object\" data=\"$object\" width=\"300\" height=\"200\"></object>\n
              <div id=\"news\">$news</div>\n
               ";
               $data = $data."</div>";

               if($x==0){
                   $data1 = $data;
               }
               if($x==1){
                   $data2 = $data;
               }
               if($x==2){
                   $data3 = $data;
               }

               $startNum++;
            
            }

            $data="";

            if(($data1 == $data2) && ($data1==$data3)){
                $data=$data1;
            }else if($data2 == $data3){
                $data=$data1 ." ". $data2;
            }else{
                $data=$data1." ".$data2." ".$data3;
            }

            $hidden += 3;

            $data = $data."<div class=\"clear\"></div>";
            $data = $data."\n <div id=\"newsNavpre\">".form_open('Home') ."\n
            <input type=\"hidden\" name=\"prepage\" value=\"$hidden\" />
            <input type=\"hidden\" name=\"nextpage\" value=\"$hidden\"/> \n";
            $data = $data."<input name=\"previous\" value=\"Previous\"type=\"submit\" />
                <input name=\"next\" value=\"Next\"type=\"submit\" /> \n </form></div>";

          
        }

        return $data;
    }
     





    /*****************************************
     * Gets the previous news entrys for the feed
     ****************************************/
    function getpreviousnews($startNum){

        $hidden = $startNum-3;

        $query =  $this->db->query('SELECT * FROM news');

        if ($query->num_rows() > 0)
        {
            $numRows = $query->num_rows();


            for($x=0; $x<3; $x++){

                $data="";
            
               

                $row = $query->row($startNum-3);

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
               
               if($x==0){
                   $data1 = $data;
               }
               if($x==1){
                   $data2 = $data;
               }
               if($x==2){
                   $data3 = $data;
               }
               
              $startNum++;

            }

            $data="";

            $data=$data1." ".$data2." ".$data3;
          

            $data = $data."<div class=\"clear\"></div>";
            $data = $data."\n <div id=\"newsNavpre\">".form_open('Home') ."\n 
            <input type=\"hidden\" name=\"prepage\" value=\"$hidden\" />" ;
            $data = $data."<input value=\"Previous\"type=\"submit\" /> \n </form></div>";

            $data = $data."\n <div id=\"newsNavnext\">".form_open('Home') ."\n
            <input type=\"hidden\" name=\"nextpage\" value=\"$hidden\" />";
            $data = $data."<input value=\"Next\"type=\"submit\" /> \n </form></div>";
        }

        return $data;
    }




    function return5events(){

        $query =  $this->db->query('SELECT * FROM events');


        if ($query->num_rows() > 0)
        {
            $data = "<table>
                        <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th></th>
                        </tr>
                        <tr";

            $numRows = $query->num_rows();
            

            for($x=0; $x<$numRows; $x++){


                $row = $query->row($x);

                $id = $row->id;
                $name = $row->name;
                $month = $row->month;
                $day = $row->day;
                $year = $row->year;
                $location = $row->location;
                $moreinfo = $row->moreinfo;
                $time = $row->time;

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

                $data = $data."
                <tr>
                <td><span id=\"eventdate\">$day $month $year </span></td>
                <td><span id=\"eventname\">$name</span></td>
                <td><span id=\"eventmoreinfo\">".anchor('home/event/'.$row->id, '>>')."</span></div></td>
                </tr>";
                
                
                
                
                
                }

                $data = $data."</table>";
        }

        return $data;




    }
    




    function return1events($ID){

        $query =  $this->db->query("SELECT * FROM events WHERE id='".$ID."'");
        $data = "";


        if ($query->num_rows() > 0)
        {
            







                $row = $query->row($ID);

                $id = $row->id;
                $name = $row->name;
                $month = $row->month;
                $day = $row->day;
                $year = $row->year;
                $location = $row->location;
                $moreinfo = $row->moreinfo;
                $time = $row->time;

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

                $data = $data."
                <tr>
                <td><span id=\"eventdate\">$day $month $year </span></td>
                <td><span id=\"eventname\">$name</span></td>
                <td><span id=\"eventmoreinfo\">".anchor('home/event/'.$row->id, '>>')."</span></td>
                </tr>";







                
        }

        return $data;




    }

}
?>

   
             
