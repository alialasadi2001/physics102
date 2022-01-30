<?php
    require('header.php');
?>
<form method="post">
    <p>Three point charges are fixed at the corners of the shown triangle where q1=q2=[] nC and q3=[] nC. Find the total electric potential (in V) at point A.</p>
    <img src="five.png" style=" width:100px; height:100px; ">
    <br>
    <table>
        <p> input the missing value (q1,q2,q3)</P>
        <tr>
            <label for="q1q2value"> q1 and q2:</label>
            <input type="text" name="q1q2_value" id="q1q2 value" value="Enter the q1 and q2 value in nC Unit">
        </tr>

        <br>
        <br>

        <tr>
            <label for="q3value"> q3:</label>
            <input type="text" name="q3_value" id="q3 value" value="Enter the q3 value in nC Unit">
        </tr>

        <br>
        <br>
        <input type="Submit" value="Submit">
            
    </table>
</form>


<?php
 require('footer.php'); 
?>
