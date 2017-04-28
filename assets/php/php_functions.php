<?php

    function page_title($page_title) {
        $title = $page_title;
        return $title;    
    }

    function page_description($page_description) {
        $description = $page_description;
        return $description;    
    }

    function home_url() {
        $home_url = "http://www.rockintoamerica.com/";
        echo $home_url;    
    }

    function header_alt() {
        $header_alt = "Rockin To America Logo";
        echo $header_alt;    
    }

    function content_title($content_title) {
        $content = $content_title;
        return $content;    
    }   

    function genres_menu($connection)  {
        $database = $connection;
        $field = $search_field;
        $value = $search_value;
        $get_genres = "SELECT * FROM `genre` ORDER BY `genre_name` ASC";
        $run_genres = mysqli_query($database, $get_genres);
        $genres_list = "";

        while ($row_genres=mysqli_fetch_array($run_genres)) {
            $genre_id = $row_genres['id'];
            $genre_name = $row_genres['genre_name'];
            $number_cds = $row_genres['number_cds'];
            $genres_list = $genres_list."<a href='genres.php?genre=$genre_name' id='genre' class='list-group-item submenu' data-genre='$genre_name'>$genre_name <span class='badge'>$number_cds</span></a>";
        }
        return $genres_list;     
    } 

    function artists_menu($connection) {
        $database = $connection;
        $get_artists = "SELECT * FROM `artist` ORDER BY `letter` ASC";
        $run_artists = mysqli_query($connection, $get_artists);
        $artists_list = "";

        while ($row_artists=mysqli_fetch_array($run_artists)) {
            $artist_id = $row_artists['id'];
            $artist_letter = $row_artists['letter'];
            $number_artists = $row_artists['number_artists'];
            $artists_list = $artists_list."<a href='#' id='artist' class='list-group-item submenu' data-artist='$artist_letter'> $artist_letter <span class='badge'>$number_artists</span></a>";
        }   
        return $artists_list;              
    }   

?>