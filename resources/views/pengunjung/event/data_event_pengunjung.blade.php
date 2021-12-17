{{-- @extends("layouts.template_pengunjung")

@section("ajax_calendar_css")
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
@endsection

@section('title')
  Data Event
@stop

@section("page_content")

<div style=" background:#F8F8FF ; padding:15px; color:black;">
    <div class="col-md-12">
        <div id="calendar"></div>
    </div>
</div>
@endsection

@section("ajax_calendar_js")
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script>
$(document).ready(function () {



    var calendar = $('#calendar').fullCalendar({

        header:{
            left:'prev,next today',
            center:'title',
        },
        events:'/admin/full-calender/',
        selectable:true,
        selectHelper: true,
        select:function(start, end, allDay)
        {
            var title = prompt('Event Title:');

        },




    });

});

</script>
@endsection --}}





@extends("layouts.template_pengunjung")

@section("page_content")

<link rel="stylesheet" type="text/css" href="{{ url('/landing') }}/css/form.css">

<div class="konten">
		<div class="kepala">
			<div class="lock"></div>
			<h2 class="judul">Form Daftar Pelatihan</h2>
		</div>
		<div class="artikel">
			<form class="horizontal" method="POST" action="{{ url('/pengunjung/form/tambah') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <fieldset><legend>Data Pelatihan</legend>
        <div class="grup">
          <label >Nama Murid<span class="required" >*</span></label>
          <input type="text" name="nama" required placeholder="Masukkan Nama Anda">
        </div>
         <br>
        <div class="grup">
          <label>Umur<span class="required">*</span></label>
          <input type="number" name="umur"  required placeholder="Masukkan Usia Murid">
        </div>
        <br>
        <div class="grup">
          <label >Alamat<span class="required">*</span></label>
          <input type="text" name="alamat" required placeholder="Masukkan Alamat">
        </div>
        <br>
        <div class="grup">
          <label >No Hp<span class="required">*</span></label>
          <input type="number" name="no_hp" required placeholder="Masukkan Nomor Handphone ">
        </div>
        <br>
        <div class="grup-offset">
          <label for="JK">Jenis Kelamin&nbsp;
            <input type="radio" name="jenis_kelamin" value="L" required>Laki-laki
            <input type="radio" name="jenis_kelamin" value="P" required>Perempuan
          </label>
        </div>
        <br>
        <div class="grup-offset">
          <button type="submit">Kirim</button>
        </div>
          <br>
          <div class="footer">
              <h5>Sanggar Tari Melati Ayu.@Proyek2</h5>
          </div>
        </fieldset>
      </form>
  </div>
  </div>
  </div>
@endsection



