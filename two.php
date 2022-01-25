<?php
    require('header.php');
?>
<form method="post">
    <p> A point charge Q=[]  μC is fixed a distance x=[] m from point A as shown in the figure. A charged particle of q=[] nC and mass m=[] kg is realeased from rest at point A and moves along x-axis to infinity. What is the ultimates speed in (m/s) of the particle at infinity? </p>
    <table>
        <p> input the missing value ( Q,x,q,m )</P>
        <tr>
            <label for="Qvalue"> Q:</label>
            <input type="text" name="Q_value" id="Q value" value="Enter the Q value in μC Unit">
        </tr>

        <br>
        <br>

        <tr>
            <label for="xvalue"> x:</label>
            <input type="text" name="x_value" id="x value" value="Enter the m value in m Unit">
        </tr>

        <br>
        <br>

        <tr>
            <label for="qvalue"> q:</label>
            <input type="text" name="q_value" id="q value" value="Enter the q value in nC Unit">
        </tr>
        
        <br>
        <br>

        <tr>
            <label for="mvalue"> m:</label>
            <input type="text" name="m_value" id="m value" value="Enter the m value in kg Unit">
        </tr>

        <br>
        <br>
            
    </table>
</form>
<?php
 require('footer.php'); 
?>
