<?php
	$feat_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
	$title = get_the_title();
	$header = get_field('header');
	$address = get_field('address', 'options');
?>
<div class="page--banner" style="background:url('<?php echo $feat_image; ?>')">
    <div class="columns">
        <div class="column is-1">
            <svg class="contact--icon" xmlns="http://www.w3.org/2000/svg" viewBox="8622.852 226.947 66.858 66.825">
                <g id="Group_135" data-name="Group 135" transform="translate(8420)">
                    <g id="Group_89" data-name="Group 89" transform="translate(202.852 226.947)">
                        <path id="Path_200" data-name="Path 200" class="cls-1" d="M65.818,33.4H64.811A31.375,31.375,0,0,1,11.244,55.581,31.363,31.363,0,1,1,55.581,11.21a31.3,31.3,0,0,1,9.2,22.186h2.047A33.392,33.392,0,0,0,9.8,9.8,33.413,33.413,0,0,0,33.429,66.825,33.461,33.461,0,0,0,66.859,33.4h-1.04Z" transform="translate(0 0)"/>
                    </g>
                    <g id="Group_124" data-name="Group 124" transform="translate(224.236 241.32)">
                        <path id="Path_236" data-name="Path 236" class="cls-1" d="M127.652,418.1a2.152,2.152,0,1,0,2.152,2.152A2.151,2.151,0,0,0,127.652,418.1Zm0,2.819a.659.659,0,1,1,.659-.659A.66.66,0,0,1,127.652,420.919Z" transform="translate(-115.989 -386.414)"/>
                        <path id="Path_237" data-name="Path 237" class="cls-1" d="M140.488,41.976h3.82a.788.788,0,0,0,0-1.576h-3.82a.788.788,0,1,0,0,1.576Z" transform="translate(-129.113 -37.338)"/>
                        <circle id="Ellipse_156" data-name="Ellipse 156" class="cls-1" cx="0.826" cy="0.826" r="0.826" transform="translate(8.132 3.047)"/>
                        <path id="Path_238" data-name="Path 238" class="cls-1" d="M20.841,0H2.486A2.487,2.487,0,0,0,0,2.486V36.316A2.487,2.487,0,0,0,2.486,38.8H20.841a2.487,2.487,0,0,0,2.486-2.486V2.486A2.487,2.487,0,0,0,20.841,0Zm.826,36.316a.828.828,0,0,1-.826.826H2.486a.828.828,0,0,1-.826-.826V2.486a.828.828,0,0,1,.826-.826H20.841a.828.828,0,0,1,.826.826Z"/>
                        <path id="Path_239" data-name="Path 239" class="cls-1" d="M101.911,207.615a.827.827,0,0,0,.584-.243l3.979-3.979a.831.831,0,0,0-1.175-1.175l-3.979,3.979a.828.828,0,0,0,0,1.175A.858.858,0,0,0,101.911,207.615Z" transform="translate(-93.415 -186.668)"/>
                        <path id="Path_240" data-name="Path 240" class="cls-1" d="M164.108,235.378a.823.823,0,0,0,1.167,0l1.584-1.584a.831.831,0,0,0-1.175-1.175L164.1,234.2A.835.835,0,0,0,164.108,235.378Z" transform="translate(-151.444 -214.764)"/>
                        <path id="Path_241" data-name="Path 241" class="cls-1" d="M60.509,80.9H45.443a.744.744,0,0,0-.743.743v22.834a.744.744,0,0,0,.743.743H60.5a.744.744,0,0,0,.743-.743V81.643A.733.733,0,0,0,60.509,80.9Zm-.75,22.834H46.193V82.393H59.766l-.008,21.341Z" transform="translate(-41.312 -74.769)"/>
                    </g>
                </g>
            </svg>
            <svg class="circular--accents" xmlns="http://www.w3.org/2000/svg" viewBox="5637.891 639 139.902 111.922">
                <g id="Group_130" data-name="Group 130" transform="translate(5052)">
                    <ellipse id="Ellipse_136" data-name="Ellipse 136" class="cls-1" cx="4.062" cy="4.062" rx="4.062" ry="4.062" transform="translate(594.014 639)"/>
                    <ellipse id="Ellipse_137" data-name="Ellipse 137" class="cls-2" cx="4.062" cy="4.062" rx="4.062" ry="4.062" transform="translate(686.078 733.772)"/>
                    <ellipse id="Ellipse_141" data-name="Ellipse 141" class="cls-2" cx="4.062" cy="4.062" rx="4.062" ry="4.062" transform="translate(627.41 649.831)"/>
                    <ellipse id="Ellipse_138" data-name="Ellipse 138" class="cls-3" cx="4.062" cy="4.062" rx="4.062" ry="4.062" transform="translate(675.247 654.344)"/>
                    <ellipse id="Ellipse_139" data-name="Ellipse 139" class="cls-4" cx="4.062" cy="4.062" rx="4.062" ry="4.062" transform="translate(585.891 692.253)"/>
                    <ellipse id="Ellipse_140" data-name="Ellipse 140" class="cls-4" cx="4.062" cy="4.062" rx="4.062" ry="4.062" transform="translate(707.741 713.013)"/>
                    <ellipse id="Ellipse_142" data-name="Ellipse 142" class="cls-4" cx="4.062" cy="4.062" rx="4.062" ry="4.062" transform="translate(635.534 742.798)"/>
                    <g id="Group_77" data-name="Group 77" transform="translate(645.462 647.123)">
                        <line id="Line_200" data-name="Line 200" class="cls-5" y2="6.318" transform="translate(3.159)"/>
                        <line id="Line_201" data-name="Line 201" class="cls-5" x1="6.318" transform="translate(0 3.159)"/>
                    </g>
                    <g id="Group_83" data-name="Group 83" transform="translate(684.274 716.623)">
                        <line id="Line_200-2" data-name="Line 200" class="cls-5" y2="6.318" transform="translate(3.159 0)"/>
                        <line id="Line_201-2" data-name="Line 201" class="cls-5" x1="6.318" transform="translate(0 3.159)"/>
                    </g>
                    <g id="Group_81" data-name="Group 81" transform="translate(687.884 677.812)">
                        <line id="Line_200-3" data-name="Line 200" class="cls-5" y2="6.318" transform="translate(3.159)"/>
                        <line id="Line_201-3" data-name="Line 201" class="cls-5" x1="6.318" transform="translate(0 3.159)"/>
                    </g>
                    <g id="Group_78" data-name="Group 78" transform="translate(615.676 739.188)">
                        <line id="Line_200-4" data-name="Line 200" class="cls-5" y2="6.318" transform="translate(3.159 0)"/>
                        <line id="Line_201-4" data-name="Line 201" class="cls-5" x1="6.318" transform="translate(0 3.159)"/>
                    </g>
                    <g id="Group_84" data-name="Group 84" transform="translate(682.473 735.408)">
                        <line id="Line_200-5" data-name="Line 200" class="cls-5" y2="4.641" transform="translate(2.321 0)"/>
                        <line id="Line_201-5" data-name="Line 201" class="cls-5" x1="4.641" transform="translate(0 2.321)"/>
                    </g>
                    <g id="Group_85" data-name="Group 85" transform="translate(719.475 677.812)">
                        <line id="Line_200-6" data-name="Line 200" class="cls-5" y2="6.318" transform="translate(3.159)"/>
                        <line id="Line_201-6" data-name="Line 201" class="cls-5" x1="6.318" transform="translate(0 3.159)"/>
                    </g>
                    <g id="Group_79" data-name="Group 79" transform="translate(694.202 700.376)">
                        <line id="Line_200-7" data-name="Line 200" class="cls-5" y2="6.318" transform="translate(3.159)"/>
                        <line id="Line_201-7" data-name="Line 201" class="cls-5" x1="6.318" transform="translate(0 3.159)"/>
                    </g>
                    <g id="Group_80" data-name="Group 80" transform="translate(602.138 675.104)">
                        <line id="Line_200-8" data-name="Line 200" class="cls-5" y2="6.318" transform="translate(3.159 0)"/>
                        <line id="Line_201-8" data-name="Line 201" class="cls-5" x1="6.318" transform="translate(0 3.159)"/>
                    </g>
                    <g id="Group_82" data-name="Group 82" transform="translate(605.748 715.721)">
                        <line id="Line_200-9" data-name="Line 200" class="cls-5" y2="6.318" transform="translate(3.159)"/>
                        <line id="Line_201-9" data-name="Line 201" class="cls-5" x1="6.318" transform="translate(0 3.159)"/>
                    </g>
                </g>
            </svg>
        </div>
        <div class="column is-4">
            <h1><?php echo $title; ?></h1>
            <?php echo $header['paragraph']; ?>
        </div>
    </div>
</div>
<div class="page--content--wrap contact--wrap">
    <div class="columns">
        <div class="column is-5">
	        <?php the_content(); ?>
        </div>
        <div class="column">
            <address class="is-pulled-right">
                <h4><?php echo $address['label']; ?></h4>
                <p><?php echo $address['address']; ?></p>
                <p><?php echo $address['telephone']; ?></p>
                <p><a href="mailto:<?php echo $address['email']; ?>"><?php echo $address['email']; ?></a></p>
            </address>
        </div>
    </div>
</div>