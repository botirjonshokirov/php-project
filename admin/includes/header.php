<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Admin Panel'; ?></title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/admin/assets/css/style.css">
</head>
<body>
    <header class="admin-header">
        <div class="container">
            <h1><?php echo isset($pageTitle) ? $pageTitle : 'Admin Panel'; ?></h1>
        </div>
    </header>
