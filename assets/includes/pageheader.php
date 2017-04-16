<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 hidden-sm hidden-xs">
                <div class="well">
                    <img src="<?php home_url() ?>assets/images/logo.png" alt="<?php header_alt() ?>">
                </div>
            </div>
            <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="well">
                    <form method="get" action="#">
                        <div class="input-group">
                            <input onkeyup="mm_cleanSearch()" type="text" name="q" class="form-control input-search" placeholder="Search our music store" value="">
                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
	                        </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>