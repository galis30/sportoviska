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

   <!-- vytvorenie tabulky -->
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // sql to create table
    $sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

    </body>
    </html>

</div><!-- /.container -->