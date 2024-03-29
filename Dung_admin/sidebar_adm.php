<?php 
echo "<header class='navbar navbar-fixed'>
            <div class='navbar--header'> <a href='index.php' class='logo'> <img src='assets/img/logo.png' alt='> </a> <a href='#' class='navbar--btn' data-toggle='sidebar' title='Toggle Sidebar'> <i class='fa fa-bars'></i> </a> </div><a href='#' class='navbar--btn' data-toggle='sidebar' title='Toggle Sidebar'> <i class='fa fa-bars'></i> </a>
            <div class='navbar--search'>
                <form action='http://themelooks.net/demo/dadmin/php/search-results.php'> <input type='search' name='search' class='form-control' placeholder='Search Something...' required> <button class='btn-link'><i class='fa fa-search'></i></button> </form>
            </div>
            <div class='navbar--nav ml-auto'>
                <ul class='nav'>
                    <li class='nav-item'> <a href='#' class='nav-link'> <i class='fa fa-bell'></i> <span class='badge text-white bg-blue'>7</span> </a> </li>
                    <li class='nav-item'> <a href='mailbox_inbox.php' class='nav-link'> <i class='fa fa-envelope'></i> <span class='badge text-white bg-blue'>4</span> </a> </li>
                    <li class='nav-item dropdown nav-language'> <a href='#' class='nav-link' data-toggle='dropdown'> <img src='assets/img/flags/us.png' alt='> <span>English</span> <i class='fa fa-angle-down'></i> </a>
                        <ul class='dropdown-menu'>
                            <li> <a href='#'> <img src='assets/img/flags/de.png' alt='> <span>German</span> </a> </li>
                            <li> <a href='#'> <img src='assets/img/flags/fr.png' alt='> <span>French</span> </a> </li>
                            <li> <a href='#'> <img src='assets/img/flags/us.png' alt='> <span>English</span> </a> </li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown nav--user online'> <a href='#' class='nav-link' data-toggle='dropdown'> <img src='assets/img/avatars/01_80x80.png' alt=' class='rounded-circle'> <span>Henry Foster</span> <i class='fa fa-angle-down'></i> </a>
                        <ul class='dropdown-menu'>
                            <li><a href='profile.php'><i class='far fa-user'></i>Profile</a></li>
                            <li><a href='mailbox_inbox.php'><i class='far fa-envelope'></i>Inbox</a></li>
                            <li><a href='#'><i class='fa fa-cog'></i>Settings</a></li>
                            <li class='dropdown-divider'></li>
                            <li><a href='lock-screen.php'><i class='fa fa-lock'></i>Lock Screen</a></li>
                            <li><a href='#'><i class='fa fa-power-off'></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <aside class='sidebar' data-trigger='scrollbar'>
            <div class='sidebar--profile'>
                <div class='profile--img'> <a href='profile.php'> <img src='assets/img/avatars/01_80x80.png' alt=' class='rounded-circle'> </a> </div>
                <div class='profile--name'> <a href='profile.php' class='btn-link'>Henry Foster</a> </div>
                <div class='profile--nav'>
                    <ul class='nav'>
                        <li class='nav-item'> <a href='profile.php' class='nav-link' title='User Profile'> <i class='fa fa-user'></i> </a> </li>
                        <li class='nav-item'> <a href='lock-screen.php' class='nav-link' title='Lock Screen'> <i class='fa fa-lock'></i> </a> </li>
                        <li class='nav-item'> <a href='mailbox_inbox.php' class='nav-link' title='Messages'> <i class='fa fa-envelope'></i> </a> </li>
                        <li class='nav-item'> <a href='#' class='nav-link' title='Logout'> <i class='fa fa-sign-out-alt'></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class='sidebar--nav'>
                <ul>
                    <li>
                        <ul>
                            <li> <a href='index.php'> <i class='fa fa-home'></i> <span>Dashboard</span> </a> </li>
                            <li class='active open'> <a href='#'> <i class='fa fa-shopping-cart'></i> <span>Ecommerce</span> </a>
                                <ul>
                                    <li><a href='ecommerce.php'>Dashboard</a></li>
                                    <li class='active'><a href='products.php'>Products</a></li>
                                    <li><a href='products-edit.php'>Edit Products</a></li>
                                    <li><a href='orders.php'>Orders</a></li>
                                    <li><a href='order-view.php'>Order View</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a href='#'>Layouts</a>
                        <ul>
                            <li> <a href='#'> <i class='fa fa-th'></i> <span>Page Layouts</span> </a>
                                <ul>
                                    <li><a href='blank.php'>Blank Page</a></li>
                                    <li><a href='page-light.php'>Page Light</a></li>
                                    <li><a href='sidebar-light.php'>Sidebar Light</a></li>
                                </ul>
                            </li>
                            <li> <a href='#'> <i class='fa fa-th-list'></i> <span>Footers</span> </a>
                                <ul>
                                    <li><a href='footer-light.php'>Footer Light</a></li>
                                    <li><a href='footer-dark.php'>Footer Dark</a></li>
                                    <li><a href='footer-transparent.php'>Footer Transparent</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a href='#'>Components</a>
                        <ul>
                            <li> <a href='#'> <i class='far fa-newspaper'></i> <span>UI Elements</span> </a>
                                <ul>
                                    <li><a href='buttons.php'>Buttons</a></li>
                                    <li><a href='pagination.php'>Pagination</a></li>
                                    <li><a href='progress-bars.php'>Progress Bars</a></li>
                                    <li><a href='tabs-accordions.php'>Tabs &amp; Accordions</a></li>
                                    <li><a href='modals.php'>Modals</a></li>
                                    <li><a href='ui-slider.php'>UI Slider</a></li>
                                    <li><a href='sweet-alerts.php'>Sweet Alerts</a></li>
                                    <li><a href='timeline.php'>Timeline</a></li>
                                </ul>
                            </li>
                            <li> <a href='#'> <i class='fab fa-wpforms'></i> <span>Form</span> </a>
                                <ul>
                                    <li><a href='form-elements.php'>Form Elements</a></li>
                                    <li><a href='form-wizard.php'>Form Wizard</a></li>
                                    <li><a href='dropzone.php'>Dropzone</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a href='#'>Apps and Charts</a>
                        <ul>
                            <li> <a href='#'> <i class='far fa-envelope'></i> <span>Mailbox</span> </a>
                                <ul>
                                    <li><a href='mailbox_inbox.php'>Inbox</a></li>
                                    <li><a href='mailbox_compose.php'>Compose</a></li>
                                </ul>
                            </li>
                            <li> <a href='calendar.php'> <i class='far fa-calendar-alt'></i> <span>Calendar</span> </a> </li>
                            <li> <a href='chat.php'> <i class='far fa-comments'></i> <span>Chat</span> </a> </li>
                            <li> <a href='contacts.php'> <i class='far fa-address-book'></i> <span>Contacts</span> </a> </li>
                            <li> <a href='notes.php'> <i class='far fa-sticky-note'></i> <span>Notes</span> </a> </li>
                            <li> <a href='todo-list.php'> <i class='fa fa-tasks'></i> <span>Todo List</span> </a> </li>
                            <li> <a href='search-results.php'> <i class='fa fa-search'></i> <span>Search Results</span> </a> </li>
                        </ul>
                    </li>
                    <li> <a href='#'>Extra</a>
                        <ul>
                            <li> <a href='#'> <i class='fa fa-file'></i> <span>Extra Pages</span> </a>
                                <ul>
                                    <li><a href='pricing-tables.php'>Pricing Tables</a></li>
                                    <li><a href='profile.php'>Profile</a></li>
                                    <li><a href='invoice.php'>Invoice</a></li>
                                    <li><a href='login.php'>Login</a></li>
                                    <li><a href='register.php'>Register</a></li>
                                    <li><a href='forgot-password.php'>Forgot Password</a></li>
                                    <li><a href='lock-screen.php'>Lock Screen</a></li>
                                    <li><a href='404.php'>404 Error</a></li>
                                    <li><a href='500.php'>500 Error</a></li>
                                    <li><a href='maintenance.php'>Maintenance</a></li>
                                    <li><a href='coming-soon.php'>Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class='sidebar--widgets'>
                <div class='widget'>
                    <h3 class='h6 widget--title'>Information Summary</h3>
                    <div class='summary--widget'>
                        <div class='summary--item'>
                            <p class='summary--chart' data-trigger='sparkline' data-type='bar' data-width='5' data-height='38' data-color='#2bb3c0'>5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>
                            <p class='summary--title'>Daily Traffic</p>
                            <p class='summary--stats'>307.512</p>
                        </div>
                        <div class='summary--item'>
                            <p class='summary--chart' data-trigger='sparkline' data-type='bar' data-width='5' data-height='38' data-color='#e16123'>2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>
                            <p class='summary--title'>Average Usage</p>
                            <p class='summary--stats'>2,371,527</p>
                        </div>
                        <div class='summary--item'>
                            <p class='summary--chart' data-trigger='sparkline' data-type='bar' data-width='5' data-height='38' data-color='#cccccc'>5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>
                            <p class='summary--title'>Disk Usage</p>
                            <p class='summary--stats'>37.5%</p>
                        </div>
                        <div class='summary--item'>
                            <p class='summary--chart' data-trigger='sparkline' data-type='bar' data-width='5' data-height='38' data-color='#009378'>2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>
                            <p class='summary--title'>CPU Usage</p>
                            <p class='summary--stats'>37.05-32</p>
                        </div>
                        <div class='summary--item'>
                            <p class='summary--chart' data-trigger='sparkline' data-type='bar' data-width='5' data-height='38' data-color='#ff4040'>5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>
                            <p class='summary--title'>Memory Usage</p>
                            <p class='summary--stats'>37.05%</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>";
 ?>