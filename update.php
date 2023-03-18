<form action="update_item.php" method="POST">
                    <div class="mb-3">
                       <label for="">Item Name</label>
                        <input type="text" hidden name="p.item_id" value="<?php echo $item_id; ?>" class="form-control">
                        <input type="text" name="p.item_name" value="<?php echo $item_name; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                       <label for="">Item Price</label>
                        <input type="item_price" name="p.item_price" value="<?php echo $item_price; ?>" class="form-control">
                    </div>
                    
                    <input type="submit" class="btn btn-primary">
                </form>

<?php
include_once "db_conn.php";

if(isset($_POST['p_item_id'])){
    $table = "products";
    
    $p_item_id  = $_POST['p_item_id'];
    $p_item_name = $_POST['p_item_name'];
    $p_item_price = $_POST['p_item_price'];
    
    
    $fields = array( 'item_name' => $p_item_name
                   , 'item_price' => $p_item_price
                   );
    $filter = array( 'item_id' => $p_item_id );
    
   
   if( update($conn, $table, $fields, $filter )){
       header("location: index.php?update_status=success");
       exit();
   }
    else{
        header("location: index.php?update_status=failed");
        exit();
    }
 }
?>