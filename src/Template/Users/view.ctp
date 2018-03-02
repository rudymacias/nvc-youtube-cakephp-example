<div class="jumbotron">
  <div class="container">
    <h1 class="display-3"><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></h1>
    <p><?php echo $user->email; ?></p>
  </div>
</div>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <?php foreach ($user->videos as $video): ?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://cdn.dribbble.com/users/329207/screenshots/4232597/2001_bemocs_sp_lunar_woods_dribbble.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"><?php echo $video->title; ?> <?php echo $video->title; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <?php echo $this->Html->link('View', ['controller' => 'videos', 'action' => 'view', $user->id], ['class' => 'btn btn-sm btn-outline-secondary']); ?>
                  <?php echo $this->Html->link('Edit', ['controller' => 'videos', 'action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-outline-secondary']); ?>
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