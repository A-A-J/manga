<?php include('start.php'); ?>
<style>
    body {
        background-image: url(http://3asq.org/wp-content/uploads/2019/04/Untitled-3.png) !important;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    body::after {
        content: '';
        display: block;
        position: fixed;
        background-image: url(layout/img/toolImg/shadow.png);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        transform: rotate(180deg);
        opacity: 0.6;
    }

    body::before {
        content: '';
        display: block;
        position: fixed;
        background-image: url(layout/img/toolImg/shadow.png);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        opacity: 0.9;
    }
</style>
<div class="landing-decoration"></div>
<div class="d-flex justify-content-center align-items-center flex-row-reverse container overflow-auto h-100" style="z-index:1;">
    <div class="row w-100 mt-3">
        <div class="col-lg-8 mb-5">
            <div class="MainPageLogin text-center">
                <img src="layout/img/logo-color.svg" alt="" class="logo mb-3">
                <p class="Title">مرحبًا بك في<br><strong>MangaToon</strong></p>
                <p class="des mt-3 m-auto">استمتع بالمشاهدة أحدث فصول المانجا والمانها على موقعنا، وتمتع بالعديد من الخصائص التي ستسهل لك مشاهدة الاعمال المفضلة لك.</p>
                <div class="ClickGroubLoginAndRigster">
                    <div class="loginClick transition active"><span>تسجيل الدخول</span><div class="hoverLogin show"></div></div>
                    <div class="regsterClick transition"><span>إنشاء حساب</span><div class="hoverRegster"></div></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="card">

                <div id="loadingCheck" class="text-center d-none" style="margin-top:1rem">
                    <div class="lds-ripple">
                        <div></div>
                        <div></div>
                    </div>
                </div>


                <div id="formPage" class="login">
                    <h2 class="title">تسجيل الدخول</h2>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="ادخل اسم المستخدم">
                        <label for="floatingInput">اسم المستخدم</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="ادخل كلمة المرور">
                        <label for="floatingPassword">كلمة المرور</label>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <div class="form-check">
                            <input class="form-check-input float-end" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" style="padding-right:1.2rem;" for="flexCheckDefault">تذكرني</label>
                        </div>
                        <a href="#" class="text-start helpPassword" style="flex: 1;">هل نسيت كلمة المرور؟</a>
                    </div>
                    <button type="submit" class="ClickButton btn btn-primary transition B-wave">تسجيل الدخول</button>
                    <div class="socialMedia">
                        <div class="title">تسجيل الدخول بحساب التواصل الاجتماعي الخاص بك</div>
                        <ul>
                            <li><a href="#" class="fab fa-google google"></a></li>
                            <li><a href="#" class="fab fa-facebook facebook"></a></li>
                            <li><a href="#" class="fab fa-discord discord"></a></li>
                        </ul>
                    </div>
                </div>


                
                <div id="formPage" class="regster d-none">
                    <h2 class="title">إنشاء حساب</h2>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="ادخل اسم المستخدم">
                        <label for="floatingInput">اسم المستخدم</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="ادخل البريد الإلكتروني">
                        <label for="floatingEmail">البريد الإلكتروني</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="ادخل كلمة المرور">
                        <label for="floatingPassword">كلمة المرور</label>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <div class="custom-control custom-checkbox position-relative">
                            <input type="checkbox" name="accept" class="custom-control-input" id="accept" style="position: absolute; right: 0; top: 7px;" required="required">
                            <label class="custom-control-label text-justify" style="padding-right: 20px;" for="accept">
                                <small class="text-muted">
                                    أؤكد أنني قرأت ووافقت على <a href="https://lnk.vin/page/terms-of-service" target="_blank">الشروط والأحكام</a> و <a href="https://lnk.vin/page/privacy-policy" target="_blank">سياسة الخصوصية</a> لدى الموقع, كما أنني أوافق على إستلام تحديثات للمنصة عبر البريد الإلكتروني
                                </small>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="ClickButton btn btn-primary transition B-wave">تسجيل الدخول</button>

                    <hr>

                    <button class="ClickButtonNotNew btn btn-primary transition B-wave">لدي حساب</button>
                </div>

            </div>
        </div>

    </div>
</div>

<?php include('end.php'); ?>