<?php
session_start();
include('auth.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inbox - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/inbox.css">
    <style>
      .logo {
        font-size: 22px;
      }
    </style>
</head>

<body>
    <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand">
                <p><a class="navbar-item logo" href="painel.php"><strong>Welcome</strong>, <?php echo $_SESSION['nome']; ?></a></p>
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
			  <div class="navbar-end">
			  <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
           Account
        </a>
        <div class="navbar-dropdown">
          <a class="navbar-item">
             Dashboard
          </a>
          <a class="navbar-item">
            Profile
          </a>
          <a class="navbar-item">
            Settings
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="logout.php">
            Logout
          </a>
        </div>
       </div>
	  </div>
    </div>   
   </div>
    </nav>
    <div class="columns" id="mail-app">
        <aside class="column is-2 aside hero is-fullheight">
            <div>
                <div class="compose has-text-centered">
                    <a class="button is-danger is-block is-bold">
            <span class="compose">Compose</span>
          </a>
                </div>
                <div class="main">
                    <a href="#" class="item active"><span class="icon"><i class="fa fa-inbox"></i></span><span class="name">Inbox</span></a>
                </div>
            </div>
        </aside>
        <div class="column is-4 messages hero is-fullheight" id="message-feed">
            <div class="action-buttons">
                <div class="control is-grouped">
                    <a class="button is-small"><i class="fa fa-chevron-down"></i></a>
                    <a class="button is-small"><i class="fa fa-refresh"></i></a>
                </div>
                <div class="control is-grouped">
                    <a class="button is-small"><i class="fa fa-inbox"></i></a>
                    <a class="button is-small"><i class="fa fa-exclamation-circle"></i></a>
                    <a class="button is-small"><i class="fa fa-trash-o"></i></a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>Bulma Templates</strong>   
                </p>
                <p>
                    <a class="icon" href="https://github.com/BulmaTemplates/bulma-templates">
                        <i class="fa fa-github"></i>
                    </a>
                </p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@2.5.16/dist/vue.min.js"></script>
    <script src="../js/bulma.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js" integrity="sha256-QHdJObhDO++VITP6S4tMlDHRWMaUOk+s/xWIRgF/YY0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js" integrity="sha256-4PIvl58L9q7iwjT654TQJM+C/acEyoG738iL8B8nhXg=" crossorigin="anonymous"></script>
    
</body>

</html>