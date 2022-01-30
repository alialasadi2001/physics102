<?php
    require('header.php');
?>
<form method="post">
    <p>In the figure, if Q=[]µC, q =[]µC, and d=[]cm, what is the magnitude of the electrostatic force on q?</p>
    <img src="physics102\figures\three.png" style=" width:100px; height:100px; ">
    <br>
    <table>
        <p> input the missing value (Q,q,d)</P>
        <tr>
            <label for="Qvalue"> Q:</label>
            <input type="text" name="Q_value" id="Q value" value="Enter the Q value in nC Unit">
        </tr>

        <br>
        <br>

        <tr>
            <label for="qvalue"> q:</label>
            <input type="text" name="q_value" id="q value" value="Enter the q value in µC Unit">
        </tr>

        <br>
        <br>

        <tr>
            <label for="dvalue"> d:</label>
            <input type="text" name="d_value" id="d value" value="Enter the d value in cm Unit">
        </tr>

        <br>
        <br>
        <input type="Submit" value="Submit">
            
    </table>
</form>


<?php
 require('footer.php'); 
?>
