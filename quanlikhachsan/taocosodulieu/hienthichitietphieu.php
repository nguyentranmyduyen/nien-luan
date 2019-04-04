     <div id="hienthikhachhang">
            <h3>Thông tin chi tiết phòng </h3>
            <table  width="100%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                  
                    <td>Hình ảnh</td>
                    <td>Nội dung </td>
                    <td></td>
                    <td>Ngày tháng năm sinh</td>
                    <td>Đại chỉ</td>
                    <td>Số điện thoại</td>
                    <td>Sửa</td>
                    <td>Xóa </td>
                    
                </tr>
                     <?php
                     include 'connect.php';
                $sql= "SELECT * FROM khachhang";
                $result= mysqli_query($conn, $sql);
               if (mysqli_num_rows($result)>0){
                    while ($row= mysqli_fetch_array($result)){
                        $MA_KH2 = $row ['MA_KH2'] ;
                       $HINH_ANH=$row['HINH_ANH'];
                        $HOTEN_KH = $row ['HOTEN_KH'] ;
                        if ($row ['GIOI_TINH']  == 1 ){
                            $GIOI_TINH = "Nam";
                        }else {
                            $GIOI_TINH = "Nữ";
                        }
                          
                        $NGAY_SINH = $row ['NGAY_SINH'];
                        $DIA_CHI = $row ['DIA_CHI'];
                        $SO_DT = $row ['SO_DT'];
                        echo "<tr>";
                        echo "<td>$MA_KH2</td>";
                            echo '<td><img height=50px width=50px src="data:image/jpeg;base64,'.base64_encode( $row['HINH_ANH'] ).'"/></td>';
                             echo "<td>$HOTEN_KH</td>";
                             echo "<td>$GIOI_TINH</td>";
                             echo "<td>$NGAY_SINH</td>";
                             echo "<td>$DIA_CHI</td>";
                             echo "<td>$SO_DT</td>";
                            echo "<td><a href='suakhachhang.php?MA_KH2=".$row['MA_KH2']."'>Sửa</a></td>";
                            echo "<td><a href='xoakhachhang.php?MA_KH2=".$row['MA_KH2']."'>Xóa</a></td>";
                            echo "</tr>";
                       
                        

                    }
                }
                ?>
               
                        </table>
        </div>