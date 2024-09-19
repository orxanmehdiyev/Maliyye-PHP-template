<?php 
require_once 'panel/header.php';
require_once 'panel/menu.php';
require_once 'panel/axtar.php'
?>


<section>

	<form class="form" method="POST" action="nedmin/islem.php">

		<div class="setir">
			<div class="col-25">
				<label>Menu Yeri:</label>
			</div>
			<div class="col-75">
				<select>
					<option value="A1">Ana Menu</option>
					<option>Apples</option>
					<option>Bananas</option>
					<option>Grapes</option>
					<option>Oranges</option>
				</select>


			</div>
		</div>
		<div class="setir">
			<div class="col-25">
				<label>Menu Adı:</label>
			</div>
			<div class="col-75">
				<input type="" name="">
			</div>
		</div>

		<div class="setir">
			<div class="col-25">
				<label>Menu Linki:</label>
			</div>
			<div class="col-75">
				<input type="" name="">
			</div>
		</div>

			<div class="setir">
			<div class="col-25">
				
			</div>
			<div class="col-75">
			<button type="submit" name="MenuElaveEt">Əlavə Et</button>
			</div>
		</div>
	</form>




</section>

<?php 
require_once 'panel/footer.php'
?>