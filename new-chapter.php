<?php include('header.php');?>
<div id="formAddChapter" class="b-baner mt-3">

    <div class="banner">
        <div class="icon"></div>
        <div class="text">
            <strong>إنشاء فصل جديد</strong>
            <p>تحقق من اسم العمل، ورقم الفصل قبل إجراء رفع فصل جديد!</p>
        </div>
    </div>

    <form action="" method="POST">
        <div class="fieldGroup">
            <label for="name" class="form-label">اسم العمل</label>
            <input type="text" name="name" id="name" class="form-control m-0">
        </div>

        <div class="fieldGroup">
            <label for="name" class="form-label">رقم الفصل</label>
            <input type="text" name="name" id="name" class="form-control m-0">
        </div>
        
        <div class="fieldGroup">
            <label for="name" class="form-label">عنوان الفصل</label>
            <input type="text" name="name" id="name" class="form-control m-0">
        </div>
        
        <div class="fieldGroup">
            <label for="name" class="form-label">الفريق</label>
            <select name="" id="" class="form-select">
                <option value="teamEnd">teamEnd</option>
                <option value="teamFire">Fire</option>
            </select>
        </div>
        
        <div class="fieldGroup">
            <label for="name" class="form-label">ملفات الفصل</label>
            <input type="file" class="form-control">
        </div>
        <div class="saveData">
            <button type="submit" id="saveData" class="btn btn-save B-wave"><div id="lo-saveData" class="spinner-border spinner-border-sm d-none" role="status"> <span class="sr-only">Loading...</span> </div> <span class="te-btn-save">إنشاء</span></button>
        </div>
    </form>
</div>
<?php include('footer.php');?>