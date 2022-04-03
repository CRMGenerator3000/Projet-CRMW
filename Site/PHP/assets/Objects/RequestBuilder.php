<?php
// Fonction de génération d'une requete Insert SQL
function generateInsertSQL($table, $columns, $values) {
    $sql = "INSERT INTO $table (";
    foreach ($columns as $column) {
        $sql .= $column . ", ";
    }
    $sql = substr($sql, 0, -2);
    $sql .= ") VALUES (";
    foreach ($values as $value) {
        $sql .= "'" . $value . "', ";
    }
    $sql = substr($sql, 0, -2);
    $sql .= ")";
    return $sql;
}

/**
 * Fonction de génération d'une requete Select SQL
 * @param $table string nom des tables à sélectionner exemple : "user join role on user.role_id = role.id"
 * @param $columns array nom des colonnes à sélectionner exemple : "role.id" ou "role.name"
 * @param $where array tableau associatif contenant les conditions exemple : array("login" => "admin", "password" => "admin")
 */
function generateSelectSQL($table, $columns, $where) {
    $sql = "SELECT ";
    foreach ($columns as $column) {
        $sql .= $column . ", ";
    }
    $sql = substr($sql, 0, -2);
    $sql .= " FROM $table";
    if ($where != null) {
        $sql .= " WHERE " . $where;
    }
    return $sql;
}

// Fonction de génération d'une requete Update SQL
function generateUpdateSQL($table, $columns, $values, $where) {
    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach ($columns as $column) {
        $sql .= $column . " = '" . $values[$i] . "', ";
        $i++;
    }
    $sql = substr($sql, 0, -2);
    $sql .= " WHERE " . $where;
    return $sql;
}
