<?php
   include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/links.php';?>
    <style>
        #left-sidebar{
            margin-top:20px;
            min-height:700px;
            height: auto;
        }
        #right-content{
            margin-top:20px;
            height: auto;
             min-height:700px;
            border-left:1px ridge #eaebeb;
        }
        #content-head{
           height:80px;
        }
        #content-head h2{
             margin:10px;
        } 
        #para-content{
            font-family:century gothic;
            line-height:23px;
            word-spacing:3px;
        }
        #select tr th{
            background:#0088cc;
            color:white;
            
        }
        #select tr th:nth-child(1){
            background:#0088cc;
            
        }
        #select tr td:nth-child(2){
           
            color:black;
            font-weight:bold;
            
        }
        #select tr td:nth-child(3){
           
            color:black;
            font-weight:bold;
            
        }
        #select tr td:nth-child(4){
       
            color:black;
            font-weight:bold;
            
        }
        #select tr td:nth-child(8){
          
            color:black;
            font-weight:bold;
            
        }
    </style>
</head>

<body>
    <!-- Fixed navbar -->
  <?php include 'includes/header.php';?>
      <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Smart Sharing</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- container -->
    <section class="container">
        <div class="row">
            
            
                <div class="col-md-6" id="content-head">
                     <h3 class="section-title" style="font-family:century gothic;font-weight:bold;margin-top:30px;">Selected Results</h3>
                </div>
               
                <div class="col-md-12" id ="para-content" style="min-height:500px;">
                    <div class="row">
                       
                       
                            <?php 
                               if(isset($_POST['selectbook'])) {
                                    $bookname = $_POST['name'];
                                    
                                    $sql = "select * from books where bookname = '$bookname'";
                                    $result = mysqli_query($conn,$sql) or die('Could not run query'.mysqli_error());
                            ?>
                        <table class="table table-hover" id ="select" width="100%">
                                <thead>
                                    <tr>
                                        <td style="font-family:century gothic;font-weight:bold;">Total Search Results : <?php $rowcount = mysqli_num_rows($result);echo $rowcount;?></td>
                                    </tr>
                                     
                                <tr>
                                    <th width="10%">Id</th>
                                    <th>Book Name</th>
                                     <th>Edition</th>
                                    <th>Cost</th>
                                    <th>Contact</th>
                                    <th>Date and Time </th>
                                </tr>
                                </thead>
                                <tbody>
                            <?php    while ($row = mysqli_fetch_array($result)) { ?>
                                     <tr>
                                         <td><?php echo $row['id'];?></td>
                                         <td><?php echo $row['bookname'];?></td>
                                         <td><?php echo $row['edition'];?></td>
                                         <td><?php echo $row['cost'];?></td>
                                         <td><?php echo $row['contact'];?></td>
                                         <td><?php echo $row['date'];?></td>
                                        
                                        
                                 </tr>
                                    <?php
                                          
                                    }
                                    }
 else { echo 'values are not set';}
                              ?>
                               
                              </tbody>
                                </table>               
             
                     
                  
                    </div>
                </div>
        

        </div>
    </section>
 
<?php include 'includes/footer.php';?>
   
      
</body>
</html>

