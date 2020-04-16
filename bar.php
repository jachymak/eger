<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BAR</title>
  <link rel="shortcut icon" href="/mirro/img/favicon.ico" type="image/x-icon">
  <script src="/mirro/sassets/js/script.js"></script>
  <script src="../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css" />
  <script type="text/javascript">
  $(document).ready(function() {
  $('.Box').on("keyup", function(e) {
      var $input = $(this);
      if ($input.val().length == 0 && e.which == 8) {
        $input.toggleClass("productkey2 productkey1").prev('.Box').focus();
      }
      else if ($input.val().length >= parseInt($input.attr("maxlength"), 10)) {
        $input.toggleClass("productkey1 productkey2").next('.Box').focus();
      }
  });
});</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body style="background-color: #dadddf;" align="center">

  <div class="vypito_formular">
  <form method="post" action="/mirro/bar-upload.php" id="vypito_form">
  <input class="Box productkey1" id="prvni_vypito" type="text" name="kdo_id" maxlength="2" autocomplete="off" placeholder="kdo" required>
  <input class="Box productkey1" type="text" name="co" maxlength="3" autocomplete="off" placeholder="co" required>
  <input type="submit"
       style="position: absolute; left: -9999px; width: 1px; height: 1px;"
       tabindex="-1" />
  </form>
</div>
<script type="text/javascript">vypito_form.prvni_vypito.focus();</script>
</body>
</html>
