<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}

function add_category ($category_id, $category_name ) {
    global $db;
    $query = "INSERT INTO categories (categoryID, categoryName) VALUES (:category_id, :category_name )";
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':category_name',$category_name );
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
   return $category_name;
              
}

function delete_category ($category_id) {
    global $db;
    $query = "DELETE FROM categories WHERE categoryID = :category_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
  
    $statement->closeCursor();    
 
}

?>