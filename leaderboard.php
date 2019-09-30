<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'components/head.php'; ?>
     <title>Leaderboard</title>
</head>
<?php  
    require_once('components/userBlock.php');
?>
<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>f
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                         <li class="active has-sub">
                            <a href="chart.html">
                                <i class="fas fa-mobile" ></i>Aplikacion</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-laptop"></i>Webfaqe</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-trophy"></i>leaderboard</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <?php require_once('components/sidebar.php');?>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-container">
        <?php  require_once("components/header.php")?>
            <div class="main-content" style="padding-top: 80px !important;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning table-responsive-lg" id="leaderboardT">
                                        <thead>
                                            <tr id="noT">
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Nr. of projects</th>
                                                <th>Average Rating</th>
                                                <th>Nr. of Stars</th>
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
                                                $reviewPrintN = 0;
                                                $PrNum = 0;
                                                $reviewNum = 0;
                                                $numO+= 1;
                                                $idR = $obj["id"];
                                                $S_query = $con->prepare("SELECT * FROM reviews WHERE OwnerId = $idR");
                                            
                                                $S_query->execute();

                                                $Reviewed = $S_query->fetchAll();
                                                foreach ($Reviewed as $obje) {
                                                    $reviewPrintN += (int)($obje["Review"]);
                                                    $reviewNum++;
                                                    if (!in_array($obje["PrId"] . $obje["RevType"], $checkedId)) {
                                                       $PrNum++;
                                                       array_push($checkedId, $obje["PrId"] . $obje["RevType"]);
                                                    }
                                                };

                                                echo "<tr id=Tr$numO>";
                                                    echo "<td id='place$numO'>"               . $numO ."</td>";
                                                    echo "<td id='username$numO' style='opacity: 0;' class='usernames'>"               . $obj["username"] ."</td>";
                                                    echo "<td id='NrOfPr$numO' class='longT'>"    . $PrNum ."</td>";
                                                    echo "<td id='AR$numO' class='longT'>"    . $reviewPrintN/$reviewNum   ."</td>";
                                                    echo "<td id='Stars$numO' class='longT'>"    . $reviewPrintN   ."</td>";
                                                echo "</tr>";
                                            };
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <style type="text/css" scr="css/leaderboard.css"></style>
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <script src="js/leaderboard.js"></script>
    <script src="js/logic.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">$("li:nth-child(8)").attr("class","active has-sub")</script>
</body>
</html>
