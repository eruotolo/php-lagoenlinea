            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>">Incidencias</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
										<div id="toolbar" class="btn-group pull-right" style='margin-top:15px'>
											<a style='margin-right:5px' rel="tooltip" title="Crear nuevo" type="button" class="btn btn-warning btn-fill noblock btn-social btn-round" href='index.php?userid=<?php echo $userid ?>&section=incidentes-add'>
												<i class="fa fa-plus" style='color:#ffffff'></i>
											</a>
											<button rel="tooltip" title="Eliminar Seleccionados" type="button" class="btn btn-danger btn-fill noblock btn-social btn-round" id='deleteselected'>
												<i class="fa fa-trash" style='color:#ffffff'></i>
											</button>
										</div>									
										<table id="bootstrap-table" class="table">
											<thead>
												<th data-field="state" data-checkbox="true"></th>
												<th data-field="id" data-sortable="true" style='width:40px'>ID</th>
												<th data-field="nombre" data-sortable="true" style='width:80px'>Nombre</th>
												<th data-field="fecha" data-sortable="true" >Fecha</th>
												<th data-field="categoria" data-sortable="true">Categoria</th>
												<th data-field="lugar" data-sortable="true">Lugar</th>
												<th data-field="estado" data-sortable="true">Estado</th>
												<th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter"></th>
											</thead>
											<tbody>
											<?php
												$sql="SELECT *, DATE(Fecha) as fec FROM `incidentes` ORDER BY ID desc";
												$result=mysql_query($sql);
												while ($row = mysql_fetch_assoc($result)) {
													if ($row['Estado'] == 'Publicado') {
														$span = "<span class='btn-success btn-fill btn-sm'>Publicado</span>";
													} else if ($row['Estado'] == 'Borrador') {
														$span = "<span class='btn-danger btn-fill btn-sm'>Borrador</span>";
													}
													echo "<tr>
																<td></td>
																<td>{$row['ID']}</td>
																<td>{$row['Nombre']}</td>													
																<td>{$row['fec']}</td>
																<td>{$row['Categoria']}</td>
																<td>{$row['Lugar']}</td>
																<td>$span</td>
																<td></td>
															</tr>";
												}
											?>
											</tbody>
										</table>
										<div style='clear:both'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script type="text/javascript">
	
        var $table = $('#bootstrap-table');
		var checkedRows = [];
			$('#bootstrap-table').on('check.bs.table', function (e, row) {
			  checkedRows.push({id: row.id, name: row.name, forks: row.forks});
			  console.log(checkedRows);
			});		

        function operateFormatter(value, row, index) {
            return [
                "<a rel='tooltip' title='Editar' class='btn btn-simple btn-success btn-icon table-action edit noblock' href='javascript:void(0)'>",
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove noblock" href="javascript:void(0)">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
				
            ].join('');
        }

        $().ready(function(){
            window.operateEvents = {
                'click .edit': function (e, value, row, index) {
                    window.location.href = "index.php?userid=<?php echo $userid ?>&section=incidentes-edit&id=" + row.id;
                },
                'click .remove': function (e, value, row, index) {
					swal({
					  title: '¿Estás seguro que deseas eliminar la incidencia?',
					  text: "Toda la información será borrada y no podrá ser recuperada",
					  type: 'error',
					  showCancelButton: true,
					  confirmButtonText: 'Si, eliminalo',
					  cancelButtonText: 'No, cancela',
					  confirmButtonClass: 'btn btn-danger btn-fill',
					  cancelButtonClass: 'btn btn-default btn-fill',
					  buttonsStyling: false
					}).then(function (result) {
					  if (result.value) {
						
						$.ajax({
						type: "POST",
						url: "jquery/delete-incident.php",
						data: {id: row.id},
						cache: false,
						success: function(output){
							$table.bootstrapTable('remove', {
								field: 'id',
								values: [row.id]
							});	
							swal(
							  'Eliminado',
							  'La incidencia fue eliminada',
							  'success'
							);							
						}
						});						
					  // result.dismiss can be 'cancel', 'overlay',
					  // 'close', and 'timer'
					  } else if (result.dismiss === 'cancel') {
						swal(
						  'Cancelado',
						  'La incidencia NO fue eliminada',
						  'error'
						)
					  }
					});
                }
            };

            $table.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                search: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 150,
                clickToSelect: false,
                pageList: [],

                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " filas visibles";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });

            //activate the tooltips after the data table is initialized
            $('[rel="tooltip"]').tooltip();

            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });


        });
			
		
		$( "#deleteselected" ).click(function() {
					swal({
					  title: '¿Estás seguro que deseas eliminar las incidencias seleccionadas?',
					  text: "Toda la información será borrada y no podrá ser recuperada",
					  type: 'error',
					  showCancelButton: true,
					  confirmButtonText: 'Si, eliminalos',
					  cancelButtonText: 'No, cancela',
					  confirmButtonClass: 'btn btn-danger btn-fill',
					  cancelButtonClass: 'btn btn-default btn-fill',
					  buttonsStyling: false
					}).then(function (result) {
					  if (result.value) {
						  $.each(checkedRows, function(index, value) {
							$.ajax({
							type: "POST",
							url: "jquery/delete-incident.php",
							data: {id: value.id},
							cache: false,
							success: function(output){
								$table.bootstrapTable('remove', {
									field: 'id',
									values: [value.id]
								});							
							}
							});							
						  });
						swal(
						  'Eliminado',
						  'Las incidencias fueron eliminadas',
						  'success'
						);							  
						
					  // result.dismiss can be 'cancel', 'overlay',
					  // 'close', and 'timer'
					  } else if (result.dismiss === 'cancel') {
						swal(
						  'Cancelado',
						  'Las incidencias NO fueron eliminadas',
						  'error'
						)
					  }
					});									
		});		
	$( document ).ready(function() {
			$(".makeadmin").click(function() {
					var i = $(this);
					//$(this).removeClass("fa-star-o");
					//$(this).addClass("fa-star");
					if ($(this).attr('admin') == 0) {
						$.ajax({
						type: "POST",
						url: "jquery/makeadmin.php",
						data: {id: $(this).attr('valid'), userid: 1},
						cache: false,
						success: function(output){
							i.removeClass("fa-star-o");
							i.addClass("fa-star");
							i.attr('admin',1);
						}
						});
					} else {
						$.ajax({
						type: "POST",
						url: "jquery/unmakeadmin.php",
						data: {id: $(this).attr('valid'), userid: 1},
						cache: false,
						success: function(output){
							i.removeClass("fa-star");
							i.addClass("fa-star-o");
							i.attr('admin',0);							
						}
						});						
					}
					
			});
			
	});
    </script>			