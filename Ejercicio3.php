<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// select the movie titles and their genre after 1990
$query = 'SELECT
        m.movie_name , p1.people_fullname as director, p2.people_fullname as actor
    FROM
        movie m, people p1 , people p2
    where
        p1.people_id = m.movie_leadactor and p2.people_id = m.movie_director';

$result = mysqli_query($db, $query) or die(mysqli_error($db));

// show the results
echo '<table border="1">';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>