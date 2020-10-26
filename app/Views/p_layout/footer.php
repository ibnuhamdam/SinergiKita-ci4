<footer class="fixed mt-3">
    All Right Reserved @Sinergi Kita 2020
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<!-- Jquery Mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<?php
$uri = service('uri');
if ($uri->getSegment(2) == "" || $uri->getSegment(2) == "add_product" || $uri->getSegment(2) == "add-product") {
?>
    <script>
        var loadFile = function(event) {
            var imageWrap = document.getElementById('show');
            var list = document.getElementById('fa-camera');
            var image = document.getElementById('img-show');
            image.src = URL.createObjectURL(event.target.files[0]);
            list.style.display = "none";
            imageWrap.style.backgroundColor = "none";
            imageWrap.style.height = "auto";
        };
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            // Format mata uang.
            $('.uang').mask('000.000.000.000.000.000', {
                reverse: true
            });

        })
    </script>
<?php
} else if ($uri->getSegment(2) == "ubah-profile" || $uri->getSegment(2) == "ubah-product" || $uri->getSegment(2) == "ubah_profile" || $uri->getSegment(2) == "ubah_product") {
?>
    <script>
        var loadFile = function(event) {
            var imageWrap = document.getElementById('show');
            var image = document.getElementById('img-show');
            image.src = URL.createObjectURL(event.target.files[0]);
            imageWrap.style.backgroundColor = "none";
            imageWrap.style.height = "auto";
        };
    </script>
    <script>
        var input = document.getElementById('file_ava');
        input.style.display = "none";

        function change() {
            $(document).ready(function() {
                $("#file_ava").click();
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            // Format mata uang.
            $('.uang').mask('000.000.000.000.000.000', {
                reverse: true
            });

        })
    </script>
<?php
} ?>

<script>
    $('#delete').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#delete-btn').attr("href", '<?= base_url('Penjual/delete_product') ?>/' + id)
    })
</script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>