<?php
include('index.php');
?>

 <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
           
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Message</a></li>
              <li><i class="icon_document_alt"></i>Services</li>
              <li><i class="fa fa-file-text-o"></i>Services Form Data</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              <div class="panel-body">
                
                <table style="width: 100%">
                  <tr>
                    <td>Sr.No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Mob Number</td>
                    <td>Subject</td>
                    <td>Message</td>
                  </tr>
              
                  <?php
                   
                 
include('config.php');
$sql="select *from  message";
$query=mysqli_query($con,$sql);
$i=1;
while($fetch=mysqli_fetch_array($query))
{

?>
<tr>
<th><?php echo $i++;  ?></th>
        <th><?php echo $fetch['name']; ?></th>
        <th><?php echo $fetch['email']; ?></th>
         <th><?php echo $fetch['number']; ?></th>
        <th><?php echo $fetch['subject']; ?></th>
        <th><?php echo $fetch['message']; ?></th>

        <?php } ?>
      </tr>
           </table>
               
              </div>
            </div>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->