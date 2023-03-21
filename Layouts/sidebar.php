<div class="card h-100">
    <?php
        include(__DIR__.'/components/Post.php');
        $post = new Post('./Page/Assets/SideBar.jpg', 'Codes', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit');
        $post->render();
        ?>

    <hr>

    <?php
        $post2 = new Post('./Page/Assets/SideBar.jpg', 'Sports', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit');
        $post2->render();
    ?>

    <hr>

    <?php
        $post3 = new Post('./Page/Assets/SideBar.jpg', 'Games', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit');
        $post3->render();
    ?>

</div>