<?php
/*重庆时时彩*/
function SscAdd(){
    $mysqli = mysqli_connect('localhost', 'root', '123456', 'sscdf');
    if(mysqli_connect_errno()){
        printf("Connect failed:%s\n", mysqli_connect_error());
        exit();
    }

    $qihao=date("Ymd");
    $start_time = mktime(10,00,0,date("m"),date("d"),date("Y"));
    $end_time = mktime(01,55,0,date("m"),date("d"),date("Y"));
    $ru=24;
    $game_code=2;
    for($i = 1;  $i<= 120; $i++){
        $ru=$ru>120?1:$ru;
        if($ru<10){
            $a="00".$ru;
        }else if($ru>=10 && $ru<=99){
            $a="0".$ru;
        }else{
            $a=$ru;
        }

        if($ru>=1 && $ru<=23){
            $start_time+=60*5;
        }elseif($ru==24){
            $start_time+=0;
        }elseif($ru>=25 && $ru<=96){
            $start_time+=60*10;
        }else{
            $start_time+=60*5;
        }

        $qihao=$ru>=1 && $ru<=23?date("Ymd",$start_time):$qihao;
        $round=$qihao."-".$a;

        $query = "select * from ssc_3dopen where round='".$round."' and game_code=".$game_code."";
        $res =mysqli_query($mysqli, $query);
        if($row=mysqli_fetch_array($res)){
            mysqli_close($mysqli);
            echo 'SscAdd-Error';
        }else{
            $sql="insert into ssc_3dopen set ";
            $sql.="round='".$round."',";
            $sql.="game_code='".$game_code."',";
            $sql.="endtime='".$start_time."',";
            $sql.="roundtime='".$start_time."',";
            $sql.="passed=0";
            mysqli_query($mysqli, $sql);
        }

        $ru++;
        // 释放查询结果集
        mysqli_free_result($res);
    }

    echo 'SscAdd-ok';
    mysqli_close($mysqli);
}

SscAdd();
