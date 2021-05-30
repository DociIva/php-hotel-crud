<?php 
require_once __DIR__ . '/partials/scripts/get-rooms.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php //HEAD
require_once __DIR__ . '/partials/template/head.php';
?>
<body>
  
      <main class="container">
           <h1 class="my-4">Lista delle stanze</h1>

           <table class="table">
              <thead>
                  <tr>
                     <th>ID</th>
                     <th>STANZA NUMERO: </th>
                     <th>LINK</th>
                  </tr>
              </thead>
             <tbody>
               <?php 
                if( !empty($rooms))  {
                  foreach($rooms as $room) {?>
                   <tr>
                      <td> <?php echo $room['id']; ?></td>
                      <td> <?php echo $room['room_number']; ?></td>
                      <td> <a href="./show.php?id=<?php echo $room['id']; ?>" > VIEW</a></td>
                   </tr>
                <?php }} ?>
             </tbody>

           </table>  
      </main>
    
    
</body>
</html>