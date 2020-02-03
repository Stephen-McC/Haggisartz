<!--

contact us

-->

<!DOCTYPE html>
<html>
<head >
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Haggisartz</title>

    <!--CSS-->
    <!--BootStrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!--FontAwesome-->
    <link rel='stylesheet' href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css'>

    <!--Custom CSS-->
    <link rel='stylesheet' href='../css/style.css'>

    <!--Custom Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet">

    

</head>
<body>
    <div class='container-fluid top-page'>
        <img class='mobileimg' src='https://via.placeholder.com/160' alt="left side" height="160" width="160">
        <div class='logo'>
            <a href='home.php'>Haggisartz</a>
        </div>
        <img class='mobileimg' src='https://via.placeholder.com/160' alt="right side" height="160" width="160">
    </div>

    <?php
        echo 
        '<nav class="navbar">
            <div class="container-fluid">';
            foreach($catArray as $value){
                echo(
                '<a href="' . $value . 's.php">' . $value . 's</a>'
                );
            }
        echo
            '</div>
        </nav>';
    ?>     
    
    