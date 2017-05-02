<center><div style="background-color:#FFFFD4;font-family: verdana;color: grey;width: 50%;margin-top: 5%">
    <fieldset>
    <legend>Registration</legend>
    <form method="post" id="form">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" id="name"></td>
                <td><span id="n_error" class="er_msg"></span></td>
            </tr>


            <tr>
                <td> Email:</td>
                <td><input type="email" id="email"></td>
                <td><span id="e_error" class="er_msg"></span></td>
            </tr> 
            
            <tr>
                <td> Mobile:</td>
                <td><input type="number" id="mob"></td>
                <td><span id="m_error" class="er_msg"></span></td>
            </tr>
            
            
            
            <tr>
                <td> Password:</td>
                <td><input type="password" id="pass"></td>
                <td><span id="p_error" class="er_msg"></span></td>
            </tr>
            
            <tr>
                <td> Confirm Password:</td>
                <td><input type="password" id="repass"></td>
                <td><span id="rp_error" class="er_msg"></span></td>
            </tr>

            <tr>
                <td colspan="2">
            <center><button style="color: gray;font-family:Verdana; " type="submit"  value="submit">Submit</button></center> 
            </tr>




        </table>
    </form>
    </fieldset>
</div>
    
    <div>
        <p id="show_message" style="color: red;font-size: medium;font-family:sans-serif,verdana;font-style: bold; "></p>
    </div>
    
</center>


