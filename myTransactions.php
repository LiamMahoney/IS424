<!DOCTYPE html>
<html lang="en">
<?php include 'helper/header.php'?>
  
    <div class='container bg-faded p-4 my-4'>
    <h1 class='text-center'><strong>My Transactions</strong></h1>";

<?php 
        include 'helper/connect.php';
        session_start();

        // Verify there are open transactions for this member
        if($openTransactions = $db->query("SELECT * FROM Transaction WHERE transactionPaymentDate IS NULL AND memberID = '$_SESSION[memberID]'")){

        // Open Transactions Header
        echo"<h2 class='text-center'><strong>Open Transactions</strong></h2>";

          // Print out each of the transactions
          while ($row = mysqli_fetch_array($openTransactions, MYSQLI_BOTH)){
 
            echo'
            <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Collapsible Group Item #1
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Collapsible Group Item #2
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Collapsible Group Item #3
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven
                  </div>
                </div>
              </div>';             
          }
      }

  echo"</div>";
  
  /*

  // Print all of the pending transactions
  while ($row = $result->fetch_row()) {

    if ($row['status'] == "pending") {
      // pending transactions
      echo"
      <!-- Start Container -->

      <!-- Create the transactions header -->
      <hr>
      <h2 class='text-center'><strong>Pending Transactions</strong></h2>
      <hr>
      </div>";

      echo "<div class='card'><div class='card-body'>";
      //echo result data we want displayed
      echo "</div></div>";
    } else if ($row['status'] == "approved") {
      // approved transactions
      echo"
      <!-- Start Container -->
      <div class='container bg-faded p-4 my-4'>

      <!-- Create the transactions header -->
      <hr>
      <h2 class='text-center'><strong>Pending Transactions</strong></h2>
      <hr>
      </div>";

      echo "<div class='card'><div class='card-body'>";
      //echo result data we want displayed
      echo "</div></div>";
    } else {
      // due transactions
      echo"
      <!-- Start Container -->
      <div class='container bg-faded p-4 my-4'>

      <!-- Create the transactions header -->
      <hr>
      <h2 class='text-center'><strong>Pending Transactions</strong></h2>
      <hr>
      </div>";

      echo "<div class='card'><div class='card-body'>";
      //echo result data we want displayed
      echo "</div></div>";
    }
  }
  */

?>
    <!-- JS Used -->
    <script src="helper/vendor/jquery/jquery.min.js"></script>
    <script src="helper/vendor/bootstrap/js/bootstrap.min.js"></script>
</html>