<?php 
if (isset($_GET['page']) && $_GET['page'] == "secondView") {
    include_once '/view/secondView.php';
}
else{
    include_once './view/homePage.php';
}

?>