<header class="musica-header home-page-header">
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="index.html" class="logo-brand">
                                <!--<img src="images/home/logo.png" class="img-responsive" alt="logo">-->
                            </a>
                        </div><!--
                        <span class="shop-icon">
                            <a href="cart.html"><i class="ion-bag"></i></a>
                            <span class="shop-count base-gradient-bg"><?php
                            if (isset($_COOKIE['cartitems'])) {
                                $cartitems = explode(" ", $_COOKIE['cartitems']);
                                $products=0;
                                foreach ($cartitems as $i) {
                                    $products++;
                                }
                                echo $products;
                            } else {
                                echo "0";
                            }
                            ?></span>-->
                        </span>
                        <nav id="easy-menu">
                            <div class="button">
                                <i class="fa fa-bars"></i>
                            </div>
                            <ul class="menu-list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="server.php">Server</a>
                                    <ul class="dropdown">
                                        <li><a href="server.php?cat=lxc">V-Server</a></li>
                                        <li><a href="server.php?cat=root">Root-Server</a></li>
                                        <li><a href="server.php?cat=game&game=none">Game-Server</a></li>
                                        <li><a href="server.php?cat=dedicated">Dedicated-Server</a></li>
                                    </ul>
                                </li>
                                <!--
                                <li><a href="blog.html">News</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">news</a></li>
										<li><a href="blog-detail.html">news Right Sidebar</a></li>
										<li><a href="blog-detail-left-sidebar.html">news left Sidebar</a></li>
										<li><a href="blog-detail-fullwidth.html">news Full width</a></li>
										<li><a href="blog-detail-audio-post.html">news audio post</a></li>
										<li><a href="blog-detail-gallery-post.html">news gallery post</a></li>
										<li><a href="blog-detail-map-post.html">news Map post</a></li>
										<li><a href="blog-detail-qoute-post.html">news qoute post</a></li>
										<li><a href="blog-detail-video-post.html">news Video post</a></li>
                                    </ul>
                                </li>
-->
                                <li><a style="cursor:pointer">Bewerben</a>
                                    <ul class="dropdown">
                                        <li><a href="apply.php?job=entwickler">Entwickler</a></li>
                                        <li><a href="apply.php?job=techniker">Techniker</a></li>
                                        <li><a href="apply.php?job=supporter">Supporter</a></li>
                                        <li><a href="apply.php?job=content">Content</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Kontakt</a></li>
                                <li><a href="/clientarea/login.php">Login</a></li>
                           </ul>
                       </nav>
                       <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div><!--/.menu-area-->
    </header>
