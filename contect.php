<?php
  $page = 'contact';
  require('templates/header.php');
?>

  <main>
    <h2>Contact</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi architecto, beatae vel et veniam eos eveniet placeat ducimus ab quam porro minus recusandae tempore corporis. Delectus reprehenderit enim laborum hic.</p>
    <?php 
      $list = array('item1', 'item2', 'item3');
    ?>
    <ul>
      <?php foreach ($list as $listItem): ?>
        <li><?= $listItem ?></li>
      <?php endforeach; ?>
    </ul>
  </main>

  <footer>
    <p>Here is some footer text</p>

      
  </footer>
</body>
</html>