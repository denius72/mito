<html lang="pt-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cantinator | </title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/css/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/css/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/css/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/css/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/css/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/admin.css" rel="stylesheet">
  </head>
  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php require('../partials/admin/_sidebar.php') ?>
          </div>
        </div>

        <?php require('../partials/admin/_header.php') ?>
        
        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Produtos</h2>
                    <a href="/admin/products/new" class="btn btn-primary btn-sm pull-right">Novo Produto</a>  
                    <a href="/admin/products/newcategory" class="btn btn-primary btn-sm pull-right">Nova Categoria</a>                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                      </tr>
                      <?php foreach($products as $product): ?>
                        <tr>
                          <td><?= $product->id ?></td>
                          <td><?= $product->nome ?></td>
                          <td>R$ <?= $product->valor ?></td>
                          <td><?=
                          substr(DB::table('categories')->select('nome')->where('id','=',$product->idcategories)->get(), 10,-3);
                          
                          ?></td>
                          <td>
                            <a href="/admin/products/show?id=<?=$product->id?>" class="btn btn-xs btn-primary">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="/admin/products/edit?id=<?=$product->id?>" class="btn btn-xs btn-warning">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a href="/admin/products/delete?id=<?=$product->id?>" class="btn btn-xs btn-danger">
                              <i class="fa fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                    <p>A quantidade total de produtos é: <?= $total ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
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