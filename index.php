<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">x

        <title>Iteem IE2</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Iteem IE2</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Exercice 1</a></li>
                        <li class="active"><a href="exo2.php">Exercice 2</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

            <div class="jumbotron">

                <h1 class="page-header"><?php echo'Hey it\'s a test !'; ?></h1>
                <?php echo 'Test'; ?>

            </div>

            <div>

                <h1 class="page-header">Un formulaire !</h1>

                <?php if (!empty($_GET)) {
                    echo '<div class="alert alert-info">';
                        echo '<h5>Valeurs envoyées :</h5>';
                        // On affiche une ligne par valeur
                        echo '<ul>';
                        foreach ($_GET as $val) {
                            echo '<li>';
                                // ça ecrit toutes les valeurs même si c'est des tableaux !
                                print_r($val);
                            echo '</li>';
                        }
                        echo '</ul>';
                    echo'</div>';
                } ?>

                <form method="GET" action="index.php" class="form" id="form1">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group">
                        <label form="prenom">Prénom</label>
                        <input type="text" class="form-control" name="prenom">
                    </div>
                    <div class="form-group">
                        <label form="age">Êtes-vous Majeur ?</label>
                        <div>
                            <input type="checkbox" name="age">
                        </div>
                    </div>
                    <div class="form-group">
                        <label form="histoire">Une histoire</label>
                        <textarea class="form-control" rows="3" name="histoire"></textarea>
                    </div>
                    <div class="form-group clearfix">
                        <button type="submit" class="btn btn-success pull-right">Envoyer</button>
                    </div>
                </form>

                <hr>
            </div>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </body>
</html>
