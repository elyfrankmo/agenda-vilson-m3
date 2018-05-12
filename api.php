<?php
include 'config/conexao.php';
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = filter_input(INPUT_POST, 'action', FILTER_DEFAULT);
    $title = filter_input(INPUT_POST, 'title', FILTER_DEFAULT);
    $timestamp = filter_input(INPUT_POST, 'timestamp', FILTER_VALIDATE_INT);

    $msg = $action == 'remove' ? 'removido' : 'adicionado';
    $sql = '';
    switch ($action){
        case 'add':
            $sql = sprintf('INSERT INTO agenda_vilson_m3.tb_evento (title, timestamp) VALUES ("%s", %d)', $title, $timestamp);
            break;
        case 'update':
            $sql = sprintf('update agenda_vilson_m3.tb_evento set title = "%s" WHERE timestamp = %d', $title, $timestamp);
            break;
        case 'remove':
            $sql = sprintf('DELETE FROM agenda_vilson_m3.tb_evento WHERE timestamp = %d', $timestamp);
            break;
        default:
            $msg = 'Ação não implementada';
    }

    if(!empty($sql) && $result = $conn->query($sql)){
        $conn->commit();
    }

    echo json_encode(['msg' => $msg], true);
}else{
    $events = $conn->query('SELECT timestamp,title FROM agenda_vilson_m3.tb_evento')->fetch_all(MYSQLI_ASSOC);
    echo json_encode($events, true);
}

exit;
