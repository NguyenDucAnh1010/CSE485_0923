<script>
    window.onbeforeunload = function() {
        // Gửi yêu cầu đến máy chủ để huỷ phiên làm việc
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '../logout.php', true);
        xhr.send();
    };
</script>