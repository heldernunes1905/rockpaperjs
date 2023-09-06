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

        <!-- container saying its the robots side -->
        <div class="container">
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-3">
                   Robot Side of the game
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

        <!-- container that shows the possible choices for the bot and rotate to make sure they face the right way -->
        <div class="container" id="botsidehand">
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-2">
                    <div id="botRock">
                        <img src="rock.png" alt="Rock" width="100%" height="100%" style="transform: rotate(90deg);">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div id="botPaper">
                        <img src="paper.png" alt="Paper" width="100%" height="100%" style="transform: rotate(180deg);">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div id="botScissors">
                        <img src="scissor.png" alt="Scissor" width="100%" height="100%" style="transform: rotate(90deg);">
                    </div>
                </div>

                <div class="col-sm-3">
                </div>
            </div>
        </div>

        <!-- container with bots choice-->
        <div class="container" id="botsidehand" >
            <div class="row">
                <div class="col-sm-5"></div>

                <div class="col-sm-2">
                    <div id="botchosen" style="visibility:hidden">
                        <img id="botchoseimg" src="rock.png" alt="Bot chosen" width="100%" height="100%" style="transform: rotate(180deg);">
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

        <!-- Container that will show the result of the game-->
        <div class="container" id="winnertextbox">
            <div class="row">
                <div class="col-sm-5"></div>

                <div class="col-sm-2">
                    <div id="winnertextdiv" style="text-align: center">
                        <span id="winnertext"></span>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>


        <!-- Container with the users choice-->        
        <div class="container" id="usersidehand">
            <div class="row">
                <div class="col-sm-5"></div>

                <div class="col-sm-2">
                    <div id="userchosen" style="visibility:hidden">
                        <img id="userchoseimg" src="rock.png" alt="User chosen" width="100%" height="100%">
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

        <!-- Container with possible choices for user that can be clicked-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                </div>

                <div class="col-sm-2">
                    <div id="Rock">
                        <img src="rock.png" alt="Rock" width="100%" height="100%" style="transform: rotate(260deg);">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div id="Paper">
                        <img src="paper.png" alt="paper" width="100%" height="100%" >
                    </div>
                </div>
                <div class="col-sm-2">
                    <div id="Scissors">
                        <img src="scissor.png" alt="Scissors" width="100%" height="100%" style="transform: rotate(280deg);">
                    </div>
                </div>

                <div class="col-sm-3">
                </div>
            </div>
        </div>
        
        <!-- Container saying that this is the users side -->
        <div class="container">
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-3">
                   Player Side of the game
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

        <!-- container with open that will open the modal window with scoreboards-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="text-align: center">
                <input class="btn btn-primary" type="submit" value="Scoreboard" style="text-align: center" data-toggle="modal" data-target="#exampleModal">
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Scoreboard</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <p id="tienumber">N/A</p>
                   <p id="winnumber">N/A</p>
                   <p id="losenumber">N/A</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </body>
    <script>

        var tie = 0;
        var win = 0;
        var lose = 0;

        function randomint(){ //assign the random value for the bot
            return Math.floor(Math.random() * 3) + 1;
        }

        function playgame(robotnum,usernum){
            showbotchouse(robotnum);
            if(usernum == robotnum){//both are same value
                $("#winnertext").text("Both Players Tie");
                tie ++;
            }else if(usernum == 3 || robotnum == 3){ //if one is scissors then they compare individually
                if(usernum == 3 && robotnum == 1 || usernum == 2 && robotnum == 3){
                    $("#winnertext").text("Sadly you loose");
                    lose++;
                }else if(usernum == 3 && robotnum == 2 || usernum == 1 && robotnum == 3){
                    $("#winnertext").text("Congrats on winning");
                    win++;
                }
            }else if(usernum < robotnum){//user has lower so they lose
                $("#winnertext").text("Sadly you loose");
                lose++;
            }else if(usernum > robotnum){//bot is lower so user wins
                $("#winnertext").text("Congrats on winning");
                win++;
            }

            //update the scoreboard text
            $("#tienumber").text("Number of ties: " + tie);
            $("#winnumber").text("Number of times user won: " + win);
            $("#losenumber").text("Number of times user lost: " + lose);            
        }

        function showbotchouse(botval){//show what bot chose by making image variable and rotating it so its correct direction

            if(botval == 1){
                $("#botchose").text("Bot chose Rock");
                $("#botchosen").css("visibility", "");
                document.getElementById("botchoseimg").src="rock.png";
                $("#botchoseimg").css("transform", "rotate(90deg)");

            }else if(botval == 2){
                $("#botchose").text("Bot chose Paper");
                $("#botchosen").css("visibility", "");
                document.getElementById("botchoseimg").src="paper.png";
                $("#botchoseimg").css("transform", "rotate(180deg)");

            }else if(botval == 3){
                $("#botchose").text("Bot chose Scissors");
                $("#botchosen").css("visibility", "");
                document.getElementById("botchoseimg").src="scissor.png";
                $("#botchoseimg").css("transform", "rotate(90deg)");

            }
        }

        $( "#Rock" ).on( "click", function() { //if user chooses rock it will change the image to rock and rotate it to the correct position and select a random value for the bot hand
            const robotnum = randomint();
            const user = 1;
            $("#userchosen").css("visibility", "");
            document.getElementById("userchoseimg").src="rock.png";
            $("#userchoseimg").css("transform", "rotate(260deg)");
            playgame(robotnum,user);
        } );

        $( "#Paper" ).on( "click", function() { //if user chooses paper it will change the image to paper and rotate it to the correct position and select a random value for the bot hand
            const robotnum = randomint();
            const user = 2;
            $("#userchosen").css("visibility", "");
            document.getElementById("userchoseimg").src="paper.png";
            $("#userchoseimg").css("transform", "rotate(0deg)");
            playgame(robotnum,user);
        } );

        $( "#Scissors" ).on( "click", function() { //if user chooses scissor it will change the image to scissor and rotate it to the correct position and select a random value for the bot hand
            const robotnum = randomint();
            const user = 3;
            $("#userchosen").css("visibility", "");
            document.getElementById("userchoseimg").src="scissor.png";
            $("#userchoseimg").css("transform", "rotate(280deg)");
            playgame(robotnum,user);
        } );

        
    </script>
</html>