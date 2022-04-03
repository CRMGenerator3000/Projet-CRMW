<?php
/**
 * Fonction de création d'une requête préparée avec PDO
 */
function prepareRequest($sql, $values) {
    $req_prep = Model::$pdo->prepare($sql);
    $req_prep->execute($values);
    return $req_prep;
}