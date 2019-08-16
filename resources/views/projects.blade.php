<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <title>Projects</title>
    </head>
    <body>
        <div id="header" class=" projects-header">
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
                    <li><a href='/projects' class="current">Projecten</a></li>
                    <li><a href='/contact'>Contact</a></li>
                    <input type="text" placeholder="Zoeken" name="searchBarInput" id="searchbar">
                    <button type="submit" value="&#xf043;Input" class="fas fa-search" id="searchbutton"></button>
                </ul>
            </div>
            <div id="content">
                <h1>Hier moet een goede titel komen</h1>
                <div id="cardContainer">
                    <div id="card1" class="card">
                        <div class="card-body">
                            <div class="card-layer">
                                <a href="#"><div class="read-more-button">Lees meer</div></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-title">Title</div>
                            <div class="div-line"></div>
                            <div class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, velit. Lorem ipsum dolor sit amet.</div>
                        </div>
                    </div>
                    <div id="card2" class="card">
                        <div class="card-body">
                            <div class="card-layer">
                                <a href="#"><div class="read-more-button">Lees meer</div></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-title">Title</div>
                            <div class="div-line"></div>
                            <div class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, velit. Lorem ipsum dolor sit amet.</div>
                        </div>
                    </div>
                    <div id="card3" class="card">
                        <div class="card-body">
                            <div class="card-layer">
                                <a href="#"><div class="read-more-button">Lees meer</div></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-title">Title</div>
                            <div class="div-line"></div>
                            <div class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, velit. Lorem ipsum dolor sit amet.</div>
                        </div>
                    </div>
                    <div id="card4" class="card">
                        <div class="card-body">
                            <div class="card-layer">
                                <a href="#"><div class="read-more-button">Lees meer</div></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-title">Title</div>
                            <div class="div-line"></div>
                            <div class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, velit. Lorem ipsum dolor sit amet.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">
                <p>&copy William Nijsse 2019</p>
            </div>
        </div>
    </body>
    <script type="text/javascript" src={{('js/main.js')}}></script>
</html>