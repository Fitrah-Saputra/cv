<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Fitrah Saputra</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/assets/img/profile.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#certifications">Certifications</a></li>
                <li class="nav-item"><a class="nav-link text-warning" href="logout">Logout</a></li>
                <li class="nav-item mt-2"><a href="/pages/create" class="btn btn-dark">Tambah Data</a>
                    <!-- <li class="nav-item">
                    <?php
                    foreach ($cv as $data) :
                    ?>
                        <a href="pages/edit/<?= $data["id"]; ?>" class="btn btn-warning mt-2">Edit</a>
                    <?php
                    endforeach;
                    ?>
                </li> -->
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <?php
                if (session()->getFlashdata('pesan')) :
                ?>
                    <div class="alert alert-info" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php
                endif;
                ?>
                <h1 class="mb-0">
                    Fitrah
                    <span class="text-primary">Saputra</span>
                </h1>
                <?php
                foreach ($cv as $data) :
                ?>
                    <div class="subheading mb-5">
                        <?= $data["alamat"]; ?>
                    </div>
                <?php
                endforeach;
                ?>
                <?php
                foreach ($cv as $data) :
                ?>
                    <p class="lead mb-5"><?= $data["tentang"]; ?></p>
                <?php
                endforeach;
                ?>
                <div class="social-icons">
                    <a class="social-icon" href="https://www.linkedin.com/in/fitrah-saputra-undefined-2b0a8a238/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="https://github.com/Fitrah-Saputra"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="https://www.instagram.com/fitrahaja._/"><i class="fab fa-instagram"></i></a>
                    <a class="social-icon" href="https://web.facebook.com/fitrah.saputra.395/"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Web Developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laudantium perspiciatis mollitia quam soluta nostrum accusamus deserunt voluptate placeat, quos sint laborum cum illo maiores repellendus facilis similique a unde?</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Desember 2018 - Mei 2019</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Web Designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam id, repellendus dolore quo, nobis voluptatibus quidem magnam optio iusto eum alias voluptates necessitatibus nemo, ab dolorum eligendi neque error aperiam!</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Desember 2019 - Juni 2020</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <div class="subheading mb-3">SD Negeri 8 Bandar Lampung</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Desember 2008 - Juni 2014</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <div class="subheading mb-3">SMP Negeri 10 Bandar Lampung</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Desember 2014 - Juni 2017</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <div class="subheading">SMK Negeri 8 Bandar Lampung</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Desember 2017 - Mei 2020</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mt-3">
                    <div class="flex-grow-1 ">
                        <?php
                        foreach ($cv as $data) :
                        ?>
                            <div class="subheading"><?= $data["pendidikan"]; ?></div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Desember 2020 - Desember 2023</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">
                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                    <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                    <li class="list-inline-item"><i class="fab fa-python"></i></li>
                </ul>
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Ai Assistant
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Web Portofolio
                    </li>
                </ul>
            </div>
        </section>
        <hr class="m-0" />
        <!-- certifications-->
        <section class="resume-section" id="certifications">
            <div class="resume-section-content">
                <h2 class="mb-5">Certifications</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        CCNAv7: Introduction to Networks
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        dicoding - Memulai Pemrograman Dengan Java
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        ORACLE Academy - Database Design Cumulative Final Exam
                    </li>
                    <?php
                    foreach ($cv as $data) :
                    ?>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?= $data["sertifikat_1"]; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?= $data["sertifikat_2"]; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?= $data["sertifikat_3"]; ?>
                        </li>
                    <?php
                    endforeach;
                    ?>
                </ul>
            </div>
        </section>
    </div>

    <!-- algoritma hapus
    <form action="/pages/<?= $data["id"]; ?>" method="post" class="d-inline">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</button>
    </form> -->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>