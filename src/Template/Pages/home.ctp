<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

?>
  <div class="row">
    <div class="col text-center">
      <form class="searchbar layout__searchbar" style="visibility: hidden">
        <input type="text" class="searchbar__input" placeholder="Search eGovernment applications" name="q" value="">
        <button class="searchbar__button"><?= $this->Html->image('searchbar-icon.svg') ?></button>
      </form>
    </div>
  </div>
  <?php foreach ($groups as $group): ?>
  <div class="row">
      <div class="col-lg-3">
        <div class="row">
          <div class="col-12">
            <p><a href="/<?= $group->name ?>"><h2><?= $group->name ?></h2></a></p>
            <p><?= count($group->projects) ?> projects</p>
            <p><?= $group->description ?></p>
            <p><small class="text-muted"><?= $group->created->format(DATE_RFC850) ?></small></p>
          </div>
        </div>
          <?php if (sizeof($group->users) > 0): ?>
            <div class="row">
                <div class="col-12">
                  <div class="card text-white bg-dark mb-3">
                    <div class="card-block">
                      <div class="row">
                        <div class="col-md-8 col-sm-8">
                          <p class="text-muted">Curator</p>
                          <p class="card-text"><?= $group->users[0]->name ?></p>
                        </div>
                        <div class="col-md-2 col-sm-2 text-center">
                          <img class="user-image" src="<?= $group->users[0]->image ?>" alt="" style="border-radius:50%;">
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                          <a class="btn btn-primary btn-block btn-md" href="mailto:<?= $group->users[0]->email ?>">Contact</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          <?php endif; ?>
      </div>
      <div class="col-lg-9">
        <div class="container">
          <?php $i = 1; ?>
              <?php foreach ($group->projects as $project): ?>
              <?php if ($i == 1): ?>
                <div class="card-deck">
              <?php endif; ?>
                  <div class="card text-center">
                    <div class="card-header-image" src="" alt="" style="background-image: url(<?= $project->image ?>)"></div>
                    <div class="card-body">
                      <h4 class="card-title"><?= $project->name ?></h4>
                      <p class="card-text"><?= $project->country ?></p>
                    </div>
                    <div class="card-footer">
                      <a href="/<?= $group->name ?>/<?= $project->id ?>/<?= $project->name ?>" class="btn btn-primary">More</a>
                    </div>
                  </div>
              <?php
                $i = $i + 1;
                if ($i == 5):
                  $i = 1;
                  ?>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
                </div>
    <?php endforeach; ?>
