<?php

	include "../app/categoryController.php";
	$categoryController = new categoryController();
	$categories = $categoryController->getSidebar();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href= "../CSS/sidebar.css?v=0.0.2" />
     <title>Blockbuster</title>
     <link rel="shortcut icon" href="../Imagenes/Blockbuster_logo.svg.png" />

     <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script type="text/javascript">
           
        </script>
</head>
<body>
	<div id="sidebar">
			<div id="categories">
				<?php foreach ($categories as $category): ?>
					<?php
					$count=$categoryController->getSidebarCount($category['categoria']);
					?>
					
						<ul>
							<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
										
							<li class="font_style title_cat"><a href="index.php?name=<?= $category['categoria'] ?>" class=" font_style font_color link"><?= $category['categoria'] ?>
								
							</a> </li>
							<li class="font_style count_cat">
								<?php foreach ($count as $countAll): ?>
										<?= $countAll['categoria'] ?>
								<?php endforeach ?>
							</li>
						</ul>
				<?php endforeach ?>
			</div>	
		</div>
		<!-- fin sidebar container-->
	
</body>						

</html>