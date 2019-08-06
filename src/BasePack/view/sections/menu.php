<?php
$publicMenu = [
    'home' => 'home'
];

$userMenu = [
    'home' => 'home',
    'admin' => (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'])? 'admin/': null,
    'sign out' => 'signout',
];
?>

<nav>
    <ul>
        <?php
        foreach (isset($isConnected) && $isConnected? $userMenu: $publicMenu as $text => $href):
            if($href === null) continue;
            ?>
            <li class="<?=(strpos($_SERVER['REQUEST_URI'], $href) !== false)? 'active ' : ''?>
                    <?=str_replace(' ', '', $text)?>"
            >
                <a href="/<?=$href?>"><?=ucfirst($text)?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>