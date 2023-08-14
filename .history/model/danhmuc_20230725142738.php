<?php
    function select_danhmuc(){
        //show tất cả danh mục
        $sql = "select * from danhmuc order by ten_danhmuc";
        $danhmuc = pdo_query($sql);
        return $danhmuc;
    }

    function insert_danhmuc($ten){
        //thêm danh mục
        $sql = "insert into danhmuc(ten_danhmuc) values('$ten')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        //xóa danh mục
        $sql =  "delete from danhmuc where id='$id'";
        pdo_execute($sql);
    }

    function select_one_danhmuc($id){
        // chi tiết 1 danh mục
        $sql =  "select * from danhmuc where id='$id'";
        $danhmuc_one = pdo_query_one($sql);
        return $danhmuc_one;
    }

    function update_danhmuc($id,$ten_danhmuc){
        //cập nhật danh mục
        $sql = "update danhmuc set ten_danhmuc ='$ten_danhmuc' where id='$id'";
        pdo_execute($sql);
    }

    function select_danhmuc_limit($start,$limit){
        //lấy danh mục theo limit
        $sql = "select * from danhmuc order by ten_danhmuc limit $start,$limit";
        $danhmuc = pdo_query($sql);
        return $danhmuc;
    }
    function check_ten_danhmuc($ten){
        //kiểm tra tên danh mục đã tồn tại chưa
        $sql = "select * from danhmuc where ten_danhmuc='$ten'";
        $danhmuc = pdo_query_one($sql);
        if($danhmuc){
            return true;
        }else{
            return false;
        }
    }
    
?>