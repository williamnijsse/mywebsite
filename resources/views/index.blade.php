<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('/css/home.css') }}">
        {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css?family=Blinker:300,400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <title>Home</title>
    </head>
    <body>
        <div id="menu">
            <ul class="list-items">
                <li><a href="#home" class="home">Home</a></li>
                <li><a href="#about-me">About me</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div id="menu-button">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div>
            </div>
        </div>

        <h1 class="headline"><a name="about-me">HIER MOET EEN GOEDE HEADLINE KOMEN</a></h1>

        <div id="profile-section">
            <img src="/images/profile_picture.png" alt="profile picture" class="profile-picture">
            <div class="profile-description">
                <h3>Hier komt een kop</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, tempora voluptatibus suscipit perferendis odit ad! Dolore enim facere cum nulla tenetur ducimus odit velit unde? Repellendus, quo! Iusto perferendis doloremque minima voluptatem obcaecati deleniti sit. Ratione suscipit, debitis quidem aut animi neque est maiores placeat fugiat magni dolorum, dolores libero.
                </p>
            </div>
        </div>
        <div id="school-section">
            <div class="school-description">
                <h3 class="school-title">Hier komt misschien een kop?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, aliquam labore explicabo quaerat ullam maiores dignissimos tempora quod perspiciatis aperiam harum tenetur omnis, doloribus debitis rem recusandae nesciunt! Quo, mollitia!
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus rem molestiae, voluptas cupiditate consequatur, exercitationem, aspernatur ea placeat commodi veritatis vitae magnam ipsam! Autem ducimus eveniet ullam architecto. Labore, tempore.
                </p>
            </div>
            <img src="/images/timeline2.png" alt="Timeline" class="timeline">
        </div>

        <h2 class="portfolio-title"><a name="projects">Portfolio</a></h2>

        <div id="projects-section">
            <div id="card-container">
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

        <h2 class="contact-title"><a name="contact">Contact</a></h2>

        <div id="contact-section">
            <form class="contact-form">
                <input type="text" placeholder="Voor -en achternaam" id="nameInput" name="nameInput" required>
                <input type="email" placeholder="tekst@tekst.nl" id="emailAddressInput" name="nameAdressInput" required>
                <textarea placeholder="Uw bericht" name="textMessageInput" id="textMessageInput" required></textarea>
                <button type=submit class="contact-button">Verzenden</button>
            </form>
        </div>
        <div id="footer">
            &copy William Nijsse 2019
        </div>
    </body>
    <script type="text/javascript" src={{('js/main.js')}}></script>
</html>