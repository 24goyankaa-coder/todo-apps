<h2>Todos</h2>

<?php if (!empty($successMessage)) : ?>
    <article style="background-color: palegreen; padding:8px; margin-bottom:10px;">
        <p style="color: darkgreen; margin: 0;"><?=htmlspecialchars($successMessage);?></p>
    </article>
<?php endif; ?>

<?php if (!empty($errorMessage)) : ?>
    <article style="background-color: pink; padding:8px; margin-bottom:10px;">
        <p style="color: darkred; margin: 0;"><?=htmlspecialchars($errorMessage);?></p>
    </article>
<?php endif; ?>

<section>
    <h3>Due Today (<?= count($dueToday) ?>)</h3>
    <?php if (count($dueToday) === 0): ?>
        <p>No todos due today.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($dueToday as $t): ?>
                <li>
                    <?=htmlspecialchars($t->description);?> — <?=htmlspecialchars($t->due_date);?> 
                    [<a href="index.php?action=mark&id=<?=urlencode($t->id)?>">Mark Completed</a>]
                    [<a href="index.php?action=edit&id=<?=urlencode($t->id)?>">Edit</a>]
                    [<a href="index.php?action=delete&id=<?=urlencode($t->id)?>" onclick="return confirm('Delete this todo?');">Delete</a>]
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>

<hr>

<section>
    <h3>All Todos</h3>
    <?php if (count($todos) === 0): ?>
        <p>No todos yet. Create one below.</p>
    <?php else: ?>
        <table border="0" cellpadding="6" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Completed</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach ($todos as $t): ?>
                <tr style="<?= $t->is_completed ? 'opacity:0.6;text-decoration:line-through;' : '' ?>">
                    <td><?= $i++; ?></td>
                    <td><?= htmlspecialchars($t->description); ?></td>
                    <td><?= htmlspecialchars($t->due_date); ?></td>
                    <td><?= $t->is_completed ? 'Yes' : 'No' ?></td>
                    <td>
                        <?php if (!$t->is_completed): ?>
                            <a href="index.php?action=mark&id=<?=urlencode($t->id)?>">Mark Completed</a>
                        <?php else: ?>
                            <span style="color:green;">Completed</span>
                        <?php endif; ?>
                        &nbsp;|&nbsp;
                        <a href="index.php?action=edit&id=<?=urlencode($t->id)?>">Edit</a>
                        &nbsp;|&nbsp;
                        <a href="index.php?action=delete&id=<?=urlencode($t->id)?>" onclick="return confirm('Are you sure you want to delete this todo?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>

<hr>

<section>
    <h3>Create Todo</h3>
    <form method="POST" action="index.php?action=create">
        <div>
            <label for="description">Description</label><br>
            <input type="text" name="description" id="description" required style="width:300px;">
        </div>
       
