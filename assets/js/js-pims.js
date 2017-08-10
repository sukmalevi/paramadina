

$(document).ready(function () {

});

function getClientHeight(){
	var theHeight;

	if (window.innerHeight) {
		theHeight=window.innerHeight;
	}
	else if (document.documentElement && document.documentElement.clientHeight) {
		theHeight=document.documentElement.clientHeight;
	}
	else if (document.body) {
		theHeight=document.body.clientHeight;
	}
	
	return theHeight;
}

function openWindowWithPost(url,params)
{
    var newWindow = window.open(url, 'winpost'); 
    if (!newWindow) return false;
    var html = "";
    html += "<html><head></head><body><form  id='formid' method='post' action='" + url + "'>";

    $.each(params, function(key, value) { 
            
                if (value instanceof Array || value instanceof Object) {
                    $.each(value, function(key1, value1) { 
                        html += "<input type='hidden' name='" + key + "["+key1+"]' value='" + value1 + "'/>";
                    });
                }else{
                    html += "<input type='hidden' name='" + key + "' value='" + value + "'/>";
                }
        });
   
    html += "</form><script type='text/javascript'>document.getElementById(\"formid\").submit()</script></body></html>";
    newWindow.document.write(html);
    return newWindow;
}

function gets(idform){
    
	  var params = {};
        obj = document.getElementById(idform);
       for (i=0; i<obj.getElementsByTagName("input").length; i++) {
        if (obj.getElementsByTagName("input")[i].type == "text" || obj.getElementsByTagName("input")[i].type == "password" 
        	|| obj.getElementsByTagName("input")[i].type == "hidden" ) {
        	xname=obj.getElementsByTagName("input")[i].name;
         	params[xname] = obj.getElementsByTagName("input")[i].value;
        }
        if (obj.getElementsByTagName("input")[i].type == "checkbox") {
           if (obj.getElementsByTagName("input")[i].checked) {
              xname= obj.getElementsByTagName("input")[i].name;
               params[xname] = 1;//obj.getElementsByTagName("input")[i].value;
           } else {
              xname= obj.getElementsByTagName("input")[i].name;
              params[xname] = 0 ;
           }
        }
        if (obj.getElementsByTagName("input")[i].type == "radio") {
           if (obj.getElementsByTagName("input")[i].checked) {
              xname= obj.getElementsByTagName("input")[i].name;
              params[xname] = obj.getElementsByTagName("input")[i].value;
           }
     }  
     
     }
  
  for (i=0; i<obj.getElementsByTagName("select").length; i++) {
   //  if (obj.getElementsByTagName("select")[i].tagName == "select") {
        var sel = obj.getElementsByTagName("select")[i];
      		 xname= sel.name;
      		 params[xname]="";
      		 pemisah="";
      		 for(j = 0; j < sel.options.length; j++) {		 
      		      if(sel.options[j].selected) { 
      		      params[xname] += pemisah + sel.options[j].value ;
      		      pemisah=",";
      		     }
      		 } 
      		  
    // }

  } // END FOR
		for (i=0; i<obj.getElementsByTagName("textarea").length; i++) {
           xname=obj.getElementsByTagName("textarea")[i].name;
         	params[xname] = obj.getElementsByTagName("textarea")[i].value;
     }
	// Kirim ke server
//	$(xelm).html('Tunggu Sebentar.....').addClass('loading fillUp');
//	$.post(url, params, function(resp) {
//				$(xelm).html(resp).removeClass('loading');
	return params;

//	});			 	
}



function setDate(){
	var ln = arguments.length;
	for (var a=0;a<ln;a++){
	var Did = arguments[a];
	$(function() {
			$("#"+Did).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: 'yy-mm-dd'});
	});
	}
	}
	
function trim(str, chars) {
	return ltrim(rtrim(str, chars), chars);
}
 
function ltrim(str, chars) {
	chars = chars || "\\s";
	return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
}
 
function rtrim(str, chars) {
	chars = chars || "\\s";
	return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}


function pesan(txt,judul,icon){
     if (icon == undefined ) icon ='info';
    $.messager.alert(judul,txt,icon);
}

