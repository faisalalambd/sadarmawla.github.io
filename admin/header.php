<?php
	include('session.php');
	if(!isset($_SESSION['login_user'])){
	header("location: index.php"); // Redirecting To Home Page
	}
?>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">


    <title>Chunkutia Dorbar</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">


    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />


</head>



<body>

    


    <div id="app">

        <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>


            <nav class="navbar navbar-expand-lg main-navbar sticky">

                <div class="form-inline mr-auto">

                    <ul class="navbar-nav mr-3">

                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="align-justify"></i></a>
                        </li>


                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn"> <i data-feather="maximize"></i></a>
                        </li>


                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element"> <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200"> <button class="btn" type="submit"> <i class="fas fa-search"></i> </button> </div>
                            </form>
                        </li>

                    </ul>

                </div>

            </nav>


            <div class="main-sidebar sidebar-style-2">

                <aside id="sidebar-wrapper">

                    <!-- ############################## LOGO ############################## -->
                    <div class="sidebar-brand">
                        <a href="index.php"><img alt="image" src="assets/img/logo.png" class="header-logo" /><span class="logo-name" style="font-size: 14px;"> Chunkutia Dorbar
                        </a>
                    </div>


                    <!-- ############################## SIDEBAR ############################## -->
                    <ul class="sidebar-menu">

                        <li class="dropdown active"><a href="index.php" class="nav-link"> <i data-feather="monitor"></i> Dashboard</a>
                        </li>


                        <li class="dropdown"><a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i>Home</a>
                            <ul class="dropdown-menu">
                                <li> <a class="nav-link" href="slider.php">Slider</a> </li>
                                <li><a class="nav-link" href="wellbeing.php">Wellbeing</a></li>
                                <li><a class="nav-link" href="wisdom.php">Latest Wisdom</a></li>
                                <li><a class="nav-link" href="inner_engg.php">Inner Engineering</a></li>
                                <li><a class="nav-link" href="save_soil.php">Save Soil</a></li>
                                <!-- <li><a class="nav-link" href="table_covid.php">Covid Action</a></li> -->
                                <li><a class="nav-link" href="outreach.php">Outreach</a></li>
                                <li><a class="nav-link" href="voluntary.php">Voluntary Work</a></li>
                                <li><a class="nav-link" href="meet.php">Meet</a></li>
                                <li><a class="nav-link" href="blogs.php">Latest Blogs</a></li>

                            </ul>
                        </li>

                        <li class="dropdown"><a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i>About</a>
                            <ul class="dropdown-menu">
                                <li> <a class="nav-link" href="mission.php">About</a> </li>
                               
                                <li><a class="nav-link" href="about_outreach.php">About Outreach</a></li>
                                <li><a class="nav-link" href="educational_initiatives.php">Educational Initiatives</a></li>
                               
                                <li><a class="nav-link" href="related_programs.php">Related Programs</a></li>
                                <li><a class="nav-link" href="related_articles.php">Related Articles</a></li>

                            </ul>
                        </li>
                        
                        <li class="dropdown"><a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i>Sadar Uddin Ahmad Chisty</a>
                            <ul class="dropdown-menu">
                                <li> <a class="nav-link" href="suac-institiute.php">Institute</a> </li>
                                <li><a class="nav-link" href="suac_music_academy.php">Music Academy</a></li>
                                <li><a class="nav-link" href="suac-audio.php">Audio</a></li>
                                <li><a class="nav-link" href="suac-video.php">Video</a></li>
                                 <li><a class="nav-link" href="suac-lineage-list.php">Lineage List</a></li>
                                 <li><a class="nav-link" href="suac-herabon.php">Herabon</a></li>
                                  <li><a class="nav-link" href="suac-archive.php">Archive</a></li>
                                  <li><a class="nav-link" href="suac-bio.php">Bio</a></li>
                          
                            </ul>
                        </li>


                        <li class="dropdown"><a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i>Imamia Chistia Nezamia Sangha</a>
                            <ul class="dropdown-menu">
                                <li> <a class="nav-link" href="icns-time-table-of-program.php">Time table of Program</a> </li>
                                <li><a class="nav-link" href="icns-program-schedule.php">Program Schedule</a></li>
                                <li><a class="nav-link" href="icns-video.php">Videos</a></li>
                                <li><a class="nav-link" href="icns-branch-of-imamia.php">Branch of Imamia Chistia</a></li>
                                <li><a class="nav-link" href="table_nizamia_sangha.php">Nizamia Sangha</a></li>
                                <li><a class="nav-link" href="icns-photo-gallery.php">Photo Gallery</a></li>
                                <li><a class="nav-link" href="icns-different-shrines.php">Different Shrines</a></li>
                     
                            </ul>
                        </li>


                        <li class="dropdown"><a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i>Imamia Chistia Publisher</a>
                            <ul class="dropdown-menu">
                                <li> <a class="nav-link" href="icp-books.php">Books</a> </li>
                                <li><a class="nav-link" href="icp-audio.php">Audio</a></li>

                            </ul>
                        </li>


                        <li class="dropdown"><a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i>Sadria Society</a>
                            <ul class="dropdown-menu">
                                <li> <a class="nav-link" href="ss-match-making.php">Match Making</a> </li>
                                <li><a class="nav-link" href="ss-member-list.php">Member List</a></li>
                                 <li><a class="nav-link" href="ss_upcoming_event.php">Upcomming Events</a></li>

                            </ul>
                        </li>
                        <li class="dropdown"><a href="news.php" ><i data-feather="home"></i> News</a></li>
                        <li class="dropdown"><a href="dorbar_exclusive.php" ><i data-feather="home"></i> Dorbar Exclusive</a></li>
                        <li class="dropdown"><a href="contact_message.php" ><i data-feather="home"></i> Contact Messages</a></li>
                        <li class="dropdown"><a href="book_order.php" ><i data-feather="home"></i> Ordered Books</a></li>
                    </ul>

                </aside>

            </div>



            <!-- ############################## Main Content ############################## -->
            <div class="main-content">