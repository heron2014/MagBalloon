<?php
$hasError = false;
$sent = false;

if(isset($_POST['submitform'])){
	$name = trim(htmlspecialchars($_POST['name'], ENT_QUOTES));
	$email = trim($_POST['email']);
	$company = trim(htmlspecialchars($_POST['company'], ENT_QUOTES));
	$phone = trim(htmlspecialchars($_POST['phone'], ENT_QUOTES));
	$message = trim(htmlspecialchars($_POST['message'], ENT_QUOTES));

	$fieldsArray = array(
		'name' => $name,
        'email' => $email,
        'company' => $company,
        'phone' => $phone,
        'phone' => $phone
);

    $errorArray = array();

    foreach($fieldsArray as $key => $val) {
        switch ($key) {
        case 'name':
        case 'company':
        case 'phone':
        case 'message':
            if(empty($val)) {
                $hasError = true;
                $errorArray[$key] = ucfirst($key) . " field was left empty";
            }
        break;
        case 'email':
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $hasError = true;
                $errorArray[$key] = "Invalid Email Address";
                } else {
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                }
                break;

        }
    }

    if($hasError !== true) {
        $to = "a.nita@hotmail.co.uk";
        $subject = "Message from contact form";
        $msgcontents = "Name: $name<br>Company: $company<br>Phone number: $phone<br>Email: $email<br>Message: $message";
        $headers = "MIME-Version: 1.0 \r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
        $headers .= "From: $name <$email> \r\n";
        $mailsent = mail($to, $subject, $msgcontents, $headers);
            if($mailsent) {
            $sent = true;
            unset($name);
            unset($email);
            unset($company);
            unset($phone);
            unset($message);
        }
    }
}
?>
<?php include("doctype.php");?>
<body id="contact">
<!--<body data-spy="scroll" data-target=".scrollspy">-->
<!-- Navigation only for mobile -->
<?php include("navbar.php");?>

<div id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">

                <div class="thumbnail thumbnail-contact">
                    <div class="caption">
                        <h1>Contact <span>Us</span></h1>
                        <p>To become a MagBalloon retailer or distributor,
                            please email us at <strong>enquiries@magballoons.co.uk</strong> or use the form below.</p>

                    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal" id="form-contact" novalidate>
        <?php
        if($sent === true){
        echo "<div class='alert alert-success fade in'>
            <a href=''#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success!</strong> Your message has been sent successfully.
            </div>";
        } elseif($hasError === true) {
        echo '<div class="alert alert-danger fade in">';
        foreach($errorArray as $key => $val) {
        echo "<li>" . ucfirst($key) . " field error - $val</li>";
        }
        echo '</div>';
        }
        ?>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo (isset($name) ? $name : ''); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="company" class="col-sm-3 control-label">Company</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="company" name="company" value="<?php echo (isset($company) ? $company : ''); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo (isset($email) ? $email : ''); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone : ''); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-3 control-label">Enquire</label>
            <div class="col-sm-9">
                <textarea name="message" class="form-control" rows="3" id="message" value="<?php echo (isset($message) ? $message : ''); ?>"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" name="submitform" class="btn btn-default btn-contact">Submit</button>
            </div>
        </div>
    </form>
    </div>
 </div>

            <div class="col-xs-12 col-sm-6" id="company-info">
                <div class="caption">
                    <h1>Company <span>Info</span></h1>
                    <p>More detailed company info here</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="empty-section">
    <div class="container">

    </div>
</div>
<div id="questions">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Frequently <span>Asked Questions</span></h1>

                <div class="accordion-questions">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-faq">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Question</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Question</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Question</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Question</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php");?>
<?php include("scripts.php");?>
</body>
</html>