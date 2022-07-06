<?php


/**
 *
 * @param string $query
 * @return array
 */
function selectQuery (PDO $pdo, string $query): array {
    $data = [];

    $result = $pdo->query($query)->fetchAll();

    if ($result !== false): 
        $data = $result;
    endif;

    return $data;
}

function pagination (PDO $pdo, int $page, string $queryCount, string $query, int $perPage = 4): array {
    $count = queryCount($pdo, $queryCount);
    $pages = (int)ceil($count / $perPage);
    $offset = $perPage * ($page - 1);

    $query .= " LIMIT $perPage OFFSET $offset";



    return ["pages" => $pages, "data" => selectQuery($pdo, $query)];
}



function queryCount (PDO $pdo, string $query): int {
    return (int)$pdo->query($query)->fetch(PDO::FETCH_NUM)[0];
}


function delete (PDO $pdo, string $query, $key): bool {
    $req = $pdo->prepare($query);
    $delete = $req->execute([$key]);

    if ($delete === false) {
        return false;
    }

    return true;
}


function exist (PDO $pdo, string $query, $data) {
    $exist = $pdo->prepare($query);
    $exist->execute([$data]);
    
    if ($exist->fetch() === false) {
        return false;
    }

    else {
        return true;
    }
}