var divcontainer;
function mywindow(txt,judul,width,height){
    
    divcontainer = "mywindow"+Math.floor(Math.random()*99999);
    $("<div id='"+divcontainer+"'></div>").appendTo("body");
    divcontainer = "#"+divcontainer;
    $(divcontainer).css({'padding':'10px'});
    $(divcontainer).html(txt);

    if (judul === undefined ) judul ='DATA';
    if (width === undefined ) {
        var wdh = $(divcontainer).outerWidth(true);
        if ( wdh > 750 ) wdh = 750;
        if ( wdh < 250 ) wdh = 250;
        width = wdh ;
    }
    if (height === undefined ){
        var hgt = $(divcontainer).outerHeight(true);
        if ( hgt > 550 ) hgt = 550;
        if ( hgt < 150 ) hgt = 150;
        height = hgt ;
    }
    var leftCenter = window.innerWidth/2;
	var topCenter = window.innerHeight/2;
    var panelLeft = leftCenter - (width/2);
    var panelTop = topCenter - (height/2);
    $(divcontainer).css({'opacity':0});
   $(divcontainer).window({
                            title: judul,
                            autoOpen: false,
                            left:panelLeft,
                            top:panelTop,
                            width:width,
                            height:height,
                            modal: true,
                            shadow: false,
                            closed: true,
                            collapsible:true,
                            collapsed:false,
                            onBeforeClose:function(){
								
								$($(divcontainer).window('panel')).animate({
									"width": "-15px",
									"height":"-15px",
									"left":  leftCenter +"px",
									"top": topCenter +"px",
									"opacity":0
								  }, 777,function(){
									  $(divcontainer).html('');
									 
										$($(divcontainer).window('panel')).css({'left':panelLeft+'px','top':panelTop+'px','width':width+'px','height':height+'px'});
										
									   $(divcontainer).window("close",true);
									    $(divcontainer).window("destroy",true);
									  return true;
									  });
								
							},
							onBeforeOpen:function(){
									
								$($(divcontainer).window('panel')).css({'left':leftCenter+'px','top':topCenter+'px','width':'1px','height':'1px'});
							},
							onOpen:function(){
								 $($(divcontainer).window('panel')).animate({
									"width": (width+10)+"px",
									"height":(height+45)+"px",
									"left": panelLeft+"px",
									"top": panelTop+"px",
									'opacity':1
								  }, 777,function(){
									  $(divcontainer).animate({'width':(width-13)+'px','height':(height)+'px','opacity':1}
									  ,777
									  ,function(){
										   //$(divcontainer).window('resize');
										  });
									  });
							}
							
                            });
  $(divcontainer).window('open');
   $(divcontainer).window('open');
}

function mywindow_close(){
	$(divcontainer).window('close');
}


function convert_satuan(value,from,to){
if(from==to){return value;}
var hasil = "not support";
 switch(from){
    case "in":
        switch(to){
        case "m":hasil =  value * 0.0254;break;
        case "mm":hasil = value * 25.4;break;
        case "ft":hasil = value / 12;break;
        }
    break;
    case "m":
        switch(to){
        case "in":hasil = value * 39.36996;break;
        case "ft":hasil = value * 3.28083;break;
        case "mm":hasil = value * 1000;break;
        }
    break;
    case "mm":
        switch(to){
        case "in":hasil = value * 0.03936996;break;
        case "ft":hasil = value * 0.00328083;break;
        case "m":hasil = value * 0.001;break;
        }
    break;
    case "ft":
        switch(to){
        case "in":hasil = value * 12;break;
        case "mm":hasil = value * 304.8;break;
        case "m":hasil = value * 0.3048;break;
        }
    break;
    
    
    //Pressure
    case "MPa":
        switch(to){
        case "psi":hasil = value * 6894.757;break;
        case "psig":hasil = (value * 6894.757) - 14.7;break;
        case "Bar":hasil = value * 10;break;
        }
    break;
    case "psi":
        switch(to){
        case "psig":hasil = value - 14.7;break;
        case "Bar":hasil = value * 0.06894757;break;
        case "MPa":hasil = value * 0.006894757;break;
        }
    break;
        case "psig":
        switch(to){
        case "psi":hasil = value + 14.7;break;
        case "Bar":hasil = (value + 14.7 ) * 0.06894757;break;
        case "MPa":hasil = (value + 14.7 ) * 0.006894757;break;
        }
    break;
    case "Bar":
        switch(to){
        case "psi":hasil = value * 14.50377;break;
        case "psig":hasil = (value * 14.50377) - 14.7;break;
        case "MPa":hasil = value * 0.1;break;
        }
    break;
    
    //temperature
    case "C":
        switch(to){
        case "F":hasil = (value * 9/5) + 32;break;
        }
    break;
    case "F":
        switch(to){
        case "C":hasil = (value * 5/9) - 32;break;
        }
    break;
}

return hasil;
}



