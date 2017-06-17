    <footer class="w3-container w3-padding-64 w3-center w3-opacity">
      <div class="w3-xlarge w3-padding-32">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
     </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include jQuery Popup Overlay -->
    <script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>
    <script>
      $(document).ready(function() {

        // Initialize the plugin
        $('#fade').popup();

      });
    </script>

    <script src="https://unpkg.com/vue"></script>
    <script src="../../private/js/script.js"></script>
  </body>
</html>

<?php if(isset($db)) { db_close($db); } ?>
