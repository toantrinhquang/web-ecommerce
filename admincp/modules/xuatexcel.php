
<?php
    session_start();
error_reporting(0);

$conn = mysqli_connect("localhost","root","","webgiay");
$sql="select * from tbl_sanpham";

$kq=mysqli_query($conn,$sql);

$output='';
if (isset($_POST["export_excel"])) {
    if (mysqli_num_rows($kq)) {
        $output.='<table class="table" bordered="1">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá sp</th>
                <th>Số lượng</th>
                <th>Mã sp</th>
                <th>Tóm tắt</th>
            </tr>';
        while($hang=mysqli_fetch_object($kq))
        {
            $output.='
            <tr>
                <td>'.$hang->id_sanpham.'</td>
                <td>'.$hang->tensanpham.'</td>
                <td>'.$hang->giasp.'</td>
                <td>'.$hang->soluong.'</td>
                <td>'.$hang->masp.'</td>
                <td>'.$hang->tomtat.'</td>
            </tr>
            ';
        }
        $output.='</table>';
        header("Content-Type:application/xls;charset='utf-8'");
        header("Content-Disposition: attachment; filename=download.xls");
        echo $output;
    }

}


mysqli_close($conn);
?>