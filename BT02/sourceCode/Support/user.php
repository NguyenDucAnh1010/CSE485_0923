<?php
    include("../Connect/connect.php");

    if (isset($_GET['page']) && $_GET['page']>=1) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $n = 10 * ($page - 1);

    $sql = "SELECT * FROM user LIMIT $n,10";
    $sqlTotalRecords = "SELECT COUNT(*) as total FROM user";
    $resultTotalRecords = mysqli_query($conn, $sqlTotalRecords);
    $rowTotalRecords = mysqli_fetch_assoc($resultTotalRecords);
    
    $totalRecords = $rowTotalRecords['total'];
    $results = mysqli_query($conn, $sql);
?>

<div class="bg-none">
    <div class="filer bg-white ps-5 pe-5">
        <div class="filer-dropdown container-fuild d-flex justify-content-between align-items-center class-pointer pt-4">
            <div class="nav-item color-primary d-flex align-items-center">
                <a href="#" class="nav-link fw-bold">Filter</a>
            </div>
            <div class="rounded-circle mm-active text-center icon-chevron"><i class="bi bi-chevron-up text-white"></i>
            </div>
        </div>
        <form class="form-group mt-3 d-flex justify-content-between" action="../../test/test_POST.php" method="post">
            <input type="text" id="Email" placeholder="Email" name="Email" class="form-control w-3">
            <input type="text" id="Mobile" placeholder="Mobile" name="Mobile" class="form-control w-3">
            <select class="form-select w-3">
                <option>Select Group</option>
            </select>
            
            <button class="btn btn-filter"><i class="bi bi-search"></i> <span>Filter</span></button>
            <button class="btn btn-clear">Clear</button>
        </form>
    </div>
    <div>
        <?php
            if (isset($_GET['success'])){
                echo "<h2 style='color: red'>Bạn đã xoá thành công id: {$_GET['success']}</h2>";
            }
        ?>
    </div>
    <div class="page bg-white ps-5 pe-5 mt-5">
        <div class="text-left color-primary fw-bold mb-1 border-bottom pb-2">
            Users
            <div class="d-flex">
                <a href="" id="delete_multiple">
                    <button type="button" id="delete_multiple_btn" data-url="/en/dashboard/delete-multiple-user/" class="btn btn-delete">
                        Delete
                    </button>
                </a>
                
                <a href="user_add.php" class="btn btn-add">ADD USER <span class="btn-icon-end">
                    <i class="bi bi-plus-lg"></i></span>
                </a>
            </div>
        </div>
        <div class="ShowPage mt-5">
            <table class="table-user">
                <thead class="border-bottom">
                    <tr>
                        <th><input type="checkbox" class="form-check-input" id="selectAll"></th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($results as $result) {
                    ?>
                        <tr class="border-bottom">
                            <td><input type="checkbox" class="form-check-input" value="<?php echo $result['id'];?>"></td>
                            <td> <?php echo $result['username']; ?></td>
                            <td> <?php echo $result['email']; ?></td>
                            <td> <?php echo $result['mobilephone']; ?></td>
                            <td>
                                <a class="fs-4 color-primary" href="http://localhost/W3CMS/sourceCode/User/user_detail.php?id=<?php echo $result['id'];?>">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                            </td>
                            <td>
                                <a class="fs-4 color-primary" href="http://localhost/W3CMS/sourceCode/User/user_edit.php?id=<?php echo $result['id'];?>">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                            </td>
                            <td>
                                <a class="fs-4 color-primary user-delete-link" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="wrapper mt-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php if ($page > 1) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
                <?php } ?>

                <?php 
                if ($page<$totalRecords/10 || $page+1<$totalRecords/10){
                    for ($i = $page; $i <= $page+2; $i++){?>
                        <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                <?php 
                    }
                }else{ ?>
                    <li class="page-item active">
                        <a class="page-link" href="?page=<?php echo $page; ?>"><?php echo $page; ?></a>
                    </li>
                <?php }?>

                <?php if ($page <$totalRecords/10) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Bạn có chắc chắn muốn xóa người dùng này không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
        <a href="http://localhost/W3CMS/sourceCode/User/user_delete.php?id=<?php echo $result['id'];?>"><button type="button" class="btn btn-primary">Yes</button></a>
      </div>
    </div>
  </div>
</div>

<script>
    // Lấy thẻ checkbox tiêu đề và tất cả các checkbox hàng trong tbody
    const selectAllCheckbox1 = document.getElementById('selectAll');
    const checkboxes1 = document.querySelectorAll('tbody input[type="checkbox"]');

    // Thêm sự kiện click vào checkbox tiêu đề
    selectAllCheckbox1.addEventListener('click', function () {
        checkboxes1.forEach(function (checkbox1) {
            checkbox1.checked = selectAllCheckbox1.checked;
        });
    });

    // Lấy thẻ button "Delete"
    const deleteButton = document.getElementById('delete_multiple_btn');

    // Lấy thẻ button "Delete"
    const deletelink = document.getElementById('delete_multiple');

    // Thêm sự kiện click vào button "Delete"
    deleteButton.addEventListener('click', function () {
        if (confirm("Bạn có chắc chắn muốn xóa các người dùng đã chọn không?")) {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked:not(#selectAll)');
            const userIds = [];

            checkboxes.forEach(function (checkbox) {
                userIds.push(checkbox.value);
            });

            if (userIds.length > 0) {
                deletelink.href = "../Post/post_delete.php?id="+userIds;
            } else {
                alert("Hãy chọn ít nhất một người dùng để xóa.");
            }
        }
    });

    
    // const anchorElement = document.getElementById('myAnchor');
    // // Thêm sự kiện click vào thẻ <a>
    // anchorElement.addEventListener('click', function(event) {
    //     // Đây là nơi bạn xử lý sự kiện click.
    //     // event.preventDefault(); // Nếu bạn muốn ngăn chặn hành vi mặc định của thẻ <a>.
    //     if (!confirm("Bạn có chắc chắn muốn xóa người dùng này không?")) {
    //         anchorElement.href = "";
    //     }
    // });
</script>