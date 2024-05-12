<header class="header">
    <?php
        if (isset($_GET['action']) && $_GET['action']){
            header('Location:index.php');
            Session::set('user_login',false);
        }
    ?>
    <ul>
        <li>
        <div class="clearfix">
            <nav class="navigation">
                <ul class="nav">
                    <li class="nav-list">
                        <!-- <a href="#">NAM</a> -->
                        <a href="timkiemnangcao.php">SẢN PHẨM</a>
                        <div class="header_menu-list-in-item">
                            <div class="header_menu-list">
                                <div class="row">   
                                    <div class="col c-5">
                                        <div class="header_menu-list-part">
                                            <h6>Thương hiệu</h6>
                                            <ul class="row header_menu-list-brand ">
                                                <?php
                                                    $brand = new brand();
                                                    $get_brand = $brand->show_brand();
                                                    if ($get_brand) {
                                                        while ($result = $get_brand->fetch_assoc()) {
                                                ?>
                                                <li class="col c-4">
                                                    <a href="listProduct.php?idBrand=<?php echo $result['brandId'] ?>&type=0"><?php echo $result['brandName'] ?></a>
                                                </li>
                                                    <?php
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col c-7">
                                        <div class="row header_menu-list-part">
                                            <ul>
                                             
                                                <li>
                                                    
                                                    <a href="listProduct.php?catId=40"><h6>Áo</h6></a>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_ao();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href="listProduct.php?idType=<?php echo $result['typeProductID']; ?>&type=0"><?php echo $result['typeProductName']; ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                    <!-- <ul class="row header_menu-list-brand ">                                              
                                                      
                                                        <li class="col c-12">
                                                            
                                                            <a href="listProduct.php?catId=40">Áo</a>
                                                        </li>
                                                         
                                                    </ul> -->
                                                </li>
                                                <li>
                                                    <!-- <h6>Áo khoác</h6> -->
                                                    <a href="listProduct.php?catId=41"><h6>Áo Khoác</h6></a>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_aokhoac();
                                                            // $get_tpd = $tpd->show_type_product_aokhoac();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href="listProduct.php?idType=<?php echo $result['typeProductID']; ?>&type=0"><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <!-- <h6>QUẦN & JUMPSUIT</h6> -->
                                                    <a href="listProduct.php?catId=42"><h6>QUẦN & JUMPSUIT</h6></a>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_quan();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href="listProduct.php?idType=<?php echo $result['typeProductID']; ?>&type=0"><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <!-- <h6>CHÂN VÁY</h6> -->
                                                    <a href="listProduct.php?catId=43"><h6>CHÂN VÁY</h6></a>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_chanvay();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href="listProduct.php?idType=<?php echo $result['typeProductID']; ?>&type=0"><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <!-- <h6>ĐẦM</h6> -->
                                                    <a href="listProduct.php?catId=44"><h6>ĐẦM</h6></a>
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_dam();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href="listProduct.php?idType=<?php echo $result['typeProductID']; ?>&type=0"><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <!-- <h6>ĐỒ LÓT</h6> -->
                                                    <ul class="row header_menu-list-brand ">                                              
                                                        <?php
                                                            $tpd = new typeProduct();
                                                            $get_tpd = $tpd->show_type_product_DOLOT();
                                                            if ($get_tpd) {
                                                                while ($result = $get_tpd->fetch_assoc()) {
                                                        ?>
                                                        <li class="col c-12">
                                                            <a href="listProduct.php?idType=<?php echo $result['typeProductID']; ?>&type=0"><?php echo $result['typeProductName'] ?></a>
                                                        </li>
                                                            <?php
                                                                }
                                                            }
                                                        ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </li>    
                </ul>
             </nav>
        </div>
        </li>
        <div class="header__logo">
        <li>
                <div class="logo">
                 <a href="index.php">
                    <img src="./assets/img/logo_shop.png" alt="" style="margin-top: 3px; margin-left: 270px;">
                 </a>
                </div>
            </li>
        </div>
        <div class="searchs">
        <ul>
                <!-- thanh tìm kiếm -->
                <li class="header__search">
                    <form action="timkiemnangcao.php" method="GET">
                        <?php
                            if(isset($_GET['search']) && $_GET['search']){
                        ?>
                        <input type="text" name="search" class="header__search-input" value="<?=$_GET['search']?>" placeholder="">
                        <?php
                            }else{
                        ?>
                        <input type="text" name="search" class="header__search-input" placeholder="Tìm kiếm sản phẩm...">

                        <?php
                            }
                        ?>
                        <button type="submit" name="submit" class="ti-search"></button>
                    </form>
                </li>
                <li class="header__cart-wrap1">
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                                <!-- <i class="header__cart-icon ti-shopping-cart-full"></i> -->
                                <a href="giohang.php"><i class="header__cart-icon ti-shopping-cart-full"></i></a>
                                <span class="header_cart_quantity">
                                    <?php 

                                        $check_cart = $cat->checkCart(Session::get('user_id'));
                                        if ($check_cart && Session::get('user_login')) {
                                            $sum = Session::get("sum");
                                            echo $sum;
                                        } else if ($check_cart== false && Session::get('user_login')){
                                            echo '0';
                                        }
                                       if( Session::get('user_login')==false){
                                            echo '0';
                                        }
                                    ?>
                                </span>
                        </div>
                    
                    </div>
                </li>
                <?php
                    
                ?>
                <?php
                    $login_Check = Session::get('user_login');
                    if ($login_Check) {
                ?>
                <li  class="nav-list">
                    <div class="nav-account">
                        <!-- <div class="nav-account-img ti-headphone"></div>     -->
                        <div class="nav-account-img ti-user"></div>
                        <ul class="nav-user_menu">
                            <li class="nav-user_menu-item">
                                <a style="color: #ffffff;  font-size: 14px; font-weight: 600; text-decoration: none; font-family: var(--font-family-monospace);
                                " href="account.php">Tài khoản của tôi</a>
                            </li>
                            <li class="nav-user_menu-item">
                                <a style="color: #ffffff;  font-size: 14px; font-weight: 600; text-decoration: none; font-family: var(--font-family-monospace);
                                " href="doimatkhau.php">Đổi mật khẩu</a>
                            </li>
                           
                            <li class="nav-user_menu-item">
                                <a style="color: #ffffff;  font-size: 14px; font-weight: 600; text-decoration: none; font-family: var(--font-family-monospace);
                                " href="donhang.php">Quản lí đơn hàng</a>
                            </li>
                            <li class="nav-user_menu-item">
                                <input type="button" name="logout"><a style="color: #ffffff;  font-size: 14px; font-weight: 600; text-decoration: none; font-family: var(--font-family-monospace);
                                " href="?action=logout">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php
                    }
                    else {
                ?>
                    <a href="./login.php" style="text-decoration:none; color:black;">Đăng nhập</a>
                <?php
                    } 
                ?>
            </ul>
        </div>
            
    
    </ul>
</header>