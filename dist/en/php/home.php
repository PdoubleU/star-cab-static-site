<!DOCTYPE html>
<html>
<head>
    <title>Star Cab</title>
    <meta name="description" content="Transport company website presenting transport services in Wroclaw">
    <meta name="keywords" content="shuttle service, transport service, shuttle in Wroclaw, hotel shuttle, city shuttle">
    <meta name="author" content="Piotr Witasik">
    <meta charset="UTF-8" content="text/html" lang="pl">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico">
</head>
<body>
    <nav class="nav-container">
        <div class="nav-container__inner">
            <p class="nav-header">Star Cab Wrocław</p>
            <ul class="top-nav">
                <li><a class="home" href="./php/home.php" target="_self">Home</a></li>
                <li><a class="about_us" href="./php/about_us.php" target="_self">About Us</a></li>
                <li><a class="tourist_services" href="./php/tourist_services.php" target="_self">Tourist Services</a></li>
                <li><a class="contact" href="./php/contact.php" target="_self">Contact</a></li>
            </ul>
            <button class="menu-btn" aria-label="open menu">
                <span class="menu-btn__box">
                    <span class="menu-btn__inner"></span>
                </span>
            </button>
        </div>
    </nav>

    <div id="switch_lang" class="switch_lang">
        <div class="switch_lang--pl" aria-label="polish language">
            <a href="../" lang="pl" hreflang="pl" target="_self">PL</a>
        </div>
        <div class="switch_lang--en" aria-label="english language">
            <a href="/en/" lang="en" hreflang="en" target="_self">EN</a>
        </div>
    </div>

    <header>
        <div class="background-img">
            <div class="motto">
                <h2 class="motto_header">Wherever you need to go</h2>
                <img class="logo" src="./images/logo.svg" alt="company's logo">
            </div>
        </div>
    </header>

    <main id="content">

        <article id="home" class="column">
            <h2>Who are we...</h2>
                <p>
                We have been on the market over 15 years.
                These time we have transported many customers in Wrocław, from Wrocław and to Wrocław.
                You can trust us.
                </p>
        </article>
        <article id="home"  class="column">
            <h2>Where do we go...</h2>
                <p>
                Whit us you can reach almost each place in Europe.
                </p>
        </article>
        <article id="home"  class="column">
            <h2>When do we drive...</h2>
                <p>
                We are available 24/7, holidays and weekends include.
                </p>
        </article>

    </main>

        <button class="scroll_btn" aria-label="scroll up button">
            <img src="./images/chevron-up.svg">
        </button>

    <footer class="footer">
        <div class="footer-content">
            <article class="footer-art">
                <h4>Adress</h4>
                    Star Cab <br>
                    Klaudia Dawidzińska <br>
                    ul. Polna 28A <br>
                    52-116 Iwiny <br>
                    NIP: 751 10 74 693 <br>
                </p>
            </article>
            <article class="footer-art">
                <h4>Contact</h4>
                <br>
                    Telefon: +48 605 434 141 <br> <br>
                    E-mail: info@starcab.wroclaw.pl <br>
                </p>
            </article>
        </div>
        <div class="signature">
            <p>Website author: Piotr Witasik / PdoubleU &#169; 2020</p>
        </div>
    </footer>
</body>
</html>