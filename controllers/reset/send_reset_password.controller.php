<?php

$email = $_POST['send_email'];
print ("Please check your email!");
$token = bin2hex(random_bytes(16));
$token_hash= hash("sha256", $token);
$expiry = date("Y-m-d H:i:s",time() + 60 *30);
$mysqli = require __DIR__ . "database/database.php";
$sql = "UPDATE  users 
        SET reset_token_hash = ?,
            reset_token_expries_at = ?
        WHERE email = ?"
;
$stm = $mysqli-prepare($sql);
$stm->bind_params("sss", $token_hash, $expiry, $email);
$stm->execute();

if ($mysqli->affected_rows) {
    # code...
    require __DIR__ . "mailer.php";
    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END 

    Click <a href="http://example.com/new_Password.controller.php?token=$token">Click</a> 

    END;
    try {
        //code...
        $mail->send();
    } catch (Exception $e) {
        //throw $th;
        echo "Message could not be send. Mailer error: {$mail->ErrorInfo}";
    }
     
}
echo "Message sent, please check your email."
?>