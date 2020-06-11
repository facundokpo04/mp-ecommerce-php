

<?php 



$cartel = "facundokpo04";
switch($_POST["type"]) {
    case "payment":
        error_log("*******Post********".print_r($cartel,true));
        error_log("===========  POST  ============== ".print_r($_POST, true));
        error_log("===========  REQUEST  ============== ".print_r($_REQUEST, true));
        $entityBody = file_get_contents('php://input');
        error_log("===========  TODO  ============== ".print_r($entityBody, true));
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