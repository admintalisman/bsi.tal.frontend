
Runner.buttonEvents["btn_approve"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='btn_approve';if(!pageObj.buttonEventBefore['btn_approve']){pageObj.buttonEventBefore['btn_approve']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['btn_approve']){pageObj.buttonEventAfter['btn_approve']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;location.reload("http://localhost:8090/tempbsicis_ol_list.php");}}
$('a[id="btn_approve"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="btn_approve"+"_"+Runner.genId();var button_btn_approve=new Runner.form.Button({id:this.id,btnName:"btn_approve"});button_btn_approve.init({args:[pageObj,proxy,pageid]});});};