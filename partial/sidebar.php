<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="index.php"><i class="la la-home"></i><span class="menu-title"
                                                                                       data-i18n="nav.dash.main">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-television"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">Category</span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        <?php
                        include 'DB_CONNECTION.php';
                        $query = "select * from category";
                        $result = mysqli_query($connection, $query);
                        echo mysqli_num_rows($result);
                        ?>
                    </span></a>

                <ul class="menu-content">
                    <li><a class="menu-content" href="addCategory.php"
                           data-i18n="nav.templates.horz.classic">Add New Category</a>
                    </li>
                    <li><a class="menu-content" href="show_category.php"
                           data-i18n="nav.templates.horz.top_icon">Show All Category</a>

                </ul>
            </li>
        </ul>
        </li>


    </div>
</div>
