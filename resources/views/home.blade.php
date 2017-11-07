@extends('layouts.app')

@section('content')
<?php require('../partials/admin/_head.php') ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php require('../partials/admin/_sidebar.php') ?>
          </div>
        </div>

        <?php require('../partials/admin/_header.php') ?>

        <!-- /page content -->

                <!-- footer content -->
        <footer>
          <div class="pull-right">
          <br /><br /><br /></br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            Disciplina Linguagens de Programação II - Ciência da Computação - IFC Campus Videira
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php require('../partials/admin/_scripts.php') ?>
	
  </body>
</html>
@endsection
