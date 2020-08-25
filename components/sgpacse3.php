<style>

    #calcBody
    {background-color:rgba(222,210,210,1);
    display:block;
    margin:2em auto;
    width:80%;
    height:auto;
    border-radius:1em;
    box-shadow:.5em .5em 1em .2em #272727}
    #calcShadow{box-shadow:0 0 2em inset;padding:1em;border-radius:1em}
    #calcDisplay{
    border:1px solid rgba(128,134,177,1);
    margin-top:1em;
    background-color:rgba(100,100,100,0.4);
    border-radius:1em;
    display:block;
    padding:.002em 0}
    #screen{font-size:1.5em;display:block;text-align:right;word-wrap:break-word}
    #screen>h2{text-align:right;margin:0 .5em}
    #screen2{font-size:1.5em;display:block;text-align:right;word-wrap:break-word;height:1.2em}
    #calcMemory{display:block;text-align:right}
    #calcMemory>h3{text-align:right;margin:0 1em;color:rgba(0,0,0,0.4)}
    #form{display:none}.calcButton
    {
    margin:.5em auto;font-size:2em;line-height:2em;width:70%;height:1.5em;text-align:center;display:inline-block;color:#000;border:none;border-radius:.5em;vertical-align:middle
    }.calcNum{background-color:#c4b8ba;box-shadow:0 .1em }.calceq{background-color:#878787;box-shadow:0 .1em rgba(100,100,100,1)}.calcOp{background-color:#272727;box-shadow:0 .1em rgba(100,100,100,1)}#eq{width:55px}.calcErase{background-color:#ec1717;box-shadow:0 .1em rgba(197,15,15,1)}.calcButton:active{transform:translateY(0.1em);box-shadow:none}.calcButton>h4{font-size:.5em;line-height:3em}#calcButtone{background-color:#4d444f;}
    
    select {
        padding:3px;
        margin: 0;
        -webkit-border-radius:4px;
        -moz-border-radius:4px;
        border-radius:4px;
        -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
        -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
        box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
        background: #f8f8f8;
        color:#888;
        border:none;
        outline:none;
        display: inline-block;
        -webkit-appearance:none;
        -moz-appearance:none;
        appearance:none;
        cursor:pointer;
    }
    
    /* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
    @media screen and (-webkit-min-device-pixel-ratio:0) {
        select {padding-right:18px}
    }
    
    label {position:relative}
    label:after {
        content:'<>';
        font:11px "Consolas", monospace;
        color:#aaa;
        -webkit-transform:rotate(90deg);
        -moz-transform:rotate(90deg);
        -ms-transform:rotate(90deg);
        transform:rotate(90deg);
        right:8px; top:2px;
        padding:0 0 2px;
        border-bottom:1px solid #ddd;
        position:absolute;
        pointer-events:none;
    }
    label:before {
        content:'';
        right:6px; top:0px;
        width:60px; height:20px;
        background:#f8f8f8;
        position:absolute;
        pointer-events:none;
        display:block;
    }
    
    strong {color:red}
 
    </style>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    </head>
    <body>
    
    <center>
    <br />
    <br />
    <form name="GPACalcForm">
    <div class="clearfix" id="calcBody">
    <div id="calcShadow">
    <div id="calcTitle">
    <h4>
    S G P A  CALCULATOR</h4>
    </div>
    <div id="calcDisplay">
    <div>
    <h2 id="screen">
    </h2>
    <span align="right" id="screen2"></span></div>
    <div id="calcMemory">
    </div>
    </div>
    <table align="center" style="width: 100%px;">
    <th>COURSES</th>
    <th>Grades</th>
    <tr>
    <td>LANGUAGE AND COMPILERS</td>
    <td><select id="CMOS" name="GR1">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
    </tr>
    <tr>
    <td>PARALLEL AND DISTRIBUTED COMPUTING</td>
    <td>
    <select id="COA" name="GR2">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
       
    </tr>
    <tr>
    <td>ELECTIVE - 1</td>
    <td><select id="CT" name="GR3">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
    </tr>
    <tr>
    
    <td>ELECTIVE - 2</td>
    <td><select id="DMS" name="GR4">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
    </tr>
    <tr>
    <td>MACHINE LEARNING</td>
    <td><select id="CS" name="GR5">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
    </tr>
    <tr>
    <td>SPECIALIZATION SKILLING</td>
    <td><select id="ENG" name="GR6">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
    </tr>
    <tr>
    <td>TERM PAPER</td>
    <td><select id="ENG" name="GR7">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
    </tr>
    <tr>
    <td>CCS</td>
    <td><select id="ELECTIVE" name="GR8">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
    </tr>
        <tr>
    <td>SKILLING FOR ENGINNERS 2</td>
    <td><select id="ELECTIVE" name="GR9">
       <option value="None">Select</option> 
       <option value="O">O</option>
       <option value="A+">A+</option>
       <option value="A">A</option>
        <option value="B+">B+</option>
       <option value="B">B</option>
       <option value="C">C</option>
       <option value="D">D</option>
           <option value="P">P</option>
        <option value="E">E</option>   
       <option value="F">F</option>
       <option value="DT">DT</option>
       <option value="AB">AB</option>
       </select></td>
    </tr>

    <tr align="LEFT">
    <td></td>
    <td colspan="3"><input font-size:="" larger="" name="CalcButton" onclick="gpacalc()" style="background-color: #ffffc0;" type="reset" value="Calculate" /></td>
    </tr>
    </table>
    <h1>
    <strong>© INCEDIUM</strong></h1>
    </div>
    </div>
    </form>
    <br />
    
    
    
    </center>
    <br />
    
    
    <script language="JavaScript">
    
     
    
    
    function gpacalc()
    {
    function v()
    {try{navigator.vibrate(40)}
    catch(bi){}}
    function uv()
    {try{navigator.vibrate(100)}
    catch(biu){}}
    
    
    //define valid grades and their values
    var gr = new Array(11); 
    var cr = new Array(11);
    var ingr = new Array(12);
    var incr = new Array(12);
    
    // define valid grades and their values
    var grcount = 12; 
    gr[0] = "O";
    cr[0] = 10;
    gr[1] = "A+"; 
    cr[1] = 9; 
    gr[2] = "A";
    cr[2] = 8;
    gr[3] = "B+";
    cr[3] = 7;
    gr[4] = "B";
    cr[4] = 6;
    gr[5] = "C";
    cr[5] = 5;
    gr[6] = "D";
    cr[6] = 4;
    gr[7] = "E";
    cr[7] = 3;
    gr[8] = "P";
    cr[8] = 2;
    gr[9] = "F";
    cr[9] = 0;
    gr[10] = "DT";
    cr[10] = 0;
    gr[11] = "AB";
    cr[11] = 0;
    // retrieve user input
    ingr[0] = document.GPACalcForm.GR1.value;
    ingr[1] = document.GPACalcForm.GR2.value;
    ingr[2] = document.GPACalcForm.GR3.value;
    ingr[3] = document.GPACalcForm.GR4.value;
    ingr[4] = document.GPACalcForm.GR5.value;
    
    ingr[5] = document.GPACalcForm.GR6.value;
    ingr[6] = document.GPACalcForm.GR7.value;
    ingr[7] = document.GPACalcForm.GR8.value;
    ingr[8] = document.GPACalcForm.GR9.value;
    
    
    incr[0] = 4; // LANGUAGE AND COMPILERS
    incr[1] = 4; // PARALLEL AND DISTRIBUTED COMPUTING
    incr[2] = 3; // ELECTIVE - 1 
    incr[3] = 3; // ELECTIVE - 2
    incr[4] = 4; // MACHINE LEARNING   
    incr[5] = 2; // SPECIALIZATION SKILLING
    incr[6] = 2; // Term paper
    incr[7] = 2; // CCS    
    incr[8] = 2; // SKILLING FOR ENGINEERS 2     
    
    
    
    
    var allgr =0;
    var allcr = 0;
    var gpa = 0;
    for (var x = 0; x < 9; x++)
            {
            if (ingr[x] == "") break;
    
            var validgrcheck = 0;
            for (var xx = 0; xx < grcount; xx++)
                    {
                    if (ingr[x] == gr[xx])
                            {
                            allgr = allgr + (parseInt(incr[x],10) * cr[xx]);
                            allcr = (allcr + parseInt(incr[x],10) );
                            validgrcheck = 1;
                            break;
                            }
                    }
            if (validgrcheck == 0)
                    {
                       if(x == 0)
                        {
                    alert("Error- Could not recognize the grade entered for LANGUAGE AND COMPILERS. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
                        }
     if(x == 1)
                        {
                    alert("Error- Could not recognize the grade entered for  PARALLEL AND DISTRIBUTED COMPUTING. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
    }
     if(x == 2)
                        {
                    alert("Error- Could not recognize the grade entered for ELECTIVE -1. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
    } 
     
     if(x == 3)
                        {
                    alert("Error- Could not recognize the grade entered for ELECTIVE -2. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
    }
     if(x == 4)
                        {
                    alert("Error- Could not recognize the grade entered for MACHINE LEARNING. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
    }
     if(x == 5)
                        {
                    alert("Error- Could not recognize the grade entered for SPECIALIZATION SKILLING. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
    }
    
     if(x == 6)
                        {
                    alert("Error- Could not recognize the grade entered for Term Paper. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
    }
    
    if(x == 7)
                        {
                    alert("Error- Could not recognize the grade entered for CCS. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
    }

        if(x == 8)
                        {
                    alert("Error- Could not recognize the grade entered for SKILLING FOR ENGINEERS 2. Please use standard college grades in the form of O X A B C D F DT AB.");
                    return 0;
    }
     
                  } 
           }
     
    
    // this if-check prevents a divide by zero error
    if (allcr == 0)
            {
            alert("Error- You did not enter any credit values! GPA = N/A");
            return 0;
            }
    
    gpa = allgr / allcr;
    
    alert("GPA =  " + eval(gpa),10);
    window.location.reload();
    
    return 0;
    }
    
    
        
    </script>
    
    
    
    <div color="red">
     NOTE:<br />As This Our SGPA Version 1.0 We are Providing a sample SGPA calculator... <br />In our Future Versions this is going to be launched in various Features.. There may be 0.01 to 0.2 varation to the actual sgpa</div>
    
        
     
     
     
     
    
    </div>
    
