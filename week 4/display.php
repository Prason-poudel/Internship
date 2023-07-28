<?php
include ("connection.php");
?>
<table border="3">
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Address</th>
        <th>ContactNo</th>
        <th>operations</th>
    </tr>
    <?php
    $query = "select * from crud";
    $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data); 
    while($result = mysqli_fetch_assoc($data))
    {
    ?>
    <tr>
        <td><?php echo $result['Firstname']; ?></td>
        <td><?php echo $result['Lastname']; ?></td>
        <td><?php echo $result['Address']; ?></td>
        <td><?php echo $result['contactNo']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
<?php }
?>
</table> 