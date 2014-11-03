<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.realperson.css"> 
<script type="text/javascript" src="js/jquery.plugin.js"></script> 
<script type="text/javascript" src="js/jquery.realperson.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pratt and Hart<?php echo @$PageTitle;?></title> 
<link href="css/style.css" rel="stylesheet"/>
<script type="text/javascript">
$(function() {
	$('#defaultReal').realperson();
});
</script>
</head>
<body>
<div class="content">
    
    <div class="static-wrapper">
          <div class="static-left">
              <div class="cat-info-wrapper">
                <div class="cat-inner-wrapper">
                    <div class="cat-title"><img src="images/<?php echo $MainCat;?>-title-deer.png"></div>
                    <div class="lg-spacer"></div>
              
                    <div class="box-info">
                      Thank you for visiting Pratt & Hart. Your comments and inquiries are welcome. Simply complete the form on this page or contact us directly using the information below.
                      <div class="contact-block">

                        <div class="block-header">MAILING ADDRESS</div>
                        <span>Pratt & Hart Gloves<br/>
                        1661 Tennessee St.<br/>
                        Unit 2K<br/>
                        San Francisco, CA 94107<br/>
                        </span>
                      </div>

                      <div class="contact-block">

                        <div class="block-header">PHONE</div>
                        <span>Toll Free: 877.584.7458<br/>
                            Phone: 415.538.7875<br/>
                            Fax: 415.408.6551</span>

                      </div>
                    </div>

                </div>
              </div>
          </div>

          <div class="static-right">


            <form method="post" action="contact.html" id="contactform" name="contactform">
              <div class="contact-form-wrapper">
                
                <div class="form-left">
                  <div class="contact-label">Name: <span>(First and Last)</span></div>
                  <div class="contact-label">Phone Number: <span>(Optional)</span></div>
                  <div class="contact-label">Email Address:</div>
                  
                  <div class="contact-label">Confirm Email Address:</div>
                  <div class="contact-label">Company: <span>(Optional)</span></div>
                  <div class="contact-label">Message:</div>

                </div>
                <div class="form-right">
                    <div class="contact-input"><input type="text" name="name" id="name"></div>
                    <div class="contact-input"><input type="text" name="phone" id="phone" ></div>
                    
                    <div class="contact-input"><input type="text" name="email" id="email"></div>
                    <div class="contact-input"><input type="text" name="confirm" id="confirm"></div>
                    <div class="contact-input"><input type="text" name="company" id="company"></div>
                    <div class="contact-input"><textarea name="message" id="message"></textarea></div>
                    
                     <p><label>Please enter the letters displayed:</label>
		<input type="text" id="defaultReal" name="defaultReal"></p>
	<p style="clear: both;"><label>&nbsp;</label>
                 
                    <div class="error-message"><?php echo @$ErrorMessage;?></div>
                    <div class="contact-btn" onclick="PH.submitContact();"><img src="images/submit-text.png"></div>
                </div>

                  <div class="clear"></div>
                

                
              </div>
              </form>
          </div>

          <div class="clear"></div>
                
    </div>   

</div>

<h1>jQuery Real Person</h1>
<p>This page demonstrates the very basics of the
	<a href="http://keith-wood.name/realPerson.html">jQuery Real Person plugin</a>.
	It contains the minimum requirements for using the plugin and
	can be used as the basis for your own experimentation.</p>
<p>For more detail see the <a href="http://keith-wood.name/realPersonRef.html">
	documentation reference</a> page.</p>
<form action="http://yourserver/realPerson.php" method="post">
	<p><label>Other fields:</label><input type="text" id="field"></p>
	<input type="submit" value="Submit"></p>
</form>
</body>
</html>