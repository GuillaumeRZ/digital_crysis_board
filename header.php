<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Crisis Board</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/progress.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="assets/css/fonteffect.css">
  </head>

  <body>
    <div id="back"></div>
    <div id="front"></div>

    <svg viewBox="0 0 960 300">
    	<symbol id="s-text">
    		<text text-anchor="middle" x="50%" y="80%">Digital-Crisis</text>
    	</symbol>

    	<g class = "g-ants">
    		<use xlink:href="#s-text" class="text-copy"></use>
    		<use xlink:href="#s-text" class="text-copy"></use>
    		<use xlink:href="#s-text" class="text-copy"></use>
    		<use xlink:href="#s-text" class="text-copy"></use>
    		<use xlink:href="#s-text" class="text-copy"></use>
    	</g>
    </svg>

    <nav class="menu">
      <input type="checkbox" class="nav__cb" id="menu-cb"/>
      <div class="nav__content">
        <ul class="nav__items">
          <li class="nav__item">
            <span class="nav__item-text">
              <a href="index.php">Accueil</a>
            </span>
          </li>
          </li>
          <li class="nav__item">
            <span class="nav__item-text">
              <a href="https://tweetdeck.twitter.com/" target="_blank">TweetDeck</a>
            </span>
          </li>
        </ul>
      </div>
      <label class="nav__btn" for="menu-cb"></label>
    </nav>
