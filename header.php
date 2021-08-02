<?php
include('start.php');
?>
    <header>
        <div id="body-header">

            <div class="barsMenuHeader fa fa-bars"></div>

            <div class="clickSliderHeader">
                <span style="width:10px;"></span>
                <span style="width:15px;"></span>
                <span style="width:8px;"></span>
            </div>

            <div class="logo">
                <a href="index.php"><img src="https://www.hoyolab.com/_nuxt/img/75577a9.png" alt="logo"></a>
            </div>

            <ul class="menu">
                <li><a href="index.php" class="B-wave"><i class="fa fa-home"></i> الرئيسية</a></li>
                <li><a href="list.php" class="B-wave"><i class="fa fa-book"></i> المانجا</a></li>
                <li><a href="teams.php" class="B-wave"><i class="fa fa-users"></i> الفرق</a></li>
                <li><a href="news.php" class="B-wave"><i class="fa fa-newspaper"></i> الأخبار</a></li>
            </ul>

            <ul class="ul-user">
                <li title="إعجاباتي" class="clickClassicDropdownHover">
                    <a><i class="fa fa-heart"></i></a>
                    <div class="classicDropdownHover position-absolute">
                        <div class="text-center">
                            <h6>شاهد قائمة إعجاباتك بالاعمال المطروحة</h6>
                            <img src="layout/img/icons/heart.svg" alt="" class="w-90 mt-2 mb-4">
                            <a href="#">سجل الآن</a>
                        </div>
                    </div>
                </li>

                <li title="مكتبتي" class="clickClassicDropdownHover">
                    <a><i class="fa fa-bookmark"></i></a>
                    <div class="classicDropdownHover position-absolute">
                        <div class="text-center">
                            <h6>انشئ مكتبتك الخاصة، و شاركها مع اصدقائك،</h6>
                            <img src="layout/img/icons/book.svg" alt="" class="w-75 mt-2 mb-4"><br>
                            <a href="#">سجل الآن</a>
                        </div>
                    </div>
                </li>

                <li data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <a style="padding:8px 18px;"  class="B-wave">
                        <img class="avatar" src="layout/img/avtar/avatarDefault.png" alt="avatar">
                    </a>
                </li>
            </ul>
        </div>

    </header>

    <aside id="ae-sidebar">
        <div class="h-100 pt-5">
            <div class="overflow-hidden clearfix h-100">
                <div class="position-relative overflow-hidden w-100 h-100">
                    <div class="position-relative w-auto h-100 overflow-auto" data-simplebar data-simplebar-auto-hide="false">

                        <?php
                        if($_SERVER['PHP_SELF'] == '/manga/list.php'){ ?>
                        <div class="sidebar-item">
                            <h5><i class="fas fa-fire"></i> النوع</h5>
                            <ul class="list-unstyled m-0 p-0">
                                <li><a href="#" class="active">مانجا</a></li>
                                <li><a href="#">مانهو</a></li>
                                <li><a href="#">منهاوا</a></li>
                                <li><a href="#">كويك</a></li>
                                <li><a href="#">أطفال</a></li>
                            </ul>
                        </div>

                        <hr>

                        <div class="sidebar-item">
                            <h5><i class="fas fa-clock"></i> السنة</h5>
                            <ul class="list-unstyled m-0 p-0">
                                <li><a href="#">قديم</a></li>
                                <li><a href="#">2000</a></li>
                                <li><a href="#">2001</a></li>
                                <li><a href="#">2002</a></li>
                                <li><a href="#">2003</a></li>
                                <li><a href="#">2004</a></li>
                                <li><a href="#">2005</a></li>
                                <li><a href="#">2006</a></li>
                                <li><a href="#">2007</a></li>
                                <li><a href="#">2008</a></li>
                                <li><a href="#">2009</a></li>
                                <li><a href="#">2010</a></li>
                                <li><a href="#">2011</a></li>
                                <li><a href="#">2012</a></li>
                                <li><a href="#">2013</a></li>
                                <li><a href="#">2014</a></li>
                                <li><a href="#">2015</a></li>
                                <li><a href="#">2016</a></li>
                                <li><a href="#">2017</a></li>
                                <li><a href="#">2018</a></li>
                                <li><a href="#">2019</a></li>
                                <li><a href="#">2020</a></li>
                                <li><a href="#" class="active">2021</a></li>
                            </ul>
                        </div>

                        <hr>

                        <div class="sidebar-item">
                            <h5><i class="fa fa-question"></i> الحالة</h5>
                            <ul class="list-unstyled m-0 p-0">
                                <li><a href="#">مستمر</a></li>
                                <li><a href="#" class="active">مكتمل</a></li>
                                <li><a href="#">متوقف</a></li>
                            </ul>
                        </div>

                        <hr>

                        <div class="sidebar-item">
                            <h5><i class="fas fa-fingerprint"></i> النوع</h5>
                            <select name="" class="form-select mt-2" aria-label="Default select example" onchange="location = this.value;">
                                <option value="#">أكشن </option>
                                <option value="#">إثارة </option>
                                <option value="#">إعادة إحياء </option>
                                <option value="">اتشي </option>
                                <option value="">الحياة اليومية </option>
                                <option value="">العاب </option>
                                <option value="">الواقع الافتراضي </option>
                                <option value="">ايسكاي </option>
                                <option value="">بطل غير إعتيادي </option>
                                <option value="">بوليسي </option>
                                <option value="">تاريخي </option>
                                <option value="">تراجيدي </option>
                                <option value="">ثأر </option>
                                <option value="">جوسيه </option>
                                <option value="">حريم </option>
                                <option value="">حياة مدرسية </option>
                                <option value="">خارق للطبيعة </option>
                                <option value="">خيال </option>
                                <option value="">خيال علمي </option>
                                <option value="">داخل اللعبة </option>
                                <option value="">داخل رواية </option>
                                <option value="">دراما </option>
                                <option value="">دموي </option>
                                <option value="">ديني </option>
                                <option value="">راشد </option>
                                <option value="">رعب </option>
                                <option value="">رومانسي </option>
                                <option value="">رياضة </option>
                                <option value="">زمكاني </option>
                                <option value="">زومبي </option>
                                <option value="">سحر </option>
                                <option value="">سنين </option>
                                <option value="">سينين </option>
                                <option value="">شريحة من الحياة </option>
                                <option value="">شوجو </option>
                                <option value="">شونين </option>
                                <option value="">شياطين </option>
                                <option value="">صيد </option>
                                <option value="">طبخ </option>
                                <option value="">طبى </option>
                                <option value="">طبي </option>
                                <option value="">عسكري </option>
                                <option value="">عنف </option>
                                <option value="">غموض </option>
                                <option value="">فانتازيا </option>
                                <option value="">فنون قتال </option>
                                <option value="">قوة خارقة </option>
                                <option value="">كل الاعمار </option>
                                <option value="" selected>كوميدي </option>
                                <option value="">مصاص دماء </option>
                                <option value="">مغامرات </option>
                                <option value="">ملائكة </option>
                                <option value="">نبالة </option>
                                <option value="">نفسي </option>
                                <option value="">وحوش </option>
                                <option value="">ويب تون</option>
                            </select>
                        </div>
                        <?php }else{ ?>


                            <div class="sidebar-item">
                                <ul class="list-unstyled m-0 p-0 d-block menuSidebar">
                                    <li><a href="#"  class="B-wave active"><i class="fa fa-home"></i> الرئيسية</a></li>
                                    <li><a href="#" class="B-wave"><i class="fa fa-file"></i> الفصول الجديد</a></li>
                                    <li><a href="#" class="B-wave"><i class="fas fa-clock"></i> مواعد الفصول</a></li>
                                    <li><a href="#" class="B-wave"><i class="fas fa-star"></i> الأعمال المميزة</a></li>
                                    <li><a href="#" class="B-wave"><i class="fa fa-boxes"></i> الأعمال المقترحة</a></li>
                                    </ul>
                            </div>

                            <hr>

                            <div class="sidebar-item">
                                <ul class="list-unstyled m-0 p-0 d-block menuSidebar">
                                    <li><a href="#" class="B-wave"><i class="fab fa-facebook"></i> تابعنا على الفيسبوك</a></li>
                                    <li><a href="#" class="B-wave"><i class="fab fa-instagram"></i> تابعنا على انستقرام</a></li>
                                    <li><a href="#" class="B-wave"><i class="fab fa-discord"></i> انظم إلى الديسكورد</a></li>
                                </ul>
                            </div>

                            <hr>

                            <div class="sidebar-item">
                                <ul class="list-unstyled m-0 p-0 d-block menuSidebar">
                                    <li><a href="#" class="B-wave"><i class="fa fa-blog"></i> المدونة</a></li>
                                    <li><a href="#" class="B-wave"><i class="fa fa-envelope"></i> تواصل معنا</a></li>
                                    <li><a href="#" class="B-wave"><i class="fa fa-question"></i> الأسئلة المتكررة</a></li>
                                </ul>
                            </div>

                            <hr>

                            <div class="sidebar-item">
                                <ul class="list-unstyled m-0 p-0 d-block menuSidebar">
                                    <li><a href="#" class="B-wave"><i class="fa fa-hand-holding-usd"></i> كسب الأموال</a></li>
                                </ul>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    
    <main class="d-block w-100 active mt-5 position-relative">
        <div class="container">
                <div class="row">