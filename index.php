<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,900&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="query_tablet.css">
  <link rel="stylesheet" href="query_laptop.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://use.fontawesome.com/455b8c317a.js"></script>
  <link rel="shortcut icon" href="icon.ico">
  <title>Rolify TE</title>
</head>


<body>
  <div class="container">
    <header class="navbar">
      <div class="flex-magic">
        <a class="logo prime"><img src="logo.png" alt="Logo"></a>
      </div>
      <div class="flex-magic">
        <h2 class="nombre">Rolify</h2>
      </div>
        <div class="flex-magic">
          <a class="logo rand"><img src="unnamed.png" alt="Random"></a>
        </div>
    </header>

    <nav class="sidebar">
      <div class="flex-magic">
        <h3>Tables</h3>
        <i class="fa fa-angle-double-down dropdown" aria-hidden="true"></i>
        <br>
      </div>
      <div class="category">
        <h5>Starter</h5>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
        </ul>
        <br>
      </div>
      <div class="category">
        <h5>Weapons</h5>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
        </ul>
      </div>
      <div class="category">
        <h5>NPC</h5>
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
        </ul>
      </div>

    </nav>

    <main class="content">
      <div class="flex-cont">

        <?php
        for ($i=0; $i < 31 ; $i++) {
          echo
          '

          <div class="roll">
            <div class="flex-magic">
              <img src="" alt="imagen">
              <h4>Titulo</h4>
            </div>
          </div>
          ';
        }
         ?>

      </div>
    </main>

    <footer class="footer">

      <div class="flex-magic">
        <div class="rights">
          <hr>
          <p>Rights to the coding machine (Nico)+(Pancho)</p>
          <hr>
        </div>
      </div>

      <div class="flex-magic">
        <div class="masmagia">
            <a class="google social-icon"><i class="fa fa-google" aria-hidden="true"></i></a>
            <a class="github social-icon"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
            <a class="slack social-icon"><i class="fa fa-slack" aria-hidden="true"></i></a>
            <a class="youtube social-icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a class="reddit social-icon"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
        </div>
      </div>

    </footer>

  </div>

</body>

</html>
