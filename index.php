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

<form action="result.php" method="POST" id="survey">

<label for="name">Your Name:</label>
<input type="text" name="name">

<label for="location">Dojo Location:</label>
<select name="location">
    <option value="Mountain View">Mountain View</option>
    <option value="Chicago">Chicago</option>
    <option value="Dallas">Dallas</option>
    <option value="Online">Online</option>
</select>

<label for="language">Favorite Language</label>
<select name="language">
    <option value="Javascript">Javascript</option>
    <option value="PHP">PHP</option>
    <option value="Python">Python</option>
    <option value=".NET">.NET</option>
</select>

<label for="comment">Comment (optional):</label>
<textarea name="comment"></textarea>

<input type="submit" value="submit">

</form>
    
</body>
</html>