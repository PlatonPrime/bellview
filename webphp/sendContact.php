<?php
    include "../database/config.php";
    $email =$_POST['email'];
    $message = $_POST['message'];
    $name = $_POST['per_name'];
    $phone =$_POST['phone'];
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
    require_once "../phpmailer/class.phpmailer.php";
    $message = '<html>
                    <body> 
                        <h2> Name:  '.$name.'</h2> 
                        <h2> E-Mail ID: '.$email.' </h2> 
                        <h2> Phone Number: '.$phone.'   </h2> 
                        <p>---------------------------------------------</p>
                        <h2>Message: </h2>
                        <h4>'.$message.'</h4>
                    </body>
                </html>';
    try 
    {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'mail.platonprime.com';
        $mail->Port = 465;
        $mail->Username = 'noreply@platonprime.com';
        $mail->Password = 'pl@tonnoreply';
        $mail->Subject = 'A new Customer Application from   "'.$name.'"';
        $mail->SetFrom('noreply@platonprime.com', 'BellView');
        $mail->AddAddress("platonprivate@gmail.com");
        $mail->MsgHTML($message);
        //$mail->Send();
        date_default_timezone_set("Asia/Kolkata");
        $da= date("d/m/Y H:i a");
        $query = "INSERT INTO contact_us VALUES('".$name."','".$email."','".$phone."','".$message."','".$da."')";
        if($mail->Send()) {
            mysqli_query($conn,$query);
            echo "<script>
            alert('Message has been sent');
            window.location.href='../index.html';
            </script>";
        } else {
            /*echo $mail->ErrorInfo;exit();*/
            echo "<script>
            alert('Message could not be sent.');
            window.location.href='../contact.php';
            </script>";
            exit;
        }
    } 
    catch (phpmailerException $e) 
    {
        /*echo $mail->ErrorInfo;exit();*/
        echo "<script>
        alert('Message has not been sent');
        window.location.href='../contact.php';
        </script>";
    } 
    catch (Exception $e) 
    {
        /*echo $mail->ErrorInfo;exit();*/
        echo "<script>
        alert('Message has not been sent');
        window.location.href='../contact.php';
        </script>";
    }
?>