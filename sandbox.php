<?php require_once('vendor/autoload.php');$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);$dotenv->load();

include 'vendor/autoload.php';
echo 'My First Notebook!';
$des = new \phpseclib\Crypt\TripleDES();
$public_key = '866248786179d463d924033921659db66b77c26c6860ecc592';
//obtenu sur la plateforme pro.ariarynet.com
$des->setKey($public_key);
$params_to_send = array("unitemonetaire" => "Ar", "adresseip" => '127.0.0.1', "idpanier" => 'ADGAER1', "montant" => 1, "nom" => 'TEST', "email" => 'test@gmail.com', "reference" => 'AETAZG4');
//crypter les paramètres à envoyer à notre serveur
$params_crypt = $des->encrypt(json_encode($params_to_send));
echo $params_crypt;
