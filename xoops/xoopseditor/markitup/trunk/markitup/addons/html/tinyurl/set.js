// ----------------------------------------------------------------------------
// markItUp!
// ----------------------------------------------------------------------------
// Copyright (C) 2008 Jay Salvat
// http://markitup.jaysalvat.com/
// ----------------------------------------------------------------------------
// Html tags
// http://en.wikipedia.org/wiki/html
// ----------------------------------------------------------------------------
// Basic set. Feel free to add more tags
// ----------------------------------------------------------------------------
mySettings = {    
    markupSet:  [
        {name:'TinyUrl', className:'tinyUrl', openWith:function(markItUp) { return miu.tinyUrl(markItUp) }, closeWith:'</a>', placeHolder:'text to link with a long url...' }
    ]
}
    
	
// mIu nameSpace to avoid conflict.
miu = {      
   tinyUrl: function (markItUp) {
        var url, tinyUrl;
        url = prompt("Url:", "http://");
        if (url) {
            $.ajaxSetup( { async:false } );
            $.post(markItUp.root+"utils/tinyurl/get.php", "url="+url, function(content) {
                tinyUrl = content;    
                }
            );
        } else {
            tinyUrl = "";
        }
        return '<a href="'+tinyUrl+'"(!( title="[![Title]!]")!)>';
    }
}
