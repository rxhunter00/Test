<!DOCTYPE html>
<html>
<body>

<p>Hello user, your current group is beginner [ <?php echo $_GET['group']; ?> ] </p>

<p>Hello user, your current group is beginner [ <?php echo htmlspecialchars($_GET['group'], ENT_QUOTES , 'UTF-8'); ?> ] </p>

<p>Hello user, your current group is [ {{ $_GET['group'] }} ] </p>

</body>
</html>
