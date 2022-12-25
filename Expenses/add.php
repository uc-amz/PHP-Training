<div>
    <form method="post">
        <label for="desc">Enter Description</label>
        <textarea name="desc" id="desc" cols="30" rows="1"></textarea>
        <label for="amount">Enter Amount</label>
        <input type="number" name="amount" id="amount">
        <input type="submit" name="submit">
    </form>
</div>

<?php

if(isset($_POST['submit'])){
    $desc = $_POST['desc'];
    $amount = $_POST['amount'];

    $file = fopen('expense.csv', 'a+');

    fputcsv($file, [date('d/m/Y'), $desc, $amount]);
    fclose($file);
    header('Location: index.php');
}