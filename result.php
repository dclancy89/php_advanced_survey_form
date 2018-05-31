<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>

<div id="survey">

<h2>Submitted Information</h2>

<p><strong>Name:</strong> <span><?php echo $_POST["name"]; ?></span></p>
<p><strong>Location:</strong> <span><?php echo $_POST["location"]; ?></span></p>
<p><strong>Language:</strong> <span><?php echo $_POST["language"]; ?></span></p>
<p><strong>Comment:</strong> <span><?php echo $_POST["comment"]; ?></span></p>

<a href="index.php">Go Back</a>

</div>
    
</body>
</html>