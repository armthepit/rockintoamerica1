<div class="col-lg-3 col-md-3 col-sm-12">
    <div class="col-lg-12 col-md-12 col-sm-6">
        <div class="list-group sidebarmenu sidebaritem">
            <div  class="list-group">
                <a href="#genres" class="list-group-item sidebarmenu" data-toggle="collapse"> <span class="sidebarheader">Genres</span></a>
                <div class="collapse pos-absolute" id="genres">
                    <?php
                        $get_genres = "SELECT * FROM `genre` ORDER BY `genre_name` ASC";
                        $run_genres = mysqli_query($connection, $get_genres);

                        if($run_genres != "") {
                            console.log("records found");
                        } else {
                            console.log("no records");
                        }

                        while ($row_genres=mysqli_fetch_array($run_genres)) {
                            $genre_id = $row_genres['id'];
                            $genre_name = $row_genres['genre_name'];
                            $number_cds = $row_genres['number_cds'];
                            echo("<a href='#' id='genre' class='list-group-item submenu' data-genre='$genre_name'>$genre_name <span class='badge'>$number_cds</span></a>");
                        } 
                    ?>                      
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-6">
        <div class="list-group sidebarmenu sidebaritem">
            <div class="list-group sidebarmenu"> <a href="#artists" class="list-group-item sidebarmenu" data-toggle="collapse"><span class="sidebarheader">Artists</span></a>
                <div class="collapse pos-absolute" id="artists">
                    <?php
                        $get_artists = "SELECT * FROM `artist` ORDER BY `letter` ASC";
                        $run_artists = mysqli_query($connection, $get_artists);

                        while ($row_artists=mysqli_fetch_array($run_artists)) {
                            $artist_id = $row_artists['id'];
                            $artist_letter = $row_artists['letter'];
                            $number_artists = $row_artists['number_artists'];
                            echo("<a href='#' id='artist' class='list-group-item submenu' data-artist='$artist_letter'> $artist_letter <span class='badge'>$number_artists</span></a>");
                        } 
                    ?>   
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-6">
        <div class="list-group sidebarmenu sidebaritem">
            <div class="list-group sidebarmenu"> <a href="#other" class="list-group-item sidebarmenu" data-toggle="collapse"><span class="sidebarheader">Other</span></a>
                <div class="collapse pos-absolute" id="other">
                    <a href="#" class="list-group-item submenu">About Us</a>
                    <a href="#" class="list-group-item submenu">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix visible-sm"></div>
