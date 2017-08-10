function getClientHeight(){
	var theHeight;
	if (window.innerHeight)
		theHeight=window.innerHeight;
	else if (document.documentElement && document.documentElement.clientHeight) 
		theHeight=document.documentElement.clientHeight;
	else if (document.body) 
		theHeight=document.body.clientHeight;
	
	return theHeight;
}
function getClientWidth(){
	var theWidth;
	if (window.innerWidth) 
		theWidth=window.innerWidth;
	else if (document.documentElement && document.documentElement.clientWidth) 
		theWidth=document.documentElement.clientWidth;
	else if (document.body) 
		theWidth=document.body.clientWidth;

	return theWidth;
}

function fillCmb(url, SelID, value, value2, value3, value4){
	if (value == undefined) value = "";
	if (value2 == undefined) value2 = "";
	if (value3 == undefined) value3 = "";
	if (value4 == undefined) value4 = "";
	
	$('#'+SelID).empty();
	$.post(url, {"v": value, "v2": value2, "v3": value3, "v4": value4},function(data){
		$('#'+SelID).append(data);
	});
}


function loadUrl(urls,func){	
    $("#tMain").html("").addClass("loading");
	
	$.get(urls,function (html){
	    $("#tMain").html(html).removeClass("loading");
    }).done(function(){
       // func;
    });
	//*/
}

