<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Departments</title>

  <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
  <link href="../css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://unpkg.com/ionicons@5.2.1/dist/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <style rel="stylesheet">
    .el08 {
      width: 20px;
      height: 20px;
    }
  </style>
</head>

<body>

  <?php include '../components/header.php' ?>

  <div id="layoutSidenav">

    <?php include '../components/sidebar.php' ?>

    <div id="layoutSidenav_content">
      <main>
          <div class="container-fluid">
            <h1 class="mt-4">Department 1</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Department 1</li>
            </ol>
              <div class="card mb-4">
                  <div class="card-body card1">
                <div class="row">
                  <div class="col-lg-4 order-xs-2">
                    <img class="profileimg" src="https://tse2.mm.bing.net/th?id=OIP.MACzs3jRWvHIYJqeArGpNgHaHa&pid=Api&P=0&w=300&h=300" alt="...">
                 <ion-icon class="circle" name="ellipse"></ion-icon>

                  </div>
                  <div class="col-lg-4 order-xs-1">

                      <h2 class="name">Firstname Lastname</h2>
                      <p>Intern</p>
                      <p>Organisation/Institute</p><br>
                      <br>
                      <button type="button" class="btn btn-primary">Edit Profile</button> <br>

                    </div>
                  <div class="col-lg-4 order-xs-3">
                    <div class="btns">
                      <button type="button" name="button" class="insta"><ion-icon name="logo-instagram"></ion-icon></button>
                      <button type="button" name="button" class="facebook"><ion-icon name="logo-facebook"></ion-icon></button>
                      <button type="button" name="button" class="twitter"><ion-icon name="logo-twitter"></ion-icon></button>
                      <button type="button" name="button" class="linkedin"><ion-icon name="logo-linkedin"></ion-icon></button>
                      <button type="button" name="button" class="share">  <ion-icon name="share-social"></ion-icon></button>
                 </div>
               </div>
                </div>
           <div class="card-body cbody">
             <div class="row">
               <div class="col-lg-7">
                 <h5 class="card-title head1">Bio</h5>
               <p class="card-text text">vvhjgmjhgjh gmhjghgg vhgvmgv
               bhbhv hbhnbhj bnbm bhjhhj bjk hgkjhkjhkjhbk ytjgjmg jhgmghjg kgkmgkkgk juugkgk </p>
               <h5 class="card-title head1">Contact</h5>
               <p class="card-text text">yuz123@gmail.com<br />
               +9158455854695</p>
               <h5 class="card-title head1">Event Completed</h5>
               <p class="card-text text">5</p>
          </div>
            <div class="col-lg-5">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <h5 class="head1">Ongoing Event</h5>
                    <p>Event Name</p>
                  </div>
                  <div class="col-lg-6">
                    <button type="button" class="btn btn-primary submit">Submit Report</button>
                  </div>
              </div>


              <p>Ends on dd/mm/yy at hh:mm</p>
              <div class="scrollbar">
                <h5 class="head1">Past Internships</h5>
                <div class="container1">
                <p>Accomplishment1</p>
                <p>Accomplishment2</p>
                <p>Accomplishment3</p>
                <p>Accomplishment4</p>
                <p>Accomplishment5</p>
                </div>

              </div>
              </div>
            </div>
             </div>

    </div>
</div>
              </div>
              <div style="height: 100vh;"></div>
              <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
          </div>
      </main>
      <?php include '../components/footer.php' ?>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <script src="../assets/demo/datatables-demo.js"></script>
  <script src="../main/scripts.js"></script>

</body>

</html>
