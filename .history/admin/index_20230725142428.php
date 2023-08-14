<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];

        switch ($act) {
                                         /* Controller danh mục */
            case 'list_danhmuc':
                //list danh muc
                $danhmuc = select_danhmuc();
                include "./danhmuc/list.php";
                break;
            case 'add_danhmuc':
                //them danh muc
                if(isset($_POST['ten'])){
                    $ten = $_POST['ten'];
                    //validate
                    if(empty($ten)){
                        $error = "Tên danh mục không được để trống";
                    }elseif(strlen($ten)>50){
                        $error = "Tên danh mục không được quá 50 ký tự";
                    }elseif(check_ten_danhmuc($ten)){
                        $error = "Tên danh mục đã tồn tại";
                    }elseif(strlen($ten)<=5){
                        $error = "Tên danh mục phải có ít nhất hơn 5 ký tự";
                    }else{
                        //insert
                        $result = insert_danhmuc($ten);
                        if(!$result){                        
                            $success = "Thêm danh mục thành công ";
                        }else{
                            $error = "Thêm danh mục thất bại có lỗi xảy ra";
                        }
                    };

                };

                include "./danhmuc/add.php";
                break;
            case 'xoa_danhmuc':
                //xoa danh muc
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delete_danhmuc($id);
                    echo "<script>window.location.href='index.php?act=list_danhmuc';</script>";
                }
                break;
            case 'edit_danhmuc':
                //edit danh muc
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $danhmuc = select_one_danhmuc($id);
                }
                include "./danhmuc/edit.php";
                break;
            case 'update_danhmuc':
                //cap nhat danh muc
                if (isset($_POST['id'],$_POST['ten'])) {
                    $id = $_POST['id'];
                    $ten = $_POST['ten'];
                    //validate
                    if(empty($ten)){
                        $error = "Tên danh mục không được để trống";
                    }elseif(strlen($ten)>50){
                        $error = "Tên danh mục không được quá 50 ký tự";
                    }elseif(strlen($ten)<=5){
                        $error = "Tên danh mục phải có ít nhất hơn 5 ký tự";
                    }else{
                        //update
                        $result = update_danhmuc($id,$ten);
                        if(!$result){                        
                            $success = "Cập nhật danh mục thành công ";
                        }else{
                            $error = "Cập nhật danh mục thất bại có lỗi xảy ra";
                        }
                    }
                }
                include "./danhmuc/list.php";
                break;
                                         /* Controller sản phẩm */
            case 'add_sp':
                $danhmuc = select_danhmuc();
                if (isset($_POST['them_sp'])) {
                    $ten_sanpham = $_POST['ten_sanpham'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dirt = "../upload/";
                    $target_file = $target_dirt . basename($_FILES['hinh']['name']);
                   move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file);
                    //validate
                    if(empty($ten_sanpham)){
                        $error = "Tên sản phẩm không được để trống";
                    }elseif(empty($gia)){
                        $error = "Giá sản phẩm không được để trống";
                    }elseif(empty($mota)){
                        $error = "Mô tả sản phẩm không được để trống";
                    }elseif(empty($id_danhmuc)){
                        $error = "Danh mục sản phẩm không được để trống";
                    }elseif(empty($hinh)){
                        $error = "Hình sản phẩm không được để trống";
                    }else{
                        //insert
                        $result = insert_sanpham($ten_sanpham,$gia,$hinh,$mota,$id_danhmuc);
                        if(!$result){                        
                            $success = "Thêm sản phẩm thành công ";
                        }else{
                            $error = "Thêm sản phẩm thất bại có lỗi xảy ra";
                        }
                    };
                    
                }
                
                include "./sanpham/add.php";
                break;
            case 'list_sp':
                //list san pham
                $sanpham = select_sanpham();
                include "./sanpham/list.php";
                break;
            case 'edit_sp':
                //edit san pham
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sanpham = select_one_sanpham($id);
                }
                $danhmuc = select_danhmuc();
                include "./sanpham/edit.php";
                break;
            case 'update_sanpham':
                 //update san pham
                 if (isset($_POST['update'])) {
                    $id = $_POST['id'];
                    $ten_sanpham = $_POST['ten_sanpham'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dirt = "../upload/";
                    $target_file = $target_dirt . basename($_FILES['hinh']['name']);
                     move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file);
                     update_sanpham($id,$ten_sanpham,$gia,$hinh,$mota,$id_danhmuc);
                     echo "<script>window.location.href='index.php?act=list_sp';</script>";
                 }
                break;
            case 'xoa_sp':
                    //xoa danh muc
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        delete_sanpham($id);
                        echo "<script>window.location.href='index.php?act=list_sp';</script>";
                    }
                break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
