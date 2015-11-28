<title>Book A Gig</title>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["user_name"]);
    $email = trim($_POST["user_email"]);
    $details = trim($_POST["user_details"]);
    $gig_date = trim($_POST["user_date"]);

    if ($name == "" OR $email == "" OR $gig_date = "") {
        $error_message = "You must specify a value for name, email address, and gig date.";
    }

    if (!isset($error_message)) {
        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ){
                $error_message = "There was a problem with the information you entered.";
            }
        }
    }

    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Your form submission has an error.";
    }

    require_once("inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "You must specify a valid email address.";
    }

    if (!isset($error_message)) {
        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Gig Date: " . $gig_date . "<br>";
        $email_body = $email_body . "Details: " . $details;

        

        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 80;
        
        $mail->SetFrom($email, $name);
        $address = "tlthomas85@gmail.com";
        $mail->AddAddress($address, "Brother Wolves");
        $mail->Subject  = "Brother Wolves Gig Info | " . $name;
        $mail->MsgHTML($email_body); 

        if($mail->Send()) {
            header("Location: thanks.php");
            exit;
        } else {
            $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
           
        }

    }
}

?><?php 
include('/inc/header.php'); ?>

<p class="gig">Book A Gig</p>

    <div class="section page">

                    <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for the email! We&rsquo;ll be in touch shortly!</p>
            <?php } else { ?>

                <?php
                    if (!isset($error_message)) {
                        echo '<p class="bwgig">Do you need to book us for a show?</p>';
                    } else {
                        echo '<p class="message">' . $error_message . '</p>';
                    }
                ?>

                <div class="gig_table">
                
                <form method="post" action="contact.php">

                    <table class="center">
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="user_name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="user_email" id="email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="howl">Gig Date</label>
                            </th>
                            <td>
                                <input type="date" name="user_date" id="date"><?php if (isset($user_date)) { echo htmlspecialchars($user_date); } ?></input>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="details">Additional Info</label>
                            </th>
                            <td>
                                <textarea name="user_details" id="details"><?php if (isset($user_details)) { echo htmlspecialchars($user_details); } ?></textarea>
                            </td>
                        </tr>  
                        <tr style="display: none;">
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>Humans: please leave this field blank.</p>
                            </td>
                        </tr>                   
                    </table>
                    <input class="button" type="submit" value="Send">

                </form>
            </div>
            <?php } ?>

        </div>

    </div>

<?php include('inc/footer.php'); ?>