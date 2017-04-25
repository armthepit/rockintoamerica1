<div class="col-lg-12 col-md-12 col-sm-6">
    <div class="list-group sidebarmenu sidebaritem">
        <div  class="list-group">
            <a href="#artists" class="list-group-item sidebarmenu" data-toggle="collapse"> <span class="sidebarheader">Artists</span></a>
            <div class="collapse pos-absolute" id="artists">
                <?php echo artists_menu($connection) ?>
            </div>
        </div>
    </div>
</div>