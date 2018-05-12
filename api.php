<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = (array)json_decode($_POST['json']);
    $msg = $data['action'] == 'add' ? 'adicionado' : 'removido';
    echo json_encode(['msg' => $msg], true);
}else{
    $events = [
        ['timestamp' => 1526799448, 'title' => 'reuniao'],
        ['timestamp' => 1527058648, 'title' => 'aniversario'],
    ];
    echo json_encode($events, true);
}

exit;
