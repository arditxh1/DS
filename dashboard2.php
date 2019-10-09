<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<?php  
    require_once('components/adminBlock.php');
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="dashboardAdmin.php">
                                <i class="fas fa-mobile" ></i>Projects</a>
                        </li>
                        <li>
                            <a href="dashboardAdminPending.php">
                                <i class="fas fa-users"></i>Pending Projects</a>
                        </li>
                        <li  class="active has-sub">
                            <a href="dashboard2.php">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="addUser.php">
                                <i class="fas fa-user-plus"></i>Add user</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
                <?php  include("components/header.php")?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning table-responsive-lg">
                                        <thead>
                                            <tr id="noT">
                                                <th>Id</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Nr. of projects</th>
                                                <th>Average Rating</th>
                                                <th>Nr. of Stars</th>
                                                <th>Type</th>
                                                <th>Remove User</th>
                                            </tr>
                                        </thead>
                                        <tbody id="TB">
                                            <?php  
                                             $query = $con->prepare("SELECT * FROM users");
    
                                             $query->execute();

                                             $users = $query->fetchAll();
                                            $numO = 0;
                                            $checkedId = array();
                                            foreach ($users as $obj) {
                                                $PrNum = 0;
                                                $reviewPrintN = 0;
                                                $reviewNum = 0;
                                                $numO+= 1;
                                                $idR = $obj["id"];
                                                $S_query = $con->prepare("SELECT * FROM reviews WHERE OwnerId = $idR");
                                            
                                                $S_query->execute();

                                                $Reviewed = $S_query->fetchAll();

                                                foreach ($Reviewed as $obje) {
                                                    $reviewPrintN += (int)($obje["Review"]);
                                                    $reviewNum++;
                                                    if (!in_array($obje["PrId"], $checkedId)) {
                                                       $PrNum++;
                                                       array_push($checkedId, $obje["PrId"]);
                                                    }
                                                }

                                                echo "<tr id=Tr$numO>";
                                                    echo "<td id='idT$numO'>"               . $obj["id"] ."</td>";
                                                    echo "<td id='username$numO'>"               . $obj["username"] ."</td>";
                                                    echo "<td id='email$numO'>"               . $obj["email"] ."</td>";
                                                    echo "<td id='NrOfPr$numO' class='longT'>"    . $PrNum ."</td>";
                                                    echo "<td id='AR$numO' class='longT'>"    . $reviewPrintN/$reviewNum   ."</td>";
                                                    echo "<td id='Stars$numO' class='longT'>"    . $reviewPrintN   ."</td>";
                                                    echo "<td id='type$numO' class='longT'>"    . $obj["type"]   ."</td>";
                                                    echo "<td class='removeUser'><a>remove <i class='fas fa-times'></i></a></td>";
                                                echo "</tr>";
                                            } 
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <form>
                    <div class="modal-body">
                    <div class="input-group mb-3">
                      <input type="text" name="product" id="namePro"class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Name of the Product...">
                    </div>               
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" name="price" id="pricePro" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Price of the product">
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" name="stock" id="stockPro" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="How much in stock">
                    </div>  
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary" id="addCate">Add</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" id="listCate">
                          <a class="dropdown-item" href="#" id="Cate" >No categories found.</a>
                        </div>
                      </div>
                      <input type="text" name="category" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Add a category..." id="inputCate">
                    </div>
                  </div>
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary" id="addPro" data-dismiss="modal">Add Product</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <style type="text/css">
        .removeUser:hover{
            color: red !important;
        }
        </style>

    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="js/logic.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        $(".removeUser").click(function(){
            var deleteId = $(this).parent().attr("id");
            deleteId = deleteId[deleteId.length -1];
            deleteId = $(this).parent().find("#idT" + deleteId).text();
            $.post( "php/deleteUser.php", 
            { 
                id: deleteId,
            },function(data){
                console.log(data);
            });
            location.reload();  
        })
    </script>

</body>

</html>
<!-- end document-->
