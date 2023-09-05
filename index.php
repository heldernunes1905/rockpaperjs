<!Doctype html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <style>
        
    </style>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
            <div id="Rock">
                <img src="rock.png" alt="Girl in a jacket" width="100%" height="100%">
            </div>
            </div>
            <div class="col-sm">
                <div id="Paper">
                    <img src="paper.png" alt="Girl in a jacket" width="100%" height="100%">
                </div>
            </div>
            <div class="col-sm">
                <div id="Scissors">
                    <img src="scissor.png" alt="Girl in a jacket" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
        
        

        <br><br>
        <div id="userchose">
            <spand id="uc"></span>
        </div>

        <div id="botchose">
            <spand id="bc"></span>
        </div>

        <br><br>
        <div id="result">
            <spand id="result"></span>
        </div>
    </body>
    <script>
        
        function randomint(){ //assign the random value for the bot
            return Math.floor(Math.random() * 3) + 1;
        }

        function playgame(robotnum,usernum){
            showbotchouse(robotnum);
            if(usernum == robotnum){//both are same value
                $("#result").text("Tie");
            
            }else if(usernum == 3 || robotnum == 3){ //if one is scissors then they compare individually
                if(usernum == 3 && robotnum == 1 || usernum == 2 && robotnum == 3){
                    $("#result").text("Sadly you loose");
                }else if(usernum == 3 && robotnum == 2 || usernum == 1 && robotnum == 3){
                    $("#result").text("Congrats on winning");

                }
            }else if(usernum < robotnum){//user has lower so they lose
                $("#result").text("Sadly you loose");

            }else if(usernum > robotnum){//bot is lower so user wins
                $("#result").text("Congrats on winning");
            }
            
        }

        function showbotchouse(botval){
            if(botval == 1){
                $("#botchose").text("Bot chose Rock");
            }else if(botval == 2){
                $("#botchose").text("Bot chose Paper");
            }else if(botval == 3){
                $("#botchose").text("Bot chose Scissors");
            }
        }
        $( "#Rock" ).on( "click", function() {
            const robotnum = randomint();
            const user = 1;
            $("#userchose").text("You chose Rock");

            playgame(robotnum,user);
        } );

        $( "#Paper" ).on( "click", function() {
            const robotnum = randomint();
            const user = 2;
            $("#userchose").text("You chose Paper");
            playgame(robotnum,user);
        } );

        $( "#Scissors" ).on( "click", function() {
            const robotnum = randomint();
            const user = 3;
            $("#userchose").text("You chose Scissors");
            playgame(robotnum,user);
        } );

        
    </script>
</html>