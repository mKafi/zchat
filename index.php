<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Zendesk Chat web SDK</title>

        <!-- CSS Start -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- CSS End -->        
        <!-- HTML5 Support for old ie browsers -->
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <h2>Zendesk Chat Web SDK</h2>
        
        <div id="chat-wrapper">
            <div id="top-bar">
                <label>Chat with Web SDK</label>
                <ul>
                    <li><span id="icon-settings" class="control-icon" title="Settings"></span></li>
                    <li><span id="icon-minimize" class="control-icon" title="Minimize"></span></li>
                    <li><span id="icon-close" class="control-icon" title="Close"></span></li>                    
                </ul>
            </div>
            
            <div id="header"></div>
            
            <div id="message-body">                
                <div id="message-cont">
                    <div class="agent-msg">
                        <span class="agent-avatar"></span>
                        <span>Hello, Please let me know, what are you thinking? </span>
                    </div>
                </div>
                
                <div id="msg-input-cont">
                    <textarea id="message-input" placeholder="Enter your message..."></textarea>
                    <div id="msg-control">                        
                        <span>
                            <button id="btn-send" class="btn-msg-control">Send</button>
                            <button id="btn-attachment" class="btn-msg-control" type="file">Attachment</button>
                            
                        </span>
                        
                    </div>
                </div>
            </div>
            <div id="footer">
                
            </div>
        </div>
        
        <!-- Javascript Start -->

        <!-- Check if jQuery already exists --> 
        <script type="text/javascript">
            (function() {
                if(window.jQuery === undefined){
                    document.write('<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"><\/script>');
                }
                else{
                    jQuery = window.jQuery;
                }
            })();
        </script>
         
            
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        
        <!-- exposed via window.zChat -->
        <script src="js/web_sdk.js" type="text/javascript"></script>
        
        <!-- Javascript chat -->
        <script src="js/zchat.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                // Stuff to do as soon as the DOM is ready;
            });
        </script>
        <!-- Javascript End -->

    </body>
</html>