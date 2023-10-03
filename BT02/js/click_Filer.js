// Lấy phần tử có ID "collaps-user-filter"
var collapsibleElement = document.getElementById('collaps-user-filter');

// Lấy nút mà bạn muốn gán hành động (button)
var toggleButton = document.querySelector('[data-bs-toggle="collapse"]');

// Gán hành động cho nút khi được click
toggleButton.addEventListener('click', function () {
    // Lấy giá trị hiện tại của thuộc tính aria-expanded
    var currentAriaExpanded = toggleButton.getAttribute('aria-expanded');

    // Đảo ngược giá trị giữa "true" và "false"
    var newAriaExpanded = (currentAriaExpanded === 'true') ? 'false' : 'true';

    // Thiết lập giá trị mới cho thuộc tính aria-expanded
    toggleButton.setAttribute('aria-expanded', newAriaExpanded);

    // Kiểm tra xem phần tử có lớp "show" không
    if (collapsibleElement.classList.contains('show')) {
        // Nếu có, ẩn đi bằng cách xóa lớp "show"
        collapsibleElement.classList.remove('show');
        // Thêm lớp "collapsed" vào nút
        toggleButton.classList.add('collapsed');
    } else {
        // Nếu không, hiển thị bằng cách thêm lớp "show"
        collapsibleElement.classList.add('show');
        // Loại bỏ lớp "collapsed" khỏi nút
        toggleButton.classList.remove('collapsed');
    }
});