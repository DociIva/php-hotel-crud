<?php 
require_once __DIR__ . '/partials/scripts/get-single-room.php';
?>

<body>
    <main class="container">
      <h2>DETTAGLIO STANZA : </h2>
      <?php if(! empty($room)) { ?>

      <ul>
        <li>Stanza numero : <?php echo $room['room_number']; ?> </li>
        <li>Numero Piano : <?php echo $room['floor']; ?> </li>
        <li>Numero Letti : <?php echo $room['beds']; ?> </li>
      </ul>
       <?php } ?>
     <a href="./">BACK</a>
    </main>
</body>