function PrintDiv(divID,toStep){
			$("input").each(function (index, domEle) {
		if($(domEle).hasClass('combo-text')){
		}else{
			if($(domEle).hasClass('combo-value')){
				$(domEle).attr('val',$(domEle).val());
			}else{
				$(domEle).attr('val',$(domEle).val());
			}
		}
	});
        
        
		var content=document.getElementById(divID).innerHTML
		var pwin=window.open('','Print','width=850,height=500,menubar=1,scrollbar=1,resizable=1');

	var head='<head>';
    head +='<link rel="stylesheet" type="text/css" href="http://localhost/pims-pgn/assets/css/sites.css">';
	head +='<link rel="stylesheet" type="text/css" href="http://localhost/pims-pgn/assets/css/easyui.css">';
	
	head +='<script type="text/javascript" src="http://localhost/pims-pgn/assets/js/jquery-1.4.4.min.js"></script>';
	head +='<script>$(document).ready(function () {$("input").each(function (index, domEle) {if($(domEle).hasClass("combo-text")){}else{';
	head +='if($(domEle).hasClass("combo-value")){$(domEle.parentNode.parentNode).html($(domEle).attr("val"));';
	head +='}else{if($(domEle).attr("type")!="hidden"){$(domEle.parentNode).prepend($(domEle).attr("val"));$(domEle).remove();}}}});$(".easyui-linkbutton").remove();';
	if(toStep!=undefined){
		head +='for(var i=1;i<='+toStep+';i++){$("#step"+i).css({"float":"none","display":"block"});}';
	}
    head +='});</script></head>';

          pwin.document.open();
          pwin.document.write('<html>'+head+'<body class="easyui-layout layout">'+content+'</body></html>');
          pwin.document.close();
}



function createColumnMenu(gridID){
			var tmenu = $('<div id="cm_'+gridID+'" style="width:250px;max-height:300px;overflow: auto;"></div>').appendTo('body');
			var fields = $('#'+gridID).datagrid('getColumnFields');
			for(var i=0; i<fields.length; i++){
				var field = $('#'+gridID).datagrid('getColumnOption',fields[i]);
				
				if(field.hidden==true){
					$('<div field="'+field.field+'" iconCls="icon-empty"/>').html(field.title).appendTo(tmenu);
				}else{
					$('<div field="'+field.field+'" iconCls="icon-ok"/>').html(field.title).appendTo(tmenu);
				}
			}
			tmenu.menu({
				onClick: function(item){
					var fieldName = $(item.target).attr('field');
					if (item.iconCls=='icon-ok'){
						$('#'+gridID).datagrid('hideColumn', fieldName);
						tmenu.menu('setIcon', {
							target: item.target,
							iconCls: 'icon-empty'
						});
					} else {
						$('#'+gridID).datagrid('showColumn',fieldName);
						tmenu.menu('setIcon', {
							target: item.target,
							iconCls: 'icon-ok'
						});
					}
				}
			});
		}


		
function submitform (frm,url,divform){
  
  if (url == undefined ){
       url = jQuery('#'+frm).attr("url");
   }
	

    jQuery('#'+frm).form('submit',{
            url:url,
            onSubmit: function(){
                  return $(this).form('validate');
            },
            success:function(data){
                if (data == "1"){
                    pesan('Data Sudah Disimpan ','Sukses');
                }else{
                     pesan(data,'result');
                }
                
                if(divform==undefined){
                    $('#'+divform).window('close');
                }
                   
            },
            error:function(data){
                    pesan('Data GAGAL Disimpan <hr>'+data,'ERROR'); 
            }
    });
}



function ysubmitform(frm,func){
	 $.blockUI({ overlayCSS: { backgroundColor: '#E0ECFF' } }); 
    var url = jQuery('#'+frm).attr("url");
    jQuery('#'+frm).form('submit',{
            url:url,
            onSubmit: function(){
                  return $(this).form('validate');
            },
            success:function(data){
				$.unblockUI();
                if (func == undefined ){
                     if (data == "1"){
                        pesan('Data Sudah Disimpan ','Sukses');
                    }else{
                         pesan(data,'Result');
                    }
                }else{
                    func(data);
                }
            },
            error:function(data){
				$.unblockUI();
                 if (func == undefined ){
                     pesan(data,'Error');
                }else{
                    func(data);
                }
            }
    });
}

