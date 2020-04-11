<?php include("includes/header.php"); ?>
<?php 
  if(!$session->is_signed_in()){ redirect("login.php");}?>



  <?php
                  if(empty($_GET['id'])){
                  redirect("users.php");
                  }else{
                    $user = User::find_by_id($_GET['id']);
                    if(isset($_POST['update'])){
                    
                        
                            
                            
                            $user->username = $_POST['username'];
                            $user->password = $_POST['password'];
                            $user->first_name = $_POST['first_name'];
                            $user->last_name = $_POST['last_name'];

                            $user->save();
                      
                    }
                  }
 

   
  
  
  
  
  
  ?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
           
            
          <?php include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/side_bar_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
        
        <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          Edit users page 
            <small>Subheading</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>

        
        <div class="col-md-8">
        
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>">
        </div>
       
        <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" class="form-control" value="<?php echo $user->password; ?>">
        </div>
        <div class="form-group">
        <label for="first_name">first name</label>
        <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name; ?>">
        </div>
        <div class="form-group">
        <label for="last_name">last name</label>
        <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name; ?>">
        </div>
       
      
       
        </div>

        <div class="col-md-4" >
                            <div  class="user-info-box">
                                <div class="info-box-header">
                                   <h4>User profile picture<span id="toggle" class="glyphicon glyphicon-menu-up pull-right"></span></h4>
                                </div>
                            <div class="inside">
                              <div class="box-inner">
                              <div class="form-group">
            <a href="" class="thumbnail"><img src="<?php echo $user->user_image_placeholder(); ?> "alt=""></a>
        
                                    </div>
                              </div>
                              <div class="info-box-footer clearfix">
                                <div class="info-box-delete pull-left">
                                    <a  href="delete_user.php?id=<?php echo $user->id; ?>" class="btn btn-danger btn-md ">Delete</a>   
                                </div>
                                <div class="info-box-update pull-right ">
                                    <input type="submit" name="update" value="Update" class="btn btn-primary btn-md ">
                                </div>   
                              </div>
                            </div>          
                        </div>
                    </div>
                    </form>
    </div>
</div>
<!-- /.row -->

</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>