<nav class="home-header">
    <section class="upper-header">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-outline-primary" style="position: absolute; right: 10px; ">
                <i class="fas fa-align-right"></i>
            </button>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="phone">(503)284-6447</a>
                </div>
                <div class="col-sm-4">
                    <a class="" href="<?php echo e(route('home.index')); ?>">
                        <img src="<?php echo $__env->yieldContent('logo-horizontal-1'); ?>" alt="SK Watercraft Rentals" class="brand" />
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="address">
                        250 SE Division Place
                        <br>
                        Portland, OR 97202
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="lower-header">
        <nav class="navbar navbar-expand-lg">

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item smaller <?php echo e(Request::is('home/index*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('home.index')); ?>">Home</a>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="rentalsDropdown" href="#">Rentals</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated-grow-in" aria-labelledby="rentalsDropdown">
                            <a href="<?php echo e(route('home.seadoo')); ?>" class="dropdown-item <?php echo e(Request::is('/rentals/sea-doo-rentals*') ? 'active' : ''); ?>">

                                SeaDoo Rentals
                            </a>
                            <a href="<?php echo e(route('home.boat')); ?>" class="dropdown-item <?php echo e(Request::is('/rentals/boat-rentals*') ? 'active' : ''); ?>">

                                Boat Rentals
                            </a>
                            <a href="<?php echo e(route('home.segway')); ?>" class="dropdown-item <?php echo e(Request::is('/rentals/sea-doo-rentals*') ? 'active' : ''); ?>">

                                Segway Rentals
                            </a>
                            <a href="<?php echo e(route('home.spyder')); ?>" class="dropdown-item <?php echo e(Request::is('/rentals/spyder-rentals*') ? 'active' : ''); ?>">

                                Spyder Rentals
                            </a>
                            <a href="<?php echo e(route('home.snowmobile')); ?>" class="dropdown-item <?php echo e(Request::is('/rentals/snowmobile-rentals*') ? 'active' : ''); ?>">

                                Snowmobile Rentals
                            </a>
                            <a href="<?php echo e(route('home.kayak')); ?>" class="dropdown-item <?php echo e(Request::is('/rentals/kayak-paddleboard-rentals*') ? 'active' : ''); ?>">

                                Kayak & Paddleboard Rentals
                            </a>
                        </div>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="operationsDropdown" href="#">Operation Info</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="operationsDropdown">
                            <a href="<?php echo e(route('home.about_us')); ?>" class="dropdown-item <?php echo e(Request::is('/operation-info/about-us*') ? 'active' : ''); ?>">
                                About Us
                            </a>
                            <a href="<?php echo e(route('home.maps')); ?>" class="dropdown-item <?php echo e(Request::is('/operation-info/map-hours*') ? 'active' : ''); ?>">
                                SK Rentals Maps & Hours
                            </a>
                        </div>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="customersDropdown" href="#">Customer Corner</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="customersDropdown">
                            <a href="<?php echo e(route('home.gallery')); ?>" class="dropdown-item <?php echo e(Request::is('/customer-corner/photo-gallery*') ? 'active' : ''); ?>">
                                Photo Gallery
                            </a>
                            <a href="<?php echo e(route('home.survey')); ?>" class="dropdown-item <?php echo e(Request::is('/customer-corner/customer-survey*') ? 'active' : ''); ?>">
                                Customer Survey
                            </a>
                            <a href="<?php echo e(route('home.testimonials')); ?>" class="dropdown-item <?php echo e(Request::is('/customer-corner/testimonials*') ? 'active' : ''); ?>">
                                Testimonials
                            </a>
                            <a href="<?php echo e(route('home.know')); ?>" class="dropdown-item <?php echo e(Request::is('/customer-corner/know-before-you-go*') ? 'active' : ''); ?>">
                                Know Before You Go
                            </a>
                        </div>
                    </li>
                    <li class="nav-item smaller <?php echo e(Request::is('/contact-us*') ? 'active' : ''); ?>">
                        <a class="nav-link no-border-right" href="<?php echo e(route('home.contact')); ?>">Contact Us</a>
                    </li>

                </ul>
            </div>
        </nav>
    </section>
</nav>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/components/home/home-header-sk.blade.php ENDPATH**/ ?>