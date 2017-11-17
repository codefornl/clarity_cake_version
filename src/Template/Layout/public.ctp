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

$cakeDescription = 'Clarity Market Place - Maidstone Council';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/b30cdb304f.js"></script>
    <style>
    .card-deck {
      padding: 0.7em;
    }
    .user-image{
      width: 60px;
      height: 60px;
      -webkit-border-radius: 60px;
      -webkit-background-clip: padding-box;
      -moz-border-radius: 60px;
      -moz-background-clip: padding;
      border-radius: 60px;
      background-clip: padding-box;
      background-size: cover;
      background-position: center center;
      margin: 0.5em auto;
    }
    .card-header-image{
      width: 120px;
      height: 120px;
      -webkit-border-radius: 120px;
      -webkit-background-clip: padding-box;
      -moz-border-radius: 120px;
      -moz-background-clip: padding;
      border-radius: 120px;
      background-clip: padding-box;
      background-size: cover;
      background-position: center center;
      margin: 0.5em auto;
    }
    main .row {
      padding: 0.5em;
    }
    </style>
  </head>

  <body>
    <header class="container-fluid">
      <div class="row">
        <div class="col text-center">
          <a href="/">
            <?= $this->Html->image('clarity-marketplace-logo.svg', ['class' => 'main-header__logo', 'alt' => 'Clarity marketplace']) ?>
          </a>
        </div>
      </div>
    </header>
    <?= $this->Flash->render() ?>
   <main class="container-fluid">
      <?= $this->fetch('content') ?>
    </main>
    <footer>
            <a href="https://github.com/codefornl/clarity">Github</a>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
