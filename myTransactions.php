<!DOCTYPE html>
<html lang="en">
<?php include 'helper/header.php'?>
  
    <div class='container bg-faded p-4 my-4'>
    <h1 class='text-center'><strong>My Transactions</strong></h1>

<?php 
        include 'helper/connect.php';
        session_start();

        // Verify there are open transactions for this member
        if($openTransactions = $db->query("SELECT * FROM Transaction WHERE transactionPaymentDate IS NULL AND memberID = '$_SESSION[memberID]'")){

        // Open Transactions Header
        echo"<h2 class='text-center'><strong>Open Transactions</strong></h2>";

            // Print out each of the transactions
            while ($row = mysqli_fetch_array($openTransactions, MYSQLI_BOTH)){

                $transactionInitDate = date("m/d/y g:i A", strtotime($row[transactionInitDate]));
                
                echo"
                <div class='card border-warning mb-3'>
                    <div class='card-header'>
                      <h5 class='mb-0'>
                        <button class='btn btn-link' type='button' data-toggle='collapse' data-target='#$row[transactionID]'>
                            <strong>Transaction Date:</strong> $transactionInitDate <strong> Amount:</strong> $$row[transactionQuantity]
                        </button>
                      </h5>
                    </div>
                    
                    <div id='$row[transactionID]' class='collapse'>
                      <div class='card-body'>
                        <strong>Description:</strong>
                        $row[transactionDescription]
                      </div>
                    </div>
                  </div>";             
          }
      }
?>

    </div>
    <!-- JS Used -->
    <script src="helper/vendor/jquery/jquery.min.js"></script>
    <script src="helper/vendor/bootstrap/js/bootstrap.min.js"></script>
</html>