<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class SendEmail
{
    public static function SendMail($to, $subject, $content)
    {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'php.itconference@gmail.com';                     //SMTP username
            $mail->Password   = 'xorg1338';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('skibamichal07@gmail.com', 'IT Conference');
            $mail->addAddress($to);     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->Body    = '<div style="padding: 25px 60px; background-color: #fff; color: #2e2e2e; line-height: 130%; font-size: 2rem">' . $content . '</div>
    <br><div style="padding: 20px 0; border-top: 1px solid #ccc;">Market channels network effects MVP ecosystem virality pitch seed round. Influencer A/B testing gen-z infographic user experience hypotheses handshake. Responsive web design MVP client user experience growth hacking interaction design validation iPad funding startup marketing hackathon series A financing holy grail. <br><br> Monetization accelerator crowdfunding user experience rockstar ramen. Holy grail monetization startup. User experience focus seed round client. User experience rockstar iPad A/B testing crowdfunding.</div><br><br><div style="margin-top: 30px; margin-bottom: 60px; color: white; background-color: #2B7AFF; padding: 10px; border-radius: 15px; text-align: center;"><a style="color: white; text-decoration: none;" href="https://php-attendance-1.herokuapp.com/index.php">Conference site</a></div>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
