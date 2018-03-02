<div class="container">
  <div class="py-5 text-center">
    <h2>Edit Video</h2>
    <p class="lead">Modify video below.</p>
  </div>
  <div class="row">
    <div class="col">
      <?php
        echo $this->Form->create($video);
          echo $this->Form->control('title', ['class' => 'form-control mb-3']);
          echo $this->Form->control('description', ['class' => 'form-control mb-3']);
          echo $this->Form->control('url', ['type' => 'email', 'class' => 'form-control mb-3']);
          echo '<hr class="mb-4">';
          echo $this->Form->button('Save changes', ['class' => 'btn btn-danger btn-lg btn-block']);
        echo $this->Form->end();
      ?>
    </div>
  </div>
</div>
