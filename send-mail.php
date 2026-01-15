<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = htmlspecialchars($_POST['username']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rohitazsm12@gmail.com';
        $mail->Password   = 'cpfpuatpvlggsywm'; // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender (IMPORTANT: always your own email)
        $mail->setFrom('rohitazsm12@gmail.com', 'Website Contact Form');
        $mail->addReplyTo($email, $name);

        // ✅ MAIN RECEIVER
        $mail->addAddress('irengineersir@gmail.com');

        // ✅ CC RECEIVER
        $mail->addCC('info@irengineers.org');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Inquiry | $subject";

        // Professional HTML Email Layout
        $mail->Body = "
        <div style='font-family: Arial, sans-serif; background:#f4f6f8; padding:20px;'>
            <div style='max-width:600px; margin:auto; background:#ffffff; padding:25px; border-radius:8px;'>
                <h2 style='color:#1f2937; border-bottom:2px solid #f97316; padding-bottom:10px;'>
                    New Enquiry Received – IR Engineer
                </h2>

                <table width='100%' cellpadding='8' cellspacing='0'>
                    <tr>
                        <td width='30%'><strong>Name:</strong></td>
                        <td>$name</td>
                    </tr>
                    <tr style='background:#f9fafb;'>
                        <td><strong>Email:</strong></td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td>$phone</td>
                    </tr>
                    <tr style='background:#f9fafb;'>
                        <td><strong>Subject:</strong></td>
                        <td>$subject</td>
                    </tr>
                </table>

                <p style='margin-top:20px;'><strong>Message:</strong></p>
                <div style='background:#f3f4f6; padding:15px; border-radius:5px;'>
                    $message
                </div>

                <p style='margin-top:25px; font-size:12px; color:#6b7280;'>
                    This email was sent from the website contact form.
                </p>
            </div>
        </div>
        ";

        $mail->send();

        // Redirect after success
        header("Location: thank-you.php");
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
