<div class="col-lg-12 col-md-12 col-sm-6">
    <div class="list-group sidebarmenu sidebaritem">
        <div  class="list-group">
            <a href="#genres" class="list-group-item sidebarmenu" data-toggle="collapse"> <span class="sidebarheader">Genres</span></a>
            <div class="collapse pos-absolute" id="genres">
                <?php 
                	echo genres_menu($connection); 
                ?>
            </div>
        </div>
    </div>
</div>