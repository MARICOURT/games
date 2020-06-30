<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']; ?>/css/style.css">
    <title>Games</title>
</head>
<body class="container d-flex flex-column justify-content-between">
    <header class="row justify-content-center">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg justify-content-center">
            <a class="navbar-brand" href="#">Games</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav justify-content-center">
                    <a class="nav-item nav-link text-center active" href="<?= $router->generate('route_home')?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link text-center" href="<?= $router->generate('route_board',['game' => 'snake'])?>">Snake</a>
                    <a class="nav-item nav-link text-center" href="<?= $router->generate('route_board',['game' => 'breackout'])?>">Breackout</a>
                    <a class="nav-item nav-link text-center" href="#">References</a>
                </div>
            </div>
        </nav>
    </header>
