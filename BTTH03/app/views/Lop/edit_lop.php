<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music For Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body class="mx-5">
    
    <?php require_once APP_ROOT.'/app/support/header.php'; ?>
    
    <div class="m-5 text-center">
        <div class="mx-5">
            <form action="?controller=lop&action=edit" method="post">
                <h2 class="mb-4">SỬA THÔNG TIN LỚP</h2>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text ms-5" id="addon-wrapping">Mã thể loại</span>
                    <input type="text" class="form-control me-5" aria-label="ma_tloai" aria-describedby="addon-wrapping" name="id" value="<?php echo $lop->getId(); ?>" readonly>
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text ms-5" id="addon-wrapping">Tên thể loại</span>
                    <input type="text" class="form-control me-5" aria-label="ten_tloai" aria-describedby="addon-wrapping" name="tenLop" value="<?php echo $lop->getTenLop(); ?>">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
                    <button type="submit" class="btn btn-success px-4 m-0">Lưu lại</button>
                    <a href="?controller=lop&action=index">
                        <button type="button" class="btn btn-warning px-4 m-0">Quay lại</button>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <?php require_once APP_ROOT.'/app/support/footer.php'; ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>