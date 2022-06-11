<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="utf-8">
  <meta content="telephone=no" name="format-detection">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" content="#1584f1">


  <title>Bizdevim - network for business</title>
  <meta name="description" content="Bizdevim - network for business">

  <meta property="og:url" content="https://bizdevim.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Bizdevim - network for business">
  <meta property="og:description" content="Bizdevim - network for business">
  <meta property="og:image" content="https://bizdevim.com/img/bizdevim.jpg">

  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://bizdevim.com/">
  <meta name="twitter:title" content="Bizdevim - network for business">
  <meta name="twitter:description" content="Bizdevim - network for business">
  <meta name="twitter:image" content="https://bizdevim.com/img/bizdevim.jpg">

  <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/img/favicon/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/img/favicon/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/img/favicon/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/img/favicon/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#1584f1">
  <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap&v=20220223222815"
    rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.min.css?v=2">
  <link rel="stylesheet" href="/css/main.css?v=2">
  <link rel="stylesheet" href="/css/fix.css?v=2">
</head>

<body class="page__body">
  <header class="page-header">
    <div class="page-header__container container">
      <a href="/" class="logo">
        <picture>
          <source srcset="/img/logo-mobile.png 1x, /img/logo-mobile@2x.png 2x" media="(max-width: 575px)">
          <img src="/img/logo.png" srcset="/img/logo.png 1x, /img/logo@2x.png 2x" alt="logo">
        </picture>
      </a>
    </div>
  </header>

  <main class="page-main">

    <section class="bizdevim">
      <div class="bizdevim__container container">
        <div class="bizdevim__top">
          <ul class="bizdevim__list list-reset">
            <li>Skype</li>
            <li>WhatsApp</li>
            <li>LinkedIn</li>
          </ul>
          <ul class="bizdevim__list list-reset">
            <li>Zoom</li>
            <li>Slack</li>
            <li>Bizdevim</li>
          </ul>
        </div>
        <h1 class="bizdevim__title">
          Bizdevim - network <br class="br-m"> for business
        </h1>
        <strong class="bizdevim__subtitle">
          Join future of networking
        </strong>
        <form action="#" class="form">
          <div class="form__box">
            <input class="input-reset form__input" id="waitlist_email" type="email" placeholder="Enter your Email"
              required>
            <button class="btn-reset form__btn" type="submit" onclick="insert_Waitlist()">Join the waitlist</button>
          </div>
        </form>
        <b class="bizdevim__suptitle">
          No more chaos
        </b>
        <p class="bizdevim__text">
          Bussiness in <del>a box</del> smartphone:
        </p>
      </div>
    </section>

  </main>
  <footer class="page-footer">
    <div class="container">
    <p class="bizdevim__text page-footer__text">
        Ask friends for invite get in
      </p>
      <div class="links">
        <a href="https://bizdevim.com" class="links__item link-reset">bizdevim.com</a>
        <a href="https://bizdev.im" class="links__item link-reset">bizdev.im</a>
        <a href="https://bdev.im" class="links__item link-reset">bdev.im</a>
      </div>
      <small class="copyright">
        © 2022 Bizdevim Time Development Software <span>|</span><br> All Rights Reserved
      </small>
    </div>
  </footer>
  <script>
    function insert_Waitlist() {
      var email = document.getElementById("waitlist_email").value;
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open("GET", "https://bizdevim.com/waitlist.php?email=" + email, false); // false for synchronous request
      console.log("https://bizdevim.com/waitlist.php?email=" + email);
      xmlHttp.send(null);
      if (xmlHttp.status == 200) {
        console.log("Done");
        console.log(xmlHttp.status + ': ' + xmlHttp.statusText);
        console.log("xmlHttp.responseText:" + xmlHttp.responseText);
        var element = document.getElementById("waitlist_email");
        var color = element.style.color;
        var align = element.style.textAlign;
        element.style.color = '#32a83e';
        element.style.textAlign = "center";
        if (parseInt(xmlHttp.responseText) > 0) {
          console.log("Thanks for joining!");
          element.value = "Thanks for joining!";
        } else if (xmlHttp.responseText == "-1") {
          console.log("Your Email already in waitlist!");
          element.value = "Your Email already in waitlist!";
        }
        setTimeout(() => {
          element.value = "";
          element.style.color = color;
          element.style.textAlign = align
        }, 2000);

      } else {
        console.log("None");
        console.log(xhr.status + ': ' + xhr.statusText);
      }
      return xmlHttp.responseText;
    }
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L21QX8EHBG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L21QX8EHBG');
</script>
</body>

</html>
<?php
//echo $_SERVER['REMOTE_ADDR'];
if(isset($_GET['ret']))
    if(isset($_GET['u']))
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, "http://api.timesoftware.pro/bizdevim/count_share/?u=".$_GET['u']."&ret=".$_GET['ret']);
        $output=curl_exec($ch);
        //echo $output;
        curl_close($ch);
    }
?>
