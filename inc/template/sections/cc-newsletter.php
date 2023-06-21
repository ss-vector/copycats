<section class="subscription">
  <div class="container-fluid">
  <?php
  if (isset( $_POST['submit'] ) ) {
      # code
    } else { ?>
      <!-- Show form -->
      <form id="formid" action="" method="POST">
      <h3>Suscríbete</h3>
      <span>Mantente informado de nuestros productos y servicios</span>
      <input type="text" name="inputname" value="" />
      <input type="submit" name="submit" value="submit" />
      </form>
  <?php
    }
  ?>
  </div>
</section>