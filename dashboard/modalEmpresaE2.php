
	<div id="editEmpresaModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="editEmpresa" id="editEmpresa">
					<div class="modal-header">						
						<h4 class="modal-title">Editar empresa</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
							<input type="hidden" name="id" id="id" class="form-control">

						<div class="form-group">
							<label>Estado</label>
							<input type="text" name="estado" id="estado" class="form-control" required>
						</div>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>