<?php
include 'conexao.php';
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = (array)json_decode($_POST['json']);
    $msg = $data['action'] == 'add' ? 'adicionado' : 'removido';
/*    if($data['action'] == 'add'){
        $sql = "INSERT INTO agenda_vilson_m3.tb_evento (date, title)VALUES (".$data['date'].", ".$data['title'].")";
    }else{
        $sql = "DELETE FROM agenda_vilson_m3.tb_evento WHERE data = ".$data['date'];
    }

    if($result = $conn->query($sql)){

        var_dump($result->fetch_all());die;
    }*/

    echo json_encode(['msg' => $msg], true);
}else{

    if($result = $conn->query("SELECT timestamp,title FROM agenda_vilson_m3.tb_evento")){
        $events = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($events, true);
    }

/*    $events = [
        ['timestamp' => 1526799448, 'title' => 'reuniao'],
        ['timestamp' => 1527058648, 'title' => 'aniversario'],
    ];

    echo json_encode($events, true);*/
}

exit;
