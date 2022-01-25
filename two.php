<?php
    require('header.php');
?>
<form method="post">
    <p> A point charge Q=[]  μC is fixed a distance x=[] m from point A as shown in the figure. A charged particle of q=[] nC and mass m=[] kg is realeased from rest at point A and moves along x-axis to infinity. What is the ultimates speed in (m/s) of the particle at infinity? </p>
    <table>
        <p> input the missing value ( Q,x,q,m )</P>
        <tr>
            <label for="Qvalue"> Q:</label>
            <input type="text" name="Q_value" id="Q value">
        </tr>
        <div>
        <tr>
            <label for="xvalue"> x:</label>
            <input type="text" name="x_value" id="x value">
        </tr>
        <div>
        <tr>
            <label for="qvalue"> q:</label>
            <input type="text" name="q_value" id="q value">
        </tr>
        <div>
        <tr>
            <label for="mvalue"> m:</label>
            <input type="text" name="m_value" id="m value">
        </tr>

    </table>
</form>
<?php
 require('footer.php'); 
?>
