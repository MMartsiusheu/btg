<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageData['title'];?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
   
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-3 ">
                     <div class="list-group ">
                      <a href="#" class="list-group-item">Аккаунт</a>
                      <a href="../addproduct" class="list-group-item">Добавить товар</a>
                      <a href="/account/products" class="list-group-item">Менеджер товаров</a>
                      <a href="../" class="list-group-item">На главную</a>
                    </div> 
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Пользователь</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        <tbody>
                                          <tr>
                                            <td>id: </td>
                                            <td><?php echo $pageData['user']['id']?></td>
                                          </tr>
                                          <tr>
                                            <td>Логин: </td>
                                            <td><?php echo $pageData['user']['login']?></td>
                                          </tr>
                                          <tr>
                                            <td>E-mail: </td>
                                            <td><?php echo $pageData['user']['email']?></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
   </div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>