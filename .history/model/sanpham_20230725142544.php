<?php
    function select_sanpham(){
        //show tất cả sản phẩm
        $sql = "select * from sanpham order by id DESC";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }

    function insert_sanpham($ten_sanpham,$gia,$hinh,$mota,$id_danhmuc){
        //thêm sản phẩm
        $sql = "insert into sanpham(ten_sanpham,gia,hinh,mota,id_danhmuc) values('$ten_sanpham','$gia','$hinh','$mota','$id_danhmuc')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        //xóa sản phẩm
        $sql =  "delete from sanpham where id='$id'";
        pdo_execute($sql);
    }
    function select_one_sanpham($id){
        // chi tiet sản phẩm
        $sql =  "select * from sanpham where id='$id'";
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
    function select_cungdanhmuc_sanpham($id_danhmuc){
        // cùng danh mục
        $sql = "select * from sanpham where id_danhmuc='$id_danhmuc'";
        $sp_dm = pdo_query($sql);
        return $sp_dm;
    }
    function update_sanpham($id,$ten_sanpham,$gia,$hinh,$mota,$id_danhmuc){
        // cập nhật sản phẩm
        if ($hinh!="") {
            $sql = "update sanpham set ten_sanpham ='$ten_sanpham',gia='$gia',hinh='$hinh',mota='$mota',id_danhmuc='$id_danhmuc' where id='$id'";
        }else{
            $sql = "update sanpham set ten_sanpham ='$ten_sanpham',gia='$gia',mota='$mota',id_danhmuc='$id_danhmuc' where id='$id'";
        }
       
        pdo_execute($sql);
    }
    function select_sanpham_limit($start,$limit){
        //lấy sản phẩm theo limit
        $sql = "select * from sanpham order by id DESC LIMIT $start,$limit";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
?>