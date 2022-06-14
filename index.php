<?php


require_once('./autoload.php');
require_once('./controllers/HomeController.php');
require_once('./views/includes/alerts.php');

if( basename($_SERVER['REQUEST_URI'])=="Acueille"||basename($_SERVER['REQUEST_URI'])=="cabinetdOrientationScolaire"||basename($_SERVER['REQUEST_URI'])=="test"){
include ('./views/includes/navbar.php');
}


$home =new HomeController();
$page=['Acueille','formReserver','inscrire','login','Questionnaire','test','dashboard','admin','ajouterAdmin','profile','chargeOrientation','etudiant','logout','deleteAdmin','editeAdmin','AcueilleEtudiant','profileEtudiant','reservation','deleteEtudiant','editeEtuiant','deleteReservation','contact','deletecontact','valideReserve','saveQuizeResult','testResult','deleteTest'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$page)){
        $home->index($_GET['page']);
    } else{
      include('views/includes/404.php');
    }
}else{
        $home->index('Acueille');
    }


    if( basename($_SERVER['REQUEST_URI'])=="Acueille"||basename($_SERVER['REQUEST_URI'])=="cabinetdOrientationScolaire"||basename($_SERVER['REQUEST_URI'])=="AcueilleEtudiant"||basename($_SERVER['REQUEST_URI'])=="inscrire"||basename($_SERVER['REQUEST_URI'])=="login"||basename($_SERVER['REQUEST_URI'])=="Questionnaire"||basename($_SERVER['REQUEST_URI'])=="test"){
        include ('./views/includes/footer.php');}




