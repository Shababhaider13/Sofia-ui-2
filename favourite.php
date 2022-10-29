<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourite</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        p{
            margin-top: 0;
    margin-bottom:0 !important;
        }
        a{
            color: #007bff;
    text-decoration: none;
    background-color: transparent;
        }
        /* .img-wish {
    text-align: center !important;
} */

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    height: 100%;
   
}
.button1 {
  background-color: #9DCAEB;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.button3 {font-size: 16px;}

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
} 

.select-selected {
  background-color: white;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #343a40;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: rgb(0 0 0 / 15%);
  cursor: pointer;
  user-select: none;
  font-size: 14px;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}


/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.three-dots:after {
  cursor: pointer;
  color: #fff;
  content: '\2807';
  font-size: 20px;
  padding: 0 5px;
}

a {
  text-decoration: none;
  color: #353535;
  font-size: 14px;
}

a div {
  padding: 4px;
}

.dropdown {
  width: 60px;
  position: absolute;
  right: 10px;
  background-color: #fff;
  outline: none;
  opacity: 0;
  z-index: -1;
  max-height: 0;
  transition: opacity 0.1s, z-index 0.1s, max-height 5s;
}

.dropdown-container:focus {
  outline: none;
}

.dropdown-container:focus .dropdown {
  opacity: 1;
  z-index: 100;
  max-height: 100vh;
  transition: opacity 0.2s, z-index 0.2s, max-height 0.2s;
}


    </style>
</head>

<body>

    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa-solid fa-angle-left fa-2x"  onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Favourites</div>
        </div>
        <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear fa-2x"></i></a>
        </div>
    </div>
    <!-- header end -->

    <!-- favourite content start -->
    <div id="fav1">

<div  class="img-wish" style="margin: 6px;">


<!-- <a href="product-detail.php"> -->
  <div class="card" style="width: 100%; border:none;">
                        <img class="img-fluid" alt="100%x280" src="product1.jpg" style="width: 100%;">
                      
                             <div class="dropdown-container" tabindex="-1"  style="position: absolute; left:85%; top:2%">
                               <div class="three-dots"></div>
                               <div class="dropdown">
                                 <a href="editproduct.php"><div>Edit</div></a>
                                 <a href="#"><div>Pause </div></a>
                                 <a href="#"  data-toggle="modal" data-target="#exampleModalCenter"><div>Delete</div></a>
                               </div>
                             </div>
                            

                            

                        <div class="card-body" style="padding: 8px;">
                            
                          <span class="fa fa-heart" style="float: right; color:#717fe0;"></span>
                         <p class="card-text" style="color: black;">Brand New Watch</p>
                         <small class="text-muted" >Louis Vuitton<span> |</span> <span> Large</span></small>

                         
                        <center>
                         <a href="#" class="btn btn-primary bor4">€ 39.55 / Day</a>
                          </center>
                        </div>
                      </div></a>

</div>


<div class="img-wish" style="margin: 6px;">

<div class="card" style="width: 100%; border:none;">
                    <img class="img-fluid" alt="100%x280" src="product3.jpg" style="width: 100%;">
                    
                                                  
                    <div class="dropdown-container" tabindex="-1"  style="position: absolute; left:85%; top:2%">
                               <div class="three-dots"></div>
                               <div class="dropdown">
                                 <a href="editproduct.php"><div>Edit</div></a>
                                 <a href="#"><div>Pause</div></a>
                                 <a href="#"  data-toggle="modal" data-target="#exampleModalCenter"><div>Delete</div></a>
                               </div>
                             </div>


                    <div class="card-body" style="padding: 8px;">
                      <span class="fa fa-heart" style="float: right; color:#717fe0;""></span>
                     <p class="card-text" style="color: black;">Brand New Watch</p>
                     <small class="text-muted" >Louis Vuitton<span> |</span> <span> Large</span></small>
                     
                    <center>
                     <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                      </center>
                    </div>
                  </div>
                
</div>
<div class="img-wish" style="margin: 6px;">
       <div class="card" style="width: 100%; border:none;">
                    <img class="img-fluid" alt="100%x130px" src="product4.jpg" style="width: 100%;">
                                                 
                             <div class="dropdown-container" tabindex="-1"  style="position: absolute; left:85%; top:2%">
                               <div class="three-dots"></div>
                               <div class="dropdown">
                                 <a href="editproduct.php"><div>Edit</div></a>
                                 <a href="#"><div>Pause</div></a>
                                 <a href="#"  data-toggle="modal" data-target="#exampleModalCenter"><div>Delete</div></a>
                               </div>
                             </div>

                   
                    <div class="card-body" style="padding: 8px;">
                      <span class="fa fa-heart" style="float: right; color:#717fe0;""></span>
                     <p class="card-text" style="color: black;">Brand New Watch</p>
                     <small class="text-muted" >Louis Vuitton<span> |</span> <span> XL</span></small>
                     
                    <center>
                     <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                      </center>
                    </div>
                  </div>
                  
</div>

<!-- Modal Delete -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Are you sure?</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
 Do you really want to delete these product? 
 This process cannot be undone.
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary" style="background-color: red; color:white; margin-left:10px"> Delete</button>
</div>
</div>
</div>
</div>

</div>
    <!-- favourite content end -->

   <!-- more products start -->
<div class="moreproducts">

<button class="button1 button3 ">Explore More</button>
    
</div>

<!-- more products end -->

    <div class="gapgap1">

    </div>

    <!-- footer start -->
    <?php include 'footer.php' ?>

    <!-- footer end -->



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>




</body>

</html>