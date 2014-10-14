<?php
$hasComputerLanguages = false;
$hasHumanLanguages = false;

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['sex'];
$birthDate = $_POST['birthdate'];
$nationality = $_POST['nationality'];

$companyName = $_POST['company-name'];
$companyFrom = $_POST['company-from'];
$companyTo = $_POST['company-to'];

if ($_POST['computer-language-name'][0] != '') {
    $hasComputerLanguages = true;
    $computerLanguagesName = $_POST['computer-language-name'];
    $computerLanguagesSkills = $_POST['computer-language-level'];
}
if ($_POST['human-language-name'][0] != '') {
    $hasHumanLanguages = true;
    $humanLanguagesName = $_POST['human-language-name'];
    $humanLanguagesComprehension = $_POST['human-language-comprehension'];
    $humanLanguagesReading = $_POST['human-language-reading'];
    $humanLanguagesWriting = $_POST['human-language-writing'];
}
if (isset($_POST['licenses'])) {
$licenses = $_POST['licenses'];
}

?>
<h1>CV</h1>
<table border="1">
    <tr>
        <th colspan="2">Personal Information</th>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?= $firstName ?></td>
    </tr>
    <td>Last Name</td>
    <td><?= $lastName ?></td>
    </tr>
    <td>Email</td>
    <td><?= $email ?></td>
    </tr>
    <td>Phone Number</td>
    <td><?= $number ?></td>
    </tr>
    <td>Gender</td>
    <td><?= $gender ?></td>
    </tr>
    <td>Birth Date</td>
    <td><?= $birthDate ?></td>
    </tr>
    <td>Nationality</td>
    <td><?= $nationality ?></td>
    </tr>
</table>
<table border="1">
    <tr>
        <th colspan="2">Last Work Position</th>
    </tr>
    <tr>
        <td>Company Name</td>
        <td><?= $companyName ?></td>
    </tr>
    <tr>
        <td>From</td>
        <td><?= $companyFrom ?></td>
    </tr>
    <tr>
        <td>To</td>
        <td><?= $companyTo ?></td>
    </tr>
</table>
<table border="1">
    <tr>
        <th colspan="2">Computer Skills</th>
    </tr>
    <tr>
        <td>Programming Languages</td>
        <?php
        if (!$hasComputerLanguages) {
            echo '<td>None</td>';
        } else {
        ?>
        <td>
            <table border="1">
                <tr>
                    <th>Language</th>
                    <th>Skill Level</th>
                </tr>
                <?php
                for ($i = 0; $i < sizeof($computerLanguagesName); $i++) {
                    echo '<tr>';
                    echo "<td>${computerLanguagesName[$i]}</td>";
                    echo "<td>${computerLanguagesSkills[$i]}</td>";
                    echo '</tr>';
                }
                }
                ?>
            </table>
        </td>
    </tr>
</table>
<table border="1">
    <tr>
        <th colspan="2">Other Skills</th>
    </tr>
    <tr>
        <td>Languages</td>
        <?php
        if (!$hasHumanLanguages) {
            echo '<td>None</td>';
        } else {
        ?>
        <td>
            <table border="1">
                <tr>
                    <th>Language</th>
                    <th>Comprehension</th>
                    <th>Reading</th>
                    <th>Writing</th>
                </tr>
                <?php
                for ($i = 0; $i < sizeof($humanLanguagesName); $i++) {
                    echo '<tr>';
                    echo "<td>${humanLanguagesName[$i]}</td>";
                    echo "<td>${humanLanguagesComprehension[$i]}</td>";
                    echo "<td>${humanLanguagesReading[$i]}</td>";
                    echo "<td>${humanLanguagesWriting[$i]}</td>";
                    echo '</tr>';
                }
                }
                ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>Drivers License</td>
        <td><?php if(isset($licenses)) {implode(", ", $licenses);} else { echo 'None';} ?></td>
    </tr>
</table>