
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color:#fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id = "chat-timestamp"></h5>
                            <p id = "botStraterMessage" class=" botText"><span>Loading...</span></p>
                        </div>
                        
                        <!-- User Input Box -->
                        <div class="chat-bar-input-block">
                            <div id="userinput">
                                <input type="text" id="textInput" class="input-box" name="msg" placeholder="Tap 'Enter' to send a message ">
                                <p ></p>
                            </div>

                            <div class="chat-bot-icons">
                                <i id="chat-icon" style="color:crimson;" class="fa fa-fw fa-heart" onclick=" heartButton()"></i>
                                <i id="chat-icon" style="color:#333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/script/chat.js"></script>
<script src="static/script/responses.js"></script>

</html>