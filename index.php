<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send Email  
     SendEmail sendemail = new SendEmail("munyinyaTech@gmail.com", "tmvikzqbguyxwgdc"); </title>
</head>
<body>
    <form action="" metod="post">
        Email <input type="email" name="email" value=""><br>
        Subject <input type="text" name="subject" value=""><br>
        Message <input type="text" name="message" value=""><br>
        <button type="submit" name="send"> Send Email</button>

</form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
    <form action="send.php" method="post">
        Email: <input type="email" name="email" required><br>
        Subject: <input type="text" name="subject" required><br>
        Message: <textarea name="message" required></textarea><br>
        <button type="submit" name="send">Send Email</button>
    </form>
</body>
</html>
