<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Date Picker</h1>
  <form method="post">
    <label for="date">Select a date:</label>
    <input type="date" name="date" id="date" required>
    <br>
    <input type="submit" value="Submit">
  </form>
  <?php

  function getZodiacSign(string $dateString): string
  {
    $date = strtotime($dateString);
    $month = (int) date("m", $date);
    $day = (int) date("d", $date);

    switch (true) {
      case ($month === 3 && $day >= 21) || ($month === 4 && $day <= 20):
        return 'Widder';
      case ($month === 4 && $day >= 21) || ($month === 5 && $day <= 20):
        return 'Stier';
      case ($month === 5 && $day >= 21) || ($month === 6 && $day <= 21):
        return 'Zwillinge';
      case ($month === 6 && $day >= 22) || ($month === 7 && $day <= 22):
        return 'Krebs';
      case ($month === 7 && $day >= 23) || ($month === 8 && $day <= 23):
        return 'Löwe';
      case ($month === 8 && $day >= 24) || ($month === 9 && $day <= 23):
        return 'Jungfrau';
      case ($month === 9 && $day >= 24) || ($month === 10 && $day <= 23):
        return 'Waage';
      case ($month === 10 && $day >= 24) || ($month === 11 && $day <= 22):
        return 'Skorpion';
      case ($month === 11 && $day >= 23) || ($month === 12 && $day <= 21):
        return 'Schütze';
      case ($month === 12 && $day >= 22) || ($month === 1 && $day <= 20):
        return 'Steinbock';
      case ($month === 1 && $day >= 21) || ($month === 2 && $day <= 19):
        return 'Wassermann';
      case ($month === 2 && $day >= 20) || ($month === 3 && $day <= 20):
        return 'Fische';
      default:
        throw new RuntimeException('Ungültiges Datum für Sternzeichenermittlung.');
    }
  }

  function daysUntilNextBirthday(int $month, int $day): int
  {
    $today = date(time());

    $currentYear = date('Y', time());
    $birthdayThisYear = mktime(0, 0, 0, $month, $day, $currentYear);

    if ($birthdayThisYear < $today) {
      $birthdayThisYear = mktime(0, 0, 0, $month, $day, $currentYear + 1);
    }

    $diffSeconds = $birthdayThisYear - $today;
    return (int) ($diffSeconds / 86400);
  }

  $date = isset($_POST["date"]) ? $_POST["date"] : null;
  $weeksdays = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
  if ($date) {
    echo "<p>Der " . date("d.m.Y", strtotime($date)) . " ist/war es ein " . $weeksdays[date("w", strtotime($date))] . ".</p>";

    echo "<p>Sternzeichen an diesem Tag: " . getZodiacSign($date) . "</p>";

    echo "<p>Alter: " . (date("Y") - date("Y", strtotime($date))) . " Jahre</p>";

    echo "<p>Tage bis zum nächsten Geburtstag: " . (daysUntilNextBirthday((int) date("m", strtotime($date)), (int) date("d", strtotime($date)))) . " Tage</p>";
  }

  ?>
</body>

</html>