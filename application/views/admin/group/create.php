<!DOCTYPE html>
<html>
<head>
    <title>Create Group</title>
</head>
<body>
    <h1>Create Group</h1>
    <form method="post" action="<?php echo site_url('group/store'); ?>">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Subject:</label>
        <input type="text" name="subject" required><br>
        <label>Method:</label>
        <select name="method">
            <option value="Online">Online</option>
            <option value="Live">Live</option>
        </select><br>
        <label>Type:</label>
        <input type="text" name="type" required><br>
        <label>Teacher:</label>
        <input type="number" name="teacher_id" required><br>
        <label>Level:</label>
        <select name="level">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="C1">C1</option>
        </select><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
