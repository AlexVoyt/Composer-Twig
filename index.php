<?php 

    require_once ('vendor/autoload.php');
    $Loader = new \Twig\Loader\FilesystemLoader('templates');
    $Twig = new \Twig\Environment($Loader);


    $Creatures = 
    [
        [
            "Name" => "Archer",
            "Health" => "10",
            "Damage" => "2-4",
            "Attack" => "3",
            "Defense" => "1",
            "Speed" => "6"
        ], 
        [
            "Name" => "Monk ",
            "Health" => "30",
            "Damage" => "10-14",
            "Attack" => "8",
            "Defense" => "6",
            "Speed" => "5"
        ]   
    ];

    echo $Twig->render('main.twig', ['Creatures' => $Creatures]);
    
?>