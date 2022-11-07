<?php
require_once 'components.php';
$units = ['MM', "CM", "DM", "M", "DAM", "HM", "KM"];


$search_unit = "FAMILLES";
$result1_unit = "METRIQUE";
$result2_unit = "MASSE";

//colors
$color1 = "#da6cdd";
$color2 = "#933ea4";
$color3 = "#72076e";
$color4 = "#490456";
$color5 = "#2b0245";
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
     class="menu menu-transition absolute z-30 h-[30%] pb-10 bg-white w-full rounded rounded-b-xl text-2xl text-center">
    <div class="absolute right-0 mr-6 mt-4 ">
        <i id="cross" class="fa-solid fa-xmark"></i>
    </div>
    <form action="admin.php">
        <div class="mx-5 mt-14"><input
                    class="w-full text-white bg-[<?= $color3 ?>] rounded border-2 border-[<?= $color4 ?>]"
                    type="text"
                    placeholder="INDENTIFIANT"></div>
        <div class="mx-5 mt-5"><input
                    class="w-full text-white bg-[<?= $color3 ?>] rounded border-2 border-[<?= $color4 ?>]"
                    type="password"
                    placeholder="MOT DE PASSE"></div>
        <div class="mx-5 mt-10 text-right"><input
                    class=" text-white w-full bg-[<?= $color3 ?>] rounded border-2 border-[<?= $color4 ?>]"
                    type="submit" value="SE CONNECTER"></div>
    </form>
</div>

<div class="text-7xl  flex-wrap mb-100">
    <!-- Header -->
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
    <!-- Welcome Area -->
    <div class="flow-root name text-2xl mt-10">
        <div class="float-left text-white ml-5"><p>BONJOUR</p></div>
        <div class="float-right text-white mr-5"><p>GUY PARMELIN</p></div>
    </div>
    <!-- Converter -->
    <?= $separator ?>
    <div class="flow-root text-white text-2xl ">
        <div class="float-left ml-5">UNITÉ</div>
        <div class="absolute right-2/4 translate-x-1/2"><=></div>
        <div class="float-right mr-5">UNITÉ</div>
    </div>
    <div class="flow-root convert text-white text-2xl mt-2">
        <form action="#">
            <div class="flow-root">
                <div class="float-left ml-5  w-5/12 pr-1 "><input type="text"
                                                                  class="w-full text-[<?= $color5 ?>] h-16 rounded bg-[<?= $color3 ?>] border-2 border-[<?= $color2 ?>] text-right pr-10"><span
                            style="margin-left:-35px;" class="text-[<?= $color5 ?>]"> <?= $units[3] ?></span></div>

                <div class=" float-right mr-5 w-5/12 pl-1 "><input type="text"
                                                                   class="w-full text-[<?= $color5 ?>] h-16 rounded bg-[<?= $color3 ?>] border-2 border-[<?= $color2 ?>] text-right pr-10"><span
                            style="margin-left:-45px;" class="text-[<?= $color5 ?>]"><?= $units[1] ?></span></div>
            </div>
        </form>
    </div>
    <?= $separator ?>
    <!-- Search -->
    <div class="mx-5 text-2xl text-[<?= $color1 ?>] ">
        <div class="w-full bg-[<?= $color2 ?>] border-2 border-[<?= $color3 ?>] rounded rounded-full flow-root"><span
                    class="ml-2 float-left"><?= $search_unit ?></span><span class="float-right mr-2"><i
                        class="fa-solid fa-magnifying-glass"></i></span>
        </div>
        <div class="mx-3 bg-[<?= $color4 ?>] border-2 border-[<?= $color3 ?>] "><span
                    class="ml-2"><?= $result1_unit ?></span></div>
        <div class="mx-3 bg-[<?= $color4 ?>] border-2 border-[<?= $color3 ?>] rounded-b-lg "><span
                    class="ml-2"><?= $result2_unit ?></span></div>
    </div>
    <?= $separator ?>
    <!-- Units -->
    <div class="mx-5 text-2xl">
        <div class="text-white ">UNITÉS</div>
        <div class="flow-root">
            <div class="float-left w-6/12 pr-5 text-center">
                <div class="text-[<?= $color1 ?>] bg-[<?= $color2 ?>] border-2 border-[<?= $color3 ?>] rounded-t-lg">
                    <span><?= $units[0] ?></span>
                </div>
                <?php for ($i = 1;
                           $i < 6;
                           $i++) { ?>
                    <div class="-mt-1 text-[<?= $color1 ?>] bg-[<?= $color2 ?>] border-2 border-[<?= $color3 ?>]">
                        <span><?= $units[$i] ?></span>
                    </div>
                <?php } ?>
                <div class="-mt-1 text-[<?= $color1 ?>] bg-[<?= $color2 ?>] border-2 border-[<?= $color3 ?>] rounded-b-lg">
                    <span><?= $units[6] ?></span>
                </div>
            </div>
            <div class="float-right w-6/12 pl-5 text-center">
                <div class="text-[<?= $color1 ?>] bg-[<?= $color2 ?>] border-2 border-[<?= $color3 ?>] rounded-t-lg">
                    <span><?= $units[0] ?></span>
                </div>
                <?php for ($i = 1;
                           $i < 6;
                           $i++) { ?>
                    <div class="-mt-1 text-[<?= $color1 ?>] bg-[<?= $color2 ?>] border-2 border-[<?= $color3 ?>]">
                        <span><?= $units[$i] ?></span>
                    </div>
                <?php } ?>
                <div class="-mt-1 text-[<?= $color1 ?>] bg-[<?= $color2 ?>] border-2 border-[<?= $color3 ?>] rounded-b-lg">
                    <span><?= $units[6] ?></span>
                </div>
            </div>
        </div>
    </div>
    <?= $separator ?>


    <!-- Popular -->
    <div class="mx-5 text-2xl text-white">
        <div class=" ">POPULAIRES</div>
        <div class="flow-root">
            <div class="float-left w-6/12 pr-5">
                <?php for ($j = 0;
                           $j <= 3;
                           $j++) { ?>
                    <div class="mt-2 text-center bg-[<?= $color3 ?>] border-2 border-[<?= $color2 ?>] rounded "><?= $units[3] ?>
                        <=> <?= $units[6] ?></div>
                <?php } ?>
            </div>
            <div class="float-right w-6/12 pl-5">
                <?php for ($j = 0;
                           $j <= 3;
                           $j++) { ?>
                    <div class="mt-2 text-center bg-[<?= $color3 ?>] border-2 border-[<?= $color2 ?>] rounded "><?= $units[3] ?>
                        <=> <?= $units[6] ?></div>
                <?php } ?>
            </div>

        </div>

    </div>

</body>
</html>