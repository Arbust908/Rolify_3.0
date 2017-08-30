<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://use.fontawesome.com/455b8c317a.js"></script>
  <title>Rolify TE</title>
</head>


<body class="flex-cont">
  <div class="container">
    <header class="navbar">
      <div class="flex-magic">
        <img src="" alt="Logo">
      </div>
      <div class="flex-magic">
        <h2>Rolify</h2>
      </div>
        <div class="flex-magic">
          <img src="" alt="Random">
        </div>
    </header>

    <nav class="sidebar">
      <div class="category">
        <h3>Tables</h3>
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
  </div>

</body>

</html>
