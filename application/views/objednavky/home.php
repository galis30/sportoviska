<div class="container">

    <div class="jumbotron">
        <h1>Bootstrap Tutorial</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive,
            mobile-first projects on the web.</p>
    </div>
    <div class="container">
        <p>This is some text.</p>
        <p>This is another text.</p>
    </div>

    <html>
    <head>
        <link href="calendar.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <?php
    include 'calendar.php';

    $calendar = new Calendar();

    echo $calendar->show();
    ?>
    </body>
    </html>

</div><!-- /.container -->