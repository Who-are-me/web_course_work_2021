@extends('layouts.main_layout')

@section('title', "ЦК Електронних апаратів  - Зворотній зв'язок")

@section('content')
<link href="css/pages.css" rel="stylesheet">








<!-- <form name="" action="{{ url('/feedbackstore') }}" method="post">
    @csrf

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <div class="text-danger" id="recaptchaError"></div>
    <div class="col-12 d-block d-lg-flex text-left p-0">

        <?php
            // if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
            //   $secret = '6LdqluEaAAAAANpYxhvTRrgvadAK0kYHxfhfpuHd';
            //   $ip = $_SERVER['REMOTE_ADDR'];
            //   $response = $_POST['g-recaptcha-response'];
            //   $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
            //   $arr = json_decode($rsp, TRUE);
            //   if ($arr['success']) {
                
            //   }
            // }
        ?>

        <div class="col-12 col-lg-6 p-0 px-3">
            <p class="anketa-green-header-font m-0 py-2">Контактна інформація</p>
            <p class="anketa-basic-font pb-1 m-0">Ми зв`яжемось з Вами зручним для Вас способом:</p>
        </div>

        <div class="col-12 col-lg-6 p-0 px-3">
            <p class="anketa-green-header-font m-0 py-2">Розкажіть про себе</p>
            <p class="anketa-basic-font pb-1 m-0">Давайте знайомитись</p>
        </div>

    </div>
    <div class="col-12 d-block d-lg-flex text-left p-0 pt-2">

        <div class="col-12 col-lg-6 p-0 px-3">
            <input id="phone" type="text" name="phone" required="" class="anketa-input" placeholder="*Телефон" maxlength="10" >
            <input id="email" type="text" name="email" required="" class="anketa-input mt-3" placeholder="*E-mail" maxlength="20">
            <p class="anketa-green-header-font m-0 py-3">Освіта</p>
            <p class="anketa-basic-font pb-1">Вкажіть де Ви навчались\навчаєтесь</p>
            <input id="school" type="text" name="school" required="" class="anketa-input mb-2" placeholder="*Назва навчального закладу" maxlength="20">    
        </div>

        <div class="col-12 col-lg-6 p-0 px-3">
            <input id="pip" type="text" name="pip" class="anketa-input mb-2" placeholder="ПІП" required="" maxlength="20">    
            <input type="text"  required="" class="anketa-input mt-xl-3" placeholder="Звідки ви дізнались про університет" maxlength="20">
            <div class="pt-5 g-recaptcha" data-sitekey="6LdqluEaAAAAALggPkMFwEvJeGiBT57rLlSk5fue" ></div>
        </div>

    </div>
    <div class="col-12 p-0 py-2 d-flex">
        <div class="col-xl-3 col-md-2 d-none d-md-flex"></div>

        <div class="col-xl-6 col-md-8 col-12 p-0 ">
            <input type="submit" class="" name="" value="Отримати консультацію">
        </div>

        <div class="col-xl-3 col-md-2 d-none d-md-flex"></div>
    </div>
</form> -->





<form name="" action="{{ url('/contactstore') }}" method="post">
    @csrf

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <div class="text-danger" id="recaptchaError"></div>

    <?php
        if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
          $secret = '6LdqluEaAAAAANpYxhvTRrgvadAK0kYHxfhfpuHd';
          $ip = $_SERVER['REMOTE_ADDR'];
          $response = $_POST['g-recaptcha-response'];
          $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
          $arr = json_decode($rsp, TRUE);
          if ($arr['success']) {
            
          }
        }
    ?>

    <div class="row d-flex m-0 p-0 feedback-background px-5 px-md-0">
        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
        <div class="col-12 col-md-10 col-lg-8 d-block">
            <div class="col-12 p-0 py-3 py-md-5 pt-5 mt-5"><h2 class="feedback-header-text">У Вас виникли запитання?</h2></div>
            <div class="col-12 d-block d-md-flex p-0 mt-2 mt-md-5">

                <div class="col-12 col-md-5 input-transparent-div p-0">
                    <div class="input-box label">
                        <input type="text" name="pip" required="" class="w-100" maxlength="150">
                        <label>Введіть ім’я</label>
                    </div>
                </div>
                <div class="col-2 d-none d-md-flex"></div>
                <div class="col-12 col-md-5 input-transparent-div p-0">
                    <div class="input-box label">
                        <input type="email" name="email" required="" class="w-100" maxlength="150">
                        <label>Введіть E-mail</label>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block d-md-flex p-0 mt-0 mt-md-2">
                <div class="col-12 col-md-5 input-transparent-div p-0">
                    <div class="input-box label">
                        <input type="text" name="phone" required="" class="w-100" maxlength="10" minlength="10">
                        <label>Введіть номер телефону</label>
                    </div>
                </div>
                <div class="col-2 d-none d-md-flex"></div>
                <div class="col-12 col-md-5 input-transparent-div p-0">
                    <div class="input-box label">
                        <input type="text" name="theme" required="" class="w-100" maxlength="100">
                        <label>Тема запитання</label>
                    </div>
                </div>
            </div>
            <div class="col-12 my-2 my-md-5 p-0">
                <div class="col-12 p-0">
                    <p class="feedback-basic-font">
                        Введіть повідомлення:
                    </p>
                </div>
                <div class="col-12 p-0 d-flex">
                    <div class="col-11 p-0"> 
                            <textarea class="feedback-textarea" name="text" rows="10" maxlength="1000"></textarea>
                    </div>

                    
                    
                    <!-- <div class="col-1 p-0 align-bottom">
                        <div class="p-0 col-12 align-bottom">
                            <input type="submit" class="w-100 feedback-send-button" name="">
                        </div>
                    </div> -->


                </div>
                <div class="col-12 p-2 text-center">
                    <div class="pt-5 g-recaptcha" data-sitekey="6LdqluEaAAAAALggPkMFwEvJeGiBT57rLlSk5fue" ></div>
                </div>

                <div class="col-12 p-2 text-center">
                    <input type="submit" class="" name="" value="Отримати консультацію">
                </div>  
            </div>
        </div>

        <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    </div>

        
</form>

@endsection