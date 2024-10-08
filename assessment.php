<?php
session_start();

// Define correct answers for each day's assessment
$answers = [
    1 => 'a',  // Example: Answer for Day 1's question
    2 => 'b',  // Answer for Day 2's question
    3 => 'c',  // Answer for Day 3's question
];

// Get the current day
$day = isset($_GET['day']) ? intval($_GET['day']) : 1;

// If the user submits the form, process the assessment
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected_answer = $_POST['answer'];
    
    // Check if the answer is correct
    if ($selected_answer === $answers[$day]) {
        // Move to the next day if the answer is correct
        $_SESSION['current_day'] = $day + 1;
        header('Location: index.php');
        exit;
    } else {
        // If the answer is wrong, reload the current day
        echo '<p style="color: red;">Incorrect answer. Please try again!</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day <?php echo $day; ?> Assessment</title>
</head>
<body>
    <h2>Day <?php echo $day; ?> Assessment</h2>

    <form method="POST">
        <p>What is the correct option for Day <?php echo $day; ?>'s topic?</p>
        <input type="radio" name="answer" value="a" required> Option A<br>
        <input type="radio" name="answer" value="b"> Option B<br>
        <input type="radio" name="answer" value="c"> Option C<br>
        <input type="radio" name="answer" value="d"> Option D<br>
        <br>
        <input type="submit" value="Submit">
    </form>

    <a href="index.php">Back to Training</a>
</body>
</html>
