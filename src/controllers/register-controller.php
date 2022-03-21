<?php

class RegisterController {

    public function register($database, $table, $payload, $redirect = 'dashboard') {

        $sql = "INSERT INTO  $table ( ";
        foreach($payload as $key => $value){
            $sql.=" $key,";
        }
        $sql = rtrim($sql, ',');

        $sql.= ') VALUES (';
        foreach($payload as $key => $value){
            $sql.=" '$value',";
        }
        $sql = rtrim($sql, ',');
        $sql.= ');';

        $run = mysqli_query($database, $sql);

        

        if($run){
            unset($_POST);
            echo "<script> alert('data disimpan');document.location.href='?page=$redirect'</script>";
        } else {
            echo "<script> alert('data gagal disimpan');document.location.href='?page=$redirect'</script>";
        }
    }


}