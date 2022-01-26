<?php
require('header.php');
 ?>
      <form method="post">
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Search the question</label>
        <textarea type="text" class="form-control" id="formGroupExampleInput" placeholder="Type your question"></textarea>
        <button style="  cursor: pointer;
          background-color: rgb(13, 122, 0) ;
          border: 2px solid rgb(13, 122, 0) ;
          border-radius: 4px;
          color: #fff;
          padding: 10px;
          margin-top: 20px;"type="submit" name="button">Submit</button>
      </div>
      </form>
      <a href="one.php">question 1</a>
      <a href="two.php">question 2</a>

<?php require('footer.php'); ?>
