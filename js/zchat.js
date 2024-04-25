jQuery(document).ready(function($){
    /* HELPER FUNCTIONS A */
    /* getting account status */
    function getAccountStatus(){
        return zChat.getAccountStatus();
    }
    
    /* setting visitorys path */
    function sendVisitorsPath(options){
        zChat.sendVisitorPath(options, function(){
            
        })
    }
    
    function sendMessage(msg){
        $("#message-cont").append('<div class="visitor-msg"><span class="visitor-avatar"></span><span>'+msg+'</span></div>')
        $("#message-input").val('')
        $("#message-cont").animate({scrollTop:$(document).height()},1)
        
        zChat.addTag('testing_msg', function(err){
            console.log('Tagging error')
            console.log(err)
        })
        zChat.sendChatMsg(msg, function(err) { 
            console.log(err)
        })
        
        /* checking connection */
        zChat.on('connection_update', function(status) {
            console.log(status)
            if (status === 'connected') {
                console.log('connected')
                console.log('Getting account status')
                var account_status = zChat.getAccountStatus()
                console.log(account_status)

                /* getting all departments */
                var departments = zChat.getAllDepartments()            
                console.log(departments)  // NOT SHOWING ANY DEPARTMENTS
            }
            else{ 
                console.log('Not connected') 
            }
        })
    }
    /* HELPER FUNCTIONS Z */
    
    
    var accountKeys = {'dev':'3N7p5ZgsS4CJZ4hUWAy73pgdhBUFDGfk','stage':'','prod':''}    
    /* Init the chat */
    zChat.init({
        account_key: accountKeys.dev
    })
    
    var visitor_info = zChat.getVisitorInfo()
    console.log(visitor_info)
    
    /* sending message from textarea */
    if($("#message-input").length > 0){
        $("#message-input").keydown(function(e){            
            if(e.keyCode == 13){
                e.preventDefault()
                var msg = $("#message-input").val().trim()                
                if(msg !== ''){
                    sendMessage(msg)                    
                }
            }
        })
    }
    
    /* quick reply */
    if($(".quick-reply").length > 0){
        $(".quick-reply").click(function(e){
            console.log(e)
        })
    }
    
    /* click on send button */
    if($("#btn-send").length > 0){
        $("#btn-send").click(function(){
            $("#message-input").click()
        })
    }
    /* closing the chat */
    if($("#icon-close").length > 0){
        $("#icon-close").click(function(){
            zChat.endChat()
        })
    }
    
       
})