<?php
$setmeta = 0;
if (basename($_SERVER['PHP_SELF']) == 'about.php') {
    $setmeta = 1;
    $title = "About Waterman Industries – Leaders in Pumps & Motors Manufacturing, Ahmedabad";
    $keyword = "Waterman Industries, About Waterman, pump manufacturer Gujarat, submersible motors, monoblock pumps, Indian pump industry, Ahmedabad pump company";
    $description = "Learn about Waterman Industries Pvt. Ltd.: a Gujarat-based manufacturer of high quality submersible pumps, monoblock pump sets & motors. Our story, mission and dedication to performance, innovation & customer satisfaction.";
}

if (basename($_SERVER['PHP_SELF']) == 'domestic-submersible-pumps.php') {
    $setmeta = 1;
    $title = "Domestic Submersible Pumps – Waterman Industries | Reliable Pumps for Home Use";
    $keyword = "domestic submersible pump, home water pump, household submersible, Waterman domestic pumps, low-noise pump, borewell pump, India submersible pumps";
    $description = "Discover Waterman’s domestic submersible pumps designed for home water supply—efficient, durable and low-noise models ideal for bore wells, overhead tanks & domestic plumbing.";
}

if (basename($_SERVER['PHP_SELF']) == 'product.php') {
    $setmeta = 1;
    $title = "Waterman Pumps Products | Submersible, Monoblock & Industrial Pump Sets";
    $keyword = "submersible pump, monoblock pump set, industrial pump, open well pump, wastewater pump, solar pump, pump motors Gujarat, export quality pumps";
    $description = "Explore Waterman Industries’ full product range: submersible pumps & motors, monoblock pump sets, open well & wastewater pumps, solar-compatible models—all engineered for durability & performance.";
}

if (basename($_SERVER['PHP_SELF']) == 'submersible-pumpsets.php') {
    $setmeta = 1;
    $title = "Waterman Submersible Pump Sets | Powerful & Efficient Pump Solutions";
    $keyword = "submersible pump set, waterman pump set, borewell pump set, agricultural pump set, industrial submersible, efficient pump sets, durable pump equipment";
    $description = "Explore Waterman’s range of submersible pump sets—high-performance, reliable and designed for agriculture, industrial & domestic use. Long-lasting motors, energy-efficient design, export quality engineering.";
}

if (basename($_SERVER['PHP_SELF']) == 'mini-domestic-mono-block-pumps.php') {
    $setmeta = 1;
    $title = "Mini Domestic Monoblock Pumps – Waterman Industries | Compact & Efficient";
    $keyword = "mini monoblock pumps, domestic mono block pump, compact water pump, household pump Gujarat, small domestic pump, Waterman mini pump, efficient domestic pump";
    $description = "Explore Waterman’s mini domestic monoblock pumps — compact, reliable and designed for household water supply. Perfect for small tanks, home gardens & reliable domestic usage.";
}

if (basename($_SERVER['PHP_SELF']) == 'centrifugal-monoblock-pumpsets.php') {
    $setmeta = 1;
    $title = "Centrifugal Monoblock Pump Sets – Waterman Industries | High-Pressure Pumps";
    $keyword = "centrifugal monoblock pumps, Waterman centrifugal pump sets, high-pressure pump, monoblock set, domestic pressure pump, agricultural centrifugal monoblock, industrial pump sets";
    $description = "Explore Waterman’s centrifugal monoblock pump sets — powerful, reliable, and designed for high pressure water delivery for domestic, agricultural, & industrial applications. Durable motors, energy-efficient performance.";
}

if (basename($_SERVER['PHP_SELF']) == 'open-submersible-monoset.php') {
    $setmeta = 1;
    $title = "Open Submersible MonoSet Pumps – Waterman Industries | Durable & Robust";
    $keyword = "open submersible monoset, open well monopump, Waterman monoset, high flow open well pump, robust pump sets, ditch pump, industrial well pump";
    $description = "Explore Waterman's Open Submersible MonoSet pumps: designed for open wells & high flow requirements. Rugged build, efficient performance & long service life";
}

if (basename($_SERVER['PHP_SELF']) == 'horizontal-open-submersible-pumpset.php') {
    $setmeta = 1;
    $title = "Waterman Horizontal Open Submersible Pumpset | High-Efficiency Open Well Pump";
    $keyword = "horizontal open submersible pumpset, open well pump, horizontal open well pump set, waterman horizontal pump, open well submersible set, high flow open well pump, reservoir pump set";
    $description = "Explore Waterman’s Horizontal Open Submersible Pumpsets: designed for open well or reservoir use, providing high flow & durability. Ideal for agricultural, industrial & domestic water supply with efficient performance and long life.";
}


