<div id="editTaskModal">
	<div class="form">
		<div class="closeModal">x</div>
		<form id="formEdit" method="post">
			<div class="formElement">
				<label for="name">Name :
					<input type="text" id="name" name="name" class="formInput"/>
				</label>
			</div>
			<div class="formElement">
				<label for="name">Color :
					<select name="color" class="formInput select">
						<option style="background: red;" value="red"></option>
						<option style="background: blue" value="blue"></option>
						<option style="background: green" value="green"></option>
						<option style="background: black" value="black"></option>
						<option style="background: purple" value="purple"></option>
						<option style="background: yellow" value="yellow"></option>
						<option style="background: gray" value="gray"></option>
						<option style="background: orange" value="orange"></option>
						<option style="background: pink" value="pink"></option>
						<option style="background: cyan" value="cyan"></option>
					</select>
				</label>
			</div>
			<div class="formElement">
				<label for="editTask">
					<input name="editTask" type="submit" id="editTask" value="edit"/>
					<input type="hidden" id="data-edit" name="data-edit"/>
				</label>
			</div>
		</form>
	</div>
</div>