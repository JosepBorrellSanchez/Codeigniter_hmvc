<script>
$(function(){
        
        $("[rel='tooltip']").tooltipster();        
        
        $('#lessons').dataTable( {
                "sDom": 'T<"clear">lfrtip',
                "aLengthMenu": [[10, 25, 50,100,200,500,1000,-1], [10, 25, 50,100,200,500,1000, "<?php echo lang("All");?>"]],
                "oTableTools": {
            "sSwfPath": "<?php echo base_url('assets/media/swf/copy_csv_xls_pdf.swf');?>",
                        "aButtons": [
                                {
                                        "sExtends": "copy",
                                        "sButtonText": "<?php echo lang("Copy");?>"
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
                                        "sPdfMessage": "<?php echo lang("lessons");?>",
                                        "sTitle": "TODO",
                                        "sButtonText": "PDF"
                                },
                                {
                                        "sExtends": "print",
                                        "sButtonText": "<?php echo lang("Print");?>"
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
"sSwfPath": "/assets/media/swf/copy_csv_xls_pdf.swf"
