<!DOCTYPE>
<html>
<head>
<title>CHESSBOARD</title>
<style>
body {background-color:lightgrey;}
h2   {color:blue;text-align:center;}
p    {color:green;}
table{border:5px double black;margin-left:auto; margin-right:auto;}
caption{text-align:center;}
            
            .flex-parent{
    display:flex;
}
.jc-center{
    justify-content:center;
}
button.margin-right{
    margin-right:200px;
}
tton.margin-right{
    margin-left:200px;
}
</style>

</head> 
    <body>
    
        <table>
            
       <caption> <h2> CHESS BOARD </h2></caption>
            <table width="400px" cellspacing="0px" cellpadding ="0px"> 
            
                <?php
                for($r=1;$r<=8;$r++){
                    echo"<tr>";
                    for($c=1;$c<=8;$c++){
                        $chess=$r+$c;
                        if($chess%2==0){
                            echo"<td height=35px width =30px bgcolor=white></td>";
                        }
                        else{
                            echo"<td height=35px width =30px bgcolor=black></td>";
                        }
                    }
                    echo"</tr>";
                }
                ?>
               </table> 
            
            
<div class="flex=parent jc-center">
                <button type="sumbit" class="green margin-right">PLAYER 1</button>
                <button type="sumbit" class="green margin-left">PLAYER 2</button>
            </div>
                <h2> DESIGNED BY GROUP 6 PHP BACKEND DEVELOPMENT</h2>
            </body>
            </html>
