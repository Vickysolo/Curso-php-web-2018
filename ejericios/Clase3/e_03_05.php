<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $array = [
            'hola' => 'caracola',
            'adios' => 'caiman',
            'hola' => 'verano',
            'hastaluego' => 'cocodrilo',
        ];
        
        if (count($array) > 0) {
            echo 'tengo algun elemento';
        } else {
            echo 'no tengo ningun elemento';
        }
    ?>
</body>
</html>


</<!DOCTYPE html>
