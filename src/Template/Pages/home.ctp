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

$this->layout = false;
$cakeDescription = 'Clarity Market Place - Maidstone Council';
?>
<!DOCTYPE html>
<html>
  <head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('foundation.css') ?>
    <?= $this->Html->css('style.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <?= $this->Html->css('additions.css') ?>
  </head>
  <body class="layout">
    <header class="main-header layout__main-header">
      <a href="/">
        <?= $this->Html->image('clarity-marketplace-logo.svg',['class' => 'main-header__logo', 'alt' => 'Clarity marketplace']) ?>
      </a>
    </header>
    <main class="main-content layout__main-content">
      <form class="searchbar layout__searchbar" style="visibility: hidden">
        <input type="text" class="searchbar__input" placeholder="Search eGovernment applications" name="q" value="">
        <button class="searchbar__button"><?= $this->Html->image('searchbar-icon.svg') ?></button>
      </form>
    </main>
  </body>
</html>
