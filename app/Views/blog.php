<h1><?= $title ?></h1>

<div>
    <?php foreach($posts as $post): ?>
        <div>
            <h3><?= $post ?></h3>
            <img src="/assets/images/arch.png" style="width: 200px; height: auto;"alt="">
            <p>Lorem ispum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

    <?php endforeach; ?>
<div>
