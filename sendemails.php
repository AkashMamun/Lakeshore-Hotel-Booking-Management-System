<?php
$to_email = "dtdhonitatripura@gmail.com";

$subject = "Lakshore Hotel Booking In Rangamati";
$body = "Hello Sir, Congratulations! Your room booking is complete in Lakeshore Hotel In Rangamati.Please come on rightDate. If you have any enquery feel free to call us 01521308512.


For more details & get offer please eye on our website wwww.lakeshorehotel.com";
$headers = "From: lakeshore.rangamati.hotel@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Booking Confirmation Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
