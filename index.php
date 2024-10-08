
<?php
session_start();

// Initialize user session data
if (!isset($_SESSION['current_day'])) {
    $_SESSION['current_day'] = 1; // Starting from Day 1
}

$current_day = $_SESSION['current_day'];

// Function to display content based on the selected part
function display_content($day, $part) {
    switch ($day) {
        case 1:
            switch ($part) {
                case 'content':
                    echo "<h2>Day 1: Introduction to C Programming</h2>";
                    echo "<p>Welcome to Day 1! Today, we’ll cover the basics of C programming: its history, features, and how to set up a C compiler on your system.</p>";
                    break;
                case 'video':
                    echo "<h2>Day 1: Video Lecture</h2>";
                    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/8PopR3x-VMY" frameborder="0" allowfullscreen></iframe>';
                    break;
                case 'research':
                    echo "<h2>Day 1: Content for Research</h2>";
                    echo "<p>Research the evolution of C programming language and its impact on modern programming languages. Understand how it influenced languages like C++, Java, and C#.</p>";
                    echo "<textarea placeholder='Enter your research findings here...' style='width: 100%; height: 200px;'></textarea>";
                    break;
                case 'assessment':
                    echo "<h2>Day 1: Formative Assessment</h2>";
                    echo "<p>Answer the following question:</p>";
                    echo "<p><strong>Question 1:</strong> What are the main features of the C programming language?</p>";
                    echo "<textarea placeholder='Enter your answer here...' style='width: 100%; height: 100px;'></textarea>";
                    echo "<br><button class='btn'>Submit Assessment</button>";
                    break;
            }
            break;

        case 2:
            switch ($part) {
                case 'content':
                    echo "<h2>Day 2: Variables and Data Types in C</h2>";
                    echo "<p>Today we’ll explore how to define variables in C and understand the various data types available such as integers, floating-point numbers, and characters.</p>";
                    break;
                case 'video':
                    echo "<h2>Day 2: Video Lecture</h2>";
                    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/zuegQmMdy8M" frameborder="0" allowfullscreen></iframe>';
                    break;
                case 'research':
                    echo "<h2>Day 2: Content for Research</h2>";
                    echo "<p>Research different data types in C and provide examples where each type is used efficiently in programs. Consider edge cases such as memory constraints.</p>";
                    echo "<textarea placeholder='Enter your research findings here...' style='width: 100%; height: 200px;'></textarea>";
                    break;
                case 'assessment':
                    echo "<h2>Day 2: Formative Assessment</h2>";
                    echo "<p><strong>Question 1:</strong> What is the difference between an `int` and a `float` in C?</p>";
                    echo "<textarea placeholder='Enter your answer here...' style='width: 100%; height: 100px;'></textarea>";
                    echo "<br><button class='btn'>Submit Assessment</button>";
                    break;
            }
            break;

        case 3:
            switch ($part) {
                case 'content':
                    echo "<h2>Day 3: Control Flow in C</h2>";
                    echo "<p>Today’s lesson covers conditional statements such as `if`, `else if`, and `else`, as well as switch statements that control the flow of your program based on specific conditions.</p>";
                    break;
                case 'video':
                    echo "<h2>Day 3: Video Lecture</h2>";
                    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/HROlxQXPfzY" frameborder="0" allowfullscreen></iframe>';
                    break;
                case 'research':
                    echo "<h2>Day 3: Content for Research</h2>";
                    echo "<p>Research how `if` and `else` control structures are used in decision-making processes in C programs. Provide examples of nested `if` statements and when to use `switch`.</p>";
                    echo "<textarea placeholder='Enter your research findings here...' style='width: 100%; height: 200px;'></textarea>";
                    break;
                case 'assessment':
                    echo "<h2>Day 3: Formative Assessment</h2>";
                    echo "<p><strong>Question 1:</strong> What is the difference between `if` and `switch` in C? Provide a scenario where one is preferable over the other.</p>";
                    echo "<textarea placeholder='Enter your answer here...' style='width: 100%; height: 100px;'></textarea>";
                    echo "<br><button class='btn'>Submit Assessment</button>";
                    break;
            }
            break;

        case 4:
            switch ($part) {
                case 'content':
                    echo "<h2>Day 4: Loops in C</h2>";
                    echo "<p>Today we’ll learn about loops in C, specifically `for`, `while`, and `do-while` loops. Loops are essential for iterating through data or repeating tasks in programs.</p>";
                    break;
                case 'video':
                    echo "<h2>Day 4: Video Lecture</h2>";
                    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/XTH1XU8fPyU" frameborder="0" allowfullscreen></iframe>';
                    break;
                case 'research':
                    echo "<h2>Day 4: Content for Research</h2>";
                    echo "<p>Research the differences between `for`, `while`, and `do-while` loops. Provide scenarios where each is best applied in a C program.</p>";
                    echo "<textarea placeholder='Enter your research findings here...' style='width: 100%; height: 200px;'></textarea>";
                    break;
                case 'assessment':
                    echo "<h2>Day 4: Formative Assessment</h2>";
                    echo "<p><strong>Question 1:</strong> Write a C program that uses a `for` loop to print numbers from 1 to 10.</p>";
                    echo "<textarea placeholder='Enter your code here...' style='width: 100%; height: 100px;'></textarea>";
                    echo "<br><button class='btn'>Submit Assessment</button>";
                    break;
            }
            break;

        // Add more days as needed
        default:
            echo "<h2>Congratulations!</h2>";
            echo "<p>You’ve completed all the training days! Keep practicing to enhance your C programming skills.</p>";
            break;
    }
}

// Generate course navigation with dropdowns
function course_navigation($current_day) {
    for ($i = 1; $i <= 4; $i++) { // Assuming 4 days of training
        $is_active = ($i <= $current_day) ? '' : 'inactive';
        echo "<div class='dropdown'>
                <button class='dropbtn' " . ($is_active ? '' : 'disabled') . ">Day $i</button>
                <div class='dropdown-content'>
                    <a href='?day=$i&part=content' class='" . ($is_active ? '' : 'disabled') . "'>Course Content</a>
                    <a href='?day=$i&part=video' class='" . ($is_active ? '' : 'disabled') . "'>Video</a>
                    <a href='?day=$i&part=research' class='" . ($is_active ? '' : 'disabled') . "'>Content for Research</a>
                    <a href='?day=$i&part=assessment' class='" . ($is_active ? '' : 'disabled') . "'>Formative Assessment</a>
                </div>
              </div>";
    }
}

$selected_day = isset($_GET['day']) ? (int)$_GET['day'] : $current_day;
$selected_part = isset($_GET['part']) ? $_GET['part'] : 'content';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C Programming Training - Day <?php echo $selected_day; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="wrapper">
        <!-- Sidebar for course navigation -->
        <aside class="sidebar">
            <h2>Course Navigation</h2>
            <?php course_navigation($current_day); ?>
        </aside>

        <!-- Main content area for videos, content, research, and assessment -->
        <section class="main-content">
            <?php display_content($selected_day, $selected_part); ?>
        </section>
    </div>
    
</body>
</html>
