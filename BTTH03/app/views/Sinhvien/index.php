<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách lớp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body class="mx-5">
    
    <?php require_once APP_ROOT.'/app/support/header.php'; ?>

    <div class="m-5">
        <a href="?controller=sinhvien&action=add_sinhvien">
            <button type="button" class="btn btn-success">Thêm mới</button>
        </a>
        <table class="table">
            <theads">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sinh viên</th>
                    <th scope="col">email</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Mã lớp học</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sinhviens as $sinhvien) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $sinhvien->getId(); ?></th>
                        <td><?php echo $sinhvien->getTenSinhVien(); ?></td>
                        <td><?php echo $sinhvien->getEmail(); ?></td>
                        <td><?php echo $sinhvien->getNgaySinh(); ?></td>
                        <td><?php echo $sinhvien->getIdLop(); ?></td>
                        <td>
                            <a class="fs-4 color-primary" href="?controller=sinhvien&action=edit_sinhvien&ma_svien=<?php echo $sinhvien->getId(); ?>">
                                <i class="bi bi-journal-plus"></i>
                            </a>
                        </td>
                        <td>
                            <a class="fs-4 color-primary user-delete-link" href="" data-bs-toggle="modal" data-bs-target="#modal<?php echo $sinhvien->getId();?>">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="modal<?php echo $sinhvien->getId();?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa sinh viên có id: <?php echo $sinhvien->getId();?>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <a href="?controller=sinhvien&action=delete&ma_svien=<?php echo $sinhvien->getId(); ?>">
                                            <button type="button" class="btn btn-primary">Yes</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require_once APP_ROOT.'/app/support/footer.php'; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>