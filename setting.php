<?php
include('header.php');
?>

<div id="settingUser" class="mt-3 position-relative">

    <div class="banner">
        <div class="icon"></div>
        <div class="text">
            <strong>إعدادات الحساب</strong>
            <p>أحذر بعض الإعدادات تحتاج إلى المزيد من التفكير قبل تنفيذها</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="slidSet">
                <ul class="menu">                    
                    <li>
                        <div class="bo">
                            <div class="icon"><i class="far fa-cog"></i></div>
                            <div class="text"><strong>إعدادات الحساب</strong><p>قم بتغيير الإعدادات وتهيئة الإشعارات ومراجعة الخصوصية وتغير كلمة المرور.</p></div>
                        </div>
                        <div class="bodyMenuDropped">
                            <ul>
                                <li><a href="#" class="active">الإعدادات العامة</a></li>
                                <li><a href="#">التحقق من خطوتين</a></li>
                                <li><a href="#">خصوصية الحساب</a></li>
                                <li><a href="#">حذف الحساب</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="mainSetting">
                <div class="title">الإعدادات العامة</div>
                
                <div class="row mt-2">
                    <div class="col-lg-8 ps-5">

                        <div class="fieldGroup">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" name="name" id="name" class="form-control m-0">
                        </div>

                        <div class="fieldGroup">
                            <label for="username" class="form-label">اسم المسخدم</label>
                            <input type="text" name="username" id="username" class="form-control m-0">
                            <div class="form-text m-0">يتم تغير اسم المستخدم كل 90 يوم فقط</div>
                        </div>

                        <div class="fieldGroup">
                            <label for="bio" class="form-label">السيرة الذاتية</label>
                            <textarea name="bio" id="bio" class="form-control" maxlength="250" rows="3" style="height: auto;resize: none;"></textarea>
                        </div>

                        <div class="fieldGroup">
                            <label for="twitter" class="form-label">معرف حساب تويتر</label>
                            <div class="input-group ltr">
                                <span class="input-group-text" id="basic-addon2">https://twitter.com/</span>
                                <input type="text" name="twitter" id="twitter" class="form-control">
                            </div>
                        </div>

                        <div class="fieldGroup">
                            <label for="instagram" class="form-label">معرف حساب انستقرام</label>
                            <div class="input-group ltr">
                                <span class="input-group-text" id="basic-addon2">https://www.instagram.com/</span>
                                <input type="text" name="instagram" id="instagram" class="form-control">
                            </div>
                        </div>

                        <div class="fieldGroup">
                            <label for="facebookk" class="form-label">معرف حساب الفيسبوك</label>
                            <div class="input-group ltr">
                                <span class="input-group-text" id="basic-addon2">https://www.facebook.com/</span>
                                <input type="text" name="facebookk" id="facebookk" class="form-control">
                            </div>
                        </div>

                        <div class="fieldGroup">
                            <label for="discord" class="form-label">معرف حساب الديسكورد</label>
                            <div class="input-group ltr">
                                <span class="input-group-text" id="basic-addon2">Discord</span>
                                <input type="text" name="discord" id="discord" class="form-control">
                            </div>
                        </div>

                        <div class="fieldGroup">
                            <label for="sex" class="form-label">الجنس</label>
                            <select name="sex" id="sex" class="form-select">
                                <option value="male" selected>ذكر</option>
                                <option value="female">أنثى</option>
                            </select>
                        </div>

                        <div class="fieldGroup">
                            <label for="foodLike" class="form-label">الاكل المفضل</label>
                            <input type="text" name="foodLike" id="foodLike" class="form-control m-0">
                        </div>

                        <div class="fieldGroup">
                            <label for="age" class="form-label">الاكل المفضل</label>
                            <input type="text" name="age" id="age" class="form-control m-0">
                        </div>

                        <div class="fieldGroup">
                            <label for="favoriteName" class="form-label">الاسم المفضل</label>
                            <input type="text" name="favoriteName" id="favoriteName" class="form-control m-0">
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="fieldGroup">
                            <label class="form-label">الصورة الرمزية</label>
                            <div class="editAvatar">
                                <img src="layout/img/avtar/1.jpg" alt="" id="imgAvatar">
                                <div class="upAvatar">
                                    <div id="addFriend" class="spinner-border spinner-border-sm d-none" role="status"> <span class="sr-only">Loading...</span> </div>
                                    <label for="tt_Ar" id="tt_Ar5"><i class="fal fa-pencil-alt"></i> تغير الصورة</label>
                                    <input hidden type="file" id="tt_Ar" onchange="loadFile(event)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="saveData">
                        <button type="submit" id="saveData" class="btn btn-save B-wave"><div id="lo-saveData" class="spinner-border spinner-border-sm d-none" role="status"> <span class="sr-only">Loading...</span> </div> <span class="te-btn-save">حفظ التغيرات</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>