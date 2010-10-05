<?php

class events_model extends Model{

    /////////////////////////////////////////
    //Return 5 events
    ////////////////////////////////////////
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

            $counter=0;
            $half = true;
            
            for($x=0; $x<$numRows; $x++){

                if($half == true){
                    $color = "white";
                    $half = false;
                }else if($half == false){
                    $color = "blue";
                    $half = true;
                }

                if($counter <5){
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
                <tr class=\"$color\">
                <td><span id=\"eventdate\">$day $month  </span></td>
                <td><span id=\"eventname\">$name</span></td>
                <td><span id=\"eventmoreinfo\">".anchor('Events/event/'.$row->id, '>>')."</span></div></td>
                </tr>";



                $counter++;
                }
            }

                $data = $data."</table>";
        }

        return $data;




    }




    /////////////////////////////////////////
    //Return 1 events
    ////////////////////////////////////////
    function return1events($ID){

        $query =  $this->db->query("SELECT * FROM events WHERE id='".$ID."'");



        if ($query->num_rows() > 0)
        {

                $row = $query->row();

                $data['id'] = $row->id;
                $data['name'] = $row->name;
                $month = $row->month;
                $data['day'] = $row->day;
                $data['year'] = $row->year;
                $data['location'] = $row->location;
                $data['moreinfo'] = $row->moreinfo;
                $data['time'] = $row->time;

                switch($month){
                    case 1: $data['month']="JAN"; break;
                    case 2: $data['month']="FEB"; break;
                    case 3: $data['month']="MAR"; break;
                    case 4: $data['month']="APR"; break;
                    case 5: $data['month']="MAY"; break;
                    case 6: $data['month']="JUN"; break;
                    case 7: $data['month']="JUL"; break;
                    case 8: $data['month']="AUG"; break;
                    case 9: $data['month']="SEP"; break;
                    case 10: $data['month']="OCT"; break;
                    case 11: $data['month']="NOV"; break;
                    case 12: $data['month']="DEC"; break;
                }











        }

        return $data;




    }//////End of return 1 event


    /////////////////////////////////////////
    //Return all events
    ////////////////////////////////////////
    function returnallevents(){

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

            $half = true;

            for($x=0; $x<$numRows; $x++){

                if($half == true){
                    $color = "white";
                    $half = false;
                }else if($half == false){
                    $color = "blue";
                    $half = true;
                }

                
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
                <tr class=\"$color\">
                <td><span id=\"eventdate\">$day $month $year </span></td>
                <td><span id=\"eventname\">$name</span></td>
                <td><span id=\"eventmoreinfo\">".anchor('Events/event/'.$row->id, '>>')."</span></div></td>
                </tr>";



                
            }

                $data = $data."</table>";
        }

        return $data;




    }








}

?>
