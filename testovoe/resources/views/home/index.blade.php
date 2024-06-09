@extends("layouts.app")

@section("title-bloc")
    Home
@endsection

@section("content")
    <a href="/form"></a>

    <div class="bg-main-fon bg-no-repeat bg-cover py-9">
        <div class="mx-16 px-auto mt-9 ">
            <div class="flex text-white justify-between items-center">
                <div>
                    <a href="{{ route('home.index') }}">
                        <img src="{{ asset('images/Лого.png') }}">
                    </a>
                </div>
                <div class="text-xl flex justify-between font-montserat w-[500px] mr-20">

                    @foreach($menuItems as $menuItem)
                        <a href="{{ $menuItem->url }}">{{ $menuItem->title }}</a>
                    @endforeach
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('images/Бургер.png') }}">
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-16 px-auto text-white mt-[150px]">
            <div class="max-w-2xl">
                <p class="font-playfair text-7xl">Открой для себя Новую Ирландию</p>
                <div class="max-w-[550px] mt-12">
                    <p class="font-montserat text-2xl mt-9">Авторские туры по экзотическим уголкам от Ивана Иванова</p>
                </div>
            </div>
            <div class="flex mt-14 justify-between items-center w-[620px]">
                <div class="text-3xl text-black">
                    <button class="bg-gold  py-4 px-[92px] rounded-full" id="openModalButton1">Оставить заявку</button>
                </div>
                <div class="flex items-center">
                    <div>
                        <img src="{{ asset('images/iconPlay 1.png') }}">
                    </div>
                    <div class="w-[100px] text-sm ml-3 text-grey">
                        Просмотрите видео-отчёт 2018-2019
                    </div>
                </div>
            </div>


            <div class="flex mt-12">
                <div>
                    <div class="text-grey">
                        Подписывайтесь в соцсетях
                    </div>
                    <div class="flex justify-between items-center mt-5 w-[200px]">
                        <div>
                            <img src="{{ asset('images/iconYouTube.png') }}">
                        </div>
                        <div>
                            <img src="{{ asset('images/iconFB.png') }}">
                        </div>
                        <div>
                            <img src="{{ asset('images/iconTwitter.png') }}">
                        </div>
                        <div>
                            <img src="{{ asset('images/iconVK.png') }}">
                        </div>
                    </div>
                </div>
                <div class="flex justify-between font-montserat  ml-[auto] mr-[0px] w-[900px]">


                    <div class="relative text-white text-xl">
                        <div>
                            <a href="#">
                                <img src="{{ asset('images/imgIsland 1.png') }}">
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-4">
                            <p class="w-52 font-medium ">Водопады Исландии</p>
                        </div>
                        <div class="absolute top-8 left-5 font-frank text-3xl">
                            02
                        </div>
                        <div class="absolute bottom-4 right-7">
                            <img src="{{ asset('images/Arrow 1.png') }}">
                        </div>
                    </div>

                    <div class="relative text-white text-xl">
                        <div>
                            <a href="#">
                                <img src="{{ asset('images/imgIsland 1 (1).png') }}">
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-4">
                            <p class="w-52 font-medium ">Сказочные Доломиты</p>
                        </div>
                        <div class="absolute top-8 left-5 font-frank text-3xl">
                            03
                        </div>
                        <div class="absolute bottom-4 right-7">
                            <img src="{{ asset('images/Arrow 1.png') }}">
                        </div>
                    </div>

                    <div class="relative text-white text-xl">
                        <div>
                            <a href="#">
                                <img src="{{ asset('images/imgIsland 1 (2).png') }}">
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-4">
                            <p class="w-52 font-medium ">Неизведанная Норвегия</p>
                        </div>
                        <div class="absolute top-8 left-5 font-frank text-3xl">
                            04
                        </div>
                        <div class="absolute bottom-4 right-7">
                            <img src="{{ asset('images/Arrow 1.png') }}">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


    <div class="my-52 mx-28 flex">
        <div class="relative text-white ml-24">
            <a href="#"><img src="{{ asset('images/imgHawaii 1.png') }}"></a>
            <div class="absolute top-16 left-14">
                <p class="text-3xl leading-8 font-bold font-frank">10-24</p>
                <p class="font-montserat text-xl">апреля</p>
            </div>
            <div class="absolute bottom-12 left-14">
                <p class="w-52 font-medium text-2xl">Большое ущелье на острове Гавайи</p>
            </div>
            <div class="absolute bottom-12 right-16">
                <img src="{{ asset('images/Arrow 1.png') }}">
            </div>
        </div>
        <div class="ml-40 w-[420px] mt-8">
            <div class="text-42 font-bold font-playfair">
                Посмотрите все направления туров
            </div>
            <div class="text-xl font-montserat w-[380px] my-12">
                Берега океанов и дикие пляжи с редкими породами
                деревьев. Местная архитектура и первозданный вид дикой природы
            </div>
            <button class="bg-inherit border-2 border-gold text-2xl w-72 text-gold py-3 rounded-full"
                    id="openModalButton2">Оставить заявку
            </button>
        </div>
    </div>
    <div class="bg-form bg-no-repeat py-4">
        <div class="flex justify-center items-center">
            <div class="ml-64">
                <div id="openModalButton" class="font-playfair font-bold text-42 w-[350px]">
                    Оставьте заявку на бесплатную консультацию
                </div>
                <div class="font-montserat text-xl w-[230px] mt-9">
                    Мы перезвоним вам в ближайшее время
                </div>
            </div>
            <div class="font-montserat text-black w-[400px] mt-28">
                <form class="flex flex-wrap ml-14 justify-center items-center">
                    <input
                        class="bg-inherit border-2 border-opas-blue placeholder:text-2xl placeholder:font-bold placeholder:text-holder-blue p-6 w-[278px] rounded-full"
                        type="name" id="name" placeholder="Ваше имя">
                    <input
                        class="bg-inherit border-2 my-8 border-opas-blue placeholder:text-2xl placeholder:font-bold placeholder:text-holder-blue p-6 w-[278px] rounded-full"
                        placeholder="+7(___)___-__-__">
                    <button class="border-2 bg-[#FFB800] text-2xl text-black font-bold p-6 w-[278px] rounded-full">
                        Оставить заявку
                    </button>
                    <div class="font-montserat text-xs w-60 mt-3 mb-7">
                        Нажимая кнопку, вы даете согласие на <span class="text-gold">обработку персональных данных</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container my-52 flex">
        <div class=" w-[500px] mt-8">
            <div class="text-42 font-bold font-playfair">
                Что пишут участники наших путешествий
            </div>
            <div class="text-xl my-14 font-montserat w-[380px]">
                87% участников приходят по личной рекомендации от
                друзей. А каждый 4-ый путешествует с нами больше двух раз!
            </div>
            <button class="bg-inherit border-2 border-gold text-2xl w-64 text-gold py-4 rounded-full">Читать отзывы
            </button>
        </div>
        <div class="relative text-white w-[827px] ml-24">
            <a href="#"><img src="{{ asset('images/imgHawaii 1 (1).png') }}"></a>
            <div class="absolute top-16 left-14">
                <p class="text-3xl leading-8 font-bold font-frank">Отзыв</p>
                <p class="font-montserat text-xl">Елена Иванова</p>
            </div>
            <div class="absolute bottom-12 left-14">
                <p class="w-[360px] font-medium text-2xl leading-5">Пожалуй, это был самый лучший отпуск в моей жизни...</p>
            </div>
            <div class="absolute bottom-12 right-16">
                <img src="{{ asset('images/Arrow 1.png') }}">
            </div>
        </div>
    </div>

    <div id="modalContainer"></div>
    <script src="{{asset('js/modal_butt/modal_butt_1.js')}}"></script>
    <script src="{{asset('js/modal_butt/modal_butt_2.js')}}"></script>
@endsection
