<?php require_once 'API.php';?>
<?php
$data = new \Geko\API();
?>

<html>
    <head>
        <meta> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <header>
                 <span style="background-color: #006633"> 
                    <?php $status = $data->data_api();
                        if($status =!0 ){
                            echo 'Connect Node';  
                        }
                        else{
                            echo 'Disconected Node'; 
                        }
                    ?>
                 
                 </span>
            </header>
         <main>
            <div class="row">
                    <?php  
                        $client = $data;
                        $call = $client->data_api();
                        foreach ($call as $key => $value){
                              // echo $key."&nbsp;&nbsp;".$value['usd'];
                            echo '<br>';
                            echo ucfirst($key)."&nbsp; em  Reais Brasileiros &nbsp; R$".$value['brl'];
                        }
                    ?> 
            </div>
             <div class="row">
                <?php
                  $list = $data;
                  $table_list = $list->Getlist();
                ?>
                 <p> <h3>Mangold Leipzig investments</h3></p>
                 <table class="table table-striped">
                    <tr>
                        <th>IMG</th>
                        <th> Symbols</th>
                        <th>Name</th>
                        <th>Current Price</th>
                        <th>Total Supply</th>
                        <th>Price High</th>
                         <th>Price low</th>
                    </tr>
                     <?php foreach ($table_list as $key => $value){?>
                    <tr>
                        <td> <img height="30px" width="30px" src="<?php echo $value['image'] ;?>"/></td>
                        <td><?php echo $value['symbol'];?></td>
                        <td><?php echo $value['name'] ;?></td>
                        <td><?php echo $value['current_price'] ;?></td>
                        <td><?php echo $value['total_supply'] ;?></td>
                         <td><?php echo $value['low_24h'] ;?></td>
                         <td><?php echo $value['high_24h'] ;?></td>
                       
                      
                    </tr>
                     <?php } ?>
                    </table>
               
                   
                       
              

            </div>
            <div class="nested">
            

            </div>
            <div class="nested">
              

            </div>
         </main> 
         <aside></aside>
         <footer>4  </footer>
        </div>
    </body>
</html>
