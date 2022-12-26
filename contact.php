<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us | Creative Beatuy Supply</title>
        <meta aria-roledescription="Email Mailing List & Contact Creative Beauty Supply Store">
        <link rel="icon" type="image/x-icon" href="imgs/creativebeautylogo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="contact.css">

</head>

<body>
        <?php
        include 'nav.php'; ?>
        <div id="wrapper">
                <h1>HOW CAN WE HELP?</h1>
                <form class="contact" action="contact_results.php" method="post">
                        <label for="fname"><input type="text" name="fname" id="fname" placeholder="First Name *" required></label><br>
                        <label for="lname"><input type="text" name="lname" id="lname" placeholder="Last Name *" required></label><br>
                        <label for="email"><input type="email" name="email" id="email" placeholder="Email Address *" required></label><br>
                        <label for="phone"><input type="tel" name="phone" id="phone" placeholder="Phone Number *" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required></label><br>
                        <label for="subject"><input type="text" name="subject" id="subject" placeholder="Subject (optional)"></label><br>
                        <label for="message"><textarea name="message" id="message" placeholder="Message (optional)" rows="15" cols="30"></textarea></label><br>
                        <p><input type="checkbox">Sign up for email mailing list</p>
                        <input type="submit" id="submit">
                </form>
        </div>
        <?php
        include 'footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>