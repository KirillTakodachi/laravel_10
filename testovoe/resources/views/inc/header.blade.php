{{--<div class="bg-main-fon bg-no-repeat max-w-max max-y-max ">--}}
<div>
    <img src="{{ asset('images/imgBackground 1.png') }}">
</div>
    <div class="mx-16 px-auto mt-9 ">
        <div class="flex text-white justify-between">
            <div>
                <a href="{{ route('home.index') }}">
                    <img src="{{ asset('images/Лого.png') }}">
                </a>
            </div>
            <div class="text-xl font-montserat">
                <a href="{{ route('home.index') }}">Главная</a>
                <a href="{{ route('contact.index') }}" class="mx-8">Контакты</a>
                <a href="{{ route('about.index') }}">О нас</a>
            </div>
        </div>
    </div>
