<?php include('header.php');?>
<div id="formAddChapter" class="b-baner mt-3">

    <div class="banner">
        <div class="icon"></div>
        <div class="text">
            <strong>إضافة عمل جديد</strong>
            <p>تحقق من أسم العمل، والبيانات المهمة من المواقع المشهورة مثل <a href="https://myanimelist.net/topmanga.php">my list anime</a></p>
        </div>
    </div>

    <form action="" method="POST">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home" data-bs-toggle="pill" data-bs-target="#homeCk" type="button" role="tab" aria-controls="home" aria-selected="true">الخطوة الاولى</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link disabled1" id="next2" data-bs-toggle="pill" data-bs-target="#next2Ck" type="button" role="tab" aria-controls="next2" aria-selected="true">الخطوة الثانية</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link disabled1" id="next3" data-bs-toggle="pill" data-bs-target="#next3Ck" type="button" role="tab" aria-controls="next3" aria-selected="true">الخطوة الثالثة</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link disabled1" id="next4" data-bs-toggle="pill" data-bs-target="#next4Ck" type="button" role="tab" aria-controls="next4" aria-selected="true">الخطوة الرابعة</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link disabled1" id="next5" data-bs-toggle="pill" data-bs-target="#next5Ck" type="button" role="tab" aria-controls="next5" aria-selected="true">الخطوة الخامسة</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="homeCk" role="tabpanel" aria-labelledby="home">
                <div class="fieldGroup">
                    <label for="name_ar" class="form-label">اسم العمل بالعربي</label>
                    <input type="text" name="name_ar" id="name_ar" class="form-control m-0">
                </div>

                <div class="fieldGroup">
                    <label for="name_en" class="form-label">اسم العمل بالإنجليزي</label>
                    <input type="text" name="name_en" id="name_en" class="form-control m-0">
                </div>

                <div class="fieldGroup">
                    <label for="name_jp" class="form-label">اسم العمل بالياباني</label>
                    <input type="text" name="name_jp" id="name_jp" class="form-control m-0">
                </div>

                <div class="fieldGroup">
                    <label for="story" class="form-label">القصة</label>
                    <textarea name="story" id="story" class="form-control m-0"></textarea>
                </div>
            </div>

            <div class="tab-pane" id="next2Ck" role="tabpanel" aria-labelledby="next2">
                <div class="fieldGroup">
                    <label for="name_ar" class="form-label">النوع</label>
                    <div class="cb-Group">
                        <div>
                            <input type="checkbox" name="manga" id="manga" class="btn-check" autocomplete="off" />
                            <label class="btn btn-primary" for="manga">مانجا</label>
                        </div>

                        <div>
                            <input type="checkbox" name="manhaw" id="manhaw" class="btn-check" autocomplete="off" />
                            <label class="btn btn-primary" for="manhaw">مانهاوا</label>
                        </div>

                        <div>
                            <input type="checkbox" name="manhao" id="manhao" class="btn-check" autocomplete="off" />
                            <label class="btn btn-primary" for="manhao">مانهو</label>
                        </div>

                        <div>
                            <input type="checkbox" name="cowick" id="cowick" class="btn-check" autocomplete="off" />
                            <label class="btn btn-primary" for="cowick">كويك</label>
                        </div>

                        <div>
                            <input type="checkbox" name="action" id="btn-check" class="btn-check" autocomplete="off" />
                            <label class="btn btn-primary" for="btn-check">قصص أطفال</label>
                        </div>
                    </div>
                </div>

                <div class="fieldGroup">
                    <label for="data" class="form-label">سنة الإنتاج</label>
                    <select name="data" id="data" class="form-select">
                        VM385:1 <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>

                <div class="fieldGroup">
                    <label for="name_ar" class="form-label">التصنيف</label>
                    <div class="cb-Group">
                        <div>
                            <input type="checkbox" name="typeWork0" id="typeWork0" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork0">أكشن</label>
                        </div>
                    
                        <div>
                            <input type="checkbox" name="typeWork1" id="typeWork1" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork1">إثارة</label>
                        </div>
                    
                        <div>
                            <input type="checkbox" name="typeWork2" id="typeWork2" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork2">إعادة إحياء</label>
                        </div>
                    
                        <div>
                            <input type="checkbox" name="typeWork3" id="typeWork3" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork3">اتشي</label>
                        </div>
                    
                        <div>
                            <input type="checkbox" name="typeWork4" id="typeWork4" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork4">الحياة اليومية</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork5" id="typeWork5" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork5">العاب</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork6" id="typeWork6" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork6">الواقع الافتراضي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork7" id="typeWork7" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork7">ايسكاي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork8" id="typeWork8" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork8">بطل غير إعتيادي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork9" id="typeWork9" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork9">بوليسي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork10" id="typeWork10" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork10">تاريخي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork11" id="typeWork11" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork11">تراجيدي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork12" id="typeWork12" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork12">ثأر</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork13" id="typeWork13" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork13">جوسيه</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork14" id="typeWork14" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork14">حريم</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork15" id="typeWork15" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork15">حياة مدرسية</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork16" id="typeWork16" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork16">خارق للطبيعة</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork17" id="typeWork17" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork17">خيال</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork18" id="typeWork18" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork18">خيال علمي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork19" id="typeWork19" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork19">داخل اللعبة</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork20" id="typeWork20" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork20">داخل رواية</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork21" id="typeWork21" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork21">دراما</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork22" id="typeWork22" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork22">دموي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork23" id="typeWork23" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork23">ديني</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork24" id="typeWork24" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork24">راشد</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork25" id="typeWork25" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork25">رعب</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork26" id="typeWork26" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork26">رومانسي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork27" id="typeWork27" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork27">رياضة</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork28" id="typeWork28" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork28">زمكاني</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork29" id="typeWork29" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork29">زومبي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork30" id="typeWork30" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork30">سحر</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork31" id="typeWork31" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork31">سنين</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork32" id="typeWork32" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork32">سينين</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork33" id="typeWork33" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork33">شريحة من الحياة</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork34" id="typeWork34" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork34">شوجو</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork35" id="typeWork35" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork35">شونين</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork36" id="typeWork36" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork36">شياطين</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork37" id="typeWork37" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork37">صيد</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork38" id="typeWork38" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork38">طبخ</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork39" id="typeWork39" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork39">طبى</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork40" id="typeWork40" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork40">طبي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork41" id="typeWork41" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork41">عسكري</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork42" id="typeWork42" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork42">عنف</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork43" id="typeWork43" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork43">غموض</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork44" id="typeWork44" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork44">فانتازيا</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork45" id="typeWork45" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork45">فنون قتال</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork46" id="typeWork46" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork46">قوة خارقة</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork47" id="typeWork47" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork47">كل الاعمار</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork48" id="typeWork48" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork48">كوميدي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork49" id="typeWork49" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork49">مصاص دماء</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork50" id="typeWork50" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork50">مغامرات</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork51" id="typeWork51" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork51">ملائكة</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork52" id="typeWork52" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork52">نبالة</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork53" id="typeWork53" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork53">نفسي</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork54" id="typeWork54" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork54">وحوش</label>
                        </div>
                        
                        <div>
                            <input type="checkbox" name="typeWork55" id="typeWork55" class="btn-check" autocomplete="off">
                            <label class="btn btn-primary" for="typeWork55">ويب تون</label>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="next3Ck" role="tabpanel" aria-labelledby="next3">
                <div class="fieldGroup">
                    <label for="url_mylistanime" class="form-label">رابط العمل في موقع MyListAnime</label>
                    <input type="url" name="url_mylistanime" id="url_mylistanime" class="form-control m-0">
                </div>

                <div class="fieldGroup">
                    <label for="url_mangaupdates" class="form-label">رابط العمل في موقع MangaUpdates</label>
                    <input type="url" name="url_mangaupdates" id="url_mangaupdates" class="form-control m-0">
                </div>

                <div class="fieldGroup">
                    <label for="url_rawmanga" class="form-label">رابط العمل في موقع RawManga</label>
                    <input type="url" name="url_rawmanga" id="url_rawmanga" class="form-control m-0">
                </div>
            </div>

            <div class="tab-pane" id="next4Ck" role="tabpanel" aria-labelledby="next4">
                <div class="fieldGroup">
                    <label for="cover" class="form-label">صورة الهيدر</label>
                    <input type="file" name="cover" id="cover" class="form-control m-0">
                </div>

                <div class="fieldGroup">
                    <label for="poster" class="form-label">بوستر الغلاف</label>
                    <input type="file" name="poster" id="poster" class="form-control m-0">
                </div>
            </div>

            <div class="tab-pane" id="next5Ck" role="tabpanel" aria-labelledby="next5">
                <div class="fieldGroup">
                    <label for="status" class="form-label">الحالة</label>
                    <select name="status" id="status" class="form-select">
                        <option value="1">مستمر</option>
                        <option value="2">متوقف</option>
                        <option value="3">مكتمل</option>
                    </select>
                </div>

                <div class="fieldGroup">
                    <label for="parental_control" class="form-label">الرقابة</label>
                    <select name="parental_control" id="parental_control" class="form-select">
                        <option value="1">مناسب للأطفال</option>
                        <option value="2">+18</option>
                        <option value="3">لجميع الأعمار</option>
                    </select>
                </div>
                <div class="saveData">
                    <button type="submit" id="saveData" class="btn btn-save B-wave"><div id="lo-saveData" class="spinner-border spinner-border-sm d-none" role="status"> <span class="sr-only">Loading...</span> </div> <span class="te-btn-save">إنشاء</span></button>
                </div>
            </div>

        </div>
    </form>
</div>
<?php include('footer.php');?>