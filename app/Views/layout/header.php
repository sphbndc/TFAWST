<?php $loggedIn = session()->get('isLoggedIn') === true; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LabDesk POS operations console for laboratory supply teams.">
    <title><?= esc($title ?? 'LabDesk POS') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/site.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/forms.css') ?>">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <header class="site-header"><div class="shell header-inner">
        <a class="brand" href="<?= site_url('/') ?>" aria-label="LabDesk POS home"><span class="brand-mark" aria-hidden="true">LD</span><span class="brand-copy"><strong>LabDesk</strong><small>POS</small></span></a>
        <nav class="main-nav" aria-label="Main navigation"><a class="<?= ($active ?? '') === 'home' ? 'is-active' : '' ?>" href="<?= site_url('/') ?>">Home</a><a class="<?= ($active ?? '') === 'about' ? 'is-active' : '' ?>" href="<?= site_url('about') ?>">About</a><?php if ($loggedIn): ?><a class="<?= ($active ?? '') === 'customers' ? 'is-active' : '' ?>" href="<?= site_url('customers') ?>">Customers</a><a class="<?= ($active ?? '') === 'users' ? 'is-active' : '' ?>" href="<?= site_url('users') ?>">Users</a><?php endif; ?></nav>
        <?php if ($loggedIn): ?><a class="header-action" href="<?= site_url('logout') ?>">Logout <span aria-hidden="true">&#8594;</span></a><?php else: ?><a class="header-action" href="<?= site_url('login') ?>">Staff login <span aria-hidden="true">&#8594;</span></a><?php endif; ?>
    </div></header>
    <main id="main-content">
