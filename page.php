<?php
include('header.php');
?>
<div class="col-lg-12">
    <div class="WorkMangaPage-header">
        <div class="likeAndViewPageManga">
            <span style="background-color:#fd5959;">25 <i class="fa fa-heart"></i></span>
            <span style="background-color:#ffffff; color: #000;">43 <i class="fa fa-eye"></i></span>
            <span style="background-color:#7091fa;">43 <i class="fa fa-book"></i></span>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="WorkMangaPage-slid">
        <div class="avaterMangaPage"></div>
        <div class="dataMangaPage">
            <span class="dataMangaPage-ul-2"><i class="fa fa-heart"></i></span>
            <span class="dataMangaPage-ul-1"><i class="fa fa-book"></i></span>
        </div>
        <div class="infoMoreManga">
            <div>
                <h5>معلومات إضافة</h5>
                <ul>
                    <li>الاسم بالياباني: ONE PIECE</li>
                    <li>الاسم بالإنجليزي: ONE PIECE</li>
                    <li>الاسم بالعربي: ONE PIECE</li>
                    <li>بلد المنشئ: اليابان</li>
                    <li>المؤلف: <a href="#"> Eiichiro Oda</a></li>
                    <li>التقيم: <a href="#"> 9.15</a></li>
                    <li>الحالة: مستمر</li>
                    <li>تاريخ النشر: يوليو 22-1997</li>
                    <li>المجلة: Shounen Jump</li>
                </ul>
            </div>

            
            <div>
                <h5>فرق الترجمة</h5>
                <ul class="PageOneTeamManga">
                    <li><a href="#">TeamPain</a></li>
                    <li><a href="#">TeamSquad</a></li>
                    <li><a href="#">العقارب</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-9">
    <div class="WorkMangaPage-content pt-3">
        
        <h4 class="titlePageManga">OnePice</h4>
        <p class="descriptionPageManga mt-2">تتمحور القصة حول مغامرات طاقم قراصنة قبعة القش بقيادة مونكي دي لوفي، لكل فرد من أفراد هذا الطاقم هدفٌ يطمح لتحقيقه، أما الهدف الرئيس لقائدهم لوفي هو إيجاد الكنز الأسطوري “ون بيس” وأن يغدو ملك القراصنة.</p>

        <ul class="typePageManga mt-2 mb-3">
            <li>اكشن</li>
            <li>خيال</li>
            <li>مغامرة</li>
            <li>خارق للطبيعة</li>
        </ul>
    </div>

    <div class="WorkMangaPageChapters mt-5">
        <h4 class="titlePageManga" style="font-size: 18px;">فصول المانجا</h4>
        <div id="ListChaptersManga" class="table-responsive mt-3 mb-3">
            <table id="dataTableManga" class="table table-striped display">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#" class="title"> 1 - البداية</a></td>
                        <td>
                            <a href="#" class="Team"><i class="fa fa-users"></i> TeamSquad</a>
                            <a href="#" class="View"><i class="fa fa-eye"></i> 1</a>
                            <span class="calendar"><i class="fa fa-calendar"></i> 5 يوليو، 2021</span>
                        </td>
                    </tr>

                    
                    <tr>
                        <td><a href="#" class="title">2 - الماضي المؤلم</a></td>
                        <td>
                            <a href="#" class="Team"><i class="fa fa-users"></i> TeamSquad</a>
                            <a href="#" class="View"><i class="fa fa-eye"></i> 1</a>
                            <span class="calendar"><i class="fa fa-calendar"></i> 5 يوليو، 2021</span>
                        </td>
                    </tr>

                    
                    <tr>
                        <td><a href="#" class="title">3 - الصديق الجديد</a></td>
                        <td>
                            <a href="#" class="Team"><i class="fa fa-users"></i> TeamSquad</a>
                            <a href="#" class="View"><i class="fa fa-eye"></i> 1</a>
                            <span class="calendar"><i class="fa fa-calendar"></i> 5 يوليو، 2021</span>
                        </td>
                    </tr>

                    
                    <tr>
                        <td><a href="#" class="title">4 - البطل الجديد</a></td>
                        <td>
                            <a href="#" class="Team"><i class="fa fa-users"></i> TeamSquad</a>
                            <a href="#" class="View"><i class="fa fa-eye"></i> 1</a>
                            <span class="calendar"><i class="fa fa-calendar"></i> 5 يوليو، 2021</span>
                        </td>
                    </tr>

                    
                    <tr>
                        <td><i class="status fa fa-lock LockChapter"></i> <a href="#" class="title">5 - الابطال وترتيبهم</a></td>
                        <td>
                            <a href="#" class="Team"><i class="fa fa-users"></i> TeamSquad</a>
                            <a href="#" class="View"><i class="fa fa-eye"></i> 1</a>
                            <span class="calendar"><i class="fa fa-calendar"></i> 5 يوليو، 2021</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            $(function() {
                $(document).ready(function(){
                    $('#dataTableManga').DataTable({
                        "search": {
                            "caseInsensitive": false,
                        },
                        dom: "<'row'<'col-md-12'f>><'row'<'col-md-12'tr>><'row'<'col-lg-12 mr-LCMp'p>>",
                        "order": [],
                        "columnDefs":[
                            {
                                "target":[0,1],
                                "orderable":false,
                            },
                        ],
                        columnDefs: [
                            { orderable: false, targets: [0,1] }
                        ],
                        "language": {
                            "zeroRecords": "<div class='msg m-0' style='border: unset;color:#fff;'><p>الفصل الذي تبحث عنه غير موجود!</p></div>",
                            "paginate": {
                                "first": "الأول",
                                "last": "الأخير",
                                "next": "التالي",
                                "previous": "السابق",
                            },
                            "searchPlaceholder": "للبحث أكتب رقم الفصل أو اسم الفريق",
                            "search":'',
                        },
                        "lengthChange": false,
                        "info": false,
                        scrollY:        '50vh',
                        scrollCollapse: true,
                        
                    });
                });
            });

            $('.LockChapter').click(function () {
                $('#Tool-TypeModal').modal('show');
                $('.containerModal').html('<p>الفصل مغلق ويجب عليك إختيار أحد الطرق التالية لمشاهدة الفصل</p> <div class="rowLink_LCM"> <a href="#">شراء العضوية المميزة</a> <a href="#">رابط إختصار إعلان</a> </div>');
            });
        </script>
    </div>
</div>

<?php
include('footer.php');
?>