<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1><?= $title ?></h1>
<a href="/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger">Delete</a>
<p><?= $post['post_content'] ?></p>

<?= $this->endSection() ?>
