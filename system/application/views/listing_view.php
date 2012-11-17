<p>List of Movies On listing <p>
	<table>
	<th>Film Name</th>
	<th>Price</th>
	<?php
	
     foreach ($films as $film) {
    ?>
   <tr>
     <td><?=$film->title?></td>
     <td><?=$film->replacement_cost;?></td>
   </tr> 
     <?php
     }
	?>
