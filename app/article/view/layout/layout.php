<html>
<head>
    <title>Articles</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- prod:css -->
<link rel="stylesheet" href="/asset/css/bootstrap.css" />
<link rel="stylesheet" href="/asset/css/article.css" />
<!-- endbuild -->
</head>

<body>
        <div class="jumbotron">
        <div class="container">
            <h1>Welcome to Tonis!</h1>
            <p>
                Tonis is a PSR-7 minimal and flexible web application framework built for simplicity and performance.
                Tonis is inspired by <a href="http://expressjs.com" target="_blank">Express</a> and uses
                <a href="http://github.com/zendframework/zend-stratigility" target="_blank">Stratigility</a> for the
                middleware pipeline.
            </p>
            <p>
                <a class="btn btn-primary btn-lg" href="http://docs.tonis.io" role="button">
                    Learn more &raquo;
                </a>
            </p>
        </div>
    </div>

    <div class="container">
        <?=$this->section('body')?>

        <hr>

        <footer>
            <p>&copy; Kyle Spraggs <?=date('Y')?></p>
        </footer>
    </div>

    <!-- prod:js -->
<script src="/asset/js/jquery.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>
<!-- endbuild -->
</body>
</html>
