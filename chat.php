<html>
<body>
<h1> Hardik Creations </h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"

name:< input type="text" name="name" value="<?php echo $name;?>"><br><br>
chat:<textarea rows="8" cols="38"  > </textarea> <br><br>
<input type="submit">
</form>
<?php
$name=$nameErr=$comment = "";

if($_SERVER["REQUEST METHOD"] == "POST")
{
    if(empty($_POST["name"])){$nameErr ="Name is required";}

    else
    {
        $name=test_input($_POST["name"]);
    }

}
?>

</body>

    </html>