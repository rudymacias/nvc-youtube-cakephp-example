<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Videos</h1>
    <p class="lead text-muted">Browse videos uploaded by our users.</p>
    <p>
      <?php echo $this->Html->link('<i class="fas fa-plus-circle"></i> Add Video', ['action' => 'add'], ['class' => 'btn btn-danger my-2', 'escape' => false]); ?>
      <?php echo $this->Html->link('<i class="fas fa-users"></i> See all Users', ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-info my-2', 'escape' => false]); ?>
    </p>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <?php foreach ($videos as $video): ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://cdn.dribbble.com/users/329207/screenshots/4232597/2001_bemocs_sp_lunar_woods_dribbble.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><?php echo $video->title; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <?php echo $this->Html->link('View', ['action' => 'view', $video->id], ['class' => 'btn btn-sm btn-outline-secondary']); ?>
                  <?php echo $this->Html->link('Edit', ['action' => 'edit', $video->id], ['class' => 'btn btn-sm btn-outline-secondary']); ?>
                </div>
                <small class="text-muted">
                  <?php echo $this->Time->format(
                    $video->created,
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