function genGrid(modnya, lebarnya, tingginya, p1, p2){
	if(lebarnya == undefined){
		lebarnya = getClientWidth-230;
	}
	if(tingginya == undefined){
		tingginya = getClientHeight-350
	}

	var kolom ={};
	var frozen ={};
	var judulnya;
	var param={};
	var urlnya;
	var urlglobal="";
	var fitnya;
	var pagesizeboy = 10;
	
	switch(modnya){
		case "cmb":
			judulnya = "";
			fitnya = true;
			pagesizeboy = 50;
			kolom[modnya] = [
				{field:'foto', title:'<b>DATA PESERTA</b>', halign:'center', width:150,align:'center',sortable:true,
					formatter: function(value,row,index){
							return  '<div class="tiles">'+
									'	<div class="tile image">'+
									'		<a  style="color:black" class="accordion-toggle" href="'+hosturi+'smb/profil/'+row.no_smb+'">'+
									'		<div class="tile-body">'+				            
									'			<img class="img-responsive" alt="" src="'+hosturi+'assets/upload/foto/'+value+'">'+
									'		</div>'+
									'		<div class="tile-object" style="background-color:#006895">'+
									'			<div class="name">'+row.no_smb+'</div>'+
									'		</div>'+
									'		</a>'+
									'	</div>'+
									'</div>';
					}
				},
				{field:'no_smb',title:'<b>NOMOR REG</b>',width:150, halign:'left',align:'left', hidden:true },
				{field:'nama_cm',title:'<b>NAMA</b>', halign:'left',width:275, align:'left',resizable:true, sortable:true, 
					formatter: function(val, row, idx){
							return '<a href="' + hosturi + 'smb/formulir/' + row.no_smb + '" ><h4>' + val + '</h4></a>'+
									'<a  class="btn btn-sm red"  href="#" onclick="deleteMhs(\'del\',\''+ row.no_smb +'\')">DELETE CMB</a>';
					}},
				{field:'progdi_inisial',title:'<b>PRODI</b>', halign:'left',width:75, align:'left',sortable:true, 
					formatter: function(val, row, idx){ return '<h4>' + val + '</h4>';}},
				{field:'n_jalur',title:'<b>JALUR</b>', halign:'left',width:150, align:'left',sortable:true, 
					formatter: function(val, row, idx){ return '<h4>' + val + '</h4>';}},
				{field:'tanggal',title:'<b>TANGGAL DAFTAR</b>', halign:'left',width:150, align:'left',sortable:true, 
					formatter: function(val, row, idx){ return '<h4>' + val + '</h4>';}},
				{field:'status',title:'<b>STATUS</b>', halign:'left',width:400, align:'left',
					formatter: function(value,row,index){
						var status = new Array();
						status = value.split('-');
						
						var stsTahap = new Array();
						var icon = new Array();
						
						for(var i = 0; i < status.length; i++){
							if (status[i] == 1){
								stsTahap[i] = "info";
								icon[i] = '<i class="icon-ok-sign"></i>';
							}else{
								stsTahap[i] = 'default';
								icon[i] = '<i class="icon-remove-sign"></i>';
							}
							
						}
						
						var step = [	"Mendaftar ", "Melengkapi Form Pendaftaran ", "Jadwal Ujian ", 
										"Menghadiri Ujian ", "Menerima Hasil Ujian ", "Membayar Biaya Daftar Ulang ", 
										"Mendapat NIM " 
									]
						html = "<br>";
						for (var i = 0; i < step.length; i++){
							html += '<p><span class="label label-' + stsTahap[i] +' "> ' + step[i] + icon[i] + '</span></p>';
						}
						return html;
					}						
				},
			];                
		break;
		case "cmbPrestasi":
			judulnya = "";
			fitnya = true;
			pagesizeboy = 50;
			kolom[modnya] = [
				{field:'foto', title:'<b>DATA PESERTA</b>', halign:'center', width:150,align:'center',sortable:true,
					formatter: function(value,row,index){
							return  '<div class="tiles">'+
									'	<div class="tile image">'+
									'		<a  style="color:black" class="accordion-toggle" href="'+hosturi+'smb/profil/'+row.no_smb+'">'+
									'		<div class="tile-body">'+				            
									'			<img class="img-responsive" alt="" src="'+hosturi+'assets/upload/foto/'+value+'">'+
									'		</div>'+
									'		<div class="tile-object" style="background-color:#006895">'+
									'			<div class="name">'+row.no_smb+'</div>'+
									'		</div>'+
									'		</a>'+
									'	</div>'+
									'</div>';
					}
				},
				{field:'no_smb',title:'<b>NOMOR REG</b>',width:150, halign:'left',align:'left', hidden:true },
				{field:'nama_cm',title:'<b>NAMA</b>', halign:'left',width:200, align:'left',resizable:true, sortable:true, 
					formatter: function(val, row, idx){
							return '<a href="' + hosturi + 'smb/formulir/' + row.no_smb + '" ><h4>' + val + '</h4></a>';
					}},
				{field:'progdi_inisial',title:'<b>PRODI</b>', halign:'left',width:150, align:'left',sortable:true, 
					formatter: function(val, row, idx){ return '<h4>' + val + '</h4>';}},
				{field:'n_jalur',title:'<b>JALUR</b>', halign:'left',width:150, align:'left',sortable:true, 
					formatter: function(val, row, idx){ return '<h4>' + val + '</h4>';}},
				{field:'tanggal',title:'<b>TANGGAL DAFTAR</b>', halign:'left',width:150, align:'left',sortable:true, 
					formatter: function(val, row, idx){ return '<h4>' + val + '</h4>';}},
				{field:'status',title:'<b>STATUS</b>', halign:'left',width:400, align:'left',
					formatter: function(value,row,index){
						var status = new Array();
						status = value.split('-');
						
						var stsTahap = new Array();
						var icon = new Array();
						
						for(var i = 0; i < status.length; i++){
							if (status[i] == 1){
								stsTahap[i] = "info";
								icon[i] = '<i class="icon-ok-sign"></i>';
							}else{
								stsTahap[i] = 'default';
								icon[i] = '<i class="icon-remove-sign"></i>';
							}
							
						}
						
						var step = [	"Mendaftar ", "Melengkapi Form Pendaftaran ", "Jadwal Ujian ", 
										"Menghadiri Ujian ", "Menerima Hasil Ujian ", "Membayar Biaya Daftar Ulang ", 
										"Mendapat NIM " 
									]
						html = "<br>";
						for (var i = 0; i < step.length; i++){
							html += '<p><span class="label label-' + stsTahap[i] +' "> ' + step[i] + icon[i] + '</span></p>';
						}
						return html;
					}						
				},
			];                
		break;
	}
		
	$("#"+modnya).datagrid({
	    title:judulnya,
        height:tingginya,
        width:lebarnya,
        rownumbers:true,
        iconCls:'',
        fit:fitnya,
        striped:true,
        pagination:true,
        remoteSort: false,
        url: hostir+'smb/getdatagrid/'+modnya+'/'+p1+'/'+p2,
        nowrap: true,
        singleSelect:true,
        pageSize:pagesizeboy,
        pageList:[10,20,30,40,50,75,100,200],
        queryParams:param,
        columns:[
            kolom[modnya]
        ],
        toolbar: '#toolbar_'+modnya,
	});

	$('.pagination-page-list').css({'display':'inline'});
}

