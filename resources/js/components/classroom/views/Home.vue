<template>
  <div id="classroom_home" class="classroom-container">
    <div class="grid-container">
      <div class="grid-item profile shadow-sm">
        <div id="profile_content" class="d-flex justify-content-center">
          <h4 class="text-center">โปรไฟล์ผู้ใช้งาน</h4>
          <div class="img-profile">
            <img :src="'/images/profiles/original.jpg'" alt="user img" class="avatar" />
          </div>
          <div class="user-info">
            <p class="name">ธีรพงษ์ บัวงาม</p>
            <p class="id">User001</p>
            <p class="student-code">5912420009</p>
          </div>
          <button class="btn btn-primary">แก้ไขโปรไฟล์</button>
        </div>
      </div>
      <div class="grid-item information">
        <canvas id="myChart" width="400" height="400"></canvas>
      </div>
      <div class="grid-item list">list</div>
    </div>
  </div>
</template>

