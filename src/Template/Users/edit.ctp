<div class="container">
  <div class="py-5 text-center">
    <h2>Edit User</h2>
    <p class="lead">Modify user below.</p>
  </div>
  <div class="row">
    <div class="col">
      <?php
        echo $this->Form->create($user);
          echo $this->Form->control('first_name', ['class' => 'form-control mb-3']);
          echo $this->Form->control('last_name', ['class' => 'form-control mb-3']);
          echo $this->Form->control('email', ['type' => 'email', 'class' => 'form-control mb-3']);
          echo $this->Form->control('password', ['type' => 'password', 'class' => 'form-control mb-3']);
          echo $this->Form->control('phone', ['type' => 'tel', 'class' => 'form-control mb-3']);
          echo '<hr class="mb-4">';
          echo $this->Form->button('Save changes', ['class' => 'btn btn-danger btn-lg btn-block']);
        echo $this->Form->end();
      ?>
      <hr>
      <?php echo $this->Form->postLink(
        'Delete',
        ['action' => 'delete', $user->id],
        ['confirm' => 'Are you sure?', 'class' => 'btn btn-info btn-lg'])
      ?>
    </div>
  </div>
</div>
