<?php 
if (isset($_GET['page']) && $_GET['page'] == "addClient") {
    include_once './view/addClientPage.php';
}
else{
    include_once './view/homePage.php';
}

?>