@extends('layouts.layout')

@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">Single Product Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <main id="main-container" class="main-container bg-white py-4">
        <div class="container">
            <div class="row">
                <!-- Start Product Details Gallery -->
                <div class="col-12">
                    <div class="product-details">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery-box m-b-60">
                                    <div class="product-image--large overflow-hidden">
                                        <img class="img-fluid" id="img-zoom" src="/assets/img/laser.png"
                                            data-zoom-image="assets/img/laser.png" alt="">
                                    </div>
                                    <div class="pos-relative m-t-30">
                                        <div id="gallery-zoom"
                                            class="product-image--thumb product-image--thumb-horizontal overflow-hidden swiper-outside-arrow-hover m-lr-30 swiper-container-initialized swiper-container-horizontal">
                                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                                    style="width: 112.5px; margin-right: 10px;">
                                                    <a class="zoom-active" data-image="assets/img/laser.png"
                                                        data-zoom-image="assets/img/laser.png">
                                                        <img class="img-fluid" src="/assets/img/laser.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide swiper-slide-visible swiper-slide-next"
                                                    style="width: 112.5px; margin-right: 10px;">
                                                    <a data-image="assets/img/laser.png"
                                                        data-zoom-image="assets/img/laser.png">
                                                        <img class="img-fluid" src="/assets/img/laser.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide swiper-slide-visible"
                                                    style="width: 112.5px; margin-right: 10px;">
                                                    <a data-image="assets/img/laser.png"
                                                        data-zoom-image="assets/img/laser.png">
                                                        <img class="img-fluid" src="/assets/img/laser.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide swiper-slide-visible"
                                                    style="width: 112.5px; margin-right: 10px;">
                                                    <a data-image="assets/img/laser.png"
                                                        data-zoom-image="assets/img/laser.png">
                                                        <img class="img-fluid" src="/assets/img/laser.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide" style="width: 112.5px; margin-right: 10px;">
                                                    <a data-image="assets/img/laser.png"
                                                        data-zoom-image="assets/img/laser.png">
                                                        <img class="img-fluid" src="/assets/img/laser.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <span class="swiper-notification" aria-live="assertive"
                                                aria-atomic="true"></span>
                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next gallery__nav gallery__nav--next" tabindex="0"
                                                role="button" aria-label="Next slide" aria-disabled="false"><i
                                                    class="fal fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev gallery__nav gallery__nav--prev swiper-button-disabled"
                                                tabindex="-1" role="button" aria-label="Previous slide"
                                                aria-disabled="true"><i class="fal fa-chevron-left"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-box">
                                    <h3 class="section-content__title">Lazer kesish uskunasi (metall uchun) SF6015G
                                        <h6 class="text-primary">Asosiy ma'lumotlar</h6>
                                        <span class="text-reference">Company: China machinery import </span> <br>
                                        <span class="text-reference">Mahsulot: Senfeng</span> <br>
                                        <span class="text-reference">Model: SF6015G</span>

                                        <ul class="my-3">
                                            <li class="text-danger">Самовывоз из пункта продаж </li>
                                            <li class="text-danger">Доставка бесплатная (Ташкент) </li>
                                        </ul>

                                        <h5 class="podzakaz"><img
                                                src="https://www.seekpng.com/png/small/0-4640_image-royalty-free-clipart-check-mark-green-check.png"
                                                alt=""> Под заказ</h5>

                                        <div class="product__price">
                                            <span class="product__price-reg">68 000$</span>
                                            <span class="product__price-uzb">68 000 000 so'm</span>
                                        </div>
                                        <div class="product__desc m-t-25 m-b-30">
                                            <p>Название бренда: Rabotec
                                                Происхождение: Китай
                                                Сертификация: Европейский сертификат соответствия
                                                Сертификация: FDA
                                                Состояние: Новый
                                                Наличие ЧПУ: CNC
                                                Это умное устройство: Да </p>
                                        </div>
                                        <div class="product-var p-t-30">


                                            <div class="product-quantity product-var__item">
                                                <span class="product-var__text">Quantity</span>
                                                <div class="product-quantity-box">
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="9"
                                                            step="1" value="1">
                                                        <div class="quantity-nav">
                                                            <div class="quantity-button quantity-up"><i
                                                                    class="icon-chevron-up"></i></div>
                                                            <div class="quantity-button quantity-down"><i
                                                                    class="icon-chevron-down"></i></div>
                                                        </div>
                                                    </div>
                                                    <a href="#modalAddCart" data-toggle="modal" data-dismiss="modal"
                                                        class="link--gray link--icon-left shop__wishlist-icon ml-4 m-b-5 btn btn-primary text-white p-3 btn-zakaz"><i
                                                            class="fas fa-shopping-bag"></i>Заказать</a>
                                                </div>

                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Product Details Gallery -->

                <!-- Start Product Details Tab -->
                <div class="col-12">
                    <div class="product product--1 border-around product-details-tab-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-content--border">
                                    <ul
                                        class="tablist tablist--style-black tablist--style-title tablist--style-gap-70 nav d-flex justify-content-between">
                                        <li><a class="nav-link active" data-toggle="tab"
                                                href="#product-desc">Parametrlar</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#product-dis">Tavsif</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#product-dos">Yetkazib berish
                                            </a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#product-vid">Video</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#product-pay">To'lov</a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#product-grant">Kafolat</a></li>


                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="product-details-tab-box m-t-50">
                                    <div class="tab-content">
                                        <!-- Start Tab - Product Description -->
                                        <div class="tab-pane show active" id="product-desc">
                                            <div class="para__content gray-bg rounded p-3 mb-3">
                                                <h4>Технические характеристики </h4>
                                                <ul class="para__list">
                                                    <li>
                                                        <p> Рабочая зона:</p> <span> 6000x1500мм</span>
                                                    </li>

                                                    <li>
                                                        <p> Габариты:
                                                        </p>
                                                        <span> 7400×2300×1800мм
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <p> Мощность лазера:

                                                        </p>
                                                        <span> 2000Вт Raycus

                                                        </span>
                                                    </li>

                                                    <li>
                                                        <p> Длина волны лазера:

                                                        </p>
                                                        <span> 1060 мм

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <p> Структура по оси X, Y:

                                                        </p>
                                                        <span> Водяное охлаждение


                                                        </span>
                                                    </li>
                                                    <li>
                                                        <p> Способ охлаждения лазера:

                                                        </p>
                                                        <span> 45 м/мин

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <p> Скорость резки:

                                                        </p>
                                                        <span> ± 0.04 мм

                                                        </span>
                                                    </li>
                                                    <li>
                                                        <p> Мак. скорость:

                                                        </p>
                                                        <span> ± 0.03 мм

                                                        </span>
                                                    </li>

                                                    <li>
                                                        <p> Точность позиционирования: </p>
                                                        <span> Точность позиционирования:</span>

                                                    </li>
                                                    <li>
                                                        <p> Минимальная ширина линии:


                                                        </p>
                                                        <span> 22 кВт


                                                        </span>
                                                    </li>
                                                    <li>
                                                        <p> Система управления:


                                                        </p>
                                                        <span> Кислород, азот и воздух


                                                        </span>
                                                    </li>
                                                    <li>
                                                        <p> Тип двигателя:
                                                        </p>
                                                        <span> Нержавейка, углеродистая сталь, алюминий, медь и т. д.


                                                        </span>
                                                    </li>

                                                    <li>
                                                        <p> Общая мощность машины:



                                                        </p>
                                                        <span> AC 380В, 50 Гц



                                                        </span>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="para__content gray-bg rounded p-3">
                                                <h4>Дополнительная информация
                                                </h4>
                                                <ul class="para__list">
                                                    <li>
                                                        <p>Бренд</p> <span></span>
                                                    </li>

                                                    <li>
                                                        <p>Родина бренда

                                                        </p>
                                                        <span>1 год

                                                        </span>
                                                    </li>

                                                    <li>
                                                        <p>Страна производитель


                                                        </p>
                                                        <span>Китай

                                                        </span>
                                                    </li>
                                            </div>
                                        </div> <!-- End Tab - Product Description -->

                                        <!-- Start Tab - Product Details -->
                                        <div class="tab-pane" id="product-dis">
                                            <div class="product-dis__content gray-bg rounded p-3">
                                                <h5> ЛАЗЕРНЫЙ КОМПЛЕКТ ДЛЯ РЕЗКИ ЛИСТОГО МЕТАЛЛА SF6015G</h5>
                                                <h6>Особенности станка</h6>
                                                <h6>1. Оптоволоконный лазерный промышленный станок SF6015G укомплектован со
                                                    сервоприводами Schneider по оси X, Y, зубчатыми рейками SENFENG LMN,
                                                    направляющими Тайваня, чтобы повышает скорость и точность оборудования.
                                                </h6>
                                                <h6> 2. Специальный оптическая лазерная головка с автофокусом поднимает
                                                    автоматизацию процесса лазерной резки на совершенно новый уровень, в
                                                    результате
                                                    долгосрочный срок обслуживания.</h6>
                                                <h6> 3. Кабели оборудования уложены в гибкие кабельные цепи фирмы Igus
                                                    (Германия).</h6>
                                                <h6> 4. Программное обеспечение Cypcut удобно для освоения и позволяет
                                                    импортировать файлы для резки из наиболее распространённых векторных
                                                    форматов:
                                                    dxf, plt.</h6>
                                                <h6> 5. Оборудование со системой управления интерфейса DSP отдельного
                                                    USB-порта,
                                                    панель управления при работе, легкое управление, уникальный дизайн.</h6>
                                            </div>
                                        </div> <!-- End Tab - Product Details -->
                                        <!-- Start Tab - Product Details -->
                                        <div class="tab-pane" id="product-dos">
                                            <div class="product-dis__content gray-bg rounded p-3">
                                                <h6>Bizning yuk tashish shartlari:</h6>
                                                <h6>Namangan shahri</h6>
                                                <h6>Namangan shahri bo’yicha buyurtmalarni yetkazib berish kuryer xizmati
                                                    tomonidan siz ko’rsatgan manzil bo’yicha mutlaqo bepul amalga
                                                    oshiriladi.</h6>
                                                <h6 class="py-4">Yetkazib berish xizmati har kuni soat 10:00 dan 21:00
                                                    gacha ishlaydi.
                                                </h6>
                                                <h6>Agar siz 09:00 dan 16:00 gacha buyurtma bergan bo’lsangiz, u sizga
                                                    buyurtma berish kunida yetkazilishi mumkin. Chiqishdan bir soat oldin,
                                                    kuryer siz ko’rsatilgan manzilda ekanligingizga ishonch hosil qilish
                                                    uchun sizga murojaat qiladi va siz mollarni qabul qilishingiz mumkin.
                                                    Sotib olingan tovarlar uyga (yozgi, yozgi uyga) kirish yo’llari mavjud
                                                    bo’lganda kvartiraga (yozgi, yozgi uyga) yetkaziladi. Ikki qavatli
                                                    uylarda, ko’p qavatli uylarda va yozgi uylarda mahsulot birinchi qavatga
                                                    kiritiladi. Katta hajmdagi mahsulotni sotib olayotganda uni quyidagi
                                                    tarif bo’yicha qavatga ko’tarish mumkin: 10 000 so’m – 1 qavat. Omborda
                                                    buyurtma qilingan mahsulot bo’lmasa, etkazib berish muddati alohida
                                                    kelishib olinadi</h6>
                                                <h6>Toshkent viloyati bo’yicha yetkazib berish:
                                                    Toshkent viloyati bo’yicha yetkazib berish qo’shimcha haq evaziga amalga
                                                    oshiriladi. Xarajatlarni ta’minlash uchun bizga aniq geolokatsiyani
                                                    telegram orqali yuborishingiz kerak. Kilometrni hisoblagandan so’ng,
                                                    menejerlar sizga yetkazib berish narxini aytishadi</h6>
                                                <h6>O’zbekiston bo’yicha yetkazib berish:
                                                    O’zbekiston bo’ylab yetkazib berish logistika kompaniyasi orqali
                                                    xaridorning mablag’lari bilan amalga oshiriladi. O’zbekiston bo’yicha
                                                    onlayn-do’kon hisobidan yetkazib berish alohida muhokama qilinadi,
                                                    boshqa hollarda yetkazib berish logistika kompaniyasi tariflari bo’yicha
                                                    to’lanadi.</h6>
                                                <h6>E’tibor bering! Agar operator siz ko’rsatgan telefon orqali 2 kun ichida
                                                    qo’ng’iroq qila olmasa, buyurtmangiz bekor qilinadi. Shuning uchun, agar
                                                    biron-bir sababga ko’ra, ushbu vaqt ichida qo’ng’iroqni qabul qila
                                                    olmasangiz, iltimos, operatorga elektron pochta orqali murojaat qiling:
                                                    220volt.uz@gmail.com, yoki saytdagi geribildirim orqali.</h6>
                                                <h6>Internet orqali buyurtmalar bilan bog’liq masalalar bo’yicha tel. <a
                                                        href="tel:(78) 113-70-70">(78) 113-70-70</a> yoki <a
                                                        href="#">Telegram </a> orqali murojaat qilishingiz mumkin.
                                                </h6>

                                            </div>
                                        </div> <!-- End Tab - Product Details -->

                                        <div class="tab-pane" id="product-vid">
                                            <div class="product-dis__content">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <iframe src="https://www.youtube.com/embed/0fs_gRzo9UI"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <iframe src="https://www.youtube.com/embed/0fs_gRzo9UI"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <iframe src="https://www.youtube.com/embed/0fs_gRzo9UI"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- End Tab - Product Details -->

                                        <div class="tab-pane" id="product-pay">
                                            <div class="product-dis__content gray-bg rounded p-3">
                                                <h6>Для Вашего удобства мы предлагаем выбрать приемлемый для Вас способ
                                                    оплаты:
                                                </h6>
                                                <ul>
                                                    <li>— Оплата банковской картой (терминал);
                                                    </li>
                                                    <li>— Оплата через платёжные системы PAYME либо CLICK
                                                    </li>
                                                    <li>— Оплата наличными

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="product-grant">
                                            <div class="product-dis__content gray-bg rounded p-3">
                                                <h6>В праве на стандартную или расширенную гарантии предоставляемые
                                                    производителем может быть отказано:


                                                </h6>
                                                <ul>
                                                    <li>– в случае отказа предоставить гарантийный талон на покупку
                                                        рекламируемого продукта</li>
                                                    <li>– в случае, если гарантийный срок данного товара истек
                                                    </li>

                                                    <li>– нарушением защитных печатей и этикеток на продукте, если подобные
                                                        существуют
                                                    </li>
                                                    <li>– в случае, использования инструмента не по назначению
                                                    </li>
                                                    <li>– в случае повреждения товара при транспортировке (возмещение ущерба
                                                        подобного рода должно решаться непосредственно с перевозчиком)
                                                    </li>
                                                    <li>– при использовании товаров в условиях, которые не соответствуют
                                                        своей температурой, содержанием пыли, влажностью, химическими и
                                                        механическими
                                                    </li>
                                                    <li>– характеристиками, условиям окружающей среды обычной для продукта
                                                    </li>
                                                    <li>– при непрофессиональном использовании инструмента
                                                    </li>
                                                    <li>– при повреждении товара чрезмерной нагрузкой или его
                                                        использованием, которое противоречит условиям, изложенным в
                                                        инструкции или общим принципам использования продукта.

                                                    </li>






                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Product Details Tab -->

                @include('sections.products')
                <!-- ::::::  End  Product Style - Default Section  ::::::  -->
            </div>
        </div>
        </div>
    </main>



    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Product Successfully Added To Your Shopping Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="user_info">
                                    <div class="col-sm-12">
                                        <h2>Buyurtma berish</h2>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="backto__left btn btn-primary text-white"> <i
                                                class="fa fa-arrow-alt-left"></i> Qayta so'rov yuborish </button>
                                        <form action="#" class="hide__form">
                                            <div class="form-group row">
                                                <label for="newName" class="col-md-3 col-form-label">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control cus_input" id=""
                                                        name="" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="newName" class="col-md-3 col-form-label">Phone number</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control cus_input" id=""
                                                        name="" value="" placeholder="+998(99) 999 99 99 ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="newName" class="col-md-3 col-form-label">Number</label>
                                                <div class="col-md-9">
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="9"
                                                            step="1" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="newName" class="col-md-3 col-form-label"></label>
                                                <div class="col-md-9">
                                                    <input type="submit" value="Заказать"
                                                        class="form-control cus_input_btn btn-primary modal__change"
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        data-whatever="@mdo">
                                                </div>
                                            </div>

                                        </form>

                                        <div class="show__sent pb-5">
                                            <h1 class="text-center"> Sizning so'rovingiz yuborildi</h1>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->
@endsection
