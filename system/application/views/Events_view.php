<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/events.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
       <script type="text/javascript" src="http://github.com/malsup/corner/raw/master/jquery.corner.js?v2.11"></script>
       <script type="text/javascript" src="<?php echo base_url();?>javascript/master.js"></script>
      <title>Shred Slaughter: Events</title>
</head>

<body>



    <div class="container">
        <div class="main">

            <div class="header">

                <img alt="image" id="header-image" src="<?php echo base_url();?>images/css images/black-white-snowcut.jpg"</>
                <img alt="" id="sslogo" src="<?php echo base_url();?>images/css images/SS_logo60percent.png"</>

                <ul class="nav1">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#">Info</a></li>
                <li><a href="<?php echo base_url();?>index.php/Events">Events</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="http://localhost/Store/index.php?route=common/home">Shop</a></li>
                </ul>

                <div class="clear"></div>



            </div>

            <div class="clear"></div>

            <div class="body">


                <div class="masterevent">

                    <div id="eventframe">
                        <div id="eventstitle"> Events</div>
                        <div class="clear"></div>
                        <span id="eventslash">
                        
                        </span>
                        <div class="clear"></div>
                        <?php echo $events; ?>
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