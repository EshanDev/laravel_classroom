<template>
	<div id="edit-profile" class="edit-profile-container">
		<h3 class="text-center">Edit Profile</h3>
		<div class="grid-container">
			<div class="grid-item edit shadow-sm">
				<div class="content"> 
					<form action="#">
						<div class="form-group">
							<h3 class="text-center">แก้ไขข้อมูลผู้ใช้</h3>
						</div>
						<div class="form-group">
							<input type="text" name="st_name" class="form-control" placeholder="ชื่อ/นามสกุล">
						</div>
						<div class="form-group">
							<input type="email" name="st_mail" class="form-control" placeholder="ที่อยู่อีเมล์">
						</div>
						<div class="form-group">
							<input type="text" name="st_phone" class="form-control" placeholder="หมายเลขโทรศัพท์">
						</div>
						<div class="form-group d-grid">
							<button type="reset" class="btn btn-danger">รีเซ็ตข้อมูล</button>
							<button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
						</div>
					</form>
				</div>
			</div>
			<div class="grid-item preview">
				<div class="content">
					
				</div>
			</div>
		</div>
	</div>
</template>


<script>
	export default
	{
		name: "edit-profile",
	};
</script>