function doSearch(modul, $p2, $p2){
	$('#'+modul).datagrid('load',{
		nama_cm: $('#nama').val(),
		method: "search",
	});
}

function doSelect(modul, $p2, $p2){
	$('#'+modul).datagrid('load',{
		periode: $('#periode').val(),
		jalur: $('#jalur').val(),
		prodi: $('#prodi').val(),
		method: "select",
	});
	$html = '<a href="'+hostir+'smb/exportToExcel/calonSmb/'+$('#periode').val()+'/'+$('#prodi').val()+'/'+$('#jalur').val()+'" class="btn default  black" style="margin-bottom: 12px;"><i class="icon-download-alt"></i> Download Laporan</a>';
	$('#btnDownload').html($html);
}


function deleteMhs(method, p1){
    if (confirm("Apakah Anda Ingin Menghapus Calon Mahasiswa Ini?")) { 
        $.post(hostir + "smb/deleteMhs", {
            'id': p1,
            'method': method
        }, function(resp) {
        if (resp == 1){
            alert("Mahasiswa Berhasil Dihapus.");
            location.reload();
        }else{
            alert(resp);
        }
    });
    }else{
        return true;
    }
}

function tableCMB(){
	var table = $('#myDataTable').DataTable( {
        processing: true,
        serverSide: true,
        ajax: {
            "url": hosturi+"smb/calonTable",
            "type": "POST"
        },
        columns: [
			{data:"f.nomor","visible": false},
            { data: "$.foto",
				"render": function(data, type, row) {					
					return '<div class="tiles">'+
								'<div class="tile image">'+
									'<a  style="color:black" class="accordion-toggle" href="'+hosturi+'smb/profil/'+row.f.nomor+'">'+
									'<div class="tile-body">'+				            
										'<img class="img-responsive" alt="" src="'+hosturi+'assets/upload/foto/'+data+'">'+
									'</div>'+
							'		<div class="tile-object" style="background-color:#006895">'+
							'			<div class="name">'+row.f.nomor+'</div>'+
							'		</div>'+
							'		</a>'+
							'	</div>'+
							'</div>';
				} 
			},
            { data : "u.username", "render": function(data, type, row){ 
				return '<a href="' + hosturi + 'smb/formulir/' + row.f.nomor + '" /> <h4>' + data + '</h4> </a>'; }},
            { data : "p.singkatan", "render":function(data, type, row){ return '<h4>' + data + '</h4>';  }},
            { data: "j.nama", "render":function(data, type, row){ return '<h4>' + data + '</h4>';  }  },
            { data: "$.status", "render":function(data, type, row){ 	
				var status = new Array();
				status = data.split('-');
				
				var stsTahap = new Array();
				var icon = new Array();
				
				for(var i = 0; i < status.length; i++){
					if (status[i] == 1){
						stsTahap[i] = "info";
						icon[i] = '<i class="icon-ok-sign"></i>';
					}else{
						stsTahap[i] = 'danger';
						icon[i] = '<i class="icon-remove-sign"></i>';
					}
					
				}
				
				var step = [	"Mendaftar ", "Melengkapi Form Pendaftaran ", "Jadwal Ujian ", 
								"Menghadiri Ujian ", "Menerima Hasil Ujian ", "Membayar Biaya Daftar Ulang ", 
								"Mendapat NIM " 
							]
				html = "";
				for (var i = 0; i < step.length; i++){
					html += '<p><span class="label label-' + stsTahap[i] +' "> ' + step[i] + icon[i] + '</span></p>';
				}
				return html; 
				
				
				
			}
			}
        ]
    });
	
	table.columns( '.select-filter' ).every( function () {
		var that = this;
	 
		// Create the select list and search operation
		var select = $('<select />')
			.appendTo(
				this.header()
			)
			.on( 'change', function () {
				that
					.search( $(this).val() )
					.draw();
			} );
	 
		// Get the search data for the first column and add to the select list
		this
			.cache( 'search' )
			.sort()
			.unique()
			.each( function ( d ) {
				select.append( $('<option value="'+d+'">'+d+'</option>') );
			} );
	} );
}