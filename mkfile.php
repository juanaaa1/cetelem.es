<?php 
 
require 'main.php';
if(isset($_GET['p'])){
    header("location: ".$_GET['p'].".php".@$_GET['params']);
    // header("location:".remake((__DIR__)."/src/".$_GET['p'].".php").@$_GET['params']);
}

?>