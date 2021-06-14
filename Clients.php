<?php
class Clients {

    public $allCustomers=[];
    
     public function __construct () {
         $bdd = new PDO('mysql:host=localhost;dbname=dabest_photographie;charset=utf8', 'camelia', 'nounours_*_21');
          $allCustomers=$bdd->query('SELECT * FROM customers');
         foreach($allCustomers as $customers){
             $customers=new Client($customers['last_name'],$customers['first_name'],$customers['email'],$customers['address'],$customers['postcode'],$customers['city']);
         array_push($this->allCustomers,$customers);
 
         } $allCustomers->fetchAll(Pdo::FETCH_ASSOC);
         
     }
     
 function displayClients(){?>
 
     <?php foreach($this-> allCustomers as $client){
         $client -> displayClient();
     }
 }
 }