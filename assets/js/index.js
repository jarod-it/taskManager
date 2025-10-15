//FORM ADD TASK
var addTaskBtn = document.getElementById('addTaskBtn');
var addTask = document.getElementById('addTask');
var formAdd = document.getElementById('formAdd');
var dataAdd = document.getElementById('data-add');

//FORM EDIT TASK
var editTaskBtn = document.getElementsByClassName('editTask');
var editTask = document.getElementById('editTask');
var formEdit = document.getElementById('formEdit');
var dataEdit = document.getElementById('data-edit');

//FORM
var formColor = document.querySelectorAll('.select');
var formName = document.getElementById('name');

//TASK TABLE
var taskBody = document.getElementById('taskBody');
var taskTable = document.getElementById('taskTable');

//INFO
var success = document.getElementById('success');
var error = document.getElementById('error');

//DELETE TASK
var deleteTaskBtn = document.getElementsByClassName('deleteTask');

//MODALS
var addTaskModal = document.getElementById('addTaskModal');
var editTaskModal = document.getElementById('editTaskModal');
var closeModal = document.getElementsByClassName('closeModal');

	
window.onload = () => {
	formColor.forEach(color => {
		color.style.backgroundColor = color.value;
	});
}

formAdd.onsubmit = (e) => {
	e.preventDefault();
	processForm(formAdd);
	addTaskModal.style.display = 'none';
}

formEdit.onsubmit = (e) => {
	e.preventDefault();
	processForm(formEdit);
	editTaskModal.style.display = 'none';
}

formColor.forEach(color => {
	color.addEventListener('input', () => {
		color.style.backgroundColor = color.value;
	});
});


//ONCLICK
error.onclick = () => {
	error.style.display = 'none';
}

addTaskBtn.onclick = () => {
	addTaskModal.style.display = 'flex';
}

addTaskModal.onclick = (e) => {
	if(e.target.getAttribute('class') == 'closeModal') {
		addTaskModal.style.display = 'none';
	}
}

editTaskModal.onclick = (e) => {
	if(e.target.getAttribute('class') == 'closeModal') {
		editTaskModal.style.display = 'none';
	}
}

taskTable.onclick = (e) => {
	if(e.target.getAttribute('class') == 'deleteTask') {
		var taskId = e.target.getAttribute('data-id');

		deleteTask(taskId);
	}

	if(e.target.getAttribute('class') == 'editTask') {
		dataEdit.value = e.target.getAttribute('data-id');
		editTaskModal.style.display = 'flex';
	}
}

function toggleInfo(element, time, message) {
	element.innerHTML = message;
	element.style.display = 'block';

	setTimeout(() => {
		element.style.display = 'none';
	}, time);
}

function refreshTasks() {
	fetch('index.php').then(response => {
		return response.text();
	}).then(data => {
		tempData = document.createElement('div');
		tempData.innerHTML = data;
		taskTable.innerHTML = tempData.querySelector('#taskTable').innerHTML;
	}).catch(err => {
		console.log('Error:', err)
	});
}

function processForm(form) {
    var formData = new FormData(form);

    fetch('ajax.php', {
        method: form.method,
        body: formData
    })
    .then(response => response.text())
    .then(data => {
		if(data == 'add') {
			toggleInfo(success, 2*1000, 'Task created successfully !');
			refreshTasks();
			formName.value = '';
		} else if(data == 'edit'){
			toggleInfo(success, 2*1000, 'Task edited successfully !');
			refreshTasks();
		} else {
			toggleInfo(error, 7*1000, data);
		}
    })
    .catch(error => {
        console.error('Error:', error);
    });

    return false;
}

function deleteTask(id) {
	fetch('ajax.php', {
		method: 'POST',
		headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
		body: 'deleteTask=' + id
	})
    .then(response => response.text())
    .then(data => {
		if(data == 'sent') {
			toggleInfo(success, 3*1000, 'Task deleted successfully !');
			refreshTasks();
		} else {
			toggleInfo(error, 7*1000, data);
		}
    })
    .catch(error => {
        console.error('Error:', error);
    });

    return false;
}
