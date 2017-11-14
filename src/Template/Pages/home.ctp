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
    <form class="searchbar layout__searchbar" style="visibility: hidden">
      <input type="text" class="searchbar__input" placeholder="Search eGovernment applications" name="q" value="">
      <button class="searchbar__button"><?= $this->Html->image('searchbar-icon.svg') ?></button>
    </form>
    <?php foreach ($cbases as $cbase): ?>
    <div class="layout__row">
        <div class="layout__list-meta">
          <div class="list-summary">
            <a href="/<?= $cbase->name ?>">
              <h2 class="list-summary__title"><?= $cbase->name ?></h2>
            </a>
            <div class="list-summary__count"><?= count($cbase->projects) ?> projects</div>
            <div><?= $cbase->created->format(DATE_RFC850) ?></div>
            <p class="list-summary__description">Deze lijst wordt bijgehouden door Code for NL. Voor meer informatie, zie <a href="http://www.codefor.nl">www.codefor.nl</a>. De lijst bevat personen, organisaties, projecten en applicaties op het vlak van digitale overheid en open source samenwerking.</p>
            <a href="/" class="back-link layout__back" style="text-align: left; display: block; margin-top: 20px">&larr; Back to homepage</a>
            <div class="list-summary__curator">
                <div class="curator">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAArrAAAAJDI3ZDk5NWNmLTk0OGUtNDQ2OS04YWU0LTVhYzRkNGMwYmJlYg.jpg" class="curator__avatar">
                    <div class="curator__contact">
                      <h3 class="curator__name">Johan Groenen</h3>
                      <div class="curator__badge">curator</div>
                      <a href="mailto:johan@codefornl" class="curator__email">johan@codefornl</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div>

        </div>
        <div class="layout__project-list">
          <?php foreach ($cbase->projects as $project): ?>
            <a href="/<?= $cbase->name ?>/<?= $project->id ?>/<?= $project->name ?>">
              <div class="project layout__project-list-item">
                <img src="http://img.codefor.nl?url=https%3A%2F%2Fzoek.officielebekendmakingen.nl%2Fstcrt-2014-37951-1.png&height=426&width=640" class="project__image">
                <div class="project__meta">
                    <div class="project__summary">
                        <h3 class="project__title"><?= $project->name ?></h3>
                        <h4 class="project__location"><?= $project->country ?></h4>
                    </div>
                    <div class="project__tools">
                        <img src="/svg/tools-icon.svg" class="project__tools-icon">
                        <span class="project__tools-count">1 tool</span>
                    </div>
                </div>
              </div>
          </a>

          <?php endforeach; ?>




        </div>

    </div>
    <?php endforeach; ?>
