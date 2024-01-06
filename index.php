<?php
    $phpCreationDate = new DateTime("1993-05-02");
    $today = new DateTime();
    $phpPeriod = date_diff($phpCreationDate, $today);
    //var_dump($phpPeriod);

    // var_dump($_SERVER['REQUEST_URI']);
    // echo ($_SERVER['SCRIPT_NAME'] == '/index.php') ? 'active' :'';
?>

<!doctype html>
<html lang="en">
<!-- head section included from file head.php -->   
<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/menu.php'); ?>
    <div class="container">
        <h1>Learning PHP</h1>
        <p>Welcome to the <strong>Learning PHP</strong> home page!</p>
        <p>Select a link above to start learning. about a language with <?= $phpPeriod->y ?> years of heritage!</p>

    </div>
</body>

</html>