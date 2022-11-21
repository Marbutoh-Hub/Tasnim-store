<div class="form-login">
  <div class="header-login">
    <img id="logo-login" src="images/logo-login.png" alt="" >
  </div>
  <div class="title-login">
    <h5>Sign in To <span id="text-admin"> Admin</span> </h5>
  </div>
  <div class="content-login">
    <form id="input-login" action="">
      <div class="ussername">
        <label for="ussername">Ussername</label>
        <input type="text" id="ussername" >
      </div>
      <div class="password">        
        <label for="password">Password</label>
        <input type="password"  id="password" >
      </div>
      <button type="submit" id="btn-submit">Sign in</button>
    </form>
  </div>
  <div class="footer">
    <div class="header-footer">
      <p>New Admin ? <a href="contact-super-admin.php">Contact super admin</a></p>
    </div> 
    <div class="footer-footer">
    <p>&copy 2022 Copyright : TasnimStore | <a href="">Terms</a> <a href="">Privacy</a></p>
    </div>
  </div>
</div>
<script>
    $("#input-login").submit(function( event ) {
      event.preventDefault();
      $("title").text('Dashboard')
      $("#main-container").load("component-dashboard/index.php");
    });
</script>