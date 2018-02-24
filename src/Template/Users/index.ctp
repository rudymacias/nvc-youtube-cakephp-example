<h1>Users</h1>
<table>
  <tr>
    <th>Name</th>
    <th>Created</th>
  </tr>
  <?php foreach ($users as $user): ?>
    <tr>
      <td><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></td>
      <td><?php echo $user->created; ?></td>
    </tr>
  <?php endforeach; ?>
</table>