<img src="{{asset('userAsset/images/'.$bike->anh)}}" alt="" />
<div class="bike-info">

    <div class="model">
        <h4>{{$bike->tensp}}<span>{{'$'.$bike->giaban}}</span></h4>
    </div>
    <div class="model-info">
        <select>
            <option value="volvo">OPTION</option>
            <option value="saab">Option</option>
            <option value="opel">Option</option>
            <option value="audi">Option</option>
        </select>
        <a href="bicycles">BUY</a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="viw">
    <a href="bicycles">Quick View</a>
</div>