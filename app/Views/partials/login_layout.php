<div class="container" style="margin-top: 100px;">
  <h2 class="text-center">Giriş Yap</h2>
  <form method="POST" action="<?= base_url('login/authenticate'); ?>">
    <div class="form-group">
      <label for="username">Kullanıcı Adı</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Şifre</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Giriş Yap</button>
    </div>
  </form>
</div>