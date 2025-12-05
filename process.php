<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
include 'database.php';

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = [];
    
    // Server-side validation
    if (empty($name) || strlen($name) < 2 || !preg_match('/^[A-Za-z\s]+$/', $name)) {
        $errors[] = "Please enter a valid name (letters and spaces only, minimum 2 characters)";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address";
    }
    
    // Phone validation - exactly 10 digits
    $phoneDigits = preg_replace('/\D/', '', $phone);
    if (empty($phone) || !preg_match('/^\d{10}$/', $phoneDigits)) {
        $errors[] = "Phone number must be exactly 10 digits";
    }
    
    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters";
    }
    
    if (strlen($message) > 1000) {
        $errors[] = "Message must not exceed 1000 characters";
    }
    
    // If there are validation errors
    if (!empty($errors)) {
        header('Location: index.php?error=' . urlencode(implode(', ', $errors)));
        exit;
    }
  
    // Insert into database
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, message, created_at) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $name, $email, $phoneDigits, $message);

    if ($stmt->execute()) {
        $insertId = $stmt->insert_id;
        $emailSent = false;
        
        try {
            // SMTP Configuration
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'keerthanaananth1398@gmail.com';
            $mail->Password   = 'phbjbjaoztxavokr';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            
            $mail->setFrom('keerthanaananth1398@gmail.com', 'Contact Form');
            $mail->addAddress($email, $name);
            
            $mail->isHTML(true);
            $mail->Subject = 'Thank you for contacting us!';
            $mail->Body    = "
                <h3>Hello $name,</h3>
                <p>Thank you for contacting us. We have received your message:</p>
                <div style='background:#f9f9f9; padding:15px; border-left:4px solid #007bff; margin:15px 0;'>
                    <p><strong>Your Message:</strong></p>
                    <p>" . nl2br(htmlspecialchars($message)) . "</p>
                </div>
                <p>We will review your message and get back to you within 24-48 hours.</p>
                <p>Best regards,<br>Our Team</p>
            ";
            
            $mail->AltBody = "Hello $name,\n\nThank you for contacting us. We have received your message:\n\nMessage: $message\n\nWe will get back to you within 24-48 hours.\n\nBest regards,\nOur Team";

            if($mail->send()) {
                $emailSent = true;
                // Redirect with success parameter
                header('Location: index.php?success=1');
                exit;
            } else {
                // Redirect with success but email failed
                header('Location: index.php?success=1&email=0');
                exit;
            }
            
        } catch (Exception $e) {
            // Form submitted but email failed
            header('Location: index.php?success=1&email=0');
            exit;
        }

    } else {
        header('Location: index.php?error=Database+error:+Unable+to+save+your+message');
        exit;
    }
    
    $stmt->close();
    $conn->close();
} else {
    header('Location: index.php?error=Invalid+request+method');
    exit;
}
?>