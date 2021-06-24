<div class="footer fixed-bottom">
    <span>This website is purely satirical and does not intentionally collect, transmit, or store any banking information related to its users. Please don't sue me.</span>
    <span>&copy; Wyatt Johnson <?php echo date('Y'); ?></span>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    setInterval(function() {
        if($(".form-control").length) {
            if ($(".form-control").val().length === 0) {
                $(".btn").addClass('disabled');
            } else {
                $(".btn").removeClass('disabled');
            }
        }
    }, 10);
    function disabled() {
        alert('This feature has been disabled on your account.');
    }
    function redirectWithoutForm(e, url) {
        e.preventDefault();
        if ($(".form-control").val().length > 0) {
            window.location.href = url;
        }
        return false;
    }
</script>
<body>