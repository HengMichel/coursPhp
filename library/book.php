<?php
require_once("./inc/function.php");
require_once("./inc/header.php");
?>
<div class="container">
    <h1>Book</h1>
    <form action="./model/db_register.php" method="post">

        <div class="form-group">
             <label for="author">author :</label>
             <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="lastname">Title :</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-check">
        <label class="form-check-label" for="publication">Publication</label>
            <input class="form-check-input" type="date" id="publication" name="publication">
        </div>
        
        <div class="form-check">
            <label class="form-check-label" for="stock">Stock</label>
            <input class="form-check-input" type="number" id="publication" name="publication">
        </div>

    </form>
</div>        
<?php
require_once("./inc/footer.php");
?>