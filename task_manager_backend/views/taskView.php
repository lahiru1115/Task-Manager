<?php if (!empty($tasks)) : ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Username</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($task['username']); ?></td>
                    <td id="title">
                        <?php if (strlen($task['title']) > 45) : ?>
                            <span class="short-text"><?php echo htmlspecialchars(substr($task['title'], 0, 40)) . '...'; ?></span>
                            <span class="full-text" style="display: none;"><?php echo htmlspecialchars($task['title']); ?></span>
                            <a href="#" class="see-more">See more</a>
                        <?php else : ?>
                            <?php echo htmlspecialchars($task['title']); ?>
                        <?php endif; ?>
                    </td>
                    <td id="description">
                        <?php if (strlen($task['description']) > 100) : ?>
                            <span class="short-text"><?php echo htmlspecialchars(substr($task['description'], 0, 100)) . '...'; ?></span>
                            <span class="full-text" style="display: none;"><?php echo htmlspecialchars($task['description']); ?></span>
                            <a href="#" class="see-more">See more</a>
                        <?php else : ?>
                            <?php echo htmlspecialchars($task['description']); ?>
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($task['date']); ?></td>
                    <td id="actions">
                        <button class="btn btn-sm btn-outline-secondary update-btn" data-id="<?php echo $task['id']; ?>">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger delete-btn" data-id="<?php echo $task['id']; ?>">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <i class="bi bi-info-circle-fill"></i>
        &nbsp;
        <div>
            No tasks found. Please add a new task.
        </div>
    </div>
<?php endif; ?>