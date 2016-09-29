<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
<!--        <button type="button" class="btn btn-primary">Box</button><button type="button" class="btn btn-primary">Sites</button>-->
        <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="main-content.php" data-title="Admin Console"><i class="fa fa-link"></i> <span>Home</span></a></li>
            <li><a href="database.php" data-title="Database"><i class="fa fa-link"></i> <span>Database</span></a></li>
            <li><a href="object-cache.php" data-title="Object Cache"><i class="fa fa-link"></i> <span>Object Caches</span></a></li>
<!--            <li><a href="processvm.php" data-title="Process VM"><i class="fa fa-link"></i> <span>Process VM</span></a></li>-->
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Sites</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="site-add.php" data-title="Add New Site">Add New Site</a></li>
                    <?php $sites = json_decode(file_get_contents('/vagrant/pressboxx.json'), true)['sites']; array_walk(array_keys($sites), function($site_name){ printf('<li><a href="site.php?site_name=%1$s" data-title="Site Administration: %1$s">%1$s</a></li>', $site_name);});?>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
