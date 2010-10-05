<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/events.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
       <script type="text/javascript" src="http://github.com/malsup/corner/raw/master/jquery.corner.js?v2.11"></script>
       <script type="text/javascript" src="<?php echo base_url();?>javascript/master.js"></script>
       <title>Shred Slaughter: Event <?php echo $event['name'];?> </title>
</head>

<body>

    

    <div class="container">
        <div class="main">

            <div class="header">



                <ul class="nav1">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#">Info</a></li>
                <li><a href="<?php echo base_url();?>index.php/Events">Events</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Shop</a></li>
                </ul>

                <div class="clear"></div>



            </div>

            <div class="clear"></div>

            <div class="body">


                <div class="eventinstance">
                    
                    <div class="groupevent">
                        <div id="name"> <?php echo $event['name'];?> </div>
                        <div class="clear"></div>
                        <span id="eventslash">
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        </span>
                        <div class="clear"></div> Time
                        <div id="date">
                            <div id="month"> <?php echo $event['month'];?> </div><div id="day"> <?php echo $event['day'];?> </div><div id="year"> <?php echo $event['year'];?> </div>
                            <div id="time"> <?php echo $event['time'];?> </div>
                        </div>
                        
                        <div class="clear"></div>Location
                        <div id="location"> <?php echo $event['location'];?> </div>
                        <div class="clear"></div>More Info
                        <div id="moreinfo"> <?php echo $event['moreinfo'];?> </div>
                    </div>
                </div>

            </div>

            <div class="clear"></div>

            <div class="footer">

                    <div class="footerlink">
                          <a  href="http://www.facebook.com/pages/Wrightwood-CA/Shred-Slaughter/126968080662214">
                          <img src="<?php echo base_url();?>/images/css images/facebooksymbol.png" alt="facebook" width="30" height="30" />
                          </a>
                    </div>

                    <div class="footerlink">
                          <a  href="http://www.youtube.com/user/shredslaughter">
                          <img src="<?php echo base_url();?>/images/css images/youtubesymbol.png" alt="facebook" width="30" height="30" />
                          </a>
                    </div>

                    <div class="footerlink">
                          <a  href="http://www.vimeo.com/shredslaughter">
                          <img src="<?php echo base_url();?>/images/css images/Vimeosymbol.png" alt="facebook" width="30" height="30" />
                          </a>
                    </div>



                    <div class="rights">
                          All rights Reserved to Shred Slaughter 2010.
                    </div>
            </div>

            <div class="clear"></div>

        </div>
    </div>


</body>
</html>