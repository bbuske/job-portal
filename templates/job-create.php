<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Create Job Listing</h2>
    <form method="post" action="create.php">
        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" class="form-control" name="job_title" id="job_title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" id="location">
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" class="form-control" name="salary" id="salary">
            </div>
            <div class="form-group">
                <label for="contact_user">Contact User</label>
                <input type="text" class="form-control" name="contact_user" id="contact_user">
            </div>
            <div class="form-group">
                <label for="contact_email">Contact Email</label>
                <input type="text" class="form-control" name="contact_email" id="contact_email">
            </div>
            <input type="submit" class="btn btn-default" value="Submit" name="submit" id="submit">
    </form>

<?php include 'inc/footer.php'; ?>
