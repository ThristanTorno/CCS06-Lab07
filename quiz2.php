<?php
session_start();

if (!isset($_SESSION['complete_name']) || !isset($_SESSION['email']) || !isset($_SESSION['birthdate'])) {
    header('Location: index.php');
    exit();
}

$questions = array(
    array(
        'question' => 'What is the capital of France?',
        'choices' => array('London', 'Paris', 'New York', 'Madrid'),
        'answer' => 'Paris'
    ),
    array(
        'question' => 'What is the largest country in the world by land area?',
        'choices' => array('Canada', 'United States', 'Russia', 'China'),
        'answer' => 'Russia'
    ),

    array(
        'question' => 'What is the capital of Japan?',
        'choices' => array('London', 'Tokyo', 'New York', 'Madrid'),
        'answer' => 'Tokyo'
    ),
    array(
        'question' => 'What is the capital of the Philippines?',
        'choices' => array('Manila', 'Paris', 'New York', 'Madrid'),
        'answer' => 'Manila'
    ),
    array(
        'question' => 'What is the capital of Korea?',
        'choices' => array('London', 'Paris', 'Seoul', 'Madrid'),
        'answer' => 'Seoul'
    ),
    array(
        'question' => 'What is the capital of China?',
        'choices' => array('London', 'Beijing', 'New York', 'Madrid'),
        'answer' => 'Beijing'
    ),
    array(
        'question' => 'What is the capital of Spain?',
        'choices' => array('Madrid', 'Paris', 'New York', 'Madrid'),
        'answer' => 'Madrid'
    ),
    array(
        'question' => 'What is the capital of Indonesia?',
        'choices' => array('Jakarta', 'Paris', 'New York', 'Madrid'),
        'answer' => 'Jakarta'
    ),
    array(
        'question' => 'What is the capital of Singapore?',
        'choices' => array('London', 'Paris', 'New York', 'Singapore'),
        'answer' => 'Singapore'
    ),
    array(
        'question' => 'What is the capital of Thailand?',
        'choices' => array('London', 'Bangkok', 'New York', 'Madrid'),
        'answer' => 'Bangkok'
    ),







    // add more questions here
);

$num_questions = count($questions);
$answers = array();

if (isset($_POST['submit'])) {
    for ($i = 0; $i < $num_questions; $i++) {
        $answers[$i] = $_POST['q' . $i];
    }

    $_SESSION['answers'] = $answers;
    header('Location: result.php');
    exit();
}
?>

<form method="POST">
    <?php for ($i = 0; $i < $num_questions; $i++) { ?>
        <p><?php echo ($i + 1) . '. ' . $questions[$i]['question']; ?></p>
        <?php foreach ($questions[$i]['choices'] as $choice) { ?>
            <label>
                <input type="radio" name="q<?php echo $i; ?>" value="<?php echo $choice; ?>">
                <?php echo $choice; ?>
            </label><br>
        <?php } ?>
    <?php } ?>
    <br>
    <button type="submit" name="submit">Submit</button>
</form>

