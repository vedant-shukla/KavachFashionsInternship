	 <div class="outerAdminTable">
		<div class="wasteMeterDetails">
			<span class="wasteMeterDetailsTitle">{{cid}} : {{id}}</span>
			<a href="#{{cid}}" class="wasteMeterDetailsLink">Go back to {{cid}} Details</a>
		</div>	
        <div class="row">
            
            <div class="col-sm-1 col-xs-1 styleCode" ng-hide="cid=='StyleCode'">Style Code:</div>
            <div class="col-sm-2 col-xs-2" ng-hide="cid=='StyleCode'"><input type="text" class="form-control styleCodeText" placeholder="Enter Style Code" ng-model="dataFilter.StyleCode"></div>
            
            <div class="col-sm-1 col-xs-1 mill" ng-hide="cid=='Mill'">Mill:</div>
            <div class="col-sm-2 col-xs-2" ng-hide="cid=='Mill'"><input type="text" class="form-control millText" placeholder="Enter Mill Name" ng-model="dataFilter.Mill"></div>
            
            <div class="col-sm-1 col-xs-1 fabric" ng-hide="cid=='Fabric'">Fabric:</div>
            <div class="col-sm-2 col-xs-2" ng-hide="cid=='Fabric'"><input type="text" class="form-control fabricText" placeholder="Enter Fabric Name" ng-model="dataFilter.Fabric"></div>
			
			<div class="col-sm-1 col-xs-1 fabric" ng-hide="cid=='Brand'">Brand:</div>
            <div class="col-sm-2 col-xs-2" ng-hide="cid=='Brand'"><input type="text" class="form-control fabricText" placeholder="Enter Brand Name" ng-model="dataFilter.Brand"></div>
            
        </div>
	 </div> 	
	
    <div class ="outerAdminTable">
        <table class="table adminTable">
			<thead class="text-center">
				<th class="col-xs-3 text-center  tableHeading" ng-hide="cid=='StyleCode'">Style Code</th>
				<th class="col-xs-3 text-center  tableHeading" ng-hide="cid=='Mill'">Mill</th>
				<th class="col-xs-3 text-center  tableHeading" ng-hide="cid=='Fabric'">Fabric</th>
				<th class="col-xs-3 text-center  tableHeading" ng-hide="cid=='Brand'">Brand</th>
				<th class="col-xs-3 text-center  tableHeading">Cutting Out Date</th>
			</thead>
			<tbody class="text-center">
				<tr ng-repeat="data in wasteMeterDetails | filter : dataFilter">
					<td class="col-xs-3" ng-hide="cid=='StyleCode'">{{data.StyleCode}}</td>
					<td class="col-xs-3 " ng-hide="cid=='Mill'">{{data.Mill}}</td>
					<td class="col-xs-3 " ng-hide="cid=='Fabric'">{{data.Fabric}}</td>
					<td  class="col-xs-3 "ng-hide="cid=='Brand'">{{data.Brand}}</td>
					<td class="col-xs-3 ">{{data.CuttingOutDate}}</td>		
				</tr>
			</tbody>
        </table>
      </div>
