<?php 
session_start();
if (!$_SESSION['login']) header ("location: login.php");

include "dbaction/user_add.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mini Social - free website template</title>
<meta name="keywords" content="mini social, free download, website templates, CSS, HTML" />
<meta name="description" content="Mini Social is a free website template from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
function sure(){
	if(confirm("Are you sure to delete this user?")){
		return true;
	}else{
		return false;
	}
}
</script>
</head>
<body>

<div id="slider">
	
    <div id="templatemo_sidebar">
    	<div id="templatemo_header">
        	<a href="http://www.templatemo.com" target="_parent"><img src="images/templatemo_logo.png" alt="Mini Social" /></a>
        </div> <!-- end of header -->
        
        <ul class="navigation">
            <li><a href="#home">Home<span class="ui_icon home"></span></a></li>
            <li><a href="#aboutus">Friends<span class="ui_icon aboutus"></span></a></li>
            <li><a href="#services">Message<span class="ui_icon services"></span></a></li>
            <li><a href="#gallery">Profile<span class="ui_icon gallery"></span></a></li>
            <li><a href="#contactus">Contact Us<span class="ui_icon contactus"></span></a></li>
			<li><a href="logout.php">Log-out<?php echo $_SESSION['username']?><span class="ui_icon contactus"></span></a></li>
        </ul>
    </div> <!-- end of sidebar -->

	<div id="templatemo_main">
    	<ul id="social_box">
            <li><a href="#"><img src="images/music.png" alt="music" /></a></li>
            <li><a href="#"><img src="images/write.png" alt="status" /></a></li>
            <li><a href="#"><img src="images/photo.png" alt="photo" /></a></li>
            <li><a href="#"><img src="images/video.png" alt="video" /></a></li>
        </ul>
        
        <div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                        <h1>Introducing Mini Social website</h1>    
                        <div class="image_wrapper image_fl"><img src="images/templatemo_image_01.jpg" alt="image" /></div>
                        <p><em>Nullam at erat ipsum, quis tincidunt mauris. Nunc sit amet sapien eget eros iaculis hendrerit quis a enim. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</em></p>
                        <p>Mini Social is a <a href="http://www.templatemo.com/page/1" target="_parent">Free CSS Template</a> is provided by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a>. You may use this template in your websites. Credits go to <a href="http://www.photovaco.com" target="_blank">PhotoVaco</a> for photos, <a href="http://jwloh.deviantart.com/art/Social-me-90694011" target="_blank">Social.me</a> and <a href="http://www.wefunction.com" target="_blank">WeFunction</a> for icons used in this template.</p>
                      <div class="cleaner_h40"></div>
                        
                        <h2>Our Background</h2> 
                        <p><em>Donec ac eros ac nunc blandit hendrerit. Vestibulum tincidunt, odio at ultricies sollicitudin, ante felis luctus justo, non venenatis quam mauris non tortor.</em></p>
                        <p>Mauris ligula tortor, congue laoreet rutrum eget, suscipit nec augue. In congue consectetur est, sit amet hendrerit velit adipiscing eget. Curabitur iaculis, erat pharetra porttitor sollicitudin, turpis lectus placerat arcu, ac mattis eros sem ut metus.</p>
                        <div class="btn_more"><a href="#aboutus">More <span>&raquo;</span></a></div>
                    </div> <!-- end of home -->
                    
                    <div class="panel" id="aboutus">
                        <h1>Friends</h1>
                    	<div class="image_wrapper image_fl"><img src="images/friends.jpg" alt="image" /></div>
                        <p>Friends list</p>
                    </div>
                    
                    <div class="panel" id="services">
                        <h1>Message</h1>
                		<p>message from friends</p>
                    </div>
                
                    <div class="panel" id="gallery">
                        <h1>Profile</h1>
                        
                        <div id="gallery_container">
                           	<div class="gallery">
                                <img src="images/gallery/image_01.jpg" align ="right" alt="01" />
                                <h4>Your Activity</h4>
								<a href="#" /><h2>about</h2></a></br>
                               <a href="#" /><h2>photo</h2></a></br>
								<a href="#" /><h2>music</h2></a></br>
								<a href="#" /><h2>status</h2></a></br>
                                <div class="cleaner"></div>
                            </div>
                            <div class="cleaner"></div>
                        </div>
                
                    </div>
                
                    <div class="panel" id="contactus">
                        <h1>Feel free to send us a message</h1>
                        <div id="contact_form">
                            <form method="post" name="contact" action="#contactus">
                                
                                <label for="author">Your Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">Your Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                                <div class="cleaner_h10"></div>
                                
                                <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                                <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                            
                            </form>
						</div>
                    </div>
                
                </div>
			</div>
            
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
        <div id="templatemo_footer">

            Copyright © 2048 <a href="#">Your Company Name</a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
        </div> <!-- end of templatemo_footer -->
    
    </div> <!-- end of main -->
</div>

<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>