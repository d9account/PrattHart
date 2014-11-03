<?
    $CatPage = true; 
    $PageTitle = ' - Contact';
    $MainCat = 'contact';

function rpHash($value) {
  $hash = 5381;
  $value = strtoupper($value);
  for($i = 0; $i < strlen($value); $i++) {
    $hash = (($hash << 5) + $hash) + ord(substr($value, $i));
  }
  return $hash;
}

$SendMessage = 0;

if ($_POST['defaultReal'] != '') {
  //if (rpHash($_POST['defaultReal']) == $_POST['defaultRealHash']) {
       
       require_once($_SERVER['DOCUMENT_ROOT'].'/classes/class.phpmailer.php');

        //change settings here
        $your_email = "matt@dentstudios.com";
            
        $mail = new PHPMailer(); // defaults to using php "mail()"

        $body = 'You have recieved a contact from the site. <br/> Name: '.$_REQUEST['name'].'<br/>Phone: '.$_REQUEST['phone'].'<br/>Email: '.$_REQUEST['email'].'<br/>Company: '.$_REQUEST['company'].'<br/>'.$_REQUEST['message'];

        $mail->SetFrom($your_email, 'Pratt and Hart');

        $mail->AddReplyTo($your_email,"Pratt and Hart");

        $address =$_REQUEST['email'];

        $mail->AddAddress($address, $_REQUEST['email']);

        $mail->Subject    = 'Contact from website';

        $mail->MsgHTML($body);

        $mail->Send();
  
  //} else {
     //$ErrorMessage = 'The code you entered is not correct';
  //}

} else {
  if (isset($_POST['email']))
     $ErrorMessage = 'The code you entered is not correct';
}

include 'includes/pagetop_inc.php';
include 'includes/header_inc.php';


?>
<script type="text/javascript">

var catPage = 'contact';
var sendMessage = '<?php echo $SendMessage;?>';
</script>

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
                    <div class="captcha-wrapper">
                      
                          <input type="text" id="defaultReal" name="defaultReal"><div class="contact-label" align="center">Please enter the text from above</div>
                    

                    </div>
                    <div class="error-message"><?php echo @$ErrorMessage;?></div>
                    <div class="contact-btn" onclick="PH.submitContact();"><img src="images/submit-text.png"></div>
                </div>

                  <div class="clear"></div>
                 <div class="lg-spacer"></div> 

                
              </div>
              </form>
          </div>

          <div class="clear"></div>
                
    </div>   
<div class="clear"></div>
</div>
<div class="clear"></div>
<?php include 'includes/footer_inc.php';?>
<?php include 'includes/pagebottom_inc.php';?>