<?php
require_once __DIR__ . '/data/profile.php';
require_once __DIR__ . '/data/skills.php';
require_once __DIR__ . '/data/case-studies.php';
require_once __DIR__ . '/data/web-projects.php';
require_once __DIR__ . '/data/organizations.php';
require_once __DIR__ . '/data/external-links.php';

$status = $_GET['status'] ?? null;
$msg = $_GET['msg'] ?? null;
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <?php include __DIR__ . '/includes/header.php'; ?>
  </head>
  <body class="bg-canvas text-ink antialiased">
    <?php include __DIR__ . '/includes/navbar.php'; ?>
    <?php include __DIR__ . '/includes/section-beranda.php'; ?>
    <?php include __DIR__ . '/includes/section-tentang.php'; ?>
    <?php include __DIR__ . '/includes/section-skill.php'; ?>
    <?php include __DIR__ . '/includes/section-case-study.php'; ?>
    <?php include __DIR__ . '/includes/section-web-project.php'; ?>
    <?php include __DIR__ . '/includes/section-organisasi.php'; ?>
    <?php include __DIR__ . '/includes/section-tautan.php'; ?>
    <?php include __DIR__ . '/includes/section-kontak.php'; ?>
    <?php include __DIR__ . '/includes/footer.php'; ?>
  </body>
</html>
