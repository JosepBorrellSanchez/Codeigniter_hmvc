<!DOCTYPE html>
<html>
	<head>
		<title>LLista</title>
		<?php include("capçalera.php"); ?>
<script>
$(function(){
        
        $("[rel='tooltip']").tooltipster();        
        
        $('#25').dataTable( {
                "sDom": 'T<"clear">lfrtip',
                "oTableTools": {
					"sSwfPath": "/assets/media/swf/copy_csv_xls_pdf.swf",
                        "aButtons": [
                                {
                                        "sExtends": "copy",
                                        "sButtonText": "<?php echo "hola";?>"
                                },
                                {
                                        "sExtends": "csv",
                                        "sButtonText": "CSV"
                                },
                                {
                                        "sExtends": "xls",
                                        "sButtonText": "XLS"
                                },
                                {
                                        "sExtends": "pdf",
                                        "sPdfOrientation": "landscape",
                                        "sPdfMessage": "<?php echo "lessons";?>",
                                        "sTitle": "TODO",
                                        "sButtonText": "PDF"
                                },
                                {
                                        "sExtends": "print",
                                        "sButtonText": "<?php echo "Print";?>"
                                },
                        ]

        },
        "aoColumns": [
                        null,
                        { "sType": "numeric" },
                        null,
                        null,
                        null,
                    <?php if ($exists_assignatures_table){ echo "null,"; }?>
                        null,
                        null,
                        null,
                ],
"iDisplayLength": 50,
"aaSorting": [[ 1, "asc" ]],
                "oLanguage": {
                        "sProcessing": "Processant...",
                        "sLengthMenu": "Mostra _MENU_ registres",
                        "sZeroRecords": "No s'han trobat registres.",
                        "sInfo": "Mostrant de _START_ a _END_ de _TOTAL_ registres",
                        "sInfoEmpty": "Mostrant de 0 a 0 de 0 registres",
                        "sInfoFiltered": "(filtrat de _MAX_ total registres)",
                        "sInfoPostFix": "",
                        "sSearch": "Filtrar:",
                        "sUrl": "",
                        "oPaginate": {
                                "sFirst": "Primer",
                                "sPrevious": "Anterior",
                                "sNext": "Següent",
                                "sLast": "Últim"
                        }
         }
                
        });
});
</script>

			<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

	 <script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#25').dataTable();
		} );
	</script>
	

	</head>
	<body>
		<p>Aquesta es la taula d'usuaris</p>
		<a href="crear"><button class="btn btn-success" type="button">Crear usuari</button></a>
		<table class="table-striped" id="25" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
		<thead>
		<tr>
			<th><b>ID</b></th>
			<th><b>Nom</b></th>
			<!--<th><b>DNI</b></th>
			<th><b>Direccio</b></th>
			<th><b>Edad</b></th>
			<th><b>Sexe</b></th>-->
			<th><b>Accions</b></th>
		</tr>
		</thead>
		<tbody>
 <?php foreach($query->result() as $index) {?> 
			<tr>
			<td> <?php echo $index -> actor_id; ?></td>
			<td> <?php echo $index -> fullname; ?></td>
			
			<td>
				<a href='modificar/<?php echo $index->actor_id;?>'><button class="btn btn-primary" type="button">Modificar</button></a>
				<a href='eliminar/<?php echo $index->actor_id; ?>'><button class="btn btn-danger" type="button">Eliminar</button></a></td>
			<?php echo "</tr>"; } ?> 
			
		</tbody>
</table>
</body>
</html>
<?php  ?>
