<div class="jumbotron">
  <div class="container">
    <h1 class="display-3"><?php echo $video->title; ?></h1>
    <p><?php echo $video->description; ?></p>
    <p>By: <?php echo $this->Html->link($video->user->first_name, ['controller' => 'users', 'action' => 'view', $video->user->id], ['class' => 'btn btn-sm btn-outline-secondary']); ?></p>
  </div>
</div>

<div class="container">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="<?php echo $video->url; ?>" allowfullscreen></iframe>
  </div>
</div>
