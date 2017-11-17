<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
 $this->Form->templates($form_templates['shortForm']);

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?= __('Add Project') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="projects-nav">
    <form class="form-inline">
      <?= $this->Html->link(__('Back to Projects'), ['action' => 'index'], array('class' => 'btn btn-default')) ?>
    </form>
  </div>
</nav>
<div class="container-fluid">
    <?= $this->Form->create($project) ?>
       <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('image');
            echo $this->Form->control('type');
            echo $this->Form->control('country');
            echo $this->Form->control('category');
            echo $this->Form->control('organisation');
            echo $this->Form->control('website');
            echo $this->Form->control('download');
            echo $this->Form->control('license');
            echo $this->Form->control('published');
            echo $this->Form->control('group_id');
        ?>

    <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-default')) ?>
    <?= $this->Form->end() ?>
</div>
