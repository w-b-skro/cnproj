<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<body>

    Thanks for completing my form.
    Your name has been registered as: <?php echo htmlspecialchars($_get['name']); ?>.
    Your Email as: Hi <?php echo htmlspecialchars($_POST['email']); ?>.
    And your comments as: Hi <?php echo htmlspecialchars($_POST['comments']); ?>.
</body>
</html>