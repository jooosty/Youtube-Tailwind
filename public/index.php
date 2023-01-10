<?php
function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

function generateRandomInt($min, $max)
{
    $views = rand($min, $max);
    return $views;
}

?>
<!DOCTYPE html>
<html lang="en" class="font-sans">

<head>
    <?php require_once(__DIR__ . '/components/head.php'); ?>

    <title>AmogTube</title>
</head>

<body class="bg-ytlightgray-100">
    <?php require_once(__DIR__ . '/components/navbar.php'); ?>
    <?php require_once(__DIR__ . '/components/sidebar.php'); ?>
    <main class="pt-32 ml-24">
        <div class="pb-12 ">
            <div class="grid grid-cols-4 row-gap-10 col-gap-2 mt-4">

                <div class="mx-4 my-2 w-68">
                    <div class="w-full h-auto overflow-hidden bg-gray-700 border-b-4 rounded-sm border-ytred-100">
                        <img src="https://img.youtube.com/vi/xR-EyeruEVg/maxresdefault.jpg" alt="">
                    </div>
                    <div class="flex mt-2">
                        <div class="flex-shrink-0 w-10 h-10 overflow-hidden bg-blue-300 rounded-full">
                            <img src="https://yt3.ggpht.com/ytc/AKedOLTluXwxj-M4_fIvVtXfqJcM79UkPI_pkKuMe5bi=s88-c-k-c0x00ffffff-no-rj" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">oh no....some bandits.</div>
                            <div class="text-xs text-gray-600">
                                <p>Woot DahNoot <i class="fa-solid fa-badge-check"></i></p>
                                <p><?= generateRandomInt(2, 19); ?> hours ago &middot; <?= generateRandomInt(700, 839); ?>k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                for ($i = 0; $i < 31; $i++) { ?>
                    <div class="mx-4 my-2 w-68">
                        <div class="w-full h-auto overflow-hidden bg-gray-700 rounded-sm ">
                            <!-- <p class="bottom-0 px-1 py-1 text-white teext-sm bg-black/50 right-2"><?= generateRandomInt(1, 15); ?>:<?= generateRandomInt(12, 43); ?></p> -->
                            <img src="https://picsum.photos/1280/720?<?= generateRandomInt(1, 90); ?>" alt="">

                        </div>
                        <div class="flex mt-2">
                            <div class="flex-shrink-0 w-10 h-10 overflow-hidden bg-blue-300 rounded-full">
                                <img src="https://picsum.photos/300/300?<?= generateRandomInt(1, 90); ?>" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="text-sm font-bold"><?= generateRandomString(); ?></div>
                                <div class="text-xs text-gray-600">
                                    <p>Kanaal naam</p>
                                    <p><?= generateRandomInt(2, 19); ?> uur geleden &middot; <?= generateRandomInt(11, 839); ?>k weergaven</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>



            </div>
        </div>
    </main>
</body>

</html>