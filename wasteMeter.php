<div class="outerAdminTable"> 

	<span>Search By {{id}} :</span> <input type="text" name="search" class="form-control searchBox" ng-model="search"><br>
	
	<table class="table adminTable">
				<thead class="text-center">
					<th class="col-xs-3 text-center tableHeading">{{id}}</th>
					<th class="col-xs-3 text-center tableHeading">Waste Meter</th>
					<th class="col-xs-3 text-center tableHeading">Excess Pieces</th>
					<th class="col-xs-3 text-center tableHeading">See Details</td>
				</thead>
				<tbody class="text-center">
					<tr ng-repeat="data in adminDataEntries | filter : search">
						<td class="col-xs-3">{{data.A}}</td>
						<td class="col-xs-3">{{data.StoreOutMeter - data.CuttingOutMeters}}</td>
						<td class="col-xs-3">{{data.ExcessPieces}}</td>
						<td class="col-xs-3"><a href="#WasteDetails/{{id}}/collectionId/{{data.A}}">See Details</a></td>
					</tr>
			   
				</tbody>
	</table>
</div>		