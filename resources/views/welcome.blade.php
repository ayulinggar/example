@extends('layouts.app')

@section('content')
<!-- ini aku ganti karena ternyata dia bukan slider -->
<div class="parallax-container">
    <div class="parallax"><img src="{{ asset('img/bg.jpeg') }}"></div>
</div>
<div class="container">
  <div class="text-center" style="padding: 5%">
     <h3>VELIT ID IMPERDIET</h3>
     <p>Ini gak tau tulisannya apaan yaa biarin aja asal ada tulisannya ya gak sih</p> 
  </div>
  <div class="row">
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">album</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">album</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">album</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">album</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
  </div>     
  <div class="row">
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">album</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">album</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">album</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
  </div>    
</div>
@endsection
@section('script')
<script type="text/javascript">
      $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>
@endsection