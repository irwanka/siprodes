<?php
$id_desa = Auth::user()->userdesa();
?>
@extends('layout')
@section("pagetitle",$route['title'])
@section("container")
@include("desa.navbar-sub.potensi")
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Potensi</a></li>
            <li class="breadcrumb-item">Sumber Daya Alam</li>
            <li class="breadcrumb-item active">Tingkat Usia</li>
        </ol>
	</div>
	<div class="offset-sm-2 col-md-8">
		<div class="card">
			<div class="card-header">
    			Tingkat Usia (Edit Data)
    			<div class="pull-right">
            <a href="#" id="delete" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
    				<a href="{{URLGroup('potensi/sdm/tingkat-usia')}}" class="btn btn-secondary">
            Kembali</a>
    			</div>
  			</div>
  			<div class="card-block">	 
          {!!Form::open(['url' => URLGroup("potensi/sdm/tingkat-usia/update"), 'name'=>'form-update-tingkat_usia'])!!}
          {{Form::hidden("id",Crypt::encrypt($data->id))}}
          {{Form::bsText("tanggal",tanggalIndo($data->tanggal),['class'=>'col-4 datepicker form-control','required'=>true])}}
          {{Form::bsText("usia_dibawah_1_tahun",$data->usia_dibawah_1_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_1_sd_5_tahun",$data->usia_1_sd_5_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_6_sd_10_tahun",$data->usia_6_sd_10_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_11_sd_15_tahun",$data->usia_11_sd_15_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_16_sd_20_tahun",$data->usia_16_sd_20_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_21_sd_30_tahun",$data->usia_21_sd_30_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_31_sd_40_tahun",$data->usia_31_sd_40_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_41_sd_50_tahun",$data->usia_41_sd_50_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_51_sd_60_tahun",$data->usia_51_sd_60_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {{Form::bsText("usia_diatas_60_tahun",$data->usia_diatas_60_tahun,['class'=>'col-12 numerik input-right form-control','required'=>true])}}
          {!!Form::bsSubmit('Simpan',"")!!}
          {!!Form::close()!!} 
    		</div>
    	</div>
	</div>
</div>
@endsection
@section("modal")
  
  {!!Form::open(['url' => URLGroup("potensi/sdm/tingkat-usia/delete"), 'name'=>'form-delete-tingkat_usia'])!!}
{{Form::hidden("id",Crypt::encrypt($data->id))}}
{!!Form::close()!!} 

@endsection
@section("javascript")
<script type="text/javascript">
    $(function(){
        var $validator = $("form[name=form-update-tingkat_usia]").validate({
        ignore:[],
        rules: {
        id_desa: {required:true},
        tanggal: {required:true},
        usia_dibawah_1_tahun: {required:true},
        usia_1_sd_5_tahun: {required:true},
        usia_6_sd_10_tahun: {required:true},
        usia_11_sd_15_tahun: {required:true},
        usia_16_sd_20_tahun: {required:true},
        usia_21_sd_30_tahun: {required:true},
        usia_31_sd_40_tahun: {required:true},
        usia_41_sd_50_tahun: {required:true},
        usia_51_sd_60_tahun: {required:true},
        usia_diatas_60_tahun: {required:true},
        },
        messages: {
        },
        submitHandler: function(form) {
        form.submit();
        }
        });

        $("#delete").on("click", function(){
        bootbox.confirm({
        title: "Hapus",
        message: "Anda Yakin Ingin Menghapus Data Ini.",
        buttons: {
        cancel: {
        label: 'Batal'
        },
        confirm: { label: 'Ya, Hapus'
        }
        },
        callback: function (result) {
        if(result){ $("form[name=form-delete-tingkat_usia]").submit();}
        }
        });
        })

                
    })
</script>
@endsection


