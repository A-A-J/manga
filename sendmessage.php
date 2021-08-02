<?php
include('header.php');
?>
<div class="b-baner mt-3">
    <div class="banner">
        <div class="icon"></div>
        <div class="text">
            <strong>مراسلة الإدارة</strong>
            <p>تحقق جيدًا من البيانات قبل إرسالها، وستتواصل الإدارة قريبًا عبر البريد الإلكتروني المدخل.</p>
        </div>
    </div>
</div>
<div id="formPage">
    <form action="" method="POST">

        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="fieldGroup">
                    <label for="name" class="form-label">الاسم</label>
                    <input type="text" name="name" id="name" class="form-control m-0">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fieldGroup">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input type="email" name="email" id="email" class="form-control m-0">
                </div>
            </div>
        </div>

        <div class="fieldGroup mb-3">
            <label for="address" class="form-label">العنوان</label>
            <input type="text" name="address" id="address" class="form-control m-0">
        </div>

        <div class="fieldGroup">
            <label for="description" class="form-label">الوصف</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        
        <div class="saveData mt-3">
            <button type="submit" id="saveData" class="btn btn-save B-wave"><div id="lo-saveData" class="spinner-border spinner-border-sm d-none" role="status"> <span class="sr-only">Loading...</span> </div> <span class="te-btn-save">إنشاء</span></button>
        </div>

    </form>
</div>

<?php
include('footer.php');
?>