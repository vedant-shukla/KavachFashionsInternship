	 <div class="outerAdminTable" >
        <div class="row">
            
            <div class="col-sm-1 col-xs-1 styleCode">Style Code:</div>
            <div class="col-sm-2 col-xs-2"><input type="text" class="form-control styleCodeText" placeholder="Enter Style Code" ng-model="dataFilter.StyleCode"></div>
            
            <div class="col-sm-1 col-xs-1 mill">Mill:</div>
            <div class="col-sm-2 col-xs-2"><input type="text" class="form-control millText" placeholder="Enter Mill Name" ng-model="dataFilter.Mill"></div>
            
            <div class="col-sm-1 col-xs-1 fabric">Fabric:</div>
            <div class="col-sm-2 col-xs-2"><input type="text" class="form-control fabricText" placeholder="Enter Fabric Name" ng-model="dataFilter.Fabric"></div>
			
			<div class="col-sm-1 col-xs-1 fabric">Brand:</div>
            <div class="col-sm-2 col-xs-2"><input type="text" class="form-control fabricText" placeholder="Enter Brand Name" ng-model="dataFilter.Brand"></div>
            
        </div>
	 </div>  
    <div class ="outerAdminTable table-responsive">
        <table class="table table-fixed table-condensed adminTable">
			<thead class="text-center">
				<th class="col-xs-3 text-center tableHeading">Style Code</th>
				<th class="col-xs-3 text-center tableHeading">Mill</th>
				<th class="col-xs-3 text-center tableHeading">Fabric</th>
				<th class="col-xs-2 text-center tableHeading">Brand</th>
				<th class="col-xs-1 text-center tableHeading">Details</th>
			</thead>
			<tbody class="text-center">
				<tr ng-repeat="data in dataEntries | filter: dataFilter">
					<td class="col-xs-3">{{data.StyleCode}}</td>
					<td class="col-xs-3">{{data.Mill}}</td>
					<td class="col-xs-3">{{data.Fabric}}</td>
					<td class="col-xs-2">{{data.Brand}}</td>
					<td class="col-xs-1"><a href="#Details/{{data.id}}">
					See Details</a> </td>		
				</tr>
			</tbody>
        </table>
      </div>
