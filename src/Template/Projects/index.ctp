<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?= __('Projects') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="projects-nav">
    <form class="form-inline">
      <?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index'], array('class' => 'btn btn-link')) ?>
      <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], array('class' => 'btn btn-link')) ?>
      <?= $this->Html->link(__('Add Project'), ['action' => 'add'], array('class' => 'btn btn-outline-success')) ?>
    </form>
  </div>
</nav>
<div class="container-fluid">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organisation') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('download') ?></th>-->
                <!--<th scope="col"><?= $this->Paginator->sort('license') ?></th>-->
                <!--<th scope="col"><?= $this->Paginator->sort('published') ?></th>-->
                <!--<th scope="col"><?= $this->Paginator->sort('created') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('group_id') ?></th>-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
            <?php if ($project->published == 1): ?>
            <tr>
            <?php endif; ?>
            <?php if ($project->published == 0): ?>
            <tr class="text-muted">
            <?php endif; ?>
                <td><?= $this->Number->format($project->id) ?></td>
                <td><a href="<?= h($project->website) ?>"><?= h($project->name) ?></a></td>
                <td><img src="<?= h($project->image) ?>" height="200" width="200"/></td>
                <td><?= h($project->type) ?></td>
                <td><?= h($project->country) ?></td>
                <td><?= h($project->category) ?></td>
                <td><?= h($project->organisation) ?></td>
                <!--<td><?= h($project->download) ?></td>-->
                <!--<td><?= h($project->license) ?></td>-->
                <!--<td><?= h($project->published) ?></td>-->
                <!--<td><?= h($project->created) ?></td>-->
                <td><?= h($project->modified) ?></td>
                <!--<td><?= $this->Number->format($project->group_id) ?></td>-->
                <td class="actions">
                  <div class="btn-group" role="group" aria-label="Row functions">
                    <?= $this->Html->link("<i class='fa fa-eye'></i>", ['action' => 'view', $project->id], array('class' => 'btn btn-link', 'title' => __('View'), 'escape' => false)) ?>
                    <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['action' => 'edit', $project->id], array('class' => 'btn btn-link', 'title' => __('Edit'), 'escape' => false)) ?>
                    <?= $this->Form->postLink("<i class='fa fa-trash'></i>", ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'btn btn-link', 'title' => __('Delete'), 'escape' => false]) ?>
                  </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <nav aria-label="Result table navigation">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
