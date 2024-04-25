<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>Test XSS</title>
</head>
<body>

<p>Hello user, your current group is beginner [ <?php echo htmlspecialchars($_GET['group'], ENT_QUOTES , 'UTF-8'); ?> ] </p>

<p>Hello user, your current group is [ {{ $_GET['group'] }} ] </p>

</body>
</html>
