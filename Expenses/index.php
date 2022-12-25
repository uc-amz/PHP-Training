<?php

if(!file_exists('expense.csv')){
    $file = fopen('expense.csv', 'a+');
    fputcsv($file, ['Date', 'Description', 'Amount']);
}else{
    $file = fopen('expense.csv', 'a+');
}

$data = fgetcsv($file);
?>
<h1>Your Current Expenses</h1><br>
<table border="2">
    <th><?php echo $data[0] ?></th>
    <th><?php echo $data[1] ?></th>
    <th><?php echo $data[2] ?></th>

    <?php
    $total = 0;
    // Searching data from file.
    while(($data = fgetcsv($file)) !== false):?>
        <tr>
            <td><?php echo $data[0] ?></td>
            <td><?php echo $data[1] ?></td>
            <td><?php echo $data[2] ?></td>
        </tr>
        <?php $total += $data[2]; ?>
    <?php endwhile?>
    <tr>
        <td>Total Expenses</td>
        <td><?php echo $total ?></td>
    </tr>
</table>
<br>
<a href="add.php" style="border: 2px solid black; background:green;color:white;font-size:20px;text-decoration:none">Add Expenses</a>
<?php


fclose($file);