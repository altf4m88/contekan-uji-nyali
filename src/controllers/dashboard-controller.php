<?php

class DashboardController {
    public function index($database, $table) {
        $query = mysqli_query($database, "SELECT * FROM $table");

        $result = [];
        if (mysqli_num_rows($query) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        } else {
        echo "0 results";
        }

        return $result;
    }

    public function update($database, $table, $id, $payload, $redirect = 'dashboard') {

        $sql = "UPDATE $table SET ";
        foreach($payload as $key => $value){
            $sql.=" $key = '$value',";
        }
        $sql = rtrim($sql, ',');

        $sql.= " WHERE no_daftar = $id";

        $run = mysqli_query($database, $sql);

        if($run){
            unset($_POST);
            echo "<script> alert('data disimpan');document.location.href='?page=$redirect'</script>";
        } else {
            echo "<script> alert('data gagal disimpan');document.location.href='?page=$redirect'</script>";
        }
    }


    public function detail($database ,$table, $id ) {
        $query = mysqli_query($database, "SELECT * FROM $table WHERE no_daftar = $id");

        $result = mysqli_fetch_assoc($query);

        return $result;
    }

    public function delete($database, $table, $id, $redirect) {

        $query = mysqli_query($database, "DELETE FROM $table WHERE no_daftar = $id");

        mysqli_query($database, $query);

        unset($_POST);
        echo "<script> alert('data disimpan');document.location.href='?page=$redirect'</script>";
    }
}