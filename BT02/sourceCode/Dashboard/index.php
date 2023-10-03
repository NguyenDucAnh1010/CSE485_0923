<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="http://w3cms.makaanlelo.com/media/Configurations/favicon_2kIJcwk.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/root.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("../Support/menu.php") ?>

    <div class="col-md-10 offset-md-2">
    <header class="header vw-100">
        <div class="d-flex align-items-center header_menu justify-content-between">
            <div class="bar_menu d-flex">
                <div class="d-flex align-items-center">
                    <div class="me-4">
                        <div class="Taskbar">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="NamePage">
                        <h2 class="fw-bold">Dashboard</h2>
                    </div>
                </div>
            </div>
            <div class="fix_Point">
                <div class="form-searchs">
                    <form class="form-group d-flex align-items-center">
                        <a class="icon-search" href="#"><i class="bi bi-search"></i></a>
                        <input class="form-control" id="" placeholder="Search here...">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-right rounded-start-5 d-flex align-items-center flex-column bg-white justify-content-between">
    <img src="../../img/5_UwuAZQl.jpg" alt="" class="userLogo">
        <div class="tools d-flex flex-column align-items-center justify-content-between">
            <a class="nav-link nav-nofications rounded d-flex justify-content-center align-items-center" href="#"><i class="bi bi-gear-fill fs-5 pb-1"></i></a>
            <a class="nav-link nav-nofications rounded d-flex justify-content-center align-items-center" href="#"><i class="bi bi-envelope-fill fs-5 pb-1"></i></a>
            <a class="nav-link nav-nofications rounded d-flex justify-content-center align-items-center" href="#"><i class="bi bi-bell-fill fs-5 pb-1"></i></a>
        </div>
        <div class="languages">
            <div class="icon-Languages"><img src="../../img/en.png"></div>
            <div class="change-languages">
                <a class="current nav-link" href="#">en <i class="bi bi-chevron-compact-down"></i></a>
                <div class="dropdown-menuer">
                    <a class="en nav-link">en</a>
                    <a class="en nav-link">vie</a>
                    <a class="en nav-link">khua</a>
                </div>
            </div>
        </div>
    </div>

    <?php include("../Support/dashboard.php") ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../js/click_Menu.js"></script>
</body>

</html>