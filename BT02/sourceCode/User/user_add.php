<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="shortcut icon" type="image/png" href="http://w3cms.makaanlelo.com/media/Configurations/favicon_2kIJcwk.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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
    <?php include("../Support/header.php") ?>

    <div class="bg-none">
        <div class="page bg-white ps-5 pe-5 mt-5">
            <div class="text-left color-primary fw-bold mb-1 border-bottom pb-2">
                Users
            </div>
            <div class="ShowPage mt-5">
                <form action="../Post/post_adđ.php" method="post">
                    <div class="row">
                        <span>user</span>
                        <input type="text" name="username">
                    </div>
                    <div class="row">
                        <span>email</span>
                        <input type="email" name="email">
                    </div>
                    <div class="row">
                        <span>mobilephone</span>
                        <input type="text" name="mobilephone">
                    </div>
                    <div class="row">
                        <span>password</span>
                        <input type="password" name="password">
                    </div>
                    <button type="submit">save</button>
                    <a class="btn" href="http://localhost/W3CMS/sourceCode/User/">cancel</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../js/click_Menu.js"></script>
</body>

</html>