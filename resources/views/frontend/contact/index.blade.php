@extends('frontend.layouts.main')
@section('content')
    <main>
        <h2 class="text-center">{{__('data.contact')}}</h2>
        <div class="row conatct-cont">
            <div class="col-12 col-md-6">
                <div class="contact-card">
                    <div class="contact-img"><img src="/frontend/img/icon/placeholder.png" alt=""></div>
                    <div class="contact-body">
                        <h3>{{__('data.our-address')}}:</h3>
                        <p><cite>{!! __('data.adress') !!}</cite></p>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-img"><img src="/frontend/img/icon/phone-call.png" alt=""></div>
                    <div class="contact-body">
                        <h3>{{__('data.telephones')}}:</h3>
                        <p><a href="tel:+998662322037">+998 66 232 29 29</a> <br> <a href="tel:+998662322037">+998
                                66 232 20 37</a></p>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-img"><img src="/frontend/img/icon/email (1).png" alt=""></div>
                    <div class="contact-body">
                        <h3>{{__('data.our-mail')}}:</h3>
                        <p><a href="mailto:info@samtuit.uz">info@samtuit.uz</a></p>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-img"><img src="/frontend/img/icon/telegram.png" alt=""></div>
                    <div class="contact-body">
                        <h3>Telegram bot:</h3>
                        <p><a href="tg://resolve?domain=samtuit_murojaat_bot">@samtuit_murojaat_bot</a></p>
                    </div>
                </div>
            </div>
            <div class="col-6 d-md-block d-none">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5164.231746152034!2d66.97884965889027!3d39.6796244709868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d188e87ff9341%3A0xc519336839ee6ba7!2zVEFUVSBTYW1hcmthbmQsIFNhbWFycWFuZCwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1628490644727!5m2!1sru!2s"
                    width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <h2 class="text-center">{{__('data.questions-apples')}}</h2>
        <div class="row conatct-cont">
            <div class="col-6 d-md-block d-none">
                <img src="/frontend/img/bgtatu.jpg" alt="bgtatu">
            </div>
            <div class="col-12 col-md-6">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="container" method="post" action="{{route('contact-send')}}">
                    <input type="hidden" name="_token" id="hidde" value="{{csrf_token()}}">
                    <label for="hidde"></label>
                    <div class="row">
                        <div class="col-6">
                            <input autocomplete="none" id="name" type="text" name="name" value="{{old('name')}}">
                            <label for="name">{{__('data.name')}}:</label>
                        </div>
                        <div class="col-6">
                            <input autocomplete="none" id="surname" type="text" name="surname"
                                   value="{{old('surname')}}">
                            <label for="surname">{{__('data.surname')}}:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input id="email" type="text" name="email" value="{{old('email')}}">
                            <label for="email">{{__('data.email')}}<sup>*</sup>:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea id="text" type="text" name="message">{{old('message')}}</textarea>
                            <label for="text">{{__('data.question-content')}}<sup>*</sup> :</label>
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
                            <label for="captcha">{{__('data.enter-captcha')}}<sup>*</sup></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input id="submit" type="submit" value="{{__('data.submit')}}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <h2 class="text-center">{{__('data.details')}}</h2>
        <div class="row m-auto container text-center">
            <div class="col-12 border-bottom col-md-6 py-4">
                {!! __('data.detailss.contract') !!}
            </div>
            <div class="col-12 border-bottom col-md-6 py-4">
                {!! __('data.detailss.grand') !!}
            </div>
        </div>
        <div class="row m-auto container text-center">

            <div class="col-12 border-bottom col-md-6 py-4">
                {!! __('data.detailss.special-account') !!}
            </div>
        </div>
    </main>

@endsection
@section('scripts')
    <script>

        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: '/reload-captcha',
                success: function (data) {
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
            if (!validateEmail(email.value )) email.style.border = "1px solid #810303";
            else email.style.border = "1px solid #efecf0";
        });

        textarea.addEventListener('keyup', () => {
            if (textarea.value.length < 20) textarea.style.border = "1px solid #810303";
            else textarea.style.border = "1px solid #efecf0";
        })

        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        submit.addEventListener('click', onsubmit)

        function onsubmit(e) {
            if (!validateEmail(email) && textarea.value.length < 20) {
                e.preventDefault()
                textarea.style.border = "1px solid #810303";
                email.style.border = "1px solid #810303";
            }
            ;
        }
    </script>
@endsection
