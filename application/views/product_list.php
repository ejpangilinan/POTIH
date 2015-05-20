<div class="main-content pull-right">
	<div class="breadcrumbs-panel">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>controlpanel">Home</a></li>
			<li class="active"><a href="<?= base_url() ?>product/list">Product List</a></li>
		</ol>
	</div>
	<div class="content-form">
		<div class="form-header">Product List</div>
		<div class="form-body">
			<div class="max-row tbl-filters" align="center">
				<table>
					<tr>
						<td>Item Code:</td>
						<td><input type="text" class="form-control" id="itemcode"></td>
						<td>Type:</td>
						<td>
							<select class="form-control" id="type">
								<option value="1">Stack</option>
								<option value="2">Non - Stack</option>
							</select>
						</td>
						<td>Branch:</td>
						<td>
							<select class="form-control" id="branch"><?= $branch_list ?></select>
						</td>
					</tr>
					<tr>
						<td>Item Name:</td>
						<td><input type="text" class="form-control" id="product"></td>
						<td>Material Type:</td>
						<td>
							<select class="form-control" id="material"><?= $material_list ?></select>
						</td>
						<td>Inventory Status:</td>
						<td>
							<select class="form-control" id="invstatus">
								<option value="1">ALL</option>
								<option value="2">With Inventory</option>
								<option value="3">Negative Inventory</option>
								<option value="4">Zero Inventory</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Subgroup:</td>
						<td>
							<select class="form-control" id="subgroup"><?= $subgroup_list ?></select>
						</td>
						<td>Date To:</td>
						<td><input type="text" class="form-control" id="datefrom"></td>
						<td>Date From:</td>
						<td><input type="text" class="form-control" id="datefrom"></td>
					</tr>
				</table>
			</div>
			<div class="sub-panel">
				Order By:
				<select class="form-control form-control mod" id="orderby">
					<option value="1">Item Code</option>
					<option value="2">Item Name</option>
				</select>
				<input type="button" class="btn btn-success" value="Search">
			</div>
			<div class="max-row">
				<button class="btn btn-primary" data-toggle="modal" data-target="#createProductModal">Create New Product</button>
			</div>
			<div class="max-row">
				<div id="messagebox_1"></div>
			</div>
			<div class="max-row">
				<center>
					<div id="tbl" class="tbl"></div>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="createProductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Create New Product</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<div class="checkbox pull-right" id="new_check_nonstack">
						<input type="checkbox" value="">Non-stack Item
					</div>
				</div>
				<div class="form-group">
					Item Code:
					<input type="text" class="form-control" id="new_itemcode">
				</div>
				<div class="form-group">
					Item Description:
					<textarea class="form-control" rows="4" id="new_product"></textarea>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6">
							Minimum Inventory:
							<input type="text" class="form-control" id="new_min">
						</div>
						<div class="col-xs-6">
							Maximum Inventory:
							<input type="text" class="form-control" id="new_max">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6">
							Material Type:
							<div class="txt-data" id="material_text"></div>
							<input type="hidden" id="material_id" value="">
						</div>
						<div class="col-xs-6">
							Subgrouping:
							<div class="txt-data" id="subgroup_text"></div>
							<input type="hidden" id="subgroup_id" value="">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>