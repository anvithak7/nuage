<!DOCTYPE HTML>
<html>

<head>
  <link rel = "stylesheet" href= "style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact</title>
</head>

<body>

    <header class="body">
    </header>

    <section class="body">

      <?php
          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          $from = 'From: Nuage';
          $to = 'ivi.nuage@gmail.com';
          $subject = 'Hello';
          $body = "From: $name\n E-Mail: $email\n Message:\n $message";
          <?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
}
?>
      ?>


      <form method="post" action="index.php">

        <label>Name</label>
        <input name="name" placeholder="Type Here">

        <label>Email</label>
        <input name="email" type="email" placeholder="Type Here">

        <label>Message</label>
        <textarea name="message" placeholder="Type Here"></textarea>

        <input id="submit" name="submit" type="submit" value="Submit">

    </form>
    </section>

    <footer class="body">
    </footer>

</body>

</html>
