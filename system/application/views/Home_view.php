<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/home.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
       <script type="text/javascript" src="http://github.com/malsup/corner/raw/master/jquery.corner.js?v2.11"></script>
    <title>Shred Slaughter</title>
</head>

<body>

    <script type="text/javascript" >
       //when done with this javascript package it into its own file and just call it
       
       $(".main").corner("3px");
    $(".body").corner("3px");
    $(".column1").corner("3px");
    $(".column2").corner("3px");
    $(".column3").corner("3px");
    $(".footer").corner("3px");
    $(".headerbotttom").corner("3px bottom");
    $("#newsfeed").corner("3px");
    $("#recentevents").corner("3px");
    $(".header").corner("3px");
    $("#column3pic").corner("3px");
    </script>

    <div class="container">
        <div class="main">

            <div class="header">

                
                
                <ul class="nav1">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#">Info</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Shop</a></li>
                </ul>

                <div class="clear"></div>
                

                
            </div>

            <div class="clear"></div>

            <div class="body">

                <div class="column1">

                    

                    <div id="newsfeed">
                        <?php
                            echo $news;
                        ?>
                    </div>

                </div>

                <div class="column2">

                    <div id="recentevents">
                        <span id="recenteventsTitle">
                        Recent Events
                        </span>
                        <div class="clear"></div>
                        <span id="recentslash">
                        /////////////////////////////////////////////////////////////////////////////////
                        </span>
                        <div class="clear"></div>

                    </div>
                    <div id="events">
                        <?php
                            echo $events;
                        ?>
                    </div>

                </div>
                
                <div class="column3">
                    <img id ="column3pic" src="<?php echo base_url();?>/images/css images/goggles.jpg" alt="" />
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