<div id="addTaskModal">
	<div class="form">
		<div class="closeModal">x</div>
		<form id="formAdd" method="post">
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
				<label for="addTask">
					<input name="addTask" type="submit" id="addTask" value="Add"/>
					<input type="hidden" id="data-add" name="data-add"/>
				</label>
			</div>
		</form>
	</div>
</div>