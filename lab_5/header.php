<!doctype html>
<html lang="en">
  <head>
    <title>Notebook</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <?php if (isset($_GET['p']) && $_GET['p']==='view') echo '<li class="nav-item activa">'?>
                  <a class="nav-link" href="?p=view">View</a>
                </li>
                <?php if (isset($_GET['p']) && $_GET['p']==='add') echo '<li class="nav-item activa">'?>
                  <a class="nav-link" href="?p=add">Add</a>
                </li>
                <?php if (isset($_GET['p']) && $_GET['p']==='update') echo '<li class="nav-item activa">'?>
                  <a class="nav-link" href="?p=update">Update</a>
                </li>
                <?php if (isset($_GET['p']) && $_GET['p']==='delete') echo '<li class="nav-item activa">'?>
                  <a class="nav-link" href="?p=delete">Delete</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
      <style>
        .activa{
          list-style: none;
          color: red;
          text-decoration: wavy underline red;
        }
        .btn{
          text-decoration: inherit;
        }
      </style>
      <?if ($_GET['p']==='view'):?>
      <div class="btn-group" role="group" aria-label="Basic example">
      <?php if (isset($_GET['o']) && $_GET['o']==='ID_user') echo '<li class="activa">'?>
        <a class="btn btn-secondary" href="?p=view&o=ID_user">Id</a>
        </li>
      <?php if (isset($_GET['o']) && $_GET['o']==='Bdate') echo '<li class="activa">'?>
        <a class="btn btn-secondary" href="?p=view&o=Bdate">Date</a>
      </li>
      <?php if (isset($_GET['o']) && $_GET['o']==='Surname') echo '<li class="activa">'?>
        <a class="btn btn-secondary" href="?p=view&o=Surname">Surname</a>
      </li>
      </div>
      <?endif;?>