<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?= __('Groups') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="projects-nav">
    <form class="form-inline">
      <?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index'], array('class' => 'btn btn-link')) ?>
      <?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index'], array('class' => 'btn btn-link')) ?>
      <?= $this->Html->link(__('Add User'), ['action' => 'add'], array('class' => 'btn btn-outline-success')) ?>
    </form>
  </div>
</nav>
<div class="container-fluid">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->email) ?></td>
                <td><img src="<?= h($user->image) ?>"/></td>
                <td><?= h($user->token) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                  <div class="btn-group" role="group" aria-label="Row functions">
                    <?= $this->Html->link("<i class='fa fa-eye'></i>", ['action' => 'view', $user->id], array('class' => 'btn btn-link', 'title' => __('View'), 'escape' => false)) ?>
                    <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['action' => 'edit', $user->id], array('class' => 'btn btn-link', 'title' => __('Edit'), 'escape' => false)) ?>
                    <?= $this->Form->postLink("<i class='fa fa-trash'></i>", ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-link', 'title' => __('Delete'), 'escape' => false]) ?>
                  </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
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
