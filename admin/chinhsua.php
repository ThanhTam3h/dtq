    <?php
    include '.././classses/user.php';
    $user = new user();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="assets/css/grid.css">
        <link rel="stylesheet" href="../assets/css/account.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="shortcut icon" href="assets/img/favicon_created_by_logaster.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thông tin tài khoản </title>
    </head>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
        $idUser = Session::get('user_id');
        $update_user = $user->update_user($idUser, $_POST);
    }
    ?>


    <body>
    <?php include './inc/sidebar.php' ?>
    <div class="main-content">
            <?php include './inc/header.php' ?>
        <div class="content">
        
            <div class="grid wide" style="border-top: 1px solid #ccc; padding-top:3rem;">
                <div class="account-body">
                    <div class="row">
                        
                        <div class="col m-12 l-13">
                            <div class="account-me">
                                <div class="row">
                                    <div class="col l-13 m-12 underline">
                                        <div class="account-tt">
                                            <span class="account-title">Thông tin cá nhân</span>
                                        </div>
                                        <?php
                                        $userId = Session::get('user_id');
                                        $infor_user = $user->show_User($userId);
                                        while ($result_infor_user = $infor_user->fetch_assoc()) {
                                        ?>
                                            <form action="" method="post">
                                                <div class="information">
                                                    <div class="information-name">
                                                        <label>Họ & Tên</label>
                                                        <input type="text" name="name" value="<?php echo $result_infor_user['name'] ?>" >
                                                    </div>
                                                    <div class="information-name">
                                                        <label>Số điện thoại</label>
                                                        <input type="text" name="phone" value="<?php echo $result_infor_user['sdt'] ?>" >
                                                    </div> 
                                                    <div class="information-name">
                                                        <label>Email</label>
                                                        <input type="text" name="email" value="<?php echo $result_infor_user['email'] ?>" >
                                                    </div>
                                                    <div class="information-name">
                                                        <label>Ngày sinh</label>
                                                        <input type="text" name="date" value="<?php echo $result_infor_user['ngaySinh'] ?>" >
                                                    </div>
                                                    <div class="information-name">
                                                        <div class="auth__form-group col c-6" style="margin-left: -11px;">
                                                            <div class="auth__form-group-title">
                                                                <span>Số nhà và tên đường</span>
                                                        
                                                            </div>
                                                            <input type="text" name="street" value="<?php echo $result_infor_user['street'] ?>">
                                                        </div>
                                                        <div class="auth__form-group col c-6">
                                                            <div class="auth__form-group-title">
                                                                <span>Thành phố</span>
                                                            </div>
                                                            <select name="city" id="city" class="auth__form-input" style="width: 24.2rem; padding: 0.6rem; color: black;" >
                                                            <?php
                                                                foreach ($cities as $city) {
                                                                    echo "<option value='{$city['name']}'>" . htmlspecialchars($city['name']) . "</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="information-name">
                                                        <div class="auth__form-group col c-6">
                                                            <div class="auth__form-group-title">
                                                                <span>Quận huyện</span>
                                                            </div>
                                                            <select name="district" id="district" class="auth__form-input" style="width: 24.2rem; padding: 0.6rem; color: black; margin-left: -11px;">     
                                                            <?php
                                                                foreach ($wardsByDistrict as $district) {
                                                                    echo "<option value='{$district['name']}'>" . htmlspecialchars($district['name']) . "</option>";
                                                                }
                                                                ?>                                                   
                                                            </select>                                                       
                                                        </div>
                                                        <div class="auth__form-group col c-6">
                                                            <div class="auth__form-group-title">
                                                                <span>Phường/ Xã</span>
                                                            </div>
                                                            <select name="ward" id="ward" class="auth__form-input" style="width: 24.2rem; padding: 0.6rem; color: black;" >
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="information-sex">
                                                        <label>Giới tính</label>
                                                        <?php if ($result_infor_user['gioiTinh'] == "Nam" || $result_infor_user['gioiTinh'] == "nam") { ?>
                                                            <input type="radio" checked="true" name="sex" id="Boy" value="Nam">
                                                            <label for="Nam">Nam</label>
                                                            <input type="radio" name="sex" id="Girl" value="Nữ">
                                                            <label for="Nu">Nữ</label>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <input type="radio" name="sex" id="Boy" value="Nam">
                                                            <label for="Nam">Nam</label>
                                                            <input type="radio" checked="true" name="sex" id="Girl" value="Nữ">
                                                            <label for="Nu">Nữ</label>
                                                        <?php } ?>
                                                    </div>
                                                    <div style="text-align: center;margin: 15px;">
                                                        <?php
                                                        if (isset($update_user)) {
                                                            echo $update_user;
                                                        }
                                                        ?>
                                                    </div>

                                                    <div class="infotmation-save">
                                                        <input type="submit" name="save" value="Lưu thay đổi">
                                                    </div>
                                                <?php } ?>
                                            </form>                                        
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
           const citySelect = document.getElementById('city');
            const districtSelect = document.getElementById('district');
            const wardSelect = document.getElementById('ward');

            const cities = {
                'Hồ Chí Minh': ['Quận 1', 'Quận 2', 'Quận 7'],
                'Đà Nẵng': ['Quận Sơn Trà', 'Quận Cẩm Lệ'],
            };

            const wardsByDistrict = {
                'Quận 1': ['Phường 4', 'Phường Bến Nghé', 'Phường Cô Giang'],
                'Quận 2': ['Phường 7', 'Phường Thảo Điền', 'Phường An Phú'],
                'Quận 7': ['Phường Phú Mỹ', 'Phường Tân Phú', 'Phường Tân Quy'],
                'Quận Sơn Trà' : ['Phường Phước Mỹ', 'Phường Thọ Quang'],
                'Quận Cẩm Lệ' : ['Phường Hòa An', 'Phường Hòa Xuân']
            };

            // Tạo các option cho dropdown thành phố
            // Tạo các option cho dropdown thành phố
            Object.keys(cities).forEach(function(city) {
                const optionElem = document.createElement('option');
                optionElem.textContent = city;
                optionElem.value = city;
                citySelect.appendChild(optionElem);
            });

            // Xử lý sự kiện khi chọn thành phố
            citySelect.addEventListener("change", function() {
                const selectedCity = this.value;
                const districts = cities[selectedCity];
                populateDropdown(districtSelect, districts);
                populateWardOptions(selectedCity); // Tự động điền các tùy chọn cho phường
            });

            // Xử lý sự kiện khi chọn quận
            districtSelect.addEventListener('change', function() {
                const selectedDistrict = this.value;
                if (selectedDistrict) {
                    const wards = wardsByDistrict[selectedDistrict];
                    populateDropdown(wardSelect, wards);
                } else {
                    clearDropdown(wardSelect);
                }
            });

            // Hàm để điền các tùy chọn vào dropdown phường
            function populateDropdown(select, options) {
                select.innerHTML = '';
                options.forEach(function(option) {
                    const optionElem = document.createElement('option');
                    optionElem.textContent = option;
                    optionElem.value = option;
                    select.appendChild(optionElem);
                });
            }

            // Hàm để xóa tất cả các tùy chọn trong dropdown
            function clearDropdown(select) {
                // Lưu trữ các tùy chọn mặc định
                const defaultOption = select.options[0];
                select.innerHTML = '';
                // Thêm lại các tùy chọn mặc định
                select.appendChild(defaultOption);
            }

            // Populate wards based on the selected city
            function populateWardOptions(selectedCity) {
                const districts = cities[selectedCity];
                const wards = wardsByDistrict[districts[0]];
                populateDropdown(wardSelect, wards);
            }
        });

    </script>
    </body>

    </html>