@section('referensi')
	@include('layout.css')
@show

<div class="judul">Pengajar<img src="{{URL::to('img/add.png')}}" class="ajar-size"/></div>
<div class="row peng-row">
  <div class="col-sm-2"></div>
  <div class="col-md-8">
	  <div class="col-sm-3"><img src="<?= url()."/".$foto ?>" class="ajar-round"/></div>
	  <div class="col-sm-3"><img src="<?= url()."/".$foto ?>" class="ajar-round"/></div>
	  <div class="col-sm-3"><img src="{{URL::to('img/1.jpg')}}" class="ajar-round"/></div>
	  <div class="col-sm-3"><img src="{{URL::to('img/1.jpg')}}" class="ajar-round"/></div>
	  <div class="col-sm-3"><img src="{{URL::to('img/1.jpg')}}" class="ajar-round"/></div>
	  <div class="col-sm-3"><img src="{{URL::to('img/1.jpg')}}" class="ajar-round"/></div>
  </div>
  <div class="col-sm-2"></div>
</div>