if (basename($_SERVER['PHP_SELF']) == 'csr-activity.php') {
    $setmeta = 1;
    $title = "Waterman Industries CSR Activities | Community & Social Responsibility";
    $keyword = "Waterman CSR, corporate social responsibility Waterman, community programs, environmental initiatives, social welfare, Gujarat CSR, Waterman Industries community efforts";
    $description = "Learn about Waterman Industries’ CSR initiatives – supporting local communities, environmental sustainability, employee welfare & social development programs in Gujarat and beyond.";
}


if (basename($_SERVER['PHP_SELF']) == 'application.php') {
    $setmeta = 1;
    $title = "Waterman Pumps Applications | Uses of Submersible & MonoBlock Pump Solutions";
    $keyword = "pump applications, submersible pump use cases, mono-block pump applications, industrial water supply, irrigation pumps, domestic & agricultural pump uses, open-well pumps, wastewater pumps";
    $description = "Explore the applications of Waterman’s pumps—suitable for agriculture, industrial water supply, domestic water systems, open wells, irrigation, wastewater management & more. Discover where our pump sets perform best.";
}

if (basename($_SERVER['PHP_SELF']) == 'videos.php') {
    $setmeta = 1;
    $title = "Waterman Industries Video Gallery | Pumps & Motors in Action";
    $keyword = "Waterman videos, pump demo videos, submersible pump installation, monoblock pump video, motor test video, pump maintenance video, waterman gallery";
    $description = "Watch Waterman’s video gallery showcasing submersible pumps, monoblock pump-sets, product demos, installations & maintenance tips. See our equipment in action and learn from experts.";
}

if (basename($_SERVER['PHP_SELF']) == 'clients.php') {
    $setmeta = 1;
    $title = "Our Clients – Waterman Industries | Trusted by Leading Users in Pumps & Motors";
    $keyword = "Waterman clients, pump company clients, clients list, pump industry customers, trusted by industries, Waterman customer base, submersible pump clients";
    $description = "Explore the list of clients who trust Waterman Industries for high-quality pumps & motors. From industrial users to agricultural & domestic sectors — delivering excellence, reliability & partnership.";
}


if (basename($_SERVER['PHP_SELF']) == 'gallery.php') {
    $setmeta = 1;
    $title = "Waterman Industries Photo Gallery – Pumps & Assets Showcase";
    $keyword = "Waterman gallery, pump installations photos, manufacturing gallery, product portfolio images, waterman photo showcase, pump works site pictures, industrial pump gallery";
    $description = "Browse Waterman’s Photo Gallery: view images of pump installations, manufacturing process, product portfolio & worksites. See our craftsmanship and quality in every shot.";
}

