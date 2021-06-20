<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    setInterval(function() {
        if ($(".form-control").val().length === 0) {
            $(".btn").addClass('disabled');
        } else {
            $(".btn").removeClass('disabled');
        }
    }, 10);
</script>