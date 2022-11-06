<?php
require_once 'components.php';
$units = ['MM', "CM", "DM", "M", "DAM", "HM", "KM"];


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
    <link href="/css/general.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
</head>
<body>
<div class="text-7xl font-family flex-wrap">
    <div class="flow-root title">
        <p class="logo-purple float-left ml-10">1</p>
        <p class="logo-purple float-right mr-10">2</p>
    </div>
    <div class="flow-root name text-2xl mt-10">
        <div class="float-left text-white ml-5"><p>BONJOUR</p></div>
        <div class="float-right text-white mr-5"><p>YOURNAME</p></div>
    </div>
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
                                                                  class="w-full text-[<?= $purple5 ?>] h-16 rounded bg-[<?= $purple3 ?>] border-2 border-[<?= $purple2 ?>] text-right pr-10"><span
                            style="margin-left:-35px;" class="text-[<?= $purple5 ?>]"> <?= $units[3] ?></span></div>

                <div class=" float-right mr-5 w-5/12 pl-1 "><input type="text"
                                                                   class="w-full text-[<?= $purple5 ?>] h-16 rounded bg-[<?= $purple3 ?>] border-2 border-[<?= $purple2 ?>] text-right pr-10"><span
                            style="margin-left:-45px;" class="text-[<?= $purple5 ?>]"><?= $units[1] ?></span></div>
            </div>
        </form>
    </div>
    <?= $separator ?>

    <div class="mx-5 text-2xl text-[<?= $purple1 ?>] ">
        <div class="w-full bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded rounded-full flow-root"><span
                    class="ml-2 float-left"><?= $search_unit ?></span><span class="float-right mr-2"><i
                        class="fa-solid fa-magnifying-glass"></i></span>
        </div>
        <div class="mx-3 bg-[<?= $purple4 ?>] border-2 border-[<?= $purple3 ?>] "><span
                    class="ml-2"><?= $result1_unit ?></span></div>
        <div class="mx-3 bg-[<?= $purple4 ?>] border-2 border-[<?= $purple3 ?>] rounded-b-lg "><span
                    class="ml-2"><?= $result2_unit ?></span></div>

    </div>

    <?= $separator ?>
    <div class="mx-5 text-2xl">
        <div class="text-white ">UNITÉS</div>
        <div class="flow-root">
            <div class="float-left w-6/12 pr-5 text-center">
                <div class="text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded-t-lg">
                    <span><?= $units[0] ?></span>
                </div>
                <?php for ($i = 1;
                           $i < 6;
                           $i++) { ?>
                    <div class="-mt-1 text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>]">
                        <span><?= $units[$i] ?></span>
                    </div>
                <?php } ?>
                <div class="-mt-1 text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded-b-lg">
                    <span><?= $units[6] ?></span>
                </div>
            </div>
            <div class="float-right w-6/12 pl-5 text-center">
                <div class="text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded-t-lg">
                    <span><?= $units[0] ?></span>
                </div>
                <?php for ($i = 1;
                           $i < 6;
                           $i++) { ?>
                    <div class="-mt-1 text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>]">
                        <span><?= $units[$i] ?></span>
                    </div>
                <?php } ?>
                <div class="-mt-1 text-[<?= $purple1 ?>] bg-[<?= $purple2 ?>] border-2 border-[<?= $purple3 ?>] rounded-b-lg">
                    <span><?= $units[6] ?></span>
                </div>
            </div>
        </div>
    </div>
    <?= $separator ?>
    <!--

-->


    <div class="mx-5 text-2xl text-white">
        <div class=" ">POPULAIRES</div>
        <div class="flow-root">
            <div class="float-left w-6/12 pr-5">
                <?php for ($j = 0;
                           $j <= 3;
                           $j++) { ?>
                    <div class="mt-2 text-center bg-[<?= $purple3 ?>] border-2 border-[<?= $purple2 ?>] rounded "><?= $units[3] ?>
                        <=> <?= $units[6] ?></div>
                <?php } ?>
            </div>
            <div class="float-right w-6/12 pl-5">
                <?php for ($j = 0;
                           $j <= 3;
                           $j++) { ?>
                    <div class="mt-2 text-center bg-[<?= $purple3 ?>] border-2 border-[<?= $purple2 ?>] rounded "><?= $units[3] ?>
                        <=> <?= $units[6] ?></div>
                <?php } ?>
            </div>

        </div>

    </div>

</body>
</html>