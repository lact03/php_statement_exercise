<?php
if (isset($_POST['submit'])) {
    $monthName = $_POST['month'];

    switch ($monthName) {
        case 'January':
        case 'March':
        case 'May':
        case 'July':
        case 'August':
        case 'October':
        case 'December':
            $numDays = 31;
            break;
        case 'April':
        case 'June':
        case 'September':
        case 'November':
            $numDays = 30;
            break;
        case 'February':
            $numDays = 28;
            break;
        default:
            $numDays = 'invalid';
            break;
    }

    if ($numDays == 'invalid') {
        $result = "Invalid month name.";
    } else {
        $result = "The month of " . $monthName . " has " . $numDays . " days.";
    }
}
?>

<form method="post">
    <select name="month" id="month">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($result)) {
    echo $result;
}
?>
