<!DOCTYPE html>
<html>
    <body>
        <form action="#" method="post">
            Enter Form Number:: <input type="numebr" name="n"><br>
            <input name="submit" type="submit">
        </form>

        <?php
            if(isset($_POST['n'])==true){
                $n=$_POST['n'];
                if($n>0){
                    echo "<form action='multi_form_back.php' method='post'>";
                echo "<input value='$n' name='formnumber' type='hidden'>";
                for($i=1;$i<=$n;$i++){
                    echo "Enter Name: <input  type='text' name='name$i'><br>";
                    echo "Enter Surname: <input  type='text' name='surname$i'><br>";
                    echo "Enter Email: <input  type='email' name='email$i'><br>";
                    echo "Enter Contact: <input  type='number' name='contact$i'><br>";
                    echo "Enter Gender: ";echo "Male: <input  type='radio' name='gender$i' value='male' checked>";echo "Female: <input  type='radio' name='gender$i' value='female' ><br>";
                }
                echo "<input type='submit'>";
                echo "</form>";
                }
                else{
                    echo "enter greater then 1";
                }
            }
            
        ?>
    </body>
</html>