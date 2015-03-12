<?php

include("sshConnectClass.php");


echo "hello world<br>";


$editConnexion = new ReflectionClass('NiceSSH');
$connexion = new NiceSSH();

$editHote = $editConnexion->getProperty('ssh_host');
$editHote->setAccessible(true);

$editHote->setValue($connexion, 'mon.serveur.com');
var_dump($editHote->getValue($connexion));


?> 