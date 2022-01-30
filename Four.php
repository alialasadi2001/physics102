<?php
    require('header.php');
?>
<form method="post">
    <p>Two positive point charges of Q1=[]µC and Q2=[]µC are fixed on the x-axis as shown in the figure. Find the magnitude of the net electric force (in N) on a third negative charge of q=[] uC placed at the origin.</p>
    <img src="four.png" style=" width:100px; height:100px; ">
    <br>
    <table>
        <p> input the missing value (Q,q,d)</P>
        <tr>
            <label for="Q1value"> Q1:</label>
            <input type="text" name="Q1_value" id="Q1 value" value="Enter the Q1 value in µC Unit">
        </tr>

        <br>
        <br>

        <tr>
            <label for="Q2value"> Q2:</label>
            <input type="text" name="Q2_value" id="Q2 value" value="Enter the Q2 value in µC Unit">
        </tr>

        <br>
        <br>

        <tr>
            <label for="qvalue"> d:</label>
            <input type="text" name="q_value" id="q value" value="Enter the q value in uC Unit">
        </tr>

        <br>
        <br>
        <input type="Submit" value="Submit">
            
    </table>
</form>


<?php
 require('footer.php'); 
?>
