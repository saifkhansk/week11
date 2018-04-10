<?php include '../view/header.php'; ?>
<main>
    <h1>View / Add Category</h1>      
        
        <table>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?php echo $category['categoryID']; ?></td>
                <td><?php echo $category['categoryName']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']; ?>">
                    <input type="hidden" name="categoryName "
                           value="<?php echo $category['categoryName ']; ?>">
                    <input type="submit" value="Delete">
                    
                </form></td>
            </tr>
            <?php endforeach; ?>
            
            
            
        </table>
        <br>
      <p><a href="index.php?action=add_categorys">Add Category</a></p>
      
        
        <a href="index.php?action=list_products">View Product List</a>
    </p>


</main>
<?php include '../view/footer.php'; ?>