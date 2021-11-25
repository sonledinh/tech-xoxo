<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XoxoBook</title>
    <!--link css-->
    <link rel="stylesheet" type="text/css" title="" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" title="" href="css/lib/slick.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/lib/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" title="" href="css/lib/jquery.mmenu.all.css">
    <link rel="stylesheet" type="text/css" title="" href="css/style.css">

    <script type="text/javascript" src="js/lib/jquery.min.js"></script> 
</head>
<body>  
    <header>
        <div class="header-pc">
            <div class="head-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="social">
                                <ul>
                                    <li><a href=""><img src="images/head-1.png" class="img-fluid" alt=""></a></li>
                                    <li><a href=""><img src="images/head-2.png" class="img-fluid" alt=""></a></li>
                                    <li><a href=""><img src="images/head-3.png" class="img-fluid" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="head-top-right">
                                <ul>
                                    <li><a href=""><img src="images/head-4.png" class="img-fluid" alt=""><span>+84 9416 868</span></a></li>
                                    <li><a href=""><img src="images/head-5.png" class="img-fluid" alt=""><span>xôxooxo@gmail.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <div class="container">
                    <div class="contnt-head">
                        <div class="left">
                            <ul>
                                <li>
                                    <div class="logo"><a href="index.php"><img src="images/logo.png" class="img-fluid" alt=""></a></div>
                                </li>
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="about.php">Về chúng tôi</a></li>
                                <li>
                                    <a href="service.php">Dịch vụ & sản phẩm <img src="images/ar-menu.png" class="img-fluid" alt=""></a>
                                    <div class="submenu">
                                        <ul>
                                            <li><a href="">Dịch vụ của Xoxo</a></li>
                                            <li><a href="">Sản phẩm của Xoxo</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="news.php">Tin tức <img src="images/ar-menu.png" class="img-fluid" alt=""></a>
                                    <div class="submenu">
                                        <ul>
                                            <li><a href="">Tin tức nhà Xoxo</a></li>
                                            <li><a href="">Sự kiện nhà Xoxo</a></li>
                                            <li><a href="">du an cong dong</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="">Thư viện</a></li>
                                <li><a href="contact.php">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="right"> 
                            <ul>
                                <li><a href="" class="notice-ring"><img src="images/ring.png" class="img-fluid" alt=""></a></li>
                                <li class="head-user">
                                    <img src="images/head-6.png" class="img-fluid" alt="">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-user-regis">Đăng ký</a>
                                    <span>/</span>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-user-login">Đăng nhập</a>
                                </li>
                                <li><a href="vuonketnoi.php" class="btn-head">Vườn kết nối</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile" style="display: none;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="btn-menu"><a href="#menu"><i class="fa fa-bars"></i></a></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 text-center">
                        <div class="logo"><a href="index.php"><img src="images/logo.png" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3 text-right">
                        <div class="user-menu-mob">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-user-login"><i class="fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="about.php">Về chúng tôi</a></li>
                    <li>
                        <a href="service.php">Dịch vụ & sản phẩm <img src="images/ar-menu.png" class="img-fluid" alt=""></a>
                        <ul>
                            <li><a href="">Dịch vụ của Xoxo</a></li>
                            <li><a href="">Sản phẩm của Xoxo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="news.php">Tin tức <img src="images/ar-menu.png" class="img-fluid" alt=""></a>
                        <ul>
                            <li><a href="">Tin tức nhà Xoxo</a></li>
                            <li><a href="">Sự kiện nhà Xoxo</a></li>
                            <li><a href="">du an cong dong</a></li>
                        </ul>
                    </li>
                    <li><a href="">Thư viện</a></li>
                    <li><a href="contact.php">Liên hệ</a></li>
                    <li><a href="vuonketnoi.php">Vườn kết nối</a></li>
                </ul>
            </nav>
        </div>

        <div class="box-modal-user">
            <div class="modal fade modal-srv" id="modal-user-login">
                <div class="modal-dialog dialog-user">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-popup-user">
                                <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" class="img-fluid" alt=""></button>
                                <h3 class="text-center">Đăng nhập</h3>
                                <div class="form-modal-user">
                                    <div class="item">
                                        <label>Email</label>
                                        <input type="text" class="txt_field">
                                    </div>
                                    <div class="item">
                                        <label>Mật khẩu</label>
                                        <input type="password" class="txt_field">
                                    </div>
                                    <div class="item">
                                        <div class="fogot-acc text-right"><a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#modal-user-fogot">Quên mật khẩu</a></div>
                                    </div>
                                    <div class="item text-center">
                                        <input type="submit" value="Đăng nhập" class="btn_field">
                                    </div>
                                    <div class="item text-center">
                                        <p><span>Bạn chưa có tài khoản? </span><a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#modal-user-regis">Đăng ký tại đây</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-srv" id="modal-user-regis">
                <div class="modal-dialog dialog-user">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-popup-user">
                                <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" class="img-fluid" alt=""></button>
                                <h3 class="text-center">Đăng ký</h3>
                                <div class="form-modal-user">
                                    <div class="item">
                                        <label>Họ và tên</label>
                                        <input type="text" class="txt_field">
                                    </div>
                                    <div class="item">
                                        <label>Email</label>
                                        <input type="text" class="txt_field">
                                    </div>
                                    <div class="item">
                                        <label>Số điện thoại</label>
                                        <input type="text" class="txt_field">
                                    </div>
                                    <div class="item">
                                        <label>Mật khẩu</label>
                                        <input type="password" class="txt_field">
                                    </div>
                                    <div class="item">
                                        <label>Nhập lại mật khẩu</label>
                                        <input type="password" class="txt_field">
                                    </div>
                                    <div class="item text-center">
                                        <input type="submit" value="Đăng ký" class="btn_field">
                                    </div>
                                    <div class="item text-center">
                                        <p><span>Bạn đã có tài khoản? </span><a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#modal-user-login">Đăng nhập tại đây</a></p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="modal fade modal-srv" id="modal-user-fogot">
                <div class="modal-dialog dialog-user">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-popup-user">
                                <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" class="img-fluid" alt=""></button>
                                <h3 class="text-center">Quên mật khẩu</h3>
                                <div class="form-modal-user">
                                    <div class="item">
                                        <p class="txt_fogot">Vui lòng nhập lại Email đăng ký của bạn để cập nhật mật khẩu </p>
                                    </div>
                                    <div class="item">
                                        <label>Email</label>
                                        <input type="text" class="txt_field txt_mail_fogot" placeholder="Nhập email của bạn">
                                        <img src="images/icon-fogot.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="item d-flex justify-content-between align-items-center">
                                        <a href="javascript:void(0)" class="back_popup" data-dismiss="modal">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.170878 5.61415L6.00422 0.159759C6.232 -0.053259 6.60136 -0.053259 6.82918 0.159795C7.05695 0.372813 7.05695 0.718158 6.82914 0.931176L2.18945 5.26948C1.76676 5.66471 1.76676 6.3351 2.18943 6.73033L6.82918 11.0689C7.05695 11.2819 7.05695 11.6272 6.82914 11.8403C6.71527 11.9468 6.56598 12 6.41668 12C6.26739 12 6.11809 11.9468 6.00419 11.8402L0.170878 6.38553C0.0614444 6.28324 -4.16504e-07 6.14452 -4.2915e-07 5.99986C-4.41796e-07 5.85521 0.0614443 5.71644 0.170878 5.61415Z" fill="#666666"/>
                                            </svg>
                                            <span>Trở về</span>
                                        </a>
                                        <input type="submit" value="Tiếp tục" class="btn_field" style="min-width: 119px;height: 48px;"  data-dismiss="modal" data-toggle="modal" data-target="#modal-succ-fogot">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-srv" id="modal-succ-fogot">
                <div class="modal-dialog dialog-user">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-popup-user">
                                <button type="button" class="close" data-dismiss="modal"><img src="images/close.png" class="img-fluid" alt=""></button>
                                <h3 class="text-center">Yêu cầu đã được gửi</h3>
                                <div class="form-modal-user">
                                    <div class="item">
                                        <p class="txt_fogot">Yêu cầu cài đặt lại mật khẩu đã được gửi đến email bạn đăng ký. Vui lòng kiểm tra hộp thư <strong>(bao gồm cả thư mục spam)</strong> của bạn nhé!</p>
                                    </div>
                                    <div class="item d-flex justify-content-between align-items-center">
                                        <a href="javascript:void(0)" class="back_popup" data-dismiss="modal">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.170878 5.61415L6.00422 0.159759C6.232 -0.053259 6.60136 -0.053259 6.82918 0.159795C7.05695 0.372813 7.05695 0.718158 6.82914 0.931176L2.18945 5.26948C1.76676 5.66471 1.76676 6.3351 2.18943 6.73033L6.82918 11.0689C7.05695 11.2819 7.05695 11.6272 6.82914 11.8403C6.71527 11.9468 6.56598 12 6.41668 12C6.26739 12 6.11809 11.9468 6.00419 11.8402L0.170878 6.38553C0.0614444 6.28324 -4.16504e-07 6.14452 -4.2915e-07 5.99986C-4.41796e-07 5.85521 0.0614443 5.71644 0.170878 5.61415Z" fill="#666666"/>
                                            </svg>
                                            <span>Trở về</span>
                                        </a>
                                        <input type="submit" value="Gửi lại yêu cầu" class="btn_field" style="min-width: 151px;height: 48px;"  data-dismiss="modal">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </header>
 