<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="navbar.css">
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="dashboard.html" class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                    </a>
                    <a href="index.html" class="list-group-item list-group-item-action py-2 ripple active">
                        <i class="fas fa-fw fa-user me-3"></i><span>Profile</span>
                    </a>
                    <a href="upload.html" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-notes-medical fa-fw me-3"></i><span>Uploads</span></a>
                    <a href="appointments.html" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-line fa-fw me-3"></i><span>Appointments</span></a>
                    <a href="calender.html" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
                    <a href="checkup.html" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-pie fa-fw me-3"></i><span>Check-Ups</span><a href="aiChatbot.html"
                            class="list-group-item list-group-item-action py-2 ripple">
                            <i class="ri-bard-fill me-3"></i><span>AI Assistant</span></a></a>
                    <a href="medications.html" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-pills fa-fw me-3"></i><span>Medications</span></a>
                    <a href="help.html" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-circle-info fa-fw me-3"></i><span>Help</span></a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/UPTP.png" height="50" alt="MDB Logo" loading="lazy" />
                </a>
                <!-- Search form -->
                <form class="d-none d-md-flex input-group w-auto my-auto">
                    <input autocomplete="off" type="search" class="form-control rounded"
                        placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px;" />
                    <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
                </form>


            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container pt-4">
            <h1 class="text-center my-5">Profile</h1>
            <div class="d-flex align-item-center justify-content-center gap-3 flex-wrap">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Heart Rate</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-bg-danger mb-3 text-light" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <h2 class="m-5 mb-4">My Health Tracking</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">DP</th>
                        <th scope="col">Patient ID</th>
                        <th scope="col">Problem</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><img
                                src="https://www.pngitem.com/pimgs/m/22-220721_circled-user-male-type-user-colorful-icon-png.png"
                                alt="profile" style="width: 45px; height: 45px"></th>
                        <td>11111</td>
                        <td>Typhoid</td>
                        <td>15-3-2022</td>
                        <td><span class="badge rounded-pill badge-success">Cured</span></td>
                    </tr>
                    <tr>
                        <th scope="row"><img
                                src="https://www.pngitem.com/pimgs/m/22-220721_circled-user-male-type-user-colorful-icon-png.png"
                                alt="profile" style="width: 45px; height: 45px"></th>
                        <td>11111</td>
                        <td>Typhoid</td>
                        <td>12-3-2012</td>
                        <td><span class="badge rounded-pill badge-info">Under Treatment</span></td>
                    </tr>
                    <tr>
                        <th scope="row"><img
                                src="https://www.pngitem.com/pimgs/m/22-220721_circled-user-male-type-user-colorful-icon-png.png"
                                alt="profile" style="width: 45px; height: 45px"></th>
                        <td>11111</td>
                        <td>Typhoid</td>
                        <td>22-8-2023</td>
                        <td><span class="badge rounded-pill badge-primary">Looking for Treatment</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <!--Main layout-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>