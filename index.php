<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Ontstoppingsdienst'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <h1 class="header__title"><?= $title ?></h1>
                    <div class="header__box">
                        <img class="header__img" src="./assets/img/csm_brauco-ruhr-rohrreinigung-privathaushalte_b27f866ad1.jpg" alt="" >
                        <img class="header__img header_displayNone" src="./assets/img/abflussreinigung.jpg" alt="" >
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
     <main class="main">
        <section class="availability24">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="availability24__box">
                            <p class="availability24__dscr">Wij staan 24/7 klaar om uw verstopping te verhelpen.</p>
                            <div class="availability24__inner">
                                <a class="Btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="services__box">
                            <h2 class="services__title">Leiding verstopt? Wat kunnen we doen?
                                Ontstoppingsdienst 24 Uur Service</h2>
                            <ul>
                                <li class="services__li">Riool Ontstoppen</li>
                                <li class="services__li">Camera inspectie</li>
                                <li class="services__li">Ontkalken</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clearSewer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="clearSewer__box">
                            <h2 class="clearSewer__title">Riool ontstoppen</h2>
                            <p class="clearSewer__dscr">Een verstopte riolering? Onze specialisten in de buurt ontstoppen zo snel mogelijk uw riolering met moderne hogedruktechnologie. Indien nodig, kunnen we met een camera ook een rioolinspectie uitvoeren. Dankzij deze inspectie ontdekken we de zwakke plekken van uw riool.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="unlockService">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="unlockService__title">Ontstoppingsdienst</h2>
                        <div class="unlockService__box">
                            <div class="unlockService__inner">
                                <img class="unlockService__img" src="./assets/img/1.png" alt="" >
                                <p class="unlockService__name">WC Ontstoppen</p>
                            </div>
                            <div class="unlockService__inner">
                                <img class="unlockService__img" src="./assets/img/2.png" alt="" >
                                <p class="unlockService__name">Gootsteen Ontstoppen</p>
                            </div>
                            <div class="unlockService__inner">
                                <img class="unlockService__img" src="./assets/img/3.png" alt="" >
                                <p class="unlockService__name">Riool Ontstoppen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="specialists">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="specialists__title">Onze Ontstoppingsspecialist in de Buurt</h2>
                        <div class="specialists__box">
                            <div class="specialists__inner">
                                <img class="specialists__img" src="./assets/img/11.jpg" alt="" >
                                <p class="specialists__name">Peeters M.</p>
                                <p class="specialists__dol">Riool Expert</p>
                            </div>
                            <div class="specialists__inner">
                                <img class="specialists__img" src="./assets/img/22.jpg" alt="" >
                                <p class="specialists__name">Janssens S.</p>
                                <p class="specialists__dol">WC Specialist</p>
                            </div>
                            <div class="specialists__inner">
                                <img class="specialists__img" src="./assets/img/33.jpg" alt="" >
                                <p class="specialists__name">Jacobs R.</p>
                                <p class="specialists__dol">Ontstoppingsspecialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="availability24">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="availability24__box">
                            <p class="availability24__dscr">Wij staan 24/7 klaar om uw verstopping te verhelpen.</p>
                            <div class="availability24__inner">
                                <a class="Btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="servicesAll">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="servicesAll__box">
                            <div class="servicesAll__inner">
                                <div class="servicesAll__left">
                                    <h2 class="servicesAll__title">Is uw doucheputje of badafvoer verstopt?</h2>
                                    <p class="servicesAll__txt">Douchepuntje ontstoppen? Verstoppingen van uw doucheputje en badafvoer ontstaan veelaldoor dameshygiëne als lichaamseigen vetten, lichaamshaar en grote hoeveelheden douchegel en shampoo.Deze verstoppingen zijn relatief eenvoudig te ontstoppen.
                                        Wij hebbenveel ervaring met badkamer verstoppingen en werken voornamelijk met vacuüm technieken, waarmee we de blokkades uit uw afvoer zuigen.
                                        Wacht niet langer. Plan een afspraakin, of bel ons direct op telefoonnummer 080 00 100 .In de meeste gevallen verhelpen nog de dag zelf het probleem.</p>
                                </div>
                                <div class="servicesAll__right">
                                    <img class="servicesAll__img" src="./assets/img/111.png" alt="" >
                                </div>
                            </div>
                            <div class="servicesAll__inner">
                                <div class="servicesAll__left">
                                    <h2 class="servicesAll__title">Is uw wc verstopt? Bel Loodgieter in de Buurt!</h2>
                                    <p class="servicesAll__txt">Heeft u last van een wc die verstopt is? En bent u op zoek naar een ontstoppingsbedrijf in de buurt die de wc kan ontstoppen? Dan bent u aan het juiste adres bij Breman Rioolservice. Al meer dan 50 jaar kloppen mensen bij ons aan voor het vakkundig ontstoppen van een wc, riool, afvoer of gootsteen. Wij staan bekend om onze snelle en vakkundige aanpak. Wilt u ook de hulp van ons ontstoppingsbedrijf? Dan kunt u contact opnemen en direct een afspraak maken.</p>
                                </div>
                                <div class="servicesAll__right">
                                    <img class="servicesAll__img" src="./assets/img/222.png" alt="" >
                                </div>
                            </div>
                            <div class="servicesAll__inner">
                                <div class="servicesAll__left">
                                    <h2 class="servicesAll__title">Uw dakgoot reiningen?</h2>
                                    <p class="servicesAll__txt">Is uw dakgoot verstopt? Vervuilde dakgoten leiden vaak tot kostbare ingrepenleiden, wanneer niet tijdig en snel wordt opgetreden tegen verstopte dakgoten en regenpijpen. Lekkagesachter de buitenmuren kunnen schimmel, houtrot en zelfs vorstschade ontstaan, wanneer het gaat vriezen en het water dat zich heeft genesteld in de muur uitzet. We adviseren om1 a 2 keer per jaar uw dakgoot te laten schoonmaken door een erkende reiniggingsspecialist.</p>
                                </div>
                                <div class="servicesAll__right">
                                    <img class="servicesAll__img" src="./assets/img/333.png" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comments">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="comments__box">
                            <div>
                                <span class="comments__star">★★★★★</span>
                                <span><span class="comments__name">Katja G</span> schrieb</span>
                            </div>
                            <p class="comments__comment">
                                "Deze mensen weten waar ze mee bezig zijn: professioneel, stipt en vriendelijk. Ik raad ze zeker aan."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="forms__wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 container">
                            <h2 class="forms__title">Kontaktieren Sie uns:</h2>
                            <div class="forms__box">
                                <form id="jq_form" class="mb-5 mt-3">
                                    <div class="my-0">
                                        <input class="form-control" placeholder="Vorname" name="jq_name" type="text">
                                        <div id="jq_name" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                        <div id="jq_phone" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Straße" name="jq_street" type="text">
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text">
                                    </div>
                                    <div class="my-4">
                                        <textarea rows="3" class="form-control" name="jq_text" placeholder="Nachricht"></textarea>
                                        <div id="jq_text" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div>
                                        <input class="btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button" type="submit" id="jq_submit" value="Senden">
                                    </div>
                                    <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde
                                        gesendet.</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="footer__box">
                        ©2022
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
</body>

</html>