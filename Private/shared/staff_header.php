<?php if(!isset($page_title)){
    $page_title = 'Staff Area';
}
?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <title>GBI - <?php echo $page_title ?></title>
    <link rel="stylesheet" type="text/css"  media="all" href="../stylesheets/style.css" >
</head>

<body>
<header>
    <h1>GBI Staff Area</h1>
</header>
<navigation>
    <ul>
        <li><a href=" <?php echo WWW_ROOT. '/staff/index.php'; ?> ">Menu</a></li>
    </ul>
</navigation>