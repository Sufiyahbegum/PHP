<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class bike {
    function bike() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new bike();

// show object properties
echo $herbie->model;
        ?>
    </body>
</html>
