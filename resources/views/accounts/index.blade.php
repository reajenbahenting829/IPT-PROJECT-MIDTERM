<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accounts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-it">
              <a>IPT Midterm Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= url('/users') ?> ">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Accounts</a>
          </ul>
        </div>
      </nav>

<div class="container">
<div class="row">
    <div class="col-md-12">
        <h2>Accounts</h2>
       
        <table class="table table-striped" >
           
            <thead class ="table table-bordered">
                <tr class="bg-primary" >
                    <th>Account #</th>
                    <th>Account Name </th>
                    <th>Initial Investment </th>
                    <th>Date Started </th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($accounts as $c): ?> 
                     <tr>
                         
                             <td><?= $c->id ?> </td>
                             <td><?= $c->acct_name ?> </td>
                             <td><?= $c->init_invest ?> </td>
                             <td><?= $c->start_date ?> </td>
                         
                     </tr>
                
                
                    <?php endforeach; ?>
                    
            </tbody>
        </table>

    </div>
</div>



</div>

</body>

<style>
.nav-it{
       position:absolute;
       left:30px;
       top:10px;
       color:white;
       font-size:20px;

    }
  .nav-item{
      position: relative;
      left:1000px;
  }
    

    </style>

</html>