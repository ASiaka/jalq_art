<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JalQ_art</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php?page=accueil"><img src="../public/img/JalQ_art_blanc.png" alt="Logo JalQ_art" class="logo_jalq_art" /></a>
            <ul class="lists">
                <li class="list"><a href="index.php?page=accueil" class="link <?= isset($_GET['page']) && $_GET['page'] === "accueil" ? "active" : "" ?>">Accueil</a></li>
                <li class="list"><a href="index.php?page=realisations" class="link <?= isset($_GET['page']) && $_GET['page'] === "apropos" ? "active" : "" ?>">Réalisations</a></li>
                <li class="list"><a href="index.php?page=contact" class="link <?= isset($_GET['page']) && $_GET['page'] === "contact" ? "active" : "" ?>">Contact</a></li>
            </ul>
        </nav>
    </header>