<?php

include_once 'header.php';

?>

<section class="index-intro">
<?php

if (isset($_SESSION["useruid"])) {
    echo "<p>Welcome here " . $_SESSION["useruid"] . "</p>";
} 

?>
    <h1>This is an introduction</h1>
    <p>Here is an important paragraph about something really important i guess.</p>
</section>

<section class="index-categories">
    <h2>Some basic categories</h2>
</section>

<?php

include_once 'footer.php';

?>