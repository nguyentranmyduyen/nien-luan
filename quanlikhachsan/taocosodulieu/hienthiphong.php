<div id="hienthinhanvien">
            <h3>Thông tin nhân viên </h3>
            <table  width="100%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>MA_PHONG2</td>
                    <td>HINH_ANH </td>
                    <td>NOI_DUNG </td>
                    <td>SO_PHONG</td>
                    <td>SO_LUONG</td>
                    <td>DA_DAT</td>
                    <td>Sửa</td>
                    <td>Xóa </td>
                    
                </tr>
                     <?php
                     include 'connect.php';
                $sql= "SELECT * FROM phong";
                $result= mysqli_query($conn, $sql);
               if (mysqli_num_rows($result)>0){
                    while ($row= mysqli_fetch_array($result)){
                        $MA_PHONG2 = $row ['MA_PHONG2'] ;
                        $HINH_ANH = $row ['HINH_ANH'] ;
                        $NOI_DUNG = $row ['NOI_DUNG'];
                        $SO_PHONG = $row ['SO_PHONG'];
                        $SO_LUONG = $row ['SO_LUONG'];
                        $DA_DAT =$row ['DA_DAT'];
                        echo "<tr>";
                            echo "<td>$MA_PHONG2</td>";
                         echo '<td><img height=100px width=100px src="data:image/jpeg;base64,'.base64_encode( $row['HINH_ANH'] ).'"/></td>';

                            echo "<td>$NOI_DUNG</td>";
                            echo "<td>$SO_PHONG</td>";
                            echo "<td>$SO_LUONG</td>";
                            echo "<td>$DA_DAT</td>";
                            echo "<td><a href='suanhanvien.php?MA_NV2=".$row['MA_NV2']."'>Sửa</a></td>";
                            echo "<td><a href='xoanhanvien.php?MA_NV2=".$row['MA_NV2']."'>Xóa</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
             
                        </table>
        </div>
