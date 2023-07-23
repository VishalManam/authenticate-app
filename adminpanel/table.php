<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="style.css">
  <br>
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered" >
       <thead><tr><th>S.N</th>

         <th>Username</th>
         <th>Email ID</th>
         <th>Phone Number</th>
         <th>Passing Year</th>
         <th>Verified</th>
         <!-- <th>Token</th>
         <th>Password(hash encrypted)</th> -->
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td style="text-align:center"><?php echo $sn; ?></td>
      <td style="text-align:center"><?php echo $data['username']??''; ?></td>
      <td style="text-align:center"><?php echo $data['email']??''; ?></td>
      <td style="text-align:center"><?php echo $data['phone_number']??''; ?></td>
      <td style="text-align:center"><?php echo $data['passing_year']??''; ?></td>
      <td style="text-align:center"><?php echo $data['verified']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>