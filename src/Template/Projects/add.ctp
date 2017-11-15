<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="projects form large-9 medium-8 columns content">
    <?= $this->Form->create($project) ?>
    <fieldset>
        <legend><?= __('Add Project') ?></legend>
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
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
