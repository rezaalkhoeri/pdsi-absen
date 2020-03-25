<!DOCTYPE html>
<html lang="en">
<head>
	<title>PDSI Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assets/images/icons/pdsi.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('{{asset('assets/images/bg-01.jpg')}}');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" action="{{route('submit-absen')}}" method="POST">
					@csrf
                    <div class="row" style="margin-bottom:100px;">
                        <div class="column1">
                            <img src="{{asset('assets/images/logo.png')}}" class="form-logo">
                        </div>
                        <div class="contact3-form-title">
                            <h3 style="font-size:25px;"> ABSENSI DIGITAL</h3> 
                            <span> PT Pertamina Drilling Services Indonesia</span> 
                        </div>
                    </div>
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<span> Nama Lengkap </span>
						<input class="input3" type="text" name="namaLengkap" placeholder="Masukan Nama" required>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate="Status Pekerja is required" required>
						<span> Status Pekerja </span>
                        <select class="selection-2" name="statusPekerja">
                            <option value="Direksi">Direksi</option>
                            <option value="Pekerja PWTT">Pekerja PWTT</option>
                            <option value="Pekerja PWT">Pekerja PWT</option>
                            <option value="Mitra Kerja">Mitra Kerja</option>
                        </select>
					</div>
					<div class="wrap-input3 validate-input" data-validate="Nomor Pekerja is required">
						<span> Nomor Pekerja </span>
						<input class="input3" type="text" name="nomorPekerja" placeholder="Masukan Nomor Pekerja">
						<span class="focus-input3"></span>
					</div>
                    <div class="wrap-input3 validate-input" data-validate="Direktorat is required">
						<span> Direktorat </span>
                        <select class="selection-2" name="direktorat">
                            <option value="Utama">Utama</option>
                            <option value="Marketing & Development">Marketing & Development</option>
                            <option value="Operasi">Operasi</option>
                            <option value="Keuangan & Administrasi">Keuangan & Administrasi</option>
                        </select>
					</div>
					<div class="wrap-input3 validate-input" data-validate="Fungsi is required">
						<span> Fungsi </span>
                        <select class="selection-2" name="fungsi">
							<option value="Direktur">Direktur</option>                            
							<option value="Corporate Secretary">Corporate Secretary</option>
							<option value="Internal Audit">Internal Audit</option>                            
							<option value="Supply Chain Management">Supply Chain Management</option>                            
							<option value="HSSE & Quality">HSSE & Quality</option>
							<option value="Human Capital">Human Capital</option>
							<option value="Leher Direktur Marketing">Leher Direktur Marketing </option>                        
							<option value="Marketing & Business Partnership">Marketing & Business Partnership</option>                            
							<option value="Drilling Operation">Drilling Operation</option>                            
							<option value="Drilling Support">Drilling Support</option>                            
							<option value="Treasury">Treasury </option>
							<option value="Controller">Controller</option>                            
							<option value="Leher Direktur Keuangan & Administrasi">Leher Direktur Keuangan & Administrasi</option>
                        </select>
					</div>
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<span> Departemen </span>
                        <select class="selection-2" name="departemen">		
							<option value="Direktur">Direktur</option>
							<option value="Vice President">Vice President</option>
							<option value="Communication & Relation">Communication & Relation</option>
							<option value="Legal & Compliance">Legal & Compliance</option>
							<option value="Operation Internal Audit">Operation Internal Audit</option>
							<option value="Finance & Support Internal Audit">Finance & Support Internal Audit</option>
							<option value="Procurement">Procurement</option>
							<option value="Logistic">Logistic</option>
							<option value="HSE">HSE</option>
							<option value="QA & QM">QA & QM</option>
							<option value="Security">Security</option>
							<option value="HC Development">HC Development</option>
							<option value="HC Operation">HC Operation</option>
							<option value="Corp. Strategic Planning, Evaluation & Portfolio">Corp. Strategic Planning, Evaluation & Portfolio</option>
							<option value="Corp. New Business Development Research & Development">Corp. New Business Development Research & Development </option>
							<option value="Rig Services Marketing">Rig Services Marketing</option>
							<option value="Commercial & Trade Marketing">Commercial & Trade Marketing</option>
							<option value="IPM & Non Rig Services Marketing">IPM & Non Rig Services Marketing</option>
							<option value="Partnership & Non Drilling Services Marketing">Partnership & Non Drilling Services Marketing</option>
							<option value="Drilling Specialist">Drilling Specialist</option>
							<option value="Project Kalimantan">Project Kalimantan</option>
							<option value="Project Jambi">Project Jambi</option>
							<option value="Project SBS">Project SBS</option>
							<option value="Project Jawa">Project Jawa</option>
							<option value="Project Geothermal Sumatra I">Project Geothermal Sumatra I</option>
							<option value="Project Geothermal Sumatra II & Jawa">Project Geothermal Sumatra II & Jawa</option>
							<option value="Project Middle East">Project Middle East</option>
							<option value="Unconventional & Non Rig Services">Unconventional & Non Rig Services </option>
							<option value="Maintenancce">Maintenancce</option>
							<option value="Moving & Mobilization">Moving & Mobilization</option>
							<option value="Contract & SA Monitoring">Contract & SA Monitoring</option>
							<option value="Tax & Cash Management">Tax & Cash Management</option>
							<option value="General & Asset Accounting">General & Asset Accounting</option>
							<option value="Budgeting & Accounting Consolidation">Budgeting & Accounting Consolidation</option>
							<option value="ICT">ICT</option>
							<option value="Asset Management">Asset Management</option>
							<option value="Insurance & Risk Management">Insurance & Risk Management</option>
                        </select>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Nama Perusahaan is required">
						<span> Nama Perusahaan Jasa Penunjang (PJP) bagi Mitra Kerja </span>
                        <textarea class="input3" name="perusahaanMitra" placeholder="Enter Your Answer"></textarea>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<span> Nomor Handphone </span>
						<input class="input3" type="text" name="nomorHP" placeholder="Masukan Nomor HP">
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-contact3-form-radio">
							<span> Lokasi Kantor/Project </span>
					</div>
					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="lokasi" value="Kantor Pusat PDSI">
							<label class="label-radio3" for="radio1"> Kantor Pusat PDSI </label>

							<input class="input-radio3" id="radio2" type="radio" name="lokasi" value="Kantor Area SBS">
							<label class="label-radio3" for="radio2"> Kantor Area SBS </label>

							<input class="input-radio3" id="radio3" type="radio" name="lokasi" value="Kantor Area Jawa">
							<label class="label-radio3" for="radio3"> Kantor Area Jawa </label>

							<input class="input-radio3" id="radio4" type="radio" name="lokasi" value="Kantor Area Balikpapan">
							<label class="label-radio3" for="radio4"> Kantor Area Balikpapan </label>

							<input class="input-radio3" id="radio5" type="radio" name="lokasi" value="Rig">
							<label class="label-radio3" for="radio5">Rig</label>

							<input class="input-radio3" id="radio10" type="radio" name="lokasi" value="Other">
							<label class="label-radio3" for="radio10">Other</label>

							<div class="wrap-input3 validate-input" data-validate="Lokasi is required">
								<input class="input3" type="text" name="otherLokasi" placeholder="Other">
								<span class="focus-input3"></span>
							</div>
						</div>
					</div>
					<div class="wrap-contact3-form-radio">
							<span> Metode kerja saat ini </span>
					</div>
					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
											
							<input class="input-radio3" id="radio6" type="radio" name="metodeKerja" value="Work From Home">
							<label class="label-radio3" for="radio6"> Work From Home </label>

							<input class="input-radio3" id="radio7" type="radio" name="metodeKerja" value="Berangkat kerja di Kantor Pusat/Kantor Area">
							<label class="label-radio3" for="radio7"> Berangkat kerja di Kantor Pusat/Kantor Area </label>

							<input class="input-radio3" id="radio8" type="radio" name="metodeKerja" value="Istirahat Tahunan/Cuti">
							<label class="label-radio3" for="radio8"> Istirahat Tahunan/Cuti </label>

							<input class="input-radio3" id="radio9" type="radio" name="metodeKerja" value="Other">
							<label class="label-radio3" for="radio9"> Other </label>
							<div class="wrap-input3 validate-input" data-validate="Metode Kerja is required">
								<input class="input3" type="text" name="otherMetodeKerja" placeholder="Other">
								<span class="focus-input3"></span>
							</div>
						</div>
					</div>
					<div class="wrap-contact3-form-radio">
						<span> List Pekerjaan </span>
					</div>
					<div class="wrap-contact3-form-radio">
						<label class="container"> Rutin/operasional
							<input type="checkbox" name="listPekerjaan[]" value="Rutin/operasional">
							<span class="checkmark"></span>
						</label>
						<label class="container"> Koordinasi/rapat
							<input type="checkbox" name="listPekerjaan[]" value="Koordinasi/rapat">
							<span class="checkmark"></span>
						</label>
						<label class="container"> Tugas khusus/task force
							<input type="checkbox" name="listPekerjaan[]" value="Tugas khusus/task force">
							<span class="checkmark"></span>
						</label>
						<label class="container"> Pembelajaran online
							<input type="checkbox" name="listPekerjaan[]" value="Pembelajaran online">
							<span class="checkmark"></span>
						</label>		
						<div class="wrap-input3 validate-input" data-validate="List Pekerjaan is required">
							<input class="input3" type="text" name="otherListPekerjaan" placeholder="Other">
							<span class="focus-input3"></span>
						</div>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Kondisi is required">
						<span> Bagaimana kondisi anda sekarang? </span>
                        <select class="selection-2" name="kondisi">
                            <option value="Fit"> Fit </option>
                            <option value="Tidak Fit"> Tidak Fit </option>
                        </select>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Penjelasan kondisi is required">
						<span> Jelaskan kondisi anda saat ini, jika "Tidak Fit" </span>
                        <textarea class="input3" name="noteKondisi" placeholder="Enter Your Answer"></textarea>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input" data-validate = "Kendala is required">
						<span> Kendala dalam bekerja (*untuk Work From Home/Kantor/Unit Kerja) </span>
                        <textarea class="input3" name="kendala" placeholder="Enter Your Answer"></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn" type="submit">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/js/main.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script src="{{ asset('assets/vendor/jquery/sweetalert.min.js')}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

	@if (session('message'))
	<script type="text/javascript">
	$(document).ready(function() {
		swal("Success!", "{{ session('message') }}", "success");
	});
	</script>
	@endif

	@if (session('alert'))
	<script type="text/javascript">
	$(document).ready(function() {
		swal("Sorry!", "{!! session('alert') !!}", "error");
	});
	</script>
	@endif

	@if (session('warning'))
	<script type="text/javascript">
		$(document).ready(function(){
			swal("Warning", "{!! session('warning') !!}", "warning");
		});
	</script>
	@endif

</body>
</html>
