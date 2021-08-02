<?php
include('header.php');
?>

<div id="Profile">
    <div class="ProfileHeader">

        <div class="ProfileCover" style="background-image: url(layout/img/avtar/headerProfile/1.jpg);"></div>

        <div class="userA-N">
            <img src="layout/img/avtar/1.jpg" class="mx-auto d-block" alt="Responsive image">
            <div class="NameAndRank">
                <h5>SotaroSama</h5>
                <p>المؤسس</p>
            </div>
        </div>

        <div class="dataUsernameContent text-center mx-auto">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="SocialLinks">
                        <ul>
                            <li><a href="#" class="fab fa-facebook facebook"></a></li>
                            <li><a href="#" class="fab fa-discord discord"></a></li>
                            <li><a href="#" class="fab fa-twitter twitter"></a></li>
                            <li><a href="#" class="fab fa-instagram instagram"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3">
                    <div class="UserStats">
                        <ul>
                            <li><span class="title">المشاركات</span><span class="text">5k</span></li>
                            <li><span class="title">الزوار</span><span class="text">1.5k</span></li>
                            <li><span class="title">الاصدقاء</span><span class="text">13</span></li>
                            <li><span class="title">الدولة</span><span class="text">ksa</span></li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="infoActions">
                <div class="addFriend"><div id="addFriend" class="spinner-border spinner-border-sm d-none" role="status"> <span class="sr-only">Loading...</span> </div> <span class="titleFriend">طلب الصداقة</span></div>
                <div class="sendMessage"><a href="#">مرسالة</a></div>
            </div>

        </div>

    </div>

    <div class="ProfileNav">
        <ul class="menuPageProfile nav nav-tabs" id="myTab" role="tablist">
            <li class="active nav-item" role="presentation">
                <a href="#about" data-url="tab">
                    <span class="icon">
                        <svg id="svg-profile" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                            <path d="M10,2c4.418,0,8,3.582,8,8c0,4.418-3.582,8-8,8c-4.418,0-8-3.582-8-8C2,5.582,5.582,2,10,2 M10,0C4.486,0,0,4.486,0,10c0,5.514,4.486,10,10,10c5.514,0,10-4.486,10-10C20,4.486,15.514,0,10,0L10,0z"></path>
                            <path d="M10,7c0.551,0,1,0.449,1,1s-0.449,1-1,1S9,8.551,9,8S9.449,7,10,7 M10,5C8.343,5,7,6.343,7,8c0,1.656,1.343,3,3,3c1.656,0,3-1.344,3-3C13,6.343,11.656,5,10,5L10,5z"></path>
                            <path d="M14.866,15.025C14.43,13.29,12.871,12,11,12H9c-1.871,0-3.43,1.29-3.866,3.025C5.678,15.553,6.308,15.988,7,16.317V16c0-1.104,0.897-2,2-2h2c1.103,0,2,0.896,2,2v0.317C13.692,15.988,14.322,15.553,14.866,15.025z"></path>
                        </svg>
                    </span>
                    <span class="title">المزيد عنه</span>
                </a>
            </li>

            <li>
                <a href="#about" data-url="show1.php">
                    <span class="icon">
                        <svg id="svg-friend" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                            <path d="M10,0C4.477,0,0,4.478,0,10c0,5.523,4.477,10,10,10c5.522,0,10-4.477,10-10C20,4.478,15.522,0,10,0z M10,18c-4.418,0-8-3.582-8-8c0-4.418,3.582-8,8-8s8,3.582,8,8 C18,14.418,14.418,18,10,18z M10,13c-1.305,0-2.403-0.838-2.816-2H5.101c0.464,2.282,2.48,4,4.899,4s4.436-1.718,4.899-4h-2.083C12.403,12.162,11.305,13,10,13z M7,7H5v2h2V7z M13,9h2V7h-2V9z"></path>
                        </svg>
                    </span>
                    <span class="title">الاصدقاء</span>
                </a>
            </li>

            <li>
                <a href="#tab2"  data-url="show2.php">
                    <span class="icon">
                        <svg id="svg-group" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                            <path d="M10,2c1.654,0,3,1.346,3,3s-1.346,3-3,3S7,6.654,7,5S8.346,2,10,2 M10,0C7.238,0,5,2.238,5,5s2.238,5,5,5s5-2.238,5-5S12.762,0,10,0L10,0z"></path>
                            <path d="M3,20v-2c0-2.205,1.794-4,4-4h6c2.206,0,4,1.795,4,4v2h2v-2c0-3.313-2.687-6-6-6H7c-3.313,0-6,2.687-6,6v2H3z"></path>
                            <path d="M20,8.05c-1.13,0-2.05-0.919-2.05-2.05S18.87,3.95,20,3.95v-2c-2.236,0-4.05,1.813-4.05,4.05s1.813,4.05,4.05,4.05V8.05z"></path>
                            <path d="M0,8.05C1,8.05,2.05,7.13,2.05,6S1,3.95,0,3.95v-2c2,0,4.05,1.813,4.05,4.05S2,10.05,0,10.05V8.05z"></path>
                        </svg>
                    </span>
                    <span class="title">الفرق</span>
                </a>
            </li>

            <li>
                <a href="#tab3"  data-url="show3.php">
                    <span class="icon">
                        <svg id="svg-badges" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                            <path d="M10,8c2.757,0,5,2.243,5,5s-2.243,5-5,5s-5-2.243-5-5S7.243,8,10,8 M10,6c-3.866,0-7,3.134-7,7s3.134,7,7,7c3.865,0,7-3.134,7-7S13.865,6,10,6L10,6z"></path>
                            <path d="M3.906,6.391L2.651,2h3.84l0.701,2.453c0.627-0.206,1.283-0.347,1.963-0.41L8,0H0l2.36,8.26C2.79,7.568,3.31,6.941,3.906,6.391z"></path>
                            <path d="M12.808,4.453L13.509,2h3.84l-1.255,4.391C16.689,6.94,17.21,7.568,17.64,8.26L20,0h-8l-1.155,4.043C11.524,4.106,12.181,4.247,12.808,4.453z"></path>
                        </svg>
                    </span>
                    <span class="title">الرتب</span>
                </a>
            </li>

            <li>
                <a href="#tab4"  data-url="show2.php">
                    <span class="icon">
                        <svg id="svg-timeline" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
                            <path d="M16,0H4C1.791,0,0,1.791,0,4v12c0,2.209,1.791,4,4,4h12c2.209,0,4-1.791,4-4V4C20,1.791,18.209,0,16,0zM18,16c0,1.103-0.897,2-2,2H4c-1.103,0-2-0.897-2-2V4c0-1.103,0.897-2,2-2h12c1.103,0,2,0.897,2,2V16z"></path>
                            <polygon points="18,5 2,5 2,7 5,7 5,20 7,20 7,7 13,7 13,20 15,20 15,7 18,7"></polygon>
                        </svg>
                    </span>
                    <span class="title">المكتبة</span>
                </a>
            </li>

        </ul>
    </div>

    <div>
        <div id="about" class="ProfileMain mt-2 tab-pane active">
            <div class="row">
                <div class="col-lg-3 mb-2">
                    <div class="ProfileCard aboutMe">
                        <h5 class="title">نبذة عنه</h5>
                        <p class="des">أنا والسهر والسفر أصحاب، مدمن أفلام ومسلسلات ومانجا وأنمي وكل حاقة حلوة، بعيد عن السياسة مثل بعد أخر كوكب عن كوكب الأرض، أحب السوشي وأفضل المندى خصوصا الحنيذ، أهوى البرمجة والتصميم، استروفيلي من الصغر 🌝</p>
                        <ul>
                            <li><span class="title">الجنس:</span><span class="des">ذكر</span></li>
                            <li><span class="title">العمر:</span><span class="des">22</span></li>
                            <li><span class="title">الاكل المفضل:</span><span class="des">السوشي</span></li>
                            <li><span class="title">الاسم المفضل:</span><span class="des">Sotaro</span></li>
                        </ul>
                    </div>


                    <div class="ProfileCard listRank mt-2">
                        <h5 class="title">الرتب <b>3</b></h5>
                        <div href="#" class="more fas fa-ellipsis-h">
                            <div class="drop ProfileCard">
                                <ul>
                                    <li><a href="#">ألية عمل الرتب</a></li>
                                    <li><a href="#">قائمة الرتب</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul>
                            <li><span class="rank rank1" title="إمبراطور سنة 2020"></span></li>
                            <li><span class="rank rank2" title="إمبراطور سنة 2021"></span></li>
                            <li><span class="rank rank3" title="إمبراطور سنة 2022"></span></li>
                        </ul>
                    </div>


                    <div class="ProfileCard listFriend mt-2">
                        <h5 class="title">الاصدقاء <b>13</b></h5>
                        <ul>
                            <li><span class="avatar"><img src="layout/img/avtar/2569ca4f73aa99656e6d49ad0807aa0c.jpg" alt=""></span><span class="name">Mohamed</span></li>
                            <li><span class="avatar"><img src="layout/img/avtar/2569ca4f73aa99656e6d49ad0807aa0c.jpg" alt=""></span><span class="name">Saud</span></li>
                            <li><span class="avatar"><img src="layout/img/avtar/2569ca4f73aa99656e6d49ad0807aa0c.jpg" alt=""></span><span class="name">Eshaq</span></li>
                            <li><span class="avatar"><img src="layout/img/avtar/2569ca4f73aa99656e6d49ad0807aa0c.jpg" alt=""></span><span class="name">Darwn</span></li>
                            <li><span class="avatar"><img src="layout/img/avtar/2569ca4f73aa99656e6d49ad0807aa0c.jpg" alt=""></span><span class="name">LosiSama</span></li>
                        </ul>
                        <a href="#" class="link transition B-wave">عرض المزيد</a>
                    </div>
                </div>

                <div class="col-lg-6 mb-2">

                    <div class="ProfileCard ProfilePosts">
                        <div class="userPost">
                            <img src="layout/img/avtar/1.jpg" alt="" class="avatar avatar-sm">
                            <div class="userNameTime">
                                <a href="#" class="name">SotaroSama</a>
                                <span class="time">منذ أسبوع</span>
                            </div>
                            <div class="prefix">أخبار المانجا</div>
                        </div>

                        <div class="mainPost">
                            <a href="#">أعضاء سابقون لاستوديو جيبلي ينشرون فيلم بصبغة الأولومبيات!</a>
                            <p>بالآونة الأخيرة بدأت اليابان في الاحتفال باقتراب الأولومبيات والبار-أولومبيات التي كان يجب أن تُقام بالعام الماضي لولا فيروس كورونا الذي عمل على تعطيل كل شيء وأي شيء في حياة البشر وقتها...</p>
                            <img src="layout/img/news/2.jpg" alt="">
                        </div>

                        <div class="footerPost">
                            <div class="status">
                                <span class="eye"><i class="fa fa-eye"></i> 212</span>
                                <span class="heart"><i class="fa fa-heart"></i> 21</span>
                            </div>
                            <div class="comment">
                                <h5>المشاركون</h5>
                                <ul>
                                    <li><img src="layout/img/avtar/1.jpg" alt="" class="avatar-sm-x1"></li>
                                    <li><img src="layout/img/avtar/2.png" alt="" class="avatar-sm-x1"></li>
                                    <li><img src="layout/img/avtar/3.jpg" alt="" class="avatar-sm-x1"></li>
                                    <li><img src="layout/img/avtar/5.jfif" alt="" class="avatar-sm-x1"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="ProfileCard ProfilePosts mt-3">
                        <div class="userPost">
                            <img src="layout/img/avtar/1.jpg" alt="" class="avatar avatar-sm">
                            <div class="userNameTime">
                                <a href="#" class="name">SotaroSama</a>
                                <span class="time">منذ أسبوع</span>
                            </div>
                            <div class="prefix">أخبار المانجا</div>
                        </div>

                        <div class="mainPost">
                            <a href="#">مانجا JUJUTSU KAISEN تعود قريبًا من جديد!</a>
                            <p>أنمي JUJUTSU KAISEN  صدر في الفترة الأخيرة واستطاع أن يحقق نجاحًا ملحوظًا في صناعة الأنمي، بل صار موجة في حد ذاته، ويقول البعض حتى الآن أنه أعاد تعريف تصنيف الشونين بشكلٍ عام. وسواء اختلفت أو اتفقت مع ذلك الرأي، فلا يمكن القول عن المانجا أي شيء سوى أنها تحفة فنية بكل ما تحمل الكلمة من معنى....</p>
                            <img src="layout/img/news/3.jpg" alt="">
                        </div>

                        <div class="footerPost">
                            <div class="status">
                                <span class="eye"><i class="fa fa-eye"></i> 212</span>
                                <span class="heart"><i class="fa fa-heart"></i> 21</span>
                            </div>
                            <div class="comment">
                                <h5>المشاركون</h5>
                                <ul>
                                    <li><img src="layout/img/avtar/1.jpg" alt="" class="avatar-sm-x1"></li>
                                    <li><img src="layout/img/avtar/2.png" alt="" class="avatar-sm-x1"></li>
                                    <li><img src="layout/img/avtar/3.jpg" alt="" class="avatar-sm-x1"></li>
                                    <li><img src="layout/img/avtar/5.jfif" alt="" class="avatar-sm-x1"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 mb-2">
                    <div class="ProfileCard fromSar7ne">
                        <h5 class="title">صارحني</h5>
                        <div id="ClickFromSar7ne" class="more fas fa-ellipsis-h"></div>
                        <div class="profileFrom mt-3">
                            <textarea id="sar7ne" class="form-control" placeholder="انقر هنا وصارح SotaroSama"></textarea>
                            <div class="d-flex align-items-center mt-2">
                                <div class="custom-control custom-checkbox position-relative">
                                    <input type="checkbox" name="accept" class="custom-control-input" id="accept" style="position: absolute; right: 0; top: 7px;" required="required">
                                    <label class="custom-control-label text-justify" style="padding-right: 20px;" for="accept">
                                        <small class="text-muted">
                                            أؤكد أنني قرأت ووافقت على الشروط والأحكام الخاصة بالخدمة "صارحني".
                                        </small>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" id="ClickSar7ne" class="btn nx-notify B-wave">
                                <div id="SendSar7ne" class="spinner-border spinner-border-sm d-none" role="status"> <span class="sr-only">Loading...</span> </div>
                                <span>إرسال</span>
                            </button>
                            <div id="countSar7neText">0</div>
                        </div>
                    </div>

                    <div class="ProfileCard ListTopicSar7ne mt-2">
                        <h5 class="title">المصارحات <b>2</b></h5>
                        <div class="box">

                            <div class="topic">
                                <div class="future">
                                    <div class="user">
                                        <img src="layout/img/avtar/1.jpg" alt="" class="avatar-sm border-0">
                                        <div class="nameTime">
                                            <span class="name">SotaroSama</span>
                                            <span class="time">منذ 3 أيام</span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <div class="sender">
                                            <p>أحبك ياقلبي<3</p>
                                        </div>
                                        <p>سبحان الذي أحببك فيني.</p>
                                    </div>
                                </div>
                                <div id="ClickFromSar7neReboat1" class="fas fa-flag report"></div>
                            </div>

                            <div class="topic">
                                <div class="future">
                                    <div class="user">
                                        <img src="layout/img/avtar/1.jpg" alt="" class="avatar-sm border-0">
                                        <div class="nameTime">
                                            <span class="name">SotaroSama</span>
                                            <span class="time">منذ 3 أيام</span>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <div class="sender">
                                            <p>أحبك ياقلبي<3</p>
                                        </div>
                                        <p>سبحان الذي أحببك فيني.</p>
                                    </div>
                                </div>
                                <div id="ClickFromSar7neReboat1" class="fas fa-flag report"></div>
                            </div>
                            
                        </div>
                        <a href="#" class="link transition B-wave waves-effect waves-float waves-block">عرض المزيد</a>
                        <script>
                            $('#ClickFromSar7neReboat1').click(function () {
                                $('#Tool-TypeModal').modal('show');
                                $('.containerModal').append('<div id="report"> <h4>من تريد أن تبلغ؟</h4> <div id="ClickReportQuestion" class="options mt-3 transition B-wave waves-effect waves-float waves-block">الإبلاغ عن السؤال</div> <div class="options mt-2 transition B-wave waves-effect waves-float waves-block">الإبلاغ عن الجواب</div> </div>');
                            });
                            
                            $(document).on("click", "#ClickReportQuestion" , function() {
                                $('#report').remove();
                                $('.containerModal').html('<div id="report"><h4>نوع البلاغ</h4><ul class="ReportMenu"> <li class="mt-3 rep">🤬 الإساءة او الكراهية</li>  <li class="mt-2 rep">🙅 يحتوي على معلومات خاصة</li> <li class="mt-2 rep">👮 التهديد او مخالفة القوانين</li> </ul></div>');
                            });

                            $(document).on("click", ".rep" , function() {
                                $('#report').remove();
                                $('.containerModal').html('<div id="report"><h4>تم إبلاغ الإدارة</h4><p style="font-size: 12px; margin-top: 1rem;">ستصلك رسالة قريبًا على البريد الإلكتروني فيما يتعلق بالبلاغ!</p></div>');
                            });
                        </script>
                    </div>
                </div>
            </div>

            <script>
                //send messgea sar7ne

                var $count = document.getElementById('countSar7neText')
                    $textarea = document.getElementById('sar7ne');
                    $textarea.oninput = function () {
                        $count.innerHTML = 0 + this.value.length;
                        if ($count.innerHTML > 250 || $count.innerHTML < 1) {
                            $count.classList.add('active');
                        }else{
                            $count.classList.remove('active');
                        }
                    };
                $('#ClickSar7ne').click(function () {
                    if (document.getElementById("accept").checked == true){
                        if ($('#sar7ne').val() != ''){
                            if(document.getElementById('sar7ne').value.length > 250 || document.getElementById('sar7ne').value.length < 2){
                                Notiflix.Notify.Failure('الحد المسموح لعدد النصوص من 1 إلى 250 فقط!');
                            }else{
                                $('#ClickSar7ne>#SendSar7ne').removeClass("d-none");
                                $('#ClickSar7ne>span').addClass("d-none");

                                setTimeout(function(){
                                    $('#ClickSar7ne>#SendSar7ne').addClass("d-none");
                                    $('#ClickSar7ne>span').removeClass("d-none");
                                    Notiflix.Notify.Success('تم إرسال الرسالة بالنجاح!');
                                },1000);
                            }
                        }else{
                            Notiflix.Notify.Failure('يجب إضافة نص لتتمكن من إرسال الرسالة!');
                        }
                    }else{
                        Notiflix.Notify.Failure('يجب الموافقة على الشروط لإرسال الرسالة.');
                    }
                });
            </script>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>