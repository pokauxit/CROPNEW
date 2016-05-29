<?php

namespace System\Template;
use App\Modules\ServiceData\Controllers\ServiceData as Service;
class Template {

    public function open() {
        ?><!DOCTYPE html>
        <html>
            <head>
                <!--Import Google Icon Font-->
                <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <!--Import materialize.css-->
                <link type="text/css" rel="stylesheet" href="Assets/css/materialize.min.css" media="screen,projection"/>
                <link type="text/css" rel="stylesheet" href="Assets/css/web.css" media="screen,projection"/>
                <link href="Assets/css/icon.css" rel="stylesheet">
                <!--Let browser know website is optimized for mobile-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            </head>

            <body>


                <!-- Start Header section -->
                <header id="header" class="navbar-fixed">
                    <nav class="navbar-fixed">
                        <div class="navbar-header  z-index-5" style="float: left;padding-left:5%;">
                            <a class="navbar-brand" href="?">

                                <img src="Assets/images/logo.png">
                                <div class="brand-name">

                                    Put you project name here.<br>

                                </div>
                            </a>
                        </div>


                    </nav>


                </header>
                <!-- End Header section -->


                <?php
            }

            public function openMain($active) {
                 
                $service = new Service();
                ?>
                <div class="container" id="container-center">

                    <div class="card">
                        <?php $rc =  $service->getCropByID(ID);?>
                       <?php $service->showAgeiculturist($rc->argiculturist_id);?>
                    </div>


                    <div class="card">
                         <?php $service->showPlant($rc->plant_id)?>
                    </div>


                    <div class="card">
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs maincrop">
                                    <li class="tab col s3"><a class="<?php if($active == "CropApplication"){echo "active";}?>" href="?CropApplication//<?php echo ID?>" onclick="window.location.href=this.href;" >ขั้นตอนการปลูก</a></li>
                                    <li class="tab  col s3"><a  href="#" onclick="window.location.href=this.href;">การเก็บเกี่ยว</a></li>
                                    <li class="tab col s3 "><a href="#">ผลผลิต</a></li>
                                    <li class="tab col s3"><a href="#">พื้นที่เพาะปลูก</a></li>
                                    <li class="tab col s3"><a class="<?php if($active == "CropApplyFertilizer"){echo "active";}?>" href="?CropApplyFertilizer//<?php echo ID?>" onclick="window.location.href=this.href;">การให้ปุ๋ย</a></li>
                                    <li class="tab col s3"><a class="<?php if($active == "CropStandard"){echo "active";}?>" href="?CropStandard//<?php echo ID?>" onclick="window.location.href=this.href;">มาตฐาน</a></li>
 
                                    <li class="tab col s3"><a href="#">ปัญหาและการควบคุม</a></li> 
                                </ul>
                            </div>
                            <div id="test1" class="col s12" style="">

                            <p><br></p>
                            <div class="center" style="text-align: center;padding: 20px;" >
                                <?php
                            }

               public function closeMain() {
                                ?> </div><p><br></p>
                               </div>

                            </div>

                        </div> 

                    </div><?php
                    }

