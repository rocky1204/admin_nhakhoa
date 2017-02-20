<div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="." class="site_title"><i class="fa fa-paw"></i> <span>Quản trị</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Dr Vương</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ url("/") }}/trang-chu"><i class="fa fa-home"></i> Home </a>
                                    <!--<ul class="nav child_menu">
                                        <li><a href="index.html">Dashboard</a></li>
                                        <li><a href="index2.html">Dashboard2</a></li>
                                        <li><a href="index3.html">Dashboard3</a></li>
                                    </ul>-->
                                </li>
                                <li><a><i class="fa fa-sitemap"></i> Danh mục tin tức<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url("/") }}/danh-muc-tin">Danh sách</a></li>
                                        <li><a href="#">Thêm mới</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Tin tức <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url("/") }}/danh-sach-tin-tuc">Danh sách tin tức</a></li>
                                        <li><a href="media_gallery.html">Thêm mới tin</a></li>                                        
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-picture-o"></i> Hình ảnh <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#">Header</a></li>
                                        <li><a href="#">Logo</a></li>
                                        <li><a href="#">Banner chính</a></li>
                                        <li><a href="#">Banner phụ</a></li>
                                        <li><a href="#">Album ảnh</a></li>
                                        <li><a href="#">Upload hình</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-video-camera"></i> Video <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#">Danh sách Video</a></li>
                                        <li><a href="#">Thêm mới Video</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-question"></i>Thông tin <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#">Slogan</a></li>
                                        <li><a href="#">Lý do chọn Dr.Vương</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>USER</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-users"></i> Khách hàng <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#">Danh sách khách hàng</a></li>
                                        <li><a href="#">Thêm khách hàng mới</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user-circle-o"></i> User Admin <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#">Danh sách User</a></li>
                                        <li><a href="#">Thêm User</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Cài đặt">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Xem Website">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Đăng nhập với tài khoản khác">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                        </a>
                        <a href="{{ url("/") }}/dang-xuat" data-toggle="tooltip" data-placement="top" title="Đăng xuất">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
