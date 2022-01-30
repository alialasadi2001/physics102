<?php
    require('header.php');
?>
<form method="post">
    <p> Two equal positive poinnt charges Q=[] nC are placed at the base comes of an equilateral triangle of side length d=[]m as shown in the figure. What is the magnitude of the net electric field E in (N/C) at the point (A)? </p>
    <img src="one.png" style=" width:100px; height:100px; ">
    <br>
    <table>
        <p> input the missing value (Q,d)</P>
        <tr>
            <label for="Qvalue"> Q:</label>
            <input type="text" name="Q_value" id="Q value" value="Enter the Q value in nC Unit">
        </tr>

        <br>
        <br>

        <tr>
            <label for="dvalue"> d:</label>
            <input type="text" name="d_value" id="d value" value="Enter the m value in m Unit">
        </tr>

        <br>
        <br>
        <input type="Submit" value="Submit">
            
    </table>
</form>


<?php
 require('footer.php'); 
?>
