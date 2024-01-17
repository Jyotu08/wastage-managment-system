<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wastage Managment System    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- 
     -->
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
        $query = 'SELECT * FROM  registration';
        $ins = mysqli_query($conn,$query);
        $fetchdata = mysqli_fetch_array($ins);

         $query2 = "SELECT * FROM  item WHERE id='".$_REQUEST['id']."'";
        $ins2 = mysqli_query($conn,$query2);
        $fetchdata2 = mysqli_fetch_array($ins2);
    ?>
        <section class="contact-section" id="contact">
            <!-- <form id="formsubmit" method="post" enctype="multipart/form-data"> -->
           <div class="container">
            
            <input type="hidden" name="id" value="<?=$fetchdata2['id']?>">
           <h1 style="font-family: EB Garamond ;">Item Details</h1>
           <table class="table">
            <tr>
                <th>
                    Register by
                </th>
                <td><input type="text" name="register_by" id="register_by" value="<?=$fetchdata['f_name']?>&nbsp;<?=$fetchdata['l_name']?>" style='border: none;'></td>
                <th>
                    Register Mobile No
                </th>
                <td><input type="text" name="register_m_no" id="register_m_no" value="<?=$fetchdata['phone']?>" style='border: none;'></td>

            </tr>
              <tr>
                <th>
                    Register Email
                </th>
                <td><input type="text" name="register_email" id="register_email"value="<?=$fetchdata['email']?>" style="border: none;"></td>
                <th>
                   Contact Person Name
                </th>
                <td><input type="text" name="contact_person" id="contact_person"value="<?=$fetchdata2['f_name']?>&nbsp;<?=$fetchdata2['l_name']?>" style="border: none;"></td>
            </tr>
                  <tr>
                <th>
                   Contact Person Mobile No.
                </th>
                <td><input type="text" name="contact_p_m_n" id="contact_p_m_n" value="<?=$fetchdata2['phone']?>" style="border: none;"></td>
                       <th>
                  Pick Up Date
                </th>
                <td><input type="text" name="p_date" id="p_date" value="<?=$fetchdata2['p_date']?>" style="border: none;"></td>
            </tr>
             <tr>
                <th>
                   Pick Up Address
                </th>
                <td><input type="text" name="p_address" id="p_address" value="<?=$fetchdata2['address']?>" style="border: none;"></td>
                <th>
                 Item Description
                </th>
                <td><input type="text" name="i_dec" id="i_dec" value="<?=$fetchdata2['i_dec']?>" style="border: none;"></td>
            </tr>
            <tr>
                 <th>
                   Item Name
                </th>
                <td><input type="text" name="i_name" id="i_name" value="<?=$fetchdata2['i_name']?>" style="border: none;"></td>
                <th>
                   Category
                </th>
                <td><input type="text" name="category" id="category" value="<?=$fetchdata2['category']?>" style="border: none;"></td>

            </tr>
             <tr>
                <th>
                   Item Image
                </th>
                <td><img id="i_image" src="doner/uploads/<?=$fetchdata2['image']?>" style='width: 250px;'></td>
                <th>
                 Status
                </th>
                <td><input type="text" name="status" id="status" value="Not Confirmed Yet" style="border: none;"></td>
            </tr>
             <tr>
                <td>
                   <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Request</button>
                </td>
                
            </tr>
           </table>
       </div>

        </section>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Item Request</h4>
      </div>
      <script type="text/javascript">
          function get_and_send()
          {

            var r_name = $("#r_name").val();
            //alert(r_name);
            var register_by = $("#register_by").val();
            var register_m_no =$("#register_m_no").val();
            //alert(register_m_no);
            var register_email =$("#register_email").val();
            
            var contact_person =$("#contact_person").val();

            var contact_p_m_n =$("#contact_p_m_n").val();
            var p_date =$("#p_date").val();
            var p_address =$("#p_address").val();

            var i_dec =$("#i_dec").val();

            var status =$("#status").val();

            var r_no =$("#r_no").val();
            var massage =$("#massage").val();
            var i_image = $("#i_image").val();
            var i_name = $("#i_name").val();
            var category = $("#category").val();
            
           $.ajax({
                    // alert("hiiiiii");       

                        url         : 're_ajax.php',
                        type        : 'GET',
                        data        : '&method=add_data&register_by='+register_by+'&r_name='+r_name+'&register_m_no='+register_m_no+'&register_email='+register_email+'&contact_person='+contact_person+'&contact_p_m_n='+contact_p_m_n+'&p_date='+p_date+'&p_address='+p_address+'&i_dec='+i_dec+'&status='+status+'&r_no='+r_no+'&massage='+massage+'&i_image='+i_image+'&i_name='+i_name+'&category='+category,     
                        async       : true,
                        cache       : false,
                        processData : false,
                        success     : function(rdata) 
                        { alert("rdata");
                             if(rdata=='Data Saved'){
                                   
                                    //document.getElementById("myform").reset();
                                    get_kid(1);

                             }else{
                                alert(rdata); 

                             }
                                                 
                        },
                        error: function(){
                        alert("error in ajax form submission");
                                         }
                });
          }
      </script>
      <div class="modal-body">
       <input type="text" name="r_name" id="r_name" class="form-control" placeholder="Enter Your Name"><br>
       <input type="text" name="r_no" id="r_no" class="form-control" placeholder="Enter Mobile No" ><br>
       <textarea name="massage" id="massage" placeholder="Message If Any" class="form-control"></textarea>
       <br>
       <button class="btn btn-danger" onclick="get_and_send()">Submit</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

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