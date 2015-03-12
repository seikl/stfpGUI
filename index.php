<?php

include("sshConnectClass.php");


echo "hello world<br>";




//POUR ACCES SSH
/*


$editConnexion = new ReflectionClass('NiceSSH');
$connexion = new NiceSSH();

$editHote = $editConnexion->getProperty('ssh_host');
//$editHote->setAccessible(true);

//$editHote->setValue($connexion, 'mon.serveur.com');
//var_dump($editHote->getValue($connexion));


$connexion->connect();

$connexion->exec('ls');

$connexion->disconnect();
*/


//POUR ACCESS SFTP
$connection = ssh2_connect('my.server.com', 22);
ssh2_auth_password($connection, 'user', 'password');

$sftp = ssh2_sftp($connection);


$handle = opendir("ssh2.sftp://$sftp/./media/");
echo "Directory handle: $handle <br><br>";
echo "Entries:<br>";
while (false != ($entry = readdir($handle))){
    echo "$entry<br>";
}



?> 