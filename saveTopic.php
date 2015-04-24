<?php
    if($_POST != null) {
        include 'RestClient.php';

        $url ="http://localhost:8080/examTopic/save";

        $params = array(
            'point' => $_POST['point'],
            'topicName' => $_POST['topicName'],
            'type' => 'PROJECT',
            'max' => '1',
         );

        $json = json_encode($params, 1);

        $result = RestClient::post($url, $json, null, null, 'application/json');
        print_r($result);
    }
?>

<form method="POST" action="">
    ad : <input type="text" name="topicName" /> <br/>
    puan : <input type="text" name="point" /> <br/>
    <input type="submit" value="Kaydet" />
</form>