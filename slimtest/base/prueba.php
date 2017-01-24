<?php

$url = "http://localhost/slimtest/base/employees.json";
$feed = json_decode(file_get_contents($url), true);
$data['usuarios'] = $feed;

$id = '574daa379545e9af101c2731';
//var_dump($data['usuarios'][0]);
var_dump($data['usuarios'][1]['id']);
for ($x = 0; $x <= count($data['usuarios']); $x++) {
    if ($data['usuarios'][$x]['id'] == $id) {
        var_dump($data['usuarios'][$x]);
        echo $data['usuarios'][$x]['id'] . "<br>";
    }
}
?>