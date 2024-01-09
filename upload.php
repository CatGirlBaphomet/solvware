<?php
if(isset($_FILES['fileToUpload'])){
    $errors= array();
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_parts = explode('.', $_FILES['fileToUpload']['name']);
    $file_ext = strtolower(end($file_parts));

    $extensions= array("xml");

    if(in_array($file_ext,$extensions) === false){
        $errors[]="extension not allowed, please choose a XML file.";
    }

    if(empty($errors) == true){
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }
        move_uploaded_file($file_tmp,"uploads/".$file_name);

        // Load and return the XML content
        $xml = simplexml_load_file("uploads/".$file_name);
        header('Content-Type: application/json');
        echo json_encode($xml);
    } else {
        header('Content-Type: application/json');
        echo json_encode($errors);
    }
}
?>
