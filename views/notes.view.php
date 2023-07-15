
<?php require "views/partials/header.php"?>
<?php require "views/partials/navbar.php"?>

<div  class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $notes_data):?>
        <li><a href="/note?id=<?php echo $notes_data["id"] ?>" class="text-blue-500 hover:underline" ><?php echo $notes_data["name"]?></a></li>
    <?php endforeach;?>
</div>





<?php require "views/partials/path.php"?>
<?php require "views/partials/footer.php"?>

