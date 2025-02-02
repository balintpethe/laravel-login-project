<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite('resources/css/dashboard.css')
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <h1>Hello {{ $user->username }}!</h1>
            <br>
            <p>
                Azért választottam a Laravel-t ennek a feladatnak az elkészítéséhez, mert szerettem volna megmutatni, hogy készen állok új technológiák elsajátítására és alkalmazására.
                Bár korábban nem dolgoztam Laravelben, gyorsan beletanultam, és élveztem a keretrendszer rugalmasságát és lehetőségeit. Hiszem,
                hogy egy jó fejlesztő egyik legfontosabb tulajdonsága a folyamatos tanulás és alkalmazkodás, és ezt ebben a projektben is bizonyítottam.
            <br><br>
                Nagyon örülnék, ha lehetőséget kapnék arra, hogy nálatok kezdhessem el a karrieremet fejlesztőként.
                Izgatottan várom a lehetőséget, hogy tovább fejlődjek, tanuljak, és egy remek csapat tagjaként hozzájárulhassak a közös sikerekhez.
            </p>
            <br>
            <p style="font-weight: bold">Üdvözlettel,</p>
            <h2>Pethe Bálint</h2>
        </div>
    </div>
</div>
</body>
</html>
