<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Users</h1>
    <p class="lead text-muted">See all our users that have signed up.</p>
    <p>
      <?php echo $this->Html->link('<i class="fas fa-plus-circle"></i> Add User', ['action' => 'add'], ['class' => 'btn btn-danger my-2', 'escape' => false]); ?>
    </p>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <?php foreach ($users as $user): ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://cdn.dribbble.com/users/329207/screenshots/4232597/2001_bemocs_sp_lunar_woods_dribbble.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <?php echo $this->Html->link('View', ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-outline-secondary']); ?>
                  <?php echo $this->Html->link('Edit', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-outline-secondary']); ?>
                </div>
                <small class="text-muted">
                  <?php echo $this->Time->format(
                    $user->created,
                    'M/d/Y'
                  ); ?>
                </small>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
