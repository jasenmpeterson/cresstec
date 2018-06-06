<?php
/**
 * Main header bar
 *
 * @package Cresstec\Template_Parts\Header
 */

use Cresstec\Admin\Menu as Menu;
$menu             = new Menu\Menu();
$blog_name        = get_bloginfo( 'name' );
$blog_description = get_bloginfo( 'description' );
$header_logo_info = $blog_name . ' - ' . $blog_description;
?>
<div class="mobile--menu--wrap">
	<?php
	echo esc_html( $menu->bem_menu( 'header_main_nav', 'main-navigation' ) );
	?>
</div>
<div class="header">
<!--    <div class="columns secondary--nav--wrap--column">-->
<!--        <div class="column">-->
<!--            <div class="nav--wrap secondary--nav--wrap">-->
<!--                <nav>-->
<!--                    <ul>-->
<!--                        <li><a href="#">Contact</a></li>-->
<!--                        <li><a href="#">Login</a></li>-->
<!--                    </ul>-->
<!--                </nav>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="columns is-mobile">
        <div class="column is-one-fifth">
            <div class="logo">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="149.5 27.5 190.858 47.061"><g id="Group_37" data-name="Group 37" transform="translate(149.5 27.5)"><path id="Path_101" data-name="Path 101" class="cls-1" d="M382.8 20.844a14.106 14.106 0 0 1 14.118 14.075h-1.958a12.051 12.051 0 0 0-3.573-8.584 12.231 12.231 0 0 0-7.626-3.53v13.77H381.8V20.8h1z" transform="translate(-215.431 -11.736)"/><path id="Path_102" data-name="Path 102" class="cls-1" d="M330 23.53A23.544 23.544 0 0 1 353.531 0a23.544 23.544 0 0 1 23.53 23.53 23.544 23.544 0 0 1-23.53 23.53A23.488 23.488 0 0 1 330 23.53zm1.961 0a21.357 21.357 0 0 0 6.318 15.251 21.433 21.433 0 0 0 15.252 6.319 21.357 21.357 0 0 0 15.251-6.318A21.433 21.433 0 0 0 375.1 23.53a21.357 21.357 0 0 0-6.318-15.251 21.433 21.433 0 0 0-15.251-6.318 21.357 21.357 0 0 0-15.251 6.318 21.433 21.433 0 0 0-6.318 15.251z" transform="translate(-186.203)"/><path id="Path_104" data-name="Path 104" class="cls-1" d="M392.384 57.763V36.412a1.818 1.818 0 0 1-.784-1.482 1.83 1.83 0 0 1 3.66 0 1.76 1.76 0 0 1-.784 1.482V57.72a1.818 1.818 0 0 1 .784 1.482 1.83 1.83 0 0 1-3.66 0 1.8 1.8 0 0 1 .784-1.439z" transform="translate(-220.96 -18.677)"/><path id="Path_105" data-name="Path 105" class="cls-1 blue" d="M352.48 36.776a.96.96 0 0 1 .044-.349 9.508 9.508 0 0 1-3.05-6.972 9.654 9.654 0 0 1 4.4-8.1v-8.371a17.256 17.256 0 0 0 5.142 33.727 8.752 8.752 0 0 0 1.089-.044v1.961c-.349 0-.741.044-1.089.044a19.21 19.21 0 0 1-4.4-37.91l1.22-.261v12.026l-.479.261a7.733 7.733 0 0 0-3.922 6.667 7.493 7.493 0 0 0 2.4 5.534 1.482 1.482 0 0 1 .436-.044 1.831 1.831 0 1 1-1.787 1.83z" transform="translate(-191.732 -5.925)"/><path id="Path_106" data-name="Path 106" class="cls-1 blue" d="M354.389 30.53a1.83 1.83 0 1 1 1.83 1.83h-.131a12.165 12.165 0 0 0-2.527 7.408 11.976 11.976 0 0 0 3.573 8.584 12.23 12.23 0 0 0 7.626 3.53v-6.144h1.961v8.1h-1a14.109 14.109 0 0 1-11.2-22.7 1.392 1.392 0 0 1-.132-.608z" transform="translate(-198.39 -16.194)"/><g id="Group_35" data-name="Group 35" transform="translate(166.413 4.357)"><g id="Group_34" data-name="Group 34"><path id="Path_107" data-name="Path 107" class="cls-1" d="M401.9 27.212a2.878 2.878 0 0 0-.654-.218 1.07 1.07 0 0 1 .654.218A19.191 19.191 0 0 0 382.815 10a6.434 6.434 0 0 0-.915.044V12c.3 0 .61-.044.915-.044a17.2 17.2 0 0 1 17.125 15.387 1.039 1.039 0 0 1 .479-.261 1.039 1.039 0 0 0-.479.261 1.9 1.9 0 0 0-.741 1.482 1.83 1.83 0 1 0 2.7-1.612z" transform="translate(-381.9 -10)"/></g></g><g id="Group_36" data-name="Group 36" transform="translate(0 16.471)"><path id="Path_108" data-name="Path 108" class="cls-1 blue" d="M7.321 52.528A7.381 7.381 0 0 1 2.789 51a7.411 7.411 0 0 1 4.575-13.2 7.682 7.682 0 0 1 4.27 1.307l-.261 2.7a5.158 5.158 0 0 0-3.835-1.743 4.783 4.783 0 0 0-4.924 5.1 4.729 4.729 0 0 0 4.793 5.011 6.363 6.363 0 0 0 4.445-2.048l-.131 3.05a7.935 7.935 0 0 1-4.4 1.351z" transform="translate(0 -37.8)"/><path id="Path_109" data-name="Path 109" class="cls-1 blue" d="M44.9 38.8h3.355a7.859 7.859 0 0 1 4.532.959 3.619 3.619 0 0 1 1.7 2.963c0 1.83-1.133 3.181-3.181 3.835l4.706 6.057h-2.963L48.6 46.9h-1.22v5.752H44.9zm3.66 6.318c2.266 0 3.4-.784 3.4-2.222 0-1.525-1.22-2.135-3.617-2.135h-.959v4.357z" transform="translate(-25.335 -38.364)"/><path id="Path_110" data-name="Path 110" class="cls-1 blue" d="M86.7 38.8h8.454v2.135h-5.97v3.4h5.142v2.092h-5.142v4.052h6.057v2.135H86.7z" transform="translate(-48.921 -38.364)"/><path id="Path_111" data-name="Path 111" class="cls-1 blue" d="M127.109 50.437c1.569 0 2.571-.828 2.571-1.917 0-1.046-.7-1.7-2.135-2.527l-1.089-.61c-2-1.133-3.05-2.222-3.05-3.922 0-2.135 1.743-3.66 4.4-3.66a8.454 8.454 0 0 1 3.66.828l-.087 2.222a7.789 7.789 0 0 0-3.4-1.089c-1.394 0-2.135.654-2.135 1.569 0 .871.654 1.394 2 2.135l1.046.566c2.222 1.264 3.355 2.44 3.355 4.357 0 2.4-1.874 4.14-5.011 4.14a9.182 9.182 0 0 1-3.922-.828L123.1 49a7.894 7.894 0 0 0 4.009 1.437z" transform="translate(-69.459 -37.8)"/><path id="Path_112" data-name="Path 112" class="cls-1 blue" d="M165.895 52.713h-2.571V40.992H158.4V38.9h12.332v2.092h-4.88v11.721z" transform="translate(-89.377 -38.421)"/><path id="Path_113" data-name="Path 113" class="cls-1" d="M206.551 52.713h-2.571V40.992h-4.88V38.9h12.332v2.092h-4.88z" transform="translate(-112.342 -38.421)"/><path id="Path_114" data-name="Path 114" class="cls-1" d="M243.7 38.8h8.454v2.135h-5.97v3.4h5.142v2.092h-5.142v4.052h6.057v2.135H243.7V38.8z" transform="translate(-137.508 -38.364)"/><path id="Path_115" data-name="Path 115" class="cls-1" d="M287.021 52.528A7.381 7.381 0 0 1 282.489 51a7.411 7.411 0 0 1 4.575-13.2 7.682 7.682 0 0 1 4.27 1.307l-.261 2.7a5.158 5.158 0 0 0-3.835-1.743 4.831 4.831 0 0 0-4.924 5.1 4.729 4.729 0 0 0 4.793 5.011 6.364 6.364 0 0 0 4.445-2.048l-.131 3.05a7.83 7.83 0 0 1-4.4 1.351z" transform="translate(-157.821 -37.8)"/></g></g></svg>
                </a>
            </div>
        </div>
        <div class="column">
            <span class="icon is-large mobile--menu--button">
                <ion-icon name="menu"></ion-icon>
            </span>
            <div class="primary--nav--wrap nav--wrap">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                <div class="nav_wrap">
                                    <span class="text">About</span>
                                    <span class="hover">
                                        <?php include('nav_hover.php'); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="nav_wrap">
                                    <span class="text">Products</span>
                                    <span class="hover">
                                        <?php include('nav_hover.php'); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="nav_wrap">
                                    <span class="text">Capabilities</span>
                                    <span class="hover">
                                        <?php include('nav_hover.php'); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="nav_wrap">
                                    <span class="text">Insights</span>
                                    <span class="hover">
                                        <?php include('nav_hover.php'); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
