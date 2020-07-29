<!doctype html>
<html lang="cs">

<head>
    <title>Poděbrady</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/vlajka_podebrady_nav-icon.png">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigační lišta -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.html"><img src="img/znak_podebrad.gif" alt="Znak Poděbrad" style="height: 40px;" /></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Icon of Home -->
        <!--<a href="index.html">
            <button class="btn btn-outline-primary my-2 my-sm-0 text-white" type="submit">
                 <i class="fa fa-home text-white" aria-hidden="true"></i>
                </button>
        </a> -->
        <div class="collapse navbar-collapse btn-group" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <!-- Úvodní stránka -->
                <!--<li class="nav-item">
                    <a class="nav-link text-white" href="uvodni_stranka.html">Úvodní stránka</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link text-white" href="historie.html">Historie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="kultura.html">Kultura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="lazne.html">Lázně</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="turistika.html">Turistika</a>
                </li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Otestujte si znalosti</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Historický kvíz</a>
                        <a class="dropdown-item" href="mapa.html">Interaktivní mapa</a>
                    </div>
                </li>-->
            </ul>
            <!-- Hledací pole - search -->
            <!--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Hledaný text" />
                <button class="btn btn-outline-primary my-2 my-sm-0 text-white" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            </form>-->
            <!-- Hledací pole funguje pomocí vyhledávání Google -->
            <form class="form-inline my-2 my-lg-0" action="https://www.google.com/search" target="_blank">
                <input type="text" name="as_q" size="20" class="form-control mr-sm-2" placeholder="Hledaný text">
                <input type="hidden" value="www.google.cz">
                <button class="btn btn-outline-primary my-2 my-sm-0 text-white" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </nav>
    <header class="jumbotron jumbotron-fluid hlavni-stranka pozadi">
        <h1 class="display-3 p-5 bg-text">Poděbrady</h1>
    </header>
    <div class="container border mt-3 mb-3">
        <div class="row">
            <main class="col-lg-8">
                <section>
                    <h2>Lázeňské město</h2>
                    <h3>"Město našich srdcí"</h3>
                    <p>Jste už vyčerpáni z domácí a pracovní povinností? Hledáte místo, kde můžete hodit povinnosti za hlavu, relaxovat a užívat si dovolenou? <strong><u>Tak to jste zde správně!</u></strong></p>
                    <p>Město Poděbrady oplývá nejen kulturou, turistikou, parky, ale i lázněmi! Poděbrady nabízejí široký sortiment akcí, které zde můžete podniknou, od picknicu v parku, přes procházku nádhernou kolonádou až k turistickým atrakcím.</p>
                    <h3>Kam na výlet v Poděbradech?</h3>
                    <p>Historici se mohou těšit na rozmanitou historii, která měla velmi důležitou roli v českých dějinách. Děti zase na hřiště a zámeckou bílou paní. Sportovci si jistě nemohou nechat ujít dlouhé osvěžující cyklostezky kolem řeky Labe až
                        na soutok, kde na ně čeká příjemné překvapení. Rodiny s dětmi nebo senioři uvítají procházku nádhernou prosluněnou kolonádou s léčivými prameny, fontánami a množstvím soch, které obklopují nejen kolonádu, ale téměř celé Poděbrady.
                        Tak přijeďte a přesvědčte se na vlastní oči!</p>
                </section>
            </main>
            <aside class="col-lg-4">
                <h2>Poděbrady</h2>
                <h3>Kolonáda</h3>
                <img src="img/fontana.jpg" alt="Fontána" class="foto">
            </aside>
            <div class="col-lg-12">
                <p id="pro_vas"><strong>Poděbrady jsou tu pro Vás!</strong></p>
            </div>
            <div class="col-lg-12">
                <h2>Město Poděbrady se představuje</h2>
                <!--<blockquote class="block">
                    <p class="p"><u>Město se představuje</u></p>
                    <video class="video" controls>
                   <source src="video/mesto_podebrady.mp4" type="video/mp4">
               </video>
                </blockquote>-->

                <blockquote class="block">
                    <p class="p"><u>Město se představuje</u></p>
                    <!--<iframe class="iframe" src="https://www.youtube.com/embed/ozxzZPd79uE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed//ozxzZPd79uE' frameborder='0' allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </blockquote>
                <blockquote class="block">
                    <p class="p"><u>Hymna Poděbrad</u></p>
                    <!--<iframe class="iframe" src="https://www.youtube.com/embed/mXFElqBxJ68" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    <div class='embed-container'><iframe src='https://www.youtube.com/embed//mXFElqBxJ68' frameborder='0' allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </blockquote>
            </div>
        </div>
    </div>
    <footer>
        <div>
            <p class="text-white text-center p-5" id="zapati"><img src="img/znak_podebrad.gif" alt="Znak města Poděbrady" style="height: 40px;" /> &copy; Filip Híreš, 2020, <a href="rights.html" class="text-white">All Rights Reserved</a> <img src="img/cesky_lev.svg" alt="Státní České republiky" style="height: 40px;"
                /></p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/version.js"></script>
</body>

</html>