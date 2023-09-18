<?php include('connection.php');
 function addcategory(){
     global $db;
        $title = $_POST["title"];
        $note = $_POST["note"];
       

        if(empty($title) || empty($note)) {
		echo "invalid information";
			return;
		}
           

            $query = "INSERT INTO category (title, note ) values
             ('$title', '$note')";

            $db->query($query) or mysqli_error($db);

           header("Location: categorylist.php");
            echo 'success';
    return;
 } 


function additem(){
    global $db;
        $catid = $_POST["catid"];
        $title = $_POST["title"];
        $note = $_POST["note"];
       

        if(empty($catid) ||empty($title) || empty($note)) {
			echo "invalid information";
			return;
		}
           

            $query = "INSERT INTO items (catid,title, note ) values
            ('$catid','$title', '$note')";

            $db->query($query) or mysqli_error($db);

            //header("Location: itemlist.php");
            echo 'success';
    return;
} 
 

function sqLx($table,$key,$val,$pin){
    global $db;
    $sql = $db->query("SELECT * FROM $table WHERE $key='$val' ");
    $row = mysqli_fetch_assoc($sql);
    return $row[$pin];
}

function updateCategory(){
    global $db;
    $title = $_POST["title"];
         $note = $_POST["note"];
         $sn= $_GET['sn'];

         $query = "UPDATE category SET title = '$title', note = '$note' WHERE sn = '$sn'";
         $db->query($query) or mysqli_error($db);
         return;
}

function catQty($catid){
    global $db;
    $sql = $db->query("SELECT * FROM items WHERE catid = '$catid' ");
     return mysqli_num_rows($sql);


}
// function catQty($catid){
//     global $db;
//     $sql = $db->query("SELECT * FROM items WHERE catid = '$catid' ");
//      return mysqli_num_rows($sql);


// }
function CurrentPrice($itemid){
    global $db;
    $sql = $db->query("SELECT * FROM stock where itemid = '$itemid' ORDER BY sn DESC LIMIT 1 ");
    $rows=$sql->fetch_assoc();
    return $rows['sellingprice'];
}

function addStock(){
    global $db;
  
        $itemid = $_POST["itemid"];
        $costprice = $_POST["costprice"];
        $sellingprice = $_POST["sellingprice"];
        $qty = $_POST["qty"];
       $trid = rand(0,9999);

        if(empty($itemid) ||empty($costprice) || empty($sellingprice)) {
			echo "invalid information";
			return;
		}
           

            $query = "INSERT INTO stock (trid,itemid,costprice, sellingprice,qty ) values
            ('$trid','$itemid','$costprice', '$sellingprice','$qty')";

            $db->query($query) or mysqli_error($db);

            //header("Location: itemlist.php");
            echo 'success';
    return;
}
function addcart(){
    global $db;
  
        $itemid = $_POST["itemid"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
      

       
           

            $query = "INSERT INTO cart (itemid,price, quantity) values
            ('$itemid','$price','$quantity')";

            $db->query($query) or mysqli_error($db);

            //header("Location: itemlist.php");
            echo 'success';
    return;
} 
 
