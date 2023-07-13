<?php require_once "./db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Oop 1 Movies</title>
</head>
<body>
    <div class="movie-container">
        <h1>Movie List</h1>

        <?php foreach ($clients as $client) { ?>
            <div>
                <h2><?php echo $client->name; ?></h2>
                <p>Genres: <?php echo implode(", ", $client->genres); ?></p>
                <p>Discount: <?php echo $client->discount; ?>%</p>
            </div>
        <?php } ?>
    </div>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 2rem 0;
    padding: 0;
    text-align: center;
}

h1 {
    color: #333;
    padding: 20px 0;
}

.movie-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.movie-container h2 {
    color: #333;
    margin-bottom: 5px;
}

.movie-container p {
    color: #666;
    margin-top: 0;
}
</style>