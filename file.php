<?php

// Working with file.

// print_r(scandir(__DIR__));  // This is for getting current directory as ./../file.php as an array ['.', '..', 'file.php']

// mkdir('newfolder'); // This is used to make new folder.

// rmdir('newfolder'); // This is used to remove folder.


// Check a file is exists or not.
// if(file_exists('filename')){
//     clearstatcache();
//     echo filesize('filename');
// }
// else{
//     echo "File not found";
// }

// Open file.
// if(!file_exists('temp.txt')){
//     echo "File not exists";
//     return;
// }
// $file = fopen('temp.txt', 'r+');

// Reading file.
// while(($line=fgets($file)) !== false){
//     echo $line . '<br>';
// }

// Writing in file.
// file_put_contents('temp.txt', 'Hello');
// file_put_contents('temp.txt', 'World', FILE_APPEND);

// Deleting file.
// fclose($file);
// unlink('temp.txt');

// Working with csv file.

if(!file_exists('employee.csv')){
    $file = fopen('employee.csv', 'a+');
    fputcsv($file, ['emp_id', 'name', 'salary']);
}else{
    $file = fopen('employee.csv', 'a+');
}

fputcsv($file, [1, 'Amzad', 30_000]);
fputcsv($file, [2, 'Aman', 22_000]);
fputcsv($file, [3, 'Amit', 20_000]);
fputcsv($file, [4, 'Ankit', 20_000]);

fseek($file, SEEK_SET);
$data = fgetcsv($file);
?>

<table border="2">
    <th><?php echo $data[0] ?></th>
    <th><?php echo $data[1] ?></th>
    <th><?php echo $data[2] ?></th>

    <?php
    // Searching data from file.
    while(($data = fgetcsv($file)) !== false):?>
        <tr>
            <td><?php echo $data[0] ?></td>
            <td><?php echo $data[1] ?></td>
            <td><?php echo $data[2] ?></td>
        </tr>
    <?php endwhile?>
</table>
<?php


fclose($file);