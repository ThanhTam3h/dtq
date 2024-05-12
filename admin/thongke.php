<?php
 include '../classses/user.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <link rel="stylesheet" href="assets/css/thongtin.css">
    <title>Thống kê</title>
</head>

<body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">
    <?php include './inc/header.php' ?>
            <main>
                <h2 class="dash-title">Thống kê</h2>
                <section class="recent">
                    <div class="activity-grid">
                     <div class="activity-card">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Mã KH</th>
                                            <th>Tên khách hàng</th>
                                            <th>SĐT</th>
                                            <th>Địa chỉ</th>
                                            <th>Ngày sinh</th>
                                            <th>Giới tính</th>
                                            <th>Tổng số tiền đã mua</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $user = new user();
                                    $show_User = $user->showthongkeAdmin();
                                    while ($result = $show_User->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $result['userId'] ?></td>
                                                <td><?php echo $result['name'] ?></td>
                                                <td><?php echo $result['sdt'] ?></td>
                                                <td><?php echo $result['diaChi'] ?></td>
                                                <td><?php echo $result['ngaySinh'] ?></td>
                                                <td><?php echo $result['gioiTinh'] ?></td>
                                                <td><?php echo number_format($result['sumTT'], 0, ',', '.') . "" . "đ" ?></td>
                                                
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
               

            </main>
    </div>
</body>

</html>