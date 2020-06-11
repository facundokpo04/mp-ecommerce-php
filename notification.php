

<?php 

$body=json_decode(file_get_contents('php://input'));

switch($body->type) {
    case "payment":
        error_log("===========  TODO  ============== ".json_encode($body));
        header('Content-Type: application/json');
        echo json_encode(['HTTP/1.1 200 OK'], 200);
        break;
    case "plan":
        $header('Content-Type: application/json');
        echo json_encode(['HTTP/1.1 200 OK'], 200);
        break;
    case "subscription":
        header('Content-Type: application/json');
        echo json_encode(['HTTP/1.1 200 OK'], 200);
        break;
    case "invoice":
        header('Content-Type: application/json');
        echo json_encode(['HTTP/1.1 200 OK'], 200);
        break;
}

?>