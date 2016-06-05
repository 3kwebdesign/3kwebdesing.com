<h2>
	<?php $_GET['translatedID'] = 14; include('scripts/translated.php'); ?>
</h2>

<div class="textInside">
<form id="contact" method="POST">
	<table>
		<tr>
			<td><input type="email" name="email" placeholder="E-mail"></td>
			<td><input type="text" name="subject" placeholder="Předmět"></td>
		</tr>

		<tr>
			<td>
				<textarea name="message" placeholder="Vaše zpráva">
					
				</textarea>
			</td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" name="contact" value="Odeslat"></td>
		</tr>
	</table>
</form>
</div>