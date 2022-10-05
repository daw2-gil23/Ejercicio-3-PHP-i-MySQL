<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Harry Potter y la piedra filosofal", 9, 2001, 7, 8),
        (5, "Spider-Man: No Way Home", 1, 2019, 9, 10),
        (6, "How to Train Your Dragon 3", 1, 2019, 1, 11)';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9, "Magia"), 
        (10, "Romance"),
        (11, "Musical")';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the people table
$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Daniel Radcliffe", 1, 0),
        (8, "Chris Columbs", 0, 1),
        (9, "Tom Holland", 1, 0),
        (10, "Jon Watts", 0, 1),
        (11, "Dean DeBlois", 0, 1)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>
