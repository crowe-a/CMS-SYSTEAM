<div class="container">

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($users) && is_array($users)): ?>
          <?php foreach ($users as $user): ?>
          <tr>
              <td><?= esc($user['username']); ?></td>
              <td><?= esc($user['email']); ?></td>
              <td><?= esc($user['role']); ?></td>
          </tr>
          <?php endforeach; ?>
      <?php else: ?>
          <tr>
              <td colspan="3">No users found.</td>
          </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>