<?php
// get the data from the first name text input
$fname = filter_input(INPUT_POST, 'fname');
// get the data from the last name text input
$lname = filter_input(INPUT_POST, 'lname');
// get the data from the last name text input
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// get the data from the phone number input
$phone = filter_input(INPUT_POST, 'phone');
// get data from the mailing_list check box,
// display a value of 'Yes' or 'No'
$data_request = isset($_POST['mailing_list']);
if ($data_request === true) {
    $data_request = 'Yes';
} else {
    $data_request = 'No';
}
//get the subject title from the text area
// $subject = filter_input(INPUT_POST, 'subject');
// $subject = nl2br($comments, false);
//get the message from the text area
// $message = filter_input(INPUT_POST, 'message');
// $message = nl2br($comments, false);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="icon" type="image/x-icon" href="imgs/creativebeautylogo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
    <style>
        #wrapper {
            height: 50vh;
            text-align: center;
            padding-top: 5em;
        }
    </style>
</head>

<body>
    <?php
    include 'nav.php'; ?>
    <div id="wrapper">
        <h1>Thank you <span><?php echo htmlspecialchars($fname); ?>!</span></h1>
        <p>You should hear from us soon!</p>
    </div>
    <?php
    include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>