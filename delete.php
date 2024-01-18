<?php
include('connect.php');

$id=$_GET['id'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){
    ?>
    <script type="text/javascript">
        alert("Daa Deleted Successfully");
        window.open("http://localhost:8082/crud/view.php", "_self");//open pre page 
</script>
<?php
    }
else{
?>
 <script type="text/javascript">
        alert("Please Try again");
</script>
<?php
}