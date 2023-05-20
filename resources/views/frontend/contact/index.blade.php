@extends('frontend.layouts.main')
@section('content')
    <main class=container-fluid>
        <h2 class="text-center py-5">{{ __('data.contact') }}</h2>
        <div class="row contact">
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12  box col-lg-6 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                            </svg>
                        </div>
                        <p>
                            <b>{{ __('data.our-address') }}</b> <br>
                            {{ __('data.adress') }}
                        </p>
                    </div>
                    <div class="col-12  box col-lg-6 text-center">
                        <div class="d-flex align-items-center justify-content-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                        </div>
                        <p>
                            <b>{{ __('data.telephones') }}</b> <br>
                            +998 93 358 28 48 <br>
                            +998 91 544 83 43

                        </p>
                    </div>
                    <div class="col-12  box col-lg-6 text-center">
                        <div class="d-flex align-items-center justify-content-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                        </div>
                        <p>
                            <b>{{ __('data.our-mail') }}</b> <br>
                            <a href="mailto:samduuf@edu.uz">samduuf@edu.uz</a>
                        </p>
                    </div>
                    <div class="col-12  box col-lg-6 text-center">
                        <div class="d-flex align-items-center justify-content-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M256 512C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256s-114.6 256-256 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                            </svg>
                        </div>
                        <p>
                            <b>{{ __('data.working-time') }}</b> <br>
                            {{ __('data.week') }} <br> 08:00 - 17:00
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 position-relative pb-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="container" method="post" action="{{ route('contact-send') }}">
                    <input type="hidden" name="_token" id="hidde" value="{{ csrf_token() }}">
                    <label for="hidde"></label>
                    <div class="row">
                        <div class="col-6">
                            <input autocomplete="none" id="name" type="text" name="name"
                                value="{{ old('name') }}">
                            <label for="name">{{ __('data.name') }}:</label>
                        </div>
                        <div class="col-6">
                            <input autocomplete="none" id="surname" type="text" name="surname"
                                value="{{ old('surname') }}">
                            <label for="surname">{{ __('data.surname') }}:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input id="email" type="text" name="email" value="{{ old('email') }}">
                            <label for="email">{{ __('data.email') }}<sup>*</sup>:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea id="text" type="text" name="message">{{ old('message') }}</textarea>
                            <label for="text">{{ __('data.question-content') }}<sup>*</sup> :</label>
                        </div>
                    </div>
                    <div class="row mt-4 " style=" display: flex; align-items: flex-end;">
                        <div class="col-6">
                            <div class="captcha row" style=" display: flex; align-items: flex-end;">
                                <span class="col-10">{!! captcha_img() !!}</span>
                                <button type="button" class="btn h-50 btn-danger col-2" id="reload">↻</button>
                            </div>
                        </div>
                        <div class="col-6">
                            <input id="captcha" type="text" name="captcha">
                            <label for="captcha">{{ __('data.enter-captcha') }}<sup>*</sup></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input id="submit" type="submit" value="{{ __('data.submit') }}" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '/reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

        const inputs = document.querySelectorAll('.container input');
        const labels = document.querySelectorAll('.container label');
        const textarea = document.querySelector('.container textarea');
        const email = document.querySelector('#email');
        const submit = document.querySelector('#submit');

        textarea.addEventListener('focus', () => {
            toBottom(textarea);
            console.log(1)
        });
        textarea.addEventListener('blur', () => toTop(textarea));
        if (textarea.value.length) toBottom(textarea);

        inputs.forEach(e => {
            e.addEventListener('focus', () => toBottom(e));
            e.addEventListener('blur', () => toTop(e));
            if (e.value.length && e.nextElementSibling) toBottom(e);
        });

        function toTop(e) {
            if (!e.value.length) e.nextElementSibling.style.transform = "translate(0, 0)";
        }

        function toBottom(e) {
            e.nextElementSibling.style.transform = "translate(-10px, -35px)";
        }

        email.addEventListener('keyup', () => {
            if (!validateEmail(email.value)) email.style.border = "1px solid #810303";
            else email.style.border = "1px solid #efecf0";
        });

        textarea.addEventListener('keyup', () => {
            if (textarea.value.length < 20) textarea.style.border = "1px solid #810303";
            else textarea.style.border = "1px solid #efecf0";
        })

        function validateEmail(email) {
            const re =
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        submit.addEventListener('click', onsubmit)

        function onsubmit(e) {
            if (!validateEmail(email) && textarea.value.length < 20) {
                e.preventDefault()
                textarea.style.border = "1px solid #810303";
                email.style.border = "1px solid #810303";
            };
        }
    </script>
@endsection
