<?php
    require_once('functions/admin-functions.php');
    needLogIn();
    getAdminHeader();
    getAdminSidebar(); 
    getBreadcrum();
    getAdminPart('dashboard.php');
    getAdminFooter();
?>    