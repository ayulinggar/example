@extends('layouts.app')

@section('content')
<!-- ini aku ganti karena ternyata dia bukan slider -->
<div class="parallax-container">
    <div class="parallax"><img src="{{ asset('img/bg1.jpg') }}"></div>
    <div class="text-center" style="padding: 10%">
      <h3 style="color: pink;">Welcome</h3>
      <p style="color: white; font-size: 28px;" class="a">You are what you want</p>
      <a class="waves-effect waves-light btn"><i class="material-icons right">check</i>Attend</a>
    </div>
</div>
<div class="container">
  <div class="text-center" style="padding: 5%">
     <h3>The most wanted</h3>
     <p>Ini gak tau tulisannya apaan yaa biarin aja asal ada tulisannya ya gak sih</p> 
  </div>
  <div class="row">
    <div class="col s3 m3">
        <div class="card-image">
          <img src="{{ asset('img/bg.jpeg') }}">
      <div class="card white hoverable" style="padding: 10px">
          <div class="card-content white-text text-center">
            <span><i class="medium material-icons black">album</i></span>
            <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
            <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">all_inclusive</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">android</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">backup</i></span>
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
          <span><i class="medium material-icons black">live_tv</i></span>
          <p style="color: green" style="padding-top: 10px">INI GAK TAU APA</p>
          <p style="color: black; font-size: 12px;">Bawahnya juga gak tau tulisan apa ini yaaa.. biarin asal aja ya yg penting ada contohnya aja okey..</p>
        </div>
      </div>
    </div>
    <div class="col s3 m3">
      <div class="card white hoverable" style="padding: 10px">
        <div class="card-content white-text text-center">
          <span><i class="medium material-icons black">network_check</i></span>
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