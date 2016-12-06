<?php
require 'functions.php';

$data = get_data();
?><!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Strângem semnături pentru ca Uniunea Salvați România (USR) să candideze la alegerile parlamentare din 11 decembrie 2016. Ne vei găsi pe buletinul de vot doar dacă semnezi pentru noi!">
    <meta name="author" content="USR">
    <meta property="og:url" content="https://semneaza.usr.ro/">
    <meta property="og:title" content="Începe curățenia Parlamentului cu o semnătură!">
    <meta property="og:description" content="Strângem semnături pentru ca Uniunea Salvați România (USR) să candideze la alegerile parlamentare din 11 decembrie 2016. Ne vei găsi pe buletinul de vot doar dacă semnezi pentru noi!">
    <meta property="og:image" content="https://semneaza.usr.ro/assets/app/img/semneaza.jpg">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.ico" rel="icon">
    <title>USR &middot; Începe curățenia Parlamentului cu o semnătură!</title>
    <link href="https://code.cdn.mozilla.net/fonts/fira.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="assets/vendor/jvectormap/jquery-jvectormap.css" rel="stylesheet">
    <link href="assets/app/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron jumbotron-primary">
      <div class="container">
        <div class="media media-brand">
          <div class="media-left">
            <a href="https://semneaza.usr.ro/">
              <img class="media-object" src="assets/app/img/logo.png" alt="USR">
            </a>
          </div>
          <div class="media-body">
            <h1>Începe curățenia Parlamentului cu o semnătură!</h1>
          </div>
          <div class="media-right">
            <a class="btn btn-inverted" href="https://www.nicusordan.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'doneaza')">Donează</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="maps">
              <div class="map map-ro">
                <div class="label">Click pentru situația pe regiuni</div>
                <div class="embed-responsive embed-responsive-4by3">
                  <div id="map-ro"></div>
                </div>
                <div class="label">În țară</div>
              </div>
              <div class="map map-diaspora">
                <div id="map-diaspora"></div>
                <div class="label">În diaspora</div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>Am finalizat strângerea de semnături pentru ca Uniunea Salvați România (USR) să poată candida la <strong>alegerile parlamentare din 11 decembrie 2016.</strong></p>
                <p>Ne-am fixat ca obiectiv strângerea a 200.000 de semnături şi la început ni s-a părut greu, dar cu ajutorul dumneavoastră ne-am depășit obiectivul şi am ajuns la <strong>350.781 de semnături!</strong></p>
                <p>Mulţumim tuturor celor care au semnat și mai ales tuturor celor care au strâns semnături pentru noi!</p>
              </div>
              <div class="panel-footer">
                <a class="btn btn-default" href="https://usr.ro/" target="_blank" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'continuam_usr')">
                  <span class="glyphicon glyphicon-menu-right"></span>
                  Continuăm mai departe împreună!
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="statistics">
            <div class="statistic statistic-primary">
              <div class="value" id="countdown-days">00</div>
              <div class="label">Zile</div>
            </div>
            <div class="statistic statistic-separator">
              <div class="value">:</div>
            </div>
            <div class="statistic statistic-secondary">
              <div class="value" id="countdown-hours">00</div>
              <div class="label">Ore</div>
            </div>
            <div class="statistic statistic-separator">
              <div class="value">:</div>
            </div>
            <div class="statistic statistic-secondary">
              <div class="value" id="countdown-minutes">00</div>
              <div class="label">Minute</div>
            </div>
            <div class="statistic statistic-separator">
              <div class="value">:</div>
            </div>
            <div class="statistic statistic-secondary">
              <div class="value" id="countdown-seconds">00</div>
              <div class="label">Secunde</div>
            </div>
          </div>
          <div id="progres-semnaturi"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <ul class="media-list">
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-semneaza.png" alt="Semnează">
              </div>
              <div class="media-body">
                <h3 class="media-heading">Semnează</h3>
                <p>Imprimă formularul folosind butonul de mai sus şi completează-l conform instrucțiunilor, folosind date din cartea ta de identitate. La final semnează formularul, doar aşa este considerată validă intrarea.</p>
              </div>
            </li>
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-spune-prietenilor.png" alt="Spune-le prietenilor">
              </div>
              <div class="media-body">
                <h3 class="media-heading">Spune-le familiei și prietenilor!</h3>
                <p>Ne trebuie cât mai multe semnături, aşa că te rugăm să vorbeşti cu prietenii, familia şi vecinii tăi să completeze şi ei formularul. Semnăturile lor trebuie să fie originale; nu semnaţi în locul altei persoane.</p>
                <p>
                  <a class="btn btn-facebook" href="https://www.facebook.com/sharer.php?u=https://semneaza.usr.ro/" target="_blank">
                    <img src="assets/app/img/logo-facebook-inverted.png" alt="Facebook">
                    Distribuie
                  </a>
                </p>
              </div>
            </li>
            <li class="media">
              <div class="media-left">
                <img class="media-object" src="assets/app/img/icon-trimite.png" alt="Trimite">
              </div>
              <div class="media-body text-left">
                <h3 class="media-heading">Trimite</h3>
                <p>Formularele completate trebuie să ajungă în posesia noastră <strong>până pe 20 octombrie </strong> (ghidul pentru <a href="http://usb.ro/wp-content/uploads/2016/10/Ghid-strangere-semnaturi-diaspora.pdf" target="_blank">diaspora aici</a>). Poţi face asta în două feluri:</p>
                <ul class="list list-checkbox">
                  <li class="checked">
                   Adu personal petiția la unul din corturile de campanie ale USR (<a href="#corturi" data-toggle="modal" role="button">vezi locațiile noastre</a>) sau contactează un reprezentat al USR din țară pentru a le prelua (<a href="#contact" data-toggle="modal" role="button">vezi persoanele de contact</a>).
                  </li>
                  <li class="checked">
                    Trimite GRATUIT formularul/formularele în original prin Poșta Română, serviciul de corespondenţă cu taxe preplătite (<a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-container="body" data-placement="auto" data-html="true" data-content="&lt;p&gt;Atunci când sigilati plicul poştal, pe partea unde aţi trecut ca destinatar sediul central al USR, puneţi în dreapta sus o mică etichetă (un sticker sau o foaie mică printată şi lipită) cu:&lt;/p&gt;&lt;div class=&quot;tag&quot;&gt;&lt;div class=&quot;value&quot;&gt;CR&lt;/div&gt; Taxe poștale preplătite&lt;/div&gt;">vezi detalii</a>) la sediul central al USR (<strong>Str. Carol Davila, Nr. 91, Parter, Ap. 1, Sector 5, 050453, București</strong>), sau adu-le personal în intervalul 10-20.
                  </li>
                </ul>
                <p>Atenție:</p>
                <ul class="list list-bulleted">
                  <li>Listele de semnături nu pot fi trimise prin poșta electronică;</li>
                  <li>Nu trimiteți copii ale listelor de semnături.</li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
            <div class="panel-body">
              <div class="media">
                <div class="media-body">
                  <p><strong>Fiecare semnătură este o investiție într-un viitor mai bun pentru această țară și o speranță că și oamenii buni pot ajunge în Parlament.</strong></p>
                  <p>Mulțumim!</p>
                </div>
                <div class="media-right media-middle">
                  <a class="btn btn-default" href="https://www.nicusordan.ro/doneaza/" target="_blank" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'doneaza')">
                    <span class="glyphicon glyphicon-menu-right"></span>
                    Donează acum
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="follow-us">
            <p class="text-muted">Urmărește-ne și pe:</p>
            <ul class="list-inline">
              <li>
                <a class="facebook" href="https://www.facebook.com/Uniunea-Salva%C8%9Bi-Rom%C3%A2nia-1058116737612843/" target="_blank">
                  <img src="assets/app/img/logo-facebook.png" alt="Facebook">
                  Facebook
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="social-media">
      <a class="facebook" href="https://www.facebook.com/sharer.php?u=https://semneaza.usr.ro/" target="_blank">
        <img src="assets/app/img/logo-facebook-inverted.png" alt="Facebook">
        Distribuie
      </a>
    </div>
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact-label">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="contact-label">Persoane de contact</h4>
          </div>
          <div class="modal-body">
            <div class="row row-three-columns">
              <div class="col-sm-6 col-md-4">
                <h4>Alba</h4>
                <dl><dt>Alba Iulia</dt><dd><ul class="list-unstyled"><li>Emil Comşa, 0724078129</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Arad</h4>
                <dl><dt>Arad</dt><dd><ul class="list-unstyled"><li>Vlad Cherchezan, 0728280286</li><li>Botoș Vlad, 0745339339</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Argeș</h4>
                <dl><dt>Pitești</dt><dd><ul class="list-unstyled"><li>Cosmin Mihăescu, 0723256244</li><li>Ion Mircescu, 0729426682</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Bacău</h4>
                <dl><dt>Bacău</dt><dd><ul class="list-unstyled"><li>Liviu Rusu, 0744123914</li><li>Mihai Gârba, 0744498055</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Bihor</h4>
                <dl><dt>Oradea</dt><dd><ul class="list-unstyled"><li>Alexandru Flora, 0723582129</li><li>Silviu Dehelean, 0744225391</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Bistrița-Năsăud</h4>
                <dl><dt>Bistrița</dt><dd><ul class="list-unstyled"><li>Lorand Toth, 0744579499</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Botoșani</h4>
                <p>Marcel Gheorghiţă, 0745824469, mgheorghita@gmail.com</p>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Brașov</h4>
                <dl><dt>Brașov</dt><dd><ul class="list-unstyled"><li>Cornel Sculean, 0741171780</li></ul></dd><dt>Făgăraș</dt><dd><ul class="list-unstyled"><li>Alexandru Ţarczali, 0765138353</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Brăila</h4>
                <dl><dt>Brăila</dt><dd><ul class="list-unstyled"><li>Radu-Octavian Englezu, 0746834419</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>București</h4>
                <dl><dt>Sectorul 1</dt><dd><ul class="list-unstyled"><li>Manuel Vieru, 0722233867</li></ul></dd><dt>Sectorul 2</dt><dd><ul class="list-unstyled"><li>Alin Arsu, 0727046890</li><li>Cristina Neagu, 0722286142</li></ul></dd><dt>Sectorul 3</dt><dd><ul class="list-unstyled"><li>Alexandru Vesa, 0756312238</li></ul></dd><dt>Sectorul 4</dt><dd><ul class="list-unstyled"><li>Cristian Matache, 0785810915</li><li>Sorin Ceacar, 0766751943</li></ul></dd><dt>Sectorul 5</dt><dd><ul class="list-unstyled"><li>Dragos Geamană, 0722609530</li></ul></dd><dt>Sectorul 6</dt><dd><ul class="list-unstyled"><li>Mihai Botez, 0763829093</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Buzău</h4>
                <dl><dt>Buzău</dt><dd><ul class="list-unstyled"><li>Valeriu Mocanu, 0733517127</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Caraș-Severin</h4>
                <dl><dt>Reșița</dt><dd><ul class="list-unstyled"><li>Ionuț Voinea, 0771550615</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Călărași</h4>
                <dl><dt>Călărași</dt><dd><ul class="list-unstyled"><li>Verman Daniela, 0766678626</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Cluj</h4>
                <dl><dt>Cluj-Napoca</dt><dd><ul class="list-unstyled"><li>Radu Boloveschi, 0723324617</li><li>Ovidiu Nistor, 0757988180</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Constanța</h4>
                <dl><dt>Constanţa</dt><dd><ul class="list-unstyled"><li>Răzvan Andrei, 0770475808</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Covasna</h4>
                <p>0726701994</p>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Dâmbovița</h4>
                <dl><dt>Târgovişte</dt><dd><ul class="list-unstyled"><li>Adrian Iordănescu, 0728003259</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Dolj</h4>
                <dl><dt>Craiova</dt><dd><ul class="list-unstyled"><li>Adrian Prisnel, 0723250885</li><li>Cosmin Stăicuţ, 0740279090</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Galați</h4>
                <dl><dt>Galați</dt><dd><ul class="list-unstyled"><li>Radu Oprea, 0723342410</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Giurgiu</h4>
                <dl><dt>Giurgiu</dt><dd><ul class="list-unstyled"><li>Raluca Duţu, 0734969744</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Gorj</h4>
                <dl><dt>Târgu Jiu</dt><dd><ul class="list-unstyled"><li>Marius Stroie, 0741156512</li><li>Nicolae Chilea, 0744696328</li></ul></dd><dt>Motru</dt><dd><ul class="list-unstyled"><li>George Vintilescu, 0722275005</li></ul></dd><dt>Bumbești-Jiu</dt><dd><ul class="list-unstyled"><li>Ioan Bucălae, 0761951986</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Harghita</h4>
                <p>0726701994</p>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Hunedoara</h4>
                <dl><dt>Hunedoara</dt><dd><ul class="list-unstyled"><li>Camelia Măhălean, 0733317010</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Ialomița</h4>
                <dl><dt>Slobozia</dt><dd><ul class="list-unstyled"><li>Cristina Iosif, 0730701141</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Iași</h4>
                <dl><dt>Iași</dt><dd><ul class="list-unstyled"><li>Mihai Lupu, 0742056155</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Ilfov</h4>
                <dl><dt>Bragadiru</dt><dd><ul class="list-unstyled"><li>Marius Călinescu, 0723762921</li></ul></dd><dt>Chiajna</dt><dd><ul class="list-unstyled"><li>Cornel Zainea, 0740022873</li></ul></dd><dt>Corbeanca</dt><dd><ul class="list-unstyled"><li>Jan Cardon, 0722437937</li></ul></dd><dt>Pantelimon</dt><dd><ul class="list-unstyled"><li>Lucian Zelincă, 0747070970</li></ul></dd><dt>Popești-Leordeni</dt><dd><ul class="list-unstyled"><li>Ciprian Necula, 0749123413</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Maramureș</h4>
                <dl><dt>Baia Mare</dt><dd><ul class="list-unstyled"><li>Dan Ivan, 0745398368</li><li>Iulian Mariş, 0722984841</li><li>Simona Petruț, 0744643348</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Mehedinți</h4>
                <dl><dt>Drobeta-Turnu Severin</dt><dd><ul class="list-unstyled"><li>Ştefania Ramona Homeag, 0753192547</li><li>Ilie Scarlat, 0754674783</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Mureș</h4>
                <dl><dt>Târgu-Mureş</dt><dd><ul class="list-unstyled"><li>Alex Ciobotar, +40757329889</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Neamț</h4>
                <dl><dt>Piatra Neamț</dt><dd><ul class="list-unstyled"><li>Ioan Ploşcaru, 0747437300</li></ul></dd><dt>Roman</dt><dd><ul class="list-unstyled"><li>Iulian Bulai, 0721389605</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Olt</h4>
                <dl><dt>Slatina</dt><dd><ul class="list-unstyled"><li>Silviu Anton, 0765558019</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Prahova</h4>
                <dl><dt>Ploiești</dt><dd><ul class="list-unstyled"><li>Dan Rădulescu, 0743323448</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Satu Mare</h4>
                <dl><dt>Satu Mare</dt><dd><ul class="list-unstyled"><li>Anca Sabou, 0745350977</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Sălaj</h4>
                <dl><dt>Zalău</dt><dd><ul class="list-unstyled"><li>Cosmin-Vasile Ardelean, 0747696764 coco_ancada@yahoo.com</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Sibiu</h4>
                <dl><dt>Sibiu</dt><dd><ul class="list-unstyled"><li>Dan Adrian Ghiță, 0752177272</li><li>Raluca Amariei, 0721554693</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Suceava</h4>
                <dl><dt>Suceava</dt><dd><ul class="list-unstyled"><li>Radu Ciornei 0732914661 radutudorciornei@gmail.com</li><li>Mihai Maierean 0745823960 maiereanmihai@yahoo.com</li><li>Teodora Munteanu 0744799646 teom62@yahoo.com</li></ul></dd></dl>
                <dl><dt>Rădăuţi</dt><dd><ul class="list-unstyled"><li>Dan Vatra 0745140276 danvatra@gmail.com</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Teleorman</h4>
                <dl><dt>Alexandria</dt><dd><ul class="list-unstyled"><li>Constanţa Duminică, 0769410020</li><li>Nicuşor Lina, 0768334501</li></ul></dd><dt>Turnu Măgurele</dt><dd><ul class="list-unstyled"><li>Sergiu Iordan, 0723211595</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Timiș</h4>
                <dl><dt>Timișoara</dt><dd><ul class="list-unstyled"><li>Luminița Dolângă, 0754097620</li><li>Sorin Şipoş, 0722469508</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Tulcea</h4>
                <dl><dt>Tulcea</dt><dd><ul class="list-unstyled"><li>Marian Zamfir, 0749075888</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Vaslui</h4>
                <dl><dt>Bârlad</dt><dd><ul class="list-unstyled"><li>Mihai Bolea 0741933502 mihaibolea49@yahoo.com</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Vâlcea</h4>
                <dl><dt>Râmnicu Vâlcea</dt><dd><ul class="list-unstyled"><li>Lucian Constantin Mîrzoiu, 0771441467</li><li>Eduard Rădulescu, 0752310000</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Vrancea</h4>
                <dl><dt>Focșani</dt><dd><ul class="list-unstyled"><li>Cristian Ionascu, 0741157931</li></ul></dd></dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <hr>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Diaspora</h4>
                <p><a href="mailto:diaspora@usr.ro">diaspora@usr.ro</a></p>
                <p><a href="http://www.facebook.com/USR-Diaspora-1793510380925494/">Facebook: USR Diaspora</a></p>
                <p>Citiţi <a href="http://usb.ro/wp-content/uploads/2016/10/Ghid-strangere-semnaturi-diaspora.pdf" target="_blank">ghidul de completare corectă</a> al formularelor pentru diaspora!</p>
                <dl><dt>Republica Moldova</dt><dd><ul class="list-unstyled"><li>Alexandru Gâdiuţă, +37368792566</li></ul></dd></dl>
                <dl><dt>Italia</dt><dd><ul class="list-unstyled"><li>Cerasella Ponta (Roma), +393280947327</li><li>Corina Cristina Velniciuc (Roma), +393285521723</li></ul></dd></dl>
                <dl><dt>Spania</dt><dd><ul class="list-unstyled"><li>Iulian Lorincz, +34605363124</li><li>Anca Boldeanu (Barcelona), +34689070453, <a href="mailto:ancaboldeanu@yahoo.com">ancaboldeanu@yahoo.com</a></li></ul></dd></dl>
                <dl><dt>Marea Britanie</dt><dd><ul class="list-unstyled"><li>Radu Mircea, +447860162346</li><li>Carmel Ciurdas, +447538776519</li></ul></dd></dl>
                <dl><dt>Scoţia</dt><dd><ul class="list-unstyled"><li>Adela Miron, +447796990302</li></ul></dd></dl>
                <dl><dt>Germania</dt><dd><ul class="list-unstyled"><li>Eliza Marin, +4915201363721</li><li>Crina Petec Călin, +4901724005476</li></ul></dd></dl>
                <dl><dt>Franța</dt><dd><ul class="list-unstyled"><li>Emanuel Stoica (Paris), +33782746399</li><li>Andrei Corbu (Paris), +33675335422</li><li>Iulian Rotaru (Lyon), +33612922890</li></ul></dd></dl>
                <dl><dt>S.U.A</dt><dd><ul class="list-unstyled"><li>Camil Golub (NY), +13472396714</li><li>Mircea Alex (NY), +19149604179</li><li>Matei Ioniță (Philadephia), +12154597574</li><li>Ioana Slăniceanu (LA), +13109277195</li></ul></dd></dl>
                <dl><dt>Canada</dt><dd><ul class="list-unstyled"><li>Doina Simion (Montreal), +15148569114</li></ul></dd></dl>
                <dl><dt>Belgia</dt><dd><ul class="list-unstyled"><li>Mardale Cintzia-Angelina, +33652675438</li><li>Luana Bidașcă, +32498785021</li></ul></dd></dl>
                <dl><dt>Austria</dt><dd><ul class="list-unstyled"><li>Leonard Stoica, +436764938714</li></ul></dd></dl>
                <dl><dt>Elveția</dt><dd><ul class="list-unstyled"><li>Annamaria Kozma (Zürich), +41762174816</li><li>Codrin Alexandru (Zürich), +41795304999, <a href="mailto:grcodal@gmail.com">grcodal@gmail.com</a></li><li>Dan Enache (Geneva), +33670177504</li></ul></dd></dl>
                <dl><dt>Luxemburg</dt><dd><ul class="list-unstyled"><li>Adrian Bardan, +352661223183, <a href="mailto:bardan.adrian@yahoo.com">bardan.adrian@yahoo.com</a></li></ul></dd></dl>
                <dl><dt>Olanda</dt><dd><ul class="list-unstyled"><li>Virgil Petre, +31628217749</li></ul></dd></dl>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Închide</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="corturi" tabindex="-1" role="dialog" aria-labelledby="corturi-label">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="corturi-label">Corturile de campanie ale USR</h4>
          </div>
          <div class="modal-body">
            <div class="row row-two-columns">
              <div class="col-sm-6 col-md-4">
                <h4>Arad</h4>
                <dl>
                  <dt>Arad</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Str. D. Bolintineanu nr. 5 parter (ARBIT AXC), Razvan Anghel, 0722343781, interval 9-17</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>București</h4>
                <dl>
                  <dt>Sector 1</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Metrou Piața Victoriei (intrarea pe Calea Victoriei, colţ cu Lascăr Catargiu) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                      <li>Metrou Aurel Vlaicu (ieşire pasaj metrou) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                      <li>Piaţa Domenii (în faţa Mega Image)</li>
                      <li>Metrou Pipera</li>
                      <li>Metrou Piaţa Romană - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                    </ul>
                  </dd>
                  <dt>Sector 2</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Piaţa Universităţii (pe partea cu Universitatea, staţia de troleibuz) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                      <li>Metrou Piaţa Iancului (intersectie Iancului cu Mihai Bravu, partea cu Raiffeisen Bank) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                      <li>Metrou Ştefan cel Mare (intersecţia cu Barbu Vacarescu)</li>
                      <li>Lacul Tei (intersecţia Blvd. Lacul Tei cu Maica Domnului, pe partea cu magazinul Domino)</li>
                    </ul>
                  </dd>
                  <dt>Sector 3</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Piaţa Unirii (Magazin Unirea, H&amp;M) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                      <li>Metrou Titan (ieşire Poşta Titan) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                    </ul>
                  </dd>
                  <dt>Sector 4</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Metrou Tineretului - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                      <li>Piaţa Sudului (ieşire metrou, lângă magazinul Big Berceni) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                    </ul>
                  </dd>
                  <dt>Sector 5</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Piaţa Unirii (Capăt tramvai 32) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                    </ul>
                  </dd>
                  <dt>Sector 6</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Metrou Lujerului (ieşire supermarket Cora) - Luni-Vineri 8-12, 16-20, Sâmbătă-Duminică 9-17</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Dâmbovița</h4>
                <dl>
                  <dt>Târgovişte</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Piaţa Tricolorului (platoul prefecturii, către Magazinul Muntenia) - zilnic 9-20</li>
                    </ul>
                  </dd>
                </dl>
              </div>
               <div class="col-sm-6 col-md-4">
                <h4>Constanţa</h4>
                <dl>
                  <dt>Constanţa</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Casa de Cultură, intrarea din Bulevardul Alexandru Lăpuşneanu - zilnic 12-20</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Vâlcea</h4>
                <dl>
                  <dt>Râmnicu Vâlcea</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Bulevardul Tineretului 6-8 (Complex Hermes - Cartierul Ostroveni) - Luni-Vineri 17-19, Sambata-Duminica 12-16</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Cluj</h4>
                <dl>
                  <dt>Cluj-Napoca</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Bulevardul Erorilor nr. 2 (vis-a-vis de clopot) - zilnic 8-19</li>
                      <li>Piaţa Mărăşti- Blvd. 21 Decembrie 1989 Nr. 133, vis-a-vis de cofetăria Nicola - zilnic 8-19</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Brașov</h4>
                <dl>
                  <dt>Brașov</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Livada Poștei, în față la Rectorat - zilnic 10:30-20</li>
                      <li>Modarom, la începutul străzii Republicii - zilnic 10:30-20</li>
                    </ul>
                  </dd>
                  <dt>Făgăraş</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>B-dul Unirii, în zona Magazinului Universal Negoiu - zilnic 10-16</li>
                      <li>B-dul Unirii, în faţa magazinului Germanos</li>
                      <li>Cartierul Tudor Vladimirescu, în faţa magazinului Flora</li>
                    </ul>
                  </dd>
                  <dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Sibiu</h4>
                <dl>
                  <dt>Sibiu</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Blvd. Mihai Viteazul, între fosta clădire Romtelecom şi magazinul Trans Agape - Luni - Vineri 17-20, Sâmbătă 8-14</li>
                      <li>Piaţa Unirii în faţa magazinului Dumbrava - Luni - Vineri (8-14, 17-20), Sâmbătă (14-20), Duminică (17-20)</li>
                      <li>Cartier Ştrand - Str. Bihorului în faţa magazinului Profi - Luni - Vineri (17-20), Sâmbătă (11-14)</li>
                      <li>Cartier Vasile Aaron - Str. Semaforului în faţa pieţei agroalimentare - Luni - Vineri (17-20), Sâmbătă (8-11)</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Teleorman</h4>
                <dl>
                  <dt>Turnu Măgurele</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Str. Mihai Bravu, nr 30, în fața magazinului Pentru</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Satu Mare</h4>
                <dl>
                  <dt>Satu Mare</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Str. Corneliu Coposu, Centrul Nou, în faţă la Centrul Comercial Someşul - zilnic 11-19</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Timiș</h4>
                <dl>
                  <dt>Timișoara</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Complex (Str. Socrates 2A) - zilnic între 10-19 </li>
                      <li>Restaurant Boema (Str. Florimund Mercy 1) - zilnic între 16-20</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Giurgiu</h4>
                <dl>
                  <dt>Giurgiu</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Str. Prof. Droc Barcian, lângă magazinul Orange</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Ilfov</h4>
                <dl>
                  <dt>Chiajna</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Intersecția dintre strada Tineretului și strada Rezervelor, vis a vis de Style Residence 2016.</li>
                    </ul>
                  </dd>
                  <dt>Popeşti Leordeni</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Soşeaua Berceni, Metrou Dimitrie Leonida.</li>
                    </ul>
                  </dd>
                  <dt>Bragadiru</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Soşeaua Alexandriei, rond Cristalului în faţa Magazinului Penny, staţia de autobuz Smârdan.</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Galaţi</h4>
                <dl>
                  <dt>Galaţi</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>La Potcoavă</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Bacău</h4>
                <dl>
                  <dt>Bacău</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Piaţa Tricolorului</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Hunedoara</h4>
                <dl>
                  <dt>Deva</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Casa de cultură - zilnic 10-12, 16-19</li>
                    </ul>
                  </dd>
                  <dt>Hunedoara</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>În faţa Cofetăriei Jasmin - zilnic 17:30-20</li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="col-sm-6 col-md-4">
                <h4>Caraş-Severin</h4>
                <dl>
                  <dt>Reşiţa</dt>
                  <dd>
                    <ul class="list-unstyled list-relaxed">
                      <li>Parcul Tricolorul, la trecerea de pietoni din faţa liceului de Arta, pe partea cu parcul</li>
                    </ul>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Închide</button>
          </div>
        </div>
      </div>
    </div>
    <script><?php printf('remoteData = %s;', json_encode($data)); ?></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/vendor/jquery/jquery.min.js"><\/script>')</script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/countdown/countdown.js"></script>
    <script src="assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/vendor/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/app/js/application.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-30235099-2', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
