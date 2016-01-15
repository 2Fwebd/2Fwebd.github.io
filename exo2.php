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
                <li><a href="index.php">Exercice 1</a></li>
                <li class="active"><a href="exo2.php">Exercice 2</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="jumbotron">

        <h1 class="page-header"><?php echo'Exo 2 !'; ?></h1>

    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Divisible par 5 et/ou 3</h3>
            <ul>
                <?php // LOOP
                for($i = 1; $i <= 199; $i++) {
                    // Divisible par 3
                    if (!($i % 5) && !($i % 3)) {
                        echo '<li><strong>Fizz Buzz</strong></li>';
                    }
                    // Divisible par 5
                    elseif(!($i % 5)) {
                        echo '<li>Buzz</li>';
                    }
                    // Divisible par 5 et 3
                    elseif(!($i % 3)) {
                        echo '<li>Fizz</li>';
                    }
                    // Sinon on affiche
                    else {
                        echo '<li>' . $i . '</li>';
                    }
                } ?>
            </ul>
        </div>
        <div class="col-md-6">
            <h3>Nombres premiers</h3>
            <ul>
            <?php
            //http://stackoverflow.com/questions/16763322/a-formula-to-find-prime-numbers-in-a-loop
            function isPrime($num) {
                //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
                if($num == 1)
                    return false;

                //2 is prime (the only even number that is prime)
                if($num == 2)
                    return true;

                /**
                 * if the number is divisible by two, then it's not prime and it's no longer
                 * needed to check other even numbers
                 */
                if($num % 2 == 0) {
                    return false;
                }

                /**
                 * Checks the odd numbers. If any of them is a factor, then it returns false.
                 * The sqrt can be an aproximation, hence just for the sake of
                 * security, one rounds it to the next highest integer value.
                 */
                for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
                    if($num % $i == 0)
                        return false;
                }

                return true;
            }

            // On se sert de la fonction
            for($i = 1; $i <= 199; $i++) {
                // On trouve le prochain nombre premier
                if (isPrime($i)){
                    echo '<li>'.$i.'</li>';
                }
                // Test
            } ?>
        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
