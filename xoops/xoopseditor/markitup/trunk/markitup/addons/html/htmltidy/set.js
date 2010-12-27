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
        {name:'Html Tidy Repair', className:'htmlTidyRepair', replaceWith:function(markItUp) { return miu.tidyRepair(markItUp) } },
        {name:'Html Tidy Report', className:'htmlTidyReport', beforeInsert:function(markItUp) { return miu.tidyReport(markItUp) } }
    ]
}
    
// mIu nameSpace to avoid conflict.
miu = {
    tidyRepair: function(markItUp) {
        var tidy;
        if (markItUp.selection !== "") {
            $.ajax({
                async:   false,
                type:    "POST",
                url:     markItUp.root+"utils/htmltidy/repair.php",
                data:    "selection="+encodeURIComponent(markItUp.selection),
                success:function(content) {
                    tidy = content;    
                }
            });
        } else {
            $.ajax({
                async:   true,
                type:    "POST",
                url:     markItUp.root+"utils/htmltidy/repair.php",
                data:    "data="+encodeURIComponent(markItUp.textarea.value),
                success:function(content) {
                    tidy = content;    
                    markItUp.textarea.value = tidy;
                }
            });
        }    
        return tidy;
    },
    
    tidyReport: function(markItUp) {
        $.ajax({
            async:    false,
            type:     "POST",
            url:      markItUp.root+"utils/htmltidy/report.php",
            data:     "data="+encodeURIComponent(markItUp.textarea.value),
            success:function(content) {
                win = window.open("", "htmlTidyReport","width=600, height=400, resizable=yes, scrollbars=yes");
                win.document.open();
                win.document.write(content);
                win.document.close();
                win.focus();
            }
        });
    }
}