                    public function close() {
                                ?>


                    <footer class="page-footer" id="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col l4 s12">
                                    <h5 class="white-text">This is project name</h5>
                                    <p class="grey-text text-lighten-4">

                                        มีท่อนต่างๆ ของ Lorem Ipsum ให้หยิบมาใช้งานได้มากมาย แต่ส่วนใหญ่แล้วจะถูกนำไปปรับให้เป็นรูปแบบอื่นๆ
                                        <br> 222 ม.11 ต.ขามใหญ่ อ.เมือง จ.อุบลราชธานี 34190 <br> โทร.045-045-045
                                        โทรสาร 045-045-045
                                    </p>
                                </div>
                                <div class="col l4 s12">
                                    <h5 class="white-text">เครือข่าย Website</h5>
                                    <div class="row">
                                        <div class="col  s4"><a href="javascript:;" target="_blank"><img src="Assets/images/partner.png"
                                                                                                         style="width:100%;"></a></div>
                                        <div class="col  s4"><a href="javascript:;" target="_blank"><img src="Assets/images/partner.png"
                                                                                                         style="width:100%;"></a></div>
                                        <div class="col  s4"><a href="javascript:;" target="_blank"><img src="Assets/images/partner.png"
                                                                                                         style="width:100%;"></a></div>
                                    </div>

                                </div>
                                <div class="col l4 s12 center">
                                    <h5 class="white-text">ติดต่อเรา</h5>
                                    <a class="btn-floating btn-large waves-effect  waves-light button   indigo darken-4 "
                                       href="javascript:;" target="_blank" style="margin: 5px;"><i class="fa fa-lg fa-facebook"></i></a>
                                    <a class="btn-floating btn-large waves-effect  waves-light button   red accent-4" href="javascript:;"
                                       target="_blank" style="margin: 5px;"><i class="fa fa-lg fa-google-plus"></i></a>
                                    <a class="btn-floating btn-large waves-effect  waves-light button   blue" href="javascript:;"
                                       target="_blank" style="margin: 5px;"><i class="fa fa-lg fa-twitter"></i></a>
                                    <p></p>
                                    <a class="btn-floating btn-large waves-effect  waves-light button red accent-4  " href="javascript:;"
                                       target="_blank" style="margin: 5px;"><i class="fa fa-lg fa-youtube"></i></a>
                                    <a class="btn-floating btn-large waves-effect   waves-light button    amber darken-4"
                                       href="javascript:;" target="_blank" style="margin: 5px;"><i class="material-icons">email</i></a>
                                    <a class="btn-floating btn-large waves-effect  waves-light button   yellow" href="javascript:;"
                                       target="_blank" style="margin: 5px;"><i class="material-icons">phone</i></a>


                                    <br>
                                    <div class="g-follow" data-annotation="bubble" data-height="24"
                                         data-href="https://plus.google.com/108619793845925798422" data-rel="publisher"></div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-copyright">
                            <div class="container">
                                ©2016 สงวนลิขสิทธิ์, xxx abc crop.


                                <a class="btn-floating btn waves-effect waves-light  dropdown-button green right" href="#"
                                   style="margin-top:5px;" data-activates="dropdown-bottom2"><i class="material-icons">build</i></a>
                                <ul id="dropdown-bottom2" class="dropdown-content right white  ">
                                    <li><a href="javascript:;" class="green-text">Admin</a></li>
                                    <li><a href="javascript:;" class="green-text">Support</a></li>


                                </ul>
                                <!-- Dropdown Structure -->


                                <span class="white-text text-lighten-4 right " style="padding-right:10px;">ตั้งค่า</span>


                                <a class="btn   white-text  green waves-effect waves-light text-lighten-4 right "
                                   style="margin:10px;padding-left: 15px;padding-right: 15px;" href="javascript:void();">ผู้เข้าชม :
                                    1234</a>


                            </div>
                        </div>
                    </footer>

                    <!--Import jQuery before materialize.js-->
                    <script type="text/javascript" src="Assets/js/jquery-2.2.3.min.js"></script>
                    <script type="text/javascript" src="Assets/js/materialize.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                            $('.modal-trigger').leanModal();
                            $('select').material_select('destroy');
                            $('select').material_select();
                           

                            function getHeight() {
                                var e = window,
                                        a = 'inner';
                                if (!('innerWidth' in window)) {
                                    a = 'client';
                                    e = document.documentElement || document.body;
                                }
                                return e[a + 'Height'];
                            }

                            Min_Height();
                            $(window).resize(function() {
                                Min_Height();
                            });

                            function Min_Height() {
                                var center_height = 0, head = $("#header").outerHeight(true), foot = $("#footer").outerHeight(true);
                                center_height = getHeight() - (head + foot + 9);
                                $("#container-center").css('min-height', center_height);
                            }
                        });
                    </script>
            </body>
        </html>
        <?php
    }

}
?>