<!DOCTYPE html>

<!-- 
AS - List all tables information and options to interact with the database
-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Books</h2>
    <table>
        <tr>
            <th>Name:</th>
            <th>Year:</th>
            <th>Author:</th>
            <th>Publisher:</th>
            <th>Rating:</th>
            <th>Genre:</th>
            <th>&nbsp;</th>
        </tr>

        <?php foreach ($books as $book) : ?>
        <tr><?php echo $book['BookName'] ?> </tr>
        <tr><?php echo $book['Author'] ?> </tr>
        <tr><?php echo $book['ReleaseYear'] ?> </tr>
        <tr><?php echo $book['Publisher'] ?> </tr>
        <tr><?php echo $book['Rating'] ?> </tr>
        <tr><?php echo $book['BookGenre'] ?> </tr>
        <tr> <!-- AS - Update Function -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="update_book">
                    <input type="hidden" name="movie_ID" value="<?php echo $book['BookID'];?>">
                    <input type="submit" value="Update">
            </form>
        </tr>
        <tr> <!-- AS - Simple Delete Functionality -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="delete_book">
                    <input type="hidden" name="book_ID" value="<?php echo $book['BookID'];?>">
                    <input type="submit" value="Delete">
            </form>
        </tr>
        <?php endforeach ?>
        <form action = "index.php" method="post"> 
            <input type="submit" value="add_book"/>
        </form>
        <br>
        <h2>Movies</h2>
    <table>
        <tr>
            <th>Name:</th>
            <th>Year:</th>
            <th>Director:</th>
            <th>Publisher:</th>
            <th>Rating:</th>
            <th>Genre:</th>
            <th>&nbsp;</th>
        </tr>

        <?php foreach ($movies as $movie) : ?>
        <tr><?php echo $movie['MovieName'] ?> </tr>
        <tr><?php echo $movie['Director'] ?> </tr>
        <tr><?php echo $movie['ReleaseYear'] ?> </tr>
        <tr><?php echo $movie['Publisher'] ?> </tr>
        <tr><?php echo $movie['Rating'] ?> </tr>
        <tr><?php echo $movie['MovieGenre'] ?> </tr>
        <tr> <!-- AS - Update Function -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="update_movie">
                    <input type="hidden" name="movie_ID" value="<?php echo $movie['MovieID'];?>">
                    <input type="submit" value="Update">
            </form>
        </tr>
        <tr> <!-- AS - Simple Delete Functionality -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="delete_movie">
                    <input type="hidden" name="movie_ID" value="<?php echo $movie['MovieID'];?>">
                    <input type="submit" value="Delete">
            </form>
        </tr>
        <?php endforeach ?>
        <form action = "index.php" method="post"> 
            <input type="submit" value="add_game"/>
        </form>
        <br>
    </table>

    <h2>Movies</h2>
    <table>
        <tr>
            <th>Name:</th>
            <th>Year:</th>
            <th>Developer:</th>
            <th>Publisher:</th>
            <th>Rating:</th>
            <th>Genre:</th>
            <th>&nbsp;</th>
        </tr>

        <?php foreach ($games as $game) : ?>
        <tr><?php echo $game['GameName'] ?> </tr>
        <tr><?php echo $game['Developer'] ?> </tr>
        <tr><?php echo $game['ReleaseYear'] ?> </tr>
        <tr><?php echo $game['Publisher'] ?> </tr>
        <tr><?php echo $game['Rating'] ?> </tr>
        <tr><?php echo $game['GameGenre'] ?> </tr>
        <tr> <!-- AS - Update Function -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="update_game">
                    <input type="hidden" name="movie_ID" value="<?php echo $game['GameID'];?>">
                    <input type="submit" value="Update">
            </form>
        </tr>
        <tr> <!-- AS - Simple Delete Functionality -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="delete_game">
                    <input type="hidden" name="game_ID" value="<?php echo $game['GameID'];?>">
                    <input type="submit" value="Delete">
            </form>
        </tr>
        <form action = "index.php" method="post"> 
            <input type="submit" value="add_game"/>
        </form>
        <br>
        <?php endforeach ?>
    </table>
</body>
</html>