<?
    $CatPage = true; 
    $PageTitle = ' - Contact';
?>
<?php include 'includes/pagetop_inc.php';?>

<?php include 'includes/header_inc.php';?>
<script type="text/javascript">var catPage = true;</script>
<div class="content">
    
    <div class="static-wrapper">
    
        <div class="static-inner-wrapper">
       		<h2>Contact Us</h2>
       		<form>
       		<label for="name">Enter Your Name</label><br/>
       		<input type="text" name="name" id="name" class="contact-input"><div class="spacer"></div>
       		<label for="name">Enter Your Email</label><br/>
       		<input type="text" name="email" id="email" class="contact-input"><div class="spacer"></div>
       		<label for="name">Enter Your Message</label><br/>
       		<textarea name="message" id="message" class="contact-input"></textarea>
       		<div class="spacer"></div>
       		<input type="button" value="send message" onclick="PH.submitContact();">

       		</form>
        </div>
                
    </div>   

</div>

<?php include 'includes/footer_inc.php';?>
<?php include 'includes/pagebottom_inc.php';?>