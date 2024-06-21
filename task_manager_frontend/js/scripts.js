$(document).ready(function () {

    // Fetch tasks on page load
    fetchTasks();

    // Fetch tasks from the database
    function fetchTasks() {
        $.ajax({
            url: '../../../Task Manager/task_manager_backend/controllers/read.php',
            type: 'GET',
            success: function (response) {
                if (response.status === 'error') {
                    $('#taskList').html('<div class="alert alert-danger d-flex align-items-center" role="alert"><i class="bi bi-exclamation-triangle-fill"></i>&nbsp;<div>' + response.message + '</div></div>');
                    return;
                } else {
                    $('#taskList').html(response);
                    attachSeeMoreEvent();
                }
            },
            error: function () {
                $('#taskList').html('<div class="alert alert-danger d-flex align-items-center" role="alert"><i class="bi bi-exclamation-triangle-fill"></i>&nbsp;<div>Failed to fetch tasks. Please try again.</div></div>');
            }
        });
    }

    // Attach see more event to the see more button
    function attachSeeMoreEvent() {
        $('.see-more').on('click', function (e) {
            e.preventDefault();
            var $this = $(this);
            var $shortText = $this.siblings('.short-text');
            var $fullText = $this.siblings('.full-text');

            if ($fullText.is(':visible')) {
                $fullText.hide();
                $shortText.show();
                $this.text('See more');
            } else {
                $fullText.show();
                $shortText.hide();
                $this.text('See less');
            }
        });
    }

    // Add task form validation and submission
    $('#addTaskForm').on('submit', function (e) {
        e.preventDefault();
        let taskData = {
            username: $('#username').val(),
            title: $('#title').val(),
            description: $('#description').val(),
            date: $('#date').val()
        };

        $.ajax({
            url: '../../../Task Manager/task_manager_backend/controllers/create.php',
            type: 'POST',
            data: taskData,
            success: function (response) {
                if (response.status === 'success') {
                    showNotification(response.message, 'success');
                    $('#addTaskForm')[0].reset();
                    $('#addModal').modal('hide');
                    fetchTasks();
                } else if (response.status === 'error') {
                    showNotification(response.message, 'danger');
                } else {
                    showNotification('Failed to add task. Please try again.', 'danger');
                }
            },
            error: function () {
                showNotification('Failed to add task. Please try again.', 'danger');
            }
        });
    });

    // Update task functionality
    let taskIdToUpdate = null;
    $(document).on('click', '.update-btn', function () {
        taskIdToUpdate = $(this).data('id');
        $.ajax({
            url: '../../../Task Manager/task_manager_backend/controllers/read.php',
            type: 'GET',
            data: { id: taskIdToUpdate },
            success: function (response) {
                if (response.status === 'error') {
                    showNotification('Failed to fetch task details. Please try again.', 'danger');
                    taskIdToUpdate = null;
                    return;
                } else {
                    $('#updateUsername').val(response.username);
                    $('#updateTitle').val(response.title);
                    $('#updateDescription').val(response.description);
                    $('#updateDate').val(response.date);
                    $('#updateModal').modal('show');
                }
            },
            error: function () {
                showNotification('Failed to fetch task details. Please try again.', 'danger');
                taskIdToUpdate = null;
            }
        });
    });

    $('#updateTaskForm').on('submit', function (e) {
        e.preventDefault();
        let taskData = {
            id: taskIdToUpdate,
            username: $('#updateUsername').val(),
            title: $('#updateTitle').val(),
            description: $('#updateDescription').val(),
            date: $('#updateDate').val()
        };

        $.ajax({
            url: '../../../Task Manager/task_manager_backend/controllers/update.php',
            type: 'POST',
            data: taskData,
            success: function (response) {
                if (response.status === 'success') {
                    showNotification(response.message, 'success');
                    $('#updateTaskForm')[0].reset();
                    $('#updateModal').modal('hide');
                    taskIdToUpdate = null;
                    fetchTasks();
                } else if (response.status === 'error') {
                    showNotification(response.message, 'danger');
                } else {
                    showNotification('Failed to update task. Please try again.', 'danger');
                }
            },
            error: function () {
                showNotification('Failed to update task. Please try again.', 'danger');
            }
        });
    });

    // Delete task functionality
    let taskIdToDelete = null;
    $(document).on('click', '.delete-btn', function () {
        taskIdToDelete = $(this).data('id');
        $('#deleteModal').modal('show');
    });

    $('#confirmDelete').on('click', function () {
        if (taskIdToDelete) {
            $.ajax({
                url: '../../../Task Manager/task_manager_backend/controllers/delete.php',
                type: 'POST',
                data: { id: taskIdToDelete },
                success: function (response) {
                    if (response.status === 'success') {
                        showNotification(response.message, 'success');
                        $('#deleteModal').modal('hide');
                        taskIdToDelete = null;
                        fetchTasks();
                    } else if (response.status === 'error') {
                        showNotification(response.message, 'danger');
                        $('#deleteModal').modal('hide');
                        taskIdToDelete = null;
                    } else {
                        showNotification('Failed to delete task. Please try again.', 'danger');
                        $('#deleteModal').modal('hide');
                        taskIdToDelete = null;
                    }
                },
                error: function () {
                    showNotification('Failed to delete task. Please try again.', 'danger');
                    $('#deleteModal').modal('hide');
                    taskIdToDelete = null;
                }
            });
        }
    });

    // Notification function
    function showNotification(message, type) {
        let icon;
        if (type === 'success') {
            icon = '<i class="bi bi-check-circle-fill"></i>';
        } else if (type === 'danger') {
            icon = '<i class="bi bi-exclamation-triangle-fill"></i>';
        } else {
            icon = '';
        }

        const space = '&nbsp;&nbsp;';

        let notification = $('#notification');
        notification.addClass('alert-' + type).html(icon + space + message).fadeIn(300);

        setTimeout(function () {
            notification.fadeOut(300, function () {
                notification.removeClass('alert-' + type).empty();
            });
        }, 5000);
    }
});
