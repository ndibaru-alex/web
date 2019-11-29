<?php include "conserver.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<div>
<?php include "header.html" ?>
</div>
<div id="maps"style="margin-top:45px">
	
	<h5>location</h5>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15919.264410652626!2d39.6850132!3d-4.0578874!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5b74ef15e7de030!2sHotel%20Englishpoint%20Mombasa!5e0!3m2!1sen!2see!4v1571157154383!5m2!1sen!2see" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</div>
<div style="margin-top: 140px">
	
	<div class="container js-tm-page-content tm-section-margin-t-small">                            
                            <div class="tm-contact-page">
                                <div class="row tm-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-bg-white tm-textbox-padding">
                                            <h2 class="tm-text-title tm-margin-b-0">Contact Us</h2>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container tm-bg-dark-blue">                                
                                            <div style="background-color: white" class="text p-3 text-center">
                                                <b><p class="tm-text">very welcome to our page<br>you can coctact us through phone email and if you have any comment feel free to comment below </p> </b>                                                                                                                                                
                                                <b><p class="tm-text">88032 Mama Ngina ,<br>Street, Box 10890<br>Mombasa<br></p></b>
                                                <h6 class="tm-text">Tel: 010-020-0340<br>Cell: 0745288233</h6>
                                            </div>

                                            <div class="text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <!-- contact form -->
                                                <form  method="post" action="contactUs.php" class="tm-contact-form">
                                                    <div class="form-group">
                                                        <input type="text"  name="contact_name" class="form-control" placeholder="Name"  required/>
                                                    </div>                                                                                                            
                                                    <div class="form-group">
                                                        <input type="email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <textarea  name="contact_message" class="form-control" rows="5" placeholder="Your message" required></textarea>
                                                    </div>
                                                    <button type="submit" class="tm-submit-btn" name="cot_us">Send</button>                                                
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php include "footer.html" ?>
</div>
</body>
</html>