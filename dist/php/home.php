<!DOCTYPE html>
<html>
<head>
    <title>Star Cab</title>
    <meta name="description" content="Firma świadcząca transportowe i przewozowe na terenie miasta Wrocław oraz w Polsce">
    <meta name="keywords" content="transport osobowy, pasażerski, transport na terenie miasta Wrocław, transport krajowy w Polsce, transport hotelowy, usługi transportu i przewozu">
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
                <li><a class="home" href="./php/home.php">Strona główna</a></li>
                <li><a class="about_us" href="./php/about_us.php">O nas</a></li>
                <li><a class="tourist_services" href="./php/tourist_services.php">Turystyka</a></li>
                <li><a class="contact" href="./php/contact.php">Kontakt</a></li>
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
            <a href="./" lang="pl" hreflang="pl">PL</a>
        </div>
        <div class="switch_lang--en" aria-label="english language">
            <a href="/en/" lang="en" hreflang="en">EN</a>
        </div>
    </div>

    <header>
        <div class="background-img">
            <div class="motto">
                <h2 class="motto_header">Gdziekolwiek chcesz jechać</h2>
                <img class="logo" src="./images/logo.svg" alt="logo firmy">
            </div>
        </div>
    </header>

    <main id="content">

          <article id="home" class="column">
            <h2>Kim jesteśmy...</h2>
              <p>
                Zajmujemy się profesjonalnym przewozem
                pasażerskim od 15 lat.
                Doświadczeni kierowcy i najlepsze
                samochody są do dyspozycji
                naszych klientów.
                Nie boimy się rozmawiać po
                angielsku i niemiecku.
              </p>
          </article>
          <article id="home"  class="column">
            <h2>Dokąd jeździmy...</h2>
              <p>
                Z nami możesz pojechać praktycznie w każde miejsce,
                które tylko sobie zażyczysz.
                Musisz znaleź się jeszcze dzisiaj w Berlinie?
                Zadzwoń i zamów kierowcę!
                Potrzebujesz zabrać grupę kontrachentów na wycieczkę
                po okolicy? Zadzwoń i zorganizuj z nami
                transport dla większej liczby pasażerów!
              </p>
          </article>
          <article id="home"  class="column">
            <h2>Kiedy jeździmy...</h2>
              <p>
                Jesteśmy do dyzspozycji 24 godziny na dobę.
                Skontaktuj się drogą mailową a odpowiemy w
                ciągu doby.
                Jeśli podtrzebujesz transportu na teraz,
                zadzwoń bezpośrednio na numer podany w
                zakładce kontakt.
              </p>
          </article>
    </main>

        <button class="scroll_btn" aria-label="scroll up button">
            <img src="./images/chevron-up.svg" alt="^">
        </button>

    <footer class="footer">
        <div class="footer-content">
            <article class="footer-art">
                <h4>Adres</h4>
                    Star Cab <br>
                    Klaudia Dawidzińska <br>
                    ul. Polna 28A <br>
                    52-116 Iwiny <br>
                    NIP: 751 10 74 693 <br>
                </p>
            </article>
            <article class="footer-art">
                <h4>Dane kontaktowe</h4>
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