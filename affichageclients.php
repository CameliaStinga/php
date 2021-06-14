<?php
include "header.php";
include "database.php";
include "Client.php";
include"Clients.php";
//création d'un objet qui fournis les arguments au constructeur et qui seront afficher avec la fonction displayClient
$client = new Client("Currie", "Marie", "marie.currie@yahoo.fr","12 rue Paul Mistral",65000, "Paris");
//on affiche le client avec ses caractéristiques
$client->displayClient();

$clients = new Clients;
$clients->displayClients();
