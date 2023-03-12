<?php
$_domisili = ["Jakarta", "Bogor", "Depok", "Tangerang"];

$program_studi = [
    "SI"=>"Sistem Informasi",
    "TI"=>"Teknik Informatika",
    "BD"=>"Bisnis Digita"
];
$skills = [
    "HTML"=>10,
    "CSS"=>10,
    "Javascript"=>20,
    "RWD Bootstrap"=>20,
    "PHP"=>30,
    "Python"=>30,
    "Java"=>50
];

function kelulusan($_nilai){
    if($_nilai >= 60){
        return'Lulus';
    }elseif($_nilai <= 59){
        return 'tidak lulus';
    }else{
        return 'tidak valid';
    }
}


function($_nilai){
    if($_nilai = 0 ){
        return 'Tidak Memadai';
    }elseif($_nilai <=40 ){
        return 'Kurang';
    }elseif($_nilai <=60){
        return 'Cukup';
    }elseif($_nilai <= 100){
        return 'Baik';
    }elseif($_nilai <= 150){
        return 'Sangat Baik';
    }else{
        return 'Tidak Valid';
    }
}

?>