<html>
    <head>
        <title>
            Simple Calculator
	    </title>
    </head>
    <body>
	
        <form name = "calc"> 
            
        <table> 
            
        <tr> 
            <td colspan=5><input id="btn" name="display"
                onkeypress="return event.charCode >= 48 
                && event.charCode <= 57" type="text"> 
            </td> 
        </tr> 
        <tr> 
            <td><input id="btn" type="button" value="1" OnClick="calc.display.value+='1'"></td> 
            <td><input id="btn" type="button" value="2" OnClick="calc.display.value+='2'"></td> 
            <td><input id="btn" type="button" value="3" OnClick="calc.display.value+='3'"></td> 
            <td><input id="btn" type="button" value="C" OnClick="calc.display.value='' "></td> 
            <td><input id="btn" type="button" value=&#8592
                    OnClick="backspace(this.form)"> 
            </td> 
             
        </tr> 
        
        <tr> 
            <td><input id="btn" type="button" value="4"
                    OnClick="calc.display.value+='4'"> 
            </td> 
            
            <td><input id="btn" type="button" value="5"
                    OnClick="calc.display.value+='5'"> 
            </td> 
            
            <td><input id="btn" type="button" value="6"
                    OnClick="calc.display.value+='6'"> 
            </td> 
            
            <td><input id="btn" type="button" value="-"
                    OnClick="calc.display.value+='-'"> 
            </td>  
            
            <td><input id="btn" type="button" value="cos"
                    OnClick="calc.display.value='Math.cos('"> 
            </td> 
        </tr> 
        
        <tr> 
            <td><input id="btn" type="button" value="7"
                    OnClick="calc.display.value+='7'"> 
            </td> 
            
            <td><input id="btn" type="button" value="8"
                    OnClick="calc.display.value+='8'"> 
            </td> 
            
            <td><input id="btn" type="button" value="9"
                    OnClick="calc.display.value+='9'"> 
            </td> 
            
            <td><input id="btn" type="button" value="*"
                    OnClick="calc.display.value+='*'"> 
            </td> 
            
            <td><input id="btn" type="button" value="sin"
                    OnClick="calc.display.value='Math.sin('"> 
            </td> 
        </tr> 
        
        <tr> 
            <td><input id="btn" type="button" value="."
                    OnClick="calc.display.value+='.'"> 
            </td> 
            
            <td><input id="btn" type="button" value="0"
                    OnClick="calc.display.value+='0'"> 
            </td> 
            
            <td><input id="btn" type="button" value="+"
                    OnClick="calc.display.value+='+'"> 
            </td> 
            
            <td><input id="btn" type="button" value="/"
                    OnClick="calc.display.value+='/'"> 
            </td> 
            
            <td><input id="btn" type="button" value="tan"
                    OnClick="calc.display.value='Math.tan('"> 
            </td> 
        </tr> 
        
        <tr>  
            
            <td><input id="btn" type="button" value="pi"
                    OnClick="calc.display.value+='Math.PI'"> 
            </td> 
            
            <td><input id="btn" type="button" value="**"
                    OnClick="calc.display.value+='**';"> 
            </td> 
            
            <td><input id="btn" type="button" value="("
                    OnClick="calc.display.value+='('"> 
            </td> 
            
            <td><input id="btn" type="button" value=")"
                    OnClick="calc.display.value+=')'"> 
            </td> 
            <td><input id="btn" type="button" value="="
                OnClick="calculate(this.form)"> 
        </td>
        </tr>  
        </table> 
        <input type="button" style="width: 50px; height: 20px;" value="history" onclick="his();">
        </form> 
    </body>     
</html>