if (basename($_SERVER['PHP_SELF']) == 'contact.php') {
    $setmeta = 1;
    $title = "Contact Waterman Industries | Get in Touch – Pumps & Motors Manufacturer";
    $keyword = "contact Waterman, inquiry Waterman Industries, pump manufacturer contact, customer support pumps, Waterman address, phone pumps company";
    $description = "Reach out to Waterman Industries for inquiries, quotes, customer support or product information. Located in Ahmedabad, Gujarat, we’re ready to assist with your pump & motor needs.";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />

    <?php if ($setmeta) { ?>
    <title>
        <?php echo $title; ?>
    </title>
    <meta name="description" id="mdescription" content="<?php echo $description; ?>" />
    <meta id="mkeywords" name="keywords" content="<?php echo $keyword; ?>" />
    <meta property="og:title" class="og-tittle" content="<?php echo $title; ?>">
    <meta property="og:description" class="og-description" content="<?php echo $description; ?>">
    <meta property="og:image" content="assets/imgs/home-page/logo/waterman.webp">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />

    <meta property="twitter:title" content="<?php echo $title; ?>" />
    <meta property="twitter:description" content="<?php echo $description; ?>" />
    <meta property="twitter:image" content="assets/imgs/home-page/logo/waterman.webp" />
    <!-- Twitter -->
    <?php } else { ?>
    <title>Waterman Pumps | High-Quality Submersible & MonoBlock Pumps, Motors - Ahmedabad
    </title>
    <meta name="description" id="mdescription"
        content="Waterman Industries is a leading manufacturer & exporter from Ahmedabad, Gujarat, specializing in reliable submersible pumps, motors & monoblock pump sets. Premium quality, efficient performance & global reach." />
    <meta id="mkeywords" name="keywords"
        content="waterman pumps, submersible motors, monoblock pumps, gujarat pump manufacturer, export quality pumps, domestic water pumps, industrial pumps, solar pumps" />
    <meta property="og:title" class="og-tittle"
        content="Waterman Pumps | High-Quality Submersible & MonoBlock Pumps, Motors - Ahmedabad">
    <meta property="og:description" class="og-description"
        content="Waterman Industries is a leading manufacturer & exporter from Ahmedabad, Gujarat, specializing in reliable submersible pumps, motors & monoblock pump sets. Premium quality, efficient performance & global reach.">
    <meta property="og:image" content="assets/imgs/home-page/logo/waterman.webp">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />

    <meta property="twitter:title"
        content="Waterman Pumps | High-Quality Submersible & MonoBlock Pumps, Motors - Ahmedabad" />
    <meta property="twitter:description"
        content="Waterman Industries is a leading manufacturer & exporter from Ahmedabad, Gujarat, specializing in reliable submersible pumps, motors & monoblock pump sets. Premium quality, efficient performance & global reach." />
    <meta property="twitter:image" content="assets/imgs/home-page/logo/waterman.webp" />
    <!-- Twitter -->
    <?php } ?>

    <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    // Append the host(domain name, ip) to the URL.   
    $url .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL   
    $url .= $_SERVER['REQUEST_URI'];

    ?>
    <link rel="icon" type="image/webp" href="assets/imgs/home-page/logo/waterman-fev.webp">
    <link rel="canonical" href="<?= $url; ?>" />
    <meta property="og:url" content="<?= $url; ?>">
    <meta property="twitter:url" content="<?= $url; ?>" />
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="WATERMAN INDUSTRIES PVT.LTD">

<title>WATERMAN INDUSTRIES PVT.LTD</title> -->

<!-- Fav Icon -->
<link rel="icon" type="image/x-icon" href="assets/imgs/home-page/logo/waterman-fev.webp">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

<!-- All CSS files -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="assets/css/progressbar.css">
<link rel="stylesheet" href="assets/css/meanmenu.min.css">
<link rel="stylesheet" href="assets/css/master.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">


    <link rel="stylesheet" href="assets/css/model-custom.css" />
    <link rel="stylesheet" href="assets/css/sidebar-btn.css" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5S4SK6GG');
    </script>
    <!-- End Google Tag Manager -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S4SK6GG"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
     <?php include("pop-model.php"); ?>
<!-- Preloader -->
<!-- <div class="preloader">
<div class="loading">
    <div class="bar bar1"></div>
    <div class="bar bar2"></div>
    <div class="bar bar3"></div>
    <div class="bar bar4"></div>
    <div class="bar bar5"></div>
    <div class="bar bar6"></div>
    <div class="bar bar7"></div>
    <div class="bar bar8"></div>
</div>
</div> -->

<!-- Scroll Smoother -->
<div class="has-smooth" id="has_smooth"></div>

<!-- Go Top Button -->
<button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>

<!-- Header area start -->
<header class="header__area-3">
<div class="header__inner-3">
    <div class="header__logo-2">
        <a href="index.php" class="logo-dark"><img src="assets/imgs/home-page/logo/waterman.webp" alt="Site Logo"></a>
        <a href="index.php" class="logo-light"><img src="assets/imgs/home-page/logo/waterman.webp" alt="Site Logo"></a>
    </div>
    <div class="header__nav-2">
    <ul class="main-menu-3 menu-anim">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="product.php">Products</a>
            <ul class="main-dropdown">
                <li><a href="domestic-submersible-pumps.php">Domestic and Agriculture Cast Iron Pumpset Series</a>
                    <ul class="sub-dropdown">
                        <li><a href="submersible-pumpsets.php">Cast Iron Pupmset Series</a></li>
                        <li><a href="open-submersible-monoset.php">Openwell Pumpset Series</a></li>
                        <li><a href="mini-domestic-mono-block-pumps.php">Domestic ZSef Priming Pumpset Series</a></li>
                        <li><a href="centrifugal-monoblock-pumpsets.php">Centrifugal Monoblock Pumpsets</a></li>
                    </ul>
                </li>
                <li><a href="export-submersible-motor-pumps.php">Export Submersible Motor And Pump Series</a>
                    <ul class="sub-dropdown">
                        <li><a href="export-submersible-motors.php">Export Submersible Motors</a></li>
                        <li><a href="export-submersible-pumps.php">Export Submersible Pumps</a></li>
                    </ul>
                </li>
                <!-- <li><a href="mini-domestic-mono-block-pumps.php">Mini Domestic Mono Block Pumps</a>
                    <ul class="sub-dropdown">
                        <li><a href="javascript:;">Self Priming Monoblock Pumpset</a></li>
                        <li><a href="javascript:;">V type Monoblock Pumpset</a></li>
                        <li><a href="javascript:;">Super Suction Monoblock Pumpset</a></li>
                        <li><a href="javascript:;">Centrifugal Shallow well Monoblock Pumpset</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="centrifugal-monoblock-pumpsets.php">Centrifugal Monoblock Pumpsets</a></li> -->
                <!-- <li><a href="solar-pumps.php">Solar Pumps</a></li> -->
            </ul>
        </li>
        <li><a href="csr-activity.php">CSR Activity</a></li>
        <li><a href="videos.php">Video</a></li>
        <li><a href="application.php">Applications</a></li>
        <li><a href="clients.php">Clients</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
    </div>
    <div class="header__nav-icon-3">
        <button id="open_offcanvas"><img src="assets/imgs/icon/menu-black.png" alt="Menubar Icon"></button>
    </div>
</div>
</header>
<!-- Header area end -->

<!-- Offcanvas area start -->
<div class="offcanvas__area">
<div class="offcanvas__body">
    <div class="offcanvas__left">
        <div class="offcanvas__logo">
            <a href="index.php"><img src="assets/imgs/home-page/logo/waterman.webp" alt="Offcanvas Logo"></a>
        </div>
        <div class="offcanvas__social">
            <h3 class="social-title">Follow Us</h3>
            <ul>
            <li><a href="https://www.facebook.com/watermanindustries/" target="_blank">Facebook</a></li>
            <li><a href="https://in.linkedin.com/company/waterman-industries-private-limited" target="_blank">Linkedin</a></li>
            <li><a href="https://www.instagram.com/watermanpumpindustries" target="_blank">Instagram</a></li>
            <li><a href="https://www.youtube.com/channel/UCXZ7h30i7qhHYnroKiIdjrA" target="_blank">Youtube</a></li>
            </ul>
        </div>
        <div class="offcanvas__links">
            
        </div>
    </div>
    <div class="offcanvas__mid">
    <div class="offcanvas__menu-wrapper">
        <nav class="offcanvas__menu">
            <ul class="menu-anim">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="product.php">Products</a>
                    <ul>
                        <li><a href="domestic-submersible-pumps.php">Domestic Submersible Pumps</a>
                            <ul class="sub-dropdown">
                                <li><a href="submersible-pumpsets.php">Submersible Pumpsets</a></li>
                                <li><a href="open-submersible-monoset.php">Open Submersible Monoset</a></li>
                            </ul>
                        </li>
                        <li><a href="export-submersible-motor-pumps.php">Export Submersible Motor/Pumps </a>
                            <ul class="sub-dropdown">
                                <li><a href="export-submersible-motors.php">Export Submersible Motors</a></li>
                                <li><a href="export-submersible-pumps.php">Export Submersible Pumps</a></li>
                            </ul>
                        </li>
                        <li><a href="mini-domestic-mono-block-pumps.php">Mini Domestic Mono Block Pumps</a>
                            <ul class="sub-dropdown">
                                <li><a href="javascript:;">Self Priming Monoblock Pumpset</a></li>
                                <li><a href="javascript:;">V type Monoblock Pumpset</a></li>
                                <li><a href="javascript:;">Super Suction Monoblock Pumpset</a></li>
                                <li><a href="javascript:;">Centrifugal Shallow well Monoblock Pumpset</a></li>
                            </ul>
                        </li>
                        <li><a href="centrifugal-monoblock-pumpsets.php">Centrifugal Monoblock Pumpsets</a></li>
                        <!-- <li><a href="solar-pumps.php">Solar Pumps</a></li> -->
                    </ul>
                </li>
                <li><a href="csr-activity.php">CSR Activity</a></li>
                <li><a href="videos.php">Video</a></li>
                <li><a href="application.php">Applications</a></li>
                <li><a href="clients.php">Clients</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    </div>
    <div class="offcanvas__right">
    <div class="offcanvas__search">
        
    </div>
    <div class="offcanvas__contact">
        <h3>Get in touch</h3>
        <ul>
            <li>Plot No. 407, Sarkhej-Bavla Highway, Moraiya, Changodar, Ahmedabad, Gujarat, India</li>
            <li><a href="tel:+916354916823 " onclick="gtag('event', 'send', { 'event_category': 'click on Mobile', 'event_action': 'Mobile', 'event_label': '+916354916823 ' });">+91 6354916823 </a></li>
            <li><a href="mailto:export@watermanpump.com" onclick="gtag('event', 'send', { 'event_category': 'click on mail', 'event_action': 'mailto', 'event_label': 'export@watermanpump.com' });">export@watermanpump.com</a></li>
        </ul>
    </div>
    <img src="assets/imgs/shape/11.png" alt="shape" class="shape-1">
    <img src="assets/imgs/shape/12.png" alt="shape" class="shape-2">
    </div>
    <div class="offcanvas__close">
    <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
    </div>
</div>
</div>
<!-- Offcanvas area end -->

<div id="smooth-wrapper">
<div id="smooth-content">
<main>
    