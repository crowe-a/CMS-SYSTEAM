    <!-- register.php -->
    <div class="container" style="margin-top: 100px;">
  <h2 class="text-center">Kayıt Ol</h2>
  <form method="POST" action="<?= base_url('register'); ?>">
    <div class="form-group">
      <label for="username">Kullanıcı Adı</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="email">E-posta</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Şifre</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Kayıt Ol</button>
    </div>
  </form>
</div>

