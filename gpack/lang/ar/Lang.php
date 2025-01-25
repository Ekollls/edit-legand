<?php
	require_once('UI/Login.php');
	require_once('UI/Register.php');
	require_once('UI/Footer.php');
	require_once('UI/ToolBar.php');
	require_once('UI/Support.php');
	require_once('UI/Errors.php');
	require_once('UI/Admin.php');
	require_once('UI/Build.php');
	require_once('UI/News.php');
	require_once('UI/Plus.php');
	require_once('UI/Map.php');
	require_once('UI/Nachrichten.php');
	require_once('UI/Options.php');
	require_once('UI/Manual.php');

define("BUILDING_BUILDING","ساخت:");
define("BUILDING_COMPLETE","ساخت فوری");
define("BUILDING_LEVEL","سطح");
define("BUILDING_QUEUE","ردیف");
define("BUILDING_TIMER","ساعت. پایان در ");
define("BUILDING_ARCHITECT","ساخت");
define("SIDEINFO_HERO1","قهرمان شما فوت شده است");
define("SIDEINFO_HERO2","قهرمان سالم است");
define("SIDEINFO_HERO3","قهرمان در روستای آشیانه است");
define("SIDEINFO_HERO4","قهرمان شما در روستای فعلی وجود دارد");
define("SIDEINFO_HERO5","خارج از روستا");
define("SIDEINFO_HERO5H","در روستا");
define("SIDEINFO_HERO6","روستای قهرمان اصلی است");
define("SIDEINFO_HERO7","قهرمانی وجود ندارد.");
define("SIDEINFO_HERO8","نمای کلی");
define("SIDEINFO_HERO9","ماجراجویی");
define("SIDEINFO_HERO10","ماجراجویی‌های در دسترس");
define("SIDEINFO_HERO11","سلامت");
define("SIDEINFO_HERO12","تجربه");



define("LANG_UR","ar-AE");
define("DIRECTION","rtl");
define("DIRECTION_2","right");
define("LOCATION_NAME","Global - EN");

define("INCLUDED","");
define("INS0","قم بتغيير الصلاحيات للمجلدات الأتية (CHMOD)");
define("INS1","بعد التثبيت");
define("INS2","قم بحذف مجلد install");
define("INS3","وارجع صلاحيات مجلد GameEngine إلي 644");
define("INS4","Along with the installation/usage of this game, you shall be fully responsible for any legal results that may raised initiated by the owners of any unlicensed content you permit your copy of this game to publish.");
define("INS5","Neither the team that created this script nor the team that customised it to create this distribution/release shall be responsible for any damage done to your computer/server system.");
define("INS6","All code was confirmed to be running correctly by the creation team without any visible security risk they were aware of at the time the released it. Similarly for the customisation team who customised it to create this distribution/release.");
define("INS7","Users are asked to review the code on their own accord and behalf.");
define("INS8","You have no rights to edit copyright notices or/and claim this script as your own.");
define("INS9","Last but not least, Enjoy.");
define("INS10","Error creating constant.php check cmod.");
define("INS11","الشهر");
define("INS12","اليوم");
define("INS13","السنة");
define("INS14","الساعة");
define("INS15","دقيقة");
define("INS16","ثانية");
define("INS17","عنوان السيرفر:");
define("INS18","السرعة:");
define("INS19","سرعة القوات:");
define("INS20","حمولة التجار (1 = 1x...):");
define("INS21","حجم الخريطة:");
define("INS21M","25x25");
define("INS22","50x50");
define("INS23","100x100");
define("INS24","150x150");
define("INS25","200x200");
define("INS26","250x250");
define("INS27","300x300");
define("INS28","350x350");
define("INS29","400x400");
define("INS30","الرئيسية:");
define("INS31","حماية المبتدئين");
define("INS31M","2 ساعة");
define("INS32","3 ساعة");
define("INS33","5 ساعة");
define("INS34","8 ساعة");
define("INS35","10 ساعة");
define("INS36","12 ساعة");
define("INS37","24 ساعة (1 يوم)");
define("INS38","48 ساعة (2 يوم)");
define("INS39","72 ساعة (3 يوم)");
define("INS40","120 ساعة (5 يوم)");
define("INS41","حجم المخازن:");
define("INS42","المنطقة الرمادية (بعد كم مربع) *اتركها كما هي:");
define("INS43","المدير");
define("INS44","إظهار الادارة بالاحصائيات:");
define("INS45","اظهار");
define("INS46","اخفاء");
define("INS47","قاعدة البيانات");
define("INS48","المضيف:");
define("INS49","اسم المستخدم:");
define("INS50","كلمة المرور:");
define("INS51","قاعدة البيانات:");
define("INS52","بيانات البلاس");
define("INS53","وقت ترافيان بلاس:");
define("INS54","12 ساعة");
define("INS55","1 يوم");
define("INS56","2 يوم");
define("INS57","3 ايام");
define("INS58","4 ايام");
define("INS59","5 ايام");
define("INS60","6 ايام");
define("INS61","7 ايام");
define("INS62","+25% وقت زيادة:");
define("INS63","12 ساعة");
define("INS64","1 يوم");
define("INS65","2 يوم");
define("INS66","3 ايام");
define("INS67","4 ايام");
define("INS68","5 ايام");
define("INS69","6 ايام");
define("INS70","7 ايام");
define("INS71","تشغيل بيع الموارد؟");
define("INS72","تفعيل");
define("INS73","تعطيل");
define("INS74","تشغيل بيع النقاط الحضارية؟");
define("INS75","تفعيل");
define("INS76","تعطيل");
define("INS77","كمية الموارد المباعة من كل نوع");
define("INS78","تكلفة بيع الموارد");
define("INS79","سعر النقاط الحضارية");
define("INS80","كمية النقاط الحضارية المباعة");
define("INS81","الذهب عند التسجيل");
define("INS82","سكان القرية المدعوة للحصول على الذهب");
define("INS83","كمية الذهب للدعوة");
define("INS84","خيارات السيرفر");
define("INS85","موعد البدأ:");
define("INS86","Timestamp date (generation will be from UTC+0!)");
define("INS87","التحف:");
define("INS88","(Timestamp date)");
define("INS89","قري المعجزة:");
define("INS90","Timestamp date ");
define("INS91","مخططات البناء:");
define("INS92","Timestamp date");
define("INS92M","سرعة توليد النقاط الحضارية:");
define("INS93","عالية");
define("INS94","منخفضة");
define("INS95","المهام");
define("INS96","تشغيل");
define("INS97","تعطيل");
define("INS98","Max number cache images for map");
define("INS99","Max number cache images for hero");
define("INS100","Quality of the map ");
define("INS101","تدريب القوات فورا اذا كان وقت التدريب 0 ثانية");
define("INS102","نعم");
define("INS103","لا");
define("INS104","وقت المزادات");
define("INS105","نسب الواحات");
define("INS106","Begginer protection will be longest every 12 hours on ...(in seconds)");
define("INS107","If your host doesnt have big amout of space please consider! ");
define("INS108","1000 pictures=~80MB");
define("INS109","If your host doesnt have big about of memory RAM place consider");
define("INS110","1000 Pictures=~2.60ГБ");
define("INS111","Perfect quality - 100,medium - 75(Picture will be 3 times worse compared with maximum)");
define("INS112","Populate Oasis");
define("INS113","تحذير");
define("INS114",": قد تستغرق العملية بعض الوقت، لا تقم بإغلاق الصفحة!");
define("INS115","حساب الصياد");
define("INS116","الاسم:");
define("INS117","كلمة المرور:");
define("INS118","ملحوظة: تذكر كلمة السر لأنك ستحتاجها لدخول اللوحة");
define("INS119","Error creating wdata. Check configuration or file.");
define("INS120","انشاء بيانات الخريطة");
define("INS121","تحذير");
define("BUILDING_CANCEL", "الغاء");
define("INS122",": قد تستغرق العملية بعض الوقت، لا تقم بإغلاق الصفحة!");
define("INS123","شكرا لتثبيت السكربت.");
define("INS124","من فضلك احذف مجلد install.");
define("INS125","تم تثبيت السكربت. تم مليء القاعدة, تستطيع الأن تشغيل السيرفر.");
define("INS126","Error importing database. Check configuration.");
define("INS127","انشاء جداول القاعدة");
define("INS128","قد تستغرق العملية بعض الوقت، لا تقم بإغلاق الصفحة!");
define("INS129","How much adventures gives per day?");

define("CLANG","یک زبان امتخاب کنید:");
define("MULTI_RULES","ممنوع است:<br/>بیش از 1 حساب در 1 IP ثبت کنید.<br/>ما جالب نیستیم: شما با برادر/خواهر/خانواده و غیره بازی می کنید: 1 IP - 1 حساب.< br/>اکانت های ثبت نام ممنوع با کمک دوستان/از آی پی های جعلی،<br/>اکانت هایی مانند این پیدا می شوند و مجازات می شوید:<br/> مثلا 50% از سربازان.<br /> صادق باشید و وجدان داشته باشید بازی عادلانه.");
define("OK","Ok");
define("CROPFINDER","جستجوگر گندم");
define("MAP","نقشه");
define("MINIMAP","نقشه کوچک");
define("GO","برو");
define("GO_TO","برو به");
define("PLEASE_WAIT","لطفا صبر کنید");


define("CATEGORY","زبان");
define("EDITPROFILE","ویرایش پروفایل");
define("COORDIANTES","هماهنگی");
define("POPULATION","جمعیت");
define("WOOD","چوب");
define("ABONDENDVALLY","دره متروکه");
define("UNOCCUPIEDOASES","آبادی تخسیر نشده");
define("UNOCCUPIEDOASIS","آبادی تسخیر نشده");
define("OCCUPIEDOASES","آبادی تسخیر شده");
define("OCCUPIEDOASIS","آبادی تسخیر شده");
define("ABANDONEDVALLEY","دره متروکه");
define("BUILDRALLYPOINTTORAID","(احداث یک اردوگاه)");
define("PLAYER","بازیکن");
define("TRIBE","نژاد");
define("VILLAGE","دهکده");
define("ALLIANCE","اتحاد");
define("SIDEINFO_ADVENTURES","ماجراجویی");
define("SIDEINFO_AUCTIONS","حراجی");
define("SIDEINFO_PROFILE","پروفایل");
define("SIDEINFO_ALLIANCE","اتحاد");
define("SIDEINFO_ALLY_FORUM","انجمن متحدان");
define("SIDEINFO_CHANGE_TITLE","برای تغییر نام دهکده دوبار کلیک کنید");
define("SIDEINFO_CHANGEVIL_TITLE","تغییر نام دهکده");
define("SIDEINFO_CHANGEVIL_LABEL","نام جدید دهکده");
define("SIDEINFO_CHANGEVIL_BTN","پذیرفتن");
define("HEADER_MESSAGE_NEW","جدید");


define("MAINMENU","صفحه اصلی");


define("POPUALTION","جمعیت");
define("VILLAGES","دهکده ها");
//MAIN MENU
define("TRIBE1","رومی ها");
define("TRIBE2","توتن ها");
define("TRIBE3","گول ها");
define("TRIBE4","وحشی ها");
define("TRIBE5","ناتار ها");
define("TRIBE6","مصریان");
define("TRIBE7","هون ها");

define("PRISONERS","زندانیان");
define("PRISONERSIN","زندانیان در");
define("PRISONERSFROM","زندانیان از");
define("HOME","صفحه اصلی");
define("PW_ER","رمز اشتباه است");
define("INSTRUCT","دستورالعمل ها");
define("ADMIN_PANEL","پنل ادمین");
define("MASS_MESSAGE","پیام دسته جمعی");
define("LOGOUT","خروج");
define("PROFILE","پروفایل");
define("SUPPORT","پشتیبانی");
define("RULES","قوانین");

define("P","P");
define("L","l");
define("U","u");
define("S","s");
define("UPDATE_T_10","به روز رسانی تاپ 10");
define("SYSTEM_MESSAGE","پیام سیستمی");
define("TRAVIAN_PLUS","Travian <b><font color=\"#71D000\">P</font><font color=\"#FF6F0F\">l</font><font color=\"#71D000\">u</font><font color=\"#FF6F0F\">s</font></b>");
define("CONTACT","تماس با ما!");
define("HEADER_MESSAGES_NEW","جدید");

define("HEADER_MESSAGES","پیام ها");
define("HEADER_PLUS","پلاس");
define("HEADER_ADMIN","ادمین");
define("HEADER_PLUSMENU","منوی پلاس");
define("HEADER_NOTICES","'گزارش ها");
define("HEADER_STATS","آمار");
define("HEADER_MAP","نقشه");
define("HEADER_DORF2","مرکز دهکده");
define("HEADER_DORF1","منابع");
define("HEADER_GOLD","طلا");
define("HEADER_SILVER","نقره");
define("HEADER_NIGHT","شب");
define("HEADER_DAY","روز");
define("HEADER_NOTICES_NEW","گزارش جدید ");
define("NO_PERMISSION","بدون مجوز و اجازه");



define("LOGOUT_TITLE","خروج با موفقیت انجام شد!");
define("LOGOUT_H4","از بازدید شما متشکریم");
define("LOGOUT_DESC","آیا شخص دیگری از این دستگاه استفاده می‌کند؟ برای امنیت اطلاعات خود، بهتر است کوکی‌ها را حذف کنید::");
define("LOGOUT_LINK","حذف فایل‌های تعریف ارتباط");
define("PREREG1","سرعت نیروها");
define("PREREG2","Administator");
define("PREREG3","مدال ها در ");
define("PREREG4","ساعت شروع سرور در: ");
define("PREREG5","برای شروع: ");

define("LOGIN_PW_SENT", "رمز عبور ارسال شد");

define("REGISTER_USERINFO","ثبت نام");
define("REGISTER_USERNAME","نام");
define("REGISTER_EMAIL","ایمیل");
define("REGISTER_PASSWORD","رمز");
define("REGISTER_STARTER","");
define("REGISTER_SELECT_TRIBE","انتخاب نژاد");
define("REGISTER_LOCATION","موقعیت");
define("REGISTER_NE","شمال-شرقی");
define("REGISTER_NW","شمال-غربی");
define("REGISTER_SE","جنوب-شرقی");
define("REGISTER_SW","جنوب-غربی");
define("REGISTER_RANDOM","تصادفی");
define("REGISTER_MOREINFO","شرایط و ضوابط");
define("REGISTER_CLOSED","ثبت نام بسته شده است. شما نمی توانید در این سرور ثبت نام کنید.");
define("newmsg","پیام جدید:");
//MENU
define("REG","ثبت نام");
define("FORUM","انجمن");
define("CHAT","چت");
define("IMPRINT","چاپ کردن");
define("MORE_LINKS","پیوندهای بیشتر");
define("TOUR","تور بازی");
//PLUS
define("PLUS0","امکانات پلاس");
define("PLUS1","بررسی اجمالی");
define("PLUS2","مدت زمان");
define("PLUS3","هزینه");
define("PLUS4","عمل");
define("PLUS5","شما دارید");
define("PLUS6","سکه های طلا");
define("PLUS7","باقی مانده است:");
define("PLUS8","روز");
define("PLUS9","ساعت");
define("PLUS10","دقیقه");
define("PLUS11","طلا");
define("PLUS12","فعالسازی");
define("PLUS13","گسترش");
define("PLUS14","طلای ناکافی");
define("PLUS15","تولید: چوب");
define("PLUS16","تولید: خشت");
define("PLUS17","تولید: آهن");
define("PLUS18","تولید: گندم");
define("PLUS19","تبادل 1:1 ");
define("PLUS20","فوری");
define("PLUS21","به بازار");
define("PLUS22","تبدیل طلا به نقره");
define("PLUS23","تبادل");
define("PLUS24","تمام عملیات ساخت و ساز و تحقیقات را به پایان برسانید");
define("PLUS25","پایان یافت");
define("PLUS26","خرید");
define("PLUS27","امتیاز فرهنگی");
define("PLUS28","خرید");
define("PLUS29","هر نوع منابع");
define("PLUS30","روز");
define("PLUS31","کلوپ طلایی");
define("PLUS32","امکانات کلوپ طلایی:");
define("PLUS33","1. لیست مزارع");
define("PLUS34","2. روش‌های تجربه‌کسب");
define("PLUS35","3. فرار اقوام");
define("PLUS36","4. اکتشاف قوم‌های همسایه");
define("PLUS37","5. کمک به ساخت");
define("PLUS38","6. x3 تجارت");
define("PLUS39","تمام ویژگی‌های ویژه رایگان!");
define("PLUS40","در طول بازی");
define("PLUS41","فعال‌ سازی");



//active
define("ACTIV1","سلام");
define("ACTIV2","ثبت نام با موفقیت انجام شد. در چند دقیقه آینده ایمیلی حاوی اطلاعات دسترسی دریافت خواهید کرد.<br /><br /> ایمیل به آدرس زیر ارسال خواهد شد:");

