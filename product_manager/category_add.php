<?php include '../view/header.php'; ?>
<main>
    <h1>Add Category</h1>
    <form action="index.php" method="post" >
        <input type="hidden" name="action" value="add_category">
    <label>Category:</label>
        <input type="text" name="category_name" />
        <br>
        <br>


        <label>&nbsp;</label>
        
        <input type="submit" value="Add Category" />
        <br><br>
    </form>
      
</main>
<?php include '../view/footer.php'; ?>