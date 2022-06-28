<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function clearRoute()
    {
        \Artisan::call('route:clear');

        return "OK";
    }

    public function index()
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz';

        $product = DB::table('products')->inRandomOrder()->take(7)->get();
        $product1 = DB::table('products')->orderBy('id', 'DESC')->take(5)->get();
        $product2 = DB::table('products')->inRandomOrder()->take(4)->get();
        $product3 = DB::table('products')->inRandomOrder()->take(3)->get();
        $partner = DB::table('partners')->get();
        $category = DB::table('categories')->get();
        $banner = DB::table('banners')->orderBy('id', 'DESC')->take(5)->get();

        if ($lang == 'ru') {
            $name = 'name_ru';
            $bar = array(
                'c' => 'Каталог оборудования',
            );

            $info = array(
                'info1' => 'ВСЕ ТОВАРЫ СЕРТИФИЦИРОВАНЫ',
                'info2' => 'НАШИ ОФИСЫ ДОСТУПНЫ В КИТАЕ И УЗБЕКИСТАНЕ',
                'info3' => '1 ГОД НА ГАРАНТИЮ КАЧЕСТВА',
            );

            $site = array(
                'ish_chiq' => 'ПРОИЗВОДСТВЕННЫЕ ЛИНИИ',
                'barcha' => 'СМОТРЕТЬ ВСЕ',
                'batafsil' => 'Подробнее',
                'songi' => 'НОВЕЙШЕЕ ОБОРУДОВАНИЕ',
                'boglanish' => 'Связаться с нами'
            );

            $contact = array (
                'shahar' => 'город Наманган',
                'kocha' => 'улица Туракурган, 172',
                'follow' => 'Присоединяйтесь к нам',
                'hamkor' => 'Работать с нами',
                'name' => 'Ваше имя',
                'phone' => 'Телефонный номер',
                'subject' => 'Тема',
                'message' => 'Сообщение',
                'send' => 'Отправлять',
            );
        }

        elseif($lang == 'en')
        {
            $name = 'name_en';
            $bar = array(
                'c' => 'Equipment catalog',
                
            );

            $info = array(
                'info1' => 'ALL GOODS ARE CERTIFIED',
                'info2' => 'OUR OFFICES ARE AVAILABLE IN CHINA AND UZBEKISTAN',
                'info3' => '1 YEAR FOR QUALITY GUARANTEE',
            );

            $site = array(
                'ish_chiq' => 'PRODUCTION LINES',
                'barcha' => 'SEE EVERYTHING',
                'batafsil' => 'Read more',
                'songi' => 'LATEST EQUIPMENT',
                'boglanish' => 'Contact us'
            );

            $contact = array (
                'shahar' => 'Namangan city',
                'kocha' => 'Turakurgan street, 172',
                'follow' => 'Join us',
                'hamkor' => 'Work with us',
                'name' => 'Your name',
                'phone' => 'Phone number',
                'subject' => 'Subject',
                'message' => 'Message',
                'send' => 'Send',
            );
        }

        else
        {
            $name = 'name_uz';
            $bar = array(
                'c' => 'Uskunalar katalogi',
                
            );

            $info = array(
                'info1' => 'BARCHA TOVARLAR SERTIFIKATLANGAN',
                'info2' => 'OFISLARIMIZ XITOYDA VA O`ZBEKISTONDA MAVJUD',
                'info3' => 'SIFATNI KAFOLATLASH UCHUN 1 YIL',
            );

            $site = array(
                'ish_chiq' => 'ISHLAB CHIQARISH LINIYALARI',
                'barcha' => 'BARCHASINI KO`RISH',
                'batafsil' => 'Batafsil',
                'songi' => 'SO`NGI USKUNALAR',
                'boglanish' => 'Biz bilan bog`laning'
            );

            $contact = array (
                'shahar' => 'Namangan shahri',
                'kocha' => 'To`raqo`rg`on ko`cha, 172-uy',
                'follow' => 'Bizga qo`shiling',
                'hamkor' => 'Biz bilan hamkorlik qiling',
                'name' => 'Ismingiz',
                'phone' => 'Telefon raqam',
                'subject' => 'Mavzu',
                'message' => 'Xabar',
                'send' => 'Yuborish',
            );
        }

        return view('welcome', compact('bar', 'info', 'site', 'contact', 'product1', 'product', 'product2', 'name', 'partner', 'product3', 'category', 'banner'));
    }

    public function category($id)
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz';

        $category = DB::table('categories')->get();

        $product = DB::table('products')->where('category', $id)->orderBy('id', 'DESC')->paginate(8);


        if ($lang == 'ru') {
            $name = 'name_ru';
            $batafsil = 'Подробнее';
            $bar = array(
                'c' => 'Каталог оборудования',
            );
        }

        elseif($lang == 'en')
        {
            $name = 'name_en';
            $batafsil = 'Read more';

            $bar = array(
                'c' => 'Equipment catalog',
            );
        }

        else
        {
            $name = 'name_uz';
            $batafsil = 'Batafsil';
            $bar = array(
                'c' => 'Uskunalar katalogi',
            );
        }

        return view('front.category', compact('product', 'name', 'bar', 'batafsil', 'category'));
    }

    public function about()
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz';

        $about = DB::table('abouts')->take(1)->get();


        if ($lang == 'ru') {
            $site = array(
                'home' => 'Главная',
                'about' => 'Biz haqimizda',
                'welcome' => 'Welcome To CHM.UZ',
                'our' => 'Our Company',
                'team' => 'Our Team',
                'testimonial' => 'Testimonial',
            );
            $welcome = 'welcome_ru';
            $company = 'company_ru';
            $team = 'team_ru';
            $testimonial = 'testimonial_ru';
        }

        elseif ($lang == 'en') {
            $site = array(
                'home' => 'Home',
                'about' => 'about',
                'welcome' => 'Welcome To CHM.UZ',
                'our' => 'Our Company',
                'team' => 'Our Team',
                'testimonial' => 'Testimonial',
            );
            $welcome = 'welcome_en';
            $company = 'company_en';
            $team = 'team_en';
            $testimonial = 'testimonial_en';
        }

        else
        {
            $site = array(
                'home' => 'Bosh sahifa',
                'about' => 'Biz haqimizda',
                'welcome' => 'CHM.UZ ga hush kelibsiz',
                'our' => 'Bizning Kompaniya',
                'team' => 'Bizning jamoa',
                'testimonial' => 'Testimonial',
            );

            $welcome = 'welcome_uz';
            $company = 'company_uz';
            $team = 'team_uz';
            $testimonial = 'testimonial_uz';
        }

        

        return view('front.about', compact('about', 'welcome', 'company', 'team', 'testimonial', 'site'));
    }

    public function contact()
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz';

        if ($lang == 'ru') {

            $site = array(
                's1' => 'Главная',
                's2' => 'Контакт ',
                's3' => 'Адрес',
                's4' => 'г. Наманган, Туракурган
                                    улица, дом 172
                                    Направление: Перед кафе «Азбука».',
                's5' => 'Присоединяйтесь к нам',
                's6' => 'Отправить сообщение',
                's7' => 'Ваше имя',
                's8' => 'Твой номер',
                's9' => 'Тема',
                's10' => 'Сообщение',
                's11' => 'Отправлять'
            );
        }

        elseif ($lang == 'en') {

            $site = array(
                's1' => 'Home',
                's2' => 'Contact ',
                's3' => 'Адрес',
                's4' => 'Namangan city, Turakurgan
                                    street, house 172
                                    Direction: In front of the Azbuka cafe.',
                's5' => 'Join us',
                's6' => 'Send a message',
                's7' => 'Your name',
                's8' => 'Your number',
                's9' => 'Subject',
                's10' => 'Message',
                's11' => 'Send'
            );
        }

        else
        {
            $site = array(
                's1' => 'Bosh sahifa',
                's2' => 'Aloqa',
                's3' => 'Manzil',
                's4' => 'Namangan shaxar, To`raqo`rg`on
                                    ko`cha, 172-uy
                                    Mo`ljal : Azbuka kafesi ruparasida',
                's5' => 'Bizga qo`shiling',
                's6' => 'Xabar yuboish',
                's7' => 'Ismingiz',
                's8' => 'Raqamingiz',
                's9' => 'Mavzu',
                's10' => 'Xabar',
                's11' => 'Yuborish'
            );
        }

        return view('front.contact', compact('site'));
    }

    public function news()
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz';

        $new = DB::table('blogs')->orderBy('id', 'DESC')->paginate(3);
        $category = DB::table('categories')->get();

        if ($lang == 'ru') {
            $name = 'name_ru';
            $title = 'title_ru';
            $batafsil = 'Подробнее';

            $bar = array(
                'c' => 'Каталог оборудования',
            );
        }

        elseif ($lang == 'en') {
            $name = 'name_en';
            $title = 'title_en';
            $batafsil = 'More';

            $bar = array(
                'c' => 'Equipment catalog',
                
            );
        }

        else
        {
            $name = 'name_uz';
            $title = 'title_uz';
            $batafsil = 'Batafsil';

            $bar = array(
                'c' => 'Uskunalar katalogi',
                
            );
        }

        return view('front.news', compact('bar', 'new', 'name', 'title', 'batafsil', 'category'));
    }

    public function new($id)
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz';

        $new = DB::table('blogs')->where('id', $id)->get();
        $category = DB::table('categories')->get();

        if ($lang == 'ru') {
            $name = 'name_ru';
            $title = 'title_ru';
            $info = 'info_ru';
            $batafsil = 'Подробнее';

            $bar = array(
                'c' => 'Каталог оборудования',
                
            );
        }

        elseif ($lang == 'en') {
            $name = 'name_en';
            $title = 'title_en';
            $info = 'info_en';
            $batafsil = 'More';

            $bar = array(
                'c' => 'Equipment catalog',
                
            );
        }

        else
        {
            $name = 'name_uz';
            $title = 'title_uz';
            $info = 'info_uz';
            $batafsil = 'Batafsil';

            $bar = array(
                'c' => 'Uskunalar katalogi',
                
            );
        }

        return view('front.new', compact('new', 'name', 'title', 'info', 'bar', 'category'));
    }

    public function single($id)
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz';

        $product = DB::table('products')->where('id', $id)->get();

        $pr = DB::table('products')->inRandomOrder()->take(10)->get();

        if ($lang == 'ru') {

            $site = array(
                's1' => 'Главная ',
                's2' => 'Товар',
                's3' => 'Основная информация',
                's4' => 'Компания',
                's5' => 'Модель',
                's6' => 'Самовывоз из пункта продаж',
                's7' => 'Доставка бесплатная (Ташкент)',
                's8' => 'Под заказ',
                's9' => 'Заказать',
                's10' => 'Параметры',
                's11' => 'Описание',
                's12' => 'Доставка',
                's13' => 'видео',
                's14' => 'Оплата',
                's15' => 'Гарантия',
                's16' => 'Дополнительная информация',
                's17' => 'Подробнее'
            );

            $modal = array(
                'buyurtma' => 'Заказ',
                'name' => 'Ваше имя',
                'phone' => 'Ваш номер телефона',
                'count' => 'Количество',
                'send' => 'Отправлять'
            );

            $name = 'name_ru';
            $title = 'title_ru';
            $parameter = 'parameter_ru';
            $info = 'info_ru';
            $description = 'description_ru';
            $delivery = 'delivery_ru';
            $payment = 'payment_ru';
            $warranty = 'warranty_ru';
        }

        elseif ($lang == 'en') {

            $site = array(
                's1' => 'Home ',
                's2' => 'Product',
                's3' => 'Inforamtions',
                's4' => 'Company',
                's5' => 'Model',
                's6' => 'Pickup from point of sale',
                's7' => 'Delivery is free (Tashkent)',
                's8' => 'On order',
                's9' => 'Order',
                's10' => 'Parameters',
                's11' => 'Description',
                's12' => 'Delivery',
                's13' => 'Video',
                's14' => 'Payment',
                's15' => 'Warranty',
                's16' => 'Additional Information',
                's17' => 'More'
            );

            $modal = array(
                'buyurtma' => 'Order',
                'name' => 'Your name',
                'phone' => 'Your phone number',
                'count' => 'Quantity',
                'send' => 'Send'
            );

            $name = 'name_en';
            $title = 'title_en';
            $parameter = 'parameter_en';
            $info = 'info_en';
            $description = 'description_en';
            $delivery = 'delivery_en';
            $payment = 'payment_en';
            $warranty = 'warranty_en';
        }

        else
        {
            $site = array(
                's1' => 'Bosh sahifa',
                's2' => 'Mahsulot',
                's3' => 'Asosiy ma`lumotlar',
                's4' => 'Kompaniya',
                's5' => 'Model',
                's6' => 'Sotish joyidan olib ketish',
                's7' => 'Yetkazib berish bepul (Toshkent)',
                's8' => 'Buyurtma bering',
                's9' => 'Buyurtma qilish',
                's10' => 'Parametrlar',
                's11' => 'Tavsif',
                's12' => 'Yetkazib berish',
                's13' => 'Video',
                's14' => 'To`lov',
                's15' => 'Kafolat',
                's16' => 'Qo`shimcha ma`lumot',
                's17' => 'Batafsil'
            );

            $modal = array(
                'buyurtma' => 'Buyurtma berish',
                'name' => 'Ismingiz',
                'phone' => 'Telefon raqamingiz',
                'count' => 'Miqdori',
                'send' => 'Yuborish'
            );

            
            $name = 'name_uz';
            $title = 'title_uz';
            $parameter = 'parameter_uz';
            $info = 'info_uz';
            $description = 'description_uz';
            $delivery = 'delivery_uz';
            $payment = 'payment_uz';
            $warranty = 'warranty_uz';
            
        }

        return view('front.single', compact('site', 'product', 'name', 'title', 'parameter', 'info', 'description', 'delivery', 'payment', 'warranty', 'pr', 'modal'));
    }

    public function videos()
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz';

        $product = DB::table('products')->take(8)->get();
        $category = DB::table('categories')->get();

        if ($lang == 'ru') {
            $bar = array(
                'c' => 'Каталог оборудования',
            );

            $name = 'name_ru';
        }

        elseif ($lang == 'en') {
            $bar = array(
                'c' => 'Equipment catalog',
                
            );

            $name = 'name_en';
        }

        else
        {
            $bar = array(
                'c' => 'Uskunalar katalogi',
                
            );

            $name = 'name_uz'; 
        }

        return view('front.videos', compact('bar', 'product', 'category', 'name'));
    }

    public function send_order(Request $request)
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz'; 

        DB::table('orders')
             ->insert(array(
                 'name' => $request->name,
                 'p_name' => $request->p_name,
                 'phone' => $request->phone,
                 'count' => $request->count,
         ));

        if ($lang == 'ru')
            return back()->with('success', 'Ваш заказ был отправлен');

        elseif ($lang == 'en')
            return back()->with('success', 'Your delivery has been send');
        else
            return back()->with('success', 'Sizning buyurtmangiz yuborildi');
    }

    public function send_sms(Request $request)
    {

        // return $request ;
       
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uz'; 

        DB::table('sms')
             ->insert(array(
                 'name' => $request->name,
                 'phone' => $request->phone,
                 'message' => $request->message,
                 'subject' => $request->subject,
         ));

        if ($lang == 'ru')
            return back()->with('success', 'Ваше сообщение отправлено ');
        elseif ($lang == 'en')
            return back()->with('success', 'Your message has been send');
        else
            return back()->with('success', 'Sizning xabaringiz yuborildi ');
    }

    public function search(Request $request){

        if(isset($_COOKIE["lang"]))
            $lang = $_COOKIE["lang"];
        else
            $lang = 'uz';

        $search = $request->input('search');

        if ($lang == 'ru') {
            $name = 'name_ru';
            $info = 'Не найден';
            $batafsil = 'Подробнее';

            $product = DB::table('products')
            ->where('name_ru', 'LIKE', "%{$search}%")
            ->orWhere('title_ru', 'LIKE', "%{$search}%")
            ->paginate(8);
        }

        elseif ($lang == 'en')
        {
            $name = 'name_en';
            $info = 'Not fount';
            $batafsil = 'Read more';

            $product = DB::table('products')
            ->where('name_en', 'LIKE', "%{$search}%")
            ->orWhere('title_en', 'LIKE', "%{$search}%")
            ->paginate(8);
        }

        else
        {
            $name = 'name_uz';
            $info = 'Topilmadi';
            $batafsil = 'Batafsil';

            $product = DB::table('products')
            ->where('name_uz', 'LIKE', "%{$search}%")
            ->orWhere('title_uz', 'LIKE', "%{$search}%")
            ->paginate(8);
        }
        
        

        // Search in the title and body columns from the posts table
        
        return view('front.search', compact('product', 'name', 'batafsil', 'info'));
    }
}
