<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$t = date("H");

if ($t < "20") {
    echo "Have a nice day!";
}
$favplace = "home";

switch ($favplace) {
    case "school":
        echo "Your favorite place is school!";
        break;
    case "college":
        echo "Your favorite place is college!";
        break;
    case "home":
        echo "Your favorite color is home!";
        break;
    default:
        echo "Your favorite color is neither school, college, nor home!";
}
        ?>
    </body>
</html>
