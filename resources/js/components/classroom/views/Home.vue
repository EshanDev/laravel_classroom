<template>
  <div id="classroom_home" class="classroom-container">
    <div class="grid-container">
      <div class="grid-item profile shadow-sm">
        <div id="profile_content" class="flex-container">
          <h4 class="text-header">โปรไฟล์ผู้ใช้งาน</h4>
          <div class="img-profile">
            <img :src="'/images/profiles/original.jpg'" alt="user img" class="avatar img-fluid" />
          </div>
          <div class="user-info">
            <p class="name">ธีรพงษ์ บัวงาม</p>
            <p class="id">User001</p>
            <p class="student-code">5912420009</p>
          </div>
          <router-link :to="{name: 'edit-profile'}" class="btn btn-primary">แก้ไขโปรไฟล์</router-link>
        </div>
      </div>
      <div class="grid-item information">
        <Chart />
      </div>
      <div class="grid-item list">list</div>
    </div>
  </div>
</template>

<script>
import Chart from "./Chart";
export default {
  name: "home",
  components: { Chart },
};
</script>
