<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['name','email','mobile','post','address','qualification','line-size','body-material','handwheel','description','valve-size','trim-material','fail-action','characteristic','rating','others','actuator-type','end-connection','application','company','designation','nature-of-enquiry','fluid-phase','molecular-wt-density','fluid-name','specific-gravity','cp/cv','min','nor','max','unit','othersp','mini','nori','maxi','uniti','gaugei','mino','noro','maxo','unito','gaugeo','mint','nort','maxt','unitt','mins','units','gauges','mind','unitd','gauged','mindt','cdt','minv','cp','serialno','com-date','problem','details1','noticed','details2','details3'])->maxLength(1000);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);

$pp->attachFiles(['resume']);

$pp->sendEmailTo('director@uniflow.in'); // ← Your email here

echo $pp->process($_POST);
