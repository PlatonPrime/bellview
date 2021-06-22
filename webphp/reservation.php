<?php
    include "../database/config.php";
    $rpn=$_POST['per_name'];
    $rpe=$_POST['email'];
    $rpp=$_POST['phone'];
    $rpnp=$_POST['persons'];
    $rpd=$_POST['date'];
    $rpt=$_POST['time'];
    $rpr=$_POST['res_name'];
    $sub=$_POST['res_name']." Restaurants Reservation Details";
    date_default_timezone_set("Asia/Kolkata");
    $da= date("d/m/Y H:i a");
    $id = substr($rpr, 0, 4);
    $rid =$id.date("His").mt_rand(1000,9999); 

    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
    require_once "../phpmailer/class.phpmailer.php";
    $message1 = '<html>
    <body> 
    <h2> Name:  '.$rpn.'</h2> 
    <h2> E-Mail ID: '.$rpe.' </h2> 
    <h2> Phone Number: '.$rpp.'   </h2> 
    <p>---------------------------------------------</p>
    <h2> Number of Persons: '.$rpnp.' </h2> 
    <h2> Date: '.$rpd.' </h2> 
    <h2> Time: '.$rpt.' </h2> 

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
        $mail->Subject = "$sub";
        $mail->SetFrom('noreply@platonprime.com', 'BellView Reservation');
        $mail->AddAddress("platonprivate@gmail.com");
        $mail->AddAddress("$rpe");
        $mail->MsgHTML($message1);
            //$mail->Send();
        date_default_timezone_set("Asia/Kolkata");
        $da= date("d/m/Y H:i a");
        $query = "INSERT INTO reservation VALUES('".$rid."','".$rpr."','".$rpn."','".$rpe."','".$rpp."','".$rpnp."','".$rpd."','".$rpt."','".$da."')";
        if($mail->Send())
        {
            mysqli_query($conn,$query);
            echo "<script>
            alert('Message has been sent');
            window.location.href='../index.html';
            </script>";
        } else {
            echo "<script>
            alert('Message could not be sent.');
            window.location.href='../reservation.php';
            </script>";
            exit;
        }
    } 
    catch (phpmailerException $e) 
    {
        echo "<script>
        alert('Message has not been sent');
        window.location.href='../reservation.php';
        </script>";
    } 
    catch (Exception $e) 
    {
        echo "<script>
        alert('Message has not been sent');
        window.location.href='../reservation.php';
        </script>";
    }
?>