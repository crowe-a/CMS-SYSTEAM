<div class="jumbotron text-center" style="height: 250px;">
  <div class="container">
    <div class="row align-items-center" style="margin-left: -320px;">
      <!-- Search Bar -->
      <div class="col-md-4 col-sm-12" style="margin: 0 auto; margin-top: 50px">
        <form>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." required>
            <div class="input-group-btn">
              <button type="button" class="btn btn-danger">Search</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Logo -->
      <div class="col-md-4 col-sm-12 text-center">
        <a href="<?= base_url('/'); ?>">
        <img src="<?= base_url('/images/new.png'); ?>" alt="MOSFET" class="img-fluid" style="max-width: 100%; height: auto; margin-left:200px;">
            </a>
        </div>
      <!-- Login/Logout -->
      <div class="col-md-4 col-sm-12 text-right" style="margin: 0 auto; margin-top: 50px">
        <a href="#" class="btn btn-link">
          <i class="fas fa-store"></i>
        </a>

        <?php if(session()->get('loggedIn')): ?>
            <a href="<?= base_url('logout'); ?>" class="btn btn-link">
                <i class="fas fa-sign-out-alt"></i>
            </a>
            <span>Hoş geldin, <?= session()->get('username'); ?>!</span>
            
            <!-- Admin Rolü Kontrolü -->
            <?php if(session()->get('role') === 'admin'): ?>
                <!-- Dropdown Menü için Buton -->
                <a href="#" class="btn btn-link" onclick="toggleDropdown()" id="adminPanelButton">
                    <i class="fas fa-cogs"></i> Admin Paneli
                </a>

                <!-- Dropdown Menü -->
                <div id="adminDropdown" class="dropdown-menu">

                  <a class="dropdown-item" href="<?= base_url('/'); ?>">Ana Sayfa</a>
                   <a class="dropdown-item" href="<?= base_url('product_list'); ?>">Ürün Listesi</a>
                  <a class="dropdown-item" href="<?= base_url('product_management'); ?>">Ürün Ekle</a>
                  <a class="dropdown-item" href="<?= base_url('order_management'); ?>">Sipariş Yönetimi</a>
                  <a class="dropdown-item" href="<?= base_url('user_management'); ?>">Kullanıcı Yönetimi</a>

                  </div>
            <?php endif; ?>

        <?php else: ?>
            <a href="<?= base_url('login'); ?>" class="btn btn-link">
                <i class="fas fa-sign-in-alt"></i> Giriş Yap
            </a>
            <a href="<?= base_url('register'); ?>" class="btn btn-link">
                <i class="fas fa-user-plus"></i> Kayıt Ol
            </a>
        <?php endif; ?>

        <!-- Giriş yapıldıktan sonra mesajı yazdırır. -->
        <?php if (session()->getFlashdata('message')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('message'); ?>
            </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  

    <nav class="navbar navbar-default" style=" background-color:#eee; border: none; margin-left: 490px;">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar" style="pozition:">

          <ul class="nav navbar-nav">
            <!-- Dirençler Dropdown Menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dirençler <span class="caret"></span></a>
            </li>

            <!-- Mosfetler Dropdown Menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mosfetler <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">N-Channel MOSFET</a></li>
                <li><a href="#">P-Channel MOSFET</a></li>
              </ul>
            </li>

            <!-- Transistörler Dropdown Menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transistörler <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">NPN Transistör</a></li>
                <li><a href="#">PNP Transistör</a></li>
              </ul>
            </li>

            <!-- Ledler Dropdown Menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ledler <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Kırmızı Led</a></li>
                <li><a href="#">Yeşil Led</a></li>
                <li><a href="#">Mavi Led</a></li>
              </ul>
            </li>

            <!-- Jumperlar Dropdown Menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jumperlar <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Erkek Jumper</a></li>
                <li><a href="#">Dişi Jumper</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
  </nav>






</div>

<script>
  function toggleDropdown() {
    var dropdown = document.getElementById("adminDropdown");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
      dropdown.style.display = "block";
    } else {
      dropdown.style.display = "none";
    }
  }

  // Dropdown dışında bir yere tıklanınca kapatmak için
  window.onclick = function(event) {
    if (!event.target.matches('#adminPanelButton')) {
      var dropdowns = document.getElementsByClassName("dropdown-menu");
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.style.display === "block") {
          openDropdown.style.display = "none";
        }
      }
    }
  }
</script>

