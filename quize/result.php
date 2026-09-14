<!DOCTYPE html><html>
<head>
    <title>Quiz Result</title>
</head>
<body><h2>Quiz Result</h2><?php

$answers = [
    "q1" => "Personal Home Page",
    "q2" => "$",
    "q3" => "print",
    "q4" => ".php"
];

$right = 0;
$wrong = 0;

foreach ($answers as $question => $correctAnswer) {

    if (isset($_POST[$question])) {

        if ($_POST[$question] == $correctAnswer) {
            $right++;
        } else {
            $wrong++;
        }

    } else {
        $wrong++;
    }
}

$totalQuestions = count($answers);
$marks = $right;

?><p><b>Total Questions:</b> <?php echo $totalQuestions; ?></p><p><b>Right Answers:</b> <?php echo $right; ?></p><p><b>Wrong Answers:</b> <?php echo $wrong; ?></p><p><b>Full Marks:</b> <?php echo $marks . " / " . $totalQuestions; ?></p></body>
</html>
