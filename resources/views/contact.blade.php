<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <title>Contact</title>
    </head>
    <body>
        <div id="header" class="contact-header">
            <div class="layer">
                {{-- <div id="title">
                    Hier moet een passende title komen
                </div> --}}
            </div>
        </div>
        <div id="container">
            <div id="menu">
                <ul>
                    <a href="/"><img src="/images/logo.png" alt="logo" class="logo"></a>
                    <li><a href='/'>Home</a></li>
                    <li><a href='/aboutMe'>Over mij</a></li>
                    <li><a href='/projects'>Projecten</a></li>
                    <li><a href='/contact' class="current">Contact</a></li>
                    <input type="text" placeholder="Zoeken" name="searchBarInput" id="searchbar">
                    <button type="submit" value="&#xf043;Input" class="fas fa-search" id="searchbutton"></button>
                </ul>
            </div>
            <div id="content">
                <h1>Hier moet een goede titel komen</h1>

                {{-- Form moet nog werkend gemaakt worden --}}
                <form class="contact-form">
                    {{-- <label>Voor -en achternaam</label> --}}
                    <input type="text" placeholder="Voor -en achternaam" id="nameInput" name="nameInput" required>
                    {{-- <label>Email adres</label> --}}
                    <input type="email" placeholder="tekst@tekst.nl" id="emailAddressInput" name="nameAdressInput" required>
                    {{-- <label>Bericht</label> --}}
                    <textarea  placeholder="Uw bericht" name="textMessageInput" id="textMessageInput" required></textarea>

                    <button type=submit>Verzenden</button>
                </form>
            </div>
            <div id="footer">
                <p>&copy William Nijsse 2019</p>
            </div>
        </div>
    </body>
    <script type="text/javascript" src={{('js/main.js')}}></script>
</html>