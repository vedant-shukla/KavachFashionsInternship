<div class="infoOut">
	<span class="info">Brand : {{detailedProgress.Brand}}</span>
	<span class="info">Fabric : {{detailedProgress.Fabric}}</span>
	<span class="info">Style Code : {{detailedProgress.StyleCode}}</span>
	<span class="info">Mill : {{detailedProgress.Mill}}</span>
</div>
<div class="checkout-wrap">
  <ul class="checkout-bar">

    <li class="" id="storeIn">Store In<div ng-show="detailedProgress.StoreInDate!='0000-00-00'" class="chartDetails">
			Date : {{detailedProgress.StoreInDate}}<br>
			Meter : {{detailedProgress.StoreInMeter}}<br>
			Pieces : {{detailedProgress.StoreInPieces}}
			</div>
	</li>
    
    <li class="" id="storeOut">Store Out<div ng-show="detailedProgress.StoreOutDate!='0000-00-00'" class="chartDetails">
			Date : {{detailedProgress.StoreOutDate}}<br>
			Meter : {{detailedProgress.StoreOutMeter}}<br>
			Pieces : {{detailedProgress.StoreOutPieces}}
			</div></li>
    
    <li class="" id="cuttingOut">Cutting Out<div ng-show="detailedProgress.CuttingOutDate!='0000-00-00'" class="chartDetails">
			Date : {{detailedProgress.CuttingOutDate}}<br>
			Meter : {{detailedProgress.CuttingOutMeters}}<br>
			Pieces : {{detailedProgress.CuttingOutPieces}}
			</div></li>
    
    <li class="" id="productionOut">Production Out<div ng-show="detailedProgress.ProductionOutDate!='0000-00-00'" class="chartDetails">
			Date : {{detailedProgress.ProductionOutDate}}<br>
			Meter : {{detailedProgress.ProductionOutMeters}}<br>
			Pieces : {{detailedProgress.ProductionOutPieces}}
			</div>
    </li>
    <li class="" id="clientDelivered">Client Delivered<div ng-show="detailedProgress.ClientDeliveredDate!='0000-00-00'" class="chartDetails">
			Date : {{detailedProgress.ClientDeliveredDate}}<br>
			Meter : {{detailedProgress.ClientDeliveredMeters}}<br>
			Pieces : {{detailedProgress.ClientDeliveredPieces}}
			</div></li>
       
  </ul>
</div>
