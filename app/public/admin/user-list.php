            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>">Listado de Usuarios</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
										<div id="toolbar" class="btn-group pull-right" style='margin-top:15px'>
											<a rel="tooltip" title="Crear nuevo" type="button" class="btn btn-warning btn-fill" href='index.php?userid=<?php echo $userid ?>&section=user-add'>
												<i class="fa fa-plus" style='color:#ffffff'></i>
											</a>
											<button rel="tooltip" title="Eliminar Seleccionados" type="button" class="btn btn-danger btn-fill noblock" id='deleteselected'>
												<i class="fa fa-trash" style='color:#ffffff'></i>
											</button>
										</div>									
										<table id="bootstrap-table" class="table">
											<thead>
												<th data-field="state" data-checkbox="true"></th>
												<th data-field="id" data-sortable="true">ID</th>
												<th data-field="admin"></th>
												<th data-field="name" data-sortable="true"><?php echo $lng_name ?></th>
												<th data-field="email" data-sortable="true"><?php echo $lng_email ?></th>
												<th data-field="lastlogin"><?php echo $lng_lastlogin ?></th>
												<th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter"></th>
											</thead>
											<tbody>
											<?php
												$sql="SELECT *, TIMESTAMPDIFF(MINUTE, lastlogin, now()) as 'minutes' FROM users";
												$result=mysql_query($sql);
												while ($row = mysql_fetch_assoc($result)) {
														if ($row['admin'] == 1) {
															$iconadmin = "<i class='fa fa-star text-warning makeadmin' admin='{$row['admin']}' valid='{$row['user_id']}' rel='tooltip' title='$lng_unmake_admin'></i>";
														} else {
															$iconadmin = "<i class='fa fa-star-o text-warning makeadmin' admin='{$row['admin']}' valid='{$row['user_id']}' rel='tooltip' title='$lng_make_admin'></i>";
														}
														if ($row['onlymuestras'] == 1) {
															$icononlymuestra = "<i class='fa fa-vcard text-warning makeonlymuestra' onlymuestra='{$row['onlymuestras']}' valid='{$row['user_id']}' rel='tooltip' title='Usuario: LagoSinHuella'></i>";
														} else {
															$icononlymuestra = "<i class='fa fa-vcard-o text-warning makeonlymuestra' onlymuestra='{$row['onlymuestras']}' valid='{$row['user_id']}' rel='tooltip' title='Usuario: LagoSinHuella'></i>";
														}														
													echo "<tr>
																<td></td>
																<td>{$row['user_id']}</td>
																<td>$iconadmin {$icononlymuestra}</td>
																<td>{$row['firstname']} {$row['lastname']}</td>
																<td>{$row['email']}</td>
																<td>{$row['lastlogin']}</td>
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
			"<a rel='tooltip' title='Cambiar Password' class='btn btn-simple btn-info btn-icon table-action password noblock' href='javascript:void(0)'>",
                    '<i class="fa fa-lock"></i>',
                '</a>',
                '<a rel="tooltip" title="Editar" class="btn btn-simple btn-info btn-icon table-action edit noblock" href="javascript:void(0)">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove noblock" href="javascript:void(0)">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }

        $().ready(function(){
            window.operateEvents = {
                'click .view': function (e, value, row, index) {
				//	window.location.href = "index.php?userid=<?php echo $userid ?>&section=employee-profile&id=" + row.id;
				//	alert(row.id);
                 //   info = JSON.stringify(row);

                 //   swal('You click view icon, row: ', info);
                 //   console.log(info);
                },
                'click .edit': function (e, value, row, index) {
                    window.location.href = "index.php?userid=<?php echo $userid ?>&section=employee-profile&id=" + row.id;
                },
                'click .remove': function (e, value, row, index) {
					swal({
					  title: '¿Estas seguro que deseas eliminar el usuario?',
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
						url: "jquery/delete-employee.php",
						data: {id: row.id, userid: 1},
						cache: false,
						success: function(output){
							$table.bootstrapTable('remove', {
								field: 'id',
								values: [row.id]
							});	
							swal(
							  'Eliminado',
							  'El usuario fue eliminado',
							  'success'
							);							
						}
						});						
					  // result.dismiss can be 'cancel', 'overlay',
					  // 'close', and 'timer'
					  } else if (result.dismiss === 'cancel') {
						swal(
						  'Cancelado',
						  'El usuario NO fue eliminado',
						  'error'
						)
					  }
					});
                },
                'click .password': function (e, value, row, index) {
					swal({
					  title: 'Seleccione nuevo Password',
					  input: 'text',
					  inputAttributes: {
						autocapitalize: 'off'
					  },
					  showCancelButton: true,
					  confirmButtonText: 'Cambiar',
					  showLoaderOnConfirm: true,
					  preConfirm: (password) => {
						$.ajax({
						type: "POST",
						url: "jquery/changepassword.php",
						data: {id: row.id, password:password, email:row.email},
						cache: false,
						success: function(output){
							swal(
							  'Exito',
							  'El password fue modificado',
							  'success'
							);							
						}
						});
					  },
					  allowOutsideClick: () => !Swal.isLoading()
					}).then((result) => {
					  if (result.isConfirmed) {
						Swal.fire({
						  title: `${result.value.login}'s avatar`,
						  imageUrl: result.value.avatar_url
						})
					  }
					})
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
					  title: '¿Estás seguro que deseas eliminar los usuarios seleccionados?',
					  text: "Toda la información sera borrada y no podrá ser recuperada",
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
							url: "jquery/delete-employee.php",
							data: {id: value.id, userid: 1},
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
						  'Los empleados fueron eliminados',
						  'success'
						);							  
						
					  // result.dismiss can be 'cancel', 'overlay',
					  // 'close', and 'timer'
					  } else if (result.dismiss === 'cancel') {
						swal(
						  'Cancelado',
						  'Los empleados NO fueron eliminados',
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
							location.reload();						
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
							location.reload();
						}
						});						
					}
					
			});
			$(".makeonlymuestra").click(function() {
					var i = $(this);
					if ($(this).attr('onlymuestra') == 0) {
						$.ajax({
						type: "POST",
						url: "jquery/makeonlymuestra.php",
						data: {id: $(this).attr('valid'), userid: 1},
						cache: false,
						success: function(output){						
							i.removeClass("fa-vcard-o");
							i.addClass("fa-vcard");
							i.attr('onlymuestra',1);
							location.reload();
						}
						});
					} else {
						$.ajax({
						type: "POST",
						url: "jquery/unmakeonlymuestra.php",
						data: {id: $(this).attr('valid'), userid: 1},
						cache: false,
						success: function(output){
							i.removeClass("fa-vcard");
							i.addClass("fa-vcard-o");
							i.attr('onlymuestra',0);
							location.reload();							
						}
						});						
					}
					
			});			
	});
    </script>			