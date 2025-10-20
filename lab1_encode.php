<?php
// Declare the PHP associative array
$student_info = array(
    "name1" => "Jean Calvin Nueva",
    "age1" => 24,
    "course" => "Bachelor of Science in Information Technology",

    "name2" => "Ryhea Jean Quita ",
    "age2" => 23,
    "course" => "Bachelor of Science in Information Technology",

    "name3" => "Melvic Jane Sabando",
    "age3" => 20,
    "course" => "Bachelor of Science in Information Technology",

    "name4" => "Krisalyn Sama ",
    "age4" => 21,
    "course" => "Bachelor of Science in Information Technology"
);

// Convert the php array to a JSON string
$json_string = json_encode($student_info);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="labstyle.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Basic JSON Encoding</title>
  </head>
  <body class="scroll-smooth">

    <div id="feedback-section" class="container mx-auto py-8 px-4 md:px-8 md:text-left" >
            <div class="bg-zinc-800 rounded-xl shadow-lg p-6 flex flex-col">

                <h3 class="text-xl font-bold text-amber-400 mb-4">Student Information (PHP Array)</h3>
                <ul class = "mt-2 text-gray-400">
                  <li><strong>Name:</strong> <?php echo htmlspecialchars($student_info['name1']); ?></li>
                  <li><strong>Age:</strong> <?php echo htmlspecialchars($student_info['age1']); ?></li>
                  <li><strong>Course:</strong> <?php echo htmlspecialchars($student_info['course']); ?></li>
                </ul>
<hr class="border-zinc-700">
                <ul class = "mt-2 text-gray-400">
                  <li><strong>Name:</strong> <?php echo htmlspecialchars($student_info['name2']); ?></li>
                  <li><strong>Age:</strong> <?php echo htmlspecialchars($student_info['age2']); ?></li>
                  <li><strong>Course:</strong> <?php echo htmlspecialchars($student_info['course']); ?></li>
                </ul>
<hr class="border-zinc-700">
                <ul class = "mt-2 text-gray-400">
                  <li><strong>Name:</strong> <?php echo htmlspecialchars($student_info['name3']); ?></li>
                  <li><strong>Age:</strong> <?php echo htmlspecialchars($student_info['age3']); ?></li>
                  <li><strong>Course:</strong> <?php echo htmlspecialchars($student_info['course']); ?></li>
                </ul>
<hr class="border-zinc-700">
                <ul class = "mt-2 text-gray-400">
                  <li><strong>Name:</strong> <?php echo htmlspecialchars($student_info['name4']); ?></li>
                  <li><strong>Age:</strong> <?php echo htmlspecialchars($student_info['age4']); ?></li>
                  <li><strong>Course:</strong> <?php echo htmlspecialchars($student_info['course']); ?></li>
                </ul>
<hr class="border-zinc-700">
<br><hr>
                <h3 class="text-xl font-bold text-amber-400 mb-4">Output</h3>
                <!-- ENCODE -->
                <i class="mt-2 text-blue-400">Basic JSON Encoding</i>
                <i class="mt-5 text-green-400">*Pretty-print* &#10004;</i>
                <pre class="mt-2 text-gray-400 bg-zinc-900 p-4 rounded-lg"><?php echo htmlspecialchars(json_encode($student_info, JSON_PRETTY_PRINT)); ?></pre>


            </div>
        </div>




  </body>
</html>
