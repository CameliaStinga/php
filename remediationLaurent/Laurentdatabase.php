<?php

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=campus_bdd;host=127.0.0.1';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);

/** Cette fonction fait la requete en BDD */
function queryParties($queryToExecute) {
    global $dbh;
    $query = $dbh->query($queryToExecute);
    return $query->fetchAll(PDO::FETCH_ASSOC);

}

/** Cette fonction récupère toutes les "parties" */
function allParties() {
    $sql = 'SELECT * FROM parties';
    return queryParties($sql);
}

/** Cette fonction récupère toutes les "parties" avec un prix supérieur ou égale au prix moyen */
function expensiveParties() {
    $sql = 'SELECT * FROM parties 
        WHERE price >= (
            SELECT AVG(price) FROM parties
        )';

    return queryParties($sql);
}