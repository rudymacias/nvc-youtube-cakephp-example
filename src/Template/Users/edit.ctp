<h1>Edit User</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->control('first_name');
    echo $this->Form->control('email', ['type' => 'email']);
    echo $this->Form->button(__('Save User'));
    echo $this->Form->end();
?>
