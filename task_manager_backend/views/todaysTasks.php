<?php if (!empty($tasks)) : ?>
    <div class="container">
        <div class="row">
            <?php foreach ($tasks as $task) : ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <h6 class="card-header">
                            <?php if (strlen($task['title']) > 35) : ?>
                                <span class="short-text"><?php echo htmlspecialchars(substr($task['title'], 0, 35)) . '...'; ?></span>
                                <span class="full-text" style="display: none;"><?php echo htmlspecialchars($task['title']); ?></span>
                                <a href="#" class="see-more">See more</a>
                            <?php else : ?>
                                <?php echo htmlspecialchars($task['title']); ?>
                            <?php endif; ?>
                        </h6>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php echo htmlspecialchars($task['username']); ?>
                            </h6>
                            <p class="card-text">
                                <?php if (strlen($task['description']) > 80) : ?>
                                    <span class="short-text"><?php echo htmlspecialchars(substr($task['description'], 0, 80)) . '...'; ?></span>
                                    <span class="full-text" style="display: none;"><?php echo htmlspecialchars($task['description']); ?></span>
                                    <a href="#" class="see-more">See more</a>
                                <?php else : ?>
                                    <?php echo htmlspecialchars($task['description']); ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php else : ?>
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <i class="bi bi-calendar-event-fill"></i>
        &nbsp;
        <div>
            No tasks found for today.
        </div>
    </div>
<?php endif; ?>