<?php
require 'components.php';
$units = ['MM', "CM", "DM", "M", "DAM", "HM", "KM"];
$families = ['MÈTRES', "MASSE", "VITESSE", "FORCE", "CHALEUR", "LUMIÈRE", "ÉNÉRGIE"];


$search_unit = "FAMILLES";
$result1_unit = "METRIQUE";
$result2_unit = "MASSE";

//colors
$purple1 = "#da6cdd";
$purple2 = "#933ea4";
$purple3 = "#72076e";
$purple4 = "#490456";
$purple5 = "#2b0245";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0398e3de48.js" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
    <link href="/css/general.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
</head>
<body>
<div id="menu"
     class="menu absolute z-30 h-[15%] pb-10 bg-white w-full rounded rounded-b-xl text-2xl text-center">
    <div class="absolute right-0 mr-6 mt-4 ">
        <i id="cross" class="fa-solid fa-xmark"></i>
    </div>

    <div class="mx-5 mt-16 ">
        <form action="index.php">
            <input href="index.php" type="submit" value="ACCEUIL"
                   class=" text-white w-full bg-[<?= $purple3 ?>] rounded border-2 border-[<?= $purple4 ?>]">
            </input>
        </form>
    </div>

</div>
<div id="container" class="text-7xl font-family flex-wrap mb-100">
    <div class="flow-root title">
        <p class="logo-purple font-bold float-left ml-10">
            <span class="absolute left-0 ml-10 blur-lg text-white opacity-40">UC</span>
            <span class="absolute left-0 ml-10 blur-sm text-white opacity-25">UC</span>
            <span class="UC">UC</span>
        </p>
        <div class="logo-purple float-right mr-10 text-xl">
            <i id="bars" class="fa-solid fa-bars absolute top-6"></i>
        </div>
    </div>
    <div class="mx-5 text-2xl mt-10">
        <div class="text-white ">FAMILLES</div>
        <div class="flow-root text-2xl">
            <div class="float-left w-6/12 pr-5 text-center">
                <div class="text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded-t-lg">
                    <span><?= $families[0] ?></span>
                </div>
                <?php for ($i = 1;
                           $i < 6;
                           $i++) { ?>
                    <div class="-mt-1 text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>]">
                        <span><?= $families[$i] ?></span>
                    </div>
                <?php } ?>
                <div
                        class="-mt-1 text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded-b-lg">
                    <span><?= $families[6] ?></span>
                </div>
            </div>
            <div class="float-right w-6/12 pl-5 text-center">
                <form action="">
                    <input type="text"
                           class="mt-16 text-white w-full bg-[<?= $purple3 ?>] rounded border-2 border-[<?= $purple4 ?>]"
                           placeholder="NOM">
                    <input type="submit"
                           class="mt-16 text-white w-full bg-[<?= $purple3 ?>] rounded border-2 border-[<?= $purple4 ?>]"
                           value="AJOUTER">
                </form>
            </div>
        </div>
    </div>
    <?= $separator ?>
    <div class="mx-5 text-2xl">
        <div class="text-white ">UNITÉ</div>
        <div id="search" class="text-2xl text-[<?= $purple1 ?>] ">
            <div class="w-full bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded rounded-full flow-root"><span
                        class="ml-2 float-left"><?= $search_unit ?></span><span class="float-right mr-2"><i
                            class="fa-solid fa-magnifying-glass"></i></span>
            </div>
            <div class="mx-3 bg-[<?= $purple4 ?>] border-2 border-[<?= $purple3 ?>] "><span
                        class="ml-2"><?= $result1_unit ?></span></div>
            <div class="mx-3 bg-[<?= $purple4 ?>] border-2 border-[<?= $purple3 ?>] rounded-b-lg "><span
                        class="ml-2"><?= $result2_unit ?></span></div>
        </div>
        <div class="flow-root text-2xl mt-8">
            <div class="float-left w-6/12 pr-5 text-center">
                <div class="text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded-t-lg">
                    <span><?= $families[0] ?></span>
                </div>
                <?php for ($i = 1;
                           $i < 6;
                           $i++) { ?>
                    <div class="-mt-1 text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>]">
                        <span><?= $families[$i] ?></span>
                    </div>
                <?php } ?>
                <div
                        class="-mt-1 text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded-b-lg">
                    <span><?= $families[6] ?></span>
                </div>
            </div>

            <div class="float-right w-6/12 pl-5 text-center">
                <div class="text-2xl text-[<?= $purple1 ?>] text-left">
                    <div class="w-full bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded rounded-full flow-root"><span
                                class="ml-2 float-left">MASSE</span><span class="float-right mr-2"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                    <div class="mx-3 bg-[<?= $purple4 ?>] border-2 border-[<?= $purple3 ?>] "><span
                                class="ml-2">G</span></div>
                    <div class="mx-3 bg-[<?= $purple4 ?>] border-2 border-[<?= $purple3 ?>] rounded-b-lg "><span
                                class="ml-2">KG</span></div>
                </div>
                <form action="">
                    <input type="text"
                           class="mt-6 text-white w-full bg-[<?= $purple3 ?>] rounded border-2 border-[<?= $purple4 ?>]"
                           placeholder="NOM">
                    <input type="submit"
                           class="mt-6 text-white w-full bg-[<?= $purple3 ?>] rounded border-2 border-[<?= $purple4 ?>]"
                           value="AJOUTER">
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>