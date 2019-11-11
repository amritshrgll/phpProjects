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
    </style>
</head>

<body>
    <!-- Fixed navbar -->
  <?php include 'includes/header.php';?>
      <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Smart Blood Bank</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- container -->
    <section class="container">
        <div class="row">
            <div class="col-md-3" id="left-sidebar">
                   <ul class="nav nav-pills nav-stacked">
                    <li><a href="smartblood.php">Overview</a></li>
                    <li><a href="finddonar.php">Find a Donor</a></li>
                    <li><a href="smartbloodregister.php">Register Free</a></li>
                    <li class="active"><a href="needblood.php">Who Needs Blood</a></li>
                    <li><a href="donarsspeak.php">Donar's Speak</a></li>
                    </ul>
            </div>
            <div class="col-md-9" id="right-content">
                <div class="col-md-6" id="content-head">
                    <h2>Who needs blood?</h2>
                </div>
                <div class="col-md-9" id ="para-content">
                    <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly. Patients suffering from trauma, anemia, and other surgeries require only red blood cells, which is separated from your blood. The procedure of splitting blood components is called Cytapheresis. Similarly blood platelets are used for cancer patients undergoing chemotherapy or for those undergoing treatment for dengue fever etc. Fresh frozen plasma is used for patients having massive transfusions, plasma is used for burns and cryoprecipitate is used for hemophilia.</p>
                 <h2>When is blood needed?</h2>
                 <p>Blood is needed at regular intervals and at all times as it has only finite time of storage. Red blood cells can be stored for about 42 days, fresh frozen plasma and cryoprecipitate for 365 days and blood platelets for 5 days.</p>
                
                
                 <h2>Who can donate blood?</h2>
                 <p>Anyone above 18 years weighing more than 50 kgs (110 lbs) can donate blood. Click here to find out what are the requirements for donating blood.</p>
  <p>&nbsp;</p>
  <a href="smartbloodregister.php" style="height:50px;width:auto;padding:10px;background:green;color:white"> Start by Ragistering as Donar</a>
           
                
                </div>
            </div>

        </div>
    </section>
 
<?php include 'includes/footer.php';?>
</body>
</html>

