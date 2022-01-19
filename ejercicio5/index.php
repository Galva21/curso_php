<?php 

    //this is a constant
    define("WELCOME", "NICE TO MEET YOU");
    $selectedLanguage = "";

    if($_POST){
        //receive information from the html form
        $name = $_POST['txtName'];
        $selectedLanguage = $_POST['language'];
        echo "HI ". $name . " ". WELCOME . ", you like the language " . $selectedLanguage;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Name: <input type="text" name="txtName" id=""><br/>
        Languages: <br/>
        php: <input type="radio" name="language" value="php" <?php echo ($selectedLanguage=="php")?"checked":"";?>> <br/>
        html: <input type="radio" name="language" value="html" <?php echo ($selectedLanguage=="html")?"checked":"";?>> <br/>
        css: <input type="radio" name="language" value="css" <?php echo ($selectedLanguage=="css")?"checked":"";?>> <br/>
        <input type="submit" value="Send">
    </form>
</body>
</html>