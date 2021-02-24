<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Admin Login Template - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
            body {
                background: linear-gradient(132deg, #a3182a, #e37785, #bab6b6, #212529);
                background-size: 400% 400%;
                animation: BackgroundGradient 30s ease infinite;
            }
            
            @keyframes BackgroundGradient {
                0% {background-position: 0% 50%;}
                50% {background-position: 100% 50%;}
                100% {background-position: 0% 50%;}
            }
            .baslik
{
    color: #fff;
    text-align: center;
    font-family: 'Fira Sans', sans-serif;
}
.arkalogin
{
    width: 500px;
    text-align: center;
    background: #fff;
    padding: 30px;
    border-radius: 19px;
    margin: 50px auto;
}
.loginbaslik
{
    color: #888888;
    text-align: left;
    font-size: 19px;
    margin-top: 15px;
}
.giris
{
    width: 100%;
    height: 40px;
    margin-top: 10px;
    border: none;
    background: #E5E5E5;
    outline: none;
    padding: 0 10px;
}
.butonlogin
{
    width: 100%;
    margin-top: 10px;
    height: 40px;
    font-weight: bold;
    background: rgb(158,4,38);
    background: linear-gradient(0deg, rgba(158,4,38,1) 10%, rgba(2,0,36,1) 100%, rgba(55,0,255,1) 100%);
    border: none;
    color: #fff;
    transition: all 250ms;
    cursor: pointer;
}
.butonlogin:hover
{
    background: rgb(158,4,38);
    background: linear-gradient(180deg, rgba(158,4,38,1) 10%, rgba(2,0,36,1) 100%, rgba(55,0,255,1) 100%);
}
body
{
    margin: 0;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body data-new-gr-c-s-check-loaded="14.980.0" data-gr-ext-installed="">
    <section style="height: 100vh;">
    <div style="background-image: url(images/arka.jpg); background-attachment: fixed; background-size: cover; width: 100%; height: 100vh; position: relative;">
    <div class="baslik">
        <b style="font-size: 101px; text-align: center; margin-bottom: -21px; display: block;">IRES</b>
        <span style="font-size: 19px; text-align: center; display: block; margin-bottom: 25px;">Gestion Discours</span>
    </div>
    <section>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="arkalogin">
            <div class="loginbaslik">Administrateur</div>
            <hr style="border: 1px solid #ccc;">
            <div>
                <x-jet-input id="email" class="giris" type="email" placeholder="Email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="giris" type="password" placeholder="Mot de passe" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="butonlogin">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </div>
    </form>
    </section><br>
    <span style="font-size: 24px; text-align: center; display: block; color: #fff; font-weight: bold; margin-bottom: 34px;
    ">Connexion</span>
    <span style="font-size: 17px; text-align: center; display: block; color: #fff;
    ">www.ires.ma</span>
    </div>
    </section>	<script type="text/javascript">
		</script>


</body></html>
