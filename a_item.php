<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wastage Managment System
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="fixed-top">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home">Wastage Managment System</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#donation">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="a_item.php">Available Item</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="doner">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div> 
        </header>
      </div>
      <?php

        include('connection.php');
        $query = 'SELECT * FROM item';
         $counter = 0;
        $ins = mysqli_query($conn,$query);
         if(mysqli_num_rows($ins)>0)
    {
    ?>
        <section class="contact-section" id="contact">
           <div class="container">
           <h1 style="font-family: EB Garamond ;">Available Item List</h1>
           <table class="table">
           	<tr>
           		<th>S.No</th>
           		<th>Contact Person</th>
           		<th>Mobile No</th>
                <th>Address</th>
           		<th>Items Name</th>
           		<th>Item Image</th>
           		<th>Creation Date</th>
           		<th>Action</th>
           	</tr>
               <?PHP
                     
         
while ($fetchdata = mysqli_fetch_array($ins)) {
    ?>
    <tr>
         <td><?php echo ++$counter; ?></td>
         <td><?=$fetchdata['f_name']?>&nbsp;<?=$fetchdata['l_name']?></td>
         <td><?=$fetchdata['phone']?></td>
         <td><?=$fetchdata['address']?></td>
          <td><?=$fetchdata['i_name']?></td>
          <td><img src="doner/uploads/<?=$fetchdata['image']?>" style="width: 30px;"> </td>
                       <td><?=$fetchdata['p_date']?></td>
          
          
          <td><a href="viwe_item.php?id=<?=$fetchdata['id']?>">View Details</a></td>
    </tr>   
<?php
}
}
else{
    echo 'No records Found';
}
?>
           </table>
       </div>
        </section>
<script type="text/javascript">
    function load_edit_data(id){
    load('viwe.php?id='+id);
    }
</script>
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Code Convent foundation</h4>
                        <p>Address : 3, Near IT Park, Mahatma Gandhi Road, Mumbai 440000 </p>
                        <p>Contact No : <a href="tel: +91 98659****59">+91 98659****59</a></p>
                        <p>Email : <a href="mailto:foundation@code.com">foundation@code.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#donation">Donations</a></li>
                            <li><a href="#mission-id">Missions</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="#"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="#"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                        <p>Copyright &copy; 2023 | All Right Reserved Tejas Techworld</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>