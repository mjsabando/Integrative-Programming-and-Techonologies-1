<?php
// Declare the PHP associative array
//ENCODE
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

//DECODE
$student_dec_json = '[
    {
        "name" : "Jean Calvin Nueva",
        "age" : 24,
        "email" : "nuevajeancalvin_bsit@plmun.edu.ph"
    },
    {
        "name" : "Ryhea Jean Quita",
        "age" : 23,
        "email" : "quitaryheajean.bsit@edu.ph"
    },
    {
        "name" : "Melvic Jane Sabando",
        "age" : 20,
        "email" : "sabandomelvicjane_bsit@plmun.edu.ph"
    },
    {
        "name" : "Krisalyn Sama",
        "age" : 21,
        "email" : "samakrisalyn_bsit@plmun.edu.ph"
    }
]';

// Decode JSON string into a PHP object
$data_Object_Array = json_decode($student_dec_json);
// Decode JSON string into a PHP associative array
$data_Array_Array = json_decode($student_dec_json, true);

// Accessing decoded values
$decoded_name_obj = $data_Object_Array[0]->name; // Access first student (index 0)
$decoded_age_arr = $data_Array_Array[0]['age'];   // Access first student (index 0)
$decoded_email_arr = $data_Array_Array[0]['email']; // Access first student (index 0)
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="labstyle.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>JSON Encode/Decode</title>
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
                <i class="mt-2 text-blue-400">Encode</i>
                <pre class="mt-2 text-gray-400 bg-zinc-900 p-4 rounded-lg"><?php echo htmlspecialchars(json_encode($student_info, JSON_PRETTY_PRINT)); ?></pre>
<br>
<hr>
<br>
                <i class="mt-2 text-blue-400">Decoding JSON</i>

                <!-- DECODE -->
                <pre class="mt-2 text-gray-400 bg-zinc-900 p-4 rounded-lg">
              <strong class="text-white ">--- Object Format Output (Array of Objects) ---</strong>
              <?php
              foreach ($data_Object_Array as $index => $student) {
                  echo "Student " . ($index + 1) . ":\n";
                  echo "  Name: " . $student->name . "\n";
                  echo "  Age: " . $student->age. "\n";
                  echo "  Email: " . $student->email . "\n";
              }
              ?>

              <strong class="text-white">--- Associative Array Format Output (Array of Arrays) ---</strong>
              <?php
              foreach ($data_Array_Array as $index => $student) {
                  echo "Student " . ($index + 1) . ":\n";
                  echo "  Name: " . $student['name'] . "\n";
                  echo "  Age: " . $student['age'] . "\n";
                  echo "  Email: " . $student['email'] . "\n";
              }
              ?>
                </pre>




            </div>
        </div>
  </body>
</html>
