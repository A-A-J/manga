$(function() {
        
    'use strict'

    Waves.init();
    Waves.attach('.B-wave', ['waves-float', 'waves-block']);

    $('.barsMenuHeader').click(function () {
        $('.barsMenuHeader').toggleClass("fa-bars fa-times");
        $('.menu').toggleClass("show");
    });

    $('.clickSliderHeader').click(function () {
        $('.clickSliderHeader').toggleClass("ltr");
        $('aside').toggleClass("active");
        $('main').toggleClass("active");
        $('footer').toggleClass("active");
    });


    ScrollReveal().reveal('.scrollrevealjs-ation',{
        duration: 1000,
        reset: false
    });

    $('#Tool-TypeModal').on('hidden.bs.modal', function (e) {
        $('.containerModal>p').remove();
        $('.mg-modal').remove();
        $('.rowLink_LCM').remove();
        $('#report').remove();
    })


    $('#ClickFromSar7ne').click(function () {
        $('#Tool-TypeModal').modal('show');
        $('.containerModal').html('<div class="mg-modal"><p><strong>ما هي خدمة صارحني؟</strong><br />هي شبيهة لخدمة <a href="https://tellonym.me/tells">tellonym</a> حيث تمكن المستخدم من إرسال رسائل إلى العضو بدون أن يتم عرض معلومات المستخدم المرسل على سبيل المثال: الاسم، ورابط الملف الشخصي، والصورة، وغيرها من ذلك.</p> <p>&nbsp;</p> <p><strong>ما هي المعلومات التي سيتم عرضها لمستلم الرسالة؟</strong><br />سيكون لدى العضو إمكانية عرض الرسال في الملف الشخصي متضمن محتوى الرسالة.</p> <p>&nbsp;</p> <p><strong>هل للإدارة الحق في معرفة معلومات المرسل؟</strong><br />نعم، للإدارة الحق في معرفة معلومات المرسل متضمن ذلك الآي بي والاسم كما تم الموافقة عليها بحسب سياسية الخصوصية، ولكن لن يتم عرضها لمستلم الرسالة.</p> <p>&nbsp;</p> <p><strong>هل يحق للعضو حذف الرسالة او التبليغ؟</strong><br />نعم، يحق لمستلم الرسال الحق في حذف الرسالة او الإبلاغ عليها.</p> <p>&nbsp;</p> <p><strong>متى يحق لي استخدام الخدمة؟</strong><br />عند وصول المشاركات إلى 15 مشاركة ستتاح الخدمة.</p></div>');
        $('.rowLink_LCM').remove();
    });

    $('.regsterClick').click(function () {
        $('.hoverLogin').removeClass("show");
        $('.loginClick').removeClass("active");
        $('.hoverRegster').addClass("show");
        $('.regsterClick').addClass("active");

        // from
        $('.login').addClass("d-none");
        $('#loadingCheck').removeClass("d-none");
        setTimeout(function(){
            $('#loadingCheck').addClass("d-none");
            $('.regster').removeClass("d-none");
        },1000);
    });

    $('.loginClick').click(function () {
        $('.hoverLogin').addClass("show");  
        $('.loginClick').addClass("active");  
        $('.hoverRegster').removeClass("show");
        $('.regsterClick').removeClass("active");

        // from
        $('.regster').addClass("d-none");
        $('#loadingCheck').removeClass("d-none");
        setTimeout(function(){
            $('#loadingCheck').addClass("d-none");
            $('.login').removeClass("d-none");
        },1000);
    });

    //add freinde user
    $('.addFriend').click(function () {
        $('#addFriend').removeClass("d-none");
        $('.titleFriend').addClass("d-none");

        setTimeout(function(){
            $('#addFriend').addClass("d-none");
            $('.titleFriend').removeClass("d-none");
            Notiflix.Notify.Success('تم إرسال طلب الصداقة بالنجاح');
        },1000);
    });

    //save data btn
    $('#saveData').click(function () {
        $('#lo-saveData').removeClass("d-none");
        $('.te-btn-save').addClass("d-none");

        setTimeout(function(){
            $('#lo-saveData').addClass("d-none");
            $('.te-btn-save').removeClass("d-none");
            Notiflix.Notify.Success('تم حفظ التغيرات بالنجاح');
        },1000);
    });

    $('#homeCk').change(function () {
        var name_ar = $('#name_ar').val(),
            name_en = $('#name_en').val(),
            name_jp = $('#name_jp').val(),
            story   = $('#story').val();

        if(!name_ar == '' && !name_en == '' && !name_jp == '' && !story == ''){
            $('#home').append(' <i class="fa fa-check-circle"></i>');
            $('#next2').removeClass("disabled");
            $('#homeCk').removeClass("show active");
            $('#home').removeClass("active");
            $('#next2').addClass("active");
            $('#next2Ck').addClass("show active");
        }
    });
});




function loadFile(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('imgAvatar');
        output.src = reader.result;
    }
    
    if( event.target.files[0]['size'] > 2097152){
        return Notiflix.Notify.Failure('يجب أن تكون الصورة أقل  من 2MP');
    }

    if(event.target.files[0]['type'] == "image/jpeg" || event.target.files[0]['type'] == "image/png"){
        $('#addFriend').removeClass("d-none");
        $('#tt_Ar5').addClass("d-none");
        setTimeout(function(){
            $('#addFriend').addClass("d-none");
            $('#tt_Ar5').removeClass("d-none");
            reader.readAsDataURL(event.target.files[0]);
            Notiflix.Notify.Success('تم تحديث الصورة بالنجاح');
            $('.containerModal').html(event.target.files[0]['name']);
        },3000);
    }else{
        Notiflix.Notify.Failure('يجب أن تكون صيغة الصورة  jpg او png');
    }
}