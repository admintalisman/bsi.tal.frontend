
Runner.pages.PageSettings.addPageEvent('TEMBSICITASAL_view',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){this.on('afterInlineAdd',function(fieldsData){location.reload();})
this.on('afterInlineEdit',function(fieldsData){location.reload();})});