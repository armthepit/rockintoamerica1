<!-- This the navigation bar. -->
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
                Placeholder
            </a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-binoculars" aria-hidden="true"></i> Browse By 
                    <b class = "caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">Artists</a></li>
                    <li><a href="#">Genres</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> My Account</a></li>
            <li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Sign Up</a></li>
            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a></li>
            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>
            <form method="get" action = "search_results.php" enctype="multipart/form-data" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-binoculars" aria-hidden="true"></i> Search</button>
            </form>            
        </ul>
    </div>
</nav>