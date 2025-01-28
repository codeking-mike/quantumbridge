<?php
 
function getName($cxn, $email){
  $sql = "SELECT firstname, lastname FROM argent_client_db WHERE user_email='$email'";
  $result = mysqli_query($cxn, $sql);
  $row = mysqli_fetch_assoc($result);
  extract($row);
}