define("ACTIV3","برای فعال کردن اکانت خود کد را وارد کنید یا روی لینک موجود در ایمیل خود کلیک کنید.");
define("ACTIV4","کد فعال سازی");
define("ACTIV5","ایمیلی دریافت نکردید ؟");
define("ACTIV6","گاهی اوقات ایمیل به پوشه اسپم منتقل می شود. برای راهنمایی بیشتر کلیک کنید");
define("ACTIV7","اینجا");
define("ACTIV8","می توانید با <u>آدرس ایمیل متفاوت</u> ثبت نام را لغو کرده و دوباره ثبت نام کنید.
سپس کد فعال سازی دوباره ارسال می شود");
define("ACTIV9","حساب شما با موفقیت فعال شد.</p><p class=\"f9\">این لینک را دنبال کنید<a href=\"login.php\">وارد شدن</a>");
define("ACTIV10","یا رمز عبور اشتباه است یا ثبت نام قبلاً حذف شده است.");
//ERRORS
define("USRNM_EMPTY","(نام کاربری خالی است)");
define("USRNM_TAKEN","(نام کاربری استفاده شده است)");
define("USRNM_SHORT","(نام کاربری کوتاه است)");
define("USRNM_CHAR","(حاوی کاراکترهای غیرمجاز است)");
define("PW_EMPTY","(کلمه رمز را وارد کنید)");
define("PW_SHORT","(کلمه رمز کوتاه است)");
define("PW_INSECURE","(کلمه رمز آسان است، کلمه رمزی دشوارتر انتخاب کنید.)");
define("EMAIL_EMPTY","(ایمیل را وارد کنید)");
define("EMAIL_INVALID","(ایمیل نامعتبر است)");
define("EMAIL_TAKEN","(ایمیل مورد استفاده قرار گرفته است)");
define("TRIBE_EMPTY","<li>نژاد را انتخاب کنید.</li>");
define("AGREE_ERROR","<li>برای ثبت نام باید با قوانین بازی و شرایط و ضوابط عمومی موافقت کنید.</li>");
define("LOGIN_USR_EMPTY","نام کاربری را وارد کنید.");
define("LOGIN_PASS_EMPTY","کلمه رمز را وارد کنید.");
define("EMAIL_ERROR","ایمیل موجود نیست");
define("PASS_MISMATCH","کلمات رمز مطابقت ندارند");
define("ALLI_OWNER","لطفا قبل از حذف، هگمونی را به دست کسی دیگر بسپارید.");
define("SIT_ERROR","وکیل قبلا انتخاب شده است");
define("USR_NT_FOUND","نام یافت نشد.");
define("LOGIN_PW_ERROR","کلمه رمز اشتباه است.");
define("WEL_TOPIC","نکات و اطلاعات مفید ");
define("ATAG_EMPTY","برچسب خالی");
define("ANAME_EMPTY","نام خالی");
define("ATAG_EXIST","برچسب استفاده شده");
define("ANAME_EXIST","نام استفاده شده");


define("CUR_PROD","تولید فعلی");
define("NEXT_PROD","تولید در سطح بعدی ");

//BUILDINGS
define("B1","هیزم شکن");
define("B1_DESC","هیزم شکن، برای برش درختان و تولید چوب مورد استفاده قرار می‌گیرد. با استقرار هیزم شکن، تولید چوب افزایش می‌یابد.");
define("B2","آجرسازی");
define("B2_DESC","خشت از آجرسازی به دست می‌آید. با استقرار آجرسازی، تولید خشت افزایش می‌یابد.");
define("B3","معدن آهن");
define("B3_DESC","در معدن آهن آهن پایدار استخراج می‌شود. با ارتقای معدن، تولید آهن در هر ساعت افزایش می‌یابد.");
define("B4","گندم زار");
define("B4_DESC","در مزرعه، غذایی برای ساکنان روستا تولید می‌شود. با توسعه مزرعه، تولید غذایی افزایش می‌یابد.");


//DORF1
$lang['dorf'] = array(
	'D1' => 'چوب',
   'D2' => 'خشت',
   'D3' => 'آهن',
   'D4' => 'گندم',
   'D5' => 'گندم زار',
	
);
define("LUMBER","چوب");
define("CLAY","خشت");
define("IRON","آهن");
define("CROP","گندم");
define("LEVEL","سطح");
define("CROP_COM",CROP." مصرف");
define("PER_HR","در ساعت");
define("PROD_HEADER","تولید در ساعت");
define("MULTI_V_HEADER","دهکده ها");
define("ANNOUNCEMENT","اعلامیه");
define("GO2MY_VILLAGE","برو به دهکده من");
define("VILLAGE_CENTER","مرکز دهکده");
define("FINISH_GOLD","اتمام همه ساخت و تحقیقات به عوض پول طلا؟");
define("WAITING_LOOP","(انتظار)");
define("HRS","(ساعت)");
define("DONE_AT","انجام شد در");
define("CANCEL","لغو");
define("LOYALTY","وفاداری");
define("CALCULATED_IN","محاسبه شده در");
define("SEVER_TIME","زمان سرور:");


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
	define("U0","قهرمان");

	//ROMAN UNITS
	define("U1","سرباز لژیون");
	define("U2","محافظ");
	define("U3","شمشیرزن");
	define("U4","خبرچین");
	define("U5","شوالیه");
	define("U6","شوالیه سزار");
	define("U7","دژکوب");
	define("U8","منجنیق آتشین");
	define("U9","سناتور");
	define("U10","مهاجر");

	//TEUTON UNITS
	define("U11","گرزدار");
	define("U12","نیزه دار");
	define("U13","تبرزن");
	define("U14","جاسوس");
	define("U15","دلاور");
	define("U16","شوالیه توتن");
	define("U17","دژکوب");
	define("U18","ممنجنیق آتشین");
	define("U19","سناتور");
	define("U20","مهاجر");

	//GAUL UNITS
	define("U21","سرباز پیاده");
	define("U22","شمشیر زن");
	define("U23","ردیاب");
	define("U24","رعد");
	define("U25","کاهن سوار");
	define("U26","شوالیه گول");
	define("U27","دژکوب");
	define("U28","منجنیق");
	define("U29","ریس دهکده");
	define("U30","مهاجر");

	//NATURE UNITS
	define("U31","موش");
	define("U32","عنكبوت");
	define("U33","مار");
	define("U34","خفاش");
	define("U35","گراز وحشی");
	define("U36","گرگ");
	define("U37","خرس");
	define("U38","تمساح");
	define("U39","ببر");
	define("U40","فيل");

	//NATARS UNITS
	define("U41","نیزه دار ناتار");
	define("U42","تیغ پوش ناتار");
	define("U43","محافظ ناتار");
	define("U44","پرنده های جاسوس");
	define("U45","اسب دفاع ناتار");
	define("U46","شوالیه ناتار");
	define("U47","فیل جنگی ناتار");
	define("U48","منجنیق برزگ ناتار");
	define("U49","امپراتور ناتار ها");
	define("U50","مهاجر ناتار");

	//Egyptian UNITS
	define("U51","نیروی برده‌ها");
	define("U52","نگهبان خاکستر");
	define("U53","جنگجوی قداره‌زن");
	define("U54","کاوشگر سوپدو");
	define("U55","گارد آنهور");
	define("U56","ارابه ریشف");
	define("U57","دژکوب");
	define("U58","منجنیق سنگ‌انداز");
	define("U59","فرمانروا");
	define("U60","مهاجر");

	//Huns UNITS
	define("U61","مزدور");
	define("U62","کمان‌دار");
	define("U63","دیدبان");
	define("U64","استپ‌سوار");
	define("U65","تیرانداز");
	define("U66","مهاجم");
	define("U67","دژکوب");
	define("U68","منجنیق");
	define("U69","خان هون");
	define("U70","مهاجر");


	define("U99","تله ها");
//INDEX.php

define("PLAYER_STATISTICS","آمار بازیکنان");


define("P_ONLINE","بازیکنان آنلاین: ");
define("P_TOTAL","بازیکنان در کل: ");
define("CHOOSE","لطفا یک سرور انتخاب کنید.");

//define("STARTED"," The server started ". round((time()-COMMENCE)/86400) ." days ago.");

//ANMELDEN.php
define("NICKNAME","نام کاربری");

define("INVITED","مدعو من قبل (إذا وجد)");
define("EMAIL","ایمیل");
define("PASSWORD","رمز عبور");
define("ROMANS","رومی ها");
define("TEUTONS","توتن ها");
define("GAULS","گول ها");
define("NW","شمال شرقی");
define("NE","شمال غربی");
define("SW","جنوب شرقی");
define("SE","جنوب غربی");
define("RANDOM","تصادفی");
define("ACCEPT_RULES","موافق هستم با <a href='rules.php' target='_blank'>شرایط و ضوابط</a> بازی.");
define("ONE_PER_SERVER","هر بازیکن ممکن است فقط یک حساب در هر سرور داشته باشد.");
define("BEFORE_REGISTER","قبل از ثبت یک حساب کاربری، باید آن را بخوانید <a href='../anleitung.php' target='_blank'>قوانین</a>");
define("MULTIBAN","هر یک نفر یک حساب .همه مولتی اکانت ها مسدود خواهند شد!");
define("HOURS","ساعت");
define("SIGN1","ثبت");
define("SIGN2","انتخاب نژاد");
define("SIGN3","منطقه را انتخاب کنید");
define("SIGN4","صفحه اصلی");
define("SIGN5","ثبت نام");
define("SIGN6","ورود");
define("SIGN7","فعال سازی حساب");
define("SIGN8","بانک");

//QUESTS
define("QST0","جستجو");
define("QST1","وظیفه");
define("QST2","چوب بر");
define("QST3","ساخت سطح کارخانه چوب <b>5</b>");
define("QST4","حاصل");
define("QST5","ساخت سطح زراعی <b>3</b>");
define("QST6","فولاد و گل");
define("QST7","ساخت حفره گل و معدن فولاد به سطح <b>4</b>");
define("QST8","ساختمان اصلی");
define("QST9","ساخت سطح ساختمان اصلی <b>8</b>");
define("QST10","اقتصادی");
define("QST11","ساخت انبار و انبار غلات سطح <b>4</b>، سطح بازار <b>1</b>");
define("QST12","نظامی سازی");
define("QST13","ساخت اردوگاه سطح <b>1</b>، سطح پادگان <b>3</b>");
define("QST14","حفاظت قابل اعتماد");
define("QST15","100 واحد را آموزش دهید و سطح دیوار <b>8</b> را بسازید");
define("QST16","خون اول");
define("QST17","<b>1000</b> امتیاز حمله بگیرید.");
define("QST18","زنده باد همسفر!");
define("QST19","به یکی از گروه های ما سر بزنید");
define("QST20","پایان وظیفه ها!");
define("QST21","در این لحظه دیگر هیچ ماموریتی وجود ندارد. در آینده ماموریت های بیشتری وجود خواهد داشت، اما اکنون - بازی خوبی است! :)");
define("QST22","عالی! پاداش شما:");
define("QST23","به وظیفه بعدی!");

//ATTACKS ETC.
define("TROOP_MOVEMENTS","حرکت نیروها:");
define("ARRIVING_REINF_TROOPS","نیروی کمکی در راه است");
define("ARRIVING_REINF_TROOPS_SHORT","را افزایش می دهد");
define("OWN_ATTACKING_TROOPS","خود نیروهای مهاجم");
define("ATTACK","المهاجم");
define("OWN_REINFORCING_TROOPS","داشتن نیروهای تقویت کننده");
define("TROOPS_DORF","نیروها:");


//LOGIN.php
define("COOKIES","شما باید کوکی‌ها را فعال کرده باشید تا بتوانید وارد شوید. اگر این رایانه را با افراد دیگر به اشتراک می‌گذارید، برای ایمنی خود باید بعد از هر جلسه از سیستم خارج شوید.");
define("NAME","نام");
define("PW_FORGOTTEN","رمز عبور فراموش کردید؟");
define("PW_REQUEST","سپس می توانید یک مورد جدید درخواست کنید که به آدرس ایمیل شما ارسال می شود.");
define("PW_GENERATE","همه فیلدها لازم است");
define("EMAIL_NOT_VERIFIED","ایمیل تایید نشد!");
define("EMAIL_FOLLOW","این لینک را دنبال کنید تا حساب کاربری خود را فعال کنید.");
define("VERIFY_EMAIL","تایید ایمیل.");
define("LOGIN_SERVER_START","سرور شروع خواهد شد:");
define("LOGIN_FOR_GAME","وارد شدن");

//404.php
define("NOTHING_HERE","هیچ چیز در اینجا نیست!");
define("WE_LOOKED","ما قبلاً 404 بار جستجو کردیم اما چیزی پیدا نکردیم پس دست بکشید");

//TIME RELATED
define("CALCULATED","محاسبه شده در");
define("SERVER_TIME","زمان سرور:");

//MASSMESSAGE.php
define("MASS","پیام گروهی");
define("MASS_SUBJECT","موضوع:");
define("MASS_COLOR","رنگ پیام:");
define("MASS_REQUIRED","تمام فیلدها الزامی هستند");
define("MASS_UNITS","تصاویر (واحدها):");
define("MASS_SHOWHIDE","نمایش/پنهان کردن");
define("MASS_READ","این را بخوانید: پس از افزودن شکلک، باید بعد از شماره چپ یا راست اضافه کنید در غیر این صورت تصویر کار نخواهد کرد");
define("MASS_CONFIRM","تایید");
define("MASS_REALLY","آیا مطمئن هستید که می خواهید یک پیام گروهی ارسال کنید؟");
define("MASS_ABORT","در حال حاضر سقط");
define("MASS_SENT","پیام انبوه ارسال شد");

// Menu items

	define("GAME_TOUR","تور بازی");

	define("FORUM_LINK","http://forum.irantra.ir");
	define("MORE_GAMES","بازی های دیگر");
	define("REGISTER","ثبت نام");
	define("LOGIN","ورود");
	define("MANUAL","کتابچه راهنمای");
	define("TUTORIAL","آموزش");

	define("FAQ","درباره ما");
	define("SPIELREGELN","قوانین بازی");
	define("AGB","مقررات");

	define("LINKS","پیوندها");

	define("INSTRUCTIONS","دستورالعمل ها");
	define("MULTIHUNTER_PANEL","پنل مولتی هانتر");
	define("UPDATE_TOP_TEN","بروزرسانی تاپ 10");

	define("HELP","Help");

// Index


//profile
define("PROFHEAD","");
define("ACC1","رمز عبور");
define("ACC2","رمز عبور قدیمی");
define("ACC3","رمز عبور جدید");
define("ACC4","تعویض ایمیل");
define("ACC5","لطفا آدرس ایمیل قدیمی و جدید خود را وارد کنید. سپس یک قطعه کد را در هر دو آدرس ایمیل دریافت خواهید کرد که باید در اینجا وارد کنید.");
define("ACC6","ایمیل قدیمی");
define("ACC7","ایمیل جدید");
define("ACC8","جانشینان حساب کاربری");
define("ACC9","نماینده می تواند با استفاده از نام مستعار و رمز عبور شما وارد عضویت شما شود. شما مجاز به ثبت نام حداکثر دو نماینده در عضویت خود هستید.");
define("ACC10","نام جانشین");
define("ACC11","جانشین ندارید");
define("ACC12","<td class=\"note\" colspan=\"2\">برای حذف سیتر کلیک کنید <img class=\"del\" src=\"img/x.gif\" title=\"del\" alt=\"del\"></td>");
define("ACC13","حذف حساب بازی");
define("ACC14","در اینجا می توانید عضویت خود را حذف کنید. پس از شروع حذف، سه روز طول می کشد تا عضویت برای همیشه حذف شود. هر زمان که بخواهید می توانید با کلیک بر روی علامت x قرمز، حذف را در طول دوره لغو کنید. تا زمانی که عضویت شما حذف شده است، نمی توانید وارد مزایده شوید یا از صندوقدار استفاده کنید.");
define("ACC15","آیا مطمئن هستید که اکانت را حذف می کنید؟");
define("ACC16","برای تایید رمز حساب را وارد کنید:");
define("ACC17","بله");
define("ACC18","نه");
define("ACC19","حذف بعد از:");
define("ACC20","شما جانشین حساب های زیر هستید");
define("ACC21","جانشین ها");
define("SAVE","ذخیره");
 //menu prof
define("PROFM1","پروفایل عمومی");
define("PROFM2","ویرایش پروفایل");
define("PROFM3","لینک‌ها");
define("PROFM4","حساب کاربری");
define("PROFM5", "ورودها");
define("PROFM6", "وضعیت");
define("PROFM7", "Who");
define("PROFM8", "فعالیت اخیر");
define("PROFM9", "مالک");
define("PROFM10", "قائم مقام");
define("PROFM11", "دوگانه");
define("PROFM12", "شما");
//OVERVIEW
define("OVERVIEW1","بازیکنان");
define("OVERVIEW2","جزئیات");
define("OVERVIEW3","توضیحات");
define("OVERVIEW4","رتبه");
define("OVERVIEW5","نژاد");
define("OVERVIEW6","اتحاد");
define("OVERVIEW7","دهکده");
define("OVERVIEW8","جمعیت");
define("OVERVIEW9","سن");
define("OVERVIEW10","مرد");
define("OVERVIEW11","زن");
define("OVERVIEW12","جنسیت");
define("OVERVIEW13","محل");
define("OVERVIEW14","ویرایش پروفایل");
define("OVERVIEW15","فرستادن پیام");
define("OVERVIEW16","دهکده");
define("OVERVIEW17","نام");
define("OVERVIEW18","جمعیت");
define("OVERVIEW19","رویدادها");
define("OVERVIEW20","پایتخت");
define("OVERVIEW21","مسدود شده");
define("OVERVIEW22","تاریخ تولد");
define("OVERVIEW23","ژانویه");
define("OVERVIEW24","فوریه");
define("OVERVIEW25","مارس");
define("OVERVIEW26","آوریل");
define("OVERVIEW27","مه");
define("OVERVIEW28","ژوئن");
define("OVERVIEW29","جولای");
define("OVERVIEW30","آگوست");
define("OVERVIEW31","سپتامبر");
define("OVERVIEW32","نوامبر");
define("OVERVIEW33","اکتبر");
define("OVERVIEW35","نوشته‌های تقدیری");
define("OVERVIEW36","رتبه‌بندی");
define("OVERVIEW37","هفته");
define("OVERVIEW38","کد");
define("OVERVIEW39","مرد");
define("OVERVIEW40","زن");
//medals
define("MEDAL1","نیروهای حمله‌کننده");
define("MEDAL2","نیروهای دفاعی");
define("MEDAL3","بسته‌بندی‌ها");
define("MEDAL4","دزدان");
define("MEDAL5","10 بهترین حمله‌کننده و دفاعی");
define("MEDAL6","3 بهترین نیروهای حمله‌کننده");
define("MEDAL7","3 بهترین نیروهای دفاعی");
define("MEDAL8","3 بهترین بسته‌بندی‌ها");
define("MEDAL9","3 بهترین دزدان");
define("MEDAL10","بسته‌بندی");
define("MEDAL11","3 بهترین بسته‌بندی‌ها");
define("MEDAL12","10 بهترین نیروهای حمله‌کننده");
define("MEDAL20","روز");
define("DNYA","هفته");
define("TIMES","بار");
define("MEDAL15","");
define("MEDAL16","");
define("MEDAL17","قهرمان");
define("MEDAL18","فروشگاه");
define("MEDAL19","به ترتیب");
define("BONUS","امتیاز");
//statistic..zzzest'
define("STATISTIC1","بازیکنان بزرگ");
define("STATISTIC2","بازیکنان ایجاد نشده‌اند");
define("STATISTIC3","ناموجود");
define("STATISTIC4","اتحادهای بزرگ");
define("STATISTIC5","اتحاد ایجاد نشده‌است");
define("STATISTIC6","امتیاز");
define("STATISTIC7","اتحادهای بزرگ (نیروهای حمله‌کننده)");
define("STATISTIC8","اتحادهای بزرگ (نیروهای دفاعی)");
define("STATISTIC9","بهترین");
define("STATISTIC10","قهرمانان با تجربه بیشتر");
define("STATISTIC11","تجربه");
define("STATISTIC12","قهرمان پیدا نشده‌است");
define("STATISTIC13","بازیکنان بزرگ (نیروهای حمله‌کننده)");
define("STATISTIC14","بازیکنان بزرگ (نیروهای دفاعی)");
define("STATISTIC15","بازیکنان بزرگ (رومی ها)");
define("STATISTIC16","بازیکنان بزرگ (توتن ها)");
define("STATISTIC17","بازیکنان بزرگ (گول ها)");
define("STATISTIC18","منابع");
define("STATISTIC19","بازیکنان");
define("STATISTIC20","کل بازیکنان");
define("STATISTIC21","بازیکنان فعال");
define("STATISTIC22","بازیکنان وجود دار");
define("STATISTIC23","توده‌ها");
define("STATISTIC24","توده");
define("STATISTIC25","ثبت شده");
define("STATISTIC26","نسبت");
define("STATISTIC27","شگفتی جهان");
define("STATISTIC28","بازیکنان");
define("STATISTIC29","اتحادها");
define("STATISTIC30","قهرمانان");
define("STATISTIC31","عمومی");
define("STATISTIC32","آمار");
define("STATISTIC33","یا");
define("STATISTIC34","قبلی");
define("STATISTIC35","بعدی");
define("STATISTIC36","آمار بازیکنان (هیولاها)");
define("STATISTIC37","مدافع");
define("STATISTIC38","دهکده ها");
//alliance
define("ALLIANCE1","گزینه‌ها");
define("ALLIANCE2","تقسیم مقام");
define("ALLIANCE3","تغییر اسم");
define("ALLIANCE4","اخراج بازیکن");
define("ALLIANCE5"," تغییر توضیحات اتحاد");
define("ALLIANCE6","دیپلماسی");
define("ALLIANCE7","دعوت بازیکن");
define("ALLIANCE8","ترک اتحاد");
define("ALLIANCE9","رویدادهای اتحاد");
define("ALLIANCE10","رویداد");
define("ALLIANCE11","تاریخ");
define("ALLIANCE12","برای امنیت، در صورت ترک اتحاد، باید گذرواژه خود را وارد کنید.");
define("ALLIANCE13","مذاکرات اتحاد");
define("ALLIANCE14","نمایش اتحاد");
define("ALLIANCE15","نمایش عهد ناموباره");
define("ALLIANCE16","نمایش جنگ");
define("ALLIANCE17","ملاحظه");
define("ALLIANCE18","برای نمایش اتحادهای شما با سایر اتحادها به صورت خودکار در توضیحات، علامت‌های <span class=\"e\">[diplomatie]</span>، <span class=\"e\">[ally]</span>، <span class=\"e\">[nap]</span> و <span class=\"e\">[war]</span> را نیز می‌توان استفاده کرد.");
define("ALLIANCE19","پیشنهادهای شما");
define("ALLIANCE20","پیشنهادهای بیرونی");
define("ALLIANCE21","پیشنهادهای فعلی");
define("ALLIANCE22","اتحاد با");
define("ALLIANCE23","عهد ناموباره");
define("ALLIANCE24","جنگ با");
define("ALLIANCE25","منصب");
define("ALLIANCE26","اضافه کردن مجوز");
define("ALLIANCE27","پیام هماگانی");
define("ALLIANCE28","در اینجا می‌توانید دسترسی‌های اتحاد و مناصب را ویرایش کنید.");
define("ALLIANCE29","حمله‌ها");
define("ALLIANCE30","در اینجا می‌توانید بازیکن را اخراج کنید.");
define("ALLIANCE31","دعوت شده");
define("ALLIANCE32","اتحاد با");
define("ALLIANCE33"," دعوت شده توسط");
define("ALLIANCE34"," دعوت اتحاد رد شد");
define("ALLIANCE35"," دعوت اتحاد حذف شد");
define("ALLIANCE36"," اتحاد انجام شد");
define("ALLIANCE37","اتحاد کامل شده‌است");
define("ALLIANCE38","بنیانگذار اتحاد");
define("ALLIANCE39","اتحاد توسط ایجاد شد");
define("ALLIANCE40"," نام اتحاد تغییر کرد");
define("ALLIANCE41"," انضمام به اتحاد");
define("ALLIANCE42"," توضیحات اتحاد تغییر کرد");
define("ALLIANCE43"," دسترسی‌ها را تغییر داد");
define("ALLIANCE44"," از اتحاد خارج شد");
define("ALLIANCE45"," نمایش اتحاد با");
define("ALLIANCE46"," نمایش عهد ناموباره با");
define("ALLIANCE47"," به جنگ با راه انداخت");
define("ALLIANCE48","دعوت ارسال شد");
define("ALLIANCE49","شما قبلاً برای آنها دعوت نامه ارسال کرده اید");
define("ALLIANCE50","hacker?yep?");
define("ALLIANCE51","اتحاد وجود ندارد");

//crop finder or nice place for ddos,lol
define("FINDER1","در اینجا می توانید دهکده های دارای 9 و 15 مزرعه با آبادی ها را جستجو کنید.");
define("FINDER2","جستجو");
define("FINDER3","محل شروع");
define("FINDER4","نوع");
define("FINDER5","اوحد");
define("FINDER6","بدون مالیکیت");
define("FINDER7","بدون مالیکیت");
define("FINDER8","فاصله");
define("FINDER9","محل");
define("FINDER10","تحت مالیکیت");
define("FINDER11","اسکن ها");
define("FINDER12","اوحد");
define("FINDER13","");
define("FINDER14","");
define("FINDER15","");
define("FINDER16","");
define("FINDER17","");
//otpravka figni
define("OTPRAV1","ارسال نیرو");
define("OTPRAV2","نیروری کمکی");
define("OTPRAV3","حمله");
define("OTPRAV4","غارت");
define("OTPRAV5","جاسوسی");
define("OTPRAV6","پشتیبانی به");
define("OTPRAV7","حمله به");
define("OTPRAV8","حمله غارت از");
define("OTPRAV9","جاسوسی");
define("OTPRAV10","جاسوسی بر منابع و نیروها<br>");
define("OTPRAV11","جاسوسی بر نیروها و ساختمان ها");
define("OTPRAV12","هدف");
define("OTPRAV13","تصادفی");
define("OTPRAV14","شما دارای یک سربازه فعال هستید. هدف‌های تصادفی تنها هدف‌هایی هستند که می‌توان آن‌ها را به خطر انداخت.");
define("OTPRAV15","(توسط منجنیق مورد حمله قرار خواهد گرفت)");
define("OTPRAV16","کتیبه");
define("OTPRAV17","رسید");
define("OTPRAV18","بازیکن هنوز تحت حمایت تازه واردین است");
define("OTPRAV19","هر نوع حمله به سایر بازیکنان سبب خروج از حمایت تازه واردین خواهد شد");
define("OTPRAV20","");

//Artefacti

define("ART1","رازهای معماری کوچک");
define("ART2","رازهای معماری بزرگ");
define("ART3","رازهای معماری نادر");
define("ART4","چکمه نیروهای سریع کوچک");
define("ART5","چکمه نیروهای سریع بزرگ");
define("ART6","چکمه  نیروهای سریع نادر");
define("ART7","چشمان عقاب کوچک");
define("ART8","چشمان عقاب بزرگ");
define("ART9","چشمان عقاب نادر");
define("ART10","کتیبه بناهای نیروی کوچک");
define("ART11","کتیبه بناهای نیروی بزرگ");
define("ART12","کتیبه بناهای نیروی نادر");
define("ART13","کتیبه انبار بزرگ کوچک");
define("ART133","کتیبه انبار بزرگ بزرگ");
define("ART14"," نقشه‌های ساخت شگفتی جهان");
define("ART15","تأثیر بر بنایی.");
define("ART16","این نمایه قریه شما را از حمله نابودکننده‌ها و درب‌شکن‌های درب محافظت می‌کند. با این نمایه مراقبت از استواری ساختمان‌ها و دیوارهای شهر ارتقا می‌یابد.");
define("ART17","این نمایه سرعت نیروها را تقویت می‌کند.");
define("ART18","این نمایه از مستکشف شخصی شما به شکل 5 برابر استاندارد تجزیه و تحلیل قوا حمله می‌کند. تمام مستکشفانی که در روستای خود تسکن می‌دهند و یا در راه به روستای دیگر به منظور جاسوسی می‌روند از این مزیت برخوردارند. همچنین می‌توانید نوع نیروهای قادم برای حمله را در نقطه جمع شناسایی کنید، اما اعداد آن‌ها را نمی‌توان شناسایی کرد.");
define("ART19","این نمایه مدت زمانی آموزش نیروها در خانه/قصر، فناوری، استبل و معماری‌های جنگی را کاهش می‌دهد.");
define("ART20","نمایه برنامه‌های بنا به شما اجازه می‌دهد تا بتوانید انبارهای بزرگ و انبارهای دارو بزرگ را شکاف کنید. همچنین برای ارتقای سطح این انبارها بعد از شکاف نیز ضروری است.");
define("ART21","نمایه لازم برای توانایی بنای شگفت‌انگیز جهان است.");
define("ART22","Magic mill");
define("ART23","Lucullus table");
define("ART24","King Arthur's bowl");
define("ART25","This artifact reduces the consumption of grain by troops.");
define("ART26","Bottomless bag");
define("ART27","This artifact increases the stash capacity. In addition, enemy catapults can only fire aimed at the treasury and the Wonder of the World or at random targets. A unique artifact prevents the treasure from being targeted.");
define("ART28","Underground temple");
define("ART29","This artifact increases the stash capacity. In addition, enemy catapults can only fire aimed at the treasury and the Wonder of the World or at random targets. Unique artifact prevents the ability to target the treasury.");
define("ART30","Trojan horse");
define("ART31","This artifact increases the stash capacity. In addition, enemy catapults can only target the treasury and the Wonder of the World, or random targets. A unique artifact prevents the treasure from being targeted");


//karta vrode
define("BAN","مسدود شده");
define("KAR1","دره متروکه");
define("KAR2","آبادی غیر اشغالی");
define("KAR3","آبادی اشغالی");
define("KAR4","اطلاعاتی موجود نیست.");
define("KAR5","ایجاد دکده جدید");
define("KAR6","امتیاز فرهنگی");
define("KAR7","مهاجران");
define("KAR8","ساخت اردوگاه");
define("KAR9","ارسال نیروها");
define("KAR10","حمایت از تازه واردین");
define("KAR11","ارسال تاجران");
define("KAR12","افزودن به فهرست فارم");
define("KAR13","افزودن به فهرست فارم (وجود دارد)");
define("KAR14","افزودن به فهرست فارم (حداکثر)");
define("KAR15","تقسیم زمین");
define("KAR16","مرکز نقشه");
define("KAR17","ساخت بازار");
define("KAR18","نقشه");
define("KAR19","جستجو");
define("KAR20","فهرست اهداف محبوب");
define("KAR21","محل");
define("KAR22","حمله آخر");
define("KAR23","مرده");
define("KAR24","جایزه");

//ss6Ilo4ki EBAN6IE:D
define("LINK1","پیوند");
define("LINK2","آدرس");
define("LINK3","");
define("LINK4","");

//pravila anti-gad6I
define("RULES1", "قوانین بازی");
define("RULES2", "این قوانین بازی توسط اداره ایران تراوین ایجاد شده است. در صورت قفل کردن حساب، به عنوان راهنمایی برای رفتارهای ممنوعه، به بخش 3 مراجعه کنید.<br>
گریز از قوانین بازی به عنوان نقض قوانین در نظر گرفته می‌شود. این قوانین یکپارچه و برای همه بازیکنان اجباری است، از جمله کسانی که حساب خود را حذف می‌کنند یا حذف کرده‌اند.");
define("RULES3", "§ 1 حساب کاربری");
define("RULES4", "§1.1. هر بازیکن حق دارد تنها یک حساب کاربری در یک سرور بازی داشته باشد.");
define("RULES5", "§1.2. مالک حساب کاربری، کسی است که آدرس ایمیلی در تنظیمات حساب ثبت شده است. برای تغییر آدرس ایمیل، می‌توان به پروفایل حساب کاربری (پروفایل > حساب کاربری) مراجعه کرد.");
define("RULES6", "§1.3. انتقال کلمه عبور از حساب کاربری به دیگر بازیکنان در همان سرور، ممنوع است. همچنین وارد شدن به حساب کاربری دیگران با کلمه عبور مالک، نیز ممنوع است. این رفتارها به عنوان دارا بودن یا بازی کردن با حساب کاربری دو گانه و یا بیشتر در یک سرور بازی، در نظر گرفته می‌شوند.");
define("RULES7","تعداد چندین بازیکن در یک حساب از روی قانون مجاز است، موجود شرط این است که هیچ یک از این بازیکنها، پروانه ای که توسط دیگر بازیکنها بازی می‌کنند و یا مدیریت می‌شود نداشته باشد. ");
define("RULES8","همچنین استفاده از کلمه عبور یکسان در حساب‌ها در صورت استفاده از کامپیوترهای یکسان و یا تعویض نیز ممنوع است.");
define("RULES9","§1.4. صاحبان حساب پوراقب باشند که همه اتفاقاتی که برای حساب آنها رخ میدهد، مسئولیت آنها است.");
define("RULES10","§ 2 آداب و رسوم بازی");
define("RULES11","§2.1. فروش و خرید حساب کاربری، واحد نیروهای مسلح، منابع و یا عملکردهای بازیکنان ممنوع است. این نکته برای زمان صرف شده برای حساب هم گرفته می شود.");
define("RULES13","§2.3. تقلید از ساختارهای رسمی تراوین ایران و استفاده از نام ها و عنوان‌های با محتوای توهین آمیز و غیر اخلاقی از نظر قوانین اخلاقی و سیاسی ممنوع است.");
define("RULES14","§2.4. ساخت پروفایل بازی و پروفایل تحالف، فقط به زبان های روسی و انگلیسی مجاز است.");
define("RULES15","§2.5. هر گونه تبلیغات، اسپم و پیام‌های لوست ارائه ممنوع است.");
define("RULES16","§2.6. منتشر کردن پیام های بازی، ایمیل های بازیکنان، مالکان و یا مدیران در جامعه بازی ممنوع است.");
define("RULES17","§2.7. تحریض بازیکنان برای زیر پا انداختن قوانین بازی، حذف شدن، ارائه کلمه عبور، بازی توسط چند نفر در یک حساب کاربری و یا توصیه نمایندگی را ممنوع است.");
define("RULES18","§2.8. استفاده از باگ های بازی برای به دست آوردن برخورداری ممنوع است. استفاده از هرگونه برنامه ای که بازیکن را تقلید کند و یا ظاهر بازی را در هرشکلی تغییر دهد ممنوع است، مگر اینکه برنامه ای گرافیکی باشد.");
define("RULES19","§ 3 تعیینات اداری");
define("RULES20","§3.1. شیوه تحریم برای زیر پا انداختن قوانین توسط سازمان های بازی و یا مدیران تعیین می شود. تحریم در هر صورت، بیش از ارزشی که از زیر پا انداختن حاصل می شود، خواهد بود. بدون اینکه استثنایی وجود داشته باشد، تمام حساب های کاربری که با زیر پا انداختن قوانین ارتباط داشته باشند، تحریم خواهند شد. منابع، ساخت و ساز، روستاها و یا نیروهایی که در مدت تحریم از دست داده می شوند، جبران نمی شوند. طلا و زمان دسترسی به xtravian.net پلاس که در مدت تحریم از دست داده می شوند جبران نمی شوند. برای بازیکنانی که طلا می خرند، توجه خاصی در پاسخ به پیام ها و یا تعیین تحریم ارائه نمی شود.");
define("RULES21","§3.2. مدیر فقط شخص تماس در زمینه زیر پا انداختن قوانین است. بازیکنان می توانند حجت هایی را برای اثبات درستی خود با ارسال پیام به مدیر ارائه دهند. در صورت مخالفت با تصمیم مدیر، بازیکنان می توانند با اداره ارتباط برقرار کنند.");
define("RULES22","تمامی مسائل مربوط به زیر پا انداختن قوانین و تحریم، تنها توسط صاحب حساب کاربری بررسی می شود.");
define("RULES23","§3.3. تیم xtravian.net برای تغییر قوانین بازی در هر زمانی حق را برای خود روستا کرده است.");
define("PERC","درصد");


$lang['header'] = array (
							0 => 'منابع',
							1 => 'مركز دهکده',
							2 => 'نقشه',
							3 => 'آمار',
							4 => 'گزارش ها',
							5 => 'پیام ها',
							6 => 'منوی پلاس');

		$lang['buildings'] = array (
			         	1 => "هیزم شکن",
                    2 => "خشت",
                    3 => "معدن آهن",
                    4 => "گندمزار",
                    5 => "چوب بری",
                    6 => "آجر پزی",
                    7 => "ذوب آهن",
                    8 => "آسیاب غلات",
                    9 => "نانوایی",
                    10 => "انبار",
                    11 => "انبار غذا",
                    12 => "آهنگری",
                    14 => "میدان تمرین",
                    15 => "ساختمان اصلی",
                    16 => "اردوگاه",
                    17 => "بازار",
                    18 => "سفارت",
                    19 => "سربازخانه",
                    20 => "اصطبل",
                    21 => "کارگاه",
                    22 => "آکادمی",
                    23 => "مخفیگاه",
                    24 => "تالار شهر",
                    25 => "اقامتگاه",
                    26 => "قصر",
                    27 => "خزانه داری",
                    28 => "دفتر تجارت",
                    29 => "پادگان بزرگ",
                    30 => "اصطبل بزرگ",
                    31 => "دیوار شهر",
                    32 => "دیوار زمین",
                    33 => "پرچین",
                    34 => "سنگ تراش",
                    35 => "آبجوسازی",
                    36 => "تله ساز",
                    37 => "میخانه",
                    38 => "انبار بزرگ",
                    39 => "انبار بزرگ غذا",
                    40 => "شگفتی جهان",
                    41 => "آبشخوری اسب رومی",
                    42 => "دیوار سنگی",
                    43 => "دیوار موقت",
                    44 => "مرکز فرمان",
                    45 => "آبرسانی");
				
				
				

$lang['desc'][ 1 ] = array ( 0 => 'برادران درختان را برای تولید چوب برش می زنند. با ارتقای سطح برادران، تولید چوب افزایش می یابد.');
$lang['desc'][ 2 ] = array ( 0 => 'از کانال طین ، طین به در می آید. با ارتقای سطح کانال طین، تولید طین افزایش می یابد.');
$lang['desc'][ 3 ] = array ( 0 => 'کارگران معدن از معادن آهن، ارز غنی را استخراج می کنند. با ارتقای سطح معدن، تولید ارز در ساعت افزایش می یابد.');
$lang['desc'][ 4 ] = array ( 0 => 'در دام‌های گندم، غلات برای ساکنان روستا تولید می شود. با ارتقای سطح دام‌های گندم، تولید غلات افزایش می یابد.');
$lang['desc'][ 5 ] = array ( 0 => 'در کارخانه‌های نجاری، چوب توسط برادران جمع‌آوری می شود. با ارتقای سطح کارخانه، تولید چوب تا حدود 25 درصد افزایش می یابد.');
$lang['desc'][ 6 ] = array ( 0 => 'در مصنع سنگ آهن، طین به سنگ تبدیل می شود. با ارتقای سطح مصنع، تولید طین تا حدود 25 درصد افزایش می یابد.');
$lang['desc'][ 7 ] = array ( 0 => 'در مصبّغ آهن، آهن ساخته می شود. با ارتقای سطح مصبّغ، تولید آهن تا حدود 25 درصد افزایش می یابد.');
$lang['desc'][ 8 ] = array ( 0 => 'در کارخانه آرد، گندم آرد می شود و به آرد تبدیل می شود. با ارتقای سطح کارخانه، تولید گندم تا حدود 25 درصد افزایش می یابد.');
$lang['desc'][ 9 ] = array ( 0 => 'در مخزن، چوب و طین و آهن ذخیره می شوند. با ارتقای سطح مخزن، ظرفیت ذخیره سازی افزایش می یابد.');
$lang['desc'][ 10 ] = array ( 0 => 'در صومعه ، غلات تولیدی شما ذخیره می شود. با ارتقای سطح صومعه، ظرفیت ذخیره سازی افزایش می یابد.');
$lang['desc'][ 11 ] = array ( 0 => 'در آفران صهر آهن، نیروهای نظامی تجهیزات و اسلحه شان تقویت می شود. با ارتقای سطح افزایش آفران صهر آهن، می توانید تجهیزات و اسلحه بهتری برای ساختن درخواست کنید.');
$lang['desc'][ 12 ] = array ( 0 => 'در آفران صهر آهن، نیروهای نظامی تجهیزات و اسلحه شان تقویت می شود. با ارتقای سطح افزایش آفران صهر آهن، می توانید تجهیزات و اسلحه بهتری برای ساختن درخواست کنید.');
$lang['desc'][ 13 ] = array ( 0 => 'می توانید با آموزش نیروهای خود در صاحبقران به سرعت بیشتری در مسافت هایی که حداقل 20 روستایی از قریه است حرکت کنند.');
$lang['desc'][ 14 ] = array ( 0 => 'می توانید با آموزش نیروهای خود در صاحبقران به سرعت بیشتری در مسافت هایی که حداقل 20 روستایی از قریه است حرکت کنند.');
$lang['desc'][ 15 ] = array ( 0 => 'مهندسین در ساختمان اصلی زندگی می کنند. با افزایش سطح ساختمان اصلی، سرعت ساخت ساختمان های جدید افزایش می یابد.');
$lang['desc'][ 16 ] = array ( 0 => 'در نقطه تجمع، نیروهای قریه با هم ملاقات می کنند. از اینجا می توانید آنها را برای حمله، اشغال یا تقویت قریه های دیگر بفرستید. نقطه تجمع فقط بر روی پارک مرکزی قابل ساخت است.');
$lang['desc'][ 17 ] = array ( 0 => 'می توانید منابع تجاری خود را با بازیکنان دیگر از طریق بازار تعویض کنید. با افزایش سطح بازار، تعداد تاجرها افزایش می یابد.');
$lang['desc'][ 18 ] = array ( 0 => 'سفارت، محل کار دیپلمات است. در سطح 1، می توانید به اتحاد وارد شوید.');
$lang['desc'][ 19 ] = array ( 0 => 'در تکنولوژی ها، نیروهای نظامی آموزش دیده می شوند. با افزایش سطح تکنولوژی، سرعت آموزش نیروهای نظامی افزایش می یابد.');
$lang['desc'][ 20 ] = array ( 0 => 'در استبل، اسب ها آموزش دیده می شوند. با افزایش سطح استبل، سرعت آموزش اسب ها افزایش می یابد.');
$lang['desc'][ 21 ] = array ( 0 => 'در مجمع تولید اسلحه، اسلحه ای مانند کمان برشان و مقلع تولید می شوند. با افزایش سطح مجمع تولید اسلحه، واحدهای تولید شده تنوع بیشتری خواهند داشت.');
$lang['desc'][ 22 ] = array ( 0 => 'می توانید در آکادمی، انواع جدیدی از نیروهای جنگی را توسعه دهید. با افزایش سطح آکادمی، تعداد واحدهای تولید شده افزایش می یابد.');
$lang['desc'][ 23 ] = array ( 0 => 'در صورت حمله به قریه شما، می توانید بخشی از منابع خود را در مخبأ مخفی کنید. این منابع نمی توانند سرقت شوند.<br><br>در سطح ۱، ۲۰۰ واحد از هر منبع مخفی می شوند. مخزن مخفی دریایی یک مرتبه بزرگتر از سرعت طبیعی است.<br><br>اگر قریه توسط یک بطل آلمانی حمله شد، مخازن استاندارد می توانند ۸۰٪ تنها از سرعت طبیعی خود را مخفی کنند.');
$lang['desc'][ 24 ] = array ( 0 => 'می توانید جشن هایی برای شهروندان خود در بنای شهر ارگان بزنید. این جشن ها باعث افزایش نقاط تمدنی می شوند.');
$lang['desc'][ 25 ] = array ( 0 => 'سکونت شهر برای مقابله با حمله اشخاص مخالف قرار می گیرد. شما می توانید یک سکونت بسازید در هر شهر. در اینجا می توانید نیروهای نظامی را آموزش دهید که قادر به ایجاد شهر جدید و یا حمله به شهرهای قابل پیش بینی هستند.');
$lang['desc'][ 26 ] = array ( 0 => 'قصر یک بنای بسیار منحصر به فردی است. شما نمی توانید جز در یک پادشاهی خود یک قصر بسازید و می توانید شهری را که این قصر در آنجا وجود دارد را به عنوان پایتخت خود در نظر گرفت. قصر شهر را در برابر حمله اشخاص مخالف محافظت می کند. در اینجا می توانید نیروهای نظامی را آموزش دهید که قادر به ایجاد شهر جدید و یا حمله به شهرهای قابل پیش بینی هستند.');
$lang['desc'][ 27 ] = array ( 0 => 'در خزانه، اسرار امپراطوری شما پنهان می شوند. هر خزانه فقط یک آثار تاریخی را می توان پنهان کرد. برای قرار دادن یک آثار تاریخی، به یک خزانه سطح ۱۰ نیاز است. برای آثار بزرگتر به یک خزانه سطح ۲۰ نیاز است.');
$lang['desc'][ 28 ] = array ( 0 => 'در اداره تجاری می توانید کاروانها و نیز اسبهای با توانایی بیشتر تجهیز دهید. هر زمان که سطح اداره تجاری بالا می رود، ظرفیت تجار برای حمل منابع بیشتری افزایش می یابد.');
$lang['desc'][ 29 ] = array ( 0 => 'تکنولوژی کبری به شما اجازه می دهد تا نیروهای نظامی اضافی را آموزش دهید که سه گونه هزینه دارتر از حالت عادی هستند. تکنولوژی کبری نمی تواند در شهر پایتخت ساخته شود.');
$lang['desc'][ 30 ] = array ( 0 => 'استبل بزرگ به شما اجازه می دهد تا بیش از سواران را آموزش دهید. این نیروهای نظامی هزینه ی سه گونه از حالت عادی دارند. استبل بزرگ نمی تواند در شهر پایتخت ساخته شود.');
$lang['desc'][ 31 ] = array ( 0 => 'دیوار زمینی برای دفاع از حملات به روستا، هرچه سطح دیوار بیشتر باشد، به نیروهای دفاعی آسانتر شده و برای پشت سر گذاشتن دشمنان موفق شدن دیوار شهری نمی تواند بجز توسط ژرمن ها ساخته شود. این دیوار بهترین امنیت را برای مقابله با منگلهای پیروی از دروازه های شهر فراهم می کند، اما برای دفاع، دشمنان با استفاده از منگل می توانند از دیوار زمینی یا دیوار شهری آسان تر بریزند.');
$lang['desc'][ 32 ] = array ( 0 => 'دیوار شهری برای دفاع از حملات به روستا، هرچه سطح دیوار بیشتر باشد، به نیروهای دفاعی آسانتر شده و برای پشت سر گذاشتن دشمنان موفق شدن دیوار شهری نمی تواند بجز توسط روم ها ساخته شود. این دیوار بهترین سطح دفاع را دربرابر حملات از دروازه های شهر فراهم می کند، اما برای مقابله با منگلهای دروازه ها، دشمنان می توانند از دیوار زمینی یا دیوار شهری به راحتی بریزند.');
$lang['desc'][ 33 ] = array ( 0 => 'دیوار حفاظتی برای دفاع از حملات به روستا، هرچه سطح دیوار بیشتر باشد، به نیروهای دفاعی آسانتر شده و برای پشت سر گذاشتن دشمنان موفق شدن دیوار حفاظتی نمی تواند بجز توسط یونانی ها ساخته شود. این دیوار میانگین امنیت را برای دروازه های شهر و دیوار زمینی فراهم می کند.');
$lang['desc'][ 34 ] = array ( 0 => 'سنگ شکن برای سنگ شکنی با تجربه است. هرچه سطح ساختمانی بیشتر باشد، ساختمان های شهر شما در مقابل حملات از منابع بیشتری بهره مند خواهد شد. سنگ شکن تنها در پایتخت ساخته می شود.');
$lang['desc'][ 35 ] = array ( 0 => 'در قهوه خانه شراب افسون مورد استفاده قرار می گیرد که توسط مردم به شدت دوست داشته می شود. هنگامی که سربازان شراب می نوشید، توان آنها تا 1% برای هر سطح بیشتر می شود. اما توان نیروهای مخالف برای هدف گیری و توان قادران برای اعمال استعمار در زمان پروازها کاهش می یابد. این شراب فقط توسط ژرمن ها و در پایتخت تولید می شود و تاثیر آن در تمام امپراطوری است.');
$lang['desc'][ 36 ] = array ( 0 => 'در این کارخانه، پرنده بند تولید می شود و آنها به خوبی مخفی می شوند. این امر به این معنی است که می توانید تسلط و متمردان را به زندان بسپارید تا نتوانند مجدداً به شهرتان حمله کنند. افرادی که در پرنده بند هستند، نمی توانند به جای دیگری رها شوند و در صورتی که صاحبان پرنده بند به دستور وزیر این شخص را آزاد کنند، پرنده بند به طور خودکار تعمیر خواهد شد. پرنده بند فقط توسط یونانیان می تواند ساخته شود.');
$lang['desc'][ 37 ] = array ( 0 => 'قصر افسانه ها، محل زیبای شخصی افسانه. در سطح های 10، 15 و 20 افسانه برای شما اجازه داده می شود که هوایی 1، 2 و 3 اضافی ترجیح داده شده را برای دفاع از شهر بسازید. این هوایی ها موجب بیشتر شدن تولید مواد اولیه و به خصوص در قلعه افسانه ها می شود.');
$lang['desc'][ 38 ] = array ( 0 => 'در انبار منابع (چوب، گلی و آهن) نگهداری می شود. انبارهای بزرگتر باعث ایجاد فضای بیشتری برای شما می شوند و منابع را به صورت عادی حفظ می کنند.');
$lang['desc'][ 39 ] = array ( 0 => 'در انبار گندم بزرگ ذخیره شده گندم تولید شده از مزارع نگهداری می شود. انبار بزرگتر می تواند بیشترین فضای انبار را برای شما فراهم کند و گندم را به صورت عادی نگهداری کند.');
$lang['desc'][ 40 ] = array ( 0 => 'شگفتی جهان برج افتخار و نماد شگفت انگیز ساخت و ساز بزرگواران است. تنها افراد قوی و ثروتمند می توانند چنین اثری را ساخته و در مقابل حسادین خود مدافعت کنند. ساختن شگفتی دنیا فقط در پایتخت قلعه افسانه ها با دست آوردن نقشه ممکن است. هنگامی که شما به سطح 50 رسیدید، یک بازیکن دیگر از هم تیم باید نقشه دوم را به دست آورد تا ساخت آنها تکمیل شود.');
$lang['desc'][ 41 ] = array ( 0 => 'چاه آبی اسب ، اسب ها را از حفظ و تنوع در تدریس آنها 1 درصد سریعتر می کند. آبی اسب ها توان مصرف گندم برای نیروهای دفاعی را کاهش می دهد: گروه جاسوسی از سطح 10 ، سلاح فرزان از سطح 15 و فرزان قیصر از سطح 20. فقط رومیان می توانند این چاه آبی را بسازند.');
$lang['desc'][ 42 ] = array ( 0 => 'دیوار سنگی شهرتان را از حمله بر دشمنان بربری محافظت می کند. با افزایش سطح دیوار سنگی، درصد بازدهی نیروهای دفاعی شما افزایش می یابد. دیوار سنگی تنها توسط مصریان می تواند ساخته شود. می توانید تحمل دیوار سنگی را با دیوار کشتی هاک آلمانی مقایسه کنید.');
$lang['desc'][ 43 ] = array ( 0 => 'پوشاندازی موقت شهرتان را از حمله بر دشمنان بربری محافظت می کند. با افزایش سطح پوشاندازی موقت، درصد بازدهی نیروهای دفاعی شما افزایش می یابد. پوشاندازی موقت تنها توسط مغول ها می تواند ساخته شود. می توانید تحمل پوشاندازی موقت را با دیوار زمینی جرمان مقایسه کنید.');
$lang['desc'][ 44 ] = array ( 0 => 'مرکز هدایت شهرتان را از تسخیر دشمنان محافظت می کند. شما می توانید مرکز هدایت واحدی در هر شهر بسازید. اینجا می توانید نیروهای نظامی را تدریب کنید که می توانند شهر جدیدی بسازند و یا شهرهای دیگر را تسخیر کنند.<br>به علاوه، مرکز هدایت در سطح های 10، 15 و 20 یک پنجره توسعه می دهد.');
$lang['desc'][ 45 ] = array ( 0 => 'ایستگاه آبی به شما اجازه می دهد تا جریان آب را به فرهنگ های مختلف تنظیم کنید. ایستگاه آبی فقط به رشد درختان و گندم کمک نمی کند، بلکه برای آبادان و معادن نیز کاربرد دارد چرا که آب را برای کارگران تامین می کند و منابع را انتقال می دهد.<br><br>ایستگاه آبی میزان بازدهی تمامی فرهنگ های اطراف را افزایش می دهد. در سطح 20، ایستگاه آبی بازدهی فرهنگ ها را به حداکثر با افزایش دو برابر میزان بازدهی آنها می رساند.<br><br>فقط فرعون می توانند ایستگاه آبی بسازند.');

$lang['descs'][5]=array(0=>array(1,10),array(15,5));
$lang['descs'][6]=array(0=>array(2,10),array(15,5));
$lang['descs'][7]=array(0=>array(3,10),array(15,5));
$lang['descs'][8]=array(0=>array(4,5));
$lang['descs'][9]=array(0=>array(4,10),array(15,5));
$lang['descs'][12]=array(0=>array(22,1),array(15,3));
$lang['descs'][13]=array(0=>array(22,1),array(15,3));
$lang['descs'][14]=array(0=>array(16,15));
$lang['descs'][17]=array(0=>array(15,3),array(10,1),array(11,1));
$lang['descs'][19]=array(0=>array(16,1),array(15,3));
$lang['descs'][20]=array(0=>array(22,5),array(12,3));
$lang['descs'][21]=array(0=>array(22,10),array(15,5));
$lang['descs'][22]=array(0=>array(19,3),array(15,3));
$lang['descs'][24]=array(0=>array(15,10),array(22,10));
$lang['descs'][25]=array(0=>array(15,5));
$lang['descs'][26]=array(0=>array(18,1),array(15,5));
$lang['descs'][27]=array(0=>array(15,10));
$lang['descs'][28]=array(0=>array(17,20),array(20,10));
$lang['descs'][29]=array(0=>array(19,20));
$lang['descs'][30]=array(0=>array(20,20));
$lang['descs'][34]=array(0=>array(26,3),array(15,5));
$lang['descs'][35]=array(0=>array(11,20),array(16,10));
$lang['descs'][36]=array(array(16,1));
$lang['descs'][37]=array(0=>array(16,1),array(15,3));
$lang['descs'][38]=array(0=>array(15,10));
$lang['descs'][39]=array(0=>array(15,10));
$lang['descs'][41]=array(0=>array(20,20),array(16,10));
		$lang['fields'] = array (
							0 => '&nbsp;level',
							1 => 'سطح کارخانه چوب بری',
                     2 => 'سطح معدن خشت',
                     3 => 'سطح معدن آهن',
                     4 => 'سطح مزرعه',
                     5 => 'محل ساخت و ساز در فضای باز',
                     6 => 'محل ساخت و ساز',
                     7 => 'محل ساخت نقطه جمع آوری');

		$lang['npc'] = array (
							0 => 'معامله گر NPC');

		$lang['upgrade'] = array (
							0 => 'ساختمان در حال حاضر در حداکثر سطح است',
                     1 => 'حداکثر سطح ساختمان در حال ساخت است',
                     2 => 'ساختمان تخریب خواهد شد',
                     3 => '<b>هزینه</b> ساخت تا سطح&nbsp;',
                     4 => 'کارگران مشغول هستند.',
                     5 => 'غذای کافی وجود ندارد. توسعه مزارع.',
                     6 => 'یک انبار بسازید.',
                     7 => 'یک انبار بسازید.',
                     8 => 'منابع کافی وجود خواهد داشت&nbsp;',
                     9 => '&nbsp;در&nbsp;&nbsp;',
                     10 => 'الترقیة الى المستوى',
                     11 => 'امروز',
                     12 => 'فردا');

		$lang['movement'] = array (
							0 => 'в&nbsp;');

		$lang['troops'] = array (
							0 => 'خیر',
							1 => 'قهرمان');


//NOTICES
define("REPORT_SUBJECT","موضوع:");
define("REPORT_ATTACKER","مهاجم");
define("REPORT_DEFENDER","مدافع");
define("REPORT_RESOURCES","منابع");
define("REPORT_FROM_VIL","از دهکده");
define("REPORT_FROM_ALLY","از اتحاد");
define("REPORT_SENT","ارسال در:");
define("REPORT_SENDER","فرستنده");
define("REPORT_RECEIVER","گیرنده");
define("REPORT_AT","در");
define("REPORT_TO","به");
define("REPORT_SEND_RES","ارسال منابع");
define("REPORT_DEL_BTN","حذف گزارش");
define("REPORT_DEL_QST","آیا مطمئن هستید که می خواهید گزارش را حذف کنید؟");
define("REPORT_WARSIM","شبیه سازی جنگ");
define("REPORT_ATK_AGAIN","حمله مجدد");
define("REPORT_TROOPS","نیروها");
define("REPORT_REINF","پشتیبانی");
define("REPORT_CASUALTIES","تلفات");
define("REPORT_INFORMATION","اطلاعات");
define("REPORT_BOUNTY","غناعم");
define("REPORT_CLOCK","زمان");
define("REPORT_UPKEEP","نگهداری");
define("REPORT_PER_HOURS","در ساعت");
define("REPORT_SEND_REINF_TO","ارسال پشتیبانی به دهکده");
define("REPORT_NO","گزارشی برای نمایش وجود ندارد.");
define("REPORT1"," جاسوسی می کند ");
define("REPORT2"," حمله می کند ");


define ("NGZ2", "سرعت ساخت فعلی");
define ("NGZ3", "سرعت ساخت در سطح");


//CTENA
define ("C1", " سطح دیوار شهر");
define ("C2", " با ساختن دیوار شهر می توانید از دهکده خود در برابر انبوه وحشیانه دشمنان خود محافظت کنید. هرچه سطح دیوار بالاتر باشد، پاداشی که به دفاع نیروهای شما داده می شود، بیشتر می شود.");
define ("C3", "پاداش دفاع فعلی");
define ("C4", "پاداش دفاع سطح");
define ("C5", " ");
define ("C6", " ");
define ("C7", "سطح دیوار زمین");
define ("C8", "سطح پرچین");
define ("C9", "سطح دیوار شهر");

//CKLAD
define ("CK0", "سطح انبار");
define ("CK", " منابع چوب، خشت و آهن در انبار ذخیره می شوند. هر چه سطح بالاتر باشد، ظرفیت ذخیره سازی منابع بیشتر است. ");


//AMBAR
define ("AM", "سطح انبار غذا");
define ("AM1", "گندم از مزارع گندم شما در انبار غذا ذخیره می شود. هر چه سطح آن بالاتر باشد، ظرفیت ذخیره سازی بیشتر است.");

define ("AM4", "ظرفیت در سطح");

define("CAPACITY","ظرفیت ذخیره سازی فعلی");
define("CAPACITYA","ظرفیت ذخیره سازی در سطح");



//upgrade.php
define("UPG0","به سطح آخر رسیده است.");
define("UPG1","در حال ارتقاء ساختمان به سطح آخر است.");
define("UPG2","در حال خراب کردن ساختمان با ساختمان اصلی است.");
define("UPG3","هزینه");
define("UPG4","بهینه سازی برای سطح");
define("UPG5","تعداد کافی از کارگر نیست.");
define("UPG6","تمام کارگران مشغول هستند. (انتظار)");
define("UPG7","باید زمین های گندم را ارتقاء دهید.");
define("UPG8","باید مخازن را ارتقاء دهید.");
define("UPG9","باید ارتقاء دهید مخازن حبوب.");
define("UPG10","منابع کافی - کاسه");
define("UPG11","ارتقاء به سطح ");
define("UPG12","ساخت با کمک بنا");


//отправка войск
define("nap0","پشتیبانی");
define("nap1","حمله عادی");
define("nap2","حمله برای غارت");



define ("PY1", "نیروهای وارد شده به روستا");
define ("PY2", "نمای عمومی");
define ("PY3", "ارسال نیروها");
define ("PY5", "نیروها و کشتی ها در این روستا");
define ("PY6", "دهکده");
define ("PY7", "نیروها");
define ("PY8", "نیروها");
define ("PY9", "هزینه نگهداری");
define ("PY10", "در ساعت");
define ("PY11", "بازگشت");
define ("PY12", "نیروها در دهکده های دیگر");
define ("PY13", "پشتیبانی به");
define ("PY14", "برداشت");
define ("PY15", "حرکات نیروهای شما");
define ("PY16", "گریز لشکریان");
define ("PY17", "لیست فارم ها");
define ("PY18", "آبادی");
define ("PY19", "نیروهای درون آبادی");
define ("GOLDC","گریز لشکریان");
//KAZARMA
define ("KA", "سطح سربازخانه");
define ("KA1", " همه سربازان پیاده در پادگان آموزش می بینند. هرچه سطح پادگان بالاتر باشد، نیروها سریعتر آموزش می بینند.");
define ("KA2", "سربازخانه");
define ("KA3", "وقتی ساخت پادگان را تمام کردید می توانید نیروها را آموزش دهید.");

//RYNOK
define ("RY", "سطح بازار");
define ("RY1", " در بازار، می توانید منابع را با سایر بازیکنان معامله کنید. هرچه سطح آن بالاتر باشد، منابع بیشتری را می توان همزمان حمل کرد.");




//DVOREZ
define ("DV", "سطح قصر");
define ("DV1", "پادشاه ملت در قصر زندگی می کند. این کاخ فقط در پایتخت ساخته می شود. هر چه سطح بالاتر باشد، تسخیر دهکده برای دشمنان دشوارتر است.");
define("dvrc0","کلمه عبور اشتباه است");
define("dvrc1","برای ایجاد روستای جدید، نیاز به قصر با سطح 10 یا 15 یا 20 و 3 ساکن دارید. برای حمله به روستای جدید، نیاز به قصر با سطح 10 یا 15 یا 20 و قائد دارید.");
define("dvrc2","اینجا پایتخت شماست");
define("dvrc3","آیا از تغییر پایتخت اطمینان دارید؟");
define("dvrc4","این عملیات قابل بازگشت نیست!");
define("dvrc5","به دلایل امنیتی لطفا کلمه عبور را وارد کنید:");
define("dvrc6","تغییر");
define("dvrc7","قصر در حال ساخت");
define("dvrc8","کلمه عبور:");
define("dvrc9","نام");
define("dvrc10","مقدار");
define("dvrc11","حداکثر");

//POSOLbSTVO
define("posl0","اتحاد");
define("posl1","تگ");
define("posl2","نام");
define("posl3","پیشنهاد پیوستن به اتحاد");
define("posl4","دعوت نامه ها");
define("posl5","پذیرش");
define("posl6","دعوت نامه ای موجود نیست");
define("posl7","پیداشن اتحاد");
define("posl8","ایجاد");

//masterskaya
define("mastr0","واحدهایی که باید برای آنها جستجو شود");
define("mastr1","آموزش");
define("mastr2","آموزش");
define("mastr3","مدت زمان");
define("mastr4","پایان یافت");
define("mastr5","کل");

//REZA
define ("RE", "سطح اقامتگاه");
define ("RE1", "این اقامتگاه یک قصر کوچک است که پادشاه هنگام بازدید از آن در آن زندگی می کند. این اقامتگاه روستا را از تسخیر نیروهای دشمن محافظت می کند. ");
define ("RE2", "این دهکده پایتخت است");
define ("RE3", "جمعیت");
define ("RE4", "آموزش");
define ("RE5", "امتیاز فرهنگی");
define ("RE6", "وفاداری");
define ("RE7", "توسعه");
define("RE8","برای بسط دادن نیاز به نقاط فرهنگی دارید. نقاط فرهنگی از ساختمان های متعلق به شما تشکیل می شوند و در سطوح بالا سریعتر تجمیع می شوند.");
define("RE9","تولید این دهکده:");
define("RE10","امتیاز فرهنگی روزانه");
define("RE11","تولید تمام دهکده ها:");
define("RE12","ساخت دهکده های شما");
define("RE13","امتیاز در مجموع. برای ایجاد یا تسخیر دهکده جدید نیاز دارید به");
define("RE14","امتیاز");
define("RE15","با حمله به دهکده های دیگر با قائد، وفاداری این روستا کاهش می یابد. اگر به صفر برسد، روستا به سرباز های حمله کننده پیوست خواهد شد. وفاداری این روستا ");
define("RE16","دهکده هایی که از این روستا ایجاد شده یا توسط آن مهاجم شده است");
define("RE17","اعضا");
define("RE18","دهکده");
define("RE19","ساکن");
define("RE20","اتفاقات");
define("RE21","زمان");
define("RE22","دهکده ی در حال حاضر وجود ندارد.");
define("RE23","آموزش");
define("RE24","مدت زمان");
define("RE25","آماده");
define("RE26","برای آموزش");
define("RE27","برای ایجاد یک دهکده جدید به یک اقامتگاه سطح 10 یا 20 و 3 مهاجر نیاز دارید. برای فتح یک دهکده جدید، به یک اقامتگاه سطح 10 یا 20 و یک سناتور، رئیس یا رئیس نیاز دارید.");

//AKADEM
define ("AK", " سطح آکادمی ");
define ("AK3", "در حال حاضر هیچ نیروی جدیدی قابل جستجو نیست، برای جستجوی پیش نیازهای نیروهای جدید، روی تصویر واحد مربوطه در راهنما کلیک کنید.");
define ("AK4", "عمل");
define ("AK5", "پیش نیازها");
define ("AK6", "اطلاعات بیشتر");
define ("AK7", "پنهان شدن");
define ("AK8", "جستجو کردن");

//MELNIZA
define ("ME", " سطح آسیاب آرد ");
define ("ME1", "گندم در آسیاب به آرد تبدیل می شود. بسته به سطح، آسیاب می تواند تولید گندم را تا 25 درصد افزایش دهد.");
define ("ME2", "");
define ("ME3", "");




//KON
define ("KO", " سطح اصطبل ");
define ("KO1", " تمام نیروهای سوار شده در اصطبل آموزش دیده اند. هر چه سطح بالاتر باشد، نیروها سریعتر آموزش می بینند. ");
define("KO2","هیچ واحدی برای تحقیق در آکادمی در دسترس نیست ");
define("KO3", "آموزش می تواند زمانی آغاز شود که اصطبل های بزرگ تکمیل شوند.");
define("KZ333", "آموزش می تواند زمانی آغاز شود که اصطبل بزرگ تکمیل شود.");


//GLAVNOE ZDANIE
define("gz0","تخریب ساختمان ها:");
define("gz1","اگر به ساختمان های خود نیاز ندارید، می توانید آن ها را از طریق ساختمان اصلی تخریب کنید.");
define("gz2","تخریب در حال انجام");
define("gz3","برای اتمام ساخت و تحقیقات فوری در این روستا ، 2 طلا پرداخت می کنید؟");
define("gz4","تخریب ساختمان");

//COKRA
define ("CO", " سطح خزانه داری ");
define ("CO1", "ثروت امپراتوری شما در اتاق گنج نگهداری می شود. اتاق گنج شما فقط برای یک گنج جا دارد. بعد از اینکه مصنوع را گرفتید، 24 ساعت در سرور معمولی و 12 ساعت در سرور با سرعت 3 برابر طول می کشد تا اثر مصنوع موثر واقع شود.");
define ("CO2", "");
define ("CO3", "");
define ("CO4", "");

//GHYGYN
define ("GH", " سطح ذوب آهن ");
define ("GH1", "آهن در ریخته گری ذوب می شود. بسته به سطح، ریخته گری می تواند تولید آهن را تا 25 درصد افزایش دهد.");
define ("GH2", "پاداش آهن فعلی");
define ("GH3", "پاداش آهن در سطح");
define ("GH4", "");

//KIRPIGH
define ("KI", " سطح آجرپزی ");
define ("KI1", " خاک رس در آجرکاری به صورت آجر پخته می شود. بسته به سطح، آجرکاری می تواند تولید خاک رس را تا 25 درصد افزایش دهد.");
define ("KI2", "پاداش فعلی خشت");
define ("KI3", "پاداش خشت در سطح");
define ("KI4", "");
define ("KI5", "");
define ("KI6", "");

define ("CURB", "افزایش تولید فعلی");
define ("CURBL", "افزایش سطح");
define("NOTDONEU","ساخت هنوز تکمیل نشده است.");
define("SPEEDB","پاداش سرعت فعلی");
define("SPEEDBL","پاداش سرعت در سطح");

//ратуша
define("ratusha0","جشن ها می توانند با تکمیل ساختمان شهرداری آغاز شوند.");
define("ratusha1","جشن ها");
define("ratusha2","عمل");
define("ratusha3","جشن گرفتن");
define("ratusha4","پخش ویدیو");
define("ratusha5","تولید محصول منفی است بنابراین شما هرگز به منابع مورد نیاز نخواهید رسید");
define("ratusha6","خیلی کم");
define("ratusha7","منابع");
define("ratusha8","جشن گرفتن");
define("ratusha9","جشن بزرگ (2000 امتیاز فرهگنی)");
define("ratusha10","منابع کافی");
define("ratusha11","امتیاز فزهنگی");
define("ratusha12","مدت زمان");
define("ratusha13","پایان");
define("ratusha14","یه جشن کوچولو");
define("ratusha15","");
define("ratusha16","");
define("ratusha17","");
define("ratusha18","");
define("ratusha19","");
define("ratusha20","");


//ARENA
define ("AR", " سطح میدان تمرین ");
define ("AR1", " در میدان مسابقات، نیروهای شما می توانند استقامت خود را بهبود بخشند. هرچه این سطح بالاتر باشد، زمانی که نیروهای شما بیش از 30 میدان دورتر باشند، سریعتر حرکت خواهند کرد.");
define ("AR2", "");
define ("AR3", "");
define ("AR4", "");

//MASTERSKAI
define ("MA", " سطح کارگاه ");
define ("MA1", "سلاح های محاصره مانند منجنیق و دژکوب در کارگاه محاصره تولید می شود. هر چه سطح بالاتر باشد، واحدها سریعتر تولید می شوند. ");
define ("MA2", "");
define ("MA3", "");
define ("MA4", "");

//PEKARNIA
define ("PE", " سطح نانوایی ");
define ("PE1", " در نانوایی، آرد حاصل از آسیاب به نان پخته می شود. در ارتباط با آسیاب، نانوایی می تواند تولید گندم را تا 50 درصد افزایش دهد. ");
define ("PE2", "");
define ("PE3", "");
define ("PE4", "");

//RATYSHA
define ("RAT", " سطح تالار شهر ");
define ("RAT1", " می توانید مهمانی های عجیب و غریبی را برای شهروندان خود در تالار شهر برگزار کنید. این مهمانی ها تعداد امتیازات فرهنگی شما را افزایش می دهند.");
define ("RAT2", "");
define ("RAT3", "");
define ("RAT4", "");

//PALATA
define ("PAL", " Trade Office Level ");
define ("PAL1", " The trade carts of your marketplace can be improved in the trade office. The higher the level, the more each merchant can carry. ");
define ("PAL2", "");
define ("PAL3", "");
define ("PAL4", "");

//VODOPOI
define ("VO", " Horse Drinking Trough Level ");
define ("VO1", " The horse drinking trough cares for the well-being of your horses, lowers their crop consumption and makes their training faster. Per level, the training time in your stable is reduced. ");
define ("VO2", "");
define ("VO3", "");
define ("VO4", "");


//BA
define ("BA", " Great Granary Level ");
define ("BA1", " In the granary the wheat produced by your farms is stored. The great granary offers you even more space to keep your wheat dry and safe and free from maggots. ");
define ("BA2", "");
define ("BA3", "");
define ("BA4", "");

//BK
define ("BK", " Great Warehouse Level ");
define ("BK1", " In your warehouse wood, clay and iron resources are stored. The great warehouse give you even more space to keep your resources dry and safe. ");
define ("BK2", "");
define ("BK3", "");
define ("BK4", "");
define ("BK5", "");

//PIVO
define ("PI", " Brewery Level ");
define ("PI1", " Tasty mead is brewed in the brewery and later quaffed by the soldiers during the celebrations. ");
define ("PI2", "");
define ("PI3", "");
define ("PI4", "");

//CHYDO
define ("CHY", " Wonder Of The World Level ");
define ("CHY1", " The wonder of the world represents the pride of creation. Only the mightiest and richest are able to build such a masterwork and defend it against envious enemies. ");
define ("CHY2", "");
define ("CHY3", "");
define ("CHY4", "");
define ("CHY5", "");

//KAZARMA BIG
define ("BIG", "Great Barracks Level ");
define ("BIG1", "The great barracks allows you to build more units at the same time but they cost thrice the original amount. ");
define ("BIG2", "");
define ("BIG3", "");
define ("BIG4", "");

//KONI BIG
define ("KONI ", "Great Stable Level ");
define ("KONI1", "The great stable allows you to build more units at the same time but they cost thrice the original amount. ");
define ("KONI2", "");
define ("KONI3", "");
define ("KONI4", "");

//KAPKAN
define ("KAP", "Trapper Level ");
define ("KAP1", "The trapper protects your village with well hidden traps. This means that unwary enemies can be imprisoned and won't be able to harm your village anymore. ");
define ("KAP2", "");
define ("KAP3", "");
define ("KAP4", "");

//KYZNIA
define ("KY", " Armoury Level ");
define ("KY1", " In the armoury's melting furnaces your warriors' armour is enhanced. By increasing its level you can order the fabrication of even better armour.");
define ("KY2", "");
define ("KY3", "");
define ("KY4", "");


//KYZNIZA
define ("KZ", " Blacksmith Level ");
define ("KZ1", " In the blacksmith's melting furnaces your warriors' weapons are enhanced. By increasing its level you can order the fabrication of even better weapons.");
define ("KZ2", "بحث");
define ("KZ3", "Blacksmith");
define ("KZ4", "Action");
define ("KZ5", "تطوير");
define ("KZ6", "المدة");
define ("KZ7", "الانتهاء");
define ("KZ8", "تطوير<br>الحداد");
define ("KZ9", "تطوير<br> تحت العمل");

define ("oasis", "آبادی");
define ("Namet", "نام");
define ("Quantityе", "تعداد");
define ("Maxе", "Max");
define ("Avaliablet", "موجود");
define ("TRA1", "قائمة التدريب");
define ("TRA2", "Duration");
define ("TRA3", "الانتهاء");
define ("Workshop", "Workshop");
define ("RallyPoint", "Rally Point");
define ("Blacksmith", "Blacksmith");
define ("Armoury", "Armoury");
define ("Stable", "Stable");
define ("SendResouces", "ارسال موارد");
define ("Buyma", "شراء");
define ("Offerma", "العروض");
define ("ONPCtrading", "تبادل الموارد");
define ("ilior", "or");
define ("markVillages", "القرى");
define ("markgo", "go");
define ("Constructnewbuilding", "Construct new building");
define ("SOCR", "The riches of your empire are kept in the treasury. A treasury can only store one artefact. <br><br> You need a treasury level 10 for a small artefact, or level 20 for a great one.");
define ("mesotkogo", "المرسل:");
define ("mestena", "العنوان:");
define ("meskomy", "المستقبل:");
//Самая жопа avaliable
define ("avaAcademy", "Academy");
define ("avaAcademy1", "In the academy new unit types can be researched. By increasing its level you can order the research of better units.");
define ("avaArmoury", "Armoury");
define ("avaArmoury1", "In the armoury melting furnaces your warriors; armour is enhanced. By increasing its level you can order the fabrication of even better armour.");
define ("avaCityWall", "City Wall");
define ("avaCityWall1", "By building a City Wall you can protect your village against the barbarian hordes of your enemies. The higher the wall's level, the higher the bonus given to your forces' defence.");


define("ITEM0","کوثر آگاهی");
define("IEFF0","+15% افزایش تجربه.");
define("ITEM1","کوثر کشف");
define("IEFF1","+20% افزایش تجربه.");
define("ITEM2","کوثر حکمت");
define("IEFF2","+25% افزایش تجربه.");
define("ITEM3","کوثر تجدید");
define("IEFF3","+10 نقطه سلامتی/روز");
define("ITEM4","کوثر سلامت");
define("IEFF4","+15 نقطه سلامتی/روز");
define("ITEM5","کوثر شفا");
define("IEFF5","+20 نقطه سلامتی/روز");
define("ITEM6","کوثر نبرد غریقی");
define("IEFF6","+100 نقطه فرهنگی در روز");
define("ITEM7","کوثر قبایل");
define("IEFF7","+400 نقطه فرهنگی در روز");
define("ITEM8","کوثر ژنرال");
define("IEFF8","+800 نقطه فرهنگی در روز");
define("ITEM9","کوثر سرباز");
define("IEFF9","10% کاهش زمان آموزش مورد نیاز در استبل");
define("ITEM10","کوثر سلاح سرباز");
define("IEFF10","15% کاهش زمان آموزش مورد نیاز در استبل");
define("ITEM11","کوثر سلاح سرباز سنگین");
define("IEFF11","20% کاهش زمان آموزش مورد نیاز در استبل");
define("ITEM12","کوثر سرباز حمل و نقل");
define("IEFF12","10% کاهش زمان آموزش مورد نیاز در تکنولوژی");
define("ITEM13","کوثر سربازان نظامی");
define("IEFF13","15% کاهش زمان آموزش مورد نیاز در تکنولوژی");
define("ITEM14","کوثر رهبر");
define("IEFF14","20% کاهش زمان آموزش مورد نیاز در تکنولوژی");
define("ITEM15","راه تازه شوندگی، روان");
define("IEFF15","+20 تازه سازی نقاط سلامتی روزانه");
define("ITEM16","راه تازه شوندگی");
define("IEFF16","+30 تازه سازی نقاط سلامتی روزانه");
define("ITEM17","راه تازه شوندگی، ثقیل");
define("IEFF17","+40 تازه سازی نقاط سلامتی روزانه");
define("ITEM18","نشان جنگجوی خفیف");
define("IEFF18","4 نقطه سلامتی کاهش درصد آسیب پذیری<br> +10 تازه سازی نقاط سلامتی");
define("ITEM19","نشان جنگجو");
define("IEFF19","6 نقطه سلامتی کاهش درصد آسیب پذیری<br> +15 تازه سازی نقاط سلامتی");
define("ITEM20","نشان جنگجوی ثقیل");
define("IEFF20","8 نقطه سلامتی کاهش درصد آسیب پذیری<br> +20 تازه سازی نقاط سلامتی");
define("ITEM21","گام صدری، خفیف");
define("IEFF21","+500 قابلیت نبردی برای قهرمان");
define("ITEM22","گام صدری");
define("IEFF22","+1000 قابلیت نبردی برای قهرمان");
define("ITEM23","گام صدری، ثقیل");
define("IEFF23","+1500 قابلیت نبردی برای قهرمان");
define("ITEM24","گام عضلانی، خفیف");
define("IEFF24","3 نقطه سلامتی کاهش درصد آسیب پذیری<br> +250 قابلیت نبردی برای قهرمان");
define("ITEM25","گام عضلانی");
define("IEFF25","4 نقطه سلامتی کاهش درصد آسیب پذیری<br> +500 قابلیت نبردی برای قهرمان");
define("ITEM26","گام عضلانی، ثقیل");
define("IEFF26","5 نقطه سلامتی کاهش درصد آسیب پذیری<br> +750 قابلیت نبردی برای قهرمان");
define("ITEM27","نقشه کوچک");
define("IEFF27","30% بازگشت سریع‌تر");
define("ITEM28","نقشه");
define("IEFF28","40% بازگشت سریع‌تر");
define("ITEM29","نقشه بزرگ");
define("IEFF29","50% بازگشت سریع‌تر");
define("ITEM30","نشان کوچک قبیله مثبت");
define("IEFF30","30% انتقال نیروهای سریع‌تر بین روستاهای ویژه‌ی کاربر");
define("ITEM31","نشان قبیله مثبت");
define("IEFF31","40% انتقال نیروهای سریع‌تر بین روستاهای ویژه‌ی کاربر");
define("ITEM32","نشان بزرگ قبیله مثبت");
define("IEFF32","50% انتقال نیروهای سریع‌تر بین روستاهای ویژه‌ی کاربر");
define("ITEM33","نشان مثبت پیمان");
define("IEFF33","15% انتقال نیروهای سریع‌تر بین بازیکنان در پیمان");
define("ITEM34","نشان پیمان");
define("IEFF34","20% انتقال نیروهای سریع‌تر بین بازیکنان در پیمان");
define("ITEM35","نشان بزرگ پیمان");
define("IEFF35","25% انتقال نیروهای سریع‌تر بین بازیکنان در پیمان");
define("ITEM36","کیسه کوچک کارت دزد");
define("IEFF36","+10% جایزه تاراج");
define("ITEM37","کیسه کارت دزد");
define("IEFF37","+15% جایزه تاراج");
define("ITEM38","کیسه بزرگ کارت دزد");
define("IEFF38","+20% جایزه تاراج");
define("ITEM39","راه جنگ صغیر");
define("IEFF39","+500 قابلیت نبردی برای قهرمان");
define("ITEM40","راه جنگ");
define("IEFF40","+1000 قابلیت نبردی برای قهرمان");
define("ITEM41","راه جنگ بزرگ");
define("IEFF41","+1500 قابلیت نبردی برای قهرمان");
define("ITEM42","کیف نبرد کوچک ضد نیترژن");
define("IEFF42","+20% ظرفیت نبردی ضد نیترژن");
define("ITEM43","کیف نبرد ضد نیترژن");
define("IEFF43","+25% ظرفیت نبردی ضد نیترژن");
define("ITEM44","کیف نبرد بزرگ ضد نیترژن");
define("IEFF44","+30% ظرفیت نبردی ضد نیترژن");

// Hero Romans Items
define("ITEM45","شمشیر پیاده اول ، کوتاه");
define("IEFF45","+500 ظرفیت نبردی برای قهرمان ؛ +3 توانایی حمله ای +3 توانایی دفاعی برای هر پیاده اول");
define("ITEM46","شمشیر پیاده اول");
define("IEFF46","+1000 ظرفیت نبردی برای قهرمان ؛ +4 توانایی حمله ای +4 توانایی دفاعی برای هر پیاده اول");
define("ITEM47","شمشیر پیاده اول ، بلند");
define("IEFF47","+1500 ظرفیت نبردی برای قهرمان ؛ +5 توانایی حمله ای +5 توانایی دفاعی برای هر پیاده اول");
define("ITEM48","شمشیر نگهبان کوتاه قیصر");
define("IEFF48","+500 ظرفیت نبردی برای قهرمان ؛ +3 توانایی حمله ای +3 توانایی دفاعی برای هر نگهبان قیصر");
define("ITEM49","شمشیر نگهبان قیصر");
define("IEFF49","+1000 ظرفیت نبردی برای قهرمان ؛ +4 توانایی حمله ای +4 توانایی دفاعی برای هر نگهبان قیصر");
define("ITEM50","شمشیر نگهبان قیصر بلند");
define("IEFF50","+1500 ظرفیت نبردی برای قهرمان ؛ +5 توانایی حمله ای +5 توانایی دفاعی برای هر نگهبان قیصر");
define("ITEM51","شمشیر پیاده حمله کوتاه");
define("IEFF51","+500 ظرفیت نبردی برای قهرمان ؛ +3 توانایی حمله ای +3 توانایی دفاعی برای هر پیاده حمله");
define("ITEM52","شمشیر پیاده حمله");
define("IEFF52","+1000 ظرفیت نبردی برای قهرمان ؛ +4 توانایی حمله ای +4 توانایی دفاعی برای هر پیاده حمله");
define("ITEM53","شمشیر پیاده حمله ، بلند");
define("IEFF53","+1500 ظرفیت نبردی برای قهرمان ؛ +5 توانایی حمله ای +5 توانایی دفاعی برای هر پیاده حمله");
define("ITEM54","شمشیر سرباز قیصر کوتاه");
define("IEFF54","+500 ظرفیت نبردی برای قهرمان ؛ +9 توانایی حمله ای +9 توانایی دفاعی برای هر سرباز قیصر");
define("ITEM55","شمشیر سوار قیصر");
define("IEFF55","+1000 ظرفیت نبردی برای قهرمان ؛ +12 توانایی حمله ای +12 توانایی دفاعی برای هر سوار قیصر");
define("ITEM56","شمشیر سوار قیصر بلند");
define("IEFF56","+1500 ظرفیت نبردی برای قهرمان ؛ +15 توانایی حمله ای +15 توانایی دفاعی برای هر سوار قیصر");
define("ITEM57","کمان فرسان قیصر کوتاه");
define("IEFF57","+500 ظرفیت نبردی برای قهرمان ؛ +12 توانایی حمله ای +12 توانایی دفاعی برای هر سوار قیصر");
define("ITEM58","کمان فرسان قیصر");
define("IEFF58","+1000 ظرفیت نبردی برای قهرمان ؛ +16 توانایی حمله ای +16 توانایی دفاعی برای هر سوار قیصر");
define("ITEM59","کمان فرسان قیصر بلند");
define("IEFF59","+1500 ظرفیت نبردی برای قهرمان ؛ +20 توانایی حمله ای +20 توانایی دفاعی برای هر سوار قیصر");

define("ITEM60", "نیزه کتیبه");
define("IEFF60", "+500 ظرفیت نبردی برای قهرمان ؛ +3 توانایی حمله ای +3 توانایی دفاعی برای هر کتیبه");
define("ITEM61", "سن کتیبه");
define("IEFF61", "+1000 ظرفیت نبردی برای قهرمان ؛ +4 توانایی حمله ای +4 توانایی دفاعی برای هر کتیبه");
define("ITEM62", "کتیبه");
define("IEFF62", "+1500 ظرفیت نبردی برای قهرمان ؛ +5 توانایی حمله ای +5 توانایی دفاعی برای هر کتیبه");
define("ITEM63", "شمشیر مبارز کوتاه");
define("IEFF63", "+500 ظرفیت نبردی برای قهرمان ؛ +3 توانایی حمله ای +3 توانایی دفاعی برای هر مبارز");
define("ITEM64", "شمشیر مبارز");
define("IEFF64", "+1000 ظرفیت نبردی برای قهرمان ؛ +4 توانایی حمله ای +4 توانایی دفاعی برای هر مبارز");
define("ITEM65", "شمشیر مبارز بلند");
define("IEFF65", "+1500 ظرفیت نبردی برای قهرمان ؛ +5 توانایی حمله ای +5 توانایی دفاعی برای هر مبارز");
define("ITEM66", "کمان رعد جرمان کوتاه");
define("IEFF66", "+500 ظرفیت نبردی برای قهرمان ؛ +6 توانایی حمله ای +6 توانایی دفاعی برای هر رعد جرمان");
define("ITEM67", "کمان رعد جرمان");
define("IEFF67", "+1000 ظرفیت نبردی برای قهرمان ؛ +8 توانایی حمله ای +8 توانایی دفاعی برای هر رعد جرمان");
define("ITEM68", "کمان رعد جرمان بلند");
define("IEFF68", "+1500 ظرفیت نبردی برای قهرمان ؛ +10 توانایی حمله ای +10 توانایی دفاعی برای هر رعد جرمان");
define("ITEM69", "عصای فرسان سلت کوتاه");
define("IEFF69", "+500 ظرفیت نبردی برای قهرمان ؛ +6 توانایی حمله ای +6 توانایی دفاعی برای هر فرسان سلت");
define("ITEM70", "عصای فرسان سلت");
define("IEFF70", "+1000 ظرفیت نبردی برای قهرمان ؛ +8 توانایی حمله ای +8 توانایی دفاعی برای هر فرسان سلت");
define("ITEM71", "عصای فرسان سلت بلند");
define("IEFF71", "+1500 ظرفیت نبردی برای قهرمان ؛ +10 توانایی حمله ای +10 توانایی دفاعی برای هر فرسان سلت");
define("ITEM72", "رمح فرسان هیدواینر کوتاه");
define("IEFF72", "+500 ظرفیت نبردی برای قهرمان ؛ +9 توانایی حمله ای +9 توانایی دفاعی برای هر فرسان هیدواینر");
define("ITEM73", "رمح فرسان هیدواینر");
define("IEFF73", "+1000 ظرفیت نبردی برای قهرمان ؛ +12 توانایی حمله ای +12 توانایی دفاعی برای هر فرسان هیدواینر");
define("ITEM74", "رمح فرسان هیدواینر بلند");
define("IEFF74", "+1500 ظرفیت نبردی برای قهرمان ؛ +15 توانایی حمله ای +15 توانایی دفاعی برای هر فرسان هیدواینر");

define("ITEM75", "عصای نبرد قهرمان کوتاه");
define("IEFF75", "+500 ظرفیت نبردی برای قهرمان ؛ +3 توانایی حمله‌ای +3 توانایی دفاعی برای هر نبرد قهرمان");
define("ITEM76", "عصای نبرد قهرمانی");
define("IEFF76", "+1000 ظرفیت نبردی برای قهرمان ؛ +4 توانایی حمله‌ای +4 توانایی دفاعی برای هر نبرد قهرمان");
define("ITEM77", "عصای نبرد قهرمان بلند");
define("IEFF77", "+1500 ظرفیت نبردی برای قهرمان ؛ +5 توانایی حمله‌ای +5 توانایی دفاعی برای هر نبرد قهرمان");
define("ITEM78", "رمح نبرد برمح");
define("IEFF78", "+500 ظرفیت نبردی برای قهرمان ؛ +3 توانایی حمله‌ای +3 توانایی دفاعی برای هر نبرد برمح");
define("ITEM79", "رمح نبرد قهرمان برمح");
define("IEFF79", "+1000 ظرفیت نبردی برای قهرمان ؛ +4 توانایی حمله‌ای +4 توانایی دفاعی برای هر نبرد برمح");
define("ITEM80", "رمح نبرد قهرمان برمح طولانی");
define("IEFF80", "+1500 ظرفیت نبردی برای قهرمان ؛ +5 توانایی حمله‌ای +5 توانایی دفاعی برای هر نبرد برمح");
define("ITEM81", "شمشیر نبرد با فأس کوتاه");
define("IEFF81", "+500 ظرفیت نبردی برای قهرمان ؛ +3 توانایی حمله‌ای +3 توانایی دفاعی برای هر نبرد با فأس");
define("ITEM82", "شمشیر نبرد قهرمان با فأس");
define("IEFF82", "+1000 ظرفیت نبردی برای قهرمان ؛+4 توانایی حمله‌ای +4 توانایی دفاعی برای هر نبرد با فأس");
define("ITEM83", "شمشیر نبرد قهرمان با فأس طولانی");
define("IEFF83", "+1500 ظرفیت نبردی برای قهرمان ؛ +5 توانایی حمله‌ای +5 توانایی دفاعی برای هر نبرد با فأس");
define("ITEM84", "شمشیر نبرد قیصر کوتاه");
define("IEFF84", "+500 ظرفیت نبردی برای قهرمان ؛ +6 توانایی حمله‌ای +6 توانایی دفاعی برای هر نبرد قیصر");
define("ITEM85", "شمشیر نبرد قیصر");
define("IEFF85", "+1000 ظرفیت نبردی برای قهرمان ؛ +8 توانایی حمله‌ای +8 توانایی دفاعی برای هر نبرد قیصر");
define("ITEM86", "شمشیر نبرد قیصر طولانی");
define("IEFF86", "+1500 ظرفیت نبردی برای قهرمان ؛ +10 توانایی حمله‌ای +10 توانایی دفاعی برای هر نبرد قیصر");
define("ITEM87", "شمشیر نبرد رعد جرمانی کوتاه");
define("IEFF87", "+500 ظرفیت نبردی برای قهرمان ؛ +9 توانایی حمله‌ای +9 توانایی دفاعی برای هر رعد جرمانی");
define("ITEM88", "شمشیر نبرد رعد جرمانی");
define("IEFF88", "+1000 ظرفیت نبردی برای قهرمان ؛ +12 توانایی حمله‌ای +12 توانایی دفاعی برای هر رعد جرمانی");
define("ITEM89", "شمشیر نبرد رعد جرمانی طولانی");
define("IEFF89", "+1500 ظرفیت نبردی برای قهرمان ؛ +15 توانایی حمله‌ای +15 توانایی دفاعی برای هر رعد جرمانی");

define("ITEM90", "کفش تازه‌سازی");
define("IEFF90", "+10 نقطه سلامتی/روز");
define("ITEM91", "کفش سلامت");
define("IEFF91", "+15 نقطه سلامتی/روز");
define("ITEM92", "کفش درمان");
define("IEFF92", "+20 نقطه سلامتی/روز");
define("ITEM93", "کفش تازه‌سازی منزل");
define("IEFF93", "+25% افزایش سرعت برای حرکت به مسافت های بیشتر از 20 فیلد");
define("ITEM94", "کفش مبارزه");
define("IEFF94", "+50% افزایش سرعت برای حرکت به مسافت های بیشتر از 20 فیلد");
define("ITEM95", "کفش قائد");
define("IEFF95", "+75% افزایش سرعت برای حرکت به مسافت های بیشتر از 20 فیلد");
define("ITEM96", "حدود حصان، کوچک");
define("IEFF96", "+3 فیلد در ساعت");
define("ITEM97", "حدود حصان");
define("IEFF97", "+4 فیلد در ساعت");
define("ITEM98", "حدود حصان بزرگ");
define("IEFF98", "+5 فیلد در ساعت");
define("ITEM99", "حصان نزدیک رو، سبک");
define("IEFF99", "+14 فیلد در ساعت سرعت بیشتر برای قهرمان");
define("ITEM100", "اسب پاک‌نجاد");
define("IEFF100", "+17 فیلد در ساعت سرعت بیشتر برای قهرمان");
define("ITEM101", "حصان مبارزه");
define("IEFF101", "+20 فیلد در ساعت سرعت بیشتر برای قهرمان");

define("ITEM102", "آجیل جان");
define("IEFF102", "بعد از جنگ های رو به رو، اگر در جعبه قهرمان باشد، می‌توانید به صورت فوری 25٪ از تلفات را برطرف کنید. فقط می‌توانید از تلفاتی که توسط بطل سبق ایجاد شده باشد برای برطرف کردن استفاده کنید.");
define("ITEM103", "آجیل سریع");
define("IEFF103", "بعد از جنگ های رو به رو، اگر در جعبه قهرمان باشد، می‌توانید به صورت فوری 33٪ از تلفات را برطرف کنید. فقط می‌توانید از تلفاتی که توسط بطل سبق ایجاد شده باشد برای برطرف کردن استفاده کنید.");
define("ITEM104", "پاینده");
define("IEFF104", "اسب‌ها را از جو در می‌آورد. می‌توان آنها را در قالب یک سرباز به‌عنوان جانشین روانه‌ای قرار داد.");
define("ITEM105", "پرچم محفور");
define("IEFF105", "با استفاده از آن، می‌توانید برای قهرمان برخی نقاط تجربه بدست آورید. فقط در زمان استفاده فعال خواهد بود. می‌توان آنها را ذخیره کرد و جانشین روانه‌ای قرار داد.");
define("ITEM106", "دندان درمانی");
define("IEFF106", "نقاط سلامتی قهرمان را فوراً بهبود می‌بخشد. تعداد دندان‌های استفاده شده در نسبت با درصد بهبود یافته توسط قهرمان (حداکثر 100٪) محاسبه می‌شود.فعال خواهد شد در زمان استفاده. می‌توان آنها را ذخیره کرد و جانشین روانه‌ای قرار داد.");
define("ITEM107", "سرود زندگی");
define("IEFF107", "قهرمان را فوراً و بدون هزینه‌های منبع به زندگی باز می‌گردانید. این ماده را نمی‌توان استفاده کرد زمانی که قهرمان زنده است. فعال فوراً خواهد شد.");
define("ITEM108", "کتاب حکمت");
define("IEFF108", "نقاط تجربه‌های قهرمان را به طور کامل توزیع مجدد می‌کند.");
define("ITEM109", "گواهی آیین قانونی");
define("IEFF109", "می‌توانید وفاداری روستایی را که قهرمان در آن قرار دارد، برای هر گواهی به میزان 1٪ افزایش دهید. فعال فوراً پس از استفاده خواهد بود. می‌توان آنها را ذخیره کرد و جانشین روانه‌ای قرار داد.");
define("ITEM110", "آثار هنری");
define("IEFF110", "اگر آنها را به ساکنین اهدا کنید، آن‌ها به تشکیل جشن‌های عامیانه بدون نیاز به توسعه سازه‌های شهری می‌پردازند.");
define("ITEM111","");
define("IEFF111","");
define("ITEM112","");
define("IEFF112","");
define("ITEM113","");
define("IEFF113","");
define("ITEM114","");
define("IEFF114","");

// iRedux - New tribes items
define("ITEM115", "ميليشيای معمولی");
define("IEFF115", "+500 قدرت نبردی برای قهرمان ؛ +3 به‌روزرسانی حمله +3 به‌روزرسانی دفاع برای هر ميلیشیای معمولی");
define("ITEM116", "صولجان ميليشیای معمولی");
define("IEFF116", "+1000 قدرت نبردی برای قهرمان ؛ +4 به‌روزرسانی حمله +4 به‌روزرسانی دفاع برای هر ميلیشیای معمولی");
define("ITEM117", "نجم ميلیشیای معمولی");
define("IEFF117", "+1500 قدرت نبردی برای قهرمان ؛ +5 به‌روزرسانی حمله +5 به‌روزرسانی دفاع برای هر ميلیشیای معمولی");
define("ITEM118", "گرد فلک حارس راه");
define("IEFF118", "+500 قدرت نبردی برای قهرمان ؛ +3 به‌روزرسانی حمله +3 به‌روزرسانی دفاع برای هر گرد فلک حارس راه");
define("ITEM119", "گرد فلک حارس راه");
define("IEFF119", "+1000 قدرت نبردی برای قهرمان ؛ +4 به‌روزرسانی حمله +4 به‌روزرسانی دفاع برای هر گرد فلک حارس راه");
define("ITEM120", "گرد فلک جنگ حارس راه");
define("IEFF120", "+1500 قدرت نبردی برای قهرمان ؛ +5 به‌روزرسانی حمله +5 به‌روزرسانی دفاع برای هر گرد فلک حارس راه");
define("ITEM121", "کوپش کوتاه قهرمان");
define("IEFF121", "+500 به قدرت قهرمان برای هر کوپش قهرمان: +3 حمله و +3 دفاع");
define("ITEM122", "کوپش قهرمان");
define("IEFF122", "+1000 به قدرت قهرمان برای هر کوپش قهرمان: +4 حمله و +4 دفاع");
define("ITEM123", "کوپش بلند قهرمان");
define("IEFF123", "+1500 به قدرت قهرمان برای هر کوپش قهرمان: +5 حمله و +5 دفاع");
define("ITEM124", "نیزه نگهبان آن‌هور");
define("IEFF124", "+500 به قدرت قهرمان برای هر نگهبان آن‌هور: +6 حمله و +6 دفاع");
define("ITEM125", "نیزه نگهبان آن‌هور");
define("IEFF125", "+1000 به قدرت قهرمان برای هر نگهبان آن‌هور: +8 حمله و +8 دفاع");
define("ITEM126", "نیزه رابرنگی نگهبان آن‌هور");
define("IEFF126", "+1500 به قدرت قهرمان برای هر نگهبان آن‌هور: +10 حمله و +10 دفاع");
define("ITEM127", "کمان کوتاه رسهپ");
define("IEFF127", "+500 به قدرت قهرمان برای هر کمان رسهپ: +9 حمله و +9 دفاع");
define("ITEM128", "کمان رسهپ");
define("IEFF128", "+1000 به قدرت قهرمان برای هر کمان رسهپ: +12 حمله و +12 دفاع");
define("ITEM129", "کمان بلند رسهپ");
define("IEFF129", "+1500 به قدرت قهرمان برای هر کمان رسهپ: +15 حمله و +15 دفاع");

define("ITEM130", "کلنگ هاکت سوار");
define("IEFF130", "+500 به قدرت قهرمان برای هر سوار: +3 حمله و +3 دفاع");
define("ITEM131", "کلنگ سوار");
define("IEFF131", "+1000 به قدرت قهرمان برای هر سوار: +4 حمله و +4 دفاع");
define("ITEM132", "کلنگ مبارزه‌ای سوار");
define("IEFF132", "+1500 به قدرت قهرمان برای هر سوار: +5 حمله و +5 دفاع");
define("ITEM133", "کمان کوتاه ترکیبی کمانگر");
define("IEFF133", "+500 به قدرت قهرمان برای هر کمانگر: +3 حمله و +3 دفاع");
define("ITEM134", "کمان ترکیبی کمانگر");
define("IEFF134", "+1000 به قدرت قهرمان برای هر کمانگر: +4 حمله و +4 دفاع");
define("ITEM135", "کمان بلند ترکیبی کمانگر");
define("IEFF135", "+1500 به قدرت قهرمان برای هر کمانگر: +5 حمله و +5 دفاع");
define("ITEM136", "شمشیر کوتاه سواران سه‌راه");
define("IEFF136", "+500 به قدرت قهرمان برای هر سوار سه‌راه: +6 حمله و +6 دفاع");
define("ITEM137", "شمشیر سواران سه‌راه");
define("IEFF137", "+1000 به قدرت قهرمان برای هر سوار سه‌راه: +8 حمله و +8 دفاع");
define("ITEM138", "شمشیر بلند سواران سه‌راه");
define("IEFF138", "+1500 به قدرت قهرمان برای هر سوار سه‌راه: +10 حمله و +10 دفاع");
define("ITEM139", "کمان کوتاه ترکیبی هدف‌زن");
define("IEFF139", "+500 به قدرت قهرمان برای هر هدف‌زن: +6 حمله و +6 دفاع");
define("ITEM140", "کمان ترکیبی هدف‌زن");
define("IEFF140", "+1000 به قدرت قهرمان برای هر هدف‌زن: +8 حمله و +8 دفاع");
define("ITEM141", "کمان بلند ترکیبی هدف‌زن");
define("IEFF141", "+1500 به قدرت قهرمان برای هر هدف‌زن: +10 حمله و +10 دفاع");
define("ITEM142", "شمشیر کوتاه غارتگر");
define("IEFF142", "+500 به قدرت قهرمان برای هر غارتگر: +9 حمله و +9 دفاع");
define("ITEM143", "شمشیر غارتگر");
define("IEFF143", "+500 به قدرت قهرمان برای هر غارتگر: +12 حمله و +12 دفاع");
define("ITEM144", "شمشیر بلند غارتگر");
define("IEFF144", "+500 به قدرت قهرمان برای هر غارتگر: +15 حمله و +15 دفاع");


define("HEROI0","امکانات");
define("HEROI1","امتیاز");
define("HEROI2","attribute power tooltip");
define("HEROI3","قدرت مبارزه با دفاع و حمله قهرمانان شما ترکیب می شود. هر چه قدرت مبارزه بیشتر باشد در نبرد بهتر است.");
define("HEROI4","قدرت هجومی :");
define("HEROI5","از قهرمان");
define("HEROI6","attribute power tooltip");
define("HEROI7","قدرت قهرمان را در حمله و دفاع افزایش می دهد و آسیب های وارده در حملات، ماجراجویی و دفاع را کاهش می دهد.");
define("HEROI8","قدرت هجومی");
define("HEROI9","از قهرمان +");
define("HEROI10","ویژگی های");
define("HEROI11","قدرت مبارزه");
define("HEROI12","حداکثر");
define("HEROI13","افزایش توان حمله برای همه نیروهای مرتبط با آن.");
define("HEROI14","امتیاز هجومی");
define("HEROI15","افزایش توان دفاعی برای همه نیروهای مرتبط با آن.");
define("HEROI16","امتیاز دفــاعی");
define("HEROI17","تولید اقتدار فعلی");
define("HEROI18","بازدهی منابع");
define("HEROI19","مـنـابـع");
define("HEROI20","توزیع کردن");
define("HEROI21"," تولیدات منابع قهرمان را انتخاب کنید");
define("HEROI22","همه منابع");
define("HEROI23","بازسازی قهرمان شما:");
define("HEROI24","در روز");
define("HEROI25","وضعیت سلامتی");
define("HEROI26","قهرمان در این دهکده زنده خواهد شد");
define("HEROI27","منابع کافی برای احیای قهرمان وجود ندارد");
define("HEROI28","زنده کردن قهرمان");
define("HEROI29","قهرمان آماده خواهد شد");
define("HEROI30","مدت زمان");
define("HEROI31","قهرمان به مقدار ");
define("HEROI32","تجربه برای ارتقاء سطح نیاز دارد");
define("HEROI33","تجربه");
define("HEROI34","هر چه سطح قهرمان بالاتر باشد، امتیاز بیشتری کسب می کنید.");
define("HEROI35","سطح قهرمان");
define("HEROI36","سرعت قهرمانان شما تعیین می کند که او در یک ساعت چند خانه را طی کند");
define("HEROI37","سرعت:");
define("HEROI38","خانه/ساعت");
define("HEROI39","قهرمان شما همیشه با نیروهای شما باقی خواهد ماندك.");
define("HEROI40","در صورت هجوم به شما، قهرمان شما گریز میکند و محافظت می‌شود.");
define("HEROI41","وضعیت قهرمان در دفاع :");
define("HEROI43","تولیدات قهرمان:");
define("HEROI44","بازسازی قهرمان شما: 20% در روز");
define("HEROI45","سرعت");
define("HEROI46","");
define("HEROI47","تولیدات فعلی قهرمان:");
define("HEROI48","ویژگی های:");
define("HEROI49","لطفا تغییرات خود را ذخیره کنید.");
define("HEROI50"," امتیازات موجود:");
define("HEROI51","ذخیره سازی تغییرات");
define("HEROI53","منابع مورد نیاز برای زنده شدن قهرمان:");
define("HEROA0","محل");
define("HEROA1","مدت زمان");
define("HEROA2","سختی");
define("HEROA3","زمان باقیمانده");
define("HEROA4","پیوند");
define("HEROA5","ماجراجویی وجود ندارد.");
define("HEROA6","آغاز ماجراجویی");
define("HEROA7","جنگل");
define("HEROA8","دره تنگ");
define("HEROA9","کوه");
define("HEROA10","محیط");
define("HEROF0","سر");
define("HEROF1","رنگ مو");
define("HEROF2","مدل مو");
define("HEROF3","گوش ها");
define("HEROF4","ابرو");
define("HEROF5","چشم ها");
define("HEROF6","بینی");
define("HEROF7","بوکا");
define("HEROF8","باربا");
define("HEROAC0","ترتیب بر اساس تحمیل");
define("HEROAC1","ترتیب بر اساس وزن بدن");
define("HEROAC2","ترتیب بر اساس دست چپ");
define("HEROAC3","ترتیب بر اساس دست راست");
define("HEROAC4","ترتیب بر اساس کفش");
define("HEROAC5","ترتیب بر اساس ترازو");
define("HEROAC6","ترتیب بر اساس درشت");
define("HEROAC7","ترتیب بر اساس شمشیر");
define("HEROAC8","ترتیب بر اساس پرتو");
define("HEROAC9","ترتیب بر اساس کتاب مدرسه");
define("HEROAC10","ترتیب بر اساس دهان بهداشت");
define("HEROAC11","ترتیب بر اساس سرنشینی");
define("HEROAC12","ترتیب بر اساس کتاب حکمت");
define("HEROAC13","ترتیب بر اساس لوح دستورالعمل");
define("HEROAC14","ترتیب بر اساس آثار هنری");
define("HEROAC15","هیچ تجهیزاتی وجود ندارد.");
define("HEROAC16","در حال حاضر");
define("HEROAC17","بسته شده");
define("HEROAC18","ناکافی فضا");
define("HEROAC19","قرعه‌کشی فعلی:");
define("HEROAC20","حداکثر قرعه‌کشی:");
define("HEROAC21","قرعه‌کشی جدید:");
define("HEROAC22","قرعه‌کشی");
define("HEROAC23","تجهیزات");
define("HEROAC24","هیچ تجهیزاتی وجود ندارد.");
define("HEROAC25","زمان");
define("HEROAC26","برنده");
define("HEROAC27","پیشنهادات پایان یافته");
define("HEROAC28","انتخاب همه");
define("HEROAC29","هیچ پیشنهادی موجود نیست.");
define("HEROAC30","خرید");
define("HEROAC31","فروش");
define("HEROAC32","پیشنهادات");
define("HEROAC33","وجود ندارد");
define("HEROAC34","برای هر یک");
define("HEROAC35","حال دارایی می‌کنید");
define("HEROAC36","فروش‌های شما در تجهیزات فعلی (حداکثر 5 در همان لحظه)");
define("HEROAC37","پیشنهادات پایان یافته.");
define("HEROAC38","هیچ فروشی یافت نشد.");
define("HEROAC39","واقعا این کالا را می‌خواهید فروش دهید؟");
define("HEROAC40","فروش &lt");
define("HEROAC41","مقدار");
define("HEROAC42","تغییر");
define("HEROAC43","افزودن قرعه‌کشی");
define("HEROAC44","برای هر یک");

define("PRODUCTION_OVERVIEW","بازبینی تولید");
define("PRODUCTION_BONUS","بونوس تولید");
define("PRODUCTION_TOTAL_BONUS","بونوس کل");
define("PRODUCTION_FIELD","منبع");
define("PRODUCTION","تولید");
define("PRODUCTION_BONUS2","بونوس");
define("PRODUCTION_HP","تولید قهرمان");
define("PRODUCTION_BALANCE","موازنه موقت");
define("PRODUCTION_P25","+25% تولید");
define("PRODUCTION_INACTIVE","غیرفعال");
define("PRODUCTION_TOTAL","کل");
define("PRODUCTION_PROD_TOTAL","مجموع تولید در ساعت:");
define("PRODUCTION_PROD_S1","سطح کان طین");
define("PRODUCTION_PROD_S2","سطح تراش و برند");
define("PRODUCTION_PROD_S3","سطح معدن آهن");
define("PRODUCTION_PROD_S4","سطح مزرعه");
define("PRODUCTION_PROD_S5","تولید ساعتی شامل بونوس تولید: ");
define("PRODUCTION_PROD_S6","بونوس تولید تولید منبع را در <span class=\"underlined\">تمام</span> روستاهای شما افزایش می‌دهد.");
define("PRODUCTION_PROD_T1","سطح آسیابکاری");
define("PRODUCTION_PROD_T2","واحه وحش");
define("PRODUCTION_PROD_T3","سطح آجربازار");
define("PRODUCTION_PROD_T4","سطح قلع آهن");
define("PRODUCTION_PROD_T5","سطح آسیاب دانه");
define("PRODUCTION_PROD_T6","سطح نانوایی");

define("ESCAPE_GORIZ","فرار");
define("CAPTCHA_1","برای دریافت تصویر جدید بر روی تصویر کلیک کنید");
define("PLUS_TIME_ENABLE","<p>حساب Plus شما برای <b><span id=\"timer100\">%s</span></b> روز فعال است.</p>");
define("RENEW","اعاده");
define("USERS_ACTIVE","کاربران فعال");
define("USERS_ONLINE","کاربران آنلاین");
define("USERS_TOTAL","مجموع کاربران");
define("dorf1_links","لیست لینک‌ها");
define("dorf1_activateplus","فعال‌سازی حساب Plus");
define("dorf1_villageNameBox_1","در این روستا بازاری وجود ندارد");
define("dorf1_villageNameBox_2","ساخت بازار");
define("dorf1_villageNameBox_3","در این دهکده سربازخانه وجود ندارد");
define("dorf1_villageNameBox_4","ساخت سربازخانه");
define("dorf1_villageNameBox_5","در این دهکده اسطبل وجود ندارد");
define("dorf1_villageNameBox_6","ساخت اسطبل");
define("dorf1_villageNameBox_7","در این دهکده گارگاه وجود ندارد");
define("dorf1_villageNameBox_8","ساخت گارگاه");
define("dorf1_villageNameBox_9","بازار");
define("dorf1_villageNameBox_10","سربازخانه");
define("dorf1_villageNameBox_11","وظایف آموزشی");
define("dorf1_villageNameBox_11n","هیچ وظیفه‌ای آموزشی وجود ندارد");
define("dorf1_villageNameBox_12","اصطبل");
define("dorf1_villageNameBox_13","وظایف آموزشی");
define("dorf1_villageNameBox_14","کارخانه جنگی");
define("dorf1_villageNameBox_15","وظایف آموزشی");
define("dorf1_villageNameBox_16","تغییر نام دهکده");
define("dorf1_villageNameBox2_1","آمار دهکده ها");
define("dorf1_villageNameBox2_2","نمایش مختصات");
define("dorf1_villageNameBox2_4","مخفی کردن مختصات");
define("dorf1_villageNameBox2_3","دهکده ها");
define("dorf1_villageNameBox2_5"," امتیاز فزهنگی مورد نیاز برای احداص دهکده جدید  :");
define("Link_desc_text_1" , " یک حساب پلاس به شما امکان می دهد لیستی از پیوندها را اضافه کنید.");
define("infobox_desc_text_1" , "اخبار");
define("Questbox_desc_text_1" , "خوش آمدید");
define("Questbox_desc_text_2" , "وظیفه ها را شروع کنید");
define("LVL",'سطح');
define("SIDE_I_1","کتیبه ها منتشر میشود در");
define("SIDE_I_2","");
define("SIDE_I_3","کتیبه ها آزاد شدن");
define("SIDE_I_4","<font style='font-size:11px;'>نقشه های ساخت آزاد میشوند در</font>");
define("SIDE_I_5","نقشه های شگفتی جهان آزاد شدن");
define("SIDE_I_6","مدال ها داده خواهد شد");
define("SIDE_I_7","");
define("CS","منطقه ساخت و ساز");
define("UPGRADECOST","هزینه های ارتقاء به یک سطح %s ");
define("SERVER_INFO","اطلاعات سرور");
define("MORE_ADVS_1","شما باید به ماجراجویی بروید");
define("MORE_ADVS_2","بارهای بیشتری بتوانید چیزهایی بخرید");
define("WORLDWONDER","شگفتی جهان");
define("WAREHOUSE","انبار خام");
define("NO_FARM","تا الان فارمی وجود ندارد!");
define("FARMLIST_FOOTER","<small>
منابع مزرعه هر 30 ثانیه محاسبه می شود.<br>
ذخیره سازی انبار و محصول در مزارع برابر است.<br>
لیست بر اساس زمان ایجاد هر مورد مرتب شده است.<br>
</small>");
define("PROTECTION_TIME","هنوز  <b><span class=\"timer\" counting=\"down\" value=\"%s\">%s</span></b> ساعت مدت حمایت از اولین‌بازیکنان دارید.");
define("ACCOUNT_DELETION","تا حذف حساب باقی <b><span class=\"timer\" counting=\"down\" value=\"%s\">%s</span></b>");
define("Ally_dorf1","اتحاد");
define("DIRECT_LINK","لینک مستقیم");
define("NO_PLUS_ESI","برای این گزینه حساب پلاس نیاز است");
define("NO_PLUS_ESI2","رفتن به بازار");
define("NO_PLUS_ESI3","بازار");

define("plus_goldcount","طلا");
define("buygold_DESC_1","موقعیت");
define("buygold_DESC_2","موقعیت خود را انتخاب کنید:");
define("buygold_DESC_3","تغییر");
define("buygold_DESC_4","بسته‌های طلا:");
define("buygold_DESC_5","انتخاب یک بسته");
define("buygold_DESC_7","درگاه‌های پرداخت");
define("buygold_DESC_8","می‌بایست انتخاب شود");
define("buygold_DESC_9","قیمت‌ها به صورت نهایی علامت‌گذاری شده‌اند");
define("buygold_DESC_10","پرداخت‌ها به صورت فوری انجام می‌شوند");
define("buygold_DESC_11","خرید طلا");
define("buygold_DESC2_1","انتخاب بسته‌ای دیگر");
define("buygold_DESC_6","مرحله 2 - انتخاب یک بسته");
define("first_desc1" , "انتخاب نژاد");
define("first_desc2" , "امپراطوری‌های عظیم از قراردادها و مبانی بنیانگذاری آغاز می‌شوند! آیا شما مهاجمی هستید که از رقابت خوشتان می‌آید؟ یا به تجارت علاقه دارید و وقت شما محدود است؟ یا عضوی از گروهی قدرتمند بودن را دوست دارید؟");
define("first_desc3" , "یک قبیله را برای بازی در این سرور انتخاب کنید");
define("first_desc4" , "اگر این تجربه اولین بازی تراویان شما است، ما گال‌ها را توصیه می‌کنیم");
define("first_Gauls_desc1" , "گول ها");
define("first_Gauls_desc2" , "مشخصات:");
define("first_Gauls_desc3" , "زمان کمی مورد نیاز است.");
define("first_Gauls_desc4" , "از آغاز بازی بهتر در برابر غارت از دزدیدن محافظت می‌شوند.");
define("first_Gauls_desc5" , "سیستم‌های راه‌های عالی و نیروهای سریع‌ترین در بازی هستند.");
define("first_Gauls_desc6" , "بهترین انتخاب برای بازیکنان جدید است.");
define("first_Roman_desc1" , "رومیان");
define("first_Roman_desc2" , "خصوصیات:");
define("first_Roman_desc3" , "مدیریت زمان الزامی است.");
define("first_Roman_desc4" , "می‌توانند سریع‌تر از سایر روستاها به روستایشان افزوده شوند.");
define("first_Roman_desc5" , "ارتش قوی، اما نیروهای آنها ارزشمند هستند؛ سیستم‌های اجرایی بسیار قدرتمند هستند.");
define("first_Roman_desc6" , "نژاد بسیار دشوار در ابتدای بازی و این نژاد برای بازیکنان جدید توصیه نمی‌شود.");
define("first_Teutons_desc1" , "توتن ها");
define("first_Teutons_desc2" , "خصوصیات:");
define("first_Teutons_desc3" , "برای بازیکنان تکنیکی و حمله‌آمیز زمان کافی وجود دارد.");
define("first_Teutons_desc4" , "نیروهای ارزانی که به سرعت آموزش داده می‌شوند و برای غارت خوب هستند.");
define("first_Teutons_desc5" , "برای بازیکنان تجربه‌کار و حمله‌آمیز.");
define("first_page_second_step_desc1" , "انتخاب منطقه شروع");
define("first_page_tribe1","رومی ها");
define("first_page_tribe2","توتن ها");
define("first_page_tribe3","گول ها");
define("first_page_tribe1_lead","Kvyntvs");
define("first_page_tribe2_lead","Henrik");
define("first_page_tribe3_lead","Ambyvryks");
define("first_Gauls_chosen_desc1" , "شما %s را انتخاب کردید. از آنجایی که راهنمای شما این خواهد بود %s .");
define("first_Romans_chosen_desc1" , "شما نژاد %s را انتخاب کرديد. از اين به بعد %s راهنماي شما خواهد بود.");
define("first_Teutons_chosen_desc1" , "شما نژاد %s را انتخاب کرديد. از اين به بعد %s راهنماي شما خواهد بود.");
define("first_page_second_step_desc2" , "تغییر قبیله");
define("first_page_second_step_desc3" , "ما به ساخت و توضیحات بیشتر در مورد قبیله خود در نقشه با کلیک کردن می‌پردازیم.");
define("first_page_second_step_desc4" , "شما در شمالی-غربی شروع خواهید شد.");
define("first_page_second_step_desc5" , "شما در شمالی-شرقی شروع خواهید شد.");
define("first_page_second_step_desc6" , "شما در جنوبی-غربی شروع خواهید شد.");
define("first_page_second_step_desc7" , "شما در جنوبی-شرقی شروع خواهید شد.");
define("first_page_second_step_desc8" , "ساختن روستا");
define("BUILDINGS","مرکز قریه");
define("CHANGING_YOUR_VILLAGE_NAME","تغییر نام قریه");
define("NEW_NAME","نام قریه جدید");
define("IS_ON_ADVENTURE","در یک ماجراجویی");
define("MOVING_FROM","انتقال از");
define("LN_TO","به");
define("SOME_CHANGES_DONE","تغییرات شما رد می‌شوند. آیا اطمینان دارید که می‌خواهید ترک کنید?");
define("MORE_INFO_25_BUTTON","اطلاعات بیشتر در مورد تولید ۲۵٪ بیشتر برای منابع");
define("HEROFULLLVL","قهرمان شما به سطح بیشترین خود رسیده است.");
define("LN_QUEST","ماجراجویی");
define("SHOW_HINTS_PANEL","نمایش پنل نکات");
define("JR_CONSTRUCTION_PLANS_TITLE","برنامه ساخت ویدو");
define("JR_CONSTRUCTION_PLANS_VNAME","روستای برنامه ساخت");
define("JR_CONSTRUCTION_PLANS_DESC","با این برنامه ساخت باستانی می‌توانید به ساخت ویدو به سطح ۵۰ بپردازید. برای ساخت بیشتر، اتحادیه شما باید حداقل دو برنامه را در اختیار داشته باشد.");
define("JR_CONSTRUCTION_PLANS_RELEASE_TITLE","برنامه‌های ساخت");
define("JR_CONSTRUCTION_PLANS_RELEASE_DESC","دهه‌ها پیش، قبایل تراویان با بازگشت غیرمنتظره خر مواجه شدند. این قبیله از حکمت باستانی، بزرگی و شکوه قابل مقایسه بود و در حال آزاردن مردم آزاد بود. بنابراین هر چه تلاش بیشتری برای آماده سازی جنگ نهایی علیه Natars و صدور آنها به طور دائم بود. بسیاری از این برنامه‌ها به عنوان یک راه حل در مورد ساخت و نوسازی فکر کردند که «آثار جهانی» نامیده می‌شد. گفته می‌شد که به پایان رساندن به سازندگان رهبران و غالبان تراویان خواهد کرد.");
define("JR_CONSTRUCTION_PLANS_RELEASE_TREASURY_DESC","با این حال، گفته شد که برای ساخت چنین ساختمانی، نیاز به یک برنامه است. به همین دلیل، معماران به طرح‌های برای امن نگهداری آنها پرداخته‌اند. پس از مدتی می‌توانستند بناهایی شبیه به معبد در شهرها و شهرهای بسیاری را احساس کنند - گانجه‌ها.");
define("JR_CONSTRUCTION_PLANS_RELEASE_MYTHS_DESC","متأسفانه، هیچ کس - حتی کسانی که حکیم و تجربه کرده اند - نمی‌دانند که این برنامه‌ها کجا قرار است تا بیابند. با تلاش‌های بیشتری که مردم برای پیدا کردن آنها می‌کنند، بیشتر به نظر می‌رسد که فقط داستان و افسانه هستند.");
define("JR_CONSTRUCTION_PLANS_RELEASE_DISCOVERED_DESC","اما امروز، این راز پنهان آخرین در زمینه کشف خواهد شد. زیان‌ها و اراده‌های گذشته به هیچ نفعی نبود، زیرا امروز، گشت‌هایی از چندین قبیله مکان‌های این برنامه‌های ساختمانی را در نشسته‌های قرار گرفته در سراسر تراویان پیدا کرده‌اند. به خوبی توسط Natars نگهداری می‌شوند و در اواسس‌های پراکنده در سراسر زمین تراویان پنهان می‌شوند. فقط قهرمانان شجاع‌ترین قادر به این هستند که یک برنامه را به خود اختصاص دهند و به خانه برسانند تا ساخت و نوسازی آغاز شود.");
define("JR_CONSTRUCTION_PLANS_RELEASE_LINK_DESC","تمام اطلاعات درباره روش کار برنامه‌های ساختمانی می‌تواند در سرورها یافت شود.");
define("JR_HERE","اینجا");
define("JR_travian_TEAM","تیم تراویان");
define("JR_CONTINUE","ادامه");
define("JR_ATTACK_COMBAT_MODEL","مدل جنگ");
define("JR_ATTACK_NORMAL","حمله نرمال");
define("JR_ATTACK_RAID","حمله اورکا");
define("JR_WARSIM_ATTACKER","حمله‌کننده");
define("JR_WARSIM_DEFENDERS","دفاع‌کنندگان");
define("JR_WARSIM_ATTACKCONFIG","تنظیمات حمله");
define("JR_WARSIM_SIMULATE","شبیه‌سازی");
define("JR_POWERED_BY","توانمندسازی توسط مهران");
define("JR_RIGHTS","تمامی حقوق محفوظ است");
define("JR_ZRAVIANX","محسن");
define("JR_COPYYEAR","&copy; 2011 - 2024");
define("JR_FOOTER_SPECIAL_S","<b>توسعه توسط: <a href=\"404/\" target=\"_blank\" style=\"color:purple\">مهران</a> (توسعه‌دهنده و مترجم و طراح)</b> <br/><br/> تشکر بسیار از <a style=\"color:green\">Mehran EBDa (توسعه‌دهنده)، Papa Grumps (مترجم انگلیسی) و akshay9 (توسعه‌دهنده) </a>");
define("JR_NOT_ADMIN","دسترسی غیرمجاز: شما ادمین نیستید!");
define("JR_ART_BPTTL","برنامه ساختمان باستانی");
define("JR_ART_BPVN","برنامه ساختمان جهانی");
define("JR_ART_BPDES","با این برنامه ساختمان باستانی، شما می‌توانید ساختمان جهانی را تا سطح ۵۰ بسازید. برای ساخت بیشتر، اتحادیه شما باید حداقل دو برنامه را داشته باشد.");
define('WILLACTIN','فعال خواهد شد در');
define("JR_CATEGORY","دسته‌بندی");
define("JR_SELECT","انتخاب");
define("JR_GENERALQUESTIONS","سوالات عمومی");
define("JR_ICANNOTLOGIN","نمی‌توانم وارد شوم");
define("JR_ICANNOTREGISTER","نمی‌توانم ثبت نام کنم");
define("JR_SEND","ارسال");
define("JR_REGISTERFIRST","لطفا، ابتدا حساب کاربری ثبت کنید.");
define("JR_HEROATTRIBUTES","ویژگی‌ها");
define("JR_HEROAPPEARANCE","ظهور");
define("JR_HEROADVENTURE","ماجراجویی");
define("JR_HEROAUCTION","فروش مزایدات");
define("JR_HEROHEAD","شکل سر");
define("JR_HEROHAIRCOLOR","رنگ مو");
define("JR_HEROHAIRSTYLE","مدل مو");
define("JR_HEROEARS","گوش‌ها");
define("JR_HEROEYEBROWS","ابروها");
define("JR_HEROEYES","چشم‌ها");
define("JR_HERONOSE","بینی");
define("JR_HEROMOUTH","دهان");
define("JR_HEROBEARD","ریش");
define("JR_HEROLOCATION","محلی");
define("JR_HEROTIME","مدت زمان");
define("JR_HERODIFFICULTY","دشواری");
define("JR_HEROTIMELEFT","زمان باقی‌مانده");
define("JR_HEROLINK","لینک");
define("JR_HEROBIDERROR1","شما کافی سکه نقره برای خرید این کالا ندارید. شما حداقل باید ");
define("JR_HEROBIDERROR2","سکه نقره داشته باشید.");
define("JR_HEROBIDERROR3","کافی سکه نقره برای پیش‌نویسی نیست.");
define("JR_HEROBIDERROR4","پیش‌نویسی بزرگتری وجود دارد.");
define("JR_HEROBIDERROR5","فروش مزایدات به پایان رسید.");
define("JR_HEROBIDERROR6","فروش مزایدات وجود ندارد.");
define("JR_HEROEVASION","وقتی فعال شود، قهرمان در زمان حمله به روستا پنهان خواهد شد.");
define("JR_HERODEADORNOTHERE","قهرمان شما مرده است یا در این روستا موجود نیست، بنابراین نمی‌توانید از این کالا استفاده کنید.");
define("HEROISDEAD","قهرمان مرده است");
define("JR_HEROBUYITEMS","خرید کالا");
define("JR_HEROSELLITEMS","فروش کالا");
define("JR_HEROEXP","تجربه");
define("JR_HEROEXPGROW","افزایش تجربه");
define("JR_HEROEXPWILLBE","بعد از استفاده، تجربه");
define("JR_HEROCURRENTCP","امتیاز فرهنگی کنونی");
define("JR_HEROCPVALUE","امتیاز فرهنگی");
define("JR_HEROCPAFTERUSE","امتیاز فرهنگی بعد از استفاده");
define("JR_HEROWANNAWEAR","آیا واقعاً می‌خواهید این کالا را پوشید؟");
define("JR_HEROTIU","تعداد قطعات");


define("JR_SAVE","ذخیره");

define("JR_FOREST","جنگل");
define("JR_FIELD","مزرعه");
define("JR_MOUNTAIN","کوه");
define("JR_SEA","دریا");
define("JR_OK","تایید");

define("JR_CANCEL","لغو");
define("JR_YES","بله");
define("JR_NO","خیر");
define("NUM","شماره");
define("JR_NOTFINISHED","ناقص");
define("JR_CONSUMPTION","مصرف");

define("JR_MOW","نشان‌های هفتگی");
define("JR_MEDALSCONFIRM","تایید دادن نشان");
define("JR_MEDALSCONFIRMNOTE","نکته: این کار زمان می‌برد");
define("JR_CONFIRM","تأیید");
define("GENDER","جنسیت");
define("GENDER0","مشخص نشده");
define("GENDER1","مرد");
define("GENDER2","زن");

//logint4.4
define("logint40","نقشه بزرگتر||برای این ویژگی باید تراوین پلاس فعال شود.");
define("logint41","فراگیر");
define("logint42","غیر فراگیر");
define("logint43","مختصات");
define("logint410","مرکز نقشه");
define("logint411","ایجاد روستای جدید");
define("logint412","گزارشات");
define("logint413","اطلاعات");
define("logint414","نژاد");
define("logint415","اتحاد");
define("logint416","بازیکن");
define("logint417","جمعیت");
define("logint418","نوع زمین");
define("logint419","ارسال نیروها");

//pluspalladiys
define("pluss0","برای خرید طلا با روش‌های دیگر (qiwi، webmoney، paypal) با ");
define("pluss1","مدیر");
define("pluss2","پس از خرید طلا باید به ");
define("pluss3","بانک");
define("pluss4","بروید، در آنجا می‌توانید طلا را به هر حساب در سرور به صورت کامل یا جزئی منتقل کنید.");
define("pluss5","خرید طلا");
define("pluss6","ویژگی‌های بلاس");
define("pluss7","توضیحات");
define("pluss8","مدت زمان");
define("pluss9","هزینه");
define("pluss10","فعال سازی");
define("pluss11","حساب");
define("pluss12","مانده");
define("pluss13","روز");
define("pluss14","دفتر ارز");
define("pluss15","مقدار طلا و نقره‌ای را وارد کنید که می‌خواهید تعویض کنید.");
define("pluss16","نرخ تعویض");
define("pluss17","۱ طلا : ۱۰۰ نقره");
define("pluss18","۲۰۰ نقره : ۱ طلا");
define("pluss19","تعویض");
define("pluss20","ERRRRROOOOOOORRRRRRRRRRRRR");
define("pluss21","خرید طلا");
define("pluss22","وظیفه");
define("pluss23","درآمد طلا");
define("pluss24","تعویض طلا و نقره");
define("pluss25","فعال سازی");
define("pluss26","تمدید");
define("pluss27","نیازمند طلا");
define("pluss28","مانده");
define("pluss29","روز");
define("pluss30","ساعت");
define("pluss31","دقیقه");
define("pluss32","مالک");
define("pluss33","طلا");
define("pluss34","تولید: چوب");
define("pluss35","تولید: خشت");
define("pluss36","تولید: آهن");
define("pluss37","تولید: گندم");
define("pluss38","1:1 تاجر");
define("pluss39","");
define("pluss40","");
define("pluss41","");
define("pluss42","");
define("pluss43","");
define("pluss44","");
define("pluss45","");

//herohome
define("herohero0","ویژگی‌ها");
define("herohero1","ظاهر قهرمان");
define("herohero2","ماجراجویی");
define("herohero3","حراجی ها");
define("herohero4","خرید ");
define("herohero5","فروش");
define("herohero6","تصادفی");

//ban_msg.tpl
define("yubnd","حساب کاربری شما مسدود شد، لطفاً با صیاد تماس بگیرید.");

define("SOKI_1", "ماجراجویی");
define("SOKI_2", "واحدها");
define("SOKI_3", "رسیدن");
define("SOKI_4", "شروع ماجراجویی");
define("SOKI_5", "اخطار");
define("SOKI_6", "نمایش دستورالعمل‌ها");

define("attack1", "مرتع");
define("attack2", "بناها");
define("attack3", "نیروها");
define("attack4", "مرتع");
define("attack5", "بناها");
define("attack6", "نیروها");
define("attack7", "مهندس ساخت و تعمیرات");
define("attack8", "سنگ چکش سنگ‌های سفید عظیم)");
define("attack9", "دستورالعمل‌های حیمون");
define("attack10", "نعل اوپال");
define("attack11", "کوچ کراسی");
define("attack12", "کفش‌های پهیدیپیدس");
define("attack13", "داستان موش‌ها");
define("attack14", "نامه یک سرهنگ");
define("attack15", "روزنامه سون تزو");
define("attack16", "قسم نویسنده سرباز");
define("attack17", "اعلام جنگ");
define("attack18", "خاطرات اسکندر مقدونی");
define("attack19", "برنامه‌ی انبار بزرگ یا گنبد بزرگ!");
define("attack20", "سازندگان شگفت‌انگیزهای جهان!");
define("attack21", "تایید");

define("newdorf1", "روستای جدید یافت شد");
define("newdorf2", "جدید");
define("newdorf3", "روستای جدید یافت شد");
define("newdorf4", "نیروها");
define("newdorf5", "مدت زمان");
define("newdorf6", "منابع");
define("newdorf7", "تایید");
define("newdorf8", "امتیاز ساخت");
define("search1", "پشتیبانی");
define("search2", "حمله عادی");
define("search3", "حمله غارت");
define("search4", "رویدادها");
define("search5", "X"); // not sure if really needed lol
define("search6", "Y");
define("search7", "تایید");

define("sendback1", "برگشت به خانه");
define("sendback2", "این نیروها را برگردان");
define("sendback3", "واحدها");
define("sendback4", "زمان");
define("sendback5", "در");
define("sendback6", "به");
define("sendback7", "تایید");

define("startraid1", "نیروهای کافی برای شما وجود ندارد!");

define("activated1", "برای عضویت در بازی ثبت نام کنید");
define("activated2", "ثبت نام");

define("delete", "برای عضویت در بازی ثبت نام کنید");
define("delete2", "حذف");

define("allimenu1", "فعال");
define("allimenu2", "عادی");
define("allimenu3", "اخبار");
define("allimenu4", "حملات");
define("allimenu5", "گزینه‌ها");

define("allidesc1", "ذخیره");

define("assignpos1", "تعیین کردن");

define("attacker1", "هیچ گزارشی موجود نیست");

define("defender1", "هیچ گزارشی موجود نیست");

define("attacks1", "رویدادهای نظامی");
define("attacks2", "دفاع‌کننده");
define("attacks3", "مهاجم");

define("changepos0", "نام");
define("changepos1", "رفتن");
define("changepos2", "ترحیل");
define("changepos3", "تغییر توضیحات");
define("changepos4", "تحالف دیپلماسی");
define("changepos5", "پیام‌های به تمامیت همبستگان");
define("changepos6", "دعوت");
define("changepos7", "عنوان جذب");

define("changediplo1", "وجود ندارد");

define("invite1", "دعوتی وجود ندارد");
define("invite2", "رد شده");
define("invite3", "دعوت‌شده");

define("kick1", "برو");

define("option1", "برو");

define("overvieww1", "جزئیات");
define("overvieww2", "موقعیت");
define("overvieww", "اعضا");

define("quitally1", "خارج شدن");

define("bids1", "برای هر واحد");
define("bids2", "پیشنهادها");
define("bids3", "فاصله");
define("bids4", "زمان");
define("bids5", "حذف");

define("buy1", "فاصله");
define("buy2", "برای هر واحد");
define("buy3", "پیشنهاد جدید");
define("buy4", "پیشنهاد");

define("build1", "ارتقا انبار");
define("build2", "ارتقا ابار غذا");
define("build3", "منابع کافی");
define("build4", "تولید گندم منفی است، هرگز منابع کافی وجود نخواهد داشت");
define("build5", "منابع کم");
define("build6", "کاملاً توسعه یافته");
define("build7", "بهبود قلعه صهر آهن");
define("build8", "بحث‌های در حال انجام");
define("build9", "توسعه");
define("build10", "واحد");
define("build11", "زمان باقی‌مانده");
define("build12", "پایان یافت");
define("build13", "خرابی ساختمان");
define("build14", "اگر به ساختمانی احتیاج نداشته باشید، می‌توانید حکم خرابی آن را صادر کنید");
define("build15", "خرابی");
define("build16", "تمامی ساخت و سازها و فرمان‌های تحقیق در این روستا را برای فوری انجام دهید؟ (هزینه 2 طلا)");
define("build17", "خرابی ساختمان");
define("build18", "از بین بردن");
define("build19", "The farm list is free, but only when the gold club available.");
define("build20", "إعدادات الهروب");
define("build21", "تشغيل هروب تلقائي للقوات من القرية في حال تعرضك للهجوم.");
define("build22", "حمله به ");
define("build23", "حمله چاپاول به ");
define("build24", "تقویت برای ");
define("build25", "نیروها");
define("build26", "ورود");
define("build27", "در");
define("build28", "بازگشت از ");
define("build29", "تقویت برای ");
define("build30", "بازگشت از ");
define("build31", "بازگشت از ");
define("build32", "بازگشت از پناهگاه ");
define("build33", "واحه");
define("build34", "پناهگاه");
define("build35", "بازگشت از ");
define("build36", "نیروها");
define("build37", "دزدیده شده");
define("build38", "ورود");
define("build39", "حمله به واحه‌های شما");
define("build40", "واحه");
define("build41", "نیروها");
define("build42", "ورود");
define("build43", "در");
define("build44", "نیروها");
define("build45", "مصرف");
define("build46", "در هر ساعت");
define("build47", "تقویت برای");
define("build48", "کشف");
define("build49", "حمله به");
define("build50", "حمله چاپاول به");
define("build51", "ساخت روستای جدید");
define("build52", "بهادر");
define("build53", "آبادی");
define("build54", "نیروها");
define("build55", "تاجر");
define("build56", "چوب");
define("build57", "آهن");
define("build58", "قمح");
define("build59", "مختصات");
define("build60", "بازیکن");
define("build61", "مدت زمان");
define("build62", "تاجران");
define("build63", "ارسال تاجران");
define("build64", "محصولات");
define("build65", "مختصات");
define("build66", "هر کارآفرینی می‌تواند به عهده بردارد");
define("build67", "ارسال منابع");
define("build68", "مختصاتی انتخاب نشده است");
define("build69", "شما نمی‌توانید منابع را به همان روستا ارسال کنید");
define("build70", "بازیکن مسدود شده است. نمی‌توانید منابع را به او ارسال کنید.");
define("build71", "منابع انتخاب نشده است.");
define("build72", "مختصات یا نام روستا را وارد کنید.");
define("build73", "تعداد کارآفرینان بسیار کم است.");
define("build74", "کارآفرینان در راه");
define("build75", "نقل به توسط من");
define("build76", "ورود در");
define("build77", "کارآفرینان خود در راه");
define("build78", "نقل به");
define("build79", "ورود در");
define("build80", "منبع");
define("build81", "بازگشت کارآفرینان");
define("build82", "بازگشت از");
define("build83", "ورود در");
define("build84", "منبع");
define("build85", "من در حال جست‌وجو هستم");
define("build86", "من ارائه می‌کنم");
define("build87", "پیشنهادات در بازار");
define("build88", "ارائه شده");
define("build89", "به من");
define("build90", "مورد نیاز");
define("build91", "از من");
define("build92", "بازیکن");
define("build93", "مدت زمان");
define("build94", "عملیات");
define("build95", "منبع کافی نیست");
define("build96", "کارآفرین کافی نیست");
define("build97", "پذیرش پیشنهاد");
define("build98", "در بازار پیشنهادی موجود نیست");
define("build99", "ارائه");
define("build100", "چوب");
define("build101", "خشت");
define("build102", "آهن");
define("build103", "گندم");
define("build104", "حداکثر زمان انتقال");
define("build105", "ساعت");
define("build106", "جستجو");
define("build107", "فقط پیشنهادات همبستگی خود");
define("build108", "کارآفرینان");
define("build109", "فروش");
define("build110", "پیشنهاد");
define("build111", "همبستگی");
define("build112", "مدت زمان");
define("build113", "ساعت");
define("build114", "همه");
define("build115", "NPC کامل شد");
define("build116", "هزینه 3");
define("build117", "بازگشت به ساخت و ساز");
define("build118", "تجارت NPC");
define("build119", "تجارت منابع (مرحله 2 از 2)");
define("build120", "هزینه‌ها");
define("build121", "نمی‌توانید در روستای WW از تجارت NPC استفاده کنید.");
define("build122", "شروع");
define("build123", "کارآفرینان");
define("build124", "عملیات");
define("build125", "روت معاملاتی فعالی وجود ندارد");
define("build126", "ویرایش");
define("build127", "ایجاد روت معاملاتی جدید");
define("build128", "ایجاد روت معاملاتی");
define("build129", "روستای هدف");
define("build130", "منابع");
define("build131", "زمان شروع");
define("build132", "تحویلات");
define("build133", "ویرایش روت معاملاتی");
define("build134", "منابع");
define("build135", "زمان شروع");
define("build136", "تحویلات");
define("build137", "همبستگی");
define("build138", "برچسب");
define("build139", "نام");
define("build140", "دعوت‌نامه");
define("build141", "پذیرش");
define("build142", "دعوت‌نامه‌ای موجود نیست");
define("build143", "همبستگی یافت شد");
define("build144", "برچسب");
define("build145", "نام");
define("build146", "ایجاد");
define("build147", "آموزش");
define("build148", "در حال آموزش");
define("build149", "هیچ یک از واحدهای قابل استفاده موجود نیست. تحقیقات در اکادمی");
define("build150", "موجود");
define("build151", "همه");
define("build152", "واحدها نیاز به تحقیق دارند");
define("build153", "آموزش");
define("build154", "واحدها نیاز به تحقیق دارند");
define("build155", "در حال آموزش");
define("build156", "مدت زمان");
define("build157", "پایان یافت");
define("build158", "تحقیقات پس از به اتمام رسیدن اکادمی شروع خواهد شد");
define("build159", "افزایش انبار");
define("build160", "افزایش<br>انبار");
define("build161", "افزایش گنبد");
define("build162", "افزایش<br>گنبد");
define("build163", "منابع کافی");
define("build164", "تولید محصولات منفی است و شما نیازمند منابع کافی خواهید بود");
define("build165", "شمار زیادی");
define("build166", "منبع");
define("build167", "در حال تحقیق");
define("build168", "در حال تحقیق");
define("build169", "مدت زمان");
define("build170", "کامل");
define("build171", "ساعت");
define("build172", "واحدهای پنهان در هر منبع");
define("build173", "واحدهای پنهان در هر منبع در سطح");
define("build174", "جشنواره پس از به اتمام رسیدن ساختمان شهر شروع خواهد شد.");
define("build175", "جشنواره");
define("build176", "عملیات");
define("build177", "در حال انجام");
define("build178", "در");
define("build179", "نگهداری");
define("build180", "جشن بزرگ (2000 امتیاز فرهنگی)");
define("build181", "پایان");
define("build182", "جشن");
define("build183", "برای گسترش ملیت شما نیاز به نقاط فرهنگی دارید. این نقاط با توجه به عملکرد ساختمان‌های شما در طول زمان و با افزایش سطح ساختمان‌ها افزایش می‌یابد.");
define("build184", "تولید روستای کنونی");
define("build185", "نقاط فرهنگی در روز");
define("build186", "تولید تمامی روستاها");
define("build187", "نقاط فرهنگی در روز");
define("build188", "روستاهای شما تا کنون");
define("build189", "نقطه تولید کرده‌اند. برای تاسیس یا تصرف روستای جدید نیاز به");
define("build190", "نقطه دارید.");
define("build191", "با حمله با استفاده از سناتورها، رئیس‌ها یا سرپرستان به لویالت یک روستا کاهش می‌یابد. اگر لویالت به صفر منتهی شود، روستا به اداره متهم پیوستا. لویالت فعلی این روستا");
define("build192", "%");
define("build193", "روستاهایی که از طریق این روستا تاسیس یا تصرف شده‌اند");
define("build194", "روستا");
define("build195", "بازیکن");
define("build196", "ساکنین");
define("build197", "مختصات");
define("build198", "تاریخ");
define("build199", "هنوز هیچ روستای دیگری توسط این روستا تاسیس یا تصرف نشده است.");
define("build200", "آموزش");
define("build201", "دوره");
define("build202", "آماده");
define("build203", "در");
define("build204", "آموزش");
define("build205", "برای تاسیس یک روستای جدید نیاز به ساختمان سطح 10 یا 20 و 3 سکنه دارید. برای تصرف یک روستای جدید نیاز به ساختمان سطح 10 یا 20 و سناتور، رئیس یا سرپرست دارید.");
define("build206", "رمز عبور اشتباه است");
define("build207", "این روستای تحت‌الشعبه شماست");
define("build208", "تغییر تحت‌الشعبه");
define("build209", "آیا اطمینان دارید که می‌خواهید تحت‌الشعبه را تغییر دهید؟<br/><b>شما نمی‌توانید این کار را برگردانید!</b><br/>به منظور امنیت، باید رمز عبور خود را وارد کنید تا تغییر محتوم شود.");
define("build210", "تغییر");
define("build211", "قصر در حال ساخت");
define("build212", "برای تاسیس یک روستای جدید نیاز به قصر سطح 10، 15 یا 20 و 3 سکنه دارید. برای تصرف یک روستای جدید نیاز به قصر سطح 10، 15 یا 20 و سناتور، رئیس یا سرپرست دارید.");
define("build213", "آثار باستانی شما");
define("build214", "عنوان");
define("build215", "روستا");
define("build216", "تصرف شده");
define("build217", "شما هیچ آثار باستانی ندارید");
define("build218", "درخشنده آلماس");
define("build219", "ساختمان‌ها در مقابل حملات با منجنیق و دمپا دوام‌تر هستند. این در حالت عجیب و غریب برای جهان نافرمانی اعمال نمی‌شود، اما برای تمام ساختمان‌های دیگر در روستای جهان نافرمانی اعمال می‌شود.");
define("build220", "چکش از مرمر بزرگ");
define("build221", "ساختمان‌ها در مقابل حملات با منجنیق و دمپا دوام‌تر هستند. این در حالت عجیب و غریب برای جهان نافرمانی اعمال نمی‌شود، اما برای تمام ساختمان‌های دیگر در روستای جهان نافرمانی اعمال می‌شود.");
define("build222", "استرال همون");
define("build223", "ساختمان‌های سرشناس و رئیس مربوط به روستای دوستان در مقابل حملات با منجنیق و دمپا دوام‌تر هستند. این در حالت عجیب و غریب برای جهان نافرمانی اعمال نمی‌شود، اما برای تمام ساختمان‌های دیگر در روستای جهان نافرمانی اعمال می‌شود.");
define("build224", "طالب نیلوفر");
define("build225", "نیروها با سرعت بیشتری حرکت می‌کنند.");
define("build226", "ارابه کشتی طلایی");
define("build227", "نیروها با سرعت بیشتری حرکت می‌کنند.");
define("build228", "کفش‌های پایدیپیدس");
define("build229", "نیروها با سرعت بیشتری حرکت می‌کنند.");
define("build230", "داستان موش‌ها");
define("build231", "اسکاوت‌ها، اکوییت لگاتی و پیداکنندگان در اسپایی و دفاع از حملات اسپایی بهتر هستند. تمام اسکاوت‌ها در روستا/حساب و همچنین تمام اسکاوت‌هایی که برای اسپایی از این روستا/حساب ارسال شده‌اند، تحت تاثیر قرار می‌گیرند. اما اسکاوت‌هایی که به عنوان پشتیبانی به روستاهایی که اثر این آثار باستانی را ندارند، فرستاده می‌شوند، تحت تاثیر نخواهند بود. علاوه بر این، شما می‌توانید نوع نیروهایی را که شما را در نقطه جمع حمله می‌کنند، ببینید، اما مقدار نیروها را نمی‌توانید ببینید.");
define("build232", "نامه ارشد");
define("build233", "اسکاوت‌ها، اکوییت لگاتی و پیداکنندگان در اسپایی و دفاع از حملات اسپایی بهتر هستند. تمام اسکاوت‌ها در روستا/حساب و همچنین تمام اسکاوت‌هایی که برای اسپایی از این روستا/حساب ارسال شده‌اند، تحت تاثیر قرار می‌گیرند. اما اسکاوت‌هایی که به عنوان پشتیبانی به روستاهایی که اثر این آثار باستانی را ندارند، فرستاده می‌شوند، تحت تاثیر نخواهند بود. علاوه بر این، شما می‌توانید نوع نیروهایی را که شما را در نقطه جمع حمله می‌کنند، ببینید، اما مقدار نیروها را نمی‌توانید ببینید.");
define("build234", "روزنامه سون تزو");
define("build235", "اسکاوت‌ها، اکوییت لگاتی و پیداکنندگان در اسپایی و دفاع از حملات اسپایی بهتر هستند. تمام اسکاوت‌ها در روستا/حساب و همچنین تمام اسکاوت‌هایی که برای اسپایی از این روستا/حساب ارسال شده‌اند، تحت تاثیر قرار می‌گیرند. اما اسکاوت‌هایی که به عنوان پشتیبانی به روستاهایی که اثر این آثار باستانی را ندارند، فرستاده می‌شوند، تحت تاثیر نخواهند بود. علاوه بر این، شما می‌توانید نوع نیروهایی را که شما را در نقطه جمع حمله می‌کنند، ببینید، اما مقدار نیروها را نمی‌توانید ببینید.");
define("build236", "تبر تالی");
define("build237", "نیروها غذای کمتری مصرف می‌کنند.");
define("build238", "کمان شکار اسیر قدیمی");
define("build239", "نیروها غذای کمتری مصرف می‌کنند.");
define("build240", "جام شاه آرتور");
define("build241", "نیروها غذای کمتری مصرف می‌کنند.");
define("build242", "قسم اسکاوت نوشته شده");
define("build243", "نیروها به سرعت بیشتری آموزش دیده می‌شوند.");
define("build244", "اعلام جنگ");
define("build245", "نیروها به سرعت بیشتری آموزش دیده می‌شوند.");
define("build246", "خاطرات اسکندر مقدونی");
define("build247", "نیروها به سرعت بیشتری آموزش دیده می‌شوند.");
define("build248", "طرح انبار بزرگ یا امبار بزرگ");
define("build249", "قادر به ساخت انبار بزرگ و یا امبار بزرگ می‌شود.");
define("build250", "دسترسی به ساختمان‌ها");
define("build251", "نقشه غار‌های مخفی");
define("build252", "آثار ظرفیت تعدادی از کرنی را افزایش می‌دهد و همچنین حملات مانگنیق مخالفان را به صورت تصادفی شلیک کردن می‌کند. هرگز امکان تهدید و ضربه به بناهای جهانی وجود دارد.");
define("build253", "کیسه بی پایان");
define("build254", "آثار ظرفیت تعدادی از کرنی را افزایش می‌دهد و همچنین حملات مانگنیق مخالفان را به صورت تصادفی شلیک کردن می‌کند. هرگز امکان تهدید و ضربه به بناهای جهانی وجود دارد.");
define("build255", "اسب تروجانی");
define("build256", "آثار ظرفیت تعدادی از کرنی را افزایش می‌دهد و همچنین حملات مانگنیق مخالفان را به صورت تصادفی شلیک کردن می‌کند. هرگز امکان تهدید و ضربه به بناهای جهانی وجود دارد.");
define("build257", "مدال داستان شوخی");
define("build258", "این آثار باستانی هر 24 ساعت یکبار اثر خود را تغییر می‌دهد و می‌تواند هر کدام از اثرات سایر آثار باستانی را به جز اثرات از قبیل طرح‌های بنای بناهای جهانی، امبارهای بزرگ و انبارهای بزرگ داشته باشد. همچنین محدوده اثر به طور تصادفی بین حساب و روستا در هر 24 ساعت انتخاب می‌شود.");
define("build259", "به طور تصادفی");
define("build260", "نسخه ی ممنوع");
define("build261", "این آثار باستانی هر 24 ساعت یکبار اثر خود را تغییر می‌دهد و می‌تواند هر کدام از اثرات سایر آثار باستانی را به جز اثرات از قبیل طرح‌های بنای بناهای جهانی، امبارهای بزرگ و انبارهای بزرگ داشته باشد. همچنین محدوده اثر به طور تصادفی بین حساب و روستا در هر 24 ساعت انتخاب می‌شود.");
define("build262", "به طور تصادفی");
define("build263", "آثار اسکرول ساختمان بنای جهانی");
define("build264", "آثار مورد نیاز برای ساخت بنای جهانی");
define("build265", "دسترسی به ساختمان‌ها");
define("build266", "روستا");
define("build267", "حساب");
define("build268", "خزانه");
define("build269", "تأثیر");
define("build270", "التحف القريبة");
define("build271", "عنوان");
define("build272", "بازیکن");
define("build273", "فاصله");
define("build274", "آثارهای باستانی نزدیک تر که در دسترس نیستند.");
define("build275", "شلخت یاقوتی");
define("build276", "چکش از مرمر عظیم");
define("build277", "اسکرول‌های حیمن");
define("build278", "نعل از اپال");
define("build279", "عربه ای از طلا");
define("build280", "سندال از پهیدیپیدس");
define("build281", "قصه ی موش");
define("build282", "نامه ی سردار");
define("build283", "دفترچه ی سون تزو");
define("build284", "قسم نوشته ی سرباز");
define("build285", "اعلام جنگ");
define("build286", "یادداشت‌های سکندر مقدونی");
define("build287", "طرح انبار بزرگ یا امبار بزرگ");
define("build288", "دسترسی به ساختمان‌ها");
define("build289", "آثار اسکرول بنای جهانی");
define("build290", "دسترسی به ساختمان‌ها");
define("build291", "روستا");
define("build292", "حساب");
define("build293", "فاصله");
define("build294", "التأثير");
define("build295", "آثارهای باستانی کوچک");
define("build296", "عنوان");
define("build297", "بازیکن");
define("build298", "اتحاد");
define("build299", "آثارهای باستانی وجود ندارد.");
define("build300", "شلخت یاقوتی");
define("build301", "نعل از اپال");
define("build302", "قصه ی موش");
define("build303", "قسم نوشته ی سرباز");
define("build304", "طرح انبار بزرگ یا امبار بزرگ");
define("build305", "دسترسی به ساختمان‌ها");
define("build306", "آثار اسکرول بنای جهانی");
define("build307", "دسترسی به ساختمان‌ها");
define("build308", "خزانه");
define("build309", "التأثير");
define("build310", "روستا");
define("build311", "آثارهای باستانی بزرگ");
define("build312", "عنوان");
define("build313", "بازیکن");
define("build314", "پیمان");
define("build315", "چکش از مرمر عظیم");
define("build316", "اسکرول‌های حیمن");
define("build317", "عربه ای از طلا");
define("build318", "سندال از پهیدیپیدس");
define("build319", "نامه ی سردار");
define("build320", "دفترچه ی سون تزو");
define("build321", "اعلام جنگ");
define("build322", "یادداشت‌های سکندر مقدونی");
define("build323", "طرح انبار بزرگ یا امبار بزرگ");
define("build324", "دسترسی به ساختمان‌ها");
define("build325", "حساب");
define("build326", "آثارهای باستانی وجود ندارد.");
define("build327", "خزانه");
define("build328", "التأثير");
define("build329", "آثارهای باستانی کوچک");
define("build330", "آثارهای باستانی بزرگ");
define("build331", "روستا");
define("build332", "حساب");
define("build333", "غیر فعال");
define("build334", "فعال");
define("build335", "شلخت یاقوتی");
define("build336", "ساختمان‌ها در برابر حملات کمان‌ها و کوشه‌های بز به مدت طولانی‌تری قابل مقاومت هستند. این اثر برای بنای جهانی اعمال نمی‌شود، اما جنس عمومی و یکتا و فراوانی برای تمام ساختمان‌های دیگر در روستای بنای جهانی اعمال می‌شود.");
define("build337", "چکش از مرمر عظیم");
define("build338", "ساختمان‌ها در برابر حملات کمان‌ها و کوشه‌های بز به مدت طولانی‌تری قابل مقاومت هستند. این اثر برای بنای جهانی اعمال نمی‌شود، اما جنس عمومی و یکتا و فراوانی برای تمام ساختمان‌های دیگر در روستای بنای جهانی اعمال می‌شود.");
define("build339", "اسکرول‌های حیمن");
define("build340", "ساختمان‌ها در برابر حملات کمان‌ها و کوشه‌های بز به مدت طولانی‌تری قابل مقاومت هستند. این اثر برای بنای جهانی اعمال نمی‌شود، اما جنس عمومی و یکتا و فراوانی برای تمام ساختمان‌های دیگر در روستای بنای جهانی اعمال می‌شود.");
define("build341", "نعل از اپال");
define("build342", "نیروها به سرعت بیشتری سفر می‌کنند.");
define("build343", "عربه ای از طلا");
define("build344", "نیروها به سرعت بیشتری سفر می‌کنند.");
define("build345", "سندال از پهیدیپیدس");
define("build346", "نیروها به سرعت بیشتری سفر می‌کنند.");
define("build347", "قصه ی موش");
define("build348", "اسکاوت‌ها، اکویتس لگاتی و راه‌یاب‌ها در اسپای کردن و دفاع از حملات اسپای، بهتر عمل می‌کنند. تمام اسکاوت‌های در روستا/حساب و همچنین تمام اسکاوت‌های از این روستا/حساب برای اسپای ارسال شده، تحت تأثیر قرار می‌گیرند. با این حال، اسکاوت‌هایی که به عنوان انفواد تاکیدی به روستاهایی که از طریق آثار تحت پوشش قرار نگرفته‌اند، تحت تأثیر قرار نمی‌گیرند. علاوه بر این، شما می‌توانید نوع نیروهایی که در نقطه ی جمع شما حمله می‌کنند را مشاهده کنید،اما مقدار نیروهایی که در حال حمله به شما هستند را نمی‌توانید ببینید.");
define("build349", "نامه ی سردار");
define("build350", "اسکاوت‌ها، اکویتس لگاتی و راه‌یاب‌ها در اسپای کردن و دفاع از حملات اسپای، بهتر عمل می‌کنند. تمام اسکاوت‌های در روستا/حساب و همچنین تمام اسکاوت‌های از این روستا/حساب برای اسپای ارسال شده، تحت تأثیر قرار می‌گیرند. با این حال، اسکاوت‌هایی که به عنوان انفواد تاکیدی به روستاهایی که از طریق آثار تحت پوشش قرار نگرفته‌اند، تحت تأثیر قرار نمی‌گیرند. علاوه بر این، شما می‌توانید نوع نیروهایی که در نقطه ی جمع شما حمله می‌کنند را مشاهده کنید، اما مقدار نیروهایی که در حال حمله به شما هستند را نمی‌توانید ببینید.");
define("build351", "روزنامهٔ سون تزو");
define("build352", "اسکاوت‌ها، اکویتس لگاتی و راه‌یاب‌ها در اسپای کردن و دفاع از حملات اسپای، بهتر عمل می‌کنند. تمام اسکاوت‌های در روستا/حساب و همچنین تمام اسکاوت‌های از این روستا/حساب برای اسپای ارسال شده، تحت تأثیر قرار می‌گیرند. با این حال،اسکاوت‌هایی که به عنوان انفواد تاکیدی به روستاهایی که از طریق آثار تحت پوشش قرار نگرفته‌اند، تحت تأثیر قرار نمی‌گیرند. علاوه بر این، شما می‌توانید نوع نیروهایی که در نقطه ی جمع شما حمله می‌کنند را مشاهده کنید، اما مقدار نیروهایی که در حال حمله به شما هستند را نمی‌توانید ببینید");
define("build353", "بیات اسکاوت نوشته شده");
define("build354", "نیروها به سرعت بیشتری آموزش می‌شوند.");
define("build355", "اعلام جنگ");
define("build356", "خاطرات اسکندر مقدونی");
define("build357", "طرح آنبار یا آنبار کلان بزرگ");
define("build358", "قادر به ساخت آنبار یا آنبار کلان بزرگ می‌شود.");
define("build359", "دسترسی به ساختمان‌ها");
define("build360", "پیمانه ساخت بنای جهانی");
define("build361", "آثار لازم برای ساخت بنای جهانی");
define("build362", "دسترسی به ساختمان‌ها");
define("build363", "صاحب");
define("build364", "روستا");
define("build365", "پیوستن");
define("build366", "اثر");
define("build367", "بونوس");
define("build368", "فعالیت");
define("build369", "ذخیره شده در");
define("build370", "خزانه");
define("build371", "سطح");
define("build372", "سرگرفته شده");
define("build373", "سرعة التجار الحالي");
define("build374", "سرعة التجار في المستوي");
define("build375", "سرعة التجار في المستوي 20");
define("build376", "آموزش");
define("build377", "آموزش می‌تواند با اتمام آموزشگاه بزرگ شروع شود.");
define("build378", "در دسترس");
define("build379", "آموزش می‌تواند با اتمام آشپزخانه بزرگ شروع شود.");
define("build380", "فهرست آموزش");
define("build381", "مدت زمان");
define("build382", "تکمیل شده است");
define("build383", "ابتدا نیروهای رکابی را در آکادمی آموزش دهید.");
define("build384", "بونوس پایداری فعلی");
define("build385", "بونوس واقعی");
define("build386", "بونوس برای سطح");
define("build387", "جشن");
define("build388", "عملیات");
define("build389", "تعطیلات");
define("build390", "در طول");
define("build391", "منابع کافی خواهند بود");
define("build392", "کافی گندم نیست.");
define("build393", "کافی");
define("build394", "منابع");
define("build395", "جشن‌گری");
define("build396", "جشن ادامه دارد");
define("build397", "تکمیل خواهد شد");
define("build398", "حداکثر واحدهای مرتب تراپ برای آموزش");
define("build399", "تراپ‌ها");
define("build400", "حداکثر واحدهای مرتب تراپ در سطح");
define("build401", "حداکثر واحدهای مرتب تراپ در سطح 20");
define("build402", "کنونی دارای");
define("build403", "در دسترس");
define("build404", "ایجاد کردن");
define("build405", "آموزش می‌تواند با اتمام تراپر شروع شود.");
define("build406", "واحات محتلة بواسطة");
define("build407", "روستا");
define("build408", "نوع");
define("build409", "اتحاد");
define("build410", "تسلط");
define("build411", "مختطات");
define("build412", "منابع");
define("build413", "1. واحه بعدی از سطح 10 مانشن قهرمان");
define("build414",  "2.واحه بعدی از سطح 15 مانشن قهرمان");
define("build415", "3. واحه بعدی از سطح 20 مانشن قهرمان");
define("build416", "2. واحه بعدی از سطح 15 مانشن قهرمان");
define("build417", "3. واحه بعدی از سطح 20 مانشن قهرمان");
define("build418", "3. واحه بعدی از سطح 20 مانشن قهرمان");
define("build419", "سایر واحات");
define("build420", "صاحب");
define("build421", "روستا");
define("build422", "مختطات");
define("build423", "منبع");
define("build424", "ظرفیت فعلی");
define("build425", "واحد");
define("build426", "ظرفیت در سطح");
define("build427", "هزینه");
define("build428", "کارگرها در حال کار هستند");
define("build429", "کمبود کم‌وری: باید ابتدا کشاورزی را ارتقا دهید!");
define("build430", "آنبار را ارتقا دهید.");
define("build431", "آنبار گندم را ارتقا دهید.");
define("build432", "منابع کافی در");
define("build433", "ساخت");
define("build434", "لیست");
define("build435", "ساخت");
define("build436", "معمار");
define("build437", "ساخت ساختمان جدید");
define("build438", "ساخت‌هایی که به زودی در دسترس خواهند بود");
define("build439", "متقاضیان اصلی");
define("build440", "سطح");
define("build441", "این ساختمان در حداکثر سطح قرار دارد.");
define("build442", "ساخته شده در سطح ماکسیمم.");
define("build443", "ساختمان در حال ویرانگری است.");
define("build444", "هزینه‌ها");
define("build445", "برای ساخت تا سطح");
define("build446", "تمام کارگرها مشغول هستند.");
define("build447", "تمام کارگرها مشغول هستند. (لیست)");
define("build448", "کمبود غذایی. کشاورزی‌های بیشتری بسازید.");
define("build449", "آنبار را بسازید.");
define("build450", "آنبار گندم را بسازید.");
define("build451", "هرگز منابع کافی نخواهد بود");
define("build452", "منابع کافی");
define("build453", "افزایش سطح");
define("build454", "دور");
define("build455", "معمار");
define("build456", "عجایب‌الخلقات جهان");
define("build457", "سطح");
define("build459", "برای تغییر نام شگفت‌انگیز جهانی باید سطح 1 داشته باشید.");
define("build460", "نام عجایب‌الخلقات جهان");
define("build461", "شما نمی‌توانید پس از سطح 10 نام عجایب‌الخلقات جهان را تغییر دهید.");
define("build462", "نام تغییر کرد.");
define("build463", "ساختمان در حداکثر سطح است.");
define("build464", "ساخته شده در سطح ماکسیمم.");
define("build465", "ساختمان در حال ویرانگری است.");
define("build466", "هزینه‌ها");
define("build467", "برای ساخت تا سطح");
define("build468", "تمام کارگرها مشغول هستند.");
define("build469", "تمام کارگرها مشغول هستند. (لیست)");
define("build470", "کمبود غذایی. کشاورزی‌های بیشتری بسازید.");
define("build471", "آنبار را بسازید.");
define("build472", "آنبار گندم را بسازید.");
define("build473", "منابع کافی");
define("build474", "در");
define("build475", "افزایش سطح");
define("build476", "معمار");
define("build477", "نیاز به نقشه ساخت عجایب‌الخلقات جهان.");
define("build478", "نیاز به نقشه‌های بیشتر برای ساخت عجایب‌الخلقات جهان.");

define("dorf31", "دهکده");
define("dorf32", "دهکده");
define("dorf33", "ساختمان");
define("dorf34", "نیروهای مسلح");
define("dorf35", "تاجران");
define("dorf36", "منابع");
define("dorf37", "جمع");
define("dorf38", "مخازن");
define("dorf39", "نقاط تمدنی");
define("dorf310", "CP/روز");
define("dorf311", "جشن‌ها");
define("dorf312", "نیروهای مسلح");
define("dorf313", "درگاه‌ها");
define("dorf314", "نیروهای مسلح خود");
define("dorf315", "CP");
define("dorf316", "حملات");

define("map1", "مرکز نقشه");
define("map2", "دهکده جدید پیدا شد");
define("map3", "ارسال نیروها");
define("map4", "توزیع:");
define("map5", "نیروها");
define("map6", "بازیکن");
define("map7", "قبیله");
define("map8", "پیشقدران");
define("map9", "مالک");
define("map10", "جمعیت");
define("map11", "گزارشات");

define("msg0", "آدرس");
define("msg1", "بازیکن");
define("msg2", "ارسال");
define("msg3", "هیچ پیامی در حال حاضر وجود ندارد.");
define("msg4", "انتخاب همه");
define("msg5", "حذف");
define("msg6", "وردی");
define("msg7", "نوشتن");
define("msg8", "تاریخ");
define("msg9", "هیچ پیامی وجود ندارد.");
define("msg10", "گیرنده");
define("msg11", "موضوع");
define("msg12", "ارسال");

define("notice0", "از دهکده");
define("notice1", "نیروهای مسلح");
define("notice2", "از دست داده");
define("notice3", "زندانیان");
define("notice4", "اطلاعات");
define("notice5", "دفاع");
define("notice6", "تقویت");
define("notice7", "حمله");
define("notice8", "از روستا");
define("notice9", "ارسال شده");
define("notice10", "در");
define("notice11", "فرستنده");
define("notice12", "از روستا");
define("notice13", "نیروهای مسلح");
define("notice14", "نیروهای مسلح");
define("notice15", "اطلاعات");
define("notice16", "منابع کسب شده از");
define("notice17", "ارسال شده");
define("notice18", "از روستا");
define("notice19", "منابع");
define("notice20", "در روستا");
define("notice21", "کشف‌گرها");
define("notice22", "گزارشی موجود نیست");
define("notice23", "انتخاب همه");
define("notice24", "حذف");
define("plus0", "خرید طلا");
define("plus1", "قیمت");
define("plus2", "تعداد");
define("plus3", "خرید");
define("plus4", "شارژ");
define("plus5", "خرید");
define("plus6", "ویژه");
define("plus7", "قیمت طلا");
define("plus8", "قیمت");
define("plus9", "مقدار");
define("plus10", "خرید (با استفاده از PayPal)");
define("plus11", "شارژ");
define("plus12", "خرید");
define("plus13", "خرید طلا با مبلغ دیگر (UnitPay) (روسی)");
define("plus14", "مبلغ پرداخت");
define("plus15", "مجموع");
define("plus16", "*هنگامی که طلا بیش از 300 روبل پرداخت می‌شود، قیمت با طریف‌ها ارزان‌تر است!");
define("plus17", "در صورت وجود پرسش و یا مشکل، با ");
define("plus18", "مدیر");
define("plus19", "بعد از خرید طلا، به ");
define("plus20", "بانک");
define("plus21", "می‌توانید طلا خریداری شده را به هر حساب کاربری موجود در سرورهای مختلف به صورت جزئی یا کامل انتقال داده و یا ذخیره کنید.");
define("plus22", "روبل");
define("plus23", "بانک (نسخه مینی)");
define("plus24", "طلای خریداری شده/انتقال داده شده از روندهای قبلی اینجا ذخیره می‌شود (اگر موجودی بیش از 100 مد بود)<br />شما می‌توانید آن را به <s>هر حساب کاربری دیگری</s> <b>حساب کاربری خود</b> (نسخه مینی) در xTravian.net انتقال دهید.");
define("plus25", "کد را برای انتقال طلا وارد کنید.");
define("plus26", "(کد به ایمیل شما ارسال شده است.)");
define("plus27", "ایمیل یافت نشد!");
define("plus28", "کد پذیرفته شد!");
define("plus29", "برای انتقال در دسترس است");
define("plus30", "طلا");
define("plus31", "طلای قابل انتقال");
define("plus32", "نام کاربری");
define("plus33", "کد غیرمعتبر است!");
define("plus34", "مشکلی پیش آمده است.<br />دوباره تلاش کنید.");
define("plus35", "بازیکن");
define("plus36", "یافت شد");
define("plus37", "شناسه بازیکن");
define("plus38", "خواهد انتقال شد");
define("plus39", "طلا");
define("plus40", "بازیکن یافت نشد");
define("plus41", "بازگشت");
define("plus42", "مشکلی پیش آمده است.<br />دوباره تلاش کنید.");
define("plus43", "طلا با موفقیت انتقال داده شد!");
define("plus44", "مشکلی پیش آمده است.<br />دوباره تلاش کنید.");
define("plus45", "ایمیل");
define("plus46", "نسخه کامل");
define("plus47", "دوستان را به خرید طلا دعوت کنید و طلا به دست آورید!");
define("plus48", "لینک شخصی خود را به دوستتان ارسال کنید");
define("plus49", "شرایط مناسب برای دریافت جایزه");
define("plus50", "1. هنگامی که جمعیت بازیکنان معرفی شده به بازیکن عبور از ");
define("plus51", "شود، شما می‌توانید با کلیک روی آیکون به دست آوردن ");
define("plus52", "طلا");
define("plus53", "2. شما نمی‌توانید مقام جانشین معرفی شده را بر عهده بگیرید.");
define("plus54", "بازیکنان معرفی شده");
define("plus55", "نام بازیکن");
define("plus56", "تاریخ ثبت نام");
define("plus57", "جمعیت");
define("plus58", "روستاها");
define("plus59", "به دست آوردن");
define("plus60", "هنوز هیچ بازیکنی را معرفی نکرده‌اید.");
define("plus61", "برترین معرفان");
define("plus62", "رتبه");
define("plus63", "بازیکن");
define("plus64", "مقر تعویض");
define("plus65", "مقدار طلا و یا نقره را وارد کنید که می‌خواهید تعویض کنید");
define("plus66", "مبلغ طلا و یا نقره که شما به عنوان جایزه برای تعویض دریافت خواهید کرد");
define("plus67", "محاسبه");
define("plus68", "اطلاعات حساب کاربری شما را در حساب پستی وارد کنید");
define("plus69", "ایمیل");
define("plus70", "مشتری میزبان");
define("plus71", "نام کاربری");
define("plus72", "کلمه عبور");
define("plus73", "حساب پستی");
define("plus74", "بانک");
define("plus75", "تحویل به حساب");
define("plus76", "درگاه");
define("plus77", "کد پن");

define("other0", "شما بلوک شده‌اید. نامه‌ای به مدیر بفرمایید.");
define("other1", "irantra.ir");
define("other2", "پایان");
define("other3", "پایان یافت در");
define("other4", "سطح");
define("other5", "محل ساخت مستقل");
define("other6", "عجائب وجود");
define("other7", "محل ساخت");
define("other8", "نقطه ی جمع برای محل ساخت");
define("other9", "محل ساخت");
define("other10", "در ارتباط");
define("other11", "فیسبوک");
define("other12", "ماجراجویی");
define("other13", "ساعت حفاظت.");
define("other14", "حساب کاربری در زمان ");
define("other15", "آثار");
define("other16", "عجائب وجود روستا");
define("other17", "آسیب دیده شده از طریق");
define("other18", "زبان را به روسی تغییر دهید");
define("other19", "زبان را به انگلیسی تغییر دهید");
define("other20", "تولید");
define("other21", "هیچ چیز");
define("other22", "برای کلیک کنید");
define("other23", "ساخت با کلیک بر روی سطح");

//пункт сбора
define("punktxuev0", "کشاورزی ها");
define("punktxuev1", "ساختمان ها");
define("punktxuev2", "نیروها");
define("punktxuev3", "تایید");
define("punktxuev4", "برو به ماجراجویی");
define("punktxuev5", "نیروها");
define("punktxuev6", "رسیدن");
define("punktxuev7", "قهرمان شما بعد از آن روستا نیست.");
define("punktxuev8", "قهرمان شما مرده است.");
define("punktxuev9", "شما باید یک نقطه ی جمع بسازید.");
define("punktxuev10", "به سمت خانه بفرست");
define("punktxuev11", "این نیروها را به خانه بفرستید");
define("punktxuev12", "واحدها");
define("punktxuev13", "زمان");
define("punktxuev14", "نیروها کافی نیست!");


//активация
define("activate0", "برای بازی، شما باید حساب کاربری خود را ابتدا فعال کنید.");
define("activate1", "کد فعالسازی: ");
define("activate2", "فعالسازی");
define("activate3", "ایمیل یا نام کاربری را اشتباه وارد کرده‌اید؟");
define("activate4", "اینجا می‌توانید ثبت نام کنید و دوباره ثبت نام کنید.");
define("activate5", "ایمیل شما: ");
define("activate6", "لاگین شما: ");
define("activate7", "رمز عبور شما: ");
define("activate8", "صحت اطلاعات وارد شده را بررسی کنید.");
define("activate9", "اطمینان حاصل کنید که حساب کاربری فعال نشده است.");
define("activate10", "ارسال");
define("activate11", "یا");

//альянс
define("ally0", "دعوت‌نامه‌ها");
define("ally1", "دعوت‌نامه‌ای وجود ندارد");
define("ally2", "دعوت‌نامه برای");
define("ally3", "برو");
define("ally4", "جزئیات");
define("ally5", "مناصب");
define("ally6", "اعضا");
define("ally7", "خروج");
define("ally8", "اخبار");
define("ally9", "حملات");
define("ally10", "گزینه‌ها");
define("ally11", "دسترسی");
define("ally12", "هیچ");
define("ally13","");
define("ally14","");

//фармлист
define("farmlist0", "دهکده");
define("farmlist1", "جزئیات");
define("farmlist2", "");
define("farmlist3", "فاصله");
define("farmlist4", "نیروها");
define("farmlist5", "حمله ی اخیر");
define("farmlist6", "اضافه کردن دهکده");
define("farmlist7", "حمله");
define("farmlist8", "آیا از حذف لیست مطمئن هستید؟");
define("farmlist9", "ساخت لیست جدید");
define("farmlist10", "لیستی وجود ندارد.");
define("farmlist11", "نام: ");
define("farmlist12", "ایجاد");
define("farmlist13", "این لیست مال شما نیست، آقا!");
define("farmlist14", "هیچ روستایی با این مشخصات وجود ندارد.");
define("farmlist15", "هیچ نیرویی انتخاب نشده است.");
define("farmlist16", "اطلاعات صحیح وارد کنید.");
define("farmlist17", "افزودن مزرعه");
define("farmlist18", "نام مزرعه: ");
define("farmlist19", "انتخاب هدف: ");
define("farmlist20", "حذف");
define("farmlist21", "کشت");

//dorf3
define("dorf0", "نمای کلی");
define("dorf1", "منابع");
define("dorf2", "انبارها");
define("dorf3", "نقاط تمدنی");
define("dorf4", "نیروها");
define("dorf5", "دهکده");
define("dorf6", "حملات");
define("dorf7", "ساختمان ها");
define("dorf8", "نیروها");
define("dorf9", "تاجر");
define("dorf10", "جمع");
define("dorf11", "امتیاز فرهنگی/روز");
define("dorf12", "جشن‌ها");
define("dorf13", "پنجره");
define("dorf14", "نیروها");
define("dorf15","");
define("dorf16","");
define("dorf17","");
define("dorf18","");
define("dorf19","");
define("dorf20","");
define("dorf21","");
define("dorf22","");
define("dorf23","");
define("dorf24","");
define("dorf25","");
define("dorf26","");
define("dorf27","");
define("dorf28","");
define("dorf29","");
define("dorf30","");


//makegold в плюсе
define("mkg0", "دوستان خود را به خرید اکانت دعوت کنید و طلا به دست آورید!");
define("mkg1", "چگونه انجام شود؟");
define("mkg2", "ارسال به دوستتان");
define("mkg3", "لینک کد شما");
define("mkg4", "شرایط مطلوب برای جایزه:");
define("mkg5", "1.چگونه تنها جامعه امپراطوری از بازیکنانی که شما دعوت می کنید بالاتر خواهد بود");
define("mkg6", "می‌توانید طلا را با کلیک بر روی آیکون");
define("mkg7", "به دست آورید");
define("mkg8", "2.شما نمی‌توانید بازیکن دعوت شده را جایگزین کنید.");
define("mkg9", "بازیکنان دعوت شده:");
define("mkg10", "بازیکن");
define("mkg11", "تاریخ ثبت نام");
define("mkg12", "جمعیت");
define("mkg13", "روستا");
define("mkg14", "به دست آوردن");
define("mkg15", "شما هنوز هیچ بازیکن جدیدی را دعوت نکرده اید.");

//сообщения
define("MSG0", "عنوان");
define("MSG1", "پیام");
define("MSG2", "تاریخ");
define("MSG3", "هیچ پیامی وجود ندارد.");
define("MSG4", "انتخاب همه");
define("MSG5", "حذف");
define("MSG6", "پست");
define("MSG7", "نوشتن");
define("MSG8", "فرستاده شده");
define("MSG9", "تاریخ");
define("MSG10", "پاسخ");
define("MSG11", "بازگشت به صندوق پستی");
define("MSG12", "به آینده:");
define("MSG13", "ارسال");


//TAINIK
define("TA", "سطح مخفیگاه");
define("TA1", "مخفیگاه برای پنهان کردن برخی از منابع شما در هنگام حمله به روستا استفاده می‌شود. این منابع قابل سرقت نیستند.");
define("TA2", "مخفیگاه");
define("TA3", "واحد");
define("TA4", "مخفیگاه در سطح");
define("TA6", "هزینه‌های ساخت تا سطح");
define("TA7", "ارتقا تا سطح");
define("newrpt", "گزارشات جدید:");

//SOKR
define("sokr0", "مالک");
define("sokr1", "روستا");
define("sokr2", "اتحاد");
define("sokr3", "تأثیر");
define("sokr4", "افزایش");
define("sokr5", "فعالیت");
define("sokr6", "نگهداری در:");
define("sokr7", "مخزن");
define("sokr8", "سطح");
define("sokr9", "تصرف");
define("sokr10", "حفظ");
define("sokr11", "تحفه");
define("sokr12", "هیچ تحفه‌ای ندارید.");
define("sokr13", "تحفه های نزدیک");
define("sokr14", "بازیکن");
define("sokr15", "فاصله");
define("sokr16", "هیچ تحفه‌ای نزدیک نیست.");
define("sokr17", "مخزن");
define("sokr18", "تحفه‌های کوچک");
define("sokr19", "هیچ تحفه‌ای وجود ندارد.");
define("sokr20", "تحفه‌های بزرگ");
define("sokr21", "غیرفعال");
define("sokr22", "فعال");

//taverna
define("TVRN0", "واحاتی که توسط");
define("TVRN1", "");
define("TVRN2", "نوع");
define("TVRN3", "لواء");
define("TVRN4", "تاریخ");
define("TVRN5", "رویدادها");
define("TVRN6", "افزایش");
define("TVRN7", "واحه بعدی از قصر افسانه‌های سطح ۱۰");
define("TVRN8", "واحه بعدی از قصر افسانه‌های سطح ۱۵");
define("TVRN9", "واحه بعدی از قصر افسانه‌های سطح ۲۰");
define("TVRN10", "واحات دیگر");
define("TVRN11", "مالک");
define("TVRN12", "چوب");
define("TVRN13", "خشت");
define("TVRN14", "آهن");
define("TVRN15", "گندم");

//отчеты
define("rpts0", "نیروها");
define("rpts1", "جنگ شده‌ها");
define("rpts2", "تصرف");
define("rpts3", "اطلاعات");
define("rpts4", "از روستا");
define("rpts5", "تقویت");
define("rpts6", "عنوان");
define("rpts7", "ارسال منابع به");
define("rpts8", "تاریخ");
define("rpts9", "دفاع");
define("rpts10", "در روستا");
define("rpts11", "حمله");
define("rpts12", "استخراج");
define("rpts13", "(جدید)");
define("rpts14", "هیچ گزارشی وجود ندارد.");
define("rpts15", "ارسال‌شده");
define("ot4m0", "همه");
define("ot4m1", "حمله");
define("ot4m2", "تقویت");
define("ot4m3", "ماجراجویی");
define("ot4m4", "تجارت");
define("XUYXUYXUY", "گزارشات");
define("REPORT_TODAY", "امروز");
define("REPROT_YESTERDAY", "دیروز");
define("len0", "مخازن");
define("len1", "دهکده");

//рынок
define("MERCHANTS", "تاجران");
define("IMSEARCHING", "در جستجوی");
define("IMOFFERING", "پیشنهاد من");
define("OFFEREDONTHEMARKET", "پیشنهاد شده در بازار");
define("rinok0", "مسیر تجاری");
define("rinok1", "پیشنهادات در بازار");
define("rinok2", "پیشنهاد شده");
define("rinok3", "برای");
define("rinok4", "مورد نیاز");
define("rinok5", "من");
define("rinok6", "بازیکن");
define("rinok7", "زمان");
define("rinok8", "پذیرش");
define("rinok9", "منابع کافی نیست");
define("rinok10", "تاجر کافی وجود ندارد");
define("rinok11", "موافقت");
define("rinok12", "پیشنهادی در بازار وجود ندارد");
define("rinok13", "ارسال تاجر");
define("rinok14", "هر تاجر می‌تواند به حداکثر");
define("rinok15", "منابع را به کنار خود ببرد");
define("rinok16", "شما باید منابع را وارد کنید");
define("rinok17", "شما نمی‌توانید به همان روستای خود ارسال کنید");
define("rinok18", "بازیکن مسدود شده است و نمی‌توانید ارسال کنید");
define("rinok19", "شما باید منابع را انتخاب کنید");
define("rinok20", "شما باید منابع را وارد کنید یا نام روستا را وارد کنید");
define("rinok21", "تعداد کافی از تاجران وجود ندارد");
define("rinok22", "تاجرانی که پیش از این ارسال کرده‌اند");
define("rinok23", "برگشت در");
define("rinok24", "منابع");
define("rinok25", "تاجران روستا در مسیر:");
define("rinok26", "تاجران بازگشتی");
define("rinok27", "پیشنهاد");
define("rinok28", "جستجو");
define("rinok29", "حداکثر زمان برای انتقال:");
define("rinok30", "ساعت");
define("rinok31", "فقط اتحاد");
define("rinok32", "فروش");
define("rinok33", "پیشنهادی");
define("rinok34", "پیشنهاد");
define("rinok35", "جستجو");
define("rinok36", "اتحاد");
define("rinok37", "ساعت");
define("rinok38", "همه");
define("rinok39", "شخصیت غیر اصلی کامل شد.");
define("rinok40", "هزینه");
define("rinok41", "بازگشت به ساختمان");
define("rinok42", "توزیع منابع (مرحله ۱ از ۲)");
define("rinok43", "توزیع منابع (مرحله ۲ از ۲)");
define("rinok44", "شما نمی‌توانید در روستای خود توزیع منابع را استفاده کنید.");
define("rinok45", "شروع");
define("rinok46", "روت معتبری غیرفعال است.");
define("rinok47", "روت تجاری به");
define("rinok48", "ویرایش");
define("rinok49", "ایجاد روت جدید");
define("rinok50", "منابع");
define("rinok51", "زمان شروع");
define("rinok52", "تحویل‌ها");
define("rinok53", "ویرایش روت");
define("rinok54", "دهکده هدف");

define("anlm0","");
define("anlm1","");
define("anlm2","");

define("upgra0", "هزینه:");
define("upgra1", "کارگر کافی وجود ندارد.");
define("upgra2", "ضروری است که ابتدا زمین کشاورزی را ارتقا دهید!");
define("upgra3", "آپگرید انبار کاشت");
define("upgra4", "آپگرید انبار حبوبات");
define("upgra5", "منابع الزم تامین شده است");
define("upgra6", "ساخت ساختمان");
define("upgra7", "(فهرست انتظار)");
define("upgra8", "ساخت");
define("upgra9", "(هزینه:");

//world wonder
define("ww0", "شگفتی دنیا برجسته‌ترین کارهای مهندسی و نماد افتخار است. تنها بازیکنان قدرتمند و منابع زیادی دار به ساخت چنین اثرهایی می‌توانند و می‌توانند آن را در برابر دشمنان حسود ایجاد کنند. این اثرها نمی‌توانند در روستای خود ساخته شوند و تنها در روستای ناتار ثروتمند ساخته می‌شوند. برای ساخت این اثرها باید نقشه‌ی ساخت آن را داشته باشید. برای ساخت سطح 50 تا، باید یکی از همتحدیانتان در حساب خود یک نقشه داشته باشد.");
define("ww1", "برای تغییر نام معجزه باید معجزه را تا سطح ۱ بسازید.");
define("ww2", "نام شگفتی جهان:");
define("ww3", "بعد از سطح ۱۰ نمی‌توانید نام معجزه را تغییر دهید.");
define("ww4", "نام تغییر کرد.");
define("ww5", "نیاز به نقشه ساخت معجزه دارید.");
define("ww6", "نیاز به نقشه‌های بیشتر ساخت معجزه دارید.");
define("ww7", "برای ساخت تا سطح ");
define("ww8", "برای ساخت معجزه به سطح ۵۰، باید یک نقشه در حساب اتحادیه خود داشته باشید (یک نقشه باید در حساب معجزه و نقشه‌ی دیگر باید در حساب یکی از عضوی اتحادیه باشد).");
define("ww9", "برای ساخت معجزه باید حداقل یک نقشه در حساب کاربری خود داشته باشید و برای ارتقای معجزه به سطح بالاتر از ۵۰، حداقل یکی از همتحدیانتان نیز نقشه باید داشته باشد.");

//kuznicaupgrade
define("kuzupg0", "ارتقا به سطح آخر ");
define("kuzupg1", "ارتقا افراد صهر آهنین را انجام دهید");
define("kuzupg2", "پژوهش در حال انجام است");
define("destroyvil", "دهکده نابود شده است.");

//exchange gold and silver
define("exchange0", "انتقال نقره");
define("exchange1", "تبدیل");
define("exchange2", "طلای کافی برای تبدیل وجود ندارد");
define("exchange3", "فضه کافی برای تبدیل وجود ندارد");
define("exchange4", "طلایی برای تبدیل تعیین نشده است");
define("exchange5", "تبدیل طلا");
define("exchange6", "طلای کافی برای تبدیل وجود ندارد");
define("exchange7", "انتقال فضه");
define("exchange8", "از این فور تبدیل نقره به طلا");
define("exchange9", "ادامه");
define("exchange10", "ماجراهایی برای بازکردن آکشن بازی!");
//sitter
//заместители
define("accsit0", "ارسال هدیه");
define("accsit1", "ارسال تقویت به بازیکنان پایانی");
define("accsit2", "ارسال منابع");
define("accsit3", "خرید و استفاده از طلا");
define("accsit4", "حذف پیام ها و گزارشات");
define("accsit5", "خواندن و ارسال پیام ها");



//онлайн в альянсе(online in alliance)
define("oweronline0", "همین الان فعال");
define("oweronline1", "غیر فعال");
define("oweronline2", "آخرین وجود پیش از 3 روز");
define("oweronline3", "آخرین وجود پیش از 7 روز");

//doperevod
define("heroh0", "مصرف");
define("heroh1", "آیا مطمئن هستید که می‌خواهید از این ابزار استفاده کنید؟");
define("heroh2", "نقاط تمدنی فعلی");
define("heroh3", "نقاط اضافه شده خواهد شد:");
define("heroh4", "بعد اضافه شدن خواهد بود: ");
define("sendmsg", "ارسال پیام");

//EVERYDAY QUEST
define("questday0", "ماموریت به پایان رسید");
define("questday1", "ماموریت هنوز به پایان نرسیده است");
define("questday2", "وظایف روزانه");
define("questday3", "امتیاز");
define("questday4", "از طریق جمع 25 نقطه، یکی از جوایز زیر را دریافت خواهید کرد:");
define("questday5", "5 بازی");
define("questday6", "+5000 نقطه تمدن");
if(!defined("HOWRES")){define("HOWRES",100000);} //در اینجا ریسکی عملی را انجام می‌دهیم
define("questday7", HOWRES." مورد تصادفی از نوع یک منبع");
define("questday8", "از طریق جمع 50 نقطه، یکی از جوایز زیر را دریافت خواهید کرد:");
define("questday9", "+1 روز +25% افزایش چوب");
define("questday10", "+1 روز +25% افزایش کوره");
define("questday11", "+1 روز +25% افزایش آهن");
define("questday12", "+1 روز +25% افزایش آهن");
define("questday13", "+1 روز +25% افزایش استخوان");
define("questday14", "از طریق جمع 75 نقطه، یکی از جوایز زیر را دریافت خواهید کرد:");
define("questday15", "+20 بازی");
define("questday16", "+2 افزایش جان");
define("questday17", "+1000 فضه");
define("questday18", "از طریق جمع 100 نقطه، یکی از جوایز زیر را دریافت خواهید کرد:");
define("questday19", "+50 طلا");
define("questday20", "+4000 فضه");
define("questday21", "+50 بازی");
define("questday22", "این جوایز رایگان را هر روز دریافت خواهید کرد!");
define("questday23", "(تنظیمات دوباره در ساعت 12:00 تنظیم می‌شود، از جمع آنها قبل از آن بررسی کنید)");
define("questday24", "پایان بازی");
define("questday25", "دریافت وسام");
define("questday26", "دعوت بازیکن");
define("questday27", "ساختن شهر جدید");
define("questday28", "برنده شدن و یا هزینه طلا");
define("questday29", "تصرف در واحه");
define("questday30", "ما را در دیسکورد ببینید");
define("questday31", "به روز رسانی یک واحد به بیشترین سطح");
define("questday32", "تبریک! نقاط کافی برای دریافت جایزه گرد آوردید!");
define("questday33", "typeset");
define("questday34", "امتیاز");
define("questday35", "می‌توانید برای دریافت جایزه خود به");
define("questday36", "امتیاز/امتیازات روزانه");
define("questday37", "جایزه اتفاقی از این جوایز:");
define("questday38", "امروز امتیاز جمع آوری کردید");
define("questday39", "و بنابراین جایزه زیر را دریافت کردید:");
define("questday40", "جایزه شما برای امروز:");

define("REP_С1", "تحریر <b>همه</b> نیروهای نظامی.");
define("REP_С2", "قصر / مسکن");
define("REP_С3", "ساعت ناوگان‌سازی");
define("REP_С4", "سور");
define("REP_С5", "شخصیت شما به 0 تجربه دست یافت");
define("REP_С6", "شخصیت شما به");
define("REP_С7", "از ");
define("REP_С8", "به");
define("REP_С9", "بدست آورد");
define("REP_С10", "واحه را فتح کرد و");
define("REP_С11", "");
define("REP_С12", "نمی‌توان شهر را فتح کرد");
define("REP_С13", "نقاط باستانی کافی نیست.");
define("REP_С14", "مردم شهر");
define("REP_С15", "تصمیم گرفته‌اند به شهر شما بپیوندند");
define("REP_С16", "");
define("REP_С17", "قصر و مسکن تخریب نشد.");
define("REP_С18", "شهر تخریب شد.");
define("REP_С19", "از سطح ");
define("REP_С20", "");
define("REP_С21", "سطح");
define("REP_С22", "");
define("REP_С23", "سور اثر نگذاشت");
define("REP_С24", "سور تخریب شد");
define("REP_С25", "سوری موجود نیست");
define("REP_С26", "حمله به قوانین در ");
define("REP_С27", "حمله به");
define("REP_С28", "تقویت از");
define("REP_С29", "تقویت از");
define("REP_С30", "واحه اشغال شده");
define("REP_С31", "هیچ چیزی در ماجراجویی پیدا نشد.");
define("REP_С32", "");
define("REP_С33", "شخصیت شما هنر نامشخص را کشف کرد و");
define("REP_С34", "شخصیت شما هنر را پیدا نکرد و");
define("REP_С35", "شما دارای حداکثر تعداد هنر هستید. شخصیت");
define("REP_С36", "جاسوسی بر");
define("REP_С37", "منابع آینده از");
define("REP_С38", "منابع به شهر");
define("REP_С39", "منابع");
define("REP_С40", "تخریب شد");
define("REP_С41", "اثر نگذاشت");
define("REP_С42", "از");
define("REP_С43", "اسر و حوش");
define("REP_С44", "");
define("REP_С45", "واحه");
define("REP_С46", "شخصیت شما از ماجراجویی برنمی‌گردد.");
define("REP_С47", "");
define("REP_С48", "کاوش");
define("REP_С49", "شما 0 شخصیت را فتح کردید.");
define("savebankgold", "موازنه طلا از چرخه قبلی می‌توانید از طریق");
define("allgold", "همه طلا");
define("adminhelp", "اگر سوالی دارید، لطفا با");
define("endround", "طلا به حساب کاربری شما بعد از پرداخت اعتبار می‌گیرد");
define("endround1", "در انتهای چرخه / حذف طلا از حساب کاربری با فرمول زیر محاسبه می‌شود:");

//punktsbora
define("punktsb1", "زمان مورد نیاز:");
define("punktsb2", "تغییر محل شخصیت");
define("DAYS", "روز");
//define("allgold", "Все золото");
//define("adminhelp"," В случае возникновения вопросов обращайтесь к");

define("quest173", "وظایف روزانه");
define("quest174", "جوایز روزانه");
define("quest175", "اینجا را برای جزئیات بفشارید");


	define("new_village"," دهکده جدید");
	define("new_village2","دهکده");

	$lang_winner['1'] = 'برنده‌های بازیکنان '.SERVER_NAME.'';
    $lang_winner['2'] = 'بعد از روزهای طولانی محنت و کار سخت، یکی از کارگران با بیخ ریختن سنگ پایانی در بزرگترین و شگفت‌انگیزترین بنای تاریخ دنیا توانستند اختتام بخشند!';
    $lang_winner['3'] = 'نتیجه: کارگران معجزه را انجام دادند';
	$lang_winner['4'] = 'با ساختن آخرین سنگ در معجزه در نتیجه هماهنگی و کار خوب توانستند آخرین سنگ را در معجزه جهان بسازند و به این دنیا پایان دهند و برای همیشه آن را کنترل کنند. ';
    $lang_winner['5'] = 'و در برابر حملات دشمن و آتش نشانان در کنار یکدیگر با اتحاد از آن دفاع کنید';
    $lang_winner['6'] = 'کسی که ساخت معجزه را به پایان رساند و میلیون ها منبع را به آن و ائتلافش برای ساختن معجزه جهان اختصاص داد، به این ترتیب سزاوار آن بود';
    $lang_winner['7'] = 'برنده این سرور';
    $lang_winner['8'] = 'او بزرگترین و بهترین امپراتوری ها را بر روی این سرور ساخت و بنابراین شایسته عنوان بزرگترین امپراتوری و پس از آن همه شد';
    $lang_winner['9'] = 'و';
    $lang_winner['10'] = 'او وحشت و ترس را در دل دشمنان و رقبای خود پراکنده کرد، به آنها حمله کرد، آنها را پراکنده کرد، آنها را پراکنده کرد و آنها را در سرزمین خود سلاخی کرد، بنابراین سزاوار بهترین مهاجمان در سرور است. ';
    $lang_winner['11'] = 'او با شجاعت تمام از سرمایه خود دفاع کرد و ارتش های زیادی را در تعداد زیادی از کسانی که می خواستند به او حمله کنند کشت و بنابراین شایسته عنوان بهترین مدافعان روی سرور بود.';
    $lang_winner['12'] = 'با احترام';
    $lang_winner['13'] = 'تیم '.SERVER_NAME.'';
    $lang_winner['14'] = 'ادامه';
    $lang_winner['desc1'] = 'مجموع دهکده ها';
    $lang_winner['desc2'] = 'جمعیت کل';
    $lang_winner['desc3'] = 'امتیاز حمله';
    $lang_winner['desc4'] = 'امتیاز دفاعی';

	define("PL_01", "خانه ی طلا");
define("PL_02", "ویژگی های عالی برای هر دوره بازی!");
define("PL_03", "به تاجرهای قریه‌تان اجازه دهید تا منابع را بیش از یک بار به صورت خودکار انتقال دهند، معدن‌های جدید را روی نقشه قرار دهید و پیام‌های خود را و گزارش جنگ‌هایی که در آن‌ها شرکت می‌کنید را ذخیره کنید. از فهرست مزارع برای مدیریت حمله‌هایتان استفاده کنید ... به ارتش اصلیتان امکان تفعیل گزینه ی فرار در پایتخت را در صورت حمله به قلعه‌تان از سوی دشمن بدهید!");
define("PL_04", "افزایش تولید طلا");
define("PL_05", "ویژگی ها و امکانات بهتر!");
define("PL_06", "به تاجرهای قریه‌تان اجازه دهید تا منابع را بیش از یک بار به صورت خودکار انتقال دهند، معدن‌های جدید را روی نقشه قرار دهید و پیام‌های خود را و گزارش جنگ‌هایی که در آن‌ها شرکت می‌کنید را ذخیره کنید. از فهرست مزارع برای مدیریت حمله‌هایتان استفاده کنید ... به ارتش اصلیتان امکان تفعیل گزینه ی فرار در پایتخت را در صورت حمله به قلعه‌تان از سوی دشمن بدهید!");
define("PL_07", "+25% تولید چوب");
define("PL_08", "+25% تولید خشت");
define("PL_09", "+25% تولید آهن");
define("PL_10", "+25% تولید گندم");
define("PL_11", "به شما افزایش 25% در تولید منابع مورد انتخاب در قریه خود برای مدت زمانی که در صفحه ی اصلی شما قرار می گیرد، را به ارمغان می آورد.");
define("PL_12", "افزایش 25% فقط به تولید اصلی قریه شما نیست، بلکه به تولید با افزایش هایی که از طریق ساخت مسکن های مختلف به دست می آورید نیز به اضافه شده است!");

define("PL_13", "لطفاً ویژگی ای که می‌خواهید از آن استفاده کنید را انتخاب کنید:");
define("PL_14", "فعال سازی");
define("PL_15", "زمان افزایش");
define("PL_16", "بازه ی کامل");
define("PL_17", "روز");
define("PL_18", "فعال سازی حال");
define("PL_19", "پایان یافته");

	// productionBoostPopup
	define("BOOST_POPUP_GOLD","طلا");
define("BOOST_POPUP_BUTTON","فعال سازی");

define("BOOST_POPUP01","افزایش تولید");
define("BOOST_POPUP02","لطفاً منابعی را که می‌خواهید افزایش تولید آن‌ها را انتخاب کنید");
define("BOOST_POPUP03","تولید چوب");
define("BOOST_POPUP04","تولید خشت");
define("BOOST_POPUP05","تولید آهن");
define("BOOST_POPUP06","تولید گندم");
define("BOOST_POPUP07","زمان افزایش به روز");
define("BOOST_POPUP08","ساعت");
define("BOOST_POPUP09","با افزایش تولید از طریق بلاس می‌توانید تولید هر قریه خود را 25% برای مدت 7 روز افزایش دهید. اگر گزینه ی تمدید خودکار را انتخاب کنید، افزایش تولید به صورت خودکار در هر زمان که به نزدیکترین زمان پایان آن برسید، تمدید خواهد شد.");
define("BOOST_POPUP11","به پایان می‌رسد در");

define("BD_LEVEL", "سطح");
define("MAXLEVEL", "ساختمان به سطح آخر رسید");
define("TOP10", "10 برتر");


	$lang['buildings']['texts'] = array (
		'TRA0' => 'فهرست آموزشی',
'TRA1' => 'واحد',
'TRA2' => 'مدت',
'TRA3' => 'پایان',
'AKA1' => 'از قبل یک جستجو وجود دارد',
'AKA2' => 'تحقیق می تواند پس از اتمام ساخت آکادمی آغاز شود.',
	);

	$lang['profile'] = array(
		'1' => 'نمایه بازیکن',
'2' => 'رتبه جمعیت',
'3' => 'جمعیت',
'4' => 'رتبه حمله',
'5' => 'امتیاز',
'6' => 'رتبه مدافع',
'7' => 'سطح قهرمان',
'8' => 'تجربه',

		// Medals
		'9' => 'دسته',
        '10' => 'هفته',
        '11' => 'رتبه',
        '12' => 'امتیاز',
	);
	

	$lang['quests'] = array(
		'Next' => 'ادامه',
		'getRewards' => 'دریافت پاداش',
		'ActivateTips' => 'نمایش نکات',
		'DeactivateTips' => 'پنهان کردن نکات',
		'TipsToggleDescription' => 'روشن/خاموش نکات',
		'GetRewards' => 'دریافت پاداش',
		'Overview' => 'بررسی اجمالی',
		'Battle' => 'نبرد',
		'Economy' => 'تجارت',
		'World' => '[جهان]',

		'1' => array(
			'Title' => 'خوش آمدی عزیزم',
			'Description' => 'خوش آمدی '.$session->username.', به تراوین خوش آمدید<br>من به شما کمک خواهم کرد تا اولین دهکده را بسازید و سپس خودتان ادامه دهید.',
			'toDo' => array('آموزش و توضیحات در مورد ویژگی های اصلی بازی و می تواند چند دقیقه طول بکشد. حالا شروع کن!')
		),
		'2' => array(
			'Title' => 'وظایف و کمک کننده',
			'Description' => 'شما می توانید صفحه کار را منتقل یا ببندید. برای باز کردن دوباره آن، کافی است روی تصویر در گوشه سمت چپ بالا کلیک کنید. شما نکات و وظایفی را برای کمک به شما در بازی پیدا خواهید کرد.',
            'toDo' => array('Close task', 'روی مشاور برای باز کردن صفحه راهنمایی کلیک کنید', 'خاموش کردن نکات ویژگی (غیرفعال)'),
            'reward' => 'یک خشت سطح 1 در انتظار شماست!',
			'completed' => 'شما همیشه می توانید اطلاعات مربوط به کار فعلی خود را دریافت کنید. با دریافت پاداش ماموریت می توانید ماموریت بعدی را شروع کنید. خشت خودت را بگیر.'
		),

		'3' => array(
			'Title' => 'ساختمان چوب بران',
       'Description' => 'برای افزایش دهکده خود به منابع زیادی نیاز دارید، برای ساختن و آموزش نیروها و حتی رشد امپراطوری خود! ابتدا منابع تولید خود را افزایش دهید - یک چوب بردار بسازید!',
         'toDo' => array ('منطقه جنگلی باز', 'افزایش سطح زمین چوبی 1'),
           'reward' => 'پایان چوب بری سطح 1',
           'completed' => 'این یک شروع قوی برای حرکت به سمت تجارت قوی تر است. من به تازگی ساخت هیزم شکن را تکمیل کرده ام تا بتوانم ادامه دهم.'
		),

		'4' => array(
			'Title' => 'ارتقای چوب بری',
         'Description' => 'یک ساختمان بزرگتر با هر ارتقا به منابع بیشتری نیاز دارد، اما به نوبه خود بیشتر نیز تولید خواهد کرد. لطفا الان چوب بری را از سطح 1 به سطح 2 ارتقا دهید!',
          'toDo' => array ('باز کردن قفل Lumberjack سطح 1','Request to build Lumberjack level 2'),
          'reward' => 'ساختن Lumberjack سطح 2 را فوراً به پایان برسانید',
           'completed' => 'این یک شروع قوی برای حرکت به سمت تجارت قوی تر است. من به تازگی ساخت هیزم شکن را تکمیل کرده ام تا بتوانم ادامه دهم.'
		),

		'5' => array(
			'Title' => 'توسعه مزرعه گندم',
'Description' => 'اگر به سمت چپ صفحه تراوین نگاه کنید، گندم استراتژیک موجود در دهکده خود را خواهید دید که می تواند مصرف ساختمان های جدید را پوشش دهد. همه ساختمان ها برای حفظ خود گندم مصرف می کنند. لطفاً اکنون یک مزرعه گندم را توسعه دهید.',
'toDo' => array('روی گندم زار کلیک کنید تا باز شود', 'به روز رسانی مزرعه گندم به سطح 1'),
'reward' => 'فرآیند ساخت و ساز مزرعه گندم را فوراً به سطح 1 پایان دهید و آن را به سطح 2 ارتقا دهید',

'completed' => 'دهکده شما اکنون به اندازه کافی گندم تولید می کند تا نیازهای ساختمان های جدید را پوشش دهد. تدارکات ساکنان از طریق ساختمان ها تامین می شود، اما ممکن است برای تغذیه سربازان و نیروها به مقداری گندم از خارج از روستا نیاز داشته باشید.'
		),

		'6' => array(
			'Title' => 'منابع قهرمان تغییر دهید',
'Description' => 'روی تصویر قهرمان در سمت راست صفحه کلیک کنید و بهره وری قهرمان را از منابع به خشت تغییر دهید.',
'toDo' => array('روی تصویر قهرمان کلیک کنید','تغییر به منبع خشت'),
'reward' => ''.number_format(200 * SPEED).' <i class="r2"></i>',
'completed' => 'کار خوبی است. هنگامی که منابع در دهکده شما کمیاب است، داشتن قهرمان به شما کمک می کند. قهرمان تولید منابع را افزایش می دهد (طبق دستور شما) و افزایش تولید در کشور اصلی قهرمان باقی می ماند حتی اگر او در راه باشد. من اکنون منابعی را به فروشگاه های شما اضافه می کنم.'
		),

		'7' => array(
			'Title' => 'به دهکده خود وارد شوید',
			'Description' => 'در حال حاضر، ما نیاز به افزایش ظرفیت ذخیره منابع در روستا داریم. برای این کار باید وارد مرکز روستا شویم و در آنجا انبار بسازیم. برای این کار روی دایره دوم از سمت راست کلیک کنید.',
			'toDo' => array('الان وارد دهکده شوید'),

			'completed' => 'کار خوبی است. هنگامی که منابع در دهکده شما کمیاب است، داشتن قهرمان به شما کمک می کند. قهرمان تولید منابع را افزایش می دهد (طبق دستور شما) و افزایش تولید در کشور اصلی قهرمان باقی می ماند حتی اگر او در راه باشد. من اکنون منابعی را به فروشگاه های شما اضافه می کنم.'
		),

		'8' => array(
			'Title' => 'ساخت یک انبار',
			'Description' => 'بدون انبارها در روستا، مقدار بسیار کمی از منابع را می توان در آنها ذخیره کرد. روی هر مکانی که برای ساخت و ساز در روستای خود تعیین شده است کلیک کنید، انبارها را در لیست زیرساخت جستجو کنید و شروع به ساختن کنید.',
			'toDo' => array('منوی ساخت و ساز را باز کنید و از آنجا منوی زیرساخت را انتخاب کنید','دستور ساخت انبار را به سطح 1 بدهید'),
			'reward' => 'یک روز از تراوین پلاس',

			'completed' => 'فرایند ساخت انبار آغاز شده است و به زودی ظرفیت ذخیره سازی بیشتری برای منابع خود و آنچه روستای شما تولید می کند خواهید داشت. من یک روز پلاس از تراوین به شما می‌دهم و به شما این امکان را می‌دهم که همزمان دو ساختمان بسازید.'
		),

		'9' => array(
			'Title' => 'ساخت یک اردوگاه',
			'Description' => 'برای اینکه قهرمان خود را به یک ماجراجویی بفرستید، باید یک اردوگاه بسازید که می تواند در مرکز دهکده قرار گیرد! یک نقطه تجمع برای سطح 1 بسازید.',
			'toDo' => array('روی فضای تعیین شده برای ساختن نقطه مونتاژ کلیک کنید','دستور ساختن اردوگاه را به سطح 1 بدهید'),
			'reward' => '<img src="img/x.gif" alt="طلا" title="طلا" class="gold"> 2',

			'completed' => 'عالی! مراحل ساخت شروع شده است و ما قادر خواهیم بود قهرمان شما را به ماجراجویی بفرستیم. چون این مأموریت را به پایان رساندی، من مقداری طلا به تو می دهم که اکنون می توانی از آن به خوبی استفاده کنی.'
		),

		'10' => array(
			'Title' => 'اتمام سریع و فوری',
			'Description' => 'در پایین صفحه، زیر تصویر روستا، لیست ساخت و ساز را مشاهده می کنید که حاوی دستورات ساختمانی است که چند لحظه پیش داده اید. می توانید خودتان به ساخت این ساختمان ها سرعت ببخشید. از مقداری از طلایی که به‌تازگی با کلیک کردن روی عبارت "پایان فوری سفارشات ساخت و ساز" به دست آورده‌اید، استفاده کنید.',
			'toDo' => array('این ساختمان ها فوراً ساخته می شود'),
			'reward' => '<img src="img/x.gif" alt="طلا" title="طلا" class="gold"> 10',

			'completed' => 'اکنون می توانید قهرمان خود را به ماجراجویی بفرستید. ابتدا به برخی از زمینه های منابع در دهکده خود دستور ساخت دهید تا از توسعه مداوم آنها اطمینان حاصل کنید. این طلا را بگیر و عاقلانه خرج کن!'
		),

		'11' => array(
			'Title' => 'به یک ماجراجویی بروید',
			'Description' => 'ناشناخته های اطراف دهکده خود را کشف کنید، تجربه قهرمان خود را افزایش دهید و غارت ارزشمندی به دست آورید. منوی ماجراجویی را باز کنید و قهرمان خود را در اولین ماجراجویی خود بفرستید.',
			'toDo' => array('قهرمان خود را در اولین ماجراجویی خود بفرستید'),
			'reward' => 'قهرمان شما به تازگی به محل ماجراجویی خود رسیده است',

			'completed' => 'بسیار خوب، قهرمان شما به ماجراجویی خود رفته است - چه چیزی پیدا کرده است؟ در زیر تصویر قهرمان خود می توانید ببینید که او در جاده است. به او اجازه می دهم سریع بیاید و ببینم چه می شود.'
		),

		'12' => array(
			'Title' => 'گزارش ها',
			'Description' => 'قهرمان شما از اولین ماجراجویی خود در راه بازگشت به دهکده است. در لیست گزارش (دایره پنجم از سمت راست) گزارش های مبارزه، تجارت و تقویت را پیدا می کنید. گزارش ماجراجویی قهرمان را باز کنید و آن را بخوانید تا از جزئیات آنچه قهرمان خود پیدا کرده است مطلع شوید.',
			'toDo' => array('لیست گزارش را باز کنید','گزارش ماجراجویی جدید را بخوانید'),
			'reward' => '<img src="img/x.gif" class="reportInfo itemCategory itemCategory_ointment"> 10',

			'completed' => 'می توانید نوع پاداشی که قهرمان دریافت کرده است را در نمای صفحه قهرمان ببینید. چی به دست آوردی؟ "در واقع، قهرمان شما کمی صدمه دیده است - و من برای درمان آسیب او به شما پمادهای درمانی دادم.'
		),

		'13' => array(
			'Title' => 'معالجه قهرمان',
			'Description' => 'قهرمان شما کمی زخمی شده است. فایل قهرمان را با کلیک بر روی تصویر قهرمان در سمت راست صفحه باز کنید.حالا برای استفاده روی تصویر پماد شفابخش کلیک کنید. یک کادر محاوره ای کوچک ظاهر می شود که از شما می پرسد: "آیا واقعاً می خواهید از پماد شفا استفاده کنید؟" روی کلمه "بله" در دکمه سبز رنگ کلیک کنید. فقط مقدار لازم از پماد شفابخش مورد نیاز برای شفای قهرمان خود استفاده می شود.',
			'toDo' => array('روی تصویر قهرمان در سمت راست بالای صفحه برای باز کردن موجودی کلیک کنید','روی پماد شفابخش موجود در فهرست کلیک کنید تا بتوانید از آن استفاده کنید'),
			'reward' => 'قهرمان شما'.number_format(20*SPEED).' تجربه را کسب کرده است',

			'completed' => 'به این ترتیب می توانید از هر چیزی که قهرمان از ماجراجویی های خود به ارمغان می آورد یا در حراج می خرید استفاده کنید. پس از فشار دادن، قهرمان شما از آن استفاده یا مصرف می کند. برای اطلاعات بیشتر لطفاً توضیحات مربوط به صفحه قهرمان را بخوانید.'
		),

		'14' => array(
			'Title' => 'مشاهده راهنما',
			'Description' => 'در کنار تصویر من، پیوندهایی به یک صفحه راهنمای اضافی برای بازی پیدا خواهید کرد. در آنجا توضیحات تکمیلی در مورد رابط کاربری و رابط کاربری بازی خواهید یافت. شما فقط باید آن را امتحان کنید!',
			'toDo' => array('راهنمای UI را باز کنید و سعی کنید درباره رابط بیشتر بدانید'),
			'reward' => '<i class="r1"></i> '.number_format(270*SPEED).' <i class="r2"></i> '.number_format(300*SPEED).' <i class="r3"></i> '.number_format(270*SPEED).' <i class="r4"></i> '.number_format(220*SPEED).'',

			'completed' => 'اگر سؤال خاصی در مورد بازی دارید، همیشه می توانید به "Travian Answers" بروید - در آنجا پاسخ را دریافت خواهید کرد، برای آن "i" را در بالای این پنجره یا در گوشه بالا فشار دهید. از صفحه نمایش.'
		),

		'15' => array(
			'Title' => 'پایان آموزش !اما!',
			'Description' => 'اکنون می توانیم بگوییم که شما اطلاعات اولیه مربوط به بازی را دارید. اطلاعات مهم در مورد محافظت از افراد تازه کار یا رویدادهای خاص را می توانید در کادر اطلاعات سمت راست بیابید. از بازی تراوین لذت ببرید!',
			'toDo' => array(),
			'reward' => 'در مرحله بعدی',

			'completed' => 'اکنون می توانیم بگوییم که شما اطلاعات اولیه مربوط به بازی را دارید. اطلاعات مهم در مورد محافظت از افراد تازه کار یا رویدادهای خاص را می توانید در کادر اطلاعات سمت راست بیابید. از بازی تراوین لذت ببرید!'
		),
		'15a' => array(
			'Title' => 'پرش از آموزش',
			'Description' => 'اکنون شما اصول اولیه بازی را می دانید. اطلاعات مهم مانند داده های حیاتی برای پشتیبانی از تازه واردان و بازی در کادر اطلاعات سمت چپ ظاهر می شود. از تراوین لذت ببرید!',
			'toDo' => array(),
			'reward' => 'نقطه جمع آوری 1، خشت، چوب بری 2، گندم زار lv. 2، 10 طلا، 1.3 روز به علاوه،',

			'completed' => 'اکنون می توانیم بگوییم که شما اطلاعات اولیه مربوط به بازی را دارید. اطلاعات مهم در مورد محافظت از افراد تازه کار یا رویدادهای خاص را می توانید در کادر اطلاعات سمت راست بیابید. از بازی تراوین لذت ببرید!'
		),

);

$lang['quests']['battle'] = array(
	'1' => array(
		'Title' => 'المغامرة التالية',
		'Description' => 'خلال الدورة التدريبية، تحصل على بعض نقاط الخبرة من المغامرات. إبدأ مغامرتك التالية حالما يعود بطلك إلى القرية. تجميع الخبرة سيعطيك دفعة للنمو بسرعة.',
		'toDo' => array('الإنتقال للمغامرة التالية'),
		'reward' => ''.number_format(30*SPEED).' نقطة خبرة للبطل',

		'completed' => 'رائع، إن بطلك في طريقه إلي مغامرته الثانية. تذكر: كلما زادت الكفاءة القتالية لبطلك، يقل خطر تعرضه للإصابة أثناء المغامرات'
	),
	'2' => array(
		'Title' => 'بناء المخبأ',
		'Description' => 'قم ببناء مخبأ لحماية موارد القرية , هناك الكثير من اللاعبين يريدون مواردك! قم بتخبئة مواردك.',
		'toDo' => array('بناء مخبأ'),
		'reward' => '<i class="r1"></i> '.number_format(130*SPEED).' <i class="r2"></i> '.number_format(150*SPEED).' <i class="r3"></i> '.number_format(120*SPEED).' <i class="r4"></i> '.number_format(100*SPEED).'',

		'completed' => 'عظيم، لن يكون بمقدور الناهبين أن يسرقوا مواردك بالسهولة التي كانوا يتوقعونها. إفحص صندوق المعلومات لتعرف موعد إنتهاء حماية المبتدئين تماما.'
	),
	'3' => array(
		'Title' => 'بناء ثكنة',
		'Description' => 'في الثكنة يتم تدريب القوات , كلما إرتفع مستوى الثكنة قلت الفترة الزمنية لتدريب القوات.',
		'toDo' => array('بناء الثكنة'),
		'reward' => '<i class="r1"></i> '.number_format(110*SPEED).' <i class="r2"></i> '.number_format(140*SPEED).' <i class="r3"></i> '.number_format(160*SPEED).' <i class="r4"></i> '.number_format(30*SPEED).'',

		'completed' => 'لقد تم تشييد الثكنه! خطوة جيدة باتجاه السيادة!'
	),
	'4' => array(
		'Title' => 'إنهاء 5 مغامرات',
		'Description' => 'مغامرات أكثر غنائم أكثر , قم بإرسال بطلك للمغامرة كلما توفرت مغامرة , قم بإراحة البطل إذا كانت صحته متدنية أو إعطائة دهن شفاء.',
		'toDo' => array('إنهاء 5 مغامرات'),
		'reward' => '<img src="img/x.gif" title="دهن شفاء" class="questRewardTypeItem item106"> <span class="questRewardValue">150</span>',

		'completed' => 'مرهم يمكن استخدامها للشفاء البطل الخاص بك. إذا كنت تجهيز المراهم أنها سوف تستخدم في أقرب وقت البطل يأخذ الضرر.'
	),
	/*
	'15' => array(
		'Title' => 'مستوي البطل',
		'Description' => 'إضغط على صورة البطل وأظهر الميزات وقم بإضافة نقاط على الكفائة الحربية!',
		'toDo' => array('توزيع النقاط الخاصه بالبطل عند توفر نقاط جديدة'),
		'reward' => '<i class="r1"></i> '.number_format(190*SPEED).' <i class="r2"></i> '.number_format(250*SPEED).' <i class="r3"></i> '.number_format(150*SPEED).' <i class="r4"></i> '.number_format(110*SPEED).'',

		'completed' => 'يمكنك تغيير توزيع النقاط لكل فئة في أي وقت. كل ما تحتاجه لهذا هو كتاب الحكمة، والتي يمكن العثور عليها في مغامرات'
	),
	*/
	'5' => array(
		'Title' => 'تدريب القوات',
		'Description' => 'حان موعد تدريب أولى قواتك. يمكنك في الثكنة أن تدرب واحدا من وحدات المشاة الأن.',
		'toDo' => array('قم بتدريب إثنين من وحدات المشاة في الثكنة'),
		'reward' => '<img src="img/x.gif" title="قفص" class="questRewardTypeItem item114"> <span class="questRewardValue">1</span>',

		'completed' => 'لقد وضعت حجر الأساس لجيشك ا لجبار! تذكر دوما أنك معرض للهجوم من الخصوم حتي لو لم تكن أونلاين.'
	),
	'6' => array(
		'Title' => 'الحاجز',
		'Description' => 'عليك الأن أن تبني بعض الدفاعات. تزيد التحصينات من قوتك الدفاعية الأساسية وتزيد من قوة جنودك في الدفاع.',
		'toDo' => array('إبن التحصينات حول قريتك'),
		'reward' => '<i class="r1"></i> '.number_format(120*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(90*SPEED).' <i class="r4"></i> '.number_format(50*SPEED).'',

		'completed' => 'رائع، لقد أصبحت قريتك محمية الأن بشكل أفضل.'
	),
	'7' => array(
		'Title' => 'هاجم واحة',
		'Description' => 'إبحث عن واحة غير محتلة على الخارطة بالقرب من قريتك واهجم عليها لتنهبها. إذا كان فيها وحوش تدافع عنها، أرسل بطلك مع بعض الأقفاص لتأسر هذه ا لوحوش وتجلبهم ليدافعوا عن قريتك.',
		'toDo' => array('إفتح واحة غير محتلة على الخارطة وأهجم عليها'),
		'reward' => 'وحدتان من القوات الأساسية',

		'completed' => 'تهانينا، هجومك الأول على الطريق! تستطيع إلغاء الهجوم في نقطة التجمع خلال الـ 90 ثانية الأولى فقط.'
	),
	'8' => array(
		'Title' => 'عشرة مغامرات',
		'Description' => 'إستمر في إرسال بطلك في المغامرات. بعد أن يخوض بطلك عشرة مغامرات، ستتمكن من دخول المزادات والمتاجرة بأدوات البطل مع بقية الاعبين.',
		'toDo' => array('خض عشرة مغامرات'),
		'reward' => '500 فضة',

		'completed' => 'تهانينا، تستطيع الأن الدخول فى المزادات. خذ مني هذه الفضة، وبهذا سيكون لديك بعض المال لشراء بعض الأدوات.'
	),
	'9' => array(
		'Title' => 'مزادات',
		'Description' => 'على يسار صورة بطلك تجد صورة مطرقة صغيرة لو ضغطت عليها تأخذك إلي قاعة المزادات؛ أنظر أي الأدوات تعرض هناك وبأي سعر! لعلك ترغي في بيع ما لا تحتاجه من مغانم البطل فتكسب بعض الفضة؟',
		'toDo' => array('إعرض شيئا ما أو شارك في أحد المزادات'),
		'reward' => '<i class="r1"></i> '.number_format(280*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(220*SPEED).' <i class="r4"></i> '.number_format(110*SPEED).'',

		'completed' => 'ممتاز، أنت تعرف الأن كيف تتاجر بأدوات البطل المختلفة في المزادات.'
	),
	'10' => array(
		'Title' => 'تطوير الثكنه',
		'Description' => 'لقد قمت بتشييد الثكنه، ولكن الأن يجب تطويرها لمستوي أعلي حتي تستطيع البحث عن وحدات أقوي، قم بتطوير الثكنه للمستوي 3',
		'toDo' => array('قم بتطوير الثكنه إلى المستوي 3'),
		'reward' => '<i class="r1"></i> '.number_format(240*SPEED).' <i class="r2"></i> '.number_format(290*SPEED).' <i class="r3"></i> '.number_format(430*SPEED).' <i class="r4"></i> '.number_format(240*SPEED).'',

		'completed' => 'جيد، تستطيع الأن تدريب ثواتك بشكل أسرع قليلا، إضافة إلى أنك تستطيع بناء الأكاديمية.'
	),
	'11' => array(
		'Title' => 'قم بتشييد الأكاديمية',
		'Description' => 'تستطيع عمل بحث لأنواع جديدة وقوية من القوات في الأكاديمية. بعض هذه الوحدات مكلف جدا، وبعضها يحتاج لبعض الشروط الخاصة قبل أن تتمكن من عمل بحث له!',
		'toDo' => array('قم بتشييد الأكاديمية الأن'),
		'reward' => '<i class="r1"></i> '.number_format(210*SPEED).' <i class="r2"></i> '.number_format(170*SPEED).' <i class="r3"></i> '.number_format(245*SPEED).' <i class="r4"></i> '.number_format(115*SPEED).'',

		'completed' => 'ممتاز. ستعرف المزيد عن وحدات قبيلتك قريبا.'
	),
	'12' => array(
		'Title' => 'البحث في الأكاديمية',
		'Description' => 'دقق في شروط البحث الأن جيدا. هناك مشاة وفرسان ووحدات حصار وتدمير. الوحدات القتالية موزعه بشكل عام في مجموعتين رئيسيتين: قوات دفاعية وقوات هجومية.',
		'toDo' => array('قم بالبحث عن أنواع أخري من الوحدات'),
		'reward' => '<i class="r1"></i> '.number_format(450*SPEED).' <i class="r2"></i> '.number_format(435*SPEED).' <i class="r3"></i> '.number_format(515*SPEED).' <i class="r4"></i> '.number_format(550*SPEED).'',

		'completed' => 'البحث عن وحدة واحده لا يكفي بالطبع؛ عليك أن تقوم بتدريب القوات الجديدة أيضا!'
	),
	'13' => array(
		'Title' => 'قم بتشييد أفران صهر الحديد',
		'Description' => 'في أفران صهر الحديد يتم تدريع وحداتك القتالية وتسليحها بشكل أفضل. عدا عن أن المبني بحد ذاته ضروري لإتاحة الفرصة لك لتشييد مبان عسكرية أخري.',
		'toDo' => array('قم بتشييد أفران صهر الحديد'),
		'reward' => '<i class="r1"></i> '.number_format(500*SPEED).' <i class="r2"></i> '.number_format(400*SPEED).' <i class="r3"></i> '.number_format(700*SPEED).' <i class="r4"></i> '.number_format(400*SPEED).'',

		'completed' => 'رائع. يمكنك الأن تقوية دروع وأسلحة وحداتك القتالية!'
	),
	'14' => array(
		'Title' => 'تحسين القوات',
		'Description' => 'إن تحسين القوات أمر مكلف جدا. كلما امتلكت وحدات قتالية أكثر، كانت مسألة تحسين القوات مجدية أكثر. في هذه الحال ستكون الفائدة عليك أضعاف التكلفة!',
		'toDo' => array('قم بتشييد أفران صهر الحديد'),
		'reward' => '<img src="img/x.gif" title="ضمادة" class="questRewardTypeItem item112"> <span class="questRewardValue">10</span>',

		'completed' => 'ممتاز، إن قدرة وحداتك القتالية على الدفاع والهجوم قد تحسنت الأن!'
	),
);

$lang['quests']['economy'] = array(
	'1' => array(
		'Title' => 'معدن آهن جدید',
		'Description' => 'دستور ساخت را به معدن آهن بدهید! هدف اصلی شما بهره وری بالای منابع است تا بتوانید امپراتوری خود را به سرعت گسترش دهید.',
		'toDo' => array('شروع ساختن یک معدن آهن'),
		'reward' => 'افزایش تولید 25٪ در تمام منابع برای یک روز',

		'completed' => 'بازده آهن بالاتر برای روستای شما. افزایش تولید به شما کمک می کند تا منابع خود را افزایش دهید، مهم نیست که سطح زمینه های منابع چقدر پایین باشد.'
	),
	'2' => array(
		'Title' => 'منابع افزایشی',
		'Description' => 'توسعه یک مزرعه چوب، یک مزرعه آهن، یک مزرعه رسی و یک مزرعه گندم. نه، برای سطح 1. به یاد داشته باشید که تا زمانی که تراوین پلاس فعال است، می توانید دو زمینه قومی را همزمان توسعه دهید.',
		'toDo' => array('یک فیلد اضافی از هر منبع تا سطح 1 ایجاد کنید'),
		'reward' => '<i class="r1"></i> '.number_format(160*SPEED).' <i class="r2"></i> '.number_format(190*SPEED).' <i class="r3"></i> '.number_format(150*SPEED).' <i class="r4"></i> '.number_format(70*SPEED).'',

		'completed' => 'تبریک می‌گویم، روستای شما بسیار در حال رشد و شکوفایی است'
	),
	'3' => array(
		'Title' => ' انبار غذا',
		'Description' => 'برای اینکه بتوانید گندم بیشتری ذخیره کنید، به انبار غلات نیاز دارید. می‌توانید با نگاه کردن به نوار منبع، ظرفیت ذخیره‌سازی انبار انبار فعلی را دریابید.',
		'toDo' => array('یک انبار غذا بسازید'),
		'reward' => '<i class="r1"></i> '.number_format(250*SPEED).' <i class="r2"></i> '.number_format(290*SPEED).' <i class="r3"></i> '.number_format(100*SPEED).' <i class="r4"></i> '.number_format(130*SPEED).'',

		'completed' => 'کار خوب! انبار غله اکنون می تواند گندم بیشتری در خود جای دهد.'
	),
	'4' => array(
		'Title' => 'ارتقای همه منابه به سطح 1',
		'Description' => 'اول باید روی منابع تمرکز کنیم. لطفاً تمام فیلدهای منبع خود را به سطح 1 ارتقا دهید.',
		'toDo' => array('لطفا همه فیلدهای منبع خود را به سطح 1 ارتقا دهید'),
		'reward' => '<i class="r1"></i> '.number_format(400*SPEED).' <i class="r2"></i> '.number_format(460*SPEED).' <i class="r3"></i> '.number_format(330*SPEED).' <i class="r4"></i> '.number_format(270*SPEED).'',

		'completed' => 'بهره وری منابع روستای شما به طور پیوسته در حال افزایش است. به زودی ساخت ساختمان های دیگر را در روستای شما آغاز خواهیم کرد.'
	),
	'5' => array(
		'Title' => 'از هر منع یکی رو به 2 برسان',
		'Description' => 'به افزایش بهره وری منابع روستای خود ادامه دهید. لطفاً یک فیلد از هر نوع برای سطح 2 ایجاد کنید.',
		'toDo' => array('از هر نوع یک فیلد برای سطح 2 ایجاد کنید'),
		'reward' => '<i class="r1"></i> '.number_format(240*SPEED).' <i class="r2"></i> '.number_format(255*SPEED).' <i class="r3"></i> '.number_format(190*SPEED).' <i class="r4"></i> '.number_format(160*SPEED).'',

		'completed' => 'کار خوب! اگر به اطلاعات بیشتری در مورد تولید دهکده خود نیاز دارید، روی سطح انبار خود کلیک کنید.'
	),
	'6' => array(
		'Title' => 'بازار',
		'Description' => 'گاهی اوقات ممکن است با کمبود یک منبع برای ساختن یک ساختمان مواجه شوید، در این صورت می توانید مازاد منابع موجود در بازار را با سایر بازیگران در ازای این منبع مبادله کنید. برای ساختن بازار، باید سطح ساختمان اصلی را کمی بالا ببرید.',
		'toDo' => array('یک بازار احداث کنید'),
		'reward' => '<i class="r1"></i> '.number_format(600*SPEED).'',

		'completed' => 'بازار در دهکده شما آماده است و می توانید منابع آن را با بقیه بازیکنان روی سرور خریداری و بفروشید. اما مراقب باشید که با پیشنهادات بدی که از نیاز شما به منابع سوء استفاده می کند، نیفتید!'
	),
	'7' => array(
		'Title' => 'تجارت',
		'Description' => 'با کلیک بر روی کلمه "خرید" می توانید پیشنهادات موجود در بازار را مرور کنید. قبل از خرید، مدت زمانی که تاجران به سمت شما نقل مکان می کنند و نرخ ارز را بررسی کنید. اگر پیشنهاد جذابی پیدا نکردید که نیازهای شما را برآورده کند، به "فروش" بروید و پیشنهاد خود را برای این تامین کننده ایجاد کنید.',
		'toDo' => array('یک پیشنهاد برای فروش منبع در بازار ایجاد کنید یا پیشنهاد یک بازیکن را بپذیرید'),
		'reward' => '<i class="r1"></i> '.number_format(100*SPEED).' <i class="r2"></i> '.number_format(99*SPEED).' <i class="r3"></i> '.number_format(99*SPEED).' <i class="r4"></i> '.number_format(99*SPEED).'',

		'completed' => 'خوب، این اولین قدم شما به دنیای تجارت منابع در تراوین بود'
	),
	'8' => array(
		'Title' => 'ارتقای همه منایع به سطح 2',
		'Description' => 'قبل از ساختن ساختمان های با منابع فشرده، باید تولید منابع دهکده شما را افزایش دهیم. لطفاً تمام فیلدهای منبع خود را به سطح 2 ارتقا دهید.',
		'toDo' => array('لطفا همه فیلدهای منبع خود را به سطح 2 ارتقا دهید'),
		'reward' => '<i class="r1"></i> '.number_format(400*SPEED).' <i class="r2"></i> '.number_format(400*SPEED).' <i class="r3"></i> '.number_format(400*SPEED).' <i class="r4"></i> '.number_format(200*SPEED).'',

		'completed' => 'عالی! بهره وری منابع روستای شما به طور پیوسته در حال افزایش است.'
	),
	'9' => array(
		'Title' => 'ارتقا انبار به سطح 3',
		'Description' => 'وقت آن رسیده است که ظرفیت منابع ذخیره خود را در ازای افزایش بهره وری منابع روستای خود بهبود بخشید. قهرمان شما ممکن است گاهی منابع غیرمنتظره ای را از یکی از ماجراجویی های خود برای شما به ارمغان بیاورد و اگر ظرفیت فروشگاه های شما کافی نباشد، این منابع از بین می روند.',
		'toDo' => array('ارتقای انبار به سطح 3'),
		'reward' => '<i class="r1"></i> '.number_format(620*SPEED).' <i class="r2"></i> '.number_format(730*SPEED).' <i class="r3"></i> '.number_format(560*SPEED).' <i class="r4"></i> '.number_format(230*SPEED).'',

		'completed' => 'بسیار خوب، بنابراین منابع ارزشمند را هدر نخواهید داد.'
	),
	'10' => array(
		'Title' => 'ارتقای انبار غذا به سطح 3',
		'Description' => 'هرچه دهکده شما منابع بیشتری تولید کند، انبارهای آن سریعتر پر می شود. بنابراین باید سطح ذخایر غلات خود را نیز بالا ببرید.',
		'toDo' => array('به روز رسانی انبار غذا به سطح 3'),
		'reward' => '<i class="r1"></i> '.number_format(880*SPEED).' <i class="r2"></i> '.number_format(1020*SPEED).' <i class="r3"></i> '.number_format(590*SPEED).' <i class="r4"></i> '.number_format(320*SPEED).'',

		'completed' => 'اکنون شما فضای بیشتری در انبارها دارید که در غیاب شما نیز می توان منابع را ذخیره کرد.'
	),
	'11' => array(
		'Title' => 'آسیاب',
		'Description' => 'آسیاب ها باعث بهبود و افزایش بهره وری در تمام مزارع گندم در روستای شما می شوند. برای اینکه افزایش شفاف و مؤثر باشد، ابتدا باید سطح مزارع گندم افزایش یابد.',
		//'toDo' => array('قم بتطوير حقل قمح واحد للمستوي 5','قم بتشييد المطاحن للمستوى 1'),
		'toDo' => array('ساخت آسیاب برای سطح 1'),
		'reward' => 'آسیاب سطح 2',

		'completed' => 'اکنون شما گندم استراتژیک بیشتری برای ساختن ساختمان های بیشتری دارید. همچنین ساختمان هایی وجود دارند که بهره وری دهکده شما را از منابع دیگر افزایش می دهند.'
	),
	'12' => array(
		'Title' => 'همه منابع به سطح 5',
		'Description' => 'لطفا همه فیلدهای منبع را تا سطح 5 در دهکده بالا ببرید',
		'toDo' => array('قم رجاء برفع كل حقول الموارد للمستوى 5 في القرية'),
		'reward' => 'تولید همه مواد را 25 درصد برای یک روز افزایش دهید',

		'completed' => 'عالی! شما تولید قوی دارید که به شما کمک می کند شهرک نشینان را استخراج کنید.'
	),
);
$lang['quests']['world'] = array(
	'1' => array(
		'Title' => 'مشاهده آمار',
		'Description' => 'در دنیای تراوین، با هزاران بازیکن دیگر رقابت کنید. آمارها را مرور کنید تا دریابید که در بین آنها در چه رتبه ای قرار می گیرید.',
		'toDo' => array('آمار را باز کنید و خود را با بازیکنان دیگر مقایسه کنید'),
		'reward' => '<i class="r1"></i> '.number_format(90*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(60*SPEED).' <i class="r4"></i> '.number_format(30*SPEED).'',

		'completed' => 'علاوه بر رتبه بندی بازیکنان از نظر جمعیت، اطلاعات مفید دیگری نیز وجود دارد، اگر "10 برتر" را باز کنید، قوی ترین مهاجمان و موفق ترین غارتگران را خواهید یافت، اما نه محدود به آنها.'
	),
	'2' => array(
		'Title' => 'تغییر نام دهکده',
		'Description' => 'با انتخاب یک نام زیبا برای دهکده خود، به بقیه بازیکنان این تصور را القا می کنید که امپراتوری خود را خودتان مدیریت می کنید و از آن مراقبت می کنید که گویی بخشی از شماست.',
		'toDo' => array('نام روستا را با دوبار کلیک کردن بر روی علامت دهکده در سمت راست و بالای صفحه تغییر دهید'),
		'reward' => '100 امتیاز فرهنگی',

		'completed' => 'بسیار عالی، شما اولین قدم های خود را برای گذاشتن اثر خود در دنیای تراوین برداشته اید.'
	),
	'3' => array(
		'Title' => 'ارتقای ساختمان اصلی به سطح 3',
		'Description' => 'برای اینکه بتوانید برخی از ساختمان ها را بسازید، به سطح ساختمان اصلی بالاتری نیاز دارید. با این تفاوت که مهندسان روستا هر چه سطح ساختمان اصلی بیشتر شود می توانند کار خود را سریعتر به پایان برسانند. اما چیزی که نباید فراموش کنید: همه چیز به منابع نیاز دارد!',
		'toDo' => array('لطفا ساختمان  اصلی را به سطح 3 ارتقا دهید'),
		'reward' => '<i class="r1"></i> '.number_format(170*SPEED).' <i class="r2"></i> '.number_format(100*SPEED).' <i class="r3"></i> '.number_format(130*SPEED).' <i class="r4"></i> '.number_format(70*SPEED).'',

		'completed' => 'بسیار عالی، با ارتقای ساختمان اصلی، اکنون می توانید ساختمان های جدیدی را مشاهده کنید که می توانید بسازید.'
	),
	'4' => array(
		'Title' => 'یک سفارت بنا کنید',
		'Description' => 'دنیای خطرناکی است که در آن باید بتوانید از خود دفاع کنید. از سوی دیگر، برخی از ویژگی های عالی وجود دارد که در آن می توانید دوستی و اتحاد ایجاد کنید. یک سفارت بسازید تا بتوانید در اطراف خود اتحاد ایجاد کنید یا به آن بپیوندید.',
		'toDo' => array('یک سفارت بنا کن'),
		'reward' => '<i class="r1"></i> '.number_format(215*SPEED).' <i class="r2"></i> '.number_format(145*SPEED).' <i class="r3"></i> '.number_format(195*SPEED).' <i class="r4"></i> '.number_format(50*SPEED).'',

		'completed' => 'عالی، اکنون می توانید دعوت نامه های اتحاد ارسال شده برای شما را بپذیرید. شما می توانید این دعوت نامه ها را در سفارت (اگر واقعاً برای شما ارسال شده باشد) پیدا کنید.'
	),
	'5' => array(
		'Title' => 'باز کردن نقشه',
		'Description' => 'شما را از طریق نقشه دنیای تراوین اطراف شما فریب می دهد. اطراف همسایگان خود را بررسی کنید. به دنبال اتحادهای بالقوه و شاید مخالفان بالقوه باشید!',
		'toDo' => array('نقشه را باز کنید (دایره سوم از سمت راست)'),
		'reward' => '<i class="r1"></i> '.number_format(90*SPEED).' <i class="r2"></i> '.number_format(160*SPEED).' <i class="r3"></i> '.number_format(90*SPEED).' <i class="r4"></i> '.number_format(95*SPEED).'',

		'completed' => 'آیا اتحادها یا بازیکنان قدرتمندی در نزدیکی خود پیدا کرده اید؟ این نقشه همچنین به شما امکان می دهد واحه ها و دره هایی را بیابید که می توانید در آنها ساکن شوید و دومین دهکده خود را برای گسترش امپراتوری خود بسازید.'
	),
	'6' => array(
		'Title' => 'خواندن پیام',
		'Description' => 'من به تازگی یک پیام برای شما ارسال کردم، با توصیه های مفید زیادی. شما می توانید پیام های خوانده نشده را با وجود شماره ای که شماره آنها را در بالای پورتال پیام (نخستین دایره از سمت چپ) نشان می دهد، تشخیص دهید.',
		'toDo' => array('صفحه پیام را باز کنید و پیام مدیر وظیفه را بخوانید!'),
		'reward' => '<i class="r1"></i> '.number_format(280*SPEED).' <i class="r2"></i> '.number_format(315*SPEED).' <i class="r3"></i> '.number_format(200*SPEED).' <i class="r4"></i> '.number_format(145*SPEED).'',

		'completed' => 'از پیام ها برای برقراری ارتباط با بازیکنان دیگر استفاده کنید. این نصیحت را از من بگیر و اصالت و حسن خلقت را نشان بده، حتی اگر در جنگ باشی: به بهترین وجه بپرداز، و آن کس که میان او دشمنی داری، گویی دوست صمیمی است»'
	),
	'7' => array(
		'Title' => 'پاداش طلا',
		'Description' => 'در حین اجرای دستورات Task Manager، از طلا برای سرعت بخشیدن به ساخت و ساز استفاده می کنید. در صفحه پلاس (بالا و وسط صفحه) می‌توانید با ویژگی‌های بیشتری که طلا به شما می‌دهد آشنا شوید.',
		'toDo' => array('خودت دریابید که طلا چه مزایایی به شما می دهد'),
		'reward' => '<img src="img/x.gif" title="ذهب" class="gold"> 20',

		'completed' => 'برای اینکه شما از مزایای طلا بهره مند شوید، اکنون مقداری طلا به شما می دهم تا هر طور که می خواهید خرج کنید و از آن بهره مند شوید.'
	),
	'8' => array(
		'Title' => 'اتحاد',
		'Description' => 'جستجوی اتحادها و درخواست پیوستن به آنها. اگر هیچ ارتباطی با اعضای این اتحاد ندارید، در اتحاد بازیکنان کنار خود جستجو کنید یا با بقیه بازیکنان در سرور خود ارتباط برقرار کنید. راه حل نهایی: سفارت را به سطح 3 ببرید، اتحاد خود را ایجاد کنید و بقیه بازیکنان را به آن دعوت کنید.',
		'toDo' => array('پیوستن به یک اتحاد یا ایجاد اتحاد'),
		'reward' => '<i class="r1"></i> '.number_format(295*SPEED).' <i class="r2"></i> '.number_format(210*SPEED).' <i class="r3"></i> '.number_format(235*SPEED).' <i class="r4"></i> '.number_format(185*SPEED).'',

		'completed' => 'امیدواریم این شروع خوبی برای همه ما باشد. هرچه فعال تر باشید، قوی تر خواهید بود و اتحاد شما نیز قوی تر خواهد بود. آیا می دانید چگونه گزارش حملات خود را به دیگران منتقل کنید؟ آیا می دانید چگونه از اتحاد خود درخواست تقویت و حمایت کنید؟'
	),
	'9' => array(
		'Title' => 'ساختمان اصلی به سطح 5',
		'Description' => 'وقت آن است که ساختمان اصلی دهکده خود را توسعه دهید و افق هایی را برای ساخت ساختمان های جدید در آنجا باز کنید. لطفا همیشه به بهره وری منابع روستای خود در طول توسعه توجه کنید.',
		'toDo' => array('ساختمان اصلی را به سطح 5 ارتقا دهید'),
		'reward' => '<i class="r1"></i> '.number_format(570*SPEED).' <i class="r2"></i> '.number_format(470*SPEED).' <i class="r3"></i> '.number_format(560*SPEED).' <i class="r4"></i> '.number_format(265*SPEED).'',

		'completed' => 'عالی است، در ساختمان اصلی سطح 5 می توانید مسکن بسازید. عملکرد و سرعت مهندسان روستای شما نیز بهبود یافته است تا بتوانند این کار را سریعتر انجام دهند.'
	),
	'10' => array(
		'Title' => 'محل اقامت امپراتور',
		'Description' => 'یک اقامتگاه برای امپراتور بسازید، تا بتوانید به زودی توسعه دهید و دومین دهکده خود را بسازید. اگر مطمئن نیستید که این روستا همیشه پایتخت شما خواهد ماند، اشکالی ندارد که اینجا مسکن بسازید. اما من به شما توصیه می کنم کاخ را طوری بسازید که بتوانید به جای 6 شهرک نشین، 9 شهرک نشین را استخراج کنید و سپس پایتخت را جابه جا کنید.',
		'toDo' => array('قم بتشييد سكن أو قصر'),
		'reward' => '<i class="r1"></i> '.number_format(525*SPEED).' <i class="r2"></i> '.number_format(420*SPEED).' <i class="r3"></i> '.number_format(620*SPEED).' <i class="r4"></i> '.number_format(335*SPEED).'',

		'completed' => 'به منظور توسعه و ساخت و یا اشغال یک دهکده جدید، شما قطعا به این ساختمان نیاز خواهید داشت. شما می توانید در دو دهکده جدید زندگی کنید: فقط در سطوح 10 و 20، در حالی که در قصر سه روستا در سطوح 10، 15 و 20 وجود دارد.'
	),
	'11' => array(
		'Title' => 'امتیاز فرهنگی',
		'Description' => 'برای اینکه بتوانید دهکده های جدید را به امپراتوری خود ضمیمه کنید، به امتیاز فرهنگی نیاز دارید.<br>شما می توانید تعادل نقاط تمدن خود را مشاهده کنید: آنچه برای الحاق یک روستای جدید نیاز دارید و آنچه از آنها دارید. تحت رده "نقاط تمدنی" در مسکن و در کاخ.',
		'toDo' => array('برای دیدن امتیاز فرهنگی اقامتگاه یا قصر را باز کنید'),
		'reward' => '<i class="r1"></i> '.number_format(650*SPEED).' <i class="r2"></i> '.number_format(800*SPEED).' <i class="r3"></i> '.number_format(740*SPEED).' <i class="r4"></i> '.number_format(530*SPEED).'',

		'completed' => 'زیر تصویر قهرمان خود کلمه "Villages" را پیدا خواهید کرد. اگر روی آن کلیک کنید "نقشه روستا" با شما باز می شود. شامل نمای کلی از روستاها و منابع شما خواهد بود. سربازان و نقاط تمدن در آنها (ویژگی مختص تراوین پلاس).'
	),
	'12' => array(
		'Title' => 'انبار سظح 7',
		'Description' => 'برای اینکه بتوانید دهکده های جدید را به امپراتوری خود اضافه کنید، به امتیاز نیاز دارید. ذخیره منابع خام را در دهکده خود ایجاد کنید تا برای آموزش مهاجران و اسکان آنها آماده شوید. به زودی ظرفیت فعلی انبار برای برآورده کردن نیازهای توسعه کافی نخواهد بود، بنابراین خود را از هم اکنون آماده کنید.',
		'toDo' => array('ابار را به سطح 7 ارتقا دهید'),
		'reward' => '<i class="r1"></i> '.number_format(2650*SPEED).' <i class="r2"></i> '.number_format(2150*SPEED).' <i class="r3"></i> '.number_format(1810*SPEED).' <i class="r4"></i> '.number_format(1320*SPEED).'',

		'completed' => 'عالی است، ظرفیت فروشگاه های شما در مسیر توسعه دهکده خود مدتی برای شما دوام خواهد آورد. فراموش نکنید: منابع یک کالای ارزشمند در بازی هستند، همیشه از آنها محافظت کنید یا آنها را از چشمان مخالفان پنهان کنید!'
	),
	// Need to code 
	/*'13' => array(
		'Title' => 'تقارير القري المجاورة',
		'Description' => 'تقارير القري المحيطة تفيدك في معرفة أهم الأحداث والتغيرات الحاصلة على عضويات جيرانك.',
		'toDo' => array('إضغط على تصنيف "التقارير" وهي خامس دائرة من اليمين، وهناك إضغط على قائمة "القري المجاورة" لتقرأ تقاريرها'),
		'reward' => '<i class="r1"></i> '.number_format(800*SPEED).' <i class="r2"></i> '.number_format(700*SPEED).' <i class="r3"></i> '.number_format(750*SPEED).' <i class="r4"></i> '.number_format(600*SPEED).'',

		'completed' => 'تفاصيل عديدة: من تغيير الإسم إلى تقارير النهب، الإحتلالات ... كل ذلك يمكنك إيجاده في تقارير القري المجاورة. أمل أنك استمتعت واستفدت من قرائتها!'
	),*/
	'13' => array(
		'Title' => 'اقامتگاه یا قصر سطح 10',
		'Description' => 'شما می توانید مهاجران را در یک اقامتگاه یا قصر آموزش دهید. وارد اقامتگاه/کاخ شوید، منوی "آموزش" را انتخاب کنید و در آنجا پیامی خواهید دید که به شما می گوید برای آموزش مهاجران به چه سطحی از ساخت و ساز نیاز دارید.',
		'toDo' => array('محل اقامت یا قصر خود را به سطح 10 ارتقا دهید'),
		'reward' => '500 امتیاز فرهنگی ',

		'completed' => 'از هر دهکده می توانید به دو تا سه روستا در حسیما که می سازید گسترش دهید. اقامتگاه یا قصر. تنها چیزی که اکنون برای به دست آوردن دهکده دوم خود نیاز دارید: سه مهاجر و تعداد زیادی امتیاز فرهنگی!'
	),
	'14' => array(
		'Title' => 'تربیت 3 مهاجر',
		'Description' => 'برای ایجاد یک دهکده جدید، سه مهاجر باید با هم حرکت کنند. بنابراین شما باید از آنها در برابر حملات دشمن در زمانی که در دهکده هستند محافظت کنید. و آنها را در اسرع وقت به محض فراهم شدن شرایط برای آن ارسال کنید.',
		'toDo' => array('آموزش سه مهاجرن'),
		'reward' => '<i class="r1"></i> '.number_format(1050*SPEED).' <i class="r2"></i> '.number_format(800*SPEED).' <i class="r3"></i> '.number_format(900*SPEED).' <i class="r4"></i> '.number_format(750*SPEED).'',

		'completed' => 'خوب است، مهاجران منابعی را با خود حمل می کنند تا بتوانند سنگ بنای روستای جدید را بگذارند. سعی کنید آن را برای آنها فراهم کنید!'
	),
	'15' => array(
		'Title' => 'بنا کردن دهکده جدید',
		'Description' => 'نقشه را باز کنید و مکان مناسبی را برای ایجاد دومین دهکده خود جستجو کنید.<br>گزینه های پیش روی شما بسیارند. آیا آن را در کنار روستای اصلی خود می خواهید یا از نظر نوع خاصی از منابع غنی است (مثلاً یک روستای گندم)، یا می خواهید آن را مشرف به واحه های زیادی باشد ... یا همه این مشخصات را با هم ترکیب می کند؟ شما باید جستجو کنید تا درخواست خود را پیدا کنید!',
		'toDo' => array('با ارسال سه شهرک نشین دهکده جدیدی پیدا کرد'),
		'reward' => '48 ساعت حساب پلاس',

		'completed' => 'کار عالی است، من دو روز دیگر در تراوین پلاس به شما فرصت می دهم - با این دو روز می توانید روی پای خود بایستید.'
	),
);

$lang['quests']['achievements'] = array(
	'1' => array(
		'Title' => 'پایان دادن به یک ماجراجویی',
		'Description' => 'قهرمان خود را به یک ماجراجویی بفرستید. این ماموریت به محض اینکه قهرمان شما به محل ماجراجویی خود برسد، انجام شده است، حتی اگر نتواند به دهکده بازگردد. برای فرستادن قهرمان به ماجراجویی کافیست روی نماد نشان داده شده در تصویر کلیک کنید. امتیازاتی که می توانید در این کار کسب کنید، 1 بار در روز است.',
		'toDo' => 'شما می توانید این کار را 1 بار در روز انجام دهید',
		'questIn' => array('questGive' => 5, 'سخت' => 'متوسط', 'needReq' => 'ماجراجویی موجود')
	),
	'2' => array(
		'Title' => 'یک آبادی ناشناس را غارت کنید',
		'Description' => 'نیروهای خود را برای غارت یک واحه اشغال نشده بفرستید. این ماموریت پس از رسیدن نیروهای شما به واحه انجام شده در نظر گرفته می شود، صرف نظر از اینکه از این ماموریت جان سالم به در برده و به دهکده باز می گردند یا خیر. استفاده از قفس در این ماموریت برای جلوگیری از درگیری و از دست دادن نیروها باعث می شود که هیچ امتیازی در این ماموریت به شما تعلق نگیرد. می توانید قبل از اعزام نیرو به نبرد از شبیه ساز نبرد استفاده کنید تا نتیجه نبرد را تقریبی کنید. شما می توانید Battle Simulator را در نقطه تجمع در مرکز دهکده پیدا کنید. امتیازاتی که می توانید در این کار کسب کنید 3 بار در روز است.',
		'toDo' => 'شما می توانید این کار را 3 بار در روز انجام دهید',
		'questIn' => array('questGive' => 3, 'Hard' => 'سخت', 'needReq' => 'بعض القوات')
	),
	'3' => array(
		'Title' => 'غارت/حمله به روستای ناتار',
		'Description' => 'نیروهای خود را برای غارت/حمله به روستای نتاریا بفرستید. این ماموریت انجام شده تلقی می شود، هنگامی که نیروهای شما به دهکده رسیدند، صرف نظر از اینکه از این ماموریت جان سالم به در برده و به دهکده شما باز می گردند یا نه، هرگز اقدام به غارت/حمله به Wonder of the World Village یا پایتخت ناتار نکنید. برای حمله به روستای شگفت‌انگیز جهان، باید حداقل 100000 جنگجو را جمع آوری کنید! امتیازاتی که می توانید در این کار کسب کنید 3 بار در روز است.',
		'toDo' => 'شما می توانید این کار را 3 بار در روز انجام دهید',
		'questIn' => array('questGive' => 9, 'Hard' => 'چالش', 'needReq' => 'بعض القوات')
	),
	'4' => array(
		'Title' => 'برنده حراج',
		'Description' => 'در یک حراج شرکت کنید و با خرید کالای مورد نظر خود دو بار برنده شوید، بنابراین امتیاز بیشتری جمع آوری کنید که می توانید به موجودی روزانه خود اضافه کنید! امتیازها فقط زمانی تعلق می‌گیرند که بتوانید در حراج برنده شوید و کالا را خریداری کنید. امتیازاتی که می‌توانید در این کار کسب کنید 1 بار در روز است.',
		'toDo' => 'این کار 5+ امتیاز دارد',
		'questIn' => array('questGive' => 9, 'Hard' => 'تحدي', 'needReq' => 'ماجراجویی را تکمیل کنید10')
	),
	'5' => array(
		'Title' => 'طلا به دست آورید یا خرج کنید',
		'Description' => 'برای تکمیل این ماموریت طلا به دست آورید یا خرج کنید. شما می توانید هر روز 3 ماموریت را انجام دهید.',
		'toDo' => 'این کار ارزش +2 امتیاز دارد',
		'questIn' => array('questGive' => 6, 'Hard' => 'متوسط', 'needReq' => 'طلا')
	),
	'6' => array(
		'Title' => 'توسعه یک ساختمان',
		'Description' => 'ساختمان را توسعه دهید یا بسازید، می توانید هر روز 3 ماموریت را انجام دهید<br><br>این ماموریت را می توان 3 بار در روز انجام داد.',
		'toDo' => 'این کار ارزش +4 امتیاز دارد',
		'questIn' => array('questGive' => 12, 'Hard' => 'متوسط', 'needReq' => 'منابع')
	),
	'7' => array(
		'Title' => 'توسعه یک زمینه منبع',
		'Description' => 'زمینه منبع را توسعه دهید یا بسازید، می توانید هر روز 3 ماموریت را انجام دهید<br><br>این ماموریت را می توان 3 بار در روز تکمیل کرد.',
		'toDo' => 'این کار 5+ امتیاز دارد',
		'questIn' => array('questGive' => 15, 'Hard' => 'متوسط', 'needReq' => 'منابع')
	),
	'8' => array(
		'Title' => 'آموزش 20 واحد پیاده',
		'Description' => 'واحد پیاده نظام را به طور همزمان آموزش دهید، می توانید هر روز 3 ماموریت را انجام دهید.',
		'toDo' => 'این کار ارزش +4 امتیاز دارد',
		'questIn' => array('questGive' => 12, 'Hard' => 'متوسط', 'needReq' => 'امتیاز + منابع')
	),
	'9' => array(
		'Title' => 'آموزش 20 واحد سواره نظام',
		'Description' => 'واحد سواره نظام را به طور همزمان آموزش دهید، می توانید هر روز 3 ماموریت را انجام دهید.',
		'toDo' => 'این کار ارزش +4 امتیاز دارد',
		'questIn' => array('questGive' => 12, 'Hard' => 'متوسط', 'needReq' => 'اصطبل + منابع')
	),
	'10' => array(
		'Title' => 'یک جشن بزرگ یا یک جشن کوچک برگزار کنید',
		'Description' => 'یک جشن بزرگ یا یک جشن کوچک در شهرداری برگزار کنید. به محض فعال کردن هر جشنی در دهکده خود، امتیازها محاسبه می شود. جشن هایی که در حال حاضر در روستا برگزار می شود برای شما به حساب نمی آید و هیچ امتیازی به شما نمی دهد. امتیازاتی که می توانید در این ماموریت کسب کنید 3 بار در روز است<br>امتیازها بلافاصله پس از شروع جشن به شما تعلق می گیرد.',
		'toDo' => 'این کار 5+ امتیاز دارد',
		'questIn' => array('questGive' => 15, 'Hard' => 'سخت', 'needReq' => 'شهرداری + منابع')
	),
);

$lang['quests']['monitor'] = array(
	'1' => array ('شروع آموزش'),
'2' => array ('بستن کار', 'نمایش نکات', 'غیرفعال کردن نکات'),
'3' => array ('باز کردن چوب بری', 'ساخت چوب بری'),
'4' => array ('ساختمان باز', 'چوب بری 2'),
'5' => array ('منطقه باز گندم','گندم بساز '),
'6' => array ('روی تصویر قهرمان کلیک کنید','تغییر تولید'),
'7' => array ('وارد مرکز دهکده'),
'8' => array('روی فضای خالی کلیک کنید','ساخت مخزن خام'),
'9' => array ('روی محل ساختمان نقطه مونتاژ کلیک کنید', 'نقطه مونتاژ برای سطح 1 بسازید'),
'10' => array ('پایان ساخت'),
'11' => array ('ماجراهای قهرمان'),
'12' => array ('فهرست گزارش', 'گزارش ماجراجویی خواندن'),
'13' => array ('مخزن قهرمان','سلامتی قهرمان'),
'14' => array ('راهنمای UI'),
'15' => array ('پایان آموزش')
);


$lang['quests']['monitor']['battle'] = array(
'01' => 'بحث بعدی',
'02' => 'ساخت مخفی‌گاه',
'03' => 'ساخت کارگاه تجهیزات',
'04' => 'تمام ۵ بحث',
'05' => 'آموزش نیروها',
'06' => 'ساخت سور',
'07' => 'هجوم یکبار',
'08' => '۱۰ بحث',
'09' => 'مزایده',
'10' => 'بهینه‌سازی کارگاه تجهیزات',
'11' => 'ساخت دانشگاه',
'12' => 'جستجو نیروها',
'13' => 'ساخت افران فولادی',
'14' => 'بهینه‌سازی نیروها',
);

$lang['quests']['monitor']['economy'] = array(
'01' => 'کوه آهن',
'02' => 'منابع اضافی',
'03' => 'انبار غذا',
'04' => 'هر بار یک بار',
'05' => 'برای سطح ۲',
'06' => 'ساخت بازار',
'07' => 'تجارت',
'08' => 'همه چیز برای سطح ۲',
'09' => 'آنبار سطح ۳',
'10' => 'آنبار دانه سطح ۳',
'11' => 'ساخت چرخه‌ها',
'12' => 'همه چیز برای سطح ۵',
);

$lang['quests']['monitor']['world'] = array(
	'01' => 'نمایش آمار',
'02' => 'تغییر نام دهکده',
'03' => 'ساختمان اصلی سطح ۳',
'04' => 'ساخت سفارتخانه',
'05' => 'باز کردن نقشه',
'06' => 'خواندن پیام',
'07' => 'تقسیم طلا',
'08' => 'اتحاد',
'09' => 'ساختمان اصلی سطح ۵',
'10' => 'اقامتگاه و قصر',
'11' => 'امتیاز فرهنگی',
'12' => 'آغازگاه منابع سطح ۷',
//'13' => 'گزارش روستاهای مجاور',
'14' => 'آموزش 3 مهاجر',
'15' => 'دهکده جدید',
);

$lang['quests']['Main'] = array(
	'QuestsList' => 'لیست وظایف',
	'Quest' => 'وظیفه',
	'Reward' => 'جایزه شما عزیزم',
);

$lang['main']['options'] = array(
	'1' => 'بازی',
	'2' => 'تنظیمات',
	'3' => 'زبان',
	'4' => 'انگلیسی',
	'5' => 'فارسی',
	'6' => 'ذخیره',
);

$lang['statistics'] = array(
	'general01' => 'پیشرفت دنیای کنونی',
	'general02' => '',
	'general03' => '',
	'general04' => '',
	'general05' => '',
	'general06' => '',
	'general07' => '',
	'general08' => '',
	'general09' => '',
	'general10' => '',
	
);

$lang['links'] = array(
	'Farms' => 'لیست فارم ها',
	'Support' => 'تماس با پشتیبانی',
);

$lang['Report'] = array(
	'Silver' => 'نقره',
);



$lang['Msgs'] = array(
	'wMSGT' => 'پیام از شکارچیان جنایتکار',
'wMSGI' => 'جایزه ای بزرگ در انتظار شماست. این پیام به صورت خودکار تولید شده و به آن پاسخ داده نمی شود.',
'Arts' => '<div style="width:450px; height:830px; padding: 95px 60px 60px 25px; background: url(img/Natars_Banner_gross.jpg) no-repeat;">
<center>
<h1>هنرها</h1>
<p style="font-size:85%; text-align:justify; width:400px">
هنرها نماینده ارزش و سودمندی هستند، زمان حاضر برای تأمین هنرهای مفید آمده است، عجله کنید تا هنری را قبل از دزدیده شدن دریافت کنید
<br><br><img src="img/msg.jpg" alt="Artefacts" width="400" height="200" style="float: right">
<br><br>
هنرهایی که قیمت و فواید زیادی دارند، هر هنری هم یک تاثیر ویژه دارد، بازیکنان تمایل دارند هنرهای قیمتی و گران قیمتی را دریافت کنند مانند آموزش نیروها با سرعت بیشتر و مصرف غذا، دیگران نیز تاثیرات دیگری را ترجیح می دهند، شما چه می خواهید؟ عجله کنید و هنری را بدست آورید، فقط یادتان باشد که داشتن هنری کافی نیست، شما نیز به حمایت از بندبازان خود نیاز دارید تا آن را دفاع کنید، پس برای جنگ آماده شوید!             </p><br><br>
<span style="font-size:60%; color: #666;">(نوشته شده توسط: شکارچیان)</span>
</center>
</div>',

'WW' => 'روزهایی که تعداد و شمارش ندارند از اولین جنگها در دیوارهای ناتار بگذشت، جنگهایی که همه چیز را به نابودی سپرده اند. توجه داشته باشید، بدهی و عفونت از این جهان آغاز شده است! برای آینده آماده شوید!
<br><br>
اکنون داستانها و افسانه‌ها و دیدنیهای جالبی از این دنیا ظاهر شده اند. با جنگهایی سردرگم که از هیچ کس بازنشسته نمی‌گذرد، قدرتهای بزرگ و بی رحم و امیدهای مردم را می‌سوزاند. رقابت آغاز شده است، شمشیر بر علیه شمشیر، و این جنگ شماست، شما می‌توانید در تاریخ اسم خود را ثبت کنید و افسانه ای شوید...
<br><br>
<span style="font-size:60%; color: #666;">(نوشته شده توسط: شکارچیان)</span>
<br><br>
<br><br>
<b>موارد نیاز</b><i>: برای سرقت یک طرح بنا شرایط زیر رعایت شود</i>
<li>ارسال حمله کامل به روستای طرح</li>
<li>حمله به روستای طرح موفق شود</li>
<li>خرابی در انبار</li>
<li>قهرمان حمله مشارکت داشته باشد</li>
<li>سطح انبار باید 10 باشد</li>
<br><br>
سپس، اگر حمله موفق باشد، باید یک تحفه را دریافت کنید و یک هدف از انبار (خزنه) انتخاب کنید
<br><br>
برای به دست آوردن یک تحفه وقتی هجوم به موفقیت به پایان می‌رسد و تحفه دزدیده می‌شود، باید یک هدف از خزنه (مخازن) انتخاب کنید.
<br><br>
برای بنا، صاحب دیوار باید حداقل یک طرح بنا داشته باشد تا به سطح ۴۹ و یک همتیم دیگر از اتحادیه باید حداقل یک طرح بنا داشته باشد تا بتوان روند بنا را تا سطح ۱۰۰ ادامه داد. ',
	);

$lang['Footer'] = array(
	'Homepage' => 'صفحه اصلی',
	'Forum' => 'انجمن',
	'Links' => 'پیوندها',
	'FAQ' => 'راهنما، پاسخ ها',
	'Terms' => 'شرایط',
	'Imprint' => 'حقوق',
);

$lang['admin'] = array();

$lang['Hero'] = array(
'status01' => 'قهرمان در حال ماجراجویی است',
'status02' => 'قهرمان در راه بازگشت است',
'status03' => 'قهرمان مرده است',
'status04' => 'قهرمان در روستاها در حال دفاع است',
'status05' => 'قهرمان در حال حاضر در دهکده است',

'adv00' => 'ماموریت جدید',
'adv01' => 'زمان ماموریت',
'adv02' => 'دسترسی در',
'adv03' => 'بازگشت در',
'adv04' => 'ساعت',
'adv05' => 'آغاز ماجراجویی',
'adv06' => 'بازگشت',

'Speed' => 'سرعت',
'Attributes' => 'خصوصیات',
'saveChanges' => 'لطفاً تغییرات را ذخیره کنید',
'FStrength' => 'ظرفیت جنگی',

'FHero' => 'از قهرمان',

	'OW01' => 'زمان باقی مانده',
	'OW02' => 'در',
	'OW03' => 'می‌توانید پرداخت اقدامات ماموریت را مشاهده کنید',
	'OW04' => 'نقطه جمع شدن',

'Revive01' => 'قهرمان هوشیار',
'Revive02' => 'بازیابی می شود در',
'Revive03' => 'برای تغییر قهرمان هوشیار و یا بازیابی در قریه دیگر',
'Revive04' => 'هزینه بازیابی',
'Revive05' => 'قهرمان در در',
'Revive06' => 'زمان باقی مانده',
);


$lang['Daily'] = array(
'01' => 'پایان ماموریت',
'02' => 'سیزده ی غیر مالک',
'03' => 'سیزده/تهاجم روستای ساکن',
'04' => 'فرستادن ارسالی',
'05' => 'به دست آوردن و یا صرف کردن طلا','06' => 'ارتقای ساختمان','07' => 'ارتقای معدن منابع',
'08' => 'آموزش 20 تا از نوع پیاده',
'09' => 'آموزش 20 تا از نوع سوار',
'10' => 'حمل یک جشن بزرگ یا کوچک انجام دهید',
	
'Close' => 'بستن',
'Overview' => 'پیش نمایش',
'PG' => 'امتیازات قابل اعطا در این ماموریت:',
'Difficulty' => 'سختی',
'Requirement' => 'مورد نیاز',
'CRewards' => 'جمع جوایز',

	'Congrats01' => 'تبریک! امتیاز کافی برای دریافت جایزه جمع آوری کرده اید.',
'Congrats02' => 'چون جمع کردی',
'Congrats03' => 'امتیاز/امتیاز امروز، شما موارد زیر را دریافت می کنید',
'Congrats04' => 'پاداش روزانه به طور تصادفی از این گزینه ها انتخاب می شود',
'Congrats05' => 'در مجموعه',
'Congrats06' => 'امتیاز، می توانید یکی از جوایز زیر را دریافت کنید',

);

define('markASRead', 'به عنوان خوانده شده علامت بزن');
define('rMessage', 'پیام بفرست');
define('Ignored', 'پلیرهای مسدود شده');
define('Ignored01', 'برای نادیده گرفتن پیام‌های از یک پلیر مشخص، به فایل شخصی آن‌ها بروید و روی دکمه "تجاهل" کلیک کنید!');
define('Ignored02', 'تجاهل لاعب.');
define('Ignored03', 'پلیر تجاهل می شود.');
define('Ignored04', 'تجاهل این پلیر را خاتمه بدهید.');
define('Ignored05', 'رسیدن پیام از لاعب موفقیت آمیز بود.');
define("herostatus9", "قهرمان در جاده است");
define("herostatus100", "قهرمان در دهکده");
define("herostatus101", "قهرمان مرده است");
define("herostatus102", "قهرمان اسیر می شود");
define("herostatus103", "قهرمان دفاع می کند");


$lang['Profile'] = array(
	'00' => 'ویرایش نمایه',
	'01' => 'جزئیات',
	'02' => 'کریسمس',
	'03' => '[جنسیت]',
	'04' => 'بدون داده',
	'05' => 'جنگجو',
	'06' => 'مبارزه',
);

$lang['Alliance'] = array(
	'00' => 'شما عضو هیچ اتحادی نیستید',
);

$lang['Logout'] = array(
	'01' => 'بازگشت به بازی',
'02' => 'نام یا ایمیل بازیکن',
'03' => 'رمز عبور',
'04' => 'ورود به سیستم',
);

