<?php
include('connection.php');

if ($_REQUEST['method']=='add_data') {
print_r($_REQUEST);

$register_by = $_REQUEST['register_by'];
$register_m_no = $_REQUEST['register_m_no'];
$register_email = $_REQUEST['register_email'];
$contact_person = $_REQUEST['contact_person'];
$contact_p_m_n = $_REQUEST['contact_p_m_n'];
$i_dec = $_REQUEST['i_dec'];
$p_date = $_REQUEST['p_date'];
$p_address = $_REQUEST['p_address'];
$status = $_REQUEST['status'];
$r_name = $_REQUEST['r_name'];
$r_no = $_REQUEST['r_no'];
$massage = $_REQUEST['massage'];
$i_image = $_REQUEST['i_image'];
$i_name = $_REQUEST['i_name'];
$category = $_REQUEST['category'];
$query = "INSERT INTO request(register_by, register_m_no, register_email, p_date,status,r_name, r_no, massage,p_address,contact_person,contact_p_m_n,i_dec,i_image,i_name,category) VALUES ('$register_by','$register_m_no','$register_email','$p_date','$status','$r_name','$r_no','$massage','$p_address','$contact_person','$contact_p_m_n','$i_dec','$i_image','$i_name','$category')";
 echo $query;
 $ins = mysqli_query($conn,$query);
  if($ins)
    {
        echo "Saved";
       

     }
     
                  
}else
    {
        echo mysqli_error($conn);